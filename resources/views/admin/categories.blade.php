@extends('admin.layout')

@section('title', 'Insights Categories — ConnectX Admin')

@section('content')
<main class="main">
  <div class="topbar">
    <div>
      <h1 id="pageTitle">Insights Categories</h1>
      <p id="pageSubtitle">Manage dynamic categories available for insights articles and filtering.</p>
    </div>
    <div style="margin-left: auto; margin-right: 14px;">
      <button id="openCreateCatBtn" style="background:#0c3a30; color:#fff; border-radius:8px; padding:10px 18px; font-weight:700; cursor:pointer; display:inline-flex; align-items:center; gap:8px; border:none;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Create Category
      </button>
    </div>
    <div class="search-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <input type="text" id="searchInput" placeholder="Search categories…">
    </div>
  </div>

  <div class="stats-row" id="statsRow"></div>

  <div class="table-card" id="tableCard">
    <table>
      <thead id="tableHead"><tr></tr></thead>
      <tbody id="tableBody"></tbody>
    </table>
    <div class="empty-state" id="emptyState" style="display:none;">
      <h3>No categories match these filters</h3>
      <p>Try a different search term.</p>
    </div>
  </div>

  <div class="pagination" id="pagination"></div>
</main>

{{-- Detail Drawer --}}
<div class="drawer-overlay" id="drawerOverlay"></div>
<div class="drawer" id="drawer">
  <div class="drawer-head">
    <div class="dh-top">
      <div>
        <h3 id="dName">Category</h3>
        <p id="dSub"></p>
      </div>
      <button class="drawer-close" id="drawerCloseBtn">&times;</button>
    </div>
    <div class="dh-badges" id="dBadges"></div>
  </div>
  <div class="drawer-body" id="drawerBody"></div>
</div>
@endsection

@push('scripts')
<script>
const PAGE_SIZE = 10;
let currentPage = 1;
let DATA = { categories: @json($categories) };
let activeDrawerItem = null;

const SECTION_CONFIG = {
  categories: {
    title: "Insights Categories",
    subtitle: "Manage dynamic categories available for insights articles and filtering.",
    columns: [
      { key:"name", label:"Category Name" },
      { key:"slug", label:"Slug" },
      { key:"submitted", label:"Created Date" },
      { key:"action", label:"Actions" }
    ],
    stats: [
      { label:"Total Categories", fn: d => d.length }
    ]
  }
};

function fmtDate(ds){
  if(!ds) return '—';
  const d = new Date(ds);
  return isNaN(d)?'—':d.toLocaleDateString('en-GB',{day:'2-digit',month:'short',year:'numeric'});
}

function getFiltered(){
  const search = document.getElementById('searchInput').value.trim().toLowerCase();
  return DATA.categories.filter(d => {
    if(search) {
      const matchName = d.name ? d.name.toLowerCase().includes(search) : false;
      const matchSlug = d.slug ? d.slug.toLowerCase().includes(search) : false;
      if (!(matchName || matchSlug)) return false;
    }
    return true;
  }).sort((a,b) => (a.name || '').localeCompare(b.name || ''));
}

function renderStats(){
  const cfg = SECTION_CONFIG.categories;
  const data = DATA.categories;
  const STAT_ICONS = [
    `<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/>`
  ];
  document.getElementById('statsRow').innerHTML = cfg.stats.map((s,i) => `
    <div class="stat-card">
      <div class="sc-top">
        <span class="sc-label">${s.label}</span>
        <span class="sc-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">${STAT_ICONS[i]}</svg></span>
      </div>
      <div class="sc-value">${s.fn(data)}</div>
      <div class="sc-sub">&nbsp;</div>
    </div>
  `).join('');
}

