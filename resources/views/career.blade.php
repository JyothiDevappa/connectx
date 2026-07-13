@php
/**
 * Careers / Internships Page SEO Data
 */
$isInternship = $isInternship ?? false;
$seo = [
    'title'       => $isInternship ? 'Internships — Young Chanakya X' : 'Careers — Young Chanakya X',
    'description' => $isInternship 
        ? 'Launch your career with a hands-on internship at Young Chanakya X. Work on real projects in marketing, content, tech, and production.' 
        : 'Build your future with Young Chanakya X. Join a passionate team that\'s building a community where stories, knowledge, and people come together.',
    'keywords'    => $isInternship ? 'internships, YCX internship, web developer intern, startup internships' : 'careers, Young Chanakya X, jobs, creator ecosystem, work at YCX',
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
<link rel="stylesheet" href="{{ asset('css/career.css') }}">
@endpush

@section('content')
<div class="career-body">

  <!-- OVERVIEW / HERO -->
  <section id="overview" class="about-hero" style="padding-top: 150px;">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6">
          <div class="eyebrow" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">
            {{ $isInternship ? 'Internships at YCX' : 'Careers at YCX' }}
          </div>
          <h1 style="font-family: 'Fraunces', serif; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15; color: #0c3a30; margin-bottom: 20px;">
            {{ $isInternship ? 'Start Your Journey with Young Chanakya X' : 'Build Your Future with Young Chanakya X' }}
          </h1>
          <p class="hero-copy" style="font-size: 16px; color: var(--text-soft); line-height: 1.6; max-width: 600px;">
            {{ $isInternship 
              ? 'Get real-world experience, build hands-on skills, and make meaningful contributions. Join our team as an intern and work on projects that matter.' 
              : 'Join a passionate team that\'s building a community where stories, knowledge, and people come together. Help us empower the next generation of creators.' }}
          </p>
          
          <div class="about-hero-buttons" style="margin-top: 32px;">
            <a href="#roles" class="btn-lg">
              {{ $isInternship ? 'View Open Internships' : 'View Open Roles' }}
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" width="15" height="15"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-visual">
            <img class="hero-image" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=2000" alt="Team collaborating around a table">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CULTURE / LIFE AT YCX -->
  <section id="culture" class="partner-sec">
    <div class="partner-head text-center">
      <div class="eyebrow rv" style="margin-bottom: 12px;">Life at YCX</div>
      <h2 class="sec-title rv" style="margin-bottom: 16px;">What It's Actually Like Working Here</h2>
      <p class="sec-desc rv mx-auto" style="margin-bottom: 0; line-height: 1.6; max-width: 600px;">We create an environment where ideas are valued, people support one another, and every contribution helps shape a stronger community.</p>
    </div>
    <div class="partner-grid">
      <div class="p-card rv" style="transition-delay:0s">
        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=500&q=80" alt="Learn Every Day" loading="lazy">
        <div class="p-card-ov">
          <span class="tag">01 · Growth</span>
          <div class="p-name">Learn Every Day</div>
          <div class="p-desc">Expand your knowledge by working on real projects and exploring new ideas alongside passionate teammates.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.07s">
        <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?auto=format&fit=crop&w=500&q=80" alt="Collaborate with Purpose" loading="lazy">
        <div class="p-card-ov">
          <span class="tag">02 · Team</span>
          <div class="p-name">Collaborate with Purpose</div>
          <div class="p-desc">Work with people who value teamwork, open communication, and shared success.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.14s">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=500&q=80" alt="Share Your Ideas" loading="lazy">
        <div class="p-card-ov">
          <span class="tag">03 · Voice</span>
          <div class="p-name">Share Your Ideas</div>
          <div class="p-desc">Bring fresh perspectives to the table and help shape experiences that inspire our community.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.21s">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=500&q=80" alt="Take on New Challenges" loading="lazy">
        <div class="p-card-ov">
          <span class="tag">04 · Bold</span>
          <div class="p-name">Take on New Challenges</div>
          <div class="p-desc">Build confidence by solving real problems, developing new skills, and growing through hands-on experience.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
      <div class="p-card rv" style="transition-delay:0.28s">
        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=500&q=80" alt="Celebrate Together" loading="lazy">
        <div class="p-card-ov">
          <span class="tag">05 · Community</span>
          <div class="p-name">Celebrate Together</div>
          <div class="p-desc">From project milestones to community achievements, we celebrate every success as one team.</div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
    </div>
  </section>

  <!-- PERKS & BENEFITS -->
  <section id="perks">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Perks & Benefits</span>
        <h2>Why You'll Love Working Here</h2>
        <p>We believe great work happens when people feel supported, inspired, and empowered to grow. That's why we offer benefits that encourage learning, collaboration, well-being, and career development.</p>
      </div>
      <div class="perks-table">
        <div class="perk-row">
          <span class="pn">01</span>
          <h4>Continuous Learning</h4>
          <p>Access opportunities to build new skills through real-world experiences and ongoing learning.</p>
        </div>
        <div class="perk-row">
          <span class="pn">02</span>
          <h4>Flexible Work Culture</h4>
          <p>Work in an environment built on trust, responsibility, and flexibility.</p>
        </div>
        <div class="perk-row">
          <span class="pn">03</span>
          <h4>Professional Development</h4>
          <p>Take on meaningful opportunities that help you strengthen your skills and advance your career.</p>
        </div>
        <div class="perk-row">
          <span class="pn">04</span>
          <h4>Collaborative Team</h4>
          <p>Be part of a supportive team that values respect, creativity, and shared success.</p>
        </div>
        <div class="perk-row">
          <span class="pn">05</span>
          <h4>Recognition & Rewards</h4>
          <p>We celebrate your contributions and recognize the impact you make.</p>
        </div>
        <div class="perk-row">
          <span class="pn">06</span>
          <h4>Networking Opportunities</h4>
          <p>Connect with creators, entrepreneurs, professionals, and industry experts through our growing community.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OPEN ROLES -->
  <section id="roles">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Open Opportunities</span>
        <h2>{{ $isInternship ? 'Available Internships' : 'Where We Need You Right Now' }}</h2>
        <p>Explore our currently open positions and find where your skills can make the greatest impact.<br> Tap any role below to see the full brief and apply.</p>
      </div>
      <div class="roles-tiles" id="rolesGrid">
        @forelse($jobs as $job)
          <a href="{{ route($job->category == 'internship' ? 'internships.detail' : 'careers.detail', $job->slug) }}" class="role-tile" style="text-decoration: none; display: block;">
            <div class="role-tile-top">
              <h3>{{ $job->title }}</h3>
              <span class="arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
            <div class="role-tile-tags">
              <span>{{ ucfirst($job->work_mode) }}</span>
              <span>{{ $job->department }}</span>
              @if($job->experience)
                <span>{{ $job->experience }}</span>
              @endif
              @if($job->duration)
                <span>{{ $job->duration }}</span>
              @endif
            </div>
            <p class="blurb">{{ $job->tagline }}</p>
          </a>
        @empty
          <div class="text-center w-100 py-5">
            <h4 style="color: var(--text-soft);">No open opportunities at this moment. Check back soon!</h4>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- PROCESS / HIRING PROCESS -->
  <section id="process">
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">Your Journey Starts Here</span>
        <h2>A Simple & Transparent Hiring Process</h2>
        <p>Our hiring process is designed to help us get to know you beyond your resume. We value passion, curiosity, and a willingness to learn as much as experience.</p>
      </div>
      <div class="timeline">
        <div class="t-step">
          <span class="tn">STEP 01</span>
          <h3>Apply</h3>
          <p>Submit your application and tell us about your skills, experience, and interests.</p>
        </div>
        <div class="t-step">
          <span class="tn">STEP 02</span>
          <h3>Profile Review</h3>
          <p>Our team reviews your application to understand your background and potential.</p>
        </div>
        <div class="t-step">
          <span class="tn">STEP 03</span>
          <h3>Interview</h3>
          <p>Meet with our team to discuss your experience, aspirations, and how you can contribute to YCX.</p>
        </div>
        <div class="t-step">
          <span class="tn">STEP 04</span>
          <h3>Skill Assessment</h3>
          <p>For selected roles, you may complete a practical task that reflects the responsibilities of the position.</p>
        </div>
        <div class="t-step">
          <span class="tn">STEP 05</span>
          <h3>Welcome to YCX</h3>
          <p>Once selected, we'll guide you through onboarding and help you begin your journey with Young Chanakya X.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section id="apply-banner">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Don't See The Right Role?</span>
        <h2>We're Always Meeting People Worth Keeping in Mind</h2>
        <p>Even if there isn't a role that matches your skills today, we'd still love to hear from you. Share your profile, and we'll reach out when a suitable opportunity becomes available.</p>
      </div>
      <div class="center-btn">
        <a href="mailto:youngchanakyaconnect@gmail.com?subject=General Career Application - Young Chanakya X" class="btn-lg">
          Tell Us About Yourself
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" width="15" height="15"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>

</div>
@endsection
