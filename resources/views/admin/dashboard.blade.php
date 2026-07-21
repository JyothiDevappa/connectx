@php use Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard — ConnectX YCX</title>
  <meta name="description" content="Young Chanakya X Admin Dashboard — manage sponsers, partners, speakers, careers and internship submissions.">
  <link rel="icon" href="{{ asset('images/fav-icon/favicon.ico') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>
<body>

<div class="app-shell">

  {{-- ==================== SIDEBAR ==================== --}}
  <aside class="sidebar">
    {{-- Logo --}}
    <div class="sb-logo-wrap">
      <a href="{{ url('/') }}" title="Go to ConnectX site">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Young Chanakya X" class="sb-logo-img">
      </a>
      <span class="sb-badge">Admin Panel</span>
    </div>

    {{-- Navigation --}}
    <span class="sb-section-label">Overview</span>
    <nav class="sb-nav">
      <a href="{{ url('/admin/dashboard/overview') }}" class="nav-link" data-section="overview" id="nav-overview">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>
        Dashboard
      </a>

      <span class="sb-section-label" style="margin-top:8px">Applications</span>

      <a href="{{ url('/admin/dashboard/connectors') }}" class="nav-link" data-section="connectors" id="nav-connectors">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg>
        Connectors
        <span class="sb-count" id="sbCount-connectors">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/sponsers') }}" class="nav-link" data-section="sponsers" id="nav-sponsers">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        Sponsors
        <span class="sb-count" id="sbCount-sponsers">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/partners') }}" class="nav-link" data-section="partners" id="nav-partners">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
        Partners
        <span class="sb-count" id="sbCount-partners">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/speakers') }}" class="nav-link" data-section="speakers" id="nav-speakers">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
        Speakers
        <span class="sb-count" id="sbCount-speakers">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/careers') }}" class="nav-link" data-section="careers" id="nav-careers">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
        Careers
        <span class="sb-count" id="sbCount-careers">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/internships') }}" class="nav-link" data-section="internships" id="nav-internships">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/></svg>
        Internships
        <span class="sb-count" id="sbCount-internships">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/posted_jobs') }}" class="nav-link" data-section="posted_jobs" id="nav-posted_jobs">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        Manage Jobs
        <span class="sb-count" id="sbCount-posted_jobs">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/contacts') }}" class="nav-link" data-section="contacts" id="nav-contacts">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Contact Inquiries
        <span class="sb-count" id="sbCount-contacts">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/featured_guests') }}" class="nav-link" data-section="featured_guests" id="nav-featured_guests">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/><path d="M12 14v7M9 18l3 3 3-3"/></svg>
        Guest Features
        <span class="sb-count" id="sbCount-featured_guests">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/story_submissions') }}" class="nav-link" data-section="story_submissions" id="nav-story_submissions">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
        Story Talks
        <span class="sb-count" id="sbCount-story_submissions">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/posts') }}" class="nav-link" data-section="posts" id="nav-posts">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/><path d="M4 12h8m-8-4h12m-12 8h4"/></svg>
        Blog CMS
        <span class="sb-count" id="sbCount-posts">0</span>
      </a>
    </nav>

    {{-- Admin Profile --}}
    <div class="sb-admin">
      <span class="av">{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}</span>
      <div style="flex:1;min-width:0;">
        <div class="an">{{ Auth::user()->name ?? 'Admin' }}</div>
        <div class="ar">Super Admin</div>
      </div>
      <form method="POST" action="{{ route('admin.logout') }}" style="flex-shrink:0;">
        @csrf
        <button type="submit" title="Logout" style="width:30px;height:30px;border-radius:8px;background:rgba(255,250,244,0.08);color:rgba(255,250,244,0.5);display:flex;align-items:center;justify-content:center;border:none;cursor:pointer;transition:all .15s;" onmouseover="this.style.background='rgba(255,100,100,0.2)';this.style.color='#ff9090'" onmouseout="this.style.background='rgba(255,250,244,0.08)';this.style.color='rgba(255,250,244,0.5)'">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
        </button>
      </form>
    </div>
  </aside>

  {{-- ==================== MAIN CONTENT ==================== --}}
  <main class="main">

    {{-- Topbar --}}
    <div class="topbar">
      <div>
        <h1 id="pageTitle">Dashboard</h1>
        <p id="pageSubtitle">Welcome back, Sangeetha. Here's what's happening today.</p>
      </div>
      <div id="addJobContainer" style="display:none; margin-left: auto; margin-right: 14px;">
        <button id="addJobBtn" style="background:#0c3a30; color:#fff; border-radius:8px; padding:10px 18px; font-weight:700; cursor:pointer; display:flex; align-items:center; gap:8px; border:none;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Add New Job
        </button>
      </div>
      <div id="addPostContainer" style="display:none; margin-left: auto; margin-right: 14px;">
        <button id="addPostBtn" style="background:#0c3a30; color:#fff; border-radius:8px; padding:10px 18px; font-weight:700; cursor:pointer; display:flex; align-items:center; gap:8px; border:none;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Create Post
        </button>
      </div>
      <div class="search-box">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
        <input type="text" id="searchInput" placeholder="Search by name or email…">
      </div>
    </div>

    {{-- Stats row --}}
    <div class="stats-row" id="statsRow"></div>

    {{-- Overview panel --}}
    <div id="overviewPanel" style="display:none;">
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:14px;margin-top:10px;">
        <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px 20px;cursor:pointer;transition:box-shadow .2s;" onclick="switchSection('connectors')" class="overview-card">
          <div style="font-family:'Manrope',sans-serif;font-size:28px;font-weight:600;color:var(--ink);" id="ov-connectors">0</div>
          <div style="font-size:12.5px;font-weight:700;color:var(--text-soft);margin-top:4px;">Connector Applications</div>
        </div>
        <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px 20px;cursor:pointer;transition:box-shadow .2s;" onclick="switchSection('sponsers')" class="overview-card">
          <div style="font-family:'Manrope',sans-serif;font-size:28px;font-weight:600;color:var(--ink);" id="ov-sponsers">0</div>
          <div style="font-size:12.5px;font-weight:700;color:var(--text-soft);margin-top:4px;">sponser Applications</div>
        </div>
        <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px 20px;cursor:pointer;transition:box-shadow .2s;" onclick="switchSection('partners')" class="overview-card">
          <div style="font-family:'Manrope',sans-serif;font-size:28px;font-weight:600;color:var(--ink);" id="ov-partners">0</div>
          <div style="font-size:12.5px;font-weight:700;color:var(--text-soft);margin-top:4px;">Partner Applications</div>
        </div>
        <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px 20px;cursor:pointer;transition:box-shadow .2s;" onclick="switchSection('speakers')" class="overview-card">
          <div style="font-family:'Manrope',sans-serif;font-size:28px;font-weight:600;color:var(--ink);" id="ov-speakers">0</div>
          <div style="font-size:12.5px;font-weight:700;color:var(--text-soft);margin-top:4px;">Speaker Applications</div>
        </div>
        <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px 20px;cursor:pointer;transition:box-shadow .2s;" onclick="switchSection('careers')" class="overview-card">
          <div style="font-family:'Manrope',sans-serif;font-size:28px;font-weight:600;color:var(--ink);" id="ov-careers">0</div>
          <div style="font-size:12.5px;font-weight:700;color:var(--text-soft);margin-top:4px;">Career Applications</div>
        </div>
        <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:24px 20px;cursor:pointer;transition:box-shadow .2s;" onclick="switchSection('internships')" class="overview-card">
          <div style="font-family:'Manrope',sans-serif;font-size:28px;font-weight:600;color:var(--ink);" id="ov-internships">0</div>
          <div style="font-size:12.5px;font-weight:700;color:var(--text-soft);margin-top:4px;">Internship Applications</div>
        </div>
      </div>
    </div>

    {{-- Filter bar --}}
    <div class="filter-bar" id="filterBar" style="display:none; gap:12px; align-items:center;">
      <div class="type-chips" id="typeChips"></div>
      <select id="categoryFilter" style="display:none; font-family:inherit; font-size:13.5px; border:1px solid var(--border); border-radius:8px; padding:10px 14px; background:var(--white); color:var(--ink); outline:none;">
        <option value="all">All Categories</option>
      </select>
      <select id="statusFilter">
        <option value="all">All Statuses</option>
      </select>
      <button class="clear-btn" id="clearFilters">Clear filters</button>
    </div>

    {{-- Table --}}
    <div class="table-card" id="tableCard" style="display:none;">
      <table>
        <thead id="tableHead"><tr></tr></thead>
        <tbody id="tableBody"></tbody>
      </table>
      <div class="empty-state" id="emptyState" style="display:none;">
        <h3>No entries match these filters</h3>
        <p>Try a different search term or clear your filters.</p>
        <button id="emptyClearBtn">Clear filters</button>
      </div>
    </div>

    <div class="pagination" id="pagination"></div>

  </main>
