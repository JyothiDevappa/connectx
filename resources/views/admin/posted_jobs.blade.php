@extends('admin.layout')

@section('title', 'Manage Jobs — ConnectX Admin')

@section('content')
<main class="main">
  <div class="topbar">
    <div>
      <h1 id="pageTitle">Manage Job Postings</h1>
      <p id="pageSubtitle">Create, edit, and publish job vacancies for careers and internships.</p>
    </div>
    <div style="margin-left: auto; margin-right: 14px;">
      <a href="{{ route('admin.posted-jobs.create-page') }}" style="background:#0c3a30; color:#fff; border-radius:8px; padding:10px 18px; font-weight:700; cursor:pointer; display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Add New Job
      </a>
    </div>
    <div class="search-box">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <input type="text" id="searchInput" placeholder="Search jobs by title or department…">
    </div>
  </div>

  <div class="stats-row" id="statsRow"></div>

  <div class="filter-bar" id="filterBar" style="display:flex; gap:12px; align-items:center;">
    <div class="type-chips" id="typeChips"></div>
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
      <h3>No job postings match these filters</h3>
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
let activeType = 'all';
let DATA = { posted_jobs: @json($postedJobs) };

const SECTION_CONFIG = {
  posted_jobs: {
    title: "Manage Job Postings",
    subtitle: "Create, edit, and publish job vacancies for careers and internships.",
    statusOptions: ["active", "closed", "draft"],
    statusLabels: { active: "Active", closed: "Closed", draft: "Draft" },
    typeField: "category",
    typeValues: ["career", "internship"],
    columns: [
      { key:"title", label:"Job Title & Department" },
      { key:"category", label:"Type" },
      { key:"location", label:"Location" },
      { key:"work_mode", label:"Work Mode" },
      { key:"submitted", label:"Created Date" },
      { key:"status", label:"Status" },
      { key:"action", label:"Actions" }
    ],
    stats: [
      { label:"Total Vacancies", fn: d => d.length },
      { label:"Active Listings", fn: d => d.filter(x=>x.status==='active').length },
      { label:"Careers", fn: d => d.filter(x=>x.category==='career').length },
      { label:"Internships", fn: d => d.filter(x=>x.category==='internship').length }
    ]
  }
};

function statusClass(s){
  if(s==='active'||s==='published') return 'confirmed';
  if(s==='closed') return 'declined';
  return 'pending';
}

function fmtDate(ds){
  if(!ds) return '—';
  const d = new Date(ds);
  return isNaN(d)?'—':d.toLocaleDateString('en-GB',{day:'2-digit',month:'short',year:'numeric'});
}

function getFiltered(){
  const search = document.getElementById('searchInput').value.trim().toLowerCase();
  const status = document.getElementById('statusFilter').value;
  return DATA.posted_jobs.filter(d => {
    if(activeType !== 'all' && d.category !== activeType) return false;
    if(status !== 'all' && d.status !== status) return false;
    if(search) {
      const matchTitle = d.title ? d.title.toLowerCase().includes(search) : false;
      const matchDept = d.department ? d.department.toLowerCase().includes(search) : false;
      if (!(matchTitle || matchDept)) return false;
    }
    return true;
  }).sort((a,b) => new Date(b.created_at || b.submitted) - new Date(a.created_at || a.submitted));
}

function renderStats(){
  const cfg = SECTION_CONFIG.posted_jobs;
  const data = DATA.posted_jobs;
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

function renderTypeChips(){
  const chips = document.getElementById('typeChips');
  chips.innerHTML = `<button class="type-chip active" data-type="all">All Types</button>
    <button class="type-chip" data-type="career">Careers</button>
    <button class="type-chip" data-type="internship">Internships</button>`;
  chips.querySelectorAll('.type-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      chips.querySelectorAll('.type-chip').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      activeType = chip.dataset.type;
      currentPage = 1;
      renderTable();
    });
  });
}

function renderStatusFilter(){
  const cfg = SECTION_CONFIG.posted_jobs;
  const sel = document.getElementById('statusFilter');
  sel.innerHTML = `<option value="all">All Statuses</option>` +
    cfg.statusOptions.map(s => `<option value="${s}">${cfg.statusLabels[s]}</option>`).join('');
}

function renderCell(col, d){
  switch(col.key){
    case 'title':
      return `<td><div class="cell-primary">${d.title || ''}</div><div class="cell-secondary">${d.department || ''}</div></td>`;
    case 'category':
      return `<td><span class="badge ${d.category==='career'?'badge-gold':'badge-platinum'}" style="text-transform:capitalize;">${d.category}</span></td>`;
    case 'submitted':
      return `<td class="cell-meta">${fmtDate(d.created_at || d.submitted)}</td>`;
    case 'status':
      const cfg = SECTION_CONFIG.posted_jobs;
      return `<td>
        <select class="status-select ${statusClass(d.status)}" data-id="${d.id}">
          ${cfg.statusOptions.map(s => `<option value="${s}" ${s===d.status?'selected':''}>${cfg.statusLabels[s]}</option>`).join('')}
        </select>
      </td>`;
    case 'action':
      return `<td>
        <div style="display:flex; gap:8px; align-items:center;">
          <a href="/${d.category}/${d.slug}" target="_blank" class="view-btn" title="View on site" style="display:inline-flex; align-items:center; justify-content:center; text-decoration:none;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          </a>
          <a href="/admin/posted-jobs/edit/${d.id}" class="view-btn" title="Edit job" style="background:#0c3a30; color:#fff; border-color:#0c3a30; display:inline-flex; align-items:center; justify-content:center; text-decoration:none;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 113 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
          </a>
        </div>
      </td>`;
    default:
      return `<td>${d[col.key]||'—'}</td>`;
  }
}

function renderTable(){
  const cfg = SECTION_CONFIG.posted_jobs;
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
      const item = DATA.posted_jobs.find(x => x.id === idVal);
      if(item){
        item.status = this.value;
        this.className = `status-select ${statusClass(this.value)}`;
        renderStats();
        await fetch(`/admin/api/posted-jobs/${idVal}`, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          body: JSON.stringify({ status: item.status, title: item.title, category: item.category, department: item.department, location: item.location, work_mode: item.work_mode, experience: item.experience, duration: item.duration, skills: item.skills, tagline: item.tagline, content: item.content })
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
document.getElementById('statusFilter').addEventListener('change', () => { currentPage = 1; renderTable(); });
document.getElementById('clearFilters').onclick = () => {
  document.getElementById('searchInput').value = '';
  document.getElementById('statusFilter').value = 'all';
  activeType = 'all';
  renderTypeChips();
  currentPage = 1;
  renderTable();
};

document.addEventListener('DOMContentLoaded', async () => {
  try {
    const res = await fetch("{{ route('admin.api.posted-jobs') }}");
    if(res.ok) { DATA.posted_jobs = await res.json(); }
  } catch(e){}
  renderStats();
  renderTypeChips();
  renderStatusFilter();
  renderTable();
});
</script>
@endpush
