@php use Illuminate\Support\Facades\Auth; @endphp
{{-- ==================== SHARED ADMIN SIDEBAR ==================== --}}
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
@php
  $currentSec = request()->route('section') ?? 'overview';
@endphp

    <a href="{{ url('/admin/dashboard/overview') }}" class="nav-link {{ $currentSec==='overview'?'active':'' }}" data-section="overview" id="nav-overview">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>
      Dashboard
    </a>

    <span class="sb-section-label" style="margin-top:8px">Applications</span>

    <a href="{{ url('/admin/dashboard/connectors') }}" class="nav-link {{ $currentSec==='connectors'?'active':'' }}" data-section="connectors" id="nav-connectors">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg>
      Connectors
    </a>

    <a href="{{ url('/admin/dashboard/sponsors') }}" class="nav-link {{ ($currentSec==='sponsors'||$currentSec==='sponsors')?'active':'' }}" data-section="sponsors" id="nav-sponsors">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
      Sponsors
    </a>

    <a href="{{ url('/admin/dashboard/partners') }}" class="nav-link {{ $currentSec==='partners'?'active':'' }}" data-section="partners" id="nav-partners">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
      Partners
    </a>

    <a href="{{ url('/admin/dashboard/speakers') }}" class="nav-link {{ $currentSec==='speakers'?'active':'' }}" data-section="speakers" id="nav-speakers">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
      Speakers
    </a>

    <a href="{{ url('/admin/dashboard/careers') }}" class="nav-link {{ $currentSec==='careers'?'active':'' }}" data-section="careers" id="nav-careers">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
      Careers
    </a>

    <a href="{{ url('/admin/dashboard/internships') }}" class="nav-link {{ $currentSec==='internships'?'active':'' }}" data-section="internships" id="nav-internships">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/></svg>
      Internships
    </a>

    <a href="{{ url('/admin/dashboard/posted_jobs') }}" class="nav-link {{ ($currentSec==='posted_jobs'||request()->is('admin/posted-jobs*'))?'active':'' }}" data-section="posted_jobs" id="nav-posted_jobs">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
      Manage Jobs
    </a>

    <a href="{{ url('/admin/dashboard/contacts') }}" class="nav-link {{ $currentSec==='contacts'?'active':'' }}" data-section="contacts" id="nav-contacts">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      Contact Inquiries
    </a>

    <a href="{{ url('/admin/dashboard/featured_guests') }}" class="nav-link {{ $currentSec==='featured_guests'?'active':'' }}" data-section="featured_guests" id="nav-featured_guests">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/><path d="M12 14v7M9 18l3 3 3-3"/></svg>
      Guest Features
    </a>

    <a href="{{ url('/admin/dashboard/story_submissions') }}" class="nav-link {{ $currentSec==='story_submissions'?'active':'' }}" data-section="story_submissions" id="nav-story_submissions">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
      Story Talks
    </a>

    {{-- Insights Dropdown Menu --}}
    @php
      $isInsights = in_array($currentSec, ['posts', 'categories']) || request()->is('admin/posts*');
    @endphp
    <div class="nav-dropdown" id="blogDropdown">
      <button type="button" class="nav-link dropdown-toggle" id="blogDropdownBtn" style="width:100%; display:flex; align-items:center; justify-content:space-between; background:none; border:none; color:inherit; font:inherit; padding:10px 14px; cursor:pointer; text-align:left;">
        <div style="display:flex; align-items:center; gap:10px;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/><path d="M4 12h8m-8-4h12m-12 8h4"/></svg>
          <span>Insights</span>
        </div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dropdown-chevron" style="width:14px;height:14px; transition:transform 0.2s; {{ $isInsights ? 'transform:rotate(180deg);' : '' }}"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="dropdown-menu-items" id="blogSubmenu" style="display:{{ $isInsights ? 'flex' : 'none' }}; flex-direction:column; gap:4px; padding-left:24px; margin-top:4px;">
        <a href="{{ url('/admin/dashboard/posts') }}" class="nav-link {{ ($currentSec==='posts'||request()->is('admin/posts*'))?'active':'' }}" data-section="posts" id="nav-posts" style="font-size:13px; padding:8px 12px;">
          <span>Insights CMS</span>
        </a>
        <a href="{{ url('/admin/dashboard/categories') }}" class="nav-link {{ $currentSec==='categories'?'active':'' }}" data-section="categories" id="nav-categories" style="font-size:13px; padding:8px 12px;">
          <span>Insights Categories</span>
        </a>
      </div>
    </div>
    <script>
      (function() {
        function initBlogDropdown() {
          const btn = document.getElementById('blogDropdownBtn');
          const menu = document.getElementById('blogSubmenu');
          if (btn && menu && !btn.dataset.dropdownInited) {
            btn.dataset.dropdownInited = 'true';
            btn.addEventListener('click', function(e) {
              e.preventDefault();
              const isHidden = menu.style.display === 'none' || !menu.style.display;
              menu.style.display = isHidden ? 'flex' : 'none';
              const chevron = btn.querySelector('.dropdown-chevron');
              if (chevron) {
                chevron.style.transform = isHidden ? 'rotate(180deg)' : 'rotate(0deg)';
              }
            });
          }
        }
        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', initBlogDropdown);
        } else {
          initBlogDropdown();
        }
      })();
    </script>
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
