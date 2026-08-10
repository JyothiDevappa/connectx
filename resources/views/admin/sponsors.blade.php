@extends('admin.layout')

@section('title', 'Sponsors — ConnectX Admin')

@section('content')
<main class="main">
  <div class="topbar">
    <div>
      <h1 id="pageTitle">Sponsors</h1>
      <p id="pageSubtitle">Manage sponsorship inquiries, tier details, and partnership status.</p>
    </div>
    <div class="search-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <input type="text" id="searchInput" placeholder="Search sponsors…">
    </div>
  </div>

  <div class="stats-row" id="statsRow"></div>

  <div class="filter-bar" id="filterBar" style="display:flex; gap:12px; align-items:center;">
    <select id="levelFilter" style="font-family:inherit; font-size:13.5px; border:1px solid var(--border); border-radius:8px; padding:10px 14px; background:var(--white); color:var(--ink); outline:none;">
      <option value="all">All Sponsorship Levels</option>
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
      <h3>No sponsor entries match these filters</h3>
      <p>Try a different search term or clear your filters.</p>
      <button id="emptyClearBtn">Clear filters</button>
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
        <h3 id="dName">Sponsor Details</h3>
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
let activeType = 'all';
let DATA = { sponsors: @json($sponsors) };

const SECTION_CONFIG = {
  sponsors: {
    title: "Sponsors",
    subtitle: "Manage sponsorship inquiries, tier details, and partnership status.",
    statusOptions: ["pending", "confirmed", "declined"],
    statusLabels: { pending: "Pending Review", confirmed: "Confirmed", declined: "Declined" },
    typeField: "sponsorship_level",
    typeValues: [],
    columns: [
      { key:"person", label:"Contact Name & Email" },
      { key:"company", label:"Company & Title" },
      { key:"phone", label:"Phone" },
      { key:"sponsorship_level", label:"Sponsorship Level" },
      { key:"submitted", label:"Submitted Date" },
      { key:"status", label:"Status" },
      { key:"action", label:"Actions" }
    ],
    stats: [
      { label:"Total Sponsors", fn: d => d.length },
      { label:"Confirmed", fn: d => d.filter(x=>x.status==='confirmed').length },
      { label:"Pending Review", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Declined", fn: d => d.filter(x=>x.status==='declined').length }
    ]
  }
};

function statusClass(s){
  if(s==='approved'||s==='confirmed') return 'confirmed';
  if(s==='declined'||s==='rejected') return 'declined';
  return 'pending';
}

function levelBadgeClass(lvl){
  if(!lvl) return 'badge-platinum';
  const l = lvl.toLowerCase();
  if(l.includes('title')) return 'badge-title';
  if(l.includes('platinum')) return 'badge-platinum';
  if(l.includes('gold')) return 'badge-gold';
  if(l.includes('silver')) return 'badge-silver';
  return 'badge-bronze';
}

function fmtDate(ds){
  if(!ds) return '—';
  const d = new Date(ds);
  return isNaN(d)?'—':d.toLocaleDateString('en-GB',{day:'2-digit',month:'short',year:'numeric'});
}

function getFiltered(){
  const search = document.getElementById('searchInput').value.trim().toLowerCase();
  const status = document.getElementById('statusFilter').value;
  return DATA.sponsors.filter(d => {
    if(activeType !== 'all' && d.sponsorship_level !== activeType) return false;
    if(status !== 'all' && d.status !== status) return false;
    if(search) {
      const matchName = d.name ? d.name.toLowerCase().includes(search) : false;
      const matchEmail = d.email ? d.email.toLowerCase().includes(search) : false;
      const matchComp = d.company ? d.company.toLowerCase().includes(search) : false;
      if (!(matchName || matchEmail || matchComp)) return false;
    }
    return true;
  }).sort((a,b) => new Date(b.submitted) - new Date(a.submitted));
}

function renderStats(){
  const cfg = SECTION_CONFIG.sponsors;
  const data = DATA.sponsors;
  const STAT_ICONS = [
    `<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/>`,
    `<path d="M20 6L9 17l-5-5"/>`,
    `<circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/>`,
    `<circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 10-16 0"/>`
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

function renderLevelFilter(){
  const sel = document.getElementById('levelFilter');
  const values = [...new Set(DATA.sponsors.map(d => d.sponsorship_level))].filter(Boolean);
  sel.innerHTML = `<option value="all">All Sponsorship Levels</option>` +
    values.map(v => `<option value="${v}">${v}</option>`).join('');
  sel.value = activeType;
}

function renderStatusFilter(){
  const cfg = SECTION_CONFIG.sponsors;
  const sel = document.getElementById('statusFilter');
  sel.innerHTML = `<option value="all">All Statuses</option>` +
    cfg.statusOptions.map(s => `<option value="${s}">${cfg.statusLabels[s]}</option>`).join('');
}

function renderCell(col, d){
  switch(col.key){
    case 'person':
      return `<td><div class="cell-primary">${d.name}</div><div class="cell-secondary">${d.email}</div></td>`;
    case 'company':
      return `<td><div class="cell-primary">${d.company||'—'}</div><div class="cell-secondary">${d.designation||''}</div></td>`;
    case 'sponsorship_level':
      return `<td><span class="badge ${levelBadgeClass(d.sponsorship_level)}">${d.sponsorship_level}</span></td>`;
    case 'submitted':
      return `<td class="cell-meta">${fmtDate(d.submitted)}</td>`;
    case 'status':
      const cfg = SECTION_CONFIG.sponsors;
      return `<td>
        <select class="status-select ${statusClass(d.status)}" data-id="${d.id}">
          ${cfg.statusOptions.map(s => `<option value="${s}" ${s===d.status?'selected':''}>${cfg.statusLabels[s]}</option>`).join('')}
        </select>
      </td>`;
    case 'action':
      return `<td>
        <button class="view-btn" data-id="${d.id}" title="View details">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </td>`;
    default:
      return `<td>${d[col.key]||'—'}</td>`;
  }
}

function renderTable(){
  const cfg = SECTION_CONFIG.sponsors;
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
      const item = DATA.sponsors.find(x => x.id === idVal);
      if(item){
        item.status = this.value;
        this.className = `status-select ${statusClass(this.value)}`;
        renderStats();
        await fetch(`/admin/api/sponsors/${idVal}`, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          body: JSON.stringify({ status: item.status, notes: item.notes })
        });
      }
    });
  });

  tbody.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      e.stopPropagation();
      openDrawer(parseInt(btn.dataset.id));
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

