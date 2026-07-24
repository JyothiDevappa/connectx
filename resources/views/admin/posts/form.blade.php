@php use Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $post->exists ? 'Edit Blog Article' : 'Create Blog Article' }} — ConnectX YCX</title>
  <link rel="icon" type="image/png" href="{{ asset('images/fav-icon/icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('images/fav-icon/icon.png') }}">
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
        <h1 id="pageTitle">{{ $post->exists ? 'Edit Blog Article' : 'Create Blog Article' }}</h1>
        <p id="pageSubtitle">{{ $post->exists ? 'Update the details for this insights article.' : 'Fill in the metadata and details to publish a new article.' }}</p>
      </div>
      <div style="margin-left: auto;">
        <a href="{{ route('admin.dashboard', 'posts') }}" class="btn-cancel" style="padding: 10px 18px; display: inline-flex; align-items: center; gap: 8px;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
          Back to Blog List
        </a>
      </div>
    </div>

    {{-- Form Body Card --}}
    <div class="form-card">
      <form method="POST" action="{{ $post->exists ? route('admin.posts.update-form', $post->id) : route('admin.posts.save-form') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-grid">
          <div class="form-field">
            <label for="title">Article Title *</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required placeholder="e.g. Why Every Professional Has a Story Worth Sharing">
          </div>

          <div class="form-field">
            <label for="category">Category *</label>
            <select name="category" id="category" required>
              @php
                $dbCategories = \App\Models\Category::orderBy('name')->get();
                if ($dbCategories->isEmpty()) {
                  $dbCategories = collect(['Storytelling', 'Networking', 'Learning', 'Personal Branding', 'Collaboration', 'Career Growth', 'Entrepreneurship'])->map(fn($c) => (object)['name' => $c]);
                }
              @endphp
              @foreach($dbCategories as $catItem)
                <option value="{{ $catItem->name }}" {{ old('category', $post->category) === $catItem->name ? 'selected' : '' }}>{{ $catItem->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-field">
            <label for="read_time">Read Time *</label>
            <input type="text" name="read_time" id="read_time" value="{{ old('read_time', $post->read_time) }}" required placeholder="e.g. 5 Min Read">
          </div>

          <div class="form-field">
            <label for="status">Status *</label>
            <select name="status" id="status" required>
              <option value="published" {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>Published</option>
              <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
          </div>

          <div class="form-field full">
            <label for="image">Featured Image *</label>
            <input type="file" name="image" id="image" accept="image/*" {{ $post->exists ? '' : 'required' }}>
            @if($post->image)
              <div style="margin-top: 8px;">
                <span style="font-size: 11px; font-weight: 700; color: #0c3a30; display: block; margin-bottom: 4px;">Current Image Preview:</span>
                <img src="{{ asset($post->image) }}" alt="Preview" style="max-height: 100px; border-radius: 8px; border: 1px solid var(--border);">
              </div>
            @endif
          </div>

          <div class="form-field">
            <label for="author_name">Author Name</label>
            <input type="text" name="author_name" id="author_name" value="{{ old('author_name', $post->author_name) }}">
          </div>

          <div class="form-field">
            <label for="author_role">Author Role</label>
            <input type="text" name="author_role" id="author_role" value="{{ old('author_role', $post->author_role) }}">
          </div>

          <!-- SEO Meta Fields -->
          <div class="form-field full" style="margin-top: 10px;">
            <hr style="border:0; border-top:1px solid #eee; margin-bottom: 20px;">
            <h4 style="margin-bottom: 12px; font-weight: 700; color: #0c3a30;">SEO Meta Information</h4>
          </div>

          <div class="form-field full">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $post->meta_title) }}" placeholder="SEO Meta Title (optional)">
          </div>

          <div class="form-field full">
            <label for="meta_description">Meta Description</label>
            <textarea name="meta_description" id="meta_description" rows="2" style="width:100%; border:1px solid #ccc; padding:10px; border-radius:8px;" placeholder="Brief meta description for search engines (optional)">{{ old('meta_description', $post->meta_description) }}</textarea>
          </div>

          <div class="form-field full">
            <label for="meta_keywords">Meta Keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', $post->meta_keywords) }}" placeholder="Comma-separated keywords, e.g. startup, leadership, story (optional)">
          </div>

          <div class="form-field full">
            <label for="excerpt">Short Excerpt *</label>
            <input type="text" name="excerpt" id="excerpt" value="{{ old('excerpt', $post->excerpt) }}" required placeholder="e.g. Brief summary paragraph of the article.">
          </div>

          <div class="form-field full">
            <label for="editor">Article Content *</label>
            <textarea name="content" id="editor">{{ old('content', $post->content) }}</textarea>
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
          <button type="submit" class="btn-save">Publish Article</button>
          <a href="{{ route('admin.dashboard', 'posts') }}" class="btn-cancel">Cancel</a>
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
    const sections = ['connectors', 'sponsers', 'partners', 'speakers', 'careers', 'internships', 'posted_jobs', 'posts'];
    for (const s of sections) {
      try {
        let url = `/admin/api/${s.replace('_', '-')}`;
        const res = await fetch(url);
        if (res.ok) {
          const data = await res.json();
          const countBadge = document.getElementById('sbCount-' + s);
          if (countBadge) {
            countBadge.textContent = data.length;
          }
        }
      } catch (e) {
        console.error("Failed to load counts for " + s, e);
      }
    }
  }

  document.addEventListener('DOMContentLoaded', loadSidebarCounts);
</script>

</body>
</html>
