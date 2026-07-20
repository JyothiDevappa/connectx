@php
/**
 * Become a Partner Page SEO Data
 */
$seo = [
    'title'       => 'Become a Partner — Join the Young Chanakya X Creator Ecosystem',
    'description' => 'Partner with Young Chanakya X to access a premium creator ecosystem. Content partnerships, brand collaborations, media partnerships, and community connections await.',
    'keywords'    => 'become a Young Chanakya X partner, creator partnership, brand collaboration Young Chanakya X, media partnership India, content creator partner, Young Chanakya partner',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Young Chanakya X Partnership Program",
    "url": "https://connectx.youngchanakya.com/become-a-partner",
    "description": "Partner with Young Chanakya X to access a premium global creator ecosystem. Content partnerships, brand collaborations, media partnerships, and community connections.",
    "provider": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    },
    "serviceType": "Creator Ecosystem Partnership",
    "areaServed": {
        "@type": "Country",
        "name": "India"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Partnership Types",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Content Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Brand Collaborations"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Media Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Community Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Event Partnerships"}}
        ]
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endpush

@section('content')

<style>
#hdr:not(.scrolled) .hamburger span {
    background: #0c3a30 !important;
}

.partner-form-box label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #19352d;
    margin-bottom: 8px;
    text-align: left;
}

.partner-form-box .form-control::placeholder {
    color: #888888 !important;
}

/* ==========================================
   BECOME A PARTNER — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Hero / Contact Section ---- */
@media (max-width: 991px) {
    .partner-contact-section {
        padding: 120px 0 70px;
    }
    .partner-content {
        text-align: center;
        padding-right: 0;
        margin-bottom: 36px;
    }
    .partner-tag {
        margin-left: auto;
        margin-right: auto;
    }
}

@media (max-width: 767px) {
    .partner-contact-section {
        padding: 100px 0 60px;
    }
    .partner-content h1 {
        font-size: 32px;
    }
    .partner-content p {
        font-size: 15px;
    }
    .partner-form-box {
        padding: 28px 20px;
    }
}

@media (max-width: 480px) {
    .partner-contact-section {
        padding: 90px 0 40px;
    }
    .partner-content h1 {
        font-size: 28px;
    }
    .partner-form-box {
        padding: 22px 16px;
    }
    .partner-submit-btn {
        font-size: 15px;
        height: 52px;
    }
}

/* ---- Who We Work With (How Works) Section ---- */
@media (max-width: 991px) {
    .how-work-main-heading {
        font-size: 2rem !important;
    }
    .how-works-section-wrapper {
        padding-top: 60px;
    }
    .mb-70 {
        margin-bottom: 40px;
    }
}

@media (max-width: 767px) {
    .how-work-main-heading {
        font-size: 1.7rem !important;
    }
    .how-works-section-card {
        padding: 2rem 1.25rem !important;
    }
}

@media (max-width: 480px) {
    .how-work-main-heading {
        font-size: 1.5rem !important;
    }
    .how-works-h4 {
        font-size: 1.1rem !important;
    }
}

/* ---- Why Partner Section (text-feature-five) ---- */
@media (max-width: 991px) {
    .text-feature-five {
        margin-top: 80px !important;
    }
    .connectx-partner-bg .text-wrapper {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }
    .connectx-partner-bg .media-wrapper {
        min-height: 280px;
    }
    .connectx-partner-list li {
        font-size: 15px;
    }
}