function sponsorBody(d){
  return `
    <div class="dsection">
      <h4>Company & Contact Info</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Company Name</span><span class="fv">${d.company}</span></div>
        <div class="dfield"><span class="fl">Contact Person</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Designation</span><span class="fv">${d.designation}</span></div>
        <div class="dfield"><span class="fl">Email Address</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone Number</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
        <div class="dfield full"><span class="fl">Sponsorship Tier</span><span class="fv"><span class="badge ${levelBadgeClass(d.sponsorship_level)}">${d.sponsorship_level}</span></span></div>
      </div>
    </div>
    <div class="dsection">
      <h4>Update Status & Notes</h4>
      <div class="dgrid" style="grid-template-columns:1fr; gap:12px;">
        <div class="dfield">
          <span class="fl">Application Status</span>
          <select id="dStatusSelect" class="status-select ${statusClass(d.status)}" style="width:100%;">
            <option value="pending" ${d.status==='pending'?'selected':''}>Pending Review</option>
            <option value="confirmed" ${d.status==='confirmed'?'selected':''}>Confirmed</option>
            <option value="declined" ${d.status==='declined'?'selected':''}>Declined</option>
          </select>
        </div>
        <div class="dfield">
          <span class="fl">Admin Notes</span>
          <textarea id="dNotes" style="width:100%; border:1px solid var(--border); border-radius:8px; padding:10px; font-size:13px; min-height:80px;">${d.notes||''}</textarea>
        </div>
        <button id="dSaveBtn" style="background:#0c3a30; color:#fff; border:none; padding:10px 18px; border-radius:8px; font-weight:700; cursor:pointer; align-self:flex-start;">
          Save Status
        </button>
      </div>
    </div>
  `;
}

function openDrawer(id){
  const d = DATA.sponsors.find(x => x.id === id);
  if(!d) return;

  document.getElementById('dName').textContent = d.name;
  document.getElementById('dSub').textContent = d.email;
  document.getElementById('dBadges').innerHTML = `<span class="badge ${levelBadgeClass(d.sponsorship_level)}">${d.sponsorship_level} Sponsor</span>`;
  document.getElementById('drawerBody').innerHTML = sponsorBody(d);

  const saveBtn = document.getElementById('dSaveBtn');
  if(saveBtn){
    saveBtn.onclick = async () => {
      d.status = document.getElementById('dStatusSelect').value;
      d.notes = document.getElementById('dNotes').value;
      renderStats();
      renderTable();
      await fetch(`/admin/api/sponsors/${id}`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        body: JSON.stringify({ status: d.status, notes: d.notes })
      });
    };
  }

  document.getElementById('drawerOverlay').classList.add('active');
  document.getElementById('drawer').classList.add('active');
}

function closeDrawer(){
  document.getElementById('drawerOverlay').classList.remove('active');
  document.getElementById('drawer').classList.remove('active');
}

document.getElementById('drawerCloseBtn').onclick = closeDrawer;
document.getElementById('drawerOverlay').onclick = closeDrawer;

document.getElementById('searchInput').addEventListener('input', () => { currentPage = 1; renderTable(); });
document.getElementById('levelFilter').addEventListener('change', (e) => { activeType = e.target.value; currentPage = 1; renderTable(); });
document.getElementById('statusFilter').addEventListener('change', () => { currentPage = 1; renderTable(); });
document.getElementById('clearFilters').onclick = () => {
  document.getElementById('searchInput').value = '';
  document.getElementById('levelFilter').value = 'all';
  document.getElementById('statusFilter').value = 'all';
  activeType = 'all';
  renderLevelFilter();
  currentPage = 1;
  renderTable();
};

document.addEventListener('DOMContentLoaded', async () => {
  try {
    const res = await fetch("{{ route('admin.api.sponsors') }}");
    if(res.ok) { DATA.sponsors = await res.json(); }
  } catch(e){}
  renderStats();
  renderLevelFilter();
  renderStatusFilter();
  renderTable();
});
</script>
@endpush