</div>

{{-- ==================== DETAIL DRAWER ==================== --}}
<div class="drawer-overlay" id="drawerOverlay"></div>
<div class="drawer" id="drawer">
  <div class="drawer-head">
    <div class="dh-top">
      <div>
        <h2 id="dName">—</h2>
        <span class="dh-sub" id="dSub">—</span>
      </div>
      <button class="drawer-close" id="drawerCloseBtn">&#215;</button>
    </div>
    <div class="dh-badges" id="dBadges"></div>
  </div>
  <div class="drawer-body" id="drawerBody"></div>
</div>

<style>
  .overview-card:hover { box-shadow: 0 4px 20px rgba(12,58,48,0.12); transform: translateY(-2px); }
  .overview-card { transition: box-shadow .2s, transform .2s !important; }
</style>

<script>
/* =====================================================
   MOCK DATA
   ===================================================== */

const DATA = {

  sponsers: @json($sponsers),

  partners: @json($partners),

  speakers: @json($speakers),

  careers: @json($careers),

  internships: @json($internships),

  posted_jobs: @json($postedJobs),

  connectors: @json($connectors),

  contacts: @json($contacts),

  featured_guests: @json($featuredGuests),

  story_submissions: @json($storySubmissions),

  posts: @json($posts)
};


/* =====================================================
   SECTION CONFIGS  (what columns / stats / badges per section)
   ===================================================== */
