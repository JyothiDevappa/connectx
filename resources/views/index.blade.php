@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush

@section('content')


    <!-- HERO -->
    <section class="hero" id="home">
        <div class="hero-slides">
            <div class="hero-slide active">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1800&q=80" alt="Hero 1">
            </div>
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=1800&q=80" alt="Hero 2">
            </div>
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=1800&q=80" alt="Hero 3">
            </div>
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=1800&q=80" alt="Hero 4">
            </div>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-grain"></div>
        <div class="hero-content">
            <h1>Partner With the<br><em>Future of Influence</em></h1>
            <p class="hero-desc">Young Chanakya ConnectX collaborates with brands, media platforms, startups, studios,
                communities, and ecosystem partners to build one of the world's fastest-growing creator and influencer
                networks.
            </p>
            <div class="hero-btns">
                <button class="btn-hero-primary">Collaborate With ConnectX →</button>
                <button class="btn-hero-outline">Become a Partner</button>
            </div>
        </div>
        <div class="hero-scroll">
            <div class="scroll-line"></div>
            <span class="scroll-txt">Scroll to explore</span>
        </div>
        <div class="hero-dots">
            <div class="hdot on" data-i="0"></div>
            <div class="hdot" data-i="1"></div>
            <div class="hdot" data-i="2"></div>
            <div class="hdot" data-i="3"></div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="marquee-wrap">
        <div class="marquee-track">
            <div class="mq-item">Creator Ecosystem</div>
            <div class="mq-item">Global Network</div>
            <div class="mq-item">Podcasts & Roundtables</div>
            <div class="mq-item">Creator Lounges</div>
            <div class="mq-item">Industry Collaboration</div>
            <div class="mq-item">Influence & Impact</div>
            <div class="mq-item">Young Chanakya ConnectX</div>
            <div class="mq-item">Creator Ecosystem</div>
            <div class="mq-item">Global Network</div>
            <div class="mq-item">Podcasts & Roundtables</div>
            <div class="mq-item">Creator Lounges</div>
            <div class="mq-item">Industry Collaboration</div>
            <div class="mq-item">Influence & Impact</div>
            <div class="mq-item">Young Chanakya ConnectX</div>
        </div>
    </div>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="about-inner">
            <div class="about-img-side rv-l">
              
            <img src="/images/media/img_20.jpg" alt="About ConnectX">


                <div class="about-img-overlay"></div>
                <!-- <div class="about-badge">
          <strong>10K+</strong>
          <span>Global Creators</span>
        </div> -->
            </div>
            <div class="about-content rv-r">
                <div class="eyebrow">About ConnectX</div>
                <h2 class="sec-title">A Digital-First<br>Creator Ecosystem</h2>
                <p class="sec-desc">Young Chanakya ConnectX is designed to bring influencers, content creators, public
                    voices,
                    and storytellers into one global network — creating opportunities like never before.</p>
                <div class="about-pills">
                    <div class="pill">Collaborate</div>
                    <div class="pill">Build Visibility</div>
                    <div class="pill">Speak on Podcasts</div>
                    <div class="pill">Exclusive Events</div>
                    <div class="pill">Share Your Stories</div>
                    <div class="pill">Creator Lounges</div>
                </div>
                <button class="btn-main">Join ConnectX →</button>
            </div>
        </div>
    </section>

    <!-- WHO CAN PARTNER -->
    <section class="partner-sec" id="partner">
        <div class="partner-head">
            <div class="eyebrow rv">Who Can Partner With Us</div>
            <h2 class="sec-title rv">Built for Modern<br>Ecosystem Collaborations</h2>
        </div>
        <div class="partner-grid">
            <div class="p-card rv" style="transition-delay:0s">
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&q=80" alt="Business">
                <div class="p-card-ov">
                    <div class="p-cat">01</div>
                    <div class="p-name">Business & Startup Voices</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.07s">
                <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=600&q=80" alt="Lifestyle">
                <div class="p-card-ov">
                    <div class="p-cat">02</div>
                    <div class="p-name">Lifestyle & Wellness</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.14s">
                <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=600&q=80" alt="Sports">
                <div class="p-card-ov">
                    <div class="p-cat">03</div>
                    <div class="p-name">Sports & Adventure</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.21s">
                <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&q=80" alt="Digital Media">
                <div class="p-card-ov">
                    <div class="p-cat">04</div>
                    <div class="p-name">Digital Media Creators</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.28s">
                <img src="https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=600&q=80" alt="News">
                <div class="p-card-ov">
                    <div class="p-cat">05</div>
                    <div class="p-name">News & Commentary</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.35s">
                <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=600&q=80" alt="Motivation">
                <div class="p-card-ov">
                    <div class="p-cat">06</div>
                    <div class="p-name">Motivation & Storytelling</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.42s">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="Tech">
                <div class="p-card-ov">
                    <div class="p-cat">07</div>
                    <div class="p-name">Tech & Innovation</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
            <div class="p-card rv" style="transition-delay:0.49s">
                <img src="https://images.unsplash.com/photo-1504609773096-104ff2c73ba4?w=600&q=80" alt="Regional">
                <div class="p-card-ov">
                    <div class="p-cat">08</div>
                    <div class="p-name">Regional & Cultural Creators</div>
                </div>
                <div class="p-arrow">↗</div>
            </div>
        </div>
    </section>

    <!-- HOW CONNECTX WORKS -->
    <section class="how-works" id="how">
        <div class="container-how">
            <div class="how-header">
                <!-- <p class="how-label">PROCESS</p> -->
                <h2 class="how-title">How ConnectX Works</h2>
            </div>
            <div class="how-grid">
                <article class="how-card" style="transition-delay:0s">
                    <div class="how-icon">
                        <img src="{{ asset('images/assets/ils_08.svg') }}" alt="Create Profile">
                    </div>
                    <div class="how-step-num">1</div>
                    <h3>Create Your Profile</h3>
                    <p>Build your creator identity and showcase your content, voice, category, and digital presence within the ConnectX ecosystem.</p>
                </article>
                <article class="how-card" style="transition-delay:0.08s">
                    <div class="how-icon">
                        <img src="{{ asset('images/assets/ils_09.svg') }}" alt="Access Creator Spaces">
                    </div>
                    <div class="how-step-num">2</div>
                    <h3>Access Creator Spaces</h3>
                    <p>Enter ConnectX Lounges, networking rooms, podcasts, roundtables, and creator-first experiences designed for visibility and engagement.</p>
                </article>
                <article class="how-card" style="transition-delay:0.16s">
                    <div class="how-icon">
                        <img src="{{ asset('images/assets/ils_10.svg') }}" alt="Connect & Collaborate">
                    </div>
                    <div class="how-step-num">3</div>
                    <h3>Connect & Collaborate</h3>
                    <p>Network with influencers, creators, communities, brands, and public voices across industries and countries.</p>
                </article>
                <article class="how-card" style="transition-delay:0.24s">
                    <div class="how-icon">
                        <img src="{{ asset('images/assets/ils_11.svg') }}" alt="Grow Your Influence">
                    </div>
                    <div class="how-step-num">4</div>
                    <h3>Grow Your Influence</h3>
                    <p>Increase your visibility through collaborations, events, podcasts, creator opportunities, and ecosystem-driven exposure.</p>
                </article>
            </div>
        </div>
    </section>

    <style>

