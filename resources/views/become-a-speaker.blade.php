@php
/**
 * Become a Speaker Page SEO Data
 */
$seo = [
    'title'       => 'Become a Speaker — Young Chanakya X',
    'description' => 'Your story is someone else\'s turning point. Apply to speak at Young Chanakya X.',
    'keywords'    => 'become a speaker, Young Chanakya X, creator ecosystem, business leadership, storytelling',
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
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<style>
  :root {
    --ink: #0c3a30;
    --ink-deep: #082821;
    --peach: #ffd2b1;
    --peach-deep: #ffbe8e;
    --cream: #fffaf4;
    --white: #ffffff;
    --text: #12261f;
    --text-soft: #4d6459;
    --hero-gradient: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
  }

  /* Make sure header hamburger is dark green over white/peach hero */
  #hdr:not(.scrolled) .hamburger span {
    background: #0c3a30 !important;
  }

  .speaker-body {
    font-family: 'Manrope', sans-serif;
    color: var(--text);
    background: var(--cream);
    overflow-x: hidden;
  }

  .speaker-body .display {
    font-family: 'Fraunces', serif;
  }

  .speaker-body .mono {
    font-family: 'Space Mono', monospace;
  }

  .speaker-body .wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Buttons */
  .speaker-body .btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 100px;
    font-family: 'Manrope', sans-serif;
    font-weight: 700;
    font-size: 15px;
    cursor: pointer;
    border: 1.5px solid transparent;
    transition: all .25s ease;
    white-space: nowrap;
    text-decoration: none;
  }

  .speaker-body .btn-primary {
    background: var(--ink);
    color: var(--peach) !important;
  }

  .speaker-body .btn-primary:hover {
    background: var(--ink-deep);
    transform: translateY(-2px);
    color: var(--peach) !important;
  }

  .speaker-body .btn-outline {
    border-color: var(--ink);
    color: var(--ink);
    background: transparent;
  }

  .speaker-body .btn-outline:hover {
    background: var(--ink);
    color: var(--peach);
  }

  .speaker-body .btn-peach {
    background: var(--ink);
    color: var(--peach-deep) !important;
    width: 100%;
    justify-content: center;
    border: none;
  }

  .speaker-body .btn-peach:hover {
    background: var(--ink-deep);
    transform: translateY(-2px);
    color: var(--peach-deep) !important;
  }

  .speaker-body .btn svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    fill: none;
  }

  /* Section headers - matching homepage design system exactly */
  .speaker-body .section-head {
    max-width: 640px;
    margin-bottom: 56px;
    text-align: left;
  }

  .speaker-body .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Manrope', sans-serif !important;
    font-size: 10px !important;
    font-weight: 700 !important;
    color: var(--ink) !important;
    letter-spacing: 3px !important;
    text-transform: uppercase !important;
    margin-bottom: 20px !important;
    background: transparent !important;
    padding: 0 !important;
    border-radius: 0 !important;
  }

  .speaker-body .eyebrow::before {
    content: '';
    width: 28px !important;
    height: 2px !important;
    background: var(--peach-deep) !important;
    border-radius: 2px !important;
  }

  .speaker-body .section-head h2,
  .speaker-body h2.sec-title {
    font-family: 'Manrope', sans-serif !important;
    font-size: clamp(34px, 4vw, 56px) !important;
    font-weight: 900 !important;
    line-height: 1.15 !important;
    letter-spacing: -2px !important;
    color: var(--ink) !important;
    margin-bottom: 24px !important;
  }

  .speaker-body .section-head p,
  .speaker-body p.sec-desc {
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.85 !important;
    color: var(--text-soft) !important;
    font-weight: 400 !important;
    margin-bottom: 40px !important;
  }

  /* Hero Banner - using Bootstrap layout */
  .speaker-body .about-hero {
    padding-top: 180px;
    padding-bottom: 80px;
  }

  .speaker-body .about-hero h1 {
    font-size: clamp(34px, 4vw, 56px);
    font-weight: 900;
    line-height: 1.15;
    color: #0c3a30;
    margin-bottom: 20px;
  }

  .speaker-body .about-hero h1 em {
    font-style: italic;
    font-weight: 900;
  }

  .speaker-body .about-hero .hero-copy {
    font-size: 16px;
    line-height: 1.85;
    color: #4d6459;
    margin-bottom: 30px;
  }

  .speaker-body .about-hero-buttons {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .speaker-body .about-hero-buttons a {
    display: inline-block;
    padding: 14px 32px;
    border-radius: 100px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.2s;
  }

  /* Partner form box styling */
  .speaker-body .partner-form-box {
    background: #ffffff;
    border-radius: 14px;
    padding: 32px 28px;
    box-shadow: 0 8px 30px rgba(12, 58, 48, 0.08);
  }

  .speaker-body .partner-form-box label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #19352d;
    margin-bottom: 8px;
    text-align: left;
  }

  .speaker-body .partner-form-box .form-control {
    display: block;
    width: 100%;
    padding: 10px 14px;
    font-size: 14px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ddd;
    border-radius: 6px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  .speaker-body .partner-form-box .form-control::placeholder {
    color: #888888 !important;
  }

  .speaker-body .partner-form-box .form-control:focus {
    border-color: #0c3a30;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(12, 58, 48, 0.1);
  }

  .speaker-body .partner-form-box textarea.form-control {
    resize: vertical;
    min-height: 100px;
  }

  .speaker-body .partner-submit-btn {
    display: inline-block;
    padding: 12px 28px;
    background-color: #0c3a30;
    color: #ffffff;
    border: none;
    border-radius: 100px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }

  .speaker-body .partner-submit-btn:hover {
    background-color: #082821;
    transform: translateY(-1px);
  }

  .speaker-body .text-danger {
    color: #dc3545;
  }

  .speaker-body .mb-3 {
    margin-bottom: 20px;
  }

  .speaker-body .mb-4 {
    margin-bottom: 24px;
  }

  .speaker-body .mt-1 {
    margin-top: 4px;
  }

  .speaker-body .alert {
    padding: 12px 16px;
    border-radius: 6px;
  }

  .speaker-body .alert-danger {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
  }

  @media(max-width: 991px) {
    .speaker-body .about-hero {
      padding: 120px 0 70px;
    }
  }

  @media(max-width: 767px) {
    .speaker-body .about-hero {
      padding: 100px 0 60px;
    }
    .speaker-body .about-hero h1 {
      font-size: 32px;
    }
    .speaker-body .partner-form-box {
      padding: 28px 20px;
    }
  }

  @media(max-width: 480px) {
    .speaker-body .about-hero {
      padding: 90px 0 40px;
    }
    .speaker-body .about-hero h1 {
      font-size: 28px;
    }
    .speaker-body .partner-form-box {
      padding: 22px 16px;
    }
    .speaker-body .partner-submit-btn {
      font-size: 15px;
      height: 52px;
    }
  }

  /* Ways To Take The Stage */
  .speaker-body .formats-section {
    padding: 100px 0;
    background: var(--white);
  }

  .speaker-body .formats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .speaker-body .format-card {
    background: var(--cream);
    border: 1.5px solid rgba(12, 58, 48, 0.1);
    border-radius: 18px;
    padding: 30px 26px;
    transition: border-color .2s, transform .2s;
    text-align: left;
  }

  .speaker-body .format-card:hover {
    border-color: var(--ink);
    transform: translateY(-4px);
  }

  .speaker-body .format-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: var(--ink);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
  }

  .speaker-body .format-icon svg {
    width: 24px;
    height: 24px;
    color: var(--peach);
    fill: none;
  }

  .speaker-body .format-card h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 18px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 9px;
  }

  .speaker-body .format-card p {
    font-size: 13.5px;
    color: var(--text-soft);
    line-height: 1.55;
  }

  @media(max-width: 900px) {
    .speaker-body .formats-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(max-width: 560px) {
    .speaker-body .formats-grid {
      grid-template-columns: 1fr;
    }
  }

  /* Before You Apply (Eligibility) */
  .speaker-body .eligibility-section {
    padding: 100px 0;
    background: var(--white);
  }

  .speaker-body .elig-layout {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 56px;
    align-items: center;
  }

  .speaker-body .elig-image {
    border-radius: 20px;
    overflow: hidden;
    aspect-ratio: 4/5;
  }

  .speaker-body .elig-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .speaker-body .elig-checklist {
    display: flex;
    flex-direction: column;
    gap: 0;
  }

  .speaker-body .elig-row {
    display: flex;
    gap: 16px;
    padding: 20px 0;
    border-bottom: 1px solid rgba(12, 58, 48, 0.1);
    align-items: flex-start;
    text-align: left;
  }

  .speaker-body .elig-row:first-child {
    padding-top: 0;
  }

  .speaker-body .elig-row .tick {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    background: var(--ink);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .speaker-body .elig-row .tick svg {
    width: 14px;
    height: 14px;
    color: var(--peach);
    fill: none;
  }

  .speaker-body .elig-row h4 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 17px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 4px;
  }

  .speaker-body .elig-row p {
    font-size: 13.5px;
    color: var(--text-soft);
    line-height: 1.55;
  }

  .speaker-body .elig-note {
    margin-top: 26px;
    padding: 18px 20px;
    background: var(--peach);
    border-radius: 14px;
    font-size: 13.5px;
    color: var(--ink);
    font-weight: 600;
    text-align: left;
  }

  @media(max-width: 940px) {
    .speaker-body .elig-layout {
      grid-template-columns: 1fr;
    }
    .speaker-body .elig-image {
      aspect-ratio: 16/9;
      order: -1;
    }
  }

  /* What You Gain (Benefits) */
  .speaker-body .benefits-section {
    padding: 100px 0;
    background: var(--cream);
  }

  @media (min-width: 768px) {
    .speaker-body .nowrap-md {
      white-space: nowrap !important;
    }
  }


  .speaker-body .benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    background: rgba(12, 58, 48, 0.12);
    border: 1px solid rgba(12, 58, 48, 0.12);
    border-radius: 20px;
    overflow: hidden;
  }

  .speaker-body .benefit-card {
    background: var(--white);
    padding: 34px 30px;
    text-align: left;
  }

  .speaker-body .benefit-card .mono {
    font-size: 12px;
    color: var(--peach-deep);
    background: var(--ink);
    display: inline-block;
    padding: 4px 10px;
    border-radius: 100px;
    margin-bottom: 16px;
  }

  .speaker-body .benefit-card h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 19px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 10px;
  }

  .speaker-body .benefit-card p {
    font-size: 14px;
    color: var(--text-soft);
    line-height: 1.55;
  }

  @media(max-width: 860px) {
    .speaker-body .benefits-grid {
      grid-template-columns: 1fr;
    }
  }

  /* From Application To Stage (Journey) */
  .speaker-body .journey-section {
    padding: 115px 0;
    background: radial-gradient(circle at 10% 20%, #0d4237 0%, #072821 100%) !important;
    color: var(--cream);
    position: relative;
    overflow: hidden;
  }
  .speaker-body .journey-section::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 190, 142, 0.04) 0%, transparent 70%);
    transform: translate(-50%, -50%);
    pointer-events: none;
  }
  .speaker-body .journey-section .section-head h2 {
    color: var(--white) !important;
    font-family: 'Manrope', sans-serif !important;
    font-size: clamp(34px, 4vw, 56px) !important;
    font-weight: 900 !important;
    line-height: 1.15 !important;
    letter-spacing: -2px !important;
    margin-bottom: 24px !important;
  }
  .speaker-body .journey-section .section-head p {
    color: #ffffff !important;
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.85 !important;
    margin-bottom: 40px !important;
  }
  .speaker-body .journey-section .eyebrow {
    color: var(--orange-warm) !important;
  }
  .speaker-body .journey-section .eyebrow::before {
    background: var(--orange-warm) !important;
  }
  .speaker-body .journey-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
  }
  .speaker-body .journey-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 210, 177, 0.12);
    border-radius: 20px;
    padding: 36px 30px;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    text-align: left;
  }
  .speaker-body .journey-card:hover {
    transform: translateY(-8px);
    border-color: var(--peach);
    background: rgba(255, 255, 255, 0.05);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 1px 1px rgba(255, 210, 177, 0.2);
  }
  .speaker-body .journey-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--peach), var(--peach-deep));
    transition: width 0.4s ease;
  }
  .speaker-body .journey-card:hover::after {
    width: 100%;
  }
  .speaker-body .journey-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
  }
  .speaker-body .journey-num {
    font-family: 'Space Mono', monospace;
    font-size: 13px;
    font-weight: 700;
    color: var(--peach);
    background: rgba(255, 210, 177, 0.12);
    padding: 6px 14px;
    border-radius: 100px;
    border: 1px solid rgba(255, 210, 177, 0.2);
    transition: all 0.3s ease;
    line-height: 1;
  }
  .speaker-body .journey-card:hover .journey-num {
    background: var(--peach);
    color: var(--ink);
    border-color: var(--peach);
  }
  .speaker-body .journey-step-icon {
    width: 24px;
    height: 24px;
    color: rgba(255, 210, 177, 0.4);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .speaker-body .journey-step-icon svg {
    width: 100%;
    height: 100%;
    fill: none;
    stroke: currentColor;
  }
  .speaker-body .journey-card:hover .journey-step-icon {
    color: var(--peach);
    transform: scale(1.15);
  }
  .speaker-body .journey-card h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 21px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 12px;
    transition: color 0.3s ease;
  }
  .speaker-body .journey-card:hover h3 {
    color: var(--peach);
  }
  .speaker-body .journey-card p {
    font-size: 14px;
    line-height: 1.6;
    color: rgba(255, 250, 244, 0.7);
    margin: 0;
  }
  @media(max-width: 991px) {
    .speaker-body .journey-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media(max-width: 640px) {
    .speaker-body .journey-grid {
      grid-template-columns: 1fr;
    }
  }

  /* CTA */
  .speaker-body .cta-banner {
    padding: 110px 0;
    background: var(--hero-gradient);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .speaker-body .cta-banner h2 {
    font-family: 'Manrope', sans-serif !important;
    font-size: clamp(34px, 4vw, 56px) !important;
    font-weight: 900 !important;
    color: var(--ink) !important;
    letter-spacing: -2px !important;
    max-width: 700px;
    margin: 0 auto 24px;
    line-height: 1.15;
  }

  .speaker-body .cta-banner p {
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    color: var(--text-soft) !important;
    max-width: 540px;
    margin: 0 auto 40px !important;
    line-height: 1.85;
    font-weight: 400 !important;
  }

  /* FAQ */
  .speaker-body .faq-section {
    padding: 100px 0;
    background: var(--white) !important;
  }

  .speaker-body .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
  }

  .speaker-body .faq-item {
    border-bottom: 1px solid rgba(12, 58, 48, 0.14);
  }

  .speaker-body .faq-q {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    padding: 26px 0;
    cursor: pointer;
    font-family: 'Manrope', sans-serif !important;
    font-size: 18px;
    font-weight: 700;
    color: var(--ink);
    text-align: left;
  }

  .speaker-body .faq-q .plus {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    border: 1.5px solid var(--ink);
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: var(--ink);
    transition: transform .25s ease;
  }

  .speaker-body .faq-item.open .plus {
    transform: rotate(45deg);
  }

  .speaker-body .faq-a {
    max-height: 0;
    overflow: hidden;
    transition: max-height .3s ease;
  }

  .speaker-body .faq-a p {
    padding-bottom: 26px;
    font-size: 14.5px;
    color: var(--text-soft);
    line-height: 1.65;
    text-align: left;
  }

  .speaker-body .faq-item.open .faq-a {
    max-height: 220px;
  }

  @media(max-width: 900px) {
    .speaker-body .faq-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
  }

  
  /* ---------- Language strip ---------- */
  .speaker-body .lang-strip {
    background: var(--ink);
    color: var(--peach);
    padding: 22px 0;
    overflow: hidden;
  }
  .speaker-body .lang-strip .marquee-track {
    display: flex;
    gap: 44px;
    white-space: nowrap;
    animation: scrollLeft 32s linear infinite;
    width: max-content;
  }
  .speaker-body .lang-strip span {
    font-family: 'Fraunces', serif;
    font-size: 20px;
    font-weight: 500;
    opacity: .9;
    display: flex;
    align-items: center;
    gap: 44px;
  }
  .speaker-body .lang-strip .dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--peach-deep);
    opacity: .6;
  }
  @keyframes scrollLeft {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }
  .speaker-body .lang-caption {
    text-align: center;
    font-size: 13px;
    color: var(--text-soft);
    padding: 16px 0;
    font-weight: 600;
  }


  .ycx-community-section {
  padding: 80px 20px;
  background-color: #ffffff;
  color: #1a1a1a;
}

