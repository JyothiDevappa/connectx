@php
/**
 * Insights Listing Page SEO Data
 */
$seo = [
    'title'       => 'Insights — Young Chanakya X',
    'description' => 'Explore the latest insights, strategies, and stories from our community leaders, startup experts, policy designers, and creative minds.',
    'keywords'    => 'insights, Young Chanakya X, stories, creator insights, startup ideas',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
<style>
  #hdr:not(.scrolled) .hamburger span {
      background: #ffffff !important;
  }
</style>
@endpush

@section('content')
<div class="blog-body">

    <!-- HERO SECTION -->
    <div class="premium-hero-container d-flex align-items-center position-relative" style="min-height: 70vh; background-image: linear-gradient(180deg, rgba(12, 58, 48, 0.55) 0%, #090d16 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1600'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container pt-200 pb-100">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-10">
                    <ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
                        <li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
                        <li class="text-white opacity-40">/</li>
                        <li class="text-white" style="color: #ffd2b1 !important;">Insights</li>
                    </ul>
                    <h1 class="text-glow-headline mb-4">Stories, Knowledge & Perspectives</h1>
                    <p class="fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
                        Empowering creators, entrepreneurs, and leaders with actionable insights and inspiration to shape a stronger community.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT SECTION -->
    <section class="blog-content-section" style="padding-top: 80px; padding-bottom: 100px; background: #ffffff !important;">
        <div class="container">
            
            <!-- Category Filter -->
            <div class="blog-filters">
                <a href="#" class="filter-btn active" data-filter="All">All Insights</a>
                <a href="#" class="filter-btn" data-filter="Storytelling">Storytelling</a>
                <a href="#" class="filter-btn" data-filter="Networking">Networking</a>
                <a href="#" class="filter-btn" data-filter="Learning">Learning</a>
                <a href="#" class="filter-btn" data-filter="Personal Branding">Personal Branding</a>
                <a href="#" class="filter-btn" data-filter="Collaboration">Collaboration</a>
                <a href="#" class="filter-btn" data-filter="Career Growth">Career Growth</a>
                <a href="#" class="filter-btn" data-filter="Entrepreneurship">Entrepreneurship</a>
            </div>

            <!-- Blog Grid -->
            <div class="blog-grid">
                @foreach($posts as $item)
                <!-- Card -->
                <div class="blog-card" data-category="{{ $item->category }}">
                    <div class="card-img" style="background-image: url('{{ $item->image }}');"></div>
                    <div class="card-content">
                        <div class="post-meta">
                            <span class="post-category">{{ $item->category }}</span>
                            <span>{{ $item->created_at->format('M d, Y') }}</span>
                            <span>•</span>
                            <span>{{ $item->read_time }}</span>
                        </div>
                        <a href="{{ route('insights.detail', $item->slug) }}" class="card-title">{{ $item->title }}</a>
                        <p class="card-excerpt">{{ $item->excerpt }}</p>
                        
                        <!-- Author hidden per request -->
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination (Shows only if items count is more than 9) -->
            @if(count($posts) > 9)
            <div class="blog-pagination mb-3">
                <a href="#" class="page-link"><i class="bi bi-chevron-left"></i></a>
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link"><i class="bi bi-chevron-right"></i></a>
            </div>
            @endif

        </div>
    </section>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filters = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.blog-card');
        
        filters.forEach(filter => {
            filter.addEventListener('click', function(e) {
                e.preventDefault();
                filters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                
                const category = this.getAttribute('data-filter');
                cards.forEach(card => {
                    if (category === 'All' || card.getAttribute('data-category') === category) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