</style>

    <!-- EXPERIENCES -->
    <section class="cx-premium-viewport">
      <div class="cx-custom-cursor"></div>

      <div class="cx-wrapper">
        <div class="cx-editorial-header">
          <span class="cx-tagline">ConnectX Experiences</span>
          <h2 class="cx-main-heading">Experiences That Create Influence</h2>
        </div>

        <div class="cx-viewport-grid">
          
          <div class="cx-premium-card cx-col-wide">
            <div class="cx-img-container">
              <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&q=80&w=1000" alt="Podcasts" class="cx-surface-img">
              <div class="cx-surface-overlay"></div>
            </div>
            <div class="cx-premium-body">
              <h3 class="cx-premium-title">Podcasts</h3>
              <p class="cx-premium-text">Share your journey, insights, and opinions.</p>
            </div>
            <div class="cx-arrow-token">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </div>
          </div>

          <div class="cx-premium-card cx-col-square">
            <div class="cx-img-container">
              <img src="https://images.unsplash.com/photo-1531058020387-3be344559be6?auto=format&fit=crop&q=80&w=600" alt="Awards" class="cx-surface-img">
              <div class="cx-surface-overlay"></div>
            </div>
            <div class="cx-premium-body">
              <h3 class="cx-premium-title">Awards</h3>
              <p class="cx-premium-text">Recognition for impact, creativity, and influence.</p>
            </div>
            <div class="cx-arrow-token">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </div>
          </div>

          <div class="cx-premium-card cx-col-square">
            <div class="cx-img-container">
              <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=600" alt="Roundtables" class="cx-surface-img">
              <div class="cx-surface-overlay"></div>
            </div>
            <div class="cx-premium-body">
              <h3 class="cx-premium-title">Roundtables</h3>
              <p class="cx-premium-text">Focused discussions with creators and thought leaders.</p>
            </div>
            <div class="cx-arrow-token">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </div>
          </div>

          <div class="cx-premium-card cx-col-square">
            <div class="cx-img-container">
              <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=600" alt="Meetups" class="cx-surface-img">
              <div class="cx-surface-overlay"></div>
            </div>
            <div class="cx-premium-body">
              <h3 class="cx-premium-title">Meetups</h3>
              <p class="cx-premium-text">City-based and global creator gatherings.</p>
            </div>
            <div class="cx-arrow-token">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </div>
          </div>

          <div class="cx-premium-card cx-col-square">
            <div class="cx-img-container">
              <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=600" alt="Creator Lounges" class="cx-surface-img">
              <div class="cx-surface-overlay"></div>
            </div>
            <div class="cx-premium-body">
              <h3 class="cx-premium-title" style="color: var(--color-orange);">Creator Lounges</h3>
              <p class="cx-premium-text">Speak directly in front of audience & camera.</p>
            </div>
            <div class="cx-arrow-token">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </div>
          </div>

          <div class="cx-premium-card cx-col-wide">
            <div class="cx-img-container">
              <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&q=80&w=1000" alt="Networking" class="cx-surface-img">
              <div class="cx-surface-overlay"></div>
            </div>
            <div class="cx-premium-body">
              <h3 class="cx-premium-title">Networking</h3>
              <p class="cx-premium-text">Meet creators, founders, and industry voices globally.</p>
            </div>
            <div class="cx-arrow-token">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </div>
          </div>

        </div>
      </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
      const targetSection = document.querySelector(".cx-premium-viewport");
      const glowCursor = document.querySelector(".cx-custom-cursor");

      if (targetSection && glowCursor && window.matchMedia("(pointer: fine)").matches) {
        window.addEventListener("mousemove", (e) => {
          glowCursor.style.left = `${e.clientX}px`;
          glowCursor.style.top = `${e.clientY}px`;
        });

        targetSection.addEventListener("mouseenter", () => {
          glowCursor.style.transform = "translate(-50%, -50%) scale(1)";
          glowCursor.style.opacity = "1";
        });

        targetSection.addEventListener("mouseleave", () => {
          glowCursor.style.transform = "translate(-50%, -50%) scale(0)";
          glowCursor.style.opacity = "0";
        });
      }
    });
    </script>

    <!-- EVENT LISTING -->
    <section class="blog-section-two position-relative mt-150 lg-mt-80 mb-150 lg-mb-80" id="events">
        <div class="container">
            <div class="section-head">
                <div class="eyebrow rv">Event Listing</div>
                <h2 class="sec-title rv">Curated events for every creator journey</h2>
            </div>
            <div class="position-relative">
                <div class="row gx-xxl-5">
                    <div class="col-md-6">
                        <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                            <figure class="post-img rounded-5 position-relative d-flex align-items-end m0" style="background-image: url('{{ asset('images/media/people-taking-part-high-protocol-event.jpg') }}');">
                                <a href="#" class="stretched-link rounded-5 date tran3s">09 FEB</a>
                            </figure>
                            <div class="post-data">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <a href="#" class="blog-title"><h4>Creator Growth Masterclass</h4></a>
                                    <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                                <div class="post-info">ConnectX Team . 6 hrs . Masterclass</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" data-wow-delay="0.1s">
                            <figure class="post-img rounded-5 position-relative d-flex align-items-end m0" style="background-image: url('{{ asset('images/blog/blog_img_04.jpg') }}');">
                                <a href="#" class="stretched-link rounded-5 date tran3s">12 AUG</a>
                            </figure>
                            <div class="post-data">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <a href="#" class="blog-title"><h4>Voices of Influence Roundtable</h4></a>
                                    <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                                <div class="post-info">Live Panel . 4 hrs . Roundtable</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                            <figure class="post-img rounded-5 position-relative d-flex align-items-end m0" style="background-image: url('{{ asset('images/media/img_50.jpg') }}');">
                                <a href="#" class="stretched-link rounded-5 date tran3s">18 SEP</a>
                            </figure>
                            <div class="post-data">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <a href="#" class="blog-title"><h4>Networking & Collab Night</h4></a>
                                    <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                                <div class="post-info">Community Hub . 5 hrs . Networking</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" data-wow-delay="0.1s">
                            <figure class="post-img rounded-5 position-relative d-flex align-items-end m0" style="background-image: url('{{ asset('images/media/img_48.webp') }}');">
                                <a href="#" class="stretched-link rounded-5 date tran3s">22 OCT</a>
                            </figure>
                            <div class="post-data">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <a href="#" class="blog-title"><h4>Meetup Market Mixer</h4></a>
                                    <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                                <div class="post-info">City Event . 3 hrs . Meetups</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                            <figure class="post-img rounded-5 position-relative d-flex align-items-end m0" style="background-image: url('{{ asset('images/media/img_58.webp') }}');">
                                <a href="#" class="stretched-link rounded-5 date tran3s">05 NOV</a>
                            </figure>
                            <div class="post-data">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <a href="#" class="blog-title"><h4>Creator Lounge Live</h4></a>
                                    <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                                <div class="post-info">Studio Stream . 2 hrs . Lounge</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" data-wow-delay="0.1s">
                            <figure class="post-img rounded-5 position-relative d-flex align-items-end m0" style="background-image: url('{{ asset('images/media/img_20.jpg') }}');">
                                <a href="#" class="stretched-link rounded-5 date tran3s">15 DEC</a>
                            </figure>
                            <div class="post-data">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <a href="#" class="blog-title"><h4>Awards Showcase Evening</h4></a>
                                    <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                                <div class="post-info">Showcase . 4 hrs . Awards</div>
                            </div>
                        </article>
                        
                    </div>

                    <div class="pagination-one mt-20">
                        <ul class="style-none d-flex align-items-center justify-content-center">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">Last <i class="bi bi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- COMMUNITY & SPONSOR -->
