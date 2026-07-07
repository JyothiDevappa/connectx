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

  /* Hero Banner */
  .speaker-body .hero {
    background: var(--hero-gradient) !important;
    padding: 180px 0 88px !important;
    position: relative !important;
    overflow: hidden !important;
    height: auto !important;
    min-height: 0 !important;
    display: block !important;
  }

  .speaker-body .hero .wrap {
    position: relative;
    z-index: 2;
  }

  .speaker-body .hero-x-glyph {
    position: absolute;
    right: -100px;
    top: -140px;
    font-family: 'Fraunces', serif;
    font-weight: 700;
    font-size: min(55vw, 820px);
    color: rgba(12, 58, 48, 0.05);
    line-height: 1;
    pointer-events: none;
    z-index: 1;
    user-select: none;
  }

  .speaker-body .hero-grid {
    display: grid;
    grid-template-columns: 1fr 0.95fr;
    gap: 52px;
    align-items: start;
  }

  .speaker-body .hero-copy {
    padding-top: 28px;
    text-align: left;
  }

  .speaker-body .hero h1 {
    font-family: 'Manrope', sans-serif !important;
    font-size: clamp(44px, 5vw, 60px) !important;
    line-height: 1.15 !important;
    font-weight: 900 !important;
    color: var(--ink) !important;
    letter-spacing: -3px !important;
    margin-bottom: 32px !important;
  }

  .speaker-body .hero h1 em {
    font-style: normal !important;
    font-weight: 900 !important;
  }

  .speaker-body .hero p.lead {
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.85 !important;
    color: var(--text-soft) !important;
    max-width: 540px !important;
    margin-bottom: 40px !important;
    font-weight: 400 !important;
  }

  .speaker-body .hero-points {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 34px;
  }

  .speaker-body .hero-points div {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    font-size: 14.5px;
    color: var(--text);
    font-weight: 600;
  }

  .speaker-body .hero-points svg {
    width: 19px;
    height: 19px;
    flex-shrink: 0;
    margin-top: 1px;
    color: var(--ink);
  }

  .speaker-body .hero-stats {
    display: flex;
    gap: 36px;
    padding-top: 26px;
    border-top: 1px solid rgba(12, 58, 48, 0.15);
    max-width: 440px;
  }

  .speaker-body .hero-stats div {
    display: flex;
    flex-direction: column;
    gap: 2px;
  }

  .speaker-body .hero-stats .num {
    font-family: 'Fraunces', serif;
    font-weight: 600;
    font-size: 26px;
    color: var(--ink);
    text-align: left;
  }

  .speaker-body .hero-stats .label {
    font-size: 12px;
    color: var(--text-soft);
    font-weight: 600;
  }

  .speaker-body .hero-form-card {
    background: var(--white);
    border-radius: 22px;
    padding: 36px;
    box-shadow: 0 40px 70px -30px rgba(12, 58, 48, 0.3);
  }

  .speaker-body .hero-form-card .form-kicker {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 22px;
  }

  .speaker-body .hero-form-card .form-kicker h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 21px;
    font-weight: 700;
    color: var(--ink);
    margin: 0;
  }

  .speaker-body .hero-form-card .form-kicker span {
    font-family: 'Space Mono', monospace;
    font-size: 11px;
    color: var(--peach-deep);
    background: var(--ink);
    padding: 5px 11px;
    border-radius: 100px;
  }

  .speaker-body .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-bottom: 14px;
  }

  .speaker-body .field {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 14px;
  }

  .speaker-body .field label {
    font-size: 12px;
    font-weight: 700;
    color: var(--ink);
    letter-spacing: .2px;
    text-align: left;
  }

  .speaker-body .field input,
  .speaker-body .field select,
  .speaker-body .field textarea {
    padding: 12px 14px;
    border-radius: 10px;
    border: 1.5px solid rgba(12, 58, 48, 0.18);
    background: var(--cream);
    font-family: 'Manrope', sans-serif;
    font-size: 14px;
    color: var(--text);
    outline: none;
    transition: border-color .2s;
  }

  .speaker-body .field input:focus,
  .speaker-body .field select:focus,
  .speaker-body .field textarea:focus {
    border-color: var(--ink);
  }

  .speaker-body .field textarea {
    resize: vertical;
    min-height: 80px;
  }

  .speaker-body .radio-group {
    display: flex;
    gap: 10px;
  }

  .speaker-body .radio-group label {
    flex: 1;
    text-align: center;
    padding: 11px;
    border-radius: 10px;
    border: 1.5px solid rgba(12, 58, 48, 0.18);
    font-size: 13px;
    font-weight: 700;
    color: var(--text-soft);
    cursor: pointer;
    transition: all .2s;
    margin-bottom: 0;
  }

  .speaker-body .radio-group input {
    display: none;
  }

  .speaker-body .radio-group label:has(input:checked) {
    background: var(--peach);
    border-color: var(--ink);
    color: var(--ink);
  }

  .speaker-body .form-note {
    font-size: 11.5px;
    color: var(--text-soft);
    text-align: center;
    display: block;
    margin-top: 12px;
  }

  .speaker-body #thankyou {
    display: none;
    text-align: center;
    padding: 30px 10px;
  }

  .speaker-body #thankyou h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 23px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 8px;
  }

  .speaker-body #thankyou p {
    color: var(--text-soft);
    font-size: 14px;
  }

  @media(max-width: 940px) {
    .speaker-body .hero {
      padding-top: 135px !important;
      padding-bottom: 60px !important;
    }
    .speaker-body .hero-grid {
      grid-template-columns: 1fr;
    }
    .speaker-body .hero-copy {
      padding-top: 0;
    }
    .speaker-body .form-row {
      grid-template-columns: 1fr;
    }
  }

  @media(max-width: 576px) {
    .speaker-body .hero {
      padding-top: 115px !important;
      padding-bottom: 40px !important;
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

  /* Who Belongs On This Stage - Different UI */
  .speaker-body .who-belongs-different-ui {
    padding: 100px 0;
    background: var(--cream);
  }
  .speaker-body .diff-ui-chips {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin-top: 24px;
  }
  .speaker-body .diff-ui-chips span {
    font-size: 14px;
    font-weight: 700;
    padding: 12px 18px;
    border-radius: 12px;
    border: 1.5px solid rgba(12, 58, 48, 0.15);
    color: var(--ink);
    background: var(--white);
    text-align: center;
    transition: all 0.3s ease;
    cursor: default;
  }
  .speaker-body .diff-ui-chips span:hover {
    border-color: var(--ink);
    background: rgba(12, 58, 48, 0.04);
    transform: translateY(-2px);
  }
  .speaker-body .diff-ui-chips span.chip-active {
    background: var(--ink);
    color: var(--peach) !important;
    border-color: var(--ink);
  }
  .speaker-body .diff-ui-gallery {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }
  .speaker-body .gallery-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    aspect-ratio: 1 / 1.15;
    box-shadow: 0 10px 30px rgba(12, 58, 48, 0.08);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .speaker-body .gallery-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(12, 58, 48, 0.15);
  }
  .speaker-body .gallery-card .img-container {
    width: 100%;
    height: 100%;
    position: relative;
  }
  .speaker-body .gallery-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .speaker-body .gallery-card:hover img {
    transform: scale(1.05);
  }
  .speaker-body .gallery-card .glass-label {
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    padding: 12px;
    background: rgba(12, 58, 48, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 12px;
    color: var(--peach);
    font-size: 15px;
    font-weight: 700;
    text-align: center;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }
  .speaker-body .gallery-card:hover .glass-label {
    background: var(--ink);
    color: var(--white);
    border-color: var(--peach);
  }
  @media(max-width: 576px) {
    .speaker-body .diff-ui-gallery {
      grid-template-columns: 1fr;
    }
  }
</style>
@endpush

@section('content')
<div class="speaker-body">

  <!-- HERO with embedded form -->
  <section class="hero" id="apply-form">
    <div class="hero-x-glyph">X</div>
    <div class="wrap">
      <div class="hero-grid">
        <div class="hero-copy">
          <span class="eyebrow">Become a YCX Speaker</span>
          <h1>Your story is <em>someone else's</em> turning point.</h1>
          <p class="lead">Young Chanakya X is looking for people whose experience deserves a room, a mic, and an audience that's ready to listen. Apply below — it takes less than five minutes.</p>
          <div class="hero-points">
            <div>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              No cost to apply or to speak
            </div>
            <div>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Speak in the language you're most fluent in
            </div>
            <div>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Full story shaping and rehearsal support included
            </div>
          </div>
        </div>

        <div class="hero-form-card">
          <div class="form-kicker">
            <h3>Apply to speak</h3>
            <span class="mono">STEP 1 OF 1</span>
          </div>
          <form id="speakerForm">
            <div class="form-row">
              <div class="field"><label>First name</label><input type="text" required></div>
              <div class="field"><label>Last name</label><input type="text" required></div>
            </div>
            <div class="form-row">
              <div class="field"><label>Email address</label><input type="email" required></div>
              <div class="field"><label>Phone number</label><input type="tel" required></div>
            </div>
            <div class="field">
              <label>Applying for yourself or nominating someone?</label>
              <div class="radio-group">
                <label><input type="radio" name="applyingFor" checked value="Myself"><span>Myself</span></label>
                <label><input type="radio" name="applyingFor" value="Someone else"><span>Someone else</span></label>
              </div>
            </div>
            <div class="form-row">
              <div class="field">
                <label>You are primarily a...</label>
                <select>
                  <option>Student</option>
                  <option>Entrepreneur</option>
                  <option>Founder</option>
                  <option>Professional</option>
                  <option>Creator</option>
                  <option>Mentor</option>
                  <option>Educator</option>
                  <option>Investor</option>
                  <option>Business leader</option>
                  <option>Organization</option>
                </select>
              </div>
              <div class="field">
                <label>Preferred speaking language</label>
                <select>
                  <option>English</option>
                  <option>हिन्दी (Hindi)</option>
                  <option>தமிழ் (Tamil)</option>
                  <option>తెలుగు (Telugu)</option>
                  <option>ಕನ್ನಡ (Kannada)</option>
                  <option>മലയാളം (Malayalam)</option>
                  <option>বাংলা (Bengali)</option>
                  <option>मराठी (Marathi)</option>
                  <option>ਪੰਜਾਬੀ (Punjabi)</option>
                  <option>ગુજરાતી (Gujarati)</option>
                </select>
              </div>
            </div>
            <div class="field"><label>LinkedIn or portfolio link</label><input type="url" placeholder="https://"></div>
            <div class="field"><label>Share your story and its main message, in 200 words</label><textarea required></textarea></div>
            <button type="submit" class="btn btn-peach">Submit Application</button>
            <span class="form-note">We'll only use this to reach out about your application.</span>
          </form>
          <div id="thankyou">
            <h3>You're in the queue.</h3>
            <p>Thank you for sharing your story — our team will reach out within 5–7 working days if it's a fit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SPEAKING FORMATS -->
  <section class="formats-section" id="formats">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 900px;">
        <span class="eyebrow">Ways To Take The Stage</span>
        <h2 class="sec-title">Every story finds its own format.</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">Not every story fits the same room. Tell us your story and we'll help you find the format it's best suited for. Whether it is a deep-dive podcast episode, a live keynote address, or an interactive workshop session, our goal is to shape your voice for the highest audience resonance.</p>
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

  <!-- ELIGIBILITY -->
  <section class="eligibility-section">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 900px;">
        <span class="eyebrow">Before You Apply</span>
        <h2 class="sec-title">What we look for in a YCX speaker.</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">Not every application makes it to the stage. Here's what tends to make one stand out. We prioritize speakers who bring raw authenticity, clear actionable frameworks, and a genuine willingness to collaborate with our speech coaches to refine their delivery.</p>
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
          <div class="elig-note">Applying doesn't guarantee a stage — but every honest story gets read by a real person on our team.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FROM APPLICATION TO STAGE -->
  <section class="journey-section" id="journey">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">From Application To Stage</span>
        <h2 class="sec-title">The journey to becoming a YCX speaker.</h2>
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
      <div class="section-head">
        <span class="eyebrow">What You Gain</span>
        <h2 class="sec-title">Speaking at YCX isn't just a stage. It's a return.</h2>
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
  <section class="cta-banner">
    <div class="wrap">
      <h2 class="sec-title">Have a story that needs a bigger room?</h2>
      <p class="sec-desc">We're always looking for the next YCX speaker. If you have something to say — or know someone who does — this is where it starts.</p>
      <a href="#apply-form" class="btn btn-primary">Apply to Speak</a>
    </div>
  </section>

  <!-- WHO BELONGS - DIFFERENT UI -->
  <section class="who-belongs-different-ui">
    <div class="wrap">
      <div class="row align-items-center gy-5">
        <div class="col-lg-5">
          <div class="section-head mb-4">
            <span class="eyebrow">Who Belongs On This Stage</span>
            <h2 class="sec-title">If you're building something, you belong here.</h2>
            <p class="sec-desc">YCX speakers come from every corner of ambition — there's no single "type." What they share is a story worth passing on.</p>
          </div>
          <div class="diff-ui-chips">
            <span class="chip-active">Students</span>
            <span>Entrepreneurs</span>
            <span>Founders</span>
            <span>Professionals</span>
            <span>Creators</span>
            <span>Mentors</span>
            <span>Educators</span>
            <span>Investors</span>
            <span>Business Leaders</span>
            <span>Organizations</span>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="diff-ui-gallery">
            <div class="gallery-card">
              <div class="img-container">
                <img src="https://images.unsplash.com/photo-1652471943570-f3590a4e52ed?auto=format&fit=crop&w=500&q=80" alt="Founders">
                <div class="glass-label">Founders</div>
              </div>
            </div>
            <div class="gallery-card">
              <div class="img-container">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=500&q=80" alt="Professionals">
                <div class="glass-label">Professionals</div>
              </div>
            </div>
            <div class="gallery-card">
              <div class="img-container">
                <img src="https://images.unsplash.com/photo-1595211877493-41a4e5f236b3?auto=format&fit=crop&w=500&q=80" alt="Mentors">
                <div class="glass-label">Mentors</div>
              </div>
            </div>
            <div class="gallery-card">
              <div class="img-container">
                <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?auto=format&fit=crop&w=500&q=80" alt="Creators">
                <div class="glass-label">Creators</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" id="faq">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="margin-bottom: 56px; max-width: 900px;">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title">Frequently asked questions.</h2>
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
