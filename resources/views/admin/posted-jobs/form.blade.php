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
  @include('admin.sidebar')

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
    const sections = ['connectors', 'sponsors', 'sponsers', 'partners', 'speakers', 'posted_jobs'];
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
