@php
/**
 * Become a Guest / Feature Page SEO Data
 */
$seo = [
    'title'       => 'Get Featured — The CHRO Mindset Podcast',
    'description' => 'Share the frameworks you\'ve built, the calls only a CHRO has to make, and the mistakes that taught you the most with an audience of HR leaders.',
    'keywords'    => 'CHRO Mindset, get featured, podcast guest, HR leader, Chief Human Resources Officer, people leader podcast',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/become-a-feature.css') }}?v={{ time() }}">
@endpush

@section('content')
<div class="become-a-feature-body">  <!-- ============ 1. HERO + FORM ============ -->
  <div class="authority-hero-section d-flex align-items-center position-relative" id="apply">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="trust-badge-pill">
            <i class="bi bi-shield-check-fill"></i> Guest applications open
          </div>

          <h1 class="trust-headline">Get Featured On <br>Our Podcast</h1>
          <p class="hero-description">
            Share the frameworks you've built, the calls only a CHRO has to make, and the mistakes that taught you the most — with an audience of HR leaders making those same calls right now.
          </p>

          <ul class="checklist-connector">
            <li>
              <span class="icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              100+ episodes released
            </li>
            <li>
              <span class="icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              40k+ HR leaders reached monthly
            </li>
            <li>
              <span class="icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Real conversations, not scripted panels.
            </li>
          </ul>
        </div>

        <div class="col-lg-6">
          <div class="trust-metric-box">
            <h4>
              <i class="bi bi-person-lines-fill me-2"></i> Apply to be a guest
            </h4>

            <form action="{{ route('feature-guest.apply') }}" method="POST" id="featureGuestForm">
              @csrf
              <!-- 1st row: Full Name | Phone Number -->
              <div class="two-col mb-3">
                <div>
                  <label class="cx-label">Full Name *</label>
                  <input type="text" class="form-control cx-input" name="full_name" placeholder="E.g. Ananya Rao" required>
                </div>
                <div>
                  <label class="cx-label">Phone Number *</label>
                  <input type="tel" class="form-control cx-input" id="feature-phone" name="phone" placeholder="E.g. 98765 43210" required>
                </div>
              </div>
              
              <!-- 2nd row: Email -->
              <div class="mb-3">
                <label class="cx-label">Email Address *</label>
                <input type="email" class="form-control cx-input" name="email" placeholder="example@gmail.com" required>
              </div>

              <!-- 3rd row: Company Name | Designation -->
              <div class="two-col mb-3">
                <div>
                  <label class="cx-label">Company Name *</label>
                  <input type="text" class="form-control cx-input" name="company_name" placeholder="E.g. Company name" required>
                </div>
                <div>
                  <label class="cx-label">Designation / Job Title *</label>
                  <input type="text" class="form-control cx-input" name="designation" placeholder="E.g. CHRO" required>
                </div>
              </div>

              <!-- 4th row: Social Media Profile -->
              <div class="mb-3">
                <label class="cx-label">Social Media Profile *</label>
                <input type="url" class="form-control cx-input" name="social_media_url" placeholder="https://linkedin.com/in/yourname" required>
              </div>

              <!-- 5th row: Topic description -->
              <div class="mb-4">
                <label class="cx-label">What would you want to talk about on air?</label>
                <textarea class="form-control cx-input" name="topic" rows="3" placeholder="A transformation you led, a hard call you made, a belief you'd defend..."></textarea>
              </div>
              <button type="submit" class="application-submit-btn">Submit Application <i class="bi bi-arrow-right ms-2"></i></button>
            </form>
            <p class="form-note" id="formSuccess" style="display:none;">Thanks — your application is in. We'll be in touch within 5 business days.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============ 2. WHO WE WORK WITH ============ -->
  <section class="connectx-how-works-section-wrapper pt-70 lg-pt-80 pb-70 lg-pb-80">
    <div class="container">
      <div class="text-center mb-70">
        <div class="eyebrow rv">Our Network</div>
        <h2 class="sec-title rv how-work-title">Who We Work With</h2>
        <p class="sec-desc rv mx-auto how-work-desc">We partner with diverse organizations to create value, unlock growth, and empower digital ecosystems.</p>
      </div>

      <div class="row g-0 how-works-section-cards-container">
        <div class="col-lg-4 col-md-6 hw-grid-border-end-md hw-grid-border-bottom-md">
          <div class="how-works-section-card how-works-bg-light">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">01</span>
              <h4 class="how-works-h4">Content Platforms</h4>
            </div>
            <p class="how-works-p-desc">
              Organizations focused on digital content, publishing, and audience engagement across formats.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-end-lg hw-grid-border-bottom-md">
          <div class="how-works-section-card how-works-bg-tint">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">02</span>
              <h4 class="how-works-h4">Creator Networks</h4>
            </div>
            <p class="how-works-p-desc">
              Communities and groups working with creators, influencers and digital storytellers.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-bottom-md">
          <div class="how-works-section-card how-works-bg-light">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">03</span>
              <h4 class="how-works-h4">Media & Production Teams</h4>
            </div>
            <p class="how-works-p-desc">
              Studios and teams involved in podcasts, video production and content creation.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-end-md hw-grid-border-bottom-sm">
          <div class="how-works-section-card how-works-bg-tint">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">04</span>
              <h4 class="how-works-h4">Community Builders</h4>
            </div>
            <p class="how-works-p-desc">
              Groups building active communities, engagement systems and networking ecosystems.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-end-lg">
          <div class="how-works-section-card how-works-bg-light">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">05</span>
              <h4 class="how-works-h4">Agencies & Growth Teams</h4>
            </div>
            <p class="how-works-p-desc">
              Teams focused on campaigns, creator partnerships and brand visibility growth.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="connectx-premium-card how-works-section-card how-works-bg-tint">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">06</span>
              <h4 class="how-works-h4">Ecosystem Enablers</h4>
            </div>
            <p class="how-works-p-desc">
              Organizations supporting startups, innovation communities and professional networks.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ Why Get Featured ============ -->
  {{-- <section class="section-pad">
    <div class="container">
      <div class="sec-head">
        <span class="eyebrow">Why get featured</span>
        <h2>Your experience, turned into reach</h2>
        <p>A 45-minute conversation becomes a body of proof: something a candidate, a peer, or your own board can point to and say — this person has actually done it.</p>
      </div>
      <div class="why-grid">
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 2L14.5 8.5L21 9.5L16.5 14L17.8 20.8L12 17.5L6.2 20.8L7.5 14L3 9.5L9.5 8.5L12 2Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
          </div>
          <h3>Authority beyond your org chart</h3>
          <p>Your point of view reaches people who'll never sit in a meeting with you — future hires, peers, your own leadership team.</p>
        </div>
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M4 20c1.2-4 4-6 8-6s6.8 2 8 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          </div>
          <h3>An audience already listening</h3>
          <p>CHROs, CPOs and People leaders tune in specifically for operating detail — not a general business audience.</p>
        </div>
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M8 9h8M8 13h8M8 17h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          </div>
          <h3>One session, a library of content</h3>
          <p>Your episode becomes clips, quote cards and a written spotlight — content you can reuse across your own channels.</p>
        </div>
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3v6M12 15v6M3 12h6M15 12h6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          </div>
          <h3>A growing bench of peers</h3>
          <p>Guests get introduced to each other. It's turned into hiring conversations, advisory seats and genuine friendships.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- ============ 3. WHO CAN JOIN US ============ -->
  <section class="partner-sec" id="partner">
    <div class="partner-head text-center">
      <div class="eyebrow rv">Who Can Join Us</div>
      <h2 class="sec-title rv">A Community for Everyone Who Wants to Grow</h2>
      <p class="sec-desc rv mx-auto">For people who value collaboration, learning, and building real connections that create long-term impact.</p>
    </div>
    <div class="partner-grid">
      <div class="p-card rv" style="transition-delay:0s">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Students" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Students</div>
          <div class="p-desc">Connect with peers, build practical skills, and access leadership programs.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.07s">
        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80" alt="Entrepreneurs" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Entrepreneurs</div>
          <div class="p-desc">Network with experts, share your vision, and scale your business ventures.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.14s">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" alt="Startup Founders" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Startup Founders</div>
          <div class="p-desc">Pitch your ideas, collaborate with investors, and accelerate your growth.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.21s">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="Business Leaders" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Business Leaders</div>
          <div class="p-desc">Guide the ecosystem, sponsor programs, and share executive insights.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.28s">
        <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=600&q=80" alt="Creators / Mentors" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Creators / Mentors</div>
          <div class="p-desc">Produce podcasts, write articles, and mentor the next generation.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.35s">
        <img src="https://images.unsplash.com/photo-1598550874175-4d0ef436c909?w=600&q=80" alt="Influencers" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Influencers</div>
          <div class="p-desc">Amplify brand voice, reach active audiences, and host live sessions.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.42s">
        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?w=600&q=80" alt="Investors" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Investors</div>
          <div class="p-desc">Discover vetted startups, back innovators, and shape market trends.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.49s">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80" alt="Educators" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Educators</div>
          <div class="p-desc">Bridge academia with industry, design courses, and lead workshops.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.56s">
        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600&q=80" alt="Community Builders" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Community Builders</div>
          <div class="p-desc">Organize local meetups, run regional chapters, and grow active networks.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.63s">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="Innovators" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Innovators</div>
          <div class="p-desc">Develop cutting-edge ideas, collaborate on tech, and build future frameworks.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
    </div>
  </section>

  <!-- ============ 4. WHAT WE COVER ============ -->
  <section class="cover-section-new py-5">
    <div class="container">
      <div class="cover-grid-new">
        <!-- LEFT COLUMN -->
        <div class="cover-left">
          <h2 class="cover-heading-new">Work With an <em>Advisory Board</em> Focused on <em>Your Family Business</em></h2>
          <p class="cover-desc-new">Leverage the expertise of a prestigious panel of 10+ industry veterans, committed to guiding your business.</p>
          <ul class="cover-points-new">
            <li>
              <span class="point-icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Tailored advisory board composition for business-specific expertise.
            </li>
            <li>
              <span class="point-icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Drive governance, succession, and operational excellence seamlessly.
            </li>
          </ul>
          <a href="#apply" class="cover-btn-new">Learn More</a>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="cover-right">
          <div class="vertical-marquee-container">
            <div class="vertical-marquee-track">
              <!-- Double entries to enable seamless loop vertical scroll -->
              <div class="marquee-item">Unlocking Family Wealth</div>
              <div class="marquee-item">Effective People Management</div>
              <div class="marquee-item">Digitising your Business</div>
              <div class="marquee-item">Aligning Business &amp; Family Objectives</div>
              <div class="marquee-item">Intergenerational Conflict Resolution</div>
              <div class="marquee-item">Scaling Business with Sustainability</div>
              <div class="marquee-item">Enhancing Business Operations</div>

              <div class="marquee-item">Unlocking Family Wealth</div>
              <div class="marquee-item">Effective People Management</div>
              <div class="marquee-item">Digitising your Business</div>
              <div class="marquee-item">Aligning Business &amp; Family Objectives</div>
              <div class="marquee-item">Intergenerational Conflict Resolution</div>
              <div class="marquee-item">Scaling Business with Sustainability</div>
              <div class="marquee-item">Enhancing Business Operations</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 5. WHAT YOU GET ============ -->
  <section class="section-pad bg-white-sec">
    <div class="container">
      <div class="sec-head">
        <span class="eyebrow">What you get</span>
        <h2>Everything's handled — you just show up</h2>
      </div>
      <div class="row align-items-stretch g-4 mb-4">
        <!-- 1st Row: Column 1 - Image -->
        <div class="col-lg-6">
          <div class="h-100 rounded-4 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1764664035154-379971f0e936?fm=jpg&q=70&w=1600&auto=format&fit=crop" class="get-image-box" alt="Podcast recording setup">
          </div>
        </div>
        <!-- 1st Row: Column 2 - Card 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-mic"></i>
            </div>
            <h3>Professional recording, zero prep stress</h3>
            <p>Video or audio, remote or in-studio. Our producer handles the technical side end to end.</p>
          </div>
        </div>
        <!-- 1st Row: Column 3 - Card 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-broadcast"></i>
            </div>
            <h3>Distribution across every platform</h3>
            <p>YouTube, Spotify, Apple Podcasts and Audible — your episode goes out everywhere our audience listens.</p>
          </div>
        </div>
      </div>

      <!-- 2nd Row: 4 Cards -->
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-chat-quote"></i>
            </div>
            <h3>Social clips and quote cards</h3>
            <p>Edited highlight clips and shareable quote graphics, ready for your own LinkedIn and company channels.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-person-badge"></i>
            </div>
            <h3>A guest spotlight page</h3>
            <p>A dedicated page with your bio, headshot and links — built to be shared and to outlast the episode itself.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-journal-text"></i>
            </div>
            <h3>Narrative Pre-production</h3>
            <p>Pre-interview prep session to align on your key insights and build a high-impact narrative structure.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-people"></i>
            </div>
            <h3>Network access</h3>
            <p>Introductions and networking opportunities with our community of alumni guests, HR executives and leaders.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 6. THOUGHT LEADERSHIP ============ -->
  <section class="thought-leadership-section">
    <div class="thought-leadership-container">
      <div class="thought-header">
        <h2 class="thought-title">Thought Leadership from <em>Our Guests</em></h2>
        <p class="thought-desc">On The CHRO Mindset, our guests are not just speakers; they are industry leaders driving real-world change.</p>
      </div>

      <div class="video-grid">
        <div class="video-card">
          <div class="video-thumbnail">
            <img src="https://images.unsplash.com/photo-1758518727888-ffa196002e59?fm=jpg&q=70&w=800&auto=format&fit=crop" alt="Exploring the Future of AI">
            <div class="play-btn-overlay">
              <i class="bi bi-play-fill"></i>
            </div>
          </div>
          <h3 class="video-card-title">Exploring the Future of AI</h3>
          <div class="video-card-divider"></div>
          <p class="video-card-subtext">Dr. Ananya Rao — CHRO, Scale-up, on The CHRO Mindset Podcast</p>
        </div>

        <div class="video-card">
          <div class="video-thumbnail">
            <img src="https://images.unsplash.com/photo-1758518729286-e8d94cc231f5?fm=jpg&q=70&w=800&auto=format&fit=crop" alt="How to Build a Profitable Company">
            <div class="play-btn-overlay">
              <i class="bi bi-play-fill"></i>
            </div>
          </div>
          <h3 class="video-card-title">How to Build a Profitable Company</h3>
          <div class="video-card-divider"></div>
          <p class="video-card-subtext">Marcus Webb — CPO, Global Manufacturing, on The CHRO Mindset Podcast</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 7. HOW IT WORKS ============ -->
  {{-- <section class="steps section-pad">
    <div class="container">
      <div class="sec-head">
        <span class="eyebrow">How it works</span>
        <h2>From application to air, in four steps</h2>
      </div>
      <div class="steps-grid">
        <div class="step">
          <div class="step-no">01</div>
          <h3>Apply</h3>
          <p>Tell us about your experience and the angle you'd bring. Takes about 2 minutes.</p>
        </div>
        <div class="step">
          <div class="step-no">02</div>
          <h3>Screening call</h3>
          <p>A quick 15-minute call with our producer to shape the episode around your story.</p>
        </div>
        <div class="step">
          <div class="step-no">03</div>
          <h3>Record</h3>
          <p>A 40–50 minute conversation, video or audio, remote or in-studio — whatever suits you.</p>
        </div>
        <div class="step">
          <div class="step-no">04</div>
          <h3>Go live</h3>
          <p>Your episode launches across platforms, with clips and a spotlight page of your own.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- ============ 8. WHY PARTNER WITH US ============ -->
  <div class="text-feature-five position-relative mt-40 lg-mt-80 pb-50">
    <div class="container">
      <div class="bg-wrapper connectx-partner-bg">
        <div class="row">
          <!-- CONTENT SIDE -->
          <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">
            <div class="text-wrapper pt-60 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">
              <div class="eyebrow rv">Why Partner with Us</div>
              <h2 class="sec-title rv">Structured Collaboration <br>Built for Long-Term Growth</h2>
              <p class="sec-desc rv">
                Young Chanakya X connects partners and creators through meaningful collaboration, engagement, and growth.
              </p>
              <ul class="style-none connectx-partner-list">
                <li>Collaboration-first ecosystem approach</li>
                <li>Content-driven engagement model</li>
                <li>Cross-industry network access</li>
                <li>Structured opportunities for co-creation</li>
              </ul>
            </div>
          </div>
          <!-- IMAGE SIDE -->
          <div class="col-lg-6 d-flex order-lg-first">
            <div class="media-wrapper w-100 d-flex align-items-center justify-content-center position-relative">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============ 9. FAQ ============ -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title">Frequently asked questions</h2>
        <p class="sec-desc">Everything you need to know about the guest application, preparation, recording, and distribution process.</p>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>How do I apply to get featured on the podcast?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Fill out the application form on this page with details about your background and the topics you want to discuss. Our producers review every submission.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who is the ideal guest for The CHRO Mindset?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We look for CHROs, CPOs, Heads of People, and HR Tech founders who have led real transformations, made hard calls, and have specific operating insights to share.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is there any cost or fee to be featured?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>No. There is absolutely no fee or cost to be a guest. Every slot is editorial, based purely on the value and depth of your professional experience.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>How long does the recording session take?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>The recording itself takes about 40–50 minutes. We also schedule a quick 15-minute alignment call a few days prior to shape the conversation outline.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Where does the recording take place?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We support both remote recording (via professional studio-quality web platforms) and in-studio recording depending on your location and preference.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>What topics or themes do you cover?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We cover a wide range of HR and people topics: Talent Strategy, Workforce Planning, AI in HR, Compensation & Rewards, Culture & Change, Org Design, and more.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Do I get to review the episode before it goes live?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes, our team edits the episode for clarity and flow, and we share the draft and promotional assets with you for review before publication.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Where is the podcast distributed?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>The podcast is distributed on YouTube, Spotify, Apple Podcasts, Audible, and our community platform, reaching over 40,000 HR leaders monthly.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I share the promotional clips on my own LinkedIn?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Absolutely. We provide you with custom social media clips, audiograms, quote cards, and a dedicated spotlight page to share on your personal and company channels.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>How long after recording does the episode go live?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Typically, it takes about 3 to 5 weeks after recording to edit, package, generate the promotional clips, and release the episode.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var phoneInput = document.querySelector('.become-a-feature-body input[name="phone"]');
    if (phoneInput) {
      var iti = window.intlTelInput(phoneInput, {
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
      });

      var form = phoneInput.closest('form');
      if (form) {
        form.addEventListener('submit', function() {
          phoneInput.value = iti.getNumber();
        });
      }
    }

    document.querySelectorAll('.become-a-feature-body .faq-item').forEach(item => {
      item.querySelector('.faq-q').addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.become-a-feature-body .faq-item').forEach(i => i.classList.remove('open'));
        if(!isOpen) item.classList.add('open');
      });
    });

    // AJAX Form Submission
    const featureForm = document.getElementById('featureGuestForm');
    if (featureForm) {
      featureForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        const btn = featureForm.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting...';

        const formData = new FormData(featureForm);

        try {
          const response = await fetch(featureForm.action, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
            body: formData
          });
          const data = await response.json();
          if (data.type === 'success') {
            featureForm.style.display = 'none';
            document.getElementById('formSuccess').style.display = 'block';
          } else {
            btn.disabled = false;
            btn.innerHTML = originalText;
            alert(data.message || 'Something went wrong. Please try again.');
          }
        } catch(err) {
          btn.disabled = false;
          btn.innerHTML = originalText;
          alert('Unable to submit. Please check your connection and try again.');
        }
      });
    }
  });
</script>
@endpush
