@extends('admin.layout')

@section('title', 'Insights CMS — ConnectX Admin')

@section('content')
<main class="main">
  <div class="topbar">
    <div>
      <h1 id="pageTitle">Blog & Insights CMS</h1>
      <p id="pageSubtitle">Create, edit, and manage articles published on the Young Chanakya X Insights section.</p>
    </div>
    <div style="margin-left: auto; margin-right: 14px; gap: 10px; align-items: center; display: flex;">
      <a href="{{ route('admin.posts.create-page') }}" style="background:#0c3a30; color:#fff; border-radius:8px; padding:10px 18px; font-weight:700; cursor:pointer; display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Create Post
      </a>
    </div>
    <div class="search-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <input type="text" id="searchInput" placeholder="Search insights by title…">
    </div>
  </div>

  <div class="stats-row" id="statsRow"></div>

  <div class="filter-bar" id="filterBar" style="display:flex; gap:12px; align-items:center;">
    <select id="categoryFilter" style="font-family:inherit; font-size:13.5px; border:1px solid var(--border); border-radius:8px; padding:10px 14px; background:var(--white); color:var(--ink); outline:none;">
      <option value="all">All Categories</option>
    </select>
    <select id="statusFilter">
      <option value="all">All Statuses</option>
    </select>
    <button class="clear-btn" id="clearFilters">Clear filters</button>
  </div>

  <div class="table-card" id="tableCard">
    <table>
      <thead id="tableHead"><tr></tr></thead>
      <tbody id="tableBody"></tbody>
    </table>
    <div class="empty-state" id="emptyState" style="display:none;">
      <h3>No insights articles match these filters</h3>
      <p>Try a different search term or clear your filters.</p>
      <button id="emptyClearBtn">Clear filters</button>
    </div>
  </div>

  <div class="pagination" id="pagination"></div>
</main>
@endsection

@push('scripts')
<script>
const PAGE_SIZE = 10;
let currentPage = 1;
let DATA = {
  posts: @json($posts),
  categories: @json($categories)
};

const SECTION_CONFIG = {
  posts: {
    title: "Blog & Insights CMS",
    subtitle: "Create, edit, and manage articles published on the Young Chanakya X Insights section.",
    statusOptions: ["published", "draft"],
    statusLabels: { published: "Published", draft: "Draft" },
    typeField: "category",
    get typeValues() {
      return (DATA && DATA.categories && DATA.categories.length)
        ? DATA.categories.map(c => c.name)
        : ["Storytelling", "Networking", "Learning", "Personal Branding", "Collaboration", "Career Growth", "Entrepreneurship"];
    },
    columns: [
      { key:"title", label:"Insights Title" },
      { key:"category", label:"Category" },
      { key:"read_time", label:"Read Time" },
      { key:"submitted", label:"Date Created" },
      { key:"status", label:"Status" },
      { key:"action", label:"Actions" }
    ],
    stats: [
      { label:"Total Articles", fn: d => d.length },
      { label:"Published", fn: d => d.filter(x=>x.status==='published').length },
      { label:"Drafts", fn: d => d.filter(x=>x.status==='draft').length }
    ]
  }
};

function statusClass(s){
  if(s==='published'||s==='active') return 'confirmed';
  return 'pending';
}

function fmtDate(ds){
  if(!ds) return '—';
  const d = new Date(ds);
  return isNaN(d)?'—':d.toLocaleDateString('en-GB',{day:'2-digit',month:'short',year:'numeric'});
}

function getFiltered(){
  const search = document.getElementById('searchInput').value.trim().toLowerCase();
  const categoryVal = document.getElementById('categoryFilter').value;
  const status = document.getElementById('statusFilter').value;
  return DATA.posts.filter(d => {
    if(categoryVal !== 'all' && d.category !== categoryVal) return false;
    if(status !== 'all' && d.status !== status) return false;
    if(search) {
      const matchTitle = d.title ? d.title.toLowerCase().includes(search) : false;
      if (!matchTitle) return false;
    }
    return true;
  }).sort((a,b) => new Date(b.submitted) - new Date(a.submitted));
}

