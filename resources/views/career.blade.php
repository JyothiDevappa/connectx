@php
/**
 * Careers Page SEO Data
 */
$seo = [
    'title'       => 'Careers — Young Chanakya X',
    'description' => 'Build your future with Young Chanakya X. Join a passionate team that\'s building a community where stories, knowledge, and people come together.',
    'keywords'    => 'careers, Young Chanakya X, jobs, creator ecosystem, work at YCX',
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
          <div class="eyebrow" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Careers at YCX</div>
          <h1 style="font-family: 'Fraunces', serif; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15; color: #0c3a30; margin-bottom: 20px;">Build Your Future with<br>Young Chanakya X</h1>
          <p class="hero-copy" style="font-size: 16px; color: var(--text-soft); line-height: 1.6; max-width: 600px;">Join a passionate team that's building a community where stories, knowledge, and people come together. If you're driven by creativity, collaboration, and meaningful impact, we'd love to hear from you. Help us empower the next generation of creators and shape experiences that truly matter.</p>
          
          <div class="about-hero-buttons" style="margin-top: 32px;">
            <a href="#roles" class="btn-lg">
              View Open Roles
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
  <section id="culture">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Life at YCX</span>
        <h2>What It's Actually Like Working Here</h2>
        <p>We create an environment where ideas are valued, people support one another,<br> and every contribution helps shape a stronger community.</p>
      </div>
      <div class="culture-track">
        <div class="culture-card">
          <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=500&q=80" alt="Learn Every Day">
          <div class="culture-card-text">
            <span class="tag">01 · Growth</span>
            <h4>Learn Every Day</h4>
            <p>Expand your knowledge by working on real projects and exploring new ideas alongside passionate teammates.</p>
          </div>
        </div>
        <div class="culture-card">
          <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?auto=format&fit=crop&w=500&q=80" alt="Collaborate with Purpose">
          <div class="culture-card-text">
            <span class="tag">02 · Team</span>
            <h4>Collaborate with Purpose</h4>
            <p>Work with people who value teamwork, open communication, and shared success.</p>
          </div>
        </div>
        <div class="culture-card">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=500&q=80" alt="Share Your Ideas">
          <div class="culture-card-text">
            <span class="tag">03 · Voice</span>
            <h4>Share Your Ideas</h4>
            <p>Bring fresh perspectives to the table and help shape experiences that inspire our community.</p>
          </div>
        </div>
        <div class="culture-card">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=500&q=80" alt="Take on New Challenges">
          <div class="culture-card-text">
            <span class="tag">04 · Bold</span>
            <h4>Take on New Challenges</h4>
            <p>Build confidence by solving real problems, developing new skills, and growing through hands-on experience.</p>
          </div>
        </div>
        <div class="culture-card">
          <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=500&q=80" alt="Celebrate Together">
          <div class="culture-card-text">
            <span class="tag">05 · Community</span>
            <h4>Celebrate Together</h4>
            <p>From project milestones to community achievements, we celebrate every success as one team.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PERKS & BENEFITS -->
  <section id="perks">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Perks & Benefits</span>
        <h2>Why You'll Love Working Here</h2>
        <p>We believe great work happens when people feel supported, inspired, and empowered to grow. That's why we offer benefits<br> that encourage learning, collaboration, well-being, and career development.</p>
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
        <span class="eyebrow">Open Roles</span>
        <h2>Where We Need You Right Now</h2>
        <p>Explore our currently open positions and find where your skills can make the greatest impact.<br> Tap any role below to see the full brief and apply.</p>
      </div>
      <div class="roles-tiles" id="rolesGrid"></div>
    </div>
  </section>

  <!-- PROCESS / HIRING PROCESS -->
  <section id="process">
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">Your Journey Starts Here</span>
        <h2>A Simple & Transparent Hiring Process</h2>
        <p>Our hiring process is designed to help us get to know you beyond your resume. We value passion,<br> curiosity, and a willingness to learn as much as experience.</p>
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
        <p>Even if there isn't a role that matches your skills today, we'd still love to hear from you. Share your profile,<br> and we'll reach out when a suitable opportunity becomes available.</p>
      </div>
      <div class="center-btn">
        <a href="mailto:youngchanakyaconnect@gmail.com?subject=General Career Application - Young Chanakya X" class="btn-lg">
          Tell Us About Yourself
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" width="15" height="15"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ROLE / APPLY MODAL -->
  <div class="modal-overlay" id="roleModal">
    <div class="modal-panel">
      <button class="modal-close" id="modalCloseBtn">&times;</button>
      <div id="modalContent">
        <h3 id="modalRoleTitle">Role Title</h3>
        <div class="modal-tags" id="modalTags"></div>
        <p class="desc" id="modalDesc"></p>
        <ul id="modalReqs"></ul>
        <hr>
        <form id="modalForm">
          <div class="form-row">
            <div class="field"><label>First name</label><input type="text" required></div>
            <div class="field"><label>Last name</label><input type="text" required></div>
          </div>
          <div class="form-row">
            <div class="field"><label>Email address</label><input type="email" required></div>
            <div class="field"><label>Phone number</label><input type="tel" required></div>
          </div>
          <div class="form-row">
            <div class="field"><label>LinkedIn or portfolio link</label><input type="url" placeholder="https://"></div>
            <div class="field"><label>Resume link</label><input type="url" placeholder="Drive / Dropbox link"></div>
          </div>
          <div class="field"><label>Why YCX, and why this role?</label><textarea required></textarea></div>
          <button type="submit" class="btn-peach">Submit Application</button>
          <span class="modal-note">We'll only use this to reach out about your application.</span>
        </form>
        <div class="modal-thanks" id="modalThanks">
          <h4>You're in the queue.</h4>
          <p>Thanks for applying — our team will review your profile and reach out within 5–7 working days if it's a fit.</p>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const roles = [
      { title: "Content & Storytelling Lead", tags: ["Full-time","Remote","Content"],
        blurb: "Own the editorial voice of YCX — from speaker story shaping to newsletter and social copy.",
        desc: "Own the editorial voice of YCX — from speaker story shaping to newsletter and social copy. You'll work closely with speakers to turn raw experience into something worth reading or watching.",
        reqs: ["2+ years writing or content strategy experience, ideally with an audience-facing brand","Comfortable interviewing people and shaping their stories with care","Strong command of English; a second Indian language is a plus"] },
      { title: "Community Manager", tags: ["Full-time","Hybrid · Tamil Nadu","Community"],
        blurb: "Be the day-to-day face of YCX for our members — onboarding, moderation, and events.",
        desc: "Be the day-to-day face of YCX for our members — onboarding new speakers, moderating conversations, and organizing local meetups and events.",
        reqs: ["1–3 years in community, events, or membership roles","Genuinely enjoys talking to people — this role is mostly conversations","Comfortable coordinating logistics for in-person events"] },
      { title: "Podcast & Video Producer", tags: ["Full-time","Remote","Production"],
        blurb: "Plan, shoot, and edit YCX's podcast and speaker sessions end to end.",
        desc: "Plan, shoot, and edit YCX's podcast and speaker sessions — from pre-production briefs to the final cut that goes out to our audience.",
        reqs: ["Portfolio of edited long-form video or podcast work","Comfortable running a live recording session, not just editing after the fact","An eye for pacing — knowing what to cut is as important as what to keep"] },
      { title: "Growth & Social Media Marketer", tags: ["Full-time","Remote","Marketing"],
        blurb: "Own YCX's presence across Instagram, LinkedIn, and YouTube.",
        desc: "Own YCX's presence across Instagram, LinkedIn, and YouTube — turning speaker sessions and community moments into content that actually travels.",
        reqs: ["Track record of growing an audience from scratch, personal or brand","Understands short-form content and can brief or shoot it yourself","Comfortable with basic analytics to know what's working"] },
      { title: "Partnerships & Sponsorships Associate", tags: ["Full-time","Remote","Partnerships"],
        blurb: "Build relationships with brands and organizations joining the YCX ecosystem.",
        desc: "Build relationships with brands, institutions, and organizations who want to be part of the YCX ecosystem — from event sponsors to platform collaborators.",
        reqs: ["Experience in B2B sales, partnerships, or business development","Can hold a conversation with a founder and a marketing director equally well","Organized enough to keep a pipeline moving without things slipping"] },
      { title: "UI/UX & Brand Designer", tags: ["Freelance","Remote","Design"],
        blurb: "Shape how YCX looks and feels across web, social, and event collateral.",
        desc: "Help shape how YCX looks and feels across web, social, and event collateral — working closely with our founder on brand-critical projects.",
        reqs: ["Strong portfolio in brand and digital design, not just UI screens","Comfortable working independently on a project basis","Bonus: experience designing for community or events brands"] },
      { title: "Web Developer Intern", tags: ["Internship","Remote","Tech"],
        blurb: "Support the build-out of YCX's website and internal tools.",
        desc: "Support the build-out of YCX's website and internal tools — a hands-on internship for someone who wants real shipped work, not busywork.",
        reqs: ["Comfortable with HTML/CSS/JS fundamentals; any framework experience is a bonus","Curious and unafraid to ask questions","Available for a minimum 3-month commitment"] }
    ];

    const grid = document.getElementById('rolesGrid');
    if (grid) {
      roles.forEach(r => {
        const tile = document.createElement('div');
        tile.className = 'role-tile';
        tile.innerHTML = `
          <div class="role-tile-top">
            <h3>${r.title}</h3>
            <span class="arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
          <div class="role-tile-tags">${r.tags.map(t=>`<span>${t}</span>`).join('')}</div>
          <p class="blurb">${r.blurb}</p>
        `;
        tile.addEventListener('click', () => openModal(r));
        grid.appendChild(tile);
      });
    }

    const modal = document.getElementById('roleModal');
    const modalForm = document.getElementById('modalForm');
    const modalThanks = document.getElementById('modalThanks');

    function openModal(role) {
      if (!modal || !modalForm || !modalThanks) return;
      modalForm.style.display = 'flex';
      modalForm.style.flexDirection = 'column';
      modalThanks.style.display = 'none';
      modalForm.reset();
      document.getElementById('modalRoleTitle').textContent = role.title;
      document.getElementById('modalTags').innerHTML = role.tags.map(t=>`<span>${t}</span>`).join('') ;
      document.getElementById('modalDesc').textContent = role.desc;
      document.getElementById('modalReqs').innerHTML = role.reqs.map(r=>`<li>${r}</li>`).join('');
      modal.classList.add('active');
    }

    const bentoRolesBtn = document.getElementById('bentoRolesBtn');
    if (bentoRolesBtn) {
      bentoRolesBtn.addEventListener('click', e => {
        e.preventDefault();
        const rolesSection = document.getElementById('roles');
        if (rolesSection) {
          rolesSection.scrollIntoView({behavior:'smooth'});
        }
      });
    }

    const modalCloseBtn = document.getElementById('modalCloseBtn');
    if (modalCloseBtn) {
      modalCloseBtn.addEventListener('click', () => modal.classList.remove('active'));
    }

    if (modal) {
      modal.addEventListener('click', e => {
        if(e.target === modal) modal.classList.remove('active');
      });
    }

    if (modalForm) {
      modalForm.addEventListener('submit', function(e) {
        e.preventDefault();
        modalForm.style.display = 'none';
        modalThanks.style.display = 'block';
      });
    }
  });
</script>
@endpush