.container {
  display: flex;
  align-items: center;
  gap: 60px;
  max-width: 1200px;
  margin: 0 auto;
}

.eyebrow {
  text-transform: uppercase;
  letter-spacing: 0.15em;
  font-size: 0.8rem;
  color: #666;
  font-weight: 600;
}

.heading {
  font-size: 2.5rem;
  margin: 15px 0;
  line-height: 1.2;
}

.description {
  font-size: 1.1rem;
  color: #444;
  margin-bottom: 30px;
  max-width: 500px;
}

.button-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 15px;
}

.pill {
  padding: 12px 20px;
  border: 1px solid #e0e0e0;
  border-radius: 50px;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 0.9rem;
}

.pill:hover {
  background: #000;
  color: #fff;
  border-color: #000;
}

.visual-box {
  flex: 1;
  height: 400px;
  background: #f4f4f4; /* Placeholder background */
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Responsive adjustment */
@media (max-width: 768px) {
  .container { flex-direction: column-reverse; }
  .button-grid { grid-template-columns: 1fr 1fr; }
}
</style>
@endpush

@section('content')
<div class="speaker-body">

  <!-- HERO with embedded form - Bootstrap layout matching partner page -->
  <div class="about-hero" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6">
          <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Become a YCX Speaker</div>
          <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Your Story is Someone Else's Turning Point</h1>
          <p class="hero-copy">Young Chanakya X is looking for people whose experience deserves a room, a mic, and an audience that's ready to listen. Apply below — it takes less than five minutes.</p>
          
          <div class="about-hero-buttons" style="margin-top: 40px; display: flex; flex-direction: column; gap: 14px;">
            <div style="display: flex; gap: 12px; align-items: center; font-size: 14.5px; color: #12261f; font-weight: 600;">
              <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
              </span>
              No cost to apply or to speak
            </div>
            <div style="display: flex; gap: 12px; align-items: center; font-size: 14.5px; color: #12261f; font-weight: 600;">
              <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
              </span>
              Speak in the language you're most fluent in
            </div>
            <div style="display: flex; gap: 12px; align-items: center; font-size: 14.5px; color: #12261f; font-weight: 600;">
              <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
              </span>
              Full story shaping and rehearsal support included
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="partner-form-box" id="speaker-apply-form">

            @if (session('error') || $errors->any())
              <div class="alert alert-danger mb-4" style="font-weight: 500;">
                <i class="bi bi-exclamation-triangle-fill me-2"></i> 
                @if (session('error'))
                  {{ session('error') }}
                @else
                  Please correct the errors in the form below.
                @endif
              </div>
            @endif

            <form id="speakerForm">

              <div class="row">

                <!-- 1st row: Full Name -->
                <div class="col-12 mb-3">
                  <label for="speaker-full-name">Full Name <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-full-name"
                    class="form-control"
                    name="full_name"
                    value="{{ old('full_name') }}"
                    placeholder="Full Name" required>
                  @error('full_name')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 2nd row: Phone Number & Email Address (Optional) -->
                <div class="col-md-6 mb-3">
                  <label for="speaker-phone">Phone Number <span class="text-danger">*</span></label>
                  <input type="tel"
                    id="speaker-phone"
                    class="form-control"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Phone Number" required>
                  @error('phone')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label for="speaker-email">Email Address</label>
                  <input type="email"
                    id="speaker-email"
                    class="form-control"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Email Address">
                  @error('email')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 3rd row: Location -->
                <div class="col-12 mb-3">
                  <label for="speaker-location">Location <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-location"
                    class="form-control"
                    name="location"
                    value="{{ old('location') }}"
                    placeholder="Location" required>
                  @error('location')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 4th row: Your Primary Role & Preferred Speaking Language -->
                <div class="col-md-6 mb-3">
                  <label for="speaker-role">Your Primary Role <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-role"
                    class="form-control"
                    name="primary_role"
                    value="{{ old('primary_role') }}"
                    placeholder="e.g. Founder, Student, etc." required>
                  @error('primary_role')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label for="speaker-language">Preferred Speaking Language <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-language"
                    class="form-control"
                    name="speaking_language"
                    value="{{ old('speaking_language') }}"
                    placeholder="e.g. English, Hindi, etc." required>
                  @error('speaking_language')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 5th row: Social Media URL -->
                <div class="col-12 mb-3">
                  <label for="speaker-social">Social Media URL <span class="text-danger">*</span></label>
                  <input type="url"
                    id="speaker-social"
                    class="form-control"
                    name="social_media_url"
                    value="{{ old('social_media_url') }}"
                    placeholder="https://" required>
                  @error('social_media_url')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 6th row: Share Your Story and its Main Message (200 words) -->
                <div class="col-12 mb-4">
                  <label for="speaker-story">Share Your Story and its Main Message (200 words) <span class="text-danger">*</span></label>
                  <textarea id="speaker-story"
                    class="form-control"
                    name="story"
                    placeholder="Tell us your story in 200 words..."
                    style="min-height: 100px; resize: vertical;" required>{{ old('story') }}</textarea>
                  @error('story')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-12">
                  <button type="submit"
                    class="partner-submit-btn"
                    style="width: 100%; text-align: center;">
                    Submit Application
                  </button>
                  <p style="font-size: 12px; color: #4d6459; text-align: center; margin-top: 12px;">
                    We'll only use this to reach out about your application.
                  </p>
                </div>

              </div>

            </form>

            <div id="thankyou" style="display: none; text-align: center; padding: 40px 0;">
              <h3 style="font-family: 'Fraunces', serif; font-size: 26px; color: var(--ink); margin-bottom: 10px;">You're in the queue.</h3>
              <p style="color: var(--text-soft); font-size: 14.5px;">Thank you for sharing your story — our team will reach out within 5–7 working days if it's a fit.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="lang-strip">
    <div class="marquee-track">
      <span>
        English <i class="dot"></i> हिन्दी <i class="dot"></i> தமிழ் <i class="dot"></i> తెలుగు <i class="dot"></i> ಕನ್ನಡ <i class="dot"></i> മലയാളം <i class="dot"></i> বাংলা <i class="dot"></i> मराठी <i class="dot"></i> ਪੰਜਾਬੀ <i class="dot"></i> ગુજરાતી <i class="dot"></i>
        English <i class="dot"></i> हिन्दी <i class="dot"></i> தமிழ் <i class="dot"></i> తెలుగు <i class="dot"></i> ಕನ್ನಡ <i class="dot"></i> മലയാളം <i class="dot"></i> বাংলা <i class="dot"></i> मराठी <i class="dot"></i> ਪੰਜਾਬੀ <i class="dot"></i> ગુજરાતી <i class="dot"></i>
      </span>
    </div>
  </div>
  <!-- <p class="lang-caption">Because the best stories shouldn't wait for a translation.</p> -->



  <section class="ycx-community-section">
  <div class="container">
    <div class="content-wrapper">
      <span class="eyebrow">Who Belongs On This Stage</span>
      <h2 class="heading">If You're Building Something, You Belong Here</h2>
      <p class="description">YCX speakers come from every corner of ambition — there's no single "type." What they share is a story worth passing on.</p>
      
      <div class="button-grid">
        <button class="pill">Students</button>
        <button class="pill">Entrepreneurs</button>
        <button class="pill">Founders</button>
        <button class="pill">Professionals</button>
        <button class="pill">Creators</button>
        <button class="pill">Mentors</button>
        <button class="pill">Educators</button>
        <button class="pill">Investors</button>
        <button class="pill">Business Leaders</button>
        <button class="pill">Organizations</button>
      </div>
    </div>
    
    <div class="visual-box">
      <img src="path-to-your-image.jpg" alt="YCX Ecosystem Visual">
    </div>
  </div>
</section>



  <!-- ELIGIBILITY -->
  <section class="eligibility-section">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 900px;">
        <span class="eyebrow">Before You Apply</span>
        <h2 class="sec-title">What We Look for in a YCX Speaker</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">We value authentic stories, practical insights, and speakers who are open to refining their delivery through expert guidance</p>
      </div>
      <div class="elig-layout">
        <div class="elig-image">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80" alt="Speaker preparing before a talk">
        </div>
        <div class="elig-checklist">
          <div class="elig-row">
            <div class="tick">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <div>
              <h4>A real story with a turning point</h4>
              <p>Not just an achievement — a moment where something genuinely changed.</p>
            </div>
          </div>
          <div class="elig-row">
            <div class="tick">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <div>
              <h4>Willingness to be coached</h4>
              <p>Our team works closely with every speaker — the best sessions come from people open to shaping their story together.</p>
            </div>
          </div>
          <div class="elig-row">
            <div class="tick">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <div>
              <h4>Comfort in your own language</h4>
              <p>Confidence matters more than accent-free English — speak in whatever language you think best in.</p>
            </div>
          </div>
          <div class="elig-row">
            <div class="tick">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <div>
              <h4>Something the audience can use</h4>
              <p>A lesson, a framework, a warning — anything a listener could actually walk away and apply.</p>
            </div>
          </div>
          <!-- <div class="elig-note">Applying doesn't guarantee a stage — but every honest story gets read by a real person on our team.</div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- SPEAKING FORMATS -->
  <section class="formats-section" id="formats">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 900px;">
        <span class="eyebrow">Ways To Take The Stage</span>
        <h2 class="sec-title">Every Story Finds Its Own Format
</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">Tell us your story, and we'll help shape it into the perfect format for your audience. Whether it's a keynote, podcast, or workshop, we'll make it resonate</p>
      </div>
      <div class="formats-grid">
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z"/>
              <path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8"/>
            </svg>
          </div>
          <h3>Podcast Episode</h3>
          <p>A recorded, long-form conversation released across YCX's audio and video channels.</p>
        </div>
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 3h20v14H2z"/>
              <path d="M8 21h8M12 17v4"/>
            </svg>
          </div>
          <h3>Live Stage Talk</h3>
          <p>A solo talk in front of a live YCX audience at one of our city events.</p>
        </div>
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 20h9M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4z"/>
            </svg>
          </div>
          <h3>Workshop Session</h3>
          <p>A hands-on session teaching a skill or framework to a small, focused group.</p>
        </div>
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="7" r="4"/>
              <path d="M2 21v-2a4 4 0 014-4h6a4 4 0 014 4v2"/>
              <circle cx="19" cy="8" r="3"/>
            </svg>
          </div>
          <h3>Panel Conversation</h3>
          <p>A guided discussion alongside other speakers, moderated by the YCX team.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FROM APPLICATION TO STAGE -->
  <section class="journey-section" id="journey">
    <div class="wrap">
      <div class="section-head text-center mx-auto">


        <span class="eyebrow">From Application To Stage</span>

<h2 class="sec-title" style="white-space: nowrap !important; text-align: center !important;"> becoming a YCX speaker</h2>


        <p class="sec-desc">A real story deserves real preparation. Here's exactly what happens between the moment you apply and the moment you're heard.</p>
      </div>
      
      <div class="journey-grid">
        <!-- Step 1 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 01</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M12 20h9M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Apply</h3>
          <p>Tell us who you are and the story only you can tell — through the simple application form above.</p>
        </div>

        <!-- Step 2 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 02</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Discovery Call</h3>
          <p>A short conversation with our team to understand your journey and find its real turning points.</p>
        </div>

        <!-- Step 3 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 03</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Story Shaping</h3>
          <p>We work with you to structure the arc of your talk — where it starts, where it turns, and where it lands.</p>
        </div>

        <!-- Step 4 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 04</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v4M8 23h8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Rehearsal</h3>
          <p>Run through your talk with our team. We tighten the pacing and sharpen the message together.</p>
        </div>

        <!-- Step 5 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 05</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M23 7l-7 5 7 5V7zM1 5h14v14H1z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Record or Go Live</h3>
          <p>Step onto the YCX stage or into the studio — in the language you're most yourself in.</p>
        </div>

        <!-- Step 6 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 06</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 0 1-3.46 0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Amplify</h3>
          <p>Your story goes out across YCX's channels and community, to the people who need to hear it.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT YOU GAIN -->
  <section class="benefits-section">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 1000px;">
        <span class="eyebrow">What You Gain</span>
        <h2 class="sec-title nowrap-md">Speaking at YCX isn't just a stage. It's a return</h2>
        <p class="sec-desc">A platform built for impact. When you share your journey with YCX, you inspire the next generation of builders while expanding your own reach, network, and credibility.</p>
      </div>
      <div class="benefits-grid">
        <div class="benefit-card">
          <span class="mono">REACH</span>
          <h3>An audience that's actually listening</h3>
          <p>Your story reaches a growing, ambitious community across India — not a passive feed.</p>
        </div>
        <div class="benefit-card">
          <span class="mono">CREDIBILITY</span>
          <h3>A stage that adds weight to your name</h3>
          <p>A YCX feature becomes a credible reference point people can find and share.</p>
        </div>
        <div class="benefit-card">
          <span class="mono">NETWORK</span>
          <h3>Direct access to the YCX community</h3>
          <p>Founders, mentors, investors, and educators — all one conversation away.</p>
        </div>
        <div class="benefit-card">
          <span class="mono">CONTENT</span>
          <h3>A professionally produced asset</h3>
          <p>Use your talk on your own website, LinkedIn, or portfolio — it's yours to keep.</p>
        </div>
        <div class="benefit-card">
          <span class="mono">MENTORSHIP</span>
          <h3>Relationships that outlast the session</h3>
          <p>Many speakers stay on as mentors, collaborators, or hosts for future YCX editions.</p>
        </div>
        <div class="benefit-card">
          <span class="mono">LANGUAGE</span>
          <h3>Told the way you'd actually say it</h3>
          <p>Speak in the language your story is truest in — we'll meet you there.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" style="
    background-image: url('{{ asset('images/media/speaker-banner-img.png') }}');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;
    padding: 110px 0;
    text-align: center;
  ">
    {{-- Dark overlay for readability --}}
    <div style="
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(7, 40, 33, 0.82) 0%, rgba(12, 58, 48, 0.72) 100%);
      z-index: 0;
    "></div>

    <div class="wrap" style="position: relative; z-index: 1;">
      <h2 class="sec-title" style="color: #ffffff !important; letter-spacing: -2px;">Have a story that needs a bigger room?</h2>
      <p class="sec-desc" style="color: rgba(255,250,244,0.85) !important;">We're always looking for the next YCX speaker. If you have something to say — or know someone who does — this is where it starts.</p>
      <a href="#apply-form" class="btn btn-primary" style="background: #ffd2b1; color: #0c3a30 !important; font-weight: 700;">Apply to Speak</a>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" id="faq">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="margin-bottom: 56px; max-width: 900px;">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title">Frequently asked questions</h2>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item open">
            <div class="faq-q"><span>How do I become a YCX speaker?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Fill out the application form above with your story and details. Our team reviews it and reaches out within 5–7 working days if it's a fit.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who can apply?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Students, entrepreneurs, founders, professionals, creators, mentors, educators, investors, and business leaders — if you have a story or expertise worth sharing, you're welcome to apply.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is there a cost to speak at YCX?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>No. Speaking on YCX is free. We invest in producing your story because we believe it's worth telling well.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What languages can I speak in?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Whatever language you're most fluent and expressive in. We currently support English, Hindi, Tamil, Telugu, and are actively expanding to more.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I nominate someone else?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes — use the "Someone else" option in the form and share as much as you can about their story. We'll take it from there.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>What happens after I submit the form?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Our team reviews every application. If shortlisted, we'll set up a short discovery call to learn more about your story and next steps.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Do I get help preparing my talk?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes! Our editorial team works closely with you on story structure, presentation, and rehearsals to ensure you're fully prepared.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What formats are available for talks?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We match stories to the best format—which could be a video podcast episode, a live stage talk, a panel discussion, or a small workshop.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I apply with multiple different stories?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes. If you have different experiences or lessons that serve different target audiences, feel free to apply again with a new concept.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who will be in the audience?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>You will speak to an active community of creators, corporate professionals, college students, and founders looking for real, actionable wisdom.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Form submission logic
    const form = document.getElementById('speakerForm');
    if (form) {
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        form.style.display = 'none';
        const thankyou = document.getElementById('thankyou');
        if (thankyou) {
          thankyou.style.display = 'block';
        }
      });
    }

    // FAQ Accordion logic
    document.querySelectorAll('.faq-item').forEach(item => {
      const q = item.querySelector('.faq-q');
      if (q) {
        q.addEventListener('click', () => {
          const isOpen = item.classList.contains('open');
          document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
          if (!isOpen) {
            item.classList.add('open');
          }
        });
      }
    });

    // Different UI section Category Pills interaction
    const diffPills = document.querySelectorAll('.speaker-body .diff-ui-chips span');
    const diffCards = document.querySelectorAll('.speaker-body .gallery-card');
    
    diffPills.forEach(pill => {
      pill.style.cursor = 'pointer';
      pill.addEventListener('click', function() {
        // Toggle active class
        diffPills.forEach(p => p.classList.remove('chip-active'));
        this.classList.add('chip-active');
        
        const selectedText = this.textContent.trim().toLowerCase();
        
        diffCards.forEach(card => {
          const label = card.querySelector('.glass-label').textContent.trim().toLowerCase();
          if (label === selectedText) {
            card.style.transform = 'scale(1.05) translateY(-8px)';
            card.style.boxShadow = '0 25px 50px rgba(12, 58, 48, 0.25)';
            card.querySelector('img').style.transform = 'scale(1.08)';
            card.querySelector('.glass-label').style.background = 'var(--ink)';
            card.querySelector('.glass-label').style.color = 'var(--white)';
            card.querySelector('.glass-label').style.borderColor = 'var(--peach)';
          } else {
            card.style.transform = '';
            card.style.boxShadow = '';
            card.querySelector('img').style.transform = '';
            card.querySelector('.glass-label').style.background = '';
            card.querySelector('.glass-label').style.color = '';
            card.querySelector('.glass-label').style.borderColor = '';
          }
        });
      });
    });
  });
</script>
@endpush