function renderCell(col, d){
  switch(col.key){
    case 'name':
      return `<td><div class="cell-primary" style="font-weight:700; color:#0c3a30;">${d.name || ''}</div></td>`;
    case 'slug':
      return `<td><div class="cell-secondary" style="font-family:monospace;">${d.slug || ''}</div></td>`;
    case 'submitted':
      return `<td class="cell-meta">${fmtDate(d.submitted)}</td>`;
    case 'action':
      return `<td>
        <div style="display:flex; gap:8px; align-items:center;">
          <button type="button" onclick="openCatModalEdit(${d.id})" class="view-btn" title="Edit category" style="background:#0c3a30; color:#fff; border-color:#0c3a30; display:inline-flex; align-items:center; justify-content:center;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 113 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
          </button>
          <button type="button" onclick="deleteCategory(${d.id})" class="view-btn" title="Delete category" style="background:#dc3545; color:#fff; border-color:#dc3545; display:inline-flex; align-items:center; justify-content:center;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
          </button>
        </div>
      </td>`;
    default:
      return `<td>${d[col.key]||'—'}</td>`;
  }
}

function renderTable(){
  const cfg = SECTION_CONFIG.categories;
  const filtered = getFiltered();
  const totalPages = Math.max(1, Math.ceil(filtered.length / PAGE_SIZE));
  currentPage = Math.min(currentPage, totalPages);
  const start = (currentPage - 1) * PAGE_SIZE;
  const pageItems = filtered.slice(start, start + PAGE_SIZE);

  document.getElementById('tableHead').innerHTML = `<tr>${cfg.columns.map(c => `<th>${c.label}</th>`).join('')}</tr>`;
  const tbody = document.getElementById('tableBody');
  const empty = document.getElementById('emptyState');

  if(filtered.length === 0){
    tbody.innerHTML = '';
    empty.style.display = 'block';
  } else {
    empty.style.display = 'none';
    tbody.innerHTML = pageItems.map(d => `
      <tr data-id="${d.id}">
        ${cfg.columns.map(col => renderCell(col, d)).join('')}
      </tr>
    `).join('');
  }

  document.getElementById('pagination').innerHTML = `
    <span class="p-info">Showing ${filtered.length===0?0:start+1}–${Math.min(start+PAGE_SIZE, filtered.length)} of ${filtered.length} entries</span>
    <div class="p-controls">
      <button class="p-btn" id="prevPage" ${currentPage===1?'disabled':''}>&#8592;</button>
      ${Array.from({length: totalPages}, (_,i) => i+1).map(p => `<button class="p-btn ${p===currentPage?'active':''}" data-page="${p}">${p}</button>`).join('')}
      <button class="p-btn" id="nextPage" ${currentPage===totalPages?'disabled':''}>&#8594;</button>
    </div>
  `;

  const prevBtn = document.getElementById('prevPage');
  const nextBtn = document.getElementById('nextPage');
  if(prevBtn) prevBtn.onclick = () => { if(currentPage>1){ currentPage--; renderTable(); } };
  if(nextBtn) nextBtn.onclick = () => { if(currentPage<totalPages){ currentPage++; renderTable(); } };
  document.querySelectorAll('.p-controls .p-btn[data-page]').forEach(btn => {
    btn.onclick = () => { currentPage = parseInt(btn.dataset.page); renderTable(); };
  });
}

function categoryBody(d){
  return `
    <form id="catDrawerForm" onsubmit="event.preventDefault(); saveCatDrawerData();">
      <div class="dsection">
        <h4>Category Information</h4>
        <div class="dgrid" style="display:grid; grid-template-columns:1fr; gap:14px;">
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Category Name *</span>
            <input type="text" id="catDrawer-name" value="${d.name || ''}" required placeholder="e.g. Technology" style="border:1px solid #ccc; padding:10px 14px; border-radius:8px; font-size:13.5px;">
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Category Slug (optional - auto-generated if left blank)</span>
            <input type="text" id="catDrawer-slug" value="${d.slug || ''}" placeholder="e.g. technology" style="border:1px solid #ccc; padding:10px 14px; border-radius:8px; font-size:13.5px;">
          </div>
        </div>
      </div>

      <div style="display:flex; gap:12px; margin-top:24px; padding-top:14px; border-top:1px solid #eee;">
        <button type="submit" class="status-select confirmed" style="background:#0c3a30; color:#fff; border:none; padding:12px 24px; border-radius:8px; font-weight:700; cursor:pointer;">
          Save Category
        </button>
      </div>
    </form>
  `;
}