const SECTION_CONFIG = {
  overview: {
    title: "Dashboard",
    subtitle: "Welcome back, Sangeetha. Here's what's happening today."
  },
  sponsers: {
    title: "sponser Applications",
    subtitle: "Companies and individuals who applied to sponser Young Chanakya X events.",
    statusOptions: ["confirmed","pending","declined"],
    statusLabels: { confirmed:"Confirmed", pending:"Pending", declined:"Declined" },
    typeField: "sponsership_level",
    typeValues: ["Platinum","Gold","Silver","Title"],
    liveApi: "{{ route('admin.api.sponsers') }}",
    updateApi: "{{ url('/admin/api/sponsers') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"company", label:"Company" },
      { key:"sponsership_level", label:"Level" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Applications", fn: d => d.length },
      { label:"Confirmed", fn: d => d.filter(x=>x.status==='confirmed').length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Declined", fn: d => d.filter(x=>x.status==='declined').length },
    ]
  },
  partners: {
    title: "Partner Applications",
    subtitle: "Organizations applying to partner with Young Chanakya X.",
    statusOptions: ["confirmed","pending","declined"],
    statusLabels: { confirmed:"Confirmed", pending:"Pending", declined:"Declined" },
    typeField: "partnership_type",
    typeValues: ["Strategic","Technology","Media"],
    liveApi: "{{ route('admin.api.partners') }}",
    updateApi: "{{ url('/admin/api/partners') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"company", label:"Company" },
      { key:"partnership_type", label:"Partnership Type" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Applications", fn: d => d.length },
      { label:"Confirmed", fn: d => d.filter(x=>x.status==='confirmed').length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Declined", fn: d => d.filter(x=>x.status==='declined').length },
    ]
  },
  speakers: {
    title: "Speaker Applications",
    subtitle: "Individuals who applied to speak at Young Chanakya X events.",
    statusOptions: ["confirmed","pending","declined"],
    statusLabels: { confirmed:"Confirmed", pending:"Pending", declined:"Declined" },
    typeField: "primary_role",
    typeValues: [],
    liveApi: "{{ route('admin.api.speakers') }}",
    updateApi: "{{ url('/admin/api/speakers') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"phone", label:"Phone" },
      { key:"location", label:"Location" },
      { key:"primary_role", label:"Primary Role" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Applications", fn: d => d.length },
      { label:"Confirmed", fn: d => d.filter(x=>x.status==='confirmed').length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Declined", fn: d => d.filter(x=>x.status==='declined').length },
    ]
  },
  careers: {
    title: "Career Applications",
    subtitle: "Full-time career applications submitted via the YCX careers page.",
    statusOptions: ["new","review","shortlisted","hired","rejected"],
    statusLabels: { new:"New", review:"In Review", shortlisted:"Shortlisted", hired:"Hired", rejected:"Rejected" },
    typeField: "roleCategory",
    typeValues: ["Tech","Marketing","Content","Design","Operations"],
    columns: [
      { key:"person", label:"Applicant" },
      { key:"role", label:"Role Applied" },
      { key:"roleCategory", label:"Category" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Applications", fn: d => d.length },
      { label:"In Review", fn: d => d.filter(x=>x.status==='review').length },
      { label:"Shortlisted", fn: d => d.filter(x=>x.status==='shortlisted').length },
      { label:"Hired", fn: d => d.filter(x=>x.status==='hired').length },
    ]
  },
  internships: {
    title: "Internship Applications",
    subtitle: "Student internship applications submitted via the YCX site.",
    statusOptions: ["new","review","shortlisted","hired","rejected"],
    statusLabels: { new:"New", review:"In Review", shortlisted:"Shortlisted", hired:"Hired", rejected:"Rejected" },
    typeField: "roleCategory",
    typeValues: ["Tech","Marketing","Content","Design","Community"],
    columns: [
      { key:"person", label:"Applicant" },
      { key:"role", label:"Role Applied" },
      { key:"college", label:"College / Course" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Applications", fn: d => d.length },
      { label:"In Review", fn: d => d.filter(x=>x.status==='review').length },
      { label:"Shortlisted", fn: d => d.filter(x=>x.status==='shortlisted').length },
      { label:"Hired / Onboarded", fn: d => d.filter(x=>x.status==='hired').length },
    ]
  },
  posted_jobs: {
    title: "Manage Jobs",
    subtitle: "Create, view, edit and delete careers and internships postings.",
    statusOptions: ["active", "draft"],
    statusLabels: { active: "Active", draft: "Draft" },
    typeField: "category",
    typeValues: ["career", "internship"],
    columns: [
      { key:"title", label:"Job Title" },
      { key:"category", label:"Category" },
      { key:"department", label:"Department" },
      { key:"work_mode", label:"Work Mode" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Openings", fn: d => d.length },
      { label:"Active Jobs", fn: d => d.filter(x=>x.status==='active').length },
      { label:"Drafts", fn: d => d.filter(x=>x.status==='draft').length },
      { label:"Internships", fn: d => d.filter(x=>x.category==='internship').length }
    ]
  },
  connectors: {
    title: "Connector Applications",
    subtitle: "Professionals who applied to be listed on the YCX Connectors directory.",
    statusOptions: ["pending","approved","rejected"],
    statusLabels: { pending:"Pending", approved:"Approved", rejected:"Rejected" },
    typeField: "expertise",
    typeValues: [],
    liveApi: "{{ route('admin.api.connectors') }}",
    updateApi: "{{ url('/admin/api/connectors') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"designation", label:"Designation" },
      { key:"expertise", label:"Expertise" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total", fn: d => d.length },
      { label:"Approved", fn: d => d.filter(x=>x.status==='approved').length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Rejected", fn: d => d.filter(x=>x.status==='rejected').length },
    ]
  },
  contacts: {
    title: "Contact Inquiries",
    subtitle: "Inquiries submitted via the YCX contact page form.",
    statusOptions: ["pending","resolved"],
    statusLabels: { pending:"Pending", resolved:"Resolved" },
    typeField: "subject",
    typeValues: [],
    liveApi: "{{ route('admin.api.contacts') }}",
    updateApi: "{{ url('/admin/api/contacts') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"phone", label:"Phone" },
      { key:"message", label:"Message" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Inquiries", fn: d => d.length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Resolved", fn: d => d.filter(x=>x.status==='resolved').length }
    ]
  },
  featured_guests: {
    title: "Guest Feature Applications",
    subtitle: "Individuals who applied to be featured on The CHRO Mindset Podcast.",
    statusOptions: ["confirmed","pending","declined"],
    statusLabels: { confirmed:"Confirmed", pending:"Pending", declined:"Declined" },
    typeField: "designation",
    typeValues: [],
    liveApi: "{{ route('admin.api.featured-guests') }}",
    updateApi: "{{ url('/admin/api/featured-guests') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"designation", label:"Designation" },
      { key:"company", label:"Company" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Applications", fn: d => d.length },
      { label:"Confirmed", fn: d => d.filter(x=>x.status==='confirmed').length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Declined", fn: d => d.filter(x=>x.status==='declined').length }
    ]
  },
  story_submissions: {
    title: "Story Talk Proposals",
    subtitle: "Talk proposals submitted via the YCX Share Your Story page.",
    statusOptions: ["confirmed","pending","declined"],
    statusLabels: { confirmed:"Confirmed", pending:"Pending", declined:"Declined" },
    typeField: "speaking_language",
    typeValues: [],
    liveApi: "{{ route('admin.api.story-submissions') }}",
    updateApi: "{{ url('/admin/api/story-submissions') }}",
    columns: [
      { key:"person", label:"Applicant" },
      { key:"talk_title", label:"Talk Title" },
      { key:"speaking_language", label:"Language" },
      { key:"submitted", label:"Submitted" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Proposals", fn: d => d.length },
      { label:"Confirmed", fn: d => d.filter(x=>x.status==='confirmed').length },
      { label:"Pending", fn: d => d.filter(x=>x.status==='pending').length },
      { label:"Declined", fn: d => d.filter(x=>x.status==='declined').length }
    ]
  },
  posts: {
    title: "Blog & Insights CMS",
    subtitle: "Create, edit, and manage articles published on the Young Chanakya X Insights section.",
    statusOptions: ["published", "draft"],
    statusLabels: { published: "Published", draft: "Draft" },
    typeField: "category",
    typeValues: ["Storytelling", "Networking", "Learning", "Personal Branding", "Collaboration", "Career Growth", "Entrepreneurship"],
    liveApi: "{{ route('admin.api.posts') }}",
    updateApi: "{{ url('/admin/api/posts') }}",
    columns: [
      { key:"title", label:"Insights Title" },
      { key:"category", label:"Category" },
      { key:"read_time", label:"Read Time" },
      { key:"submitted", label:"Date Created" },
      { key:"status", label:"Status" },
      { key:"action", label:"" }
    ],
    stats: [
      { label:"Total Articles", fn: d => d.length },
      { label:"Published", fn: d => d.filter(x=>x.status==='published').length },
      { label:"Drafts", fn: d => d.filter(x=>x.status==='draft').length }
    ]
  }
};

const PAGE_SIZE = 8;
let currentSection = '{{ $section }}';
let currentPage   = 1;
let activeType    = 'all';

/* =====================================================
   HELPERS
   ===================================================== */
function fmtDate(d){
  return new Date(d).toLocaleDateString('en-IN', { day:'2-digit', month:'short', year:'numeric' });
}

function statusClass(status){
  const map = { confirmed:'s-confirmed', pending:'s-pending', declined:'s-declined',
                new:'s-new', review:'s-review', shortlisted:'s-shortlisted', hired:'s-hired', rejected:'s-rejected' };
  return map[status] || 's-new';
}

function levelBadgeClass(level){
  const map = { Platinum:'badge-platinum', Gold:'badge-gold', Silver:'badge-silver', Title:'badge-title',
                Strategic:'badge-strategic', Technology:'badge-technology', Media:'badge-media',
                internship:'badge-internship', career:'badge-career',
                confirmed:'badge-confirmed', pending:'badge-pending', declined:'badge-declined' };
  return map[level] || 'badge-review';
}

/* =====================================================
   UPDATE SIDEBAR COUNTS & DATABASE LOAD
   ===================================================== */
async function updateCounts(){
  // Load connectors dynamically from DB
  try {
    const res = await fetch("{{ route('admin.api.connectors') }}");
    if(res.ok) {
      DATA.connectors = await res.json();
    }
  } catch(e) {
    console.error("Error loading connectors from database", e);
  }

  // Load partners dynamically from DB
  try {
    const res = await fetch("{{ route('admin.api.partners') }}");
    if(res.ok) {
      DATA.partners = await res.json();
    }
  } catch(e) {
    console.error("Error loading partners from database", e);
  }

  // Load sponsers dynamically from DB
  try {
    const res = await fetch("{{ route('admin.api.sponsers') }}");
    if(res.ok) {
      DATA.sponsers = await res.json();
    }
  } catch(e) {
    console.error("Error loading sponsers from database", e);
  }

  // Load posted jobs dynamically from DB
  try {
    const res = await fetch("{{ route('admin.api.posted-jobs') }}");
    if(res.ok) {
      DATA.posted_jobs = await res.json();
    }
  } catch(e) {
    console.error("Error loading posted jobs from database", e);
  }

  // Load job applications dynamically from DB
  try {
    const res = await fetch("{{ route('admin.api.job-applications') }}");
    if(res.ok) {
      const apps = await res.json();
      DATA.careers = apps.filter(x => x.category === 'career');
      DATA.internships = apps.filter(x => x.category === 'internship');
    }
  } catch(e) {
    console.error("Error loading job applications from database", e);
  }

  // Load featured guests dynamically from DB
  try {
    const res2 = await fetch("{{ route('admin.api.featured-guests') }}");
    if(res2.ok) {
      DATA.featured_guests = await res2.json();
    }
  } catch(e) {
    console.error("Error loading featured guests from database", e);
  }

  // Load story submissions dynamically from DB
  try {
    const res3 = await fetch("{{ route('admin.api.story-submissions') }}");
    if(res3.ok) {
      DATA.story_submissions = await res3.json();
    }
  } catch(e) {
    console.error("Error loading story submissions from database", e);
  }

  // Load posts dynamically from DB
  try {
    const res4 = await fetch("{{ route('admin.api.posts') }}");
    if(res4.ok) {
      DATA.posts = await res4.json();
    }
  } catch(e) {
    console.error("Error loading posts from database", e);
  }

  ['connectors','sponsers','partners','speakers','careers','internships','posted_jobs','contacts','featured_guests','story_submissions','posts'].forEach(s => {
    const el = document.getElementById('sbCount-' + s);
    if(el) el.textContent = DATA[s] ? DATA[s].length : 0;
  });
  // Overview panels
  ['connectors','sponsers','partners','speakers','careers','internships','posted_jobs','contacts','featured_guests','story_submissions','posts'].forEach(s => {
    const el = document.getElementById('ov-' + s);
    if(el && DATA[s]) el.textContent = DATA[s].length;
  });

  // If currently viewing database sections, refresh to show fetched data
  if(['connectors','partners','sponsers','careers','internships','posted_jobs','contacts','featured_guests','story_submissions','posts','overview'].includes(currentSection)) {
    if(currentSection === 'overview') renderOverviewStats();
    else renderTable(currentSection);
  }
}

/* =====================================================
   SWITCH SECTION
   ===================================================== */
function switchSection(section){
  currentSection = section;
  currentPage    = 1;
  activeType     = 'all';

  // Update active nav link
  document.querySelectorAll('.nav-link').forEach(a => {
    a.classList.toggle('active', a.dataset.section === section);
  });

  // Show/Hide Add Job Button
  const addJobCont = document.getElementById('addJobContainer');
  if(addJobCont) {
    addJobCont.style.display = (section === 'posted_jobs') ? 'block' : 'none';
  }

  // Show/Hide Add Post Button
  const addPostCont = document.getElementById('addPostContainer');
  if(addPostCont) {
    addPostCont.style.display = (section === 'posts') ? 'block' : 'none';
  }

  const cfg = SECTION_CONFIG[section];

  // Update topbar
  document.getElementById('pageTitle').textContent    = cfg.title;
  document.getElementById('pageSubtitle').textContent = cfg.subtitle;
  document.getElementById('searchInput').value = '';

  // Toggle overview panel vs. table
  const overviewPanel = document.getElementById('overviewPanel');
  const filterBar     = document.getElementById('filterBar');
  const tableCard     = document.getElementById('tableCard');
  const pagination    = document.getElementById('pagination');

  if(section === 'overview'){
    overviewPanel.style.display = 'block';
    filterBar.style.display     = 'none';
    tableCard.style.display     = 'none';
    pagination.innerHTML        = '';
    renderOverviewStats();
    return;
  }

  overviewPanel.style.display = 'none';
  filterBar.style.display     = 'flex';
  tableCard.style.display     = 'block';

  renderStats(section);
  
  // Show/Hide category select dropdown instead of typeChips pills for posts section
  const categoryFilter = document.getElementById('categoryFilter');
  const typeChips = document.getElementById('typeChips');
  if (section === 'posts') {
    typeChips.style.display = 'none';
    categoryFilter.style.display = 'inline-block';
    
    // Populate categories
    categoryFilter.innerHTML = `<option value="all">All Categories</option>` +
      cfg.typeValues.map(v => `<option value="${v}">${v}</option>`).join('');
  } else {
    typeChips.style.display = 'flex';
    categoryFilter.style.display = 'none';
    categoryFilter.value = 'all';
  }

  renderTypeChips(section);
  renderStatusFilter(section);
  renderTable(section);
}

/* =====================================================
   RENDER OVERVIEW STATS (dashboard summary)
   ===================================================== */
function renderOverviewStats(){
  const sections = ['connectors','sponsers','partners','speakers','careers','internships'];
  const totalAll = sections.reduce((acc,s) => acc + DATA[s].length, 0);
  const confirmedAll = ['sponsers','partners','speakers'].reduce((acc,s) => acc + DATA[s].filter(x=>x.status==='confirmed').length, 0) +
                       DATA['connectors'].filter(x=>x.status==='approved').length;
  const pendingAll = sections.reduce((acc,s) => acc + DATA[s].filter(x=>x.status==='pending'||x.status==='new'||x.status==='review').length, 0);
  const hiredAll = ['careers','internships'].reduce((acc,s) => acc + DATA[s].filter(x=>x.status==='hired').length, 0);

  const STAT_ICONS = [
    `<rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/>`,
    `<path d="M20 6L9 17l-5-5"/>`,
    `<circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/>`,
    `<circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 10-16 0"/>`
  ];
  const cards = [
    { label:"Total Submissions", value: totalAll, sub:"Across all categories" },
    { label:"Confirmed / Hired", value: confirmedAll + hiredAll, sub:"Active relationships" },
    { label:"Pending Review", value: pendingAll, sub:"Awaiting decision" },
    { label:"Hired / Onboarded", value: hiredAll, sub:"Career + Internship" },
  ];
  document.getElementById('statsRow').innerHTML = cards.map((c,i) => `
    <div class="stat-card">
      <div class="sc-top">
        <span class="sc-label">${c.label}</span>
        <span class="sc-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">${STAT_ICONS[i]}</svg></span>
      </div>
      <div class="sc-value">${c.value}</div>
      <div class="sc-sub">${c.sub}</div>
    </div>
  `).join('');
}

/* =====================================================
   RENDER STATS FOR A SECTION
   ===================================================== */
function renderStats(section){
  const cfg  = SECTION_CONFIG[section];
  const data = DATA[section];
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

/* =====================================================
   RENDER TYPE CHIPS
   ===================================================== */
function renderTypeChips(section){
  const cfg = SECTION_CONFIG[section];
  const chips = document.getElementById('typeChips');
  const values = cfg.typeValues.length
    ? cfg.typeValues
    : [...new Set(DATA[section].map(d => d[cfg.typeField]))].filter(Boolean);

  chips.innerHTML = `<button class="type-chip active" data-type="all">All</button>` +
    values.map(v => `<button class="type-chip" data-type="${v}">${v}</button>`).join('');

  chips.querySelectorAll('.type-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      chips.querySelectorAll('.type-chip').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      activeType = chip.dataset.type;
      currentPage = 1;
      renderTable(currentSection);
    });
  });
}

/* =====================================================
   RENDER STATUS FILTER
   ===================================================== */
function renderStatusFilter(section){
  const cfg = SECTION_CONFIG[section];
  const sel = document.getElementById('statusFilter');
  sel.innerHTML = `<option value="all">All Statuses</option>` +
    cfg.statusOptions.map(s => `<option value="${s}">${cfg.statusLabels[s]}</option>`).join('');
}

/* =====================================================
   FILTER DATA
   ===================================================== */
function getFiltered(section){
  const cfg    = SECTION_CONFIG[section];
  const search = document.getElementById('searchInput').value.trim().toLowerCase();
  const status = document.getElementById('statusFilter').value;
  const categoryVal = document.getElementById('categoryFilter').value;
  return DATA[section].filter(d => {
    if (section === 'posts') {
      if(categoryVal !== 'all' && d.category !== categoryVal) return false;
    } else {
      if(activeType !== 'all' && d[cfg.typeField] !== activeType) return false;
    }
    if(status !== 'all' && d.status !== status) return false;
    if(search) {
      const matchName = d.name ? d.name.toLowerCase().includes(search) : false;
      const matchTitle = d.title ? d.title.toLowerCase().includes(search) : false;
      const matchEmail = d.email ? d.email.toLowerCase().includes(search) : false;
      if (!(matchName || matchTitle || matchEmail)) return false;
    }
    return true;
  }).sort((a,b) => new Date(b.submitted) - new Date(a.submitted));
}

/* =====================================================
   RENDER TABLE CELL
   ===================================================== */
function renderCell(col, d, section){
  switch(col.key){
    case 'title':
      return `<td><div class="cell-primary">${d.title || ''}</div><div class="cell-secondary">${d.author_name || ''}</div></td>`;
    case 'person':
      return `<td><div class="cell-primary">${d.name}</div><div class="cell-secondary">${d.email}</div></td>`;
    case 'company':
      return `<td><div class="cell-primary">${d.company||'—'}</div><div class="cell-secondary">${d.designation||''}</div></td>`;
    case 'sponsership_level':
      return `<td><span class="badge ${levelBadgeClass(d.sponsership_level)}">${d.sponsership_level}</span></td>`;
    case 'partnership_type':
      return `<td><span class="badge ${levelBadgeClass(d.partnership_type)}">${d.partnership_type}</span></td>`;
    case 'designation':
      return `<td><div class="cell-primary">${d.designation||'—'}</div></td>`;
    case 'expertise':
      return `<td><div class="cell-secondary" style="font-size:13px;color:var(--text);">${d.expertise||'—'}</div></td>`;
    case 'role':
      return `<td><div class="cell-primary" style="font-size:13.5px;">${d.job_title||d.role||'—'}</div></td>`;
    case 'roleCategory':
      return `<td><span class="badge ${d.category==='Tech'||d.roleCategory==='Tech'?'badge-technology':'badge-strategic'}">${d.category||d.roleCategory}</span></td>`;
    case 'category':
      if (section === 'posts') {
        const cfg = SECTION_CONFIG[section];
        return `<td>
          <select class="category-select" data-id="${d.id}" style="font-family:inherit; font-size:12.5px; border:1px solid var(--border); border-radius:6px; padding:4px 8px; background:var(--bg); color:var(--ink); outline:none;">
            ${cfg.typeValues.map(c => `<option value="${c}" ${c===d.category?'selected':''}>${c}</option>`).join('')}
          </select>
        </td>`;
      }
      return `<td><span class="badge ${d.category==='internship'?'badge-internship':'badge-career'}">${d.category}</span></td>`;
    case 'message':
      return `<td><div class="cell-secondary" style="max-width:260px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; font-size:13px; color:var(--text);">${d.message||'—'}</div></td>`;
    case 'college':
      return `<td><div class="cell-primary" style="font-size:13px;">${d.college||d.institution||'—'}</div><div class="cell-secondary">${d.course||d.degree||''}</div></td>`;
    case 'submitted':
      return `<td class="cell-meta">${fmtDate(d.submitted)}</td>`;
    case 'status': {
      const cfg = SECTION_CONFIG[section];
      return `<td>
        <select class="status-select ${statusClass(d.status)}" data-id="${d.id}">
          ${cfg.statusOptions.map(s => `<option value="${s}" ${s===d.status?'selected':''}>${cfg.statusLabels[s]}</option>`).join('')}
        </select>
      </td>`;
    }
    case 'action':
      if (section === 'posted_jobs') {
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
      }
      if (section === 'posts') {
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
      }
      return `<td>
        <button class="view-btn" data-id="${d.id}" title="View details">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </button>
      </td>`;
    default:
      return `<td>${d[col.key]||'—'}</td>`;
  }
}

/* =====================================================
   RENDER TABLE
   ===================================================== */
function renderTable(section){
  const cfg      = SECTION_CONFIG[section];
  const filtered = getFiltered(section);
  const totalPages = Math.max(1, Math.ceil(filtered.length / PAGE_SIZE));
  currentPage = Math.min(currentPage, totalPages);
  const start    = (currentPage - 1) * PAGE_SIZE;
  const pageItems = filtered.slice(start, start + PAGE_SIZE);

  // Render thead
  document.getElementById('tableHead').innerHTML = `<tr>${cfg.columns.map(c => `<th>${c.label}</th>`).join('')}</tr>`;

  // Render tbody
  const tbody = document.getElementById('tableBody');
  const empty = document.getElementById('emptyState');

  if(filtered.length === 0){
    tbody.innerHTML = '';
    empty.style.display = 'block';
  } else {
    empty.style.display = 'none';
    tbody.innerHTML = pageItems.map(d => `
      <tr data-id="${d.id}">
        ${cfg.columns.map(col => renderCell(col, d, section)).join('')}
      </tr>
    `).join('');
  }

  // Wire events
  tbody.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      if(section === 'posted_jobs' || section === 'posts') return; // Do not open drawer for job or post links
      e.stopPropagation();
      openDrawer(section, parseInt(btn.dataset.id));
    });
  });
  tbody.querySelectorAll('.status-select').forEach(sel => {
    sel.addEventListener('change', async function(){
      const idVal = parseInt(this.dataset.id);
      const item = DATA[section].find(d => d.id === idVal);
      if(item) {
        item.status = this.value;
        this.className = 'status-select ' + statusClass(this.value);
        renderStats(section);

        // If connector/partner/sponser/posted_job/post, save to DB
        if(section === 'connectors') {
          await saveConnectorStatus(idVal, this.value, item.notes);
        } else if(section === 'partners') {
          await savePartnerStatus(idVal, this.value, item.notes);
        } else if(section === 'sponsers') {
          await savesponserStatus(idVal, this.value, item.notes);
        } else if(section === 'posted_jobs') {
          await fetch(`/admin/api/posted-jobs/${idVal}`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ status: this.value })
          });
        } else if(section === 'posts') {
          await fetch(`/admin/api/posts/${idVal}`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ status: this.value, title: item.title, category: item.category, read_time: item.read_time, content: item.content })
          });
        }
      }
    });
    sel.addEventListener('click', e => e.stopPropagation());
  });
  tbody.querySelectorAll('.category-select').forEach(sel => {
    sel.addEventListener('change', async function(){
      const idVal = parseInt(this.dataset.id);
      const item = DATA[section].find(d => d.id === idVal);
      if(item && section === 'posts') {
        item.category = this.value;
        await fetch(`/admin/api/posts/${idVal}`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({ status: item.status, title: item.title, category: this.value, read_time: item.read_time, content: item.content })
        });
      }
    });
    sel.addEventListener('click', e => e.stopPropagation());
  });
  tbody.querySelectorAll('tr').forEach(row => {
    row.addEventListener('click', e => {
      if(section === 'posted_jobs' || section === 'posts') return;
      if(e.target.closest('.status-select') || e.target.closest('.category-select') || e.target.closest('.view-btn') || e.target.closest('a')) return;
      openDrawer(section, parseInt(row.dataset.id));
    });
  });

  // Pagination
  document.getElementById('pagination').innerHTML = `
    <span class="p-info">Showing ${filtered.length===0?0:start+1}–${Math.min(start+PAGE_SIZE, filtered.length)} of ${filtered.length} entries</span>
    <div class="p-controls">
      <button class="p-btn" id="prevPage" ${currentPage===1?'disabled':''}>&#8592;</button>
      ${Array.from({length: totalPages}, (_,i) => i+1).map(p => `<button class="p-btn ${p===currentPage?'active':''}" data-page="${p}">${p}</button>`).join('')}
      <button class="p-btn" id="nextPage" ${currentPage===totalPages?'disabled':''}>&#8594;</button>
    </div>
  `;

  document.getElementById('prevPage')?.addEventListener('click', () => { currentPage--; renderTable(section); });
  document.getElementById('nextPage')?.addEventListener('click', () => { currentPage++; renderTable(section); });
  document.querySelectorAll('[data-page]').forEach(btn => {
    btn.addEventListener('click', () => { currentPage = parseInt(btn.dataset.page); renderTable(section); });
  });
}