@media (max-width: 767px) {
    .text-feature-five {
        margin-top: 60px !important;
    }
    .connectx-partner-bg .col-lg-6.order-lg-first {
        order: 2 !important;
    }
    .connectx-partner-bg .col-lg-6.order-lg-last {
        order: 1 !important;
    }
    .connectx-partner-bg .text-wrapper {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
    .title-one h2.text-dark {
        font-size: 26px;
    }
}

@media (max-width: 480px) {
    .title-one h2.text-dark {
        font-size: 22px;
    }
    .connectx-partner-list li {
        font-size: 14px;
    }
}

/* ---- Partnership Opportunities Cards ---- */
@media (max-width: 991px) {
    .connectx-partnership-section.pt-120 {
        padding-top: 70px;
    }
    .connectx-partnership-section.pb-120 {
        padding-bottom: 70px;
    }
    .connectx-card {
        padding: 30px !important;
    }
}

@media (max-width: 767px) {
    .connectx-card {
        padding: 24px 20px !important;
    }
    .connectx-partnership-section .main-title {
        font-size: 28px;
    }
}

@media (max-width: 480px) {
    .connectx-card {
        padding: 20px 16px !important;
    }
    .connectx-card h4 {
        font-size: 18px;
    }
    .connectx-partnership-section .main-title {
        font-size: 24px;
    }
}

/* ---- Expanding Across Industries Section ---- */
@media (max-width: 991px) {
    .connectx-expand-section {
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .connectx-expand-section .col-lg-6.order-lg-last {
        order: 1;
    }
    .connectx-expand-section .col-lg-6.col-md-8 {
        order: 2;
    }
    .connectx-expand-section .ps-xl-5 {
        padding-left: 0 !important;
    }
    .connectx-expand-section .title-three h2 {
        font-size: 28px;
    }
    .connectx-expand-section .media-wrapper {
        margin-top: 30px;
    }
}

@media (max-width: 767px) {
    .connectx-expand-section {
        padding: 0 16px;
    }
    .connectx-expand-section .title-three h2 {
        font-size: 24px;
    }
    .connectx-expand-section .text-lg {
        font-size: 15px;
    }
    .connectx-expand-section .media-wrapper img {
        border-radius: 16px;
        width: 100%;
        height: auto;
    }
}

@media (max-width: 480px) {
    .connectx-expand-section .title-three h2 {
        font-size: 21px;
    }
    .connectx-expand-points li {
        font-size: 14px !important;
        padding-left: 42px !important;
    }
}

/* ---- Checklist Style (Speaker page matching layout) ---- */
.checklist-style {
    padding: 0;
    margin: 25px 0 0 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
    list-style: none;
}

/* ---- Expanding Section Professional Adjustments ---- */
.connectx-expand-pro-img {
    border-radius: 20px;
    box-shadow: 0 24px 50px rgba(12, 58, 48, 0.08);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.connectx-expand-pro-img:hover {
    transform: translateY(-5px);
    box-shadow: 0 32px 60px rgba(12, 58, 48, 0.12);
}

.connectx-expand-section .title-three h2 {
    font-size: clamp(32px, 3.5vw, 44px);
    font-weight: 800;
    color: #0c3a30;
    line-height: 1.2;
    letter-spacing: -1px;
}

.connectx-expand-section .text-lg {
    font-size: 17px;
    color: #54615a;
    line-height: 1.7;
}

/* Override the list sizes for a more sleek look */
.connectx-expand-points li {
    font-size: 16px !important;
    line-height: 1.6em !important;
    padding-left: 42px !important;
    margin-bottom: 14px !important;
    color: #10221c !important;
    font-weight: 500;
}

.connectx-expand-points li:before {
    width: 26px !important;
    height: 26px !important;
    font-size: 11px !important;
    top: 0 !important;
}

.checklist-style li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 500;
    color: #10221c;
}

.checklist-style .check-icon {
    width: 24px;
    height: 24px;
    background: #0c3a30;
    color: #ffffff;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .checklist-style {
        display: inline-flex;
        text-align: left;
        align-items: flex-start;
        margin: 25px auto 0 auto;
    }
}

@media (max-width: 767px) {
    .checklist-style li {
        font-size: 15px;
    }
}

/* ---- Technology Partner Section ---- */
.tech-partner-section {
    background-color: #ffeada;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}
.tech-partner-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(12, 58, 48, 0.05) 0%, rgba(255, 234, 218, 0) 70%);
    pointer-events: none;
}
.tech-partner-inner {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    align-items: center;
    gap: 60px;
}
.tech-partner-inner .tp-content .tp-eyebrow {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #0c3a30;
    margin-bottom: 12px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}