<section class="community-sec" id="community">
    <div class="section-container">
        
        <div class="section-head">
            <!-- <div class="eyebrow rv">Community & Sponsor</div> -->
            <h2 class="sec-title rv">Community & Sponsor</h2>
        </div>
        
        <div class="community-grid">
            
            <!-- Card 1: Creator Community -->
            <article class="com-card creative-left rv" style="transition-delay:0s">
                <div class="card-meta">
                    <span class="card-num">01 /</span>
                    <h3>Creator Community</h3>
                    <p>Join a global community built for creators, storytellers and ecosystem builders ready to grow together.</p>
                    <div class="card-action">
                        <button class="btn-main">Join the Community</button>
                    </div>
                </div>
                <div class="card-visual">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Creator">
                    </div>
                </div>
            </article>

            <!-- Card 2: Sponsor Opportunities -->
            <article class="com-card creative-right rv" style="transition-delay:0.08s">
                <div class="card-meta">
                    <span class="card-num">02 /</span>
                    <h3>Sponsor Opportunities</h3>
                    <p>Partner with high-value creators and platforms through curated sponsor relationships and showcase programs.</p>
                    <div class="card-action">
                        <button class="btn-main">Explore Sponsorship</button>
                    </div>
                </div>
                <div class="card-visual">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=600&q=80" alt="Sponsorship">
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>
@push('scripts')







@endpush






@endsection

