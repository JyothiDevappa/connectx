@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush

@section('content')


<div class="cursor" id="cur"></div>
  <div class="cursor-ring" id="curR"></div>

  




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

    <!-- STATS -->
    <!-- <div class="stats-wrap">
    <div class="stat-item rv">
      <div class="stat-num" data-target="5000">0<sup>+</sup></div>
      <div class="stat-lbl">Creators & Influencers</div>
    </div>
    <div class="stat-item rv" style="transition-delay:0.1s">
      <div class="stat-num" data-target="120">0<sup>+</sup></div>
      <div class="stat-lbl">Brand Partners</div>
    </div>
    <div class="stat-item rv" style="transition-delay:0.2s">
      <div class="stat-num" data-target="48">0<sup>+</sup></div>
      <div class="stat-lbl">Cities Covered</div>
    </div>
    <div class="stat-item rv" style="transition-delay:0.3s">
      <div class="stat-num" data-target="200">0<sup>+</sup></div>
      <div class="stat-lbl">Events Hosted</div>
    </div>
  </div> -->

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="about-inner">
            <div class="about-img-side rv-l">
                <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=1000&q=80"
                    alt="About ConnectX">
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
                <p class="how-label">PROCESS</p>
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

    <!-- EXPERIENCES -->
    <section class="experiences-sec" id="exp">
        <div class="section-head">
            <div class="eyebrow rv">ConnectX Experiences</div>
            <h2 class="sec-title rv">Experiences That Create Influence</h2>
        </div>
        <div class="experience-grid">
            <article class="exp-card rv" style="transition-delay:0s">
                <div class="exp-icon">🎙</div>
                <h3>Podcasts</h3>
                <p>Share your journey, insights, and opinions to a focused audience across the ConnectX network.</p>
            </article>
            <article class="exp-card rv" style="transition-delay:0.08s">
                <div class="exp-icon">🤝</div>
                <h3>Networking</h3>
                <p>Meet creators, founders, and industry voices globally in curated collaboration environments.</p>
            </article>
            <article class="exp-card rv" style="transition-delay:0.16s">
                <div class="exp-icon">🏆</div>
                <h3>Awards</h3>
                <p>Gain recognition for impact, creativity, and influence through premium ConnectX showcases.</p>
            </article>
            <article class="exp-card rv" style="transition-delay:0.24s">
                <div class="exp-icon">🎤</div>
                <h3>Roundtables</h3>
                <p>Participate in elite discussions with creators, leaders and thought partners on the topics that matter.</p>
            </article>
            <article class="exp-card rv" style="transition-delay:0.32s">
                <div class="exp-icon">🌍</div>
                <h3>Meetups</h3>
                <p>Join city-based and global creator gatherings that fuel community, exposure, and creative momentum.</p>
            </article>
            <article class="exp-card rv" style="transition-delay:0.4s">
                <div class="exp-icon">📸</div>
                <h3>Creator Lounges</h3>
                <p>Speak directly in front of audience and camera, with creator-first spaces for live connection and impact.</p>
            </article>
        </div>
    </section>

    <!-- EVENT LISTING -->
    <section class="events-sec" id="events">
        <div class="section-head">
            <div class="eyebrow rv">Event Listing</div>
            <h2 class="sec-title rv">Curated events for every creator journey</h2>
        </div>
        <div class="event-grid">
            <article class="event-card rv" style="transition-delay:0s">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=900&q=80" alt="Masterclass">
                <div>
                    <span class="event-cat">Masterclass</span>
                    <h3>Creator Growth Masterclass</h3>
                </div>
            </article>
            <article class="event-card rv" style="transition-delay:0.08s">
                <img src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?w=900&q=80" alt="Podcast Session">
                <div>
                    <span class="event-cat">Podcast</span>
                    <h3>Voices of Influence Roundtable</h3>
                </div>
            </article>
            <article class="event-card rv" style="transition-delay:0.16s">
                <img src="https://images.unsplash.com/photo-1518609878373-06d740f60d8b?w=900&q=80" alt="Networking">
                <div>
                    <span class="event-cat">Networking</span>
                    <h3>Creator Connect & Collab Night</h3>
                </div>
            </article>
        </div>
    </section>

    <!-- COMMUNITY & SPONSOR -->
    <section class="community-sec" id="community">
        <div class="section-head">
            <div class="eyebrow rv">Community & Sponsor</div>
            <h2 class="sec-title rv">Community momentum with sponsor support</h2>
        </div>
        <div class="community-grid">
            <article class="com-card rv" style="transition-delay:0s">
                <h3>Creator Community</h3>
                <p>Join a global community built for creators, storytellers and ecosystem builders ready to grow together.</p>
                <button class="btn-main">Join the Community</button>
            </article>
            <article class="com-card rv" style="transition-delay:0.08s">
                <h3>Sponsor Opportunities</h3>
                <p>Partner with high-value creators and platforms through curated sponsor relationships and showcase programs.</p>
                <button class="btn-main">Explore Sponsorship</button>
            </article>
        </div>
    </section>

@push('scripts')







    
  <script>
    // CURSOR
    const cur = document.getElementById('cur');
    const curR = document.getElementById('curR');
    let mx = 0, my = 0, rx = 0, ry = 0;
    document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cur.style.left = mx + 'px'; cur.style.top = my + 'px'; });
    (function loop() { rx += (mx - rx) * 0.13; ry += (my - ry) * 0.13; curR.style.left = rx + 'px'; curR.style.top = ry + 'px'; requestAnimationFrame(loop); })();
    document.querySelectorAll('a,button,.p-card,.exp-card,.ev-card,.com-card').forEach(el => {
      el.addEventListener('mouseenter', () => { cur.classList.add('big'); curR.classList.add('big'); });
      el.addEventListener('mouseleave', () => { cur.classList.remove('big'); curR.classList.remove('big'); });
    });

    // HEADER SCROLL
    const hdr = document.getElementById('hdr');
    window.addEventListener('scroll', () => {
      hdr.classList.toggle('scrolled', window.scrollY > 80);
    });

    // MENU
    function toggleMenu() {
      document.getElementById('fsMenu').classList.toggle('open');
      document.body.style.overflow = document.getElementById('fsMenu').classList.contains('open') ? 'hidden' : '';
    }

    // HERO SLIDES
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hdot');
    let cur_slide = 0;
    function goSlide(n) {
      slides[cur_slide].classList.remove('active');
      dots[cur_slide].classList.remove('on');
      cur_slide = n;
      slides[cur_slide].classList.add('active');
      dots[cur_slide].classList.add('on');
    }
    dots.forEach(d => d.addEventListener('click', () => goSlide(+d.dataset.i)));
    setInterval(() => goSlide((cur_slide + 1) % slides.length), 4500);

    // SCROLL REVEAL
    const rvEls = document.querySelectorAll('.rv,.rv-l,.rv-r');
    const rvObs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('go'); });
    }, { threshold: 0.1 });
    rvEls.forEach(el => rvObs.observe(el));

    // STATS COUNTER
    function countUp(el) {
      const target = +el.dataset.target;
      const sup = el.querySelector('sup') ? el.querySelector('sup').outerHTML : '';
      let start = null;
      const dur = 1800;
      function step(ts) {
        if (!start) start = ts;
        const p = Math.min((ts - start) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        el.innerHTML = Math.floor(ease * target) + sup;
        if (p < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    }
    const statObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) { countUp(e.target); statObs.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    document.querySelectorAll('.stat-num').forEach(el => statObs.observe(el));
  </script>
@endpush






@endsection