.tech-partner-inner .tp-content .tp-eyebrow::after {
    content: '';
    width: 32px;
    height: 1.5px;
    background: #0c3a30;
}
.tech-partner-inner .tp-content h2 {
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 900;
    color: #0c3a30;
    margin: 0 0 20px;
    line-height: 1.15;
    letter-spacing: -0.5px;
}
.tech-partner-inner .tp-content p {
    font-size: 16px;
    line-height: 1.75;
    color: #3b4e47;
    margin-bottom: 24px;
    max-width: 600px;
}
.tech-partner-inner .tp-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.tech-partner-inner .tp-tag {
    font-size: 12px;
    font-weight: 700;
    color: #0c3a30;
    background: rgba(12, 58, 48, 0.06);
    padding: 6px 14px;
    border-radius: 100px;
    border: 1px solid rgba(12, 58, 48, 0.1);
    transition: all 0.3s ease;
}
.tech-partner-inner .tp-tag:hover {
    background: #0c3a30;
    color: #ffeada;
    border-color: #0c3a30;
    transform: translateY(-2px);
}
.tech-partner-inner .tp-logo-container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.tech-partner-inner .tp-logo-card {
    background: #ffffff;
    padding: 40px;
    border-radius: 24px;
    box-shadow: 0 20px 40px rgba(12, 58, 48, 0.04);
    border: 1px solid rgba(12, 58, 48, 0.05);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    text-decoration: none;
}
.tech-partner-inner .tp-logo-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 210, 177, 0.2) 0%, rgba(255, 255, 255, 0) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}
.tech-partner-inner .tp-logo-card img {
    max-height: 52px;
    width: auto;
    transition: transform 0.4s ease;
    position: relative;
    z-index: 2;
}
.tech-partner-inner .tp-logo-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 30px 60px rgba(12, 58, 48, 0.08);
    border-color: rgba(12, 58, 48, 0.15);
}
.tech-partner-inner .tp-logo-card:hover::before {
    opacity: 1;
}
.tech-partner-inner .tp-logo-card:hover img {
    transform: scale(1.04);
}