function renderStats(){
  const cfg = SECTION_CONFIG.posts;
  const data = DATA.posts;
  const STAT_ICONS = [
    `<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/>`,
    `<path d="M20 6L9 17l-5-5"/>`,
    `<circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/>`
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

function renderCategorySelect(){
  const cfg = SECTION_CONFIG.posts;
  const categoryFilter = document.getElementById('categoryFilter');
  categoryFilter.innerHTML = `<option value="all">All Categories</option>` +
    cfg.typeValues.map(v => `<option value="${v}">${v}</option>`).join('');
}

function renderStatusFilter(){
  const cfg = SECTION_CONFIG.posts;
  const sel = document.getElementById('statusFilter');
  sel.innerHTML = `<option value="all">All Statuses</option>` +
    cfg.statusOptions.map(s => `<option value="${s}">${cfg.statusLabels[s]}</option>`).join('');
}

function renderCell(col, d){
  switch(col.key){
    case 'title':
      return `<td><div class="cell-primary">${d.title || ''}</div><div class="cell-secondary">${d.author_name || ''}</div></td>`;
    case 'category':
      return `<td><span class="badge badge-platinum">${d.category}</span></td>`;
    case 'submitted':
      return `<td class="cell-meta">${fmtDate(d.submitted)}</td>`;
    case 'status':
      const cfg = SECTION_CONFIG.posts;
      return `<td>
        <select class="status-select ${statusClass(d.status)}" data-id="${d.id}">
          ${cfg.statusOptions.map(s => `<option value="${s}" ${s===d.status?'selected':''}>${cfg.statusLabels[s]}</option>`).join('')}
        </select>
      </td>`;
    case 'action':
      return `<td>
        <div style="display:flex; gap:8px; align-items:center;">
          <a href="/insights/${d.slug}" target="_blank" class="view-btn" title="View on site" style="display:inline-flex; align-items:center; justify-content:center; text-decoration:none;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          </a>
          <a href="/admin/posts/edit/${d.id}" class="view-btn" title="Edit article" style="background:#0c3a30; color:#fff; border-color:#0c3a30; display:inline-flex; align-items:center; justify-content:center; text-decoration:none;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 113 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
          </a>
        </div>
      </td>`;
    default:
      return `<td>${d[col.key]||'—'}</td>`;
  }
}

function renderTable(){
  const cfg = SECTION_CONFIG.posts;
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

  tbody.querySelectorAll('.status-select').forEach(sel => {
    sel.addEventListener('change', async function(e){
      e.stopPropagation();
      const idVal = parseInt(this.dataset.id);
      const item = DATA.posts.find(x => x.id === idVal);
      if(item){
        item.status = this.value;
        this.className = `status-select ${statusClass(this.value)}`;
        renderStats();
        await fetch(`/admin/api/posts/${idVal}`, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          body: JSON.stringify({ status: item.status, title: item.title, category: item.category, read_time: item.read_time, content: item.content })
        });
      }
    });
  });

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

document.getElementById('searchInput').addEventListener('input', () => { currentPage = 1; renderTable(); });
document.getElementById('categoryFilter').addEventListener('change', () => { currentPage = 1; renderTable(); });
document.getElementById('statusFilter').addEventListener('change', () => { currentPage = 1; renderTable(); });
document.getElementById('clearFilters').onclick = () => {
  document.getElementById('searchInput').value = '';
  document.getElementById('categoryFilter').value = 'all';
  document.getElementById('statusFilter').value = 'all';
  currentPage = 1;
  renderTable();
};

document.addEventListener('DOMContentLoaded', async () => {
  try {
    const resCat = await fetch("{{ route('admin.api.categories') }}");
    if(resCat.ok) { DATA.categories = await resCat.json(); }
    const resP = await fetch("{{ route('admin.api.posts') }}");
    if(resP.ok) { DATA.posts = await resP.json(); }
  } catch(e){}
  renderStats();
  renderCategorySelect();
  renderStatusFilter();
  renderTable();
});
</script>
@endpush