/* =====================================================
   DETAIL DRAWER
   ===================================================== */
const drawer        = document.getElementById('drawer');
const drawerOverlay = document.getElementById('drawerOverlay');
let activeDrawerItem = null;

function openDrawer(section, id){
  let d;
  if (section === 'posted_jobs' && id === null) {
    d = { id: null, title: '', category: 'career', department: '', work_mode: 'Remote', experience: '', duration: '', location: '', skills: '', tagline: '', content: '', status: 'active', notes: '' };
  } else if (section === 'posts' && id === null) {
    d = { id: null, title: '', category: 'Storytelling', read_time: '', image: '', excerpt: '', content: '', author_name: 'Anjali Sharma', author_role: 'Founder, YCX Insights', status: 'published' };
  } else {
    d = DATA[section].find(x => x.id === id);
  }
  if(!d) return;
  activeDrawerItem = { section, id };

  let subText = '';
  let badges  = '';
  let bodyHTML = '';

  if(section === 'sponsers'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge ${levelBadgeClass(d.sponsership_level)}">${d.sponsership_level} sponser</span>
               <span class="badge badge-review">${d.company}</span>`;
    bodyHTML = sponserBody(d);
  } else if(section === 'partners'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge ${levelBadgeClass(d.partnership_type)}">${d.partnership_type} Partner</span>
               <span class="badge badge-review">${d.company}</span>`;
    bodyHTML = partnerBody(d);
  } else if(section === 'speakers'){
    document.getElementById('dName').textContent = d.name;
    subText = d.designation;
    badges  = `<span class="badge badge-speaker">Speaker</span>`;
    bodyHTML = speakerBody(d);
  } else if(section === 'careers'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge badge-career">Career</span>
               <span class="badge badge-technology">${d.job_title}</span>`;
    bodyHTML = careerBody(d);
  } else if(section === 'internships'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge badge-internship">Internship</span>
               <span class="badge badge-technology">${d.job_title}</span>`;
    bodyHTML = careerBody(d); // Reuse careerBody since fields are identical
  } else if(section === 'connectors'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge badge-platinum">Connector</span>`;
    bodyHTML = connectorBody(d);
  } else if(section === 'contacts'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge badge-platinum">Contact Inquiry</span>`;
    bodyHTML = contactBody(d);
  } else if(section === 'featured_guests'){
    document.getElementById('dName').textContent = d.name;
    subText = d.email;
    badges  = `<span class="badge badge-platinum">Guest Application</span>`;
    bodyHTML = featuredGuestBody(d);
  } else if(section === 'story_submissions'){
    document.getElementById('dName').textContent = d.name;
    subText = d.talk_title || d.email;
    badges  = `<span class="badge badge-platinum">Talk Proposal</span>`;
    bodyHTML = storyBody(d);
  } else if(section === 'posted_jobs'){
    document.getElementById('dName').textContent = d.id ? 'Edit Job Posting' : 'Add New Job';
    subText = d.title || 'New Job Posting';
    badges  = `<span class="badge badge-platinum">Job Posting</span>`;
    bodyHTML = postedJobBody(d);
  } else if(section === 'posts'){
    document.getElementById('dName').textContent = d.id ? 'Edit Blog Post' : 'Create Blog Post';
    subText = d.title || 'New Blog Post';
    badges  = `<span class="badge badge-platinum">Blog Post</span>`;
    bodyHTML = postBody(d);
  }

  document.getElementById('dSub').textContent  = subText;
  document.getElementById('dBadges').innerHTML = badges;
  document.getElementById('drawerBody').innerHTML = bodyHTML;

  if (section === 'posted_jobs') {
    // Initialize CKEditor 5
    ClassicEditor.create(document.querySelector('#jobEdit-content'))
      .then(editor => {
        window.editorInstance = editor;
      })
      .catch(err => {
        console.error("CKEditor load failed", err);
      });
  } else if (section === 'posts') {
    // Initialize CKEditor 5
    ClassicEditor.create(document.querySelector('#postEdit-content'))
      .then(editor => {
        window.editorInstance = editor;
      })
      .catch(err => {
        console.error("CKEditor load failed", err);
      });
  } else {
    // Wire save button for regular admin status forms
    const saveBtn = document.getElementById('dSaveBtn');
    if(saveBtn){
      // Remove old listeners by replacing button node
      const newSaveBtn = saveBtn.cloneNode(true);
      saveBtn.parentNode.replaceChild(newSaveBtn, saveBtn);

      newSaveBtn.addEventListener('click', async () => {
        const item = DATA[section].find(x => x.id === id);
        if(item){
          const newStatus = document.getElementById('dStatusSelect').value;
          const newNotes = document.getElementById('dNotes').value;
          item.status = newStatus;
          item.notes  = newNotes;
          
          document.getElementById('saveToast').classList.add('show');
          renderStats(section);
          renderTable(section);
          setTimeout(() => document.getElementById('saveToast')?.classList.remove('show'), 2500);

          // Save to database based on section
          if(section === 'connectors') {
            await saveConnectorStatus(id, newStatus, newNotes);
          } else if(section === 'partners') {
            await savePartnerStatus(id, newStatus, newNotes);
          } else if(section === 'sponsers') {
            await savesponserStatus(id, newStatus, newNotes);
          } else if(section === 'careers' || section === 'internships') {
            await saveJobApplicationStatus(id, newStatus, newNotes);
          }
        }
      });
    }

    // Set current values for regular admin status forms
    const statusSel = document.getElementById('dStatusSelect');
    if(statusSel) statusSel.value = d.status;
    const notes = document.getElementById('dNotes');
    if(notes) notes.value = d.notes || '';
  }

  drawerOverlay.classList.add('active');
  drawer.classList.add('active');
}