@media (max-width: 991px) {
    .tech-partner-inner {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .tech-partner-inner .tp-logo-container {
        justify-content: center;
    }
}

@media (max-width: 767px) {
    .tech-partner-section {
        padding: 60px 0;
    }
    .tech-partner-inner {
        text-align: center;
    }
    .tech-partner-inner .tp-content h2 {
        font-size: 30px;
    }
    .tech-partner-inner .tp-content p {
        font-size: 15px;
    }
    .tech-partner-inner .tp-tags {
        justify-content: center;
    }
    .tech-partner-inner .tp-logo-card {
        padding: 30px;
    }
}

/* ---- 4-column partnership grid ---- */
.tier-grid-four {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}
@media (max-width: 991px) {
    .tier-grid-four {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 767px) {
    .tier-grid-four {
        grid-template-columns: 1fr;
    }
}
</style>

<style>
    .about-hero .eyebrow.rv { color: #0c3a30 !important; font-weight: 700; font-family: 'DM Mono', monospace; font-size: 13px; }
    .about-hero .eyebrow.rv::before { background: #d4936a !important; width: 42px; height: 2px; }
</style>
<div class="about-hero" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Partner With Us</div>
                <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Build the Future Together</h1>
                <p class="hero-copy">Join the Young Chanakya X ecosystem to access a premium global network. We foster meaningful content partnerships, brand collaborations, and community connections that drive innovation and long-term value.</p>
              
                <div class="about-hero-buttons">
                    <a href="#partnership-opportunities" class="about-btn-2">View Partnership Opportunities</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="partner-form-box" id="partner-form">

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

                    <form action="{{ route('partner.apply') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="partner-name">Full Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-name"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Full Name" required>
                                @error('name')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-email">Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                    id="partner-email"
                                    class="form-control"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email Address" required>
                                @error('email')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-phone">Phone / WhatsApp <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-phone"
                                    class="form-control"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="Phone / WhatsApp" required>
                                @error('phone')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-company">Organization / Company Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-company"
                                    class="form-control"
                                    name="company"
                                    value="{{ old('company') }}"
                                    placeholder="Organization / Company Name" required>
                                @error('company')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-designation">Designation / Role <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-designation"
                                    class="form-control"
                                    name="designation"
                                    value="{{ old('designation') }}"
                                    placeholder="Designation / Role" required>
                                @error('designation')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-linkedin">LinkedIn Profile <span class="text-danger">*</span></label>
                                <input type="url"
                                    id="partner-linkedin"
                                    class="form-control"
                                    name="linkedin"
                                    value="{{ old('linkedin') }}"
                                    placeholder="LinkedIn Profile" required>
                                @error('linkedin')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="partner-type">Partnership Type <span class="text-danger">*</span></label>
                                <select class="form-control"
                                    id="partner-type"
                                    name="partnership_type" required>

                                    <option value="" disabled {{ old('partnership_type') ? '' : 'selected' }}>
                                        Select Partnership Type
                                    </option>

                                    @foreach(['Content Partnerships', 'Brand Collaborations', 'Media Partnerships', 'Community Partners'] as $type)
                                        <option value="{{ $type }}" {{ old('partnership_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach

                                </select>
                                @error('partnership_type')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="col-12 mb-4">
                                <label for="partner-website">Website URL (Optional)</label>
                                <input type="url"
                                    id="partner-website"
                                    class="form-control"
                                    name="website"
                                    value="{{ old('website') }}"
                                    placeholder="Website URL">
                                @error('website')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="col-12">

                                <button type="submit"
                                    class="partner-submit-btn">
                                    Submit
                                </button>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================= 
   TECHNOLOGY PARTNER SECTION 
   ========================= -->
<section class="tech-partner-section">
    <div class="container">
        <div class="tech-partner-inner">
            <div class="tp-content">
                <div class="tp-eyebrow">Innovation Partner</div>
                <h2>Technology Partner</h2>
                <p>WeGeni powers the Young Chanakya X platform ecosystem, delivering premium software engineering, robust system integrations, and digital infrastructure scaled for high performance.</p>
                <div class="tp-tags">
                    <span class="tp-tag">System Architecture</span>
                    <span class="tp-tag">Digital Ecosystems</span>
                    <span class="tp-tag">Tech Consulting</span>
                </div>
            </div>
            <div class="tp-logo-container">
                <a href="https://wegeni.com" target="_blank" rel="noopener noreferrer" class="tp-logo-card">
                    <img src="{{ asset('images/logo/wegeni-logo.svg') }}" alt="WeGeni - Technology Partner">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================
CONNECTX PARTNERSHIP OPPORTUNITIES
========================= -->

<style>
  /* TIERS UI FROM SPONSOR PAGE */
  .tiers-section { max-width: 1600px; margin: 0 auto; padding: 100px 2vw; }
  .tiers-header { text-align: center; margin-bottom: 56px; }
  .tiers-header .section-title { max-width: 600px; margin: 0 auto 16px; }
  .tiers-header .section-sub { margin: 0 auto; text-align: center; }

  .tier-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  .tier-grid + .tier-grid { margin-top: 24px; }

  .tier-card { border: 1.5px solid rgba(12,58,48,0.12); border-radius: 20px; padding: 36px 30px; transition: all 0.25s; position: relative; display: flex; flex-direction: column; }
  .tier-card:hover { border-color: #0c3a30; transform: translateY(-3px); box-shadow: 0 24px 60px rgba(12,58,48,0.12); }
  .tier-card.featured { background: #0c3a30; color: #fdf9f5; border-color: #0c3a30; }
  .tier-badge {
    position: absolute; top: -14px; right: 28px; background: #ffd2b1; color: #0c3a30;
    border-radius: 100px; padding: 6px 16px; font-size: 12px; font-weight: 700;
  }
  .tier-name { font-family: 'DM Mono', monospace; font-size: 11px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; color: #2e7d62; margin-bottom: 10px; }
  .tier-card.featured .tier-name { color: #ffd2b1; }
  .tier-title { font-family: 'Playfair Display', Georgia, serif; font-size: 24px; font-weight: 700; color: #0c3a30; margin-bottom: 6px; }
  .tier-card.featured .tier-title { color: #fdf9f5; }
  .tier-tagline { font-size: 13px; color: #5a5a5a; margin-bottom: 22px; line-height: 1.5; }
  .tier-card.featured .tier-tagline { color: rgba(253,249,245,0.7); }
  .tier-list { list-style: none; margin-bottom: 26px; flex-grow: 1; padding: 0; }
  .tier-list li {
    font-size: 13.5px; color: #5a5a5a; padding: 7px 0; border-bottom: 1px solid rgba(12,58,48,0.12);
    display: flex; align-items: flex-start; gap: 9px; line-height: 1.5;
  }
  .tier-card.featured .tier-list li { color: rgba(253,249,245,0.8); border-color: rgba(255,255,255,0.12); }
  .tier-list li:last-child { border-bottom: none; }
  .tier-list li::before { content: '✓'; color: #2e7d62; font-weight: 700; flex-shrink: 0; }
  .tier-card.featured .tier-list li::before { color: #ffd2b1; }
  .tier-list.collapsed li:nth-child(n+4) { display: none; }
  .tier-toggle {
    background: none; border: none; color: #2e7d62; font-size: 13px; font-weight: 600;
    cursor: pointer; padding: 0 0 22px; text-align: left; text-decoration: underline;
  }
  .tier-card.featured .tier-toggle { color: #ffd2b1; }
  
  .tier-btn-primary {
    background: #0c3a30; color: #ffd2b1; padding: 14px 32px; border-radius: 100px;
    font-size: 15px; font-weight: 600; text-decoration: none; display: inline-block; transition: background 0.2s, transform 0.2s;
    border: none; cursor: pointer;
  }
  .tier-btn-primary:hover { background: #1a5c48; transform: translateY(-1px); color: #ffd2b1; }
  .tier-btn-outline {
    border: 1.5px solid #0c3a30; color: #0c3a30; padding: 14px 32px; border-radius: 100px;
    font-size: 15px; font-weight: 500; text-decoration: none; display: inline-block; transition: all 0.2s;
  }
  .tier-btn-outline:hover { background: #0c3a30; color: #ffd2b1; }

  @media(max-width: 991px){
      .tier-grid { grid-template-columns: 1fr; }
  }
</style>

<section class="tiers-section position-relative pt-4 pb-30" id="partnership-opportunities">
  <div class="container">
    <div class="section-head text-center" style="margin-bottom: 50px;">
        <div class="eyebrow rv" style="color: #0c3a30; font-size: 10px; font-weight: 700; letter-spacing: 3px;">Young Chanakya X</div>
        <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Partnership Opportunities</h2>
        <p class="sec-desc rv mx-auto" style="margin-top: 16px; max-width: 600px; line-height: 1.6;">Explore our dynamic partnership levels tailored for visibility, networking, and creative collaboration.</p>
    </div>

    <div class="tier-grid-four">
      <!-- Brand Partners -->
      <div class="tier-card">
        <div class="tier-name">Engagement</div>
        <div class="tier-title">Brand Collaborations</div>
        <div class="tier-tagline">Work with creators and influencers to build narratives.</div>
        <ul class="tier-list collapsed">
          <li>Campaign collaborations</li>
          <li>Product launches and seeding</li>
          <li>Brand storytelling and narratives</li>
          <li>Influencer engagement programs</li>
          <li>Integrated brand experiences</li>
          <li>Sponsored content tracks</li>
          <li>Custom experiential events</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Brand Partner</a>
      </div>
      
      <!-- Media Partners -->
      <div class="tier-card">
        <div class="tier-name">Amplification</div>
        <div class="tier-title">Media Partnerships</div>
        <div class="tier-tagline">Amplify visibility through media coverage and content reach.</div>
        <ul class="tier-list collapsed">
          <li>Event coverage and reporting</li>
          <li>Creator features and spotlights</li>
          <li>Digital interviews and series</li>
          <li>Platform visibility across networks</li>
          <li>Co-branded initiatives</li>
          <li>Syndicated content opportunities</li>
          <li>Exclusive access to major launches</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Media Partner</a>
      </div>

      <!-- Community Partners -->
      <div class="tier-card">
        <div class="tier-name">Network</div>
        <div class="tier-title">Community Partners</div>
        <div class="tier-tagline">Collaborate with communities to expand engagement.</div>
        <ul class="tier-list collapsed">
          <li>Community enrichment programs</li>
          <li>Cross-network collaborations</li>
          <li>Ecosystem conversations</li>
          <li>Targeted audience access</li>
          <li>Joint engagement activities</li>
          <li>Member-exclusive discounts</li>
          <li>Co-hosted digital meetups</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Community Partner</a>
      </div>
      
      <!-- Content Partnerships -->
      <div class="tier-card">
        <div class="tier-name">Creation</div>
        <div class="tier-title">Content Partnerships</div>
        <div class="tier-tagline">Collaborate on creator-led content formats and storytelling.</div>
        <ul class="tier-list collapsed">
          <li>Podcasts and interview series</li>
          <li>Creator-led storytelling formats</li>
          <li>Video and digital content production</li>
          <li>Knowledge-driven content</li>
          <li>Multi-format collaborations</li>
          <li>Co-authored reports and insights</li>
          <li>Educational content creation</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Content Partner</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleTier(btn) {
  const list = btn.previousElementSibling;
  if (list.classList.contains('collapsed')) {
    list.classList.remove('collapsed');
    btn.textContent = 'Show fewer benefits';
  } else {
    list.classList.add('collapsed');
    btn.textContent = 'Show all benefits';
  }
}
</script>


<!-- second section -->

<section class="connectx-how-works-section-wrapper pt-70 lg-pt-80 pb-70 lg-pb-80">
    <div class="container">

        <div class="text-center mb-70">
            <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Our Network</div>
            <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Who We Work With</h2>
            <p class="sec-desc rv mx-auto" style="margin-top: 16px; max-width: 600px; line-height: 1.6;">We partner with diverse organizations to create value, unlock growth, and empower digital ecosystems.</p>
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

<!-- Image Carousel Section -->
@include('partials.image-carousel')

<div class="text-feature-five position-relative mt-40 lg-mt-80 pb-50">

    <div class="container">

        <div class="bg-wrapper connectx-partner-bg">

            <div class="row">

                <!-- CONTENT SIDE -->
                <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">

                    <div class="text-wrapper pt-60 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">

                        <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Why Partner with Us</div>
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

                        <img src="images/assets/screen_07.svg"
                            alt=""
                            class="lazy-img shapes screen_01">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- =========================
EXPANDING ACROSS INDUSTRIES
========================= -->
<section class="connectx-expand-section pt-30 pb-50" style="background-color: #0c3a30;">
    <div class="container py-5">
        <div class="row align-items-center gy-5">

            <!-- CONTENT SIDE -->
            <div class="col-lg-6 order-lg-last wow fadeInRight">
                <div class="px-lg-4" style="margin-top: -30px;">
                    <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px; color: #ffd2b1;">Global Reach</div>
                    <h2 class="sec-title rv" style="color: #ffffff; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15; margin-bottom: 25px;">Expanding Across Industries <br> and Regions</h2>

                    <p class="sec-desc rv" style="margin-bottom: 35px; color: rgba(255, 255, 255, 0.8);">
                        Young Chanakya X is building a network of creators, voices, and collaborators across industries and geographies, enabling partners to access a diverse and growing ecosystem.
                    </p>

                    <style>
                        .connectx-expand-points.theme-dark li {
                            color: #ffffff !important;
                        }
                        .connectx-expand-points.theme-dark li::before {
                            background: rgba(255, 210, 177, 0.15) !important;
                            color: #ffd2b1 !important;
                            border: 1px solid rgba(255, 210, 177, 0.3) !important;
                        }
                    </style>
                    <ul class="style-none connectx-expand-points theme-dark">
                        <li>Multi-industry creator ecosystem</li>
                        <li>Cross-border collaboration opportunities</li>
                        <li>Digital-first scalable network</li>
                    </ul>
                </div>
            </div>

            <!-- IMAGE SIDE -->
            <div class="col-lg-6 col-md-10 m-auto wow fadeInLeft">
                <div class="media-wrapper px-lg-4">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=80"
                        alt="Global business collaboration"
                        class="lazy-img w-100 connectx-expand-pro-img" style="border-radius: 20px;">
                </div>
            </div>

        </div>
    </div>
</section>

@if (session('success'))
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">The Start of a Powerful Collaboration</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    Your partnership application has been successfully received. Our team is currently reviewing your profile and will connect with you shortly to explore how we can align our visions for mutual growth. We look forward to building something extraordinary together.
                </p>
                <a href="{{ url('/') }}" class="btn px-5 py-3 fw-bold text-uppercase w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue Exploring
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successModalElement = document.getElementById('successModal');
        if (successModalElement) {
            var myModal = new bootstrap.Modal(successModalElement);
            myModal.show();
        }
    });
</script>
@endif

@endsection
