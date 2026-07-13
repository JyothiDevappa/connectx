@php use Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $job->exists ? 'Edit Job Posting' : 'Add New Job Posting' }} — ConnectX YCX</title>
  <link rel="icon" href="{{ asset('images/fav-icon/favicon.ico') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
  <style>
    .form-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 30px;
      margin-top: 20px;
      box-shadow: 0 4px 20px rgba(12, 58, 48, 0.03);
    }
    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .form-field {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .form-field.full {
      grid-column: span 2;
    }
    .form-field label {
      font-size: 12px;
      font-weight: 700;
      color: #0c3a30;
    }
    .form-field input, .form-field select, .form-field textarea {
      font-family: inherit;
      font-size: 13.5px;
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 10px 14px;
      background: var(--bg);
      color: var(--ink);
      outline: none;
      transition: border-color 0.15s;
    }
    .form-field input:focus, .form-field select:focus {
      border-color: #0c3a30;
      background: var(--white);
    }
    .btn-save {
      background: #0c3a30;
      color: var(--white);
      border: none;
      border-radius: 8px;
      padding: 12px 24px;
      font-weight: 700;
      font-size: 13.5px;
      cursor: pointer;
      transition: background 0.15s;
    }
    .btn-save:hover {
      background: #082922;
    }
    .btn-cancel {
      background: #f8f9fa;
      color: var(--text-soft);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 12px 24px;
      font-weight: 700;
      font-size: 13.5px;
      text-decoration: none;
      text-align: center;
      transition: background 0.15s;
    }
    .btn-cancel:hover {
      background: #e9ecef;
      color: var(--ink);
    }
    /* CKEditor Overrides */
    .ck-editor__editable_inline {
      min-height: 250px;
      background: var(--bg) !important;
      border-color: var(--border) !important;
    }
  </style>
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
      <a href="{{ url('/admin/dashboard/overview') }}" class="nav-link" data-section="overview">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>
        Dashboard
      </a>

      <span class="sb-section-label" style="margin-top:8px">Applications</span>

      <a href="{{ url('/admin/dashboard/connectors') }}" class="nav-link" data-section="connectors">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg>
        Connectors
        <span class="sb-count" id="sbCount-connectors">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/sponsers') }}" class="nav-link" data-section="sponsers">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        sponsers
        <span class="sb-count" id="sbCount-sponsers">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/partners') }}" class="nav-link" data-section="partners">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
        Partners
        <span class="sb-count" id="sbCount-partners">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/speakers') }}" class="nav-link" data-section="speakers">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
        Speakers
        <span class="sb-count" id="sbCount-speakers">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/careers') }}" class="nav-link" data-section="careers">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
        Careers
        <span class="sb-count" id="sbCount-careers">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/internships') }}" class="nav-link" data-section="internships">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/></svg>
        Internships
        <span class="sb-count" id="sbCount-internships">0</span>
      </a>

      <a href="{{ url('/admin/dashboard/posted_jobs') }}" class="nav-link active" data-section="posted_jobs">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        Manage Jobs
        <span class="sb-count" id="sbCount-posted_jobs">0</span>
      </a>
    </nav>

    {{-- Profile --}}
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
        <h1 id="pageTitle">{{ $job->exists ? 'Edit Job Posting' : 'Add New Job' }}</h1>
        <p id="pageSubtitle">{{ $job->exists ? 'Update the details for this vacancy listing.' : 'Fill in the metadata and details to publish a new position.' }}</p>
      </div>
      <div style="margin-left: auto;">
        <a href="{{ route('admin.dashboard', 'posted_jobs') }}" class="btn-cancel" style="padding: 10px 18px; display: inline-flex; align-items: center; gap: 8px;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
          Back to Jobs List
        </a>
      </div>
    </div>

    {{-- Form Body Card --}}
    <div class="form-card">
      <form method="POST" action="{{ $job->exists ? route('admin.posted-jobs.update-form', $job->id) : route('admin.posted-jobs.save-form') }}">
        @csrf

        <div class="form-grid">
          <div class="form-field">
            <label for="title">Job Title *</label>
            <input type="text" name="title" id="title" value="{{ old('title', $job->title) }}" required placeholder="e.g. Graphic Designer / Developer">
          </div>

          <div class="form-field">
            <label for="category">Category *</label>
            <select name="category" id="category" required>
              <option value="career" {{ old('category', $job->category) === 'career' ? 'selected' : '' }}>Career (Full-time)</option>
              <option value="internship" {{ old('category', $job->category) === 'internship' ? 'selected' : '' }}>Internship</option>
            </select>
          </div>

          <div class="form-field">
            <label for="department">Department *</label>
            <input type="text" name="department" id="department" value="{{ old('department', $job->department) }}" required placeholder="e.g. Design / Tech / Marketing">
          </div>

          <div class="form-field">
            <label for="work_mode">Work Mode *</label>
            <select name="work_mode" id="work_mode" required>
              <option value="Remote" {{ old('work_mode', $job->work_mode) === 'Remote' ? 'selected' : '' }}>Remote</option>
              <option value="Hybrid" {{ old('work_mode', $job->work_mode) === 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
              <option value="On-site" {{ old('work_mode', $job->work_mode) === 'On-site' ? 'selected' : '' }}>On-site</option>
            </select>
          </div>

          <div class="form-field">
            <label for="experience">Experience Required</label>
            <input type="text" name="experience" id="experience" value="{{ old('experience', $job->experience) }}" placeholder="e.g. Freshers / 2+ years">
          </div>

          <div class="form-field">
            <label for="duration">Duration (For Internships)</label>
            <input type="text" name="duration" id="duration" value="{{ old('duration', $job->duration) }}" placeholder="e.g. 3 Months / 6 Months">
          </div>

          <div class="form-field">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" value="{{ old('location', $job->location) }}" placeholder="e.g. Remote / Chennai, India">
          </div>

          <div class="form-field">
            <label for="status">Status *</label>
            <select name="status" id="status" required>
              <option value="active" {{ old('status', $job->status) === 'active' ? 'selected' : '' }}>Active (Visible on Site)</option>
              <option value="draft" {{ old('status', $job->status) === 'draft' ? 'selected' : '' }}>Draft (Hidden from Site)</option>
            </select>
          </div>

          <div class="form-field full">
            <label for="skills">Key Skills (Comma-separated)</label>
            <input type="text" name="skills" id="skills" value="{{ old('skills', $job->skills) }}" placeholder="e.g. Figma, UI design, Adobe Creative Suite">
          </div>

          <div class="form-field full">
            <label for="tagline">Short Tagline *</label>
            <input type="text" name="tagline" id="tagline" value="{{ old('tagline', $job->tagline) }}" required placeholder="e.g. Looking for creative souls to design the future of learning.">
          </div>

          <div class="form-field full">
            <label for="editor">Job Description & Details *</label>
            <textarea name="content" id="editor">{{ old('content', $job->content) }}</textarea>
          </div>
        </div>

        @if ($errors->any())
          <div style="background: #fdf2f2; border: 1px solid #f8b4b4; color: #9b1c1c; border-radius: 8px; padding: 14px; margin-top: 20px; font-size: 13px;">
            <strong style="display:block; margin-bottom:4px;">Please correct the errors below:</strong>
            <ul style="margin: 0; padding-left: 20px;">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div style="display: flex; gap: 14px; margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border);">
          <button type="submit" class="btn-save">Publish Job Posting</button>
          <a href="{{ route('admin.dashboard', 'posted_jobs') }}" class="btn-cancel">Cancel</a>
        </div>
      </form>
    </div>

  </main>
</div>

<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
    });

  // Load counts dynamically in the sidebar navigation
  async function loadSidebarCounts() {
    const sections = ['connectors', 'sponsers', 'partners', 'speakers', 'posted_jobs'];
    for (const s of sections) {
      try {
        let url = `/admin/api/${s.replace('_', '-')}`;
        const res = await fetch(url);
        if (res.ok) {
          const data = await res.json();
          const el = document.getElementById('sbCount-' + s);
          if (el) el.textContent = data.length;
        }
      } catch (e) {
        console.error("Error loading counts for " + s, e);
      }
    }

    // Load applications split count
    try {
      const res = await fetch('/admin/api/job-applications');
      if (res.ok) {
        const apps = await res.json();
        const careersCount = apps.filter(x => x.category === 'career').length;
        const internshipsCount = apps.filter(x => x.category === 'internship').length;

        const elC = document.getElementById('sbCount-careers');
        if (elC) elC.textContent = careersCount;

        const elI = document.getElementById('sbCount-internships');
        if (elI) elI.textContent = internshipsCount;
      }
    } catch (e) {
      console.error(e);
    }
  }

  loadSidebarCounts();
</script>

</body>
</html>