function closeDrawer(){
  drawerOverlay.classList.remove('active');
  drawer.classList.remove('active');
}

document.getElementById('drawerCloseBtn').addEventListener('click', closeDrawer);
drawerOverlay.addEventListener('click', closeDrawer);

async function saveConnectorStatus(id, status, notes) {
  try {
    await fetch(`/admin/api/connectors/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ status, notes })
    });
  } catch(e) {
    console.error("Failed to update status in DB", e);
  }
}

async function savesponserStatus(id, status, notes) {
  try {
    await fetch(`/admin/api/sponsers/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ status, notes })
    });
  } catch(e) {
    console.error("Failed to update status in DB", e);
  }
}

async function savePartnerStatus(id, status, notes) {
  try {
    await fetch(`/admin/api/partners/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ status, notes })
    });
  } catch(e) {
    console.error("Failed to update status in DB", e);
  }
}

/* =====================================================
   DRAWER BODY TEMPLATES
   ===================================================== */
function adminSection(section, statusOptions, statusLabels, currentStatus){
  return `
    <div class="dsection">
      <h4>Admin Actions</h4>
      <div class="admin-panel">
        <div class="field">
          <label>Status</label>
          <select id="dStatusSelect">
            ${statusOptions.map(s => `<option value="${s}" ${s===currentStatus?'selected':''}>${statusLabels[s]}</option>`).join('')}
          </select>
        </div>
        <div class="field">
          <label>Internal Notes</label>
          <textarea id="dNotes" placeholder="Add notes for your team…"></textarea>
        </div>
        <button class="save-btn" id="dSaveBtn">Save Changes</button>
        <div class="save-toast" id="saveToast">Changes saved successfully.</div>
      </div>
    </div>
  `;
}

function sponserBody(d){
  const cfg = SECTION_CONFIG['sponsers'];
  return `
    <div class="dsection">
      <h4>Contact Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Email</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Designation</span><span class="fv">${d.designation}</span></div>
        <div class="dfield full"><span class="fl">Company</span><span class="fv">${d.company}</span></div>
        <div class="dfield full"><span class="fl">LinkedIn</span><a href="${d.linkedin}" target="_blank" class="fv cell-link">${d.linkedin}</a></div>
        ${d.website ? `<div class="dfield full"><span class="fl">Website</span><a href="${d.website}" target="_blank" class="fv cell-link">${d.website}</a></div>` : ''}
      </div>
    </div>
    <div class="dsection">
      <h4>sponsership Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">sponsership Level</span><span class="fv"><span class="badge ${levelBadgeClass(d.sponsership_level)}">${d.sponsership_level}</span></span></div>
        <div class="dfield"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    ${adminSection('sponsers', cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function partnerBody(d){
  const cfg = SECTION_CONFIG['partners'];
  return `
    <div class="dsection">
      <h4>Contact Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Email</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Designation</span><span class="fv">${d.designation}</span></div>
        <div class="dfield full"><span class="fl">Company</span><span class="fv">${d.company}</span></div>
        <div class="dfield full"><span class="fl">LinkedIn</span><a href="${d.linkedin}" target="_blank" class="fv cell-link">${d.linkedin}</a></div>
        ${d.website ? `<div class="dfield full"><span class="fl">Website</span><a href="${d.website}" target="_blank" class="fv cell-link">${d.website}</a></div>` : ''}
      </div>
    </div>
    <div class="dsection">
      <h4>Partnership Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Partnership Type</span><span class="fv"><span class="badge ${levelBadgeClass(d.partnership_type)}">${d.partnership_type}</span></span></div>
        <div class="dfield"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    ${adminSection('partners', cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function speakerBody(d){
  const cfg = SECTION_CONFIG['speakers'];
  return `
    <div class="dsection">
      <h4>Speaker Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Primary Role</span><span class="fv">${d.primary_role}</span></div>
        <div class="dfield"><span class="fl">Email</span><span class="fv" style="word-break:break-all;">${d.email || '—'}</span></div>
        <div class="dfield"><span class="fl">Phone</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Location</span><span class="fv">${d.location}</span></div>
        <div class="dfield"><span class="fl">Speaking Language</span><span class="fv">${d.speaking_language}</span></div>
        <div class="dfield full"><span class="fl">Social Media URL</span><a href="${d.social_media_url}" target="_blank" class="fv cell-link">${d.social_media_url}</a></div>
        <div class="dfield full"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    <div class="dsection">
      <h4>Story & Main Message</h4>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px;font-size:13.5px;line-height:1.65;color:var(--text);white-space:pre-line;">
        ${d.story}
      </div>
    </div>
    ${adminSection('speakers', cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function connectorBody(d){
  const cfg = SECTION_CONFIG['connectors'];
  return `
    <div class="dsection">
      <h4>Speaker Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Designation</span><span class="fv">${d.designation}</span></div>
        <div class="dfield"><span class="fl">Email</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone</span><span class="fv">${d.phone}</span></div>
        <div class="dfield full"><span class="fl">Area of Expertise</span><span class="fv">${d.expertise}</span></div>
        <div class="dfield full"><span class="fl">LinkedIn</span><a href="${d.linkedin}" target="_blank" class="fv cell-link">${d.linkedin}</a></div>
        <div class="dfield full"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    <div class="dsection">
      <h4>Bio</h4>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px;font-size:13.5px;line-height:1.65;color:var(--text);">
        ${d.bio}
      </div>
    </div>
    ${adminSection('connectors', cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function contactBody(d){
  const section = activeDrawerItem.section;
  const cfg = SECTION_CONFIG[section];
  return `
    <div class="dsection">
      <h4>Inquiry Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Email Address</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone Number</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
        <div class="dfield full"><span class="fl">Subject / Topic</span><span class="fv" style="font-weight:700;">${d.subject||'General'}</span></div>
      </div>
    </div>
    <div class="dsection">
      <h4>Message / Inquiry Description</h4>
      <div style="background:var(--white); border:1px solid var(--border); border-radius:12px; padding:16px; font-size:13.5px; line-height:1.65; color:var(--text); white-space:pre-line;">
        ${d.message}
      </div>
    </div>
    ${adminSection(section, cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function featuredGuestBody(d){
  const cfg = SECTION_CONFIG['featured_guests'];
  return `
    <div class="dsection">
      <h4>Applicant Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Email</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Designation</span><span class="fv">${d.designation}</span></div>
        <div class="dfield full"><span class="fl">Company</span><span class="fv">${d.company_name}</span></div>
        <div class="dfield full"><span class="fl">Social Media</span><a href="${d.social_media_url}" target="_blank" class="fv cell-link">${d.social_media_url}</a></div>
        <div class="dfield full"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    ${d.topic ? `
    <div class="dsection">
      <h4>What They Want to Talk About</h4>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px;font-size:13.5px;line-height:1.65;color:var(--text);white-space:pre-line;">
        ${d.topic}
      </div>
    </div>` : ''}
    ${adminSection('featured_guests', cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function storyBody(d){
  const cfg = SECTION_CONFIG['story_submissions'];
  return `
    <div class="dsection">
      <h4>Applicant Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Email</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">Speaking Language</span><span class="fv">${d.speaking_language}</span></div>
        <div class="dfield full"><span class="fl">Social / LinkedIn</span><a href="${d.social_url}" target="_blank" class="fv cell-link">${d.social_url}</a></div>
        <div class="dfield full"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    <div class="dsection">
      <h4>Talk Title</h4>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:12px;padding:14px 16px;font-size:14px;font-weight:600;color:var(--ink);">
        ${d.talk_title}
      </div>
    </div>
    ${d.talk_summary ? `
    <div class="dsection">
      <h4>Talk Summary / Core Message</h4>
      <div style="background:var(--white);border:1px solid var(--border);border-radius:12px;padding:16px;font-size:13.5px;line-height:1.65;color:var(--text);white-space:pre-line;">
        ${d.talk_summary}
      </div>
    </div>` : ''}
    ${adminSection('story_submissions', cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function careerBody(d){
  const section = activeDrawerItem.section;
  const cfg = SECTION_CONFIG[section];
  
  let educationHTML = '';
  if (d.pursuing_education === 'yes') {
    educationHTML = `
      <div class="dsection">
        <h4>Education (Currently Pursuing)</h4>
        <div class="dgrid">
          <div class="dfield full"><span class="fl">College Name</span><span class="fv">${d.college || '—'}</span></div>
          <div class="dfield"><span class="fl">Course Name</span><span class="fv">${d.course || '—'}</span></div>
          <div class="dfield"><span class="fl">Current Semester</span><span class="fv">${d.semester ? 'Semester ' + d.semester : '—'}</span></div>
        </div>
      </div>
    `;
  } else {
    educationHTML = `
      <div class="dsection">
        <h4>Education (Completed)</h4>
        <div class="dgrid">
          <div class="dfield full"><span class="fl">Institution / Board / University</span><span class="fv">${d.institution || '—'}</span></div>
          <div class="dfield"><span class="fl">Degree / Qualification</span><span class="fv">${d.degree || '—'}</span></div>
          <div class="dfield"><span class="fl">Year of Passing</span><span class="fv">${d.year_of_passing || '—'}</span></div>
        </div>
      </div>
    `;
  }

  return `
    <div class="dsection">
      <h4>Personal Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Full Name</span><span class="fv">${d.name}</span></div>
        <div class="dfield"><span class="fl">Date of Birth</span><span class="fv">${d.dob || '—'}</span></div>
        <div class="dfield"><span class="fl">Nationality</span><span class="fv">${d.nationality || '—'}</span></div>
        <div class="dfield"><span class="fl">Marital Status</span><span class="fv">${d.marital_status || '—'}</span></div>
        <div class="dfield"><span class="fl">Submitted On</span><span class="fv">${fmtDate(d.submitted)}</span></div>
      </div>
    </div>
    
    <div class="dsection">
      <h4>Contact Details</h4>
      <div class="dgrid">
        <div class="dfield"><span class="fl">Email Address</span><span class="fv" style="word-break:break-all;">${d.email}</span></div>
        <div class="dfield"><span class="fl">Phone Number</span><span class="fv">${d.phone}</span></div>
        <div class="dfield"><span class="fl">WhatsApp Number</span><span class="fv">${d.whatsapp_number || '—'}</span></div>
        <div class="dfield"><span class="fl">Emergency Contact</span><span class="fv">${d.emergency_name || '—'}</span></div>
        <div class="dfield"><span class="fl">Emergency Phone</span><span class="fv">${d.emergency_phone || '—'}</span></div>
        <div class="dfield full"><span class="fl">Residential Address</span><span class="fv" style="white-space:pre-line;">${d.residential_address || '—'}</span></div>
      </div>
    </div>

    ${educationHTML}

    <div class="dsection">
      <h4>Profiles & Documents</h4>
      <div class="dgrid">
        <div class="dfield full"><span class="fl">LinkedIn Profile</span><a href="${d.linkedin}" target="_blank" class="fv cell-link" style="color: #0c3a30; font-weight:700;">${d.linkedin}</a></div>
        <div class="dfield full"><span class="fl">Resume File Link</span><a href="${d.resume_url}" target="_blank" class="fv cell-link" style="color: #0c3a30; font-weight:700; display:flex; align-items:center; gap:6px;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
          Open Resume Document
        </a></div>
      </div>
    </div>

    <div class="dsection">
      <h4>Why Young Chanakya X / Short Pitch</h4>
      <div class="decl-row" style="background:#fff; border:1px solid #ddd; padding:15px; border-radius:8px;">
        <p style="white-space:pre-line; color: #4d6459;">${d.cover_letter}</p>
      </div>
    </div>

    <div class="dsection">
      <div class="decl-row" style="display:flex; align-items:center; gap:8px;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="width:14px;height:14px;color:#0c3a30;"><path d="M20 6L9 17l-5-5"/></svg>
        <p style="margin:0;font-size:12px;color:#4d6459;">Applicant checked declaration: Information provided above is true and correct.</p>
      </div>
    </div>

    ${adminSection(section, cfg.statusOptions, cfg.statusLabels, d.status)}
  `;
}

function postBody(d){
  const cfg = SECTION_CONFIG['posts'];
  return `
    <form id="postedPostForm" onsubmit="event.preventDefault(); savePostData();">
      <div class="dsection">
        <h4>Post Metadata</h4>
        <div class="dgrid" style="display:grid; grid-template-columns:1fr 1fr; gap:14px;">
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Article Title *</span>
            <input type="text" id="postEdit-title" value="${d.title}" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Category *</span>
            <select id="postEdit-category" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
              ${cfg.typeValues.map(v => `<option value="${v}" ${d.category===v?'selected':''}>${v}</option>`).join('')}
            </select>
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Read Time (e.g. 5 Min Read) *</span>
            <input type="text" id="postEdit-read_time" value="${d.read_time || ''}" required placeholder="5 Min Read" style="border:1px solid #ccc; padding:8px; border-radius:6px;">
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Status *</span>
            <select id="postEdit-status" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
              <option value="published" ${d.status==='published'?'selected':''}>Published</option>
              <option value="draft" ${d.status==='draft'?'selected':''}>Draft</option>
            </select>
          </div>
          <div class="dfield full" style="display:flex; flex-direction:column; gap:4px; grid-column:span 2;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Featured Image URL *</span>
            <input type="text" id="postEdit-image" value="${d.image || ''}" required placeholder="https://images.unsplash.com/photo-..." style="border:1px solid #ccc; padding:8px; border-radius:6px; width:100%;">
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Author Name *</span>
            <input type="text" id="postEdit-author_name" value="${d.author_name || 'Anjali Sharma'}" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Author Role *</span>
            <input type="text" id="postEdit-author_role" value="${d.author_role || 'Founder, YCX Insights'}" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
          </div>
          <div class="dfield full" style="display:flex; flex-direction:column; gap:4px; grid-column:span 2;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Short Excerpt *</span>
            <input type="text" id="postEdit-excerpt" value="${d.excerpt || ''}" required placeholder="Brief one-sentence summary of the article..." style="border:1px solid #ccc; padding:8px; border-radius:6px; width:100%;">
          </div>
        </div>
      </div>
      
      <div class="dsection" style="margin-top:20px;">
        <h4 style="margin-bottom:8px;">Article Content (CKEditor) *</h4>
        <textarea id="postEdit-content" style="width:100%; min-height:180px; border:1px solid #ccc; padding:8px; border-radius:6px;">${d.content}</textarea>
      </div>

      <div style="display:flex; gap:12px; margin-top:24px; padding-top:14px; border-top:1px solid #eee;">
        <button type="submit" class="status-select confirmed" style="background:#0c3a30; color:#fff; border:none; padding:12px 24px; border-radius:8px; font-weight:700; cursor:pointer;">
          Save Article
        </button>
        ${d.id ? `
          <button type="button" onclick="deletePostData(${d.id})" class="status-select declined" style="background:#dc3545; color:#fff; border:none; padding:12px 24px; border-radius:8px; font-weight:700; cursor:pointer;">
            Delete Article
          </button>
        ` : ''}
      </div>
    </form>
  `;
}

function postedJobBody(d){
  return `
    <form id="postedJobForm" onsubmit="event.preventDefault(); savePostedJobData();">
      <div class="dsection">
        <h4>Job Metadata</h4>
        <div class="dgrid" style="display:grid; grid-template-columns:1fr 1fr; gap:14px;">
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Job Title *</span><input type="text" id="jobEdit-title" value="${d.title}" required style="border:1px solid #ccc; padding:8px; border-radius:6px;"></div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Category *</span>
            <select id="jobEdit-category" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
              <option value="career" ${d.category==='career'?'selected':''}>Career (Full-time)</option>
              <option value="internship" ${d.category==='internship'?'selected':''}>Internship</option>
            </select>
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Department *</span><input type="text" id="jobEdit-department" value="${d.department}" required style="border:1px solid #ccc; padding:8px; border-radius:6px;"></div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;">
            <span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Work Mode *</span>
            <select id="jobEdit-work_mode" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
              <option value="Remote" ${d.work_mode==='Remote'?'selected':''}>Remote</option>
              <option value="Hybrid" ${d.work_mode==='Hybrid'?'selected':''}>Hybrid</option>
              <option value="On-site" ${d.work_mode==='On-site'?'selected':''}>On-site</option>
            </select>
          </div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Experience Required</span><input type="text" id="jobEdit-experience" value="${d.experience||''}" style="border:1px solid #ccc; padding:8px; border-radius:6px;"></div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Duration (For Internships)</span><input type="text" id="jobEdit-duration" value="${d.duration||''}" placeholder="e.g. 3 Months" style="border:1px solid #ccc; padding:8px; border-radius:6px;"></div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Location</span><input type="text" id="jobEdit-location" value="${d.location||''}" placeholder="e.g. Remote / Chennai" style="border:1px solid #ccc; padding:8px; border-radius:6px;"></div>
          <div class="dfield" style="display:flex; flex-direction:column; gap:4px;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Status *</span>
            <select id="jobEdit-status" required style="border:1px solid #ccc; padding:8px; border-radius:6px;">
              <option value="active" ${d.status==='active'?'selected':''}>Active</option>
              <option value="draft" ${d.status==='draft'?'selected':''}>Draft</option>
            </select>
          </div>
          <div class="dfield full" style="display:flex; flex-direction:column; gap:4px; grid-column:span 2;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Key Skills (Comma-separated)</span><input type="text" id="jobEdit-skills" value="${d.skills||''}" placeholder="e.g. Figma, UI design, HTML" style="border:1px solid #ccc; padding:8px; border-radius:6px; width:100%;"></div>
          <div class="dfield full" style="display:flex; flex-direction:column; gap:4px; grid-column:span 2;"><span class="fl" style="font-weight:700; font-size:12px; color:#0c3a30;">Short Tagline *</span><input type="text" id="jobEdit-tagline" value="${d.tagline||''}" required style="border:1px solid #ccc; padding:8px; border-radius:6px; width:100%;"></div>
        </div>
      </div>
      
      <div class="dsection" style="margin-top:20px;">
        <h4 style="margin-bottom:8px;">Job Description & Details (CKEditor) *</h4>
        <textarea id="jobEdit-content" style="width:100%; min-height:180px; border:1px solid #ccc; padding:8px; border-radius:6px;">${d.content}</textarea>
      </div>

      <div style="display:flex; gap:12px; margin-top:24px; padding-top:14px; border-top:1px solid #eee;">
        <button type="submit" class="status-select confirmed" style="background:#0c3a30; color:#fff; border:none; padding:12px 24px; border-radius:8px; font-weight:700; cursor:pointer;">
          Save Job Posting
        </button>
        ${d.id ? `
          <button type="button" onclick="deletePostedJobData(${d.id})" class="status-select declined" style="background:#dc3545; color:#fff; border:none; padding:12px 24px; border-radius:8px; font-weight:700; cursor:pointer;">
            Delete Job
          </button>
        ` : ''}
      </div>
    </form>
  `;
}

/* =====================================================
   GLOBAL FILTER WIRING
   ===================================================== */
document.getElementById('searchInput').addEventListener('input', () => {
  if(currentSection !== 'overview'){ currentPage = 1; renderTable(currentSection); }
});
document.getElementById('statusFilter').addEventListener('change', () => {
  currentPage = 1; renderTable(currentSection);
});
document.getElementById('categoryFilter').addEventListener('change', () => {
  currentPage = 1; renderTable(currentSection);
});
document.getElementById('clearFilters').addEventListener('click', clearAllFilters);
document.getElementById('emptyClearBtn').addEventListener('click', clearAllFilters);
function clearAllFilters(){
  document.getElementById('searchInput').value = '';
  document.getElementById('statusFilter').value = 'all';
  document.getElementById('categoryFilter').value = 'all';
  activeType = 'all';
  const chips = document.getElementById('typeChips');
  chips.querySelectorAll('.type-chip').forEach(c => c.classList.remove('active'));
  const allChip = chips.querySelector('[data-type="all"]');
  if(allChip) allChip.classList.add('active');
  currentPage = 1;
  renderTable(currentSection);
}

// Bind Add Job Button
const addJobButton = document.getElementById('addJobBtn');
if (addJobButton) {
  addJobButton.addEventListener('click', () => {
    window.location.href = "{{ route('admin.posted-jobs.create-page') }}";
  });
}

// Bind Create Post Button
const addPostButton = document.getElementById('addPostBtn');
if (addPostButton) {
  addPostButton.addEventListener('click', () => {
    window.location.href = "{{ route('admin.posts.create-page') }}";
  });
}

async function savePostData() {
  const id = activeDrawerItem.id;
  const title = document.getElementById('postEdit-title').value;
  const category = document.getElementById('postEdit-category').value;
  const read_time = document.getElementById('postEdit-read_time').value;
  const image = document.getElementById('postEdit-image').value;
  const excerpt = document.getElementById('postEdit-excerpt').value;
  const author_name = document.getElementById('postEdit-author_name').value;
  const author_role = document.getElementById('postEdit-author_role').value;
  const status = document.getElementById('postEdit-status').value;
  const content = window.editorInstance ? window.editorInstance.getData() : document.getElementById('postEdit-content').value;

  const url = id ? `/admin/api/posts/${id}` : '/admin/api/posts';

  try {
    const res = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ title, category, read_time, image, excerpt, author_name, author_role, status, content })
    });
    if (res.ok) {
      closeDrawer();
      await updateCounts();
    } else {
      alert("Failed to save article. Please check inputs.");
    }
  } catch(e) {
    console.error(e);
    alert("Error saving article.");
  }
}

async function deletePostData(id) {
  if (!confirm("Are you sure you want to delete this article?")) return;
  try {
    const res = await fetch(`/admin/api/posts/${id}`, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'X-HTTP-Method-Override': 'DELETE'
      }
    });
    if (res.ok) {
      closeDrawer();
      await updateCounts();
    } else {
      alert("Failed to delete article.");
    }
  } catch(e) {
    console.error(e);
  }
}

async function savePostedJobData() {
  const id = activeDrawerItem.id;
  const title = document.getElementById('jobEdit-title').value;
  const category = document.getElementById('jobEdit-category').value;
  const department = document.getElementById('jobEdit-department').value;
  const work_mode = document.getElementById('jobEdit-work_mode').value;
  const experience = document.getElementById('jobEdit-experience').value;
  const duration = document.getElementById('jobEdit-duration').value;
  const location = document.getElementById('jobEdit-location').value;
  const skills = document.getElementById('jobEdit-skills').value;
  const tagline = document.getElementById('jobEdit-tagline').value;
  const status = document.getElementById('jobEdit-status').value;
  const content = window.editorInstance ? window.editorInstance.getData() : document.getElementById('jobEdit-content').value;

  const url = id ? `/admin/api/posted-jobs/${id}` : '/admin/api/posted-jobs';

  try {
    const res = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ title, category, department, work_mode, experience, duration, location, skills, tagline, status, content })
    });
    if (res.ok) {
      closeDrawer();
      await updateCounts();
    } else {
      alert("Failed to save job posting. Please check inputs.");
    }
  } catch(e) {
    console.error(e);
    alert("Error saving job posting.");
  }
}

async function deletePostedJobData(id) {
  if (!confirm("Are you sure you want to delete this job posting?")) return;
  try {
    const res = await fetch(`/admin/api/posted-jobs/${id}`, {
      method: 'POST', // Use POST method and override with DELETE headers or simply handle in route
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'X-HTTP-Method-Override': 'DELETE'
      }
    });
    if (res.ok) {
      closeDrawer();
      await updateCounts();
    } else {
      alert("Failed to delete job.");
    }
  } catch(e) {
    console.error(e);
  }
}

async function saveJobApplicationStatus(id, status, notes) {
  try {
    await fetch(`/admin/api/job-applications/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ status, notes })
    });
  } catch(e) {
    console.error("Failed to update candidate status", e);
  }
}

/* =====================================================
   INIT
   ===================================================== */
updateCounts();
// Set active nav link class
document.querySelectorAll('.nav-link').forEach(a => {
  a.classList.toggle('active', a.dataset.section === currentSection);
});
switchSection(currentSection);
</script>

</body>
</html>
