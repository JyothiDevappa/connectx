

@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush

@section('content')




<section class="community-sec" id="community">
    <div class="section-head">
        <div class="eyebrow rv">Community & Sponsor</div>
        <h2 class="sec-title rv">Community momentum with sponsor support</h2>
    </div>
    
    <div class="community-grid">
        <article class="com-card rv" style="transition-delay:0s">
            <div class="card-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Creator Community">
            </div>
            <div class="card-content">
                <h3>Creator Community</h3>
                <p>Join a global community built for creators, storytellers and ecosystem builders ready to grow together.</p>
                <div class="card-action">
                    <button class="btn-main">Join the Community</button>
                    <button class="btn-secondary">Learn More</button>
                </div>
            </div>
        </article>

        <article class="com-card rv" style="transition-delay:0.08s">
            <div class="card-image">
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=600&q=80" alt="Sponsor Opportunities">
            </div>
            <div class="card-content">
                <h3>Sponsor Opportunities</h3>
                <p>Partner with high-value creators and platforms through curated sponsor relationships and showcase programs.</p>
                <div class="card-action">
                    <button class="btn-main">Explore Sponsorship</button>
                    <button class="btn-secondary">View Tiers</button>
                </div>
            </div>
        </article>
    </div>
</section>
<script>
  // Optional: Add JavaScript for enhanced interactivity if needed

  </script>


@endsection
