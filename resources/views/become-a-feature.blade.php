@php
$seo = [
    'title'       => 'Get Featured — The CHRO Mindset Podcast | Young Chanakya X',
    'description' => 'Share the frameworks you\'ve built, the calls only a CHRO has to make, and the mistakes that taught you the most with an audience of HR leaders.',
];
@endphp

@extends('layout.app')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  .chro-feature-body {
    --green: #0c3a30;
    --green-deep: #082721;
    --peach: #ffd2b1;
    --cream: #fbf5ee;
    --white: #ffffff;
    --ink: #17231f;
    --sage: #b9d0c6;
    --amber: #e6884f;
    --line: rgba(12,58,48,0.12);
    --grad: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
  }

  .chro-feature-body img { max-width: 100%; display: block; }
  .chro-feature-body .wrap { max-width: 1180px; margin: 0 auto; padding: 0 32px; }
  .chro-feature-body h1, .chro-feature-body h2, .chro-feature-body h3 { font-family: 'Fraunces', serif; font-weight: 600; letter-spacing: -0.01em; line-height: 1.08; }
  
  .chro-feature-body .eyebrow {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 12px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .chro-feature-body .eyebrow::before {
    content: '';
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background-color: currentColor;
    display: inline-block;
  }

  .chro-feature-body .btn-podcast {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    font-size: 15px;
    padding: 15px 28px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
  }
  .chro-feature-body .btn-podcast-primary { background: var(--green); color: var(--peach); }
  .chro-feature-body .btn-podcast-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 24px rgba(12,58,48,0.28); background: var(--green-deep); }
  .chro-feature-body .btn-podcast-dark { background: var(--ink); color: var(--peach); }
  .chro-feature-body .btn-podcast-outline { background: transparent; border: 1.5px solid var(--green); color: var(--green); }
  .chro-feature-body .btn-podcast-outline:hover { background: var(--green); color: var(--peach); }

  /* ===== WAVEFORM SIGNATURE ===== */
  .chro-feature-body .waveform { display: flex; align-items: center; gap: 3px; height: 32px; }
  .chro-feature-body .waveform span { width: 3px; background: currentColor; border-radius: 2px; display: block; opacity: .55; }
  .chro-feature-body .waveform.animate span { animation: wf-podcast 1.6s ease-in-out infinite; }
  @keyframes wf-podcast { 0%, 100% { transform: scaleY(.4); } 50% { transform: scaleY(1); } }

  /* ===== HERO ===== */
  .chro-feature-body .hero {
    padding-top: 180px;
    padding-bottom: 100px;
    background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.78) 0%, rgba(9, 13, 22, 0.92) 100%),
        url('https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&q=80&w=2000');
    background-size: cover;
    background-position: center top;
    color: #ffffff;
    overflow: hidden;
    position: relative;
  }
  .chro-feature-body .hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 56px;
    align-items: start;
    position: relative;
    z-index: 2;
  }
  .chro-feature-body .hero .eyebrow {
    background: rgba(255, 210, 177, 0.1) !important;
    border: 1px solid rgba(255, 210, 177, 0.2) !important;
    color: #ffd2b1 !important;
    padding: 6px 16px !important;
    font-size: 0.75rem !important;
    font-weight: 700 !important;
    letter-spacing: 1.5px !important;
    text-transform: uppercase !important;
    border-radius: 50px !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    margin-bottom: 0 !important;
  }
  .chro-feature-body .hero .eyebrow::before { display: none !important; }
  .chro-feature-body .hero h1 {
    font-size: clamp(36px, 5vw, 64px) !important;
    font-weight: 900;
    line-height: 1.1;
    letter-spacing: -2px;
    background: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin: 20px 0 22px;
  }
  .chro-feature-body .hero p.lead { font-size: 18px; line-height: 1.6; color: rgba(185,208,198,0.9); max-width: 520px; margin-bottom: 32px; }
  .chro-feature-body .hero-stats { display: flex; gap: 34px; margin-bottom: 36px; flex-wrap: wrap; }
  .chro-feature-body .hero-stats div b { font-family: 'Fraunces', serif; font-size: 26px; display: block; color: #ffd2b1; }
  .chro-feature-body .hero-stats div span { font-size: 13px; color: rgba(185,208,198,0.8); }
  .chro-feature-body .hero-cta-row { display: flex; gap: 14px; align-items: center; margin-bottom: 56px; flex-wrap: wrap; }
  .chro-feature-body .hero-cta-row .waveform { color: #ffd2b1; }
  .chro-feature-body .hero-cta-row span { font-size: 13px; color: rgba(185,208,198,0.8); }

  /* ===== GLASS FORM CARD ===== */
  .chro-feature-body .form-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 32px 28px;
    position: relative;
    top: 0;
  }
  .chro-feature-body .form-card::before { display: none; }
  .chro-feature-body .form-card h3 {
    font-family: 'Fraunces', serif;
    font-size: 22px;
    font-weight: 600;
    color: #ffd2b1;
    padding-bottom: 15px;
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(255, 210, 177, 0.15);
  }
  .chro-feature-body .form-card p.sub { font-size: 13.5px; color: rgba(255,255,255,0.5); margin-bottom: 0; }
  .chro-feature-body .field { margin-bottom: 16px; }
  .chro-feature-body .field label {
    color: #ffd2b1;
    font-size: 0.78rem;
    letter-spacing: 1.5px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 8px;
    display: block;
  }
  .chro-feature-body .field input,
  .chro-feature-body .field select,
  .chro-feature-body .field textarea {
    width: 100%;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #ffffff;
    padding: 13px 16px;
    border-radius: 12px;
    transition: all 0.3s ease;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
  }
  .chro-feature-body .field input:focus,
  .chro-feature-body .field select:focus,
  .chro-feature-body .field textarea:focus {
    outline: none;
    background: rgba(255, 255, 255, 0.08);
    border-color: #ffd2b1;
    box-shadow: 0 0 0 3px rgba(255, 210, 177, 0.15);
    color: #ffffff;
  }
  .chro-feature-body .field input::placeholder,
  .chro-feature-body .field textarea::placeholder { color: rgba(255, 255, 255, 0.4); }
  .chro-feature-body .field textarea { resize: vertical; min-height: 80px; }
  .chro-feature-body .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
  .chro-feature-body .form-card .cf-submit-btn {
    width: 100%;
    background: linear-gradient(135deg, #ffffff 0%, #ffd2b1 100%);
    color: #0c3a30;
    border: none;
    border-radius: 12px;
    padding: 14px;
    font-weight: 700;
    font-size: 0.88rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    cursor: pointer;
    margin-top: 8px;
  }
  .chro-feature-body .form-card .cf-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(255, 210, 177, 0.25);
  }
  .chro-feature-body .form-note { font-size: 11.5px; color: rgba(255,255,255,0.35); margin-top: 14px; text-align: center; }



  /* ===== SECTION HEADERS ===== */
  .chro-feature-body .sec-head { max-width: 640px; margin-bottom: 44px; }
  .chro-feature-body .sec-head .eyebrow { color: var(--amber); margin-bottom: 14px; }
  .chro-feature-body .sec-head h2 { font-size: 36px; color: var(--green); }
  .chro-feature-body .sec-head p { font-size: 16px; color: #4a5750; margin-top: 14px; line-height: 1.6; }
  .chro-feature-body .section-pad { padding: 96px 0; }

  /* ===== WHY (value prop) ===== */
  .chro-feature-body .why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }
  .chro-feature-body .why-card {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: 14px;
    padding: 28px 24px;
    transition: transform .2s ease, box-shadow .2s ease;
  }
  .chro-feature-body .why-card:hover { transform: translateY(-5px); box-shadow: 0 18px 34px rgba(12,58,48,0.1); }
  .chro-feature-body .why-card .icn {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: var(--peach);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    color: var(--green);
  }
  .chro-feature-body .why-card h3 { font-size: 17px; margin-bottom: 8px; color: var(--green); font-weight: 600; }
  .chro-feature-body .why-card p { font-size: 14px; color: #5c6863; line-height: 1.55; }

  /* ===== WHO SHOULD APPLY ===== */
  .chro-feature-body .who { background: var(--green); color: var(--white); }
  .chro-feature-body .who-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
  .chro-feature-body .who-photo { border-radius: 16px; overflow: hidden; position: relative; }
  .chro-feature-body .who-photo img { width: 100%; height: 420px; object-fit: cover; }
  .chro-feature-body .who-photo .badge {
    position: absolute;
    bottom: 18px;
    left: 18px;
    background: var(--peach);
    color: var(--green);
    padding: 10px 16px;
    border-radius: 9px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 12px;
    font-weight: 500;
  }
  .chro-feature-body .checklist { list-style: none; margin: 20px 0 30px; }
  .chro-feature-body .checklist li { display: flex; gap: 12px; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.12); font-size: 15.5px; color: var(--sage); }
  .chro-feature-body .checklist li .tick {
    flex-shrink: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--peach);
    color: var(--green);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    margin-top: 2px;
  }
  .chro-feature-body .not-fit { font-size: 13.5px; color: rgba(255,255,255,0.55); line-height: 1.7; border-left: 2px solid rgba(255,255,255,0.25); padding-left: 14px; margin-top: 8px; }

  /* ===== WHAT WE COVER ===== */
  .chro-feature-body .cover-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .chro-feature-body .pills { display: flex; flex-wrap: wrap; gap: 10px; }
  .chro-feature-body .cover-grid .pill {
    font-size: 13.5px;
    font-weight: 500;
    padding: 10px 18px;
    border-radius: 30px;
    border: 1.5px solid var(--line);
    background: var(--white);
    color: var(--green);
  }
  .chro-feature-body .cover-visual { border-radius: 16px; overflow: hidden; position: relative; }
  .chro-feature-body .cover-visual img { width: 100%; height: 340px; object-fit: cover; }
  .chro-feature-body .cover-visual .tag {
    position: absolute;
    top: 16px;
    right: 16px;
    background: rgba(12,58,48,0.85);
    color: var(--peach);
    padding: 8px 14px;
    border-radius: 8px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11.5px;
  }

  /* ===== WHAT YOU GET ===== */
  .chro-feature-body .get-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
  .chro-feature-body .get-card { display: flex; gap: 18px; background: var(--white); border: 1px solid var(--line); border-radius: 14px; padding: 24px; align-items: flex-start; }
  .chro-feature-body .get-card .num { font-family: 'IBM Plex Mono', monospace; font-size: 13px; color: var(--amber); font-weight: 500; flex-shrink: 0; padding-top: 2px; }
  .chro-feature-body .get-card h3 { font-size: 16.5px; color: var(--green); margin-bottom: 6px; font-weight: 600; }
  .chro-feature-body .get-card p { font-size: 14px; color: #5c6863; line-height: 1.55; }
  .chro-feature-body .get-photo { border-radius: 16px; overflow: hidden; margin-bottom: 36px; }
  .chro-feature-body .get-photo img { width: 100%; height: 320px; object-fit: cover; }

  /* ===== FEATURED SPEAKERS ===== */
  .chro-feature-body .speak-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .chro-feature-body .speak-card { background: var(--white); border-radius: 16px; overflow: hidden; border: 1px solid var(--line); transition: transform .2s ease; }
  .chro-feature-body .speak-card:hover { transform: translateY(-6px); }
  .chro-feature-body .speak-card .photo { height: 230px; overflow: hidden; }
  .chro-feature-body .speak-card .photo img { width: 100%; height: 100%; object-fit: cover; }
  .chro-feature-body .speak-card .info { padding: 20px 22px 24px; }
  .chro-feature-body .speak-card .info .role { font-family: 'IBM Plex Mono', monospace; font-size: 11px; color: var(--amber); text-transform: uppercase; letter-spacing: .06em; }
  .chro-feature-body .speak-card .info h3 { font-size: 17px; color: var(--green); margin: 8px 0 6px; }
  .chro-feature-body .speak-card .info p { font-size: 13.5px; color: #5c6863; line-height: 1.5; }

  /* ===== HOW IT WORKS ===== */
  .chro-feature-body .steps { background: var(--white); }
  .chro-feature-body .steps-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; position: relative; }
  .chro-feature-body .steps-grid::before {
    content: '';
    position: absolute;
    top: 26px;
    left: 6%;
    right: 6%;
    height: 1.5px;
    background: repeating-linear-gradient(90deg, var(--line) 0 8px, transparent 8px 16px);
  }
  .chro-feature-body .step { padding: 0 18px; position: relative; z-index: 2; }
  .chro-feature-body .step .step-no {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: var(--green);
    color: var(--peach);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Fraunces', serif;
    font-size: 19px;
    font-weight: 600;
    margin-bottom: 22px;
  }
  .chro-feature-body .step h3 { font-size: 16.5px; color: var(--green); margin-bottom: 8px; font-weight: 600; }
  .chro-feature-body .step p { font-size: 13.5px; color: #5c6863; line-height: 1.55; }

  /* ===== FINAL CTA ===== */
  .chro-feature-body .final-cta {
    background: var(--grad);
    border-radius: 24px;
    padding: 64px 56px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: wrap;
  }
  .chro-feature-body .final-cta::after {
    content: '';
    position: absolute;
    right: -40px;
    bottom: -60px;
    width: 220px;
    height: 220px;
    border: 2px solid rgba(12,58,48,0.15);
    border-radius: 50%;
  }
  .chro-feature-body .final-cta h2 { font-size: 34px; color: var(--green-deep); max-width: 480px; position: relative; z-index: 2; }
  .chro-feature-body .final-cta p { font-size: 15px; color: #5f4327; margin-top: 12px; max-width: 420px; }
  .chro-feature-body .final-cta .cta-side { position: relative; z-index: 2; display: flex; flex-direction: column; gap: 12px; align-items: flex-start; }

  /* ===== FAQ ===== */
  .chro-feature-body .faq-item { border-bottom: 1px solid var(--line); padding: 22px 0; }
  .chro-feature-body .faq-q { display: flex; justify-content: space-between; align-items: center; cursor: pointer; gap: 20px; }
  .chro-feature-body .faq-q h3 { font-family: 'DM Sans', sans-serif; font-weight: 600; font-size: 16px; color: var(--green); }
  .chro-feature-body .faq-q .plus { font-size: 20px; color: var(--amber); transition: transform .25s ease; flex-shrink: 0; }
  .chro-feature-body .faq-item.open .plus { transform: rotate(45deg); }
  .chro-feature-body .faq-a { max-height: 0; overflow: hidden; transition: max-height .3s ease; }
  .chro-feature-body .faq-item.open .faq-a { max-height: 200px; }
  .chro-feature-body .faq-a p { font-size: 14.5px; color: #5c6863; padding-top: 12px; line-height: 1.6; max-width: 640px; }

  @media(max-width:920px){
    .chro-feature-body .hero-grid { grid-template-columns: 1fr; }
    .chro-feature-body .hero h1 { font-size: 38px; }
    .chro-feature-body .why-grid { grid-template-columns: 1fr 1fr; }
    .chro-feature-body .who-grid, .chro-feature-body .cover-grid, .chro-feature-body .get-grid { grid-template-columns: 1fr; }
    .chro-feature-body .speak-grid { grid-template-columns: 1fr; }
    .chro-feature-body .steps-grid { grid-template-columns: 1fr 1fr; row-gap: 36px; }
    .chro-feature-body .steps-grid::before { display: none; }
    .chro-feature-body .final-cta { padding: 44px 28px; }
    .chro-feature-body .final-cta h2 { font-size: 26px; }
    .chro-feature-body .two-col { grid-template-columns: 1fr; }
  }
  @media(max-width:600px){
    .chro-feature-body .why-grid { grid-template-columns: 1fr; }
    .chro-feature-body .steps-grid { grid-template-columns: 1fr; }
    .chro-feature-body .wrap { padding: 0 20px; }
  }
</style>
@endpush

@section('content')
<div class="chro-feature-body">

  <!-- ============ 1. HERO + FORM ============ -->
  <section class="hero" id="apply">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <span class="eyebrow">Guest applications open</span>
          <h1>Get Featured On Our Podcast</h1>
          <p class="lead">Share the frameworks you've built, the calls only a CHRO has to make, and the mistakes that taught you the most — with an audience of HR leaders making those same calls right now.</p>
          <div class="hero-stats">
            <div><b>100+</b><span>episodes released</span></div>
            <div><b>40k+</b><span>HR leaders reached monthly</span></div>
            <div><b>4</b><span>platforms distributed on</span></div>
          </div>
          <div class="hero-cta-row">
            <div class="waveform animate" aria-hidden="true">
              <span style="height:14px;animation-delay:0s"></span>
              <span style="height:26px;animation-delay:.15s"></span>
              <span style="height:18px;animation-delay:.3s"></span>
              <span style="height:30px;animation-delay:.1s"></span>
              <span style="height:12px;animation-delay:.4s"></span>
              <span style="height:22px;animation-delay:.2s"></span>
            </div>
            <span style="font-size:13px;color:var(--sage);">Real conversations, not scripted panels.</span>
          </div>
        </div>

        <div>
          <div class="form-card">
            <h3><i class="bi bi-mic-fill me-2"></i> Apply to Be a Guest</h3>
            <form id="chroGuestForm">
              @csrf
              <div class="two-col">
                <div class="field"><label>Full Name</label><input type="text" name="full_name" placeholder="e.g. Ananya Rao" required></div>
                <div class="field"><label>Job Title</label><input type="text" name="job_title" placeholder="e.g. CHRO" required></div>
              </div>
              <div class="two-col">
                <div class="field"><label>Company</label><input type="text" name="company" placeholder="Company name" required></div>
                <div class="field"><label>Work Email</label><input type="email" name="email" placeholder="you@company.com" required></div>
              </div>
              <div class="field"><label>LinkedIn Profile</label><input type="url" name="linkedin_url" placeholder="https://linkedin.com/in/yourname"></div>
              <div class="field"><label>What Would You Talk About On Air?</label><textarea name="topic_pitch" placeholder="A transformation you led, a hard call you made, a belief you'd defend..."></textarea></div>
              <button type="submit" class="cf-submit-btn">Submit Application <i class="bi bi-arrow-right ms-2"></i></button>
            </form>
            <p class="form-note" id="formSuccess" style="display:none;">✓ Thanks — your application is in. We'll be in touch within 5 business days.</p>
            <p class="form-note">No pitch decks. No product demos. Just your experience.</p>
          </div>
        </div>
      </div>


    </div>
  </section>

  <!-- ============ 2. WHY GET FEATURED ============ -->
  <section class="section-pad">
    <div class="wrap">
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
  </section>

  <!-- ============ 3. WHO SHOULD APPLY ============ -->
  <section class="who section-pad">
    <div class="wrap">
      <div class="who-grid">
        <div>
          <span class="eyebrow" style="color:var(--peach);">Who should apply</span>
          <h2 style="color:var(--white); font-size:32px; margin:16px 0 8px;">Built for people who've actually done the work</h2>
          <ul class="checklist">
            <li><span class="tick">✓</span>CHROs, CPOs and Heads of People at companies of any size</li>
            <li><span class="tick">✓</span>HR tech founders and operators building for the function</li>
            <li><span class="tick">✓</span>Leaders who've navigated a hard transformation and can talk specifics</li>
            <li><span class="tick">✓</span>Anyone with a sharper point of view than the usual panel talk</li>
          </ul>
          <p class="not-fit">Not the right fit today: vendors pitching a product with no operating experience of their own, or speakers who only want to talk in generalities. We're looking for specifics, not slogans.</p>
        </div>
        <div class="who-photo">
          <img src="https://images.unsplash.com/photo-1758518729371-5ee28c4ddf60?fm=jpg&q=70&w=1400&auto=format&fit=crop" alt="Two HR leaders in conversation">
          <span class="badge">EP. 104 — On Air</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 4. WHAT WE COVER ============ -->
  <section class="section-pad">
    <div class="wrap">
      <div class="cover-grid">
        <div class="cover-visual">
          <img src="https://images.unsplash.com/photo-1767474365536-ef81bfa24c8a?fm=jpg&q=70&w=1400&auto=format&fit=crop" alt="Podcast microphone in studio">
          <span class="tag">ON AIR</span>
        </div>
        <div>
          <span class="eyebrow" style="color:var(--amber);">What we cover</span>
          <h2 style="color:var(--green); font-size:32px; margin:16px 0 18px;">Ten themes. Any of them, in depth.</h2>
          <div class="pills">
            <span class="pill">Talent Strategy</span>
            <span class="pill">Workforce Planning</span>
            <span class="pill">Culture &amp; Change</span>
            <span class="pill">HR Tech &amp; AI</span>
            <span class="pill">DEI &amp; Belonging</span>
            <span class="pill">Leadership Development</span>
            <span class="pill">Employee Experience</span>
            <span class="pill">Compensation &amp; Rewards</span>
            <span class="pill">Future of Work</span>
            <span class="pill">M&amp;A and Org Design</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 5. WHAT YOU GET ============ -->
  <section class="section-pad" style="background:var(--white);">
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">What you get</span>
        <h2>Everything's handled — you just show up</h2>
      </div>
      <div class="get-photo">
        <img src="https://images.unsplash.com/photo-1764664035154-379971f0e936?fm=jpg&q=70&w=1600&auto=format&fit=crop" alt="Podcast recording setup with camera and microphone">
      </div>
      <div class="get-grid">
        <div class="get-card">
          <span class="num">01</span>
          <div><h3>Professional recording, zero prep stress</h3><p>Video or audio, remote or in-studio. Our producer handles the technical side end to end.</p></div>
        </div>
        <div class="get-card">
          <span class="num">02</span>
          <div><h3>Distribution across every major platform</h3><p>YouTube, Spotify, Apple Podcasts and Audible — your episode goes out everywhere our audience listens.</p></div>
        </div>
        <div class="get-card">
          <span class="num">03</span>
          <div><h3>Social clips and quote cards</h3><p>Edited highlight clips and shareable quote graphics, ready for your own LinkedIn and company channels.</p></div>
        </div>
        <div class="get-card">
          <span class="num">04</span>
          <div><h3>A guest spotlight page</h3><p>A dedicated page with your bio, headshot and links — built to be shared and to outlast the episode itself.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 6. FEATURED SPEAKERS ============ -->
  <section class="section-pad">
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">Recent guests</span>
        <h2>Voices already on the show</h2>
        <p>A small sample of the CHROs and People leaders who've sat down for a conversation.</p>
      </div>
      <div class="speak-grid">
        <div class="speak-card">
          <div class="photo"><img src="https://images.unsplash.com/photo-1758518727888-ffa196002e59?fm=jpg&q=70&w=800&auto=format&fit=crop" alt="Guest headshot"></div>
          <div class="info">
            <span class="role">Ep. 112</span>
            <h3>Your Workforce Plan Is Already Obsolete</h3>
            <p>Ananya Rao, CHRO — Fintech Scale-up</p>
          </div>
        </div>
        <div class="speak-card">
          <div class="photo"><img src="https://images.unsplash.com/photo-1758518729286-e8d94cc231f5?fm=jpg&q=70&w=800&auto=format&fit=crop" alt="Guest headshot"></div>
          <div class="info">
            <span class="role">Ep. 109</span>
            <h3>You're a Great CHRO — So Why Aren't You Promoted?</h3>
            <p>Marcus Webb, CPO — Global Manufacturing</p>
          </div>
        </div>
        <div class="speak-card">
          <div class="photo"><img src="https://images.unsplash.com/photo-1758518729459-235dcaadc611?fm=jpg&q=70&w=800&auto=format&fit=crop" alt="Guest headshot"></div>
          <div class="info">
            <span class="role">Ep. 105</span>
            <h3>Culture Drives Brand: CHRO-CMO Alignment</h3>
            <p>Priya Sharma, Head of People — SaaS</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 7. HOW IT WORKS ============ -->
  <section class="steps section-pad">
    <div class="wrap">
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
  </section>

  <!-- ============ 8. FINAL CTA ============ -->
  <section class="section-pad" style="padding-top:0;">
    <div class="wrap">
      <div class="final-cta">
        <div>
          <h2>Your next case study starts with a conversation.</h2>
          <p>Applications are reviewed on a rolling basis — no long queue, no gatekeeping panel.</p>
        </div>
        <div class="cta-side">
          <a href="#apply" class="btn-podcast btn-podcast-dark">Apply to Be a Guest →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 9. FAQ ============ -->
  <section class="section-pad" style="background:var(--white); padding-top:0;">
    <div class="wrap">
      <div class="sec-head">
        <span class="eyebrow">FAQ</span>
        <h2>Before you apply</h2>
      </div>
      <div class="faq-list" style="max-width:760px;">
        <div class="faq-item">
          <div class="faq-q"><h3>How long is the episode?</h3><span class="plus">+</span></div>
          <div class="faq-a"><p>Most conversations run 40–50 minutes. We record more than we release, so the final cut stays tight and useful.</p></div>
        </div>
        <div class="faq-item">
          <div class="faq-q"><h3>Do I need previous podcast experience?</h3><span class="plus">+</span></div>
          <div class="faq-a"><p>No. Most of our guests have never recorded a podcast before. The screening call is there to make the actual recording feel like a normal conversation.</p></div>
        </div>
        <div class="faq-item">
          <div class="faq-q"><h3>Is there a cost to be featured?</h3><span class="plus">+</span></div>
          <div class="faq-a"><p>No. Being a guest is free. We don't accept paid placements or sponsored episodes — every guest is selected on the strength of their experience.</p></div>
        </div>
        <div class="faq-item">
          <div class="faq-q"><h3>Can I choose the topic?</h3><span class="plus">+</span></div>
          <div class="faq-a"><p>Yes. You tell us what you'd want to discuss in your application, and we shape the episode around it during the screening call.</p></div>
        </div>
        <div class="faq-item">
          <div class="faq-q"><h3>When will my episode go live?</h3><span class="plus">+</span></div>
          <div class="faq-a"><p>Typically 3–5 weeks after recording, once editing, clips and the spotlight page are ready.</p></div>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq-item').forEach(function(item) {
      item.querySelector('.faq-q').addEventListener('click', function() {
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(i) {
          i.classList.remove('open');
        });
        if(!isOpen) item.classList.add('open');
      });
    });

    // Mock client-side guest form logic matching speakers/partners
    var chroGuestForm = document.getElementById('chroGuestForm');
    if (chroGuestForm) {
      chroGuestForm.addEventListener('submit', function(e) {
        e.preventDefault();
        chroGuestForm.style.display = 'none';
        var formSuccess = document.getElementById('formSuccess');
        if (formSuccess) formSuccess.style.display = 'block';
      });
    }
  });
</script>
@endsection