function openDrawer(id){
  let d;
  const numId = (id !== null && id !== undefined && id !== '') ? String(id) : '0';
  if (numId === '0') {
    d = { id: null, name: '', slug: '' };
  } else {
    d = DATA.categories.find(x => String(x.id) === numId);
  }
  if(!d) return;
  activeDrawerItem = d;

  document.getElementById('dName').textContent = d.id ? 'Edit Category' : 'Create Category';
  document.getElementById('dSub').textContent = d.name || 'New Category';
  document.getElementById('dBadges').innerHTML = `<span class="badge badge-platinum">Category</span>`;
  document.getElementById('drawerBody').innerHTML = categoryBody(d);

  document.getElementById('drawerOverlay').classList.add('active');
  document.getElementById('drawer').classList.add('active');
}

function closeDrawer(){
  document.getElementById('drawerOverlay').classList.remove('active');
  document.getElementById('drawer').classList.remove('active');
}

window.openCatModalEdit = function(id) {
  openDrawer(id);
};

const openCreateCatBtn = document.getElementById('openCreateCatBtn');
if (openCreateCatBtn) {
  openCreateCatBtn.addEventListener('click', () => {
    openDrawer(0);
  });
}

async function saveCatDrawerData() {
  const item = activeDrawerItem;
  const id = item ? item.id : null;
  const name = document.getElementById('catDrawer-name').value.trim();
  const slug = document.getElementById('catDrawer-slug') ? document.getElementById('catDrawer-slug').value.trim() : '';
  if (!name) return;

  const url = id ? `/admin/api/categories/${id}` : '/admin/api/categories';
  try {
    const res = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ name, slug })
    });
    if (res.ok) {
      const resData = await res.json();
      if (id) {
        const index = DATA.categories.findIndex(c => c.id == id);
        if (index !== -1) DATA.categories[index] = resData.data;
      } else {
        DATA.categories.unshift(resData.data);
      }
      closeDrawer();
      renderStats();
      renderTable();
    } else {
      const err = await res.json();
      let msg = "The category is already existed";
      if (err.errors && err.errors.name) {
        msg = err.errors.name[0];
      } else if (err.errors && err.errors.slug) {
        msg = err.errors.slug[0];
      } else if (err.message && err.message.includes('unique')) {
        msg = "The category is already existed";
      } else if (err.message) {
        msg = err.message;
      }
      alert(msg);
    }
  } catch(err) {
    console.error(err);
    alert("The category is already existed");
  }
}

window.deleteCategory = async function(id) {
  if (!confirm("Are you sure you want to delete this category?")) return;
  try {
    const res = await fetch(`/admin/api/categories/${id}`, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'X-HTTP-Method-Override': 'DELETE'
      }
    });
    if (res.ok) {
      DATA.categories = DATA.categories.filter(c => c.id !== id);
      closeDrawer();
      renderStats();
      renderTable();
    } else {
      alert("Failed to delete category.");
    }
  } catch (e) {
    console.error(e);
  }
};

document.getElementById('drawerCloseBtn').onclick = closeDrawer;
document.getElementById('drawerOverlay').onclick = closeDrawer;

document.getElementById('searchInput').addEventListener('input', () => { currentPage = 1; renderTable(); });

document.addEventListener('DOMContentLoaded', async () => {
  try {
    const res = await fetch("{{ route('admin.api.categories') }}");
    if(res.ok) { DATA.categories = await res.json(); }
  } catch(e){}
  renderStats();
  renderTable();
});
</script>
@endpush
