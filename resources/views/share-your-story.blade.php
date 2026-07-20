@php
/**
 * Speaker Talk Page SEO Data
 */
$seo = [
    'title'       => 'Submit Your Talk Proposal — Share Your Story | Young Chanakya X',
    'description' => 'Apply to speak on the Young Chanakya X stage. Share your story, turning points, entrepreneurial insights, and actionable knowledge with our global community.',
    'keywords'    => 'become a speaker, speaker talk, Young Chanakya X stage, creator ecosystem, business storytelling, share your story, leadership talk',
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
    "@type": "WebPage",
    "@id": "https://connectx.youngchanakya.com/share-your-story#webpage",
    "url": "https://connectx.youngchanakya.com/share-your-story",
    "name": "Submit Your Talk Proposal — Share Your Story | Young Chanakya X",
    "description": "Apply to speak on the Young Chanakya X stage and share your story with our global community.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "about": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
    .iti {
        width: 100%;
        display: block;
    }
    .iti__country-list {
        background-color: #2c323f !important;
        border: 1px solid rgba(255, 210, 177, 0.2) !important;
        color: #ffffff !important;
    }
    .iti__search-input {
        background-color: #1e222b !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    .iti__country {
        padding: 10px 12px !important;
    }
    .iti__country:hover, .iti__country.iti__highlight {
        background-color: rgba(255, 210, 177, 0.1) !important;
    }
    .iti__selected-dial-code {
        color: #ffffff !important;
        margin-left: 6px;
    }
    .iti__arrow {
        border-top-color: #ffffff !important;
    }
    .iti__arrow--up {
        border-bottom-color: #ffffff !important;
    }
</style>
@endpush

@section('content')

<style>
    /* CONNECTORS AUTHORITY DESIGN SYSTEM */
    .authority-hero-section {
        min-height: 85vh;
        background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.75) 0%, #090d16 100%),
            url('https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&q=80&w=2000');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .trust-headline {
        font-size: clamp(36px, 5vw, 60px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -2px;
        background: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Trust Metric Counters Block */
    .trust-badge-pill {
        background: rgba(255, 210, 177, 0.1);
        border: 1px solid rgba(255, 210, 177, 0.2);
        color: #ffd2b1;
        padding: 6px 16px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .trust-metric-box {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 24px;
        transition: transform 0.3s ease;
    }

    .trust-metric-box:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 210, 177, 0.3);
    }

    /* ---- Authority Hero Section ---- */
    @media (max-width: 991px) {
        .authority-hero-section {
            min-height: 70vh;
            background-attachment: scroll;
        }
        .authority-hero-section .container {
            padding-top: 120px;
            padding-bottom: 60px;
        }
        .trust-headline {
            font-size: clamp(30px, 5vw, 48px);
            letter-spacing: -1.5px;
        }
        .authority-hero-section .col-xl-5 {
            margin-top: 30px;
        }
    }

    @media (max-width: 767px) {
        .authority-hero-section {
            min-height: 60vh;
        }
        .authority-hero-section .container {
            padding-top: 100px;
            padding-bottom: 50px;
        }
        .trust-headline {
            font-size: clamp(26px, 7vw, 36px);
            letter-spacing: -1px;
            line-height: 1.15;
        }
        .authority-hero-section p.fs-5 {
            font-size: 15px !important;
        }
        .trust-metric-box {
            padding: 18px;
        }
        .trust-metric-box h4 {
            font-size: 1.8rem;
        }
        .trust-badge-pill {
            font-size: 0.7rem;
            padding: 5px 12px;
        }
    }

    @media (max-width: 480px) {
        .authority-hero-section {
            min-height: auto;
        }
        .authority-hero-section .container {
            padding-top: 90px;
            padding-bottom: 40px;
        }
        .trust-headline {
            font-size: 26px;
            letter-spacing: -0.5px;
        }
        .authority-hero-section .d-flex.flex-wrap {
            flex-direction: column;
            gap: 8px;
        }
    }

    /* Application Form Styles */
    .cx-input {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        padding: 14px 18px;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .cx-input:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: #ffd2b1;
        box-shadow: 0 0 0 3px rgba(255, 210, 177, 0.15);
        color: #ffffff;
    }
    .cx-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }
    .form-select.cx-input {
        background-color: rgba(255, 255, 255, 0.05);
        color: rgba(255, 255, 255, 0.7);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 16px 12px;
        appearance: none;
        -webkit-appearance: none;
    }
    .form-select.cx-input option {
        background: #090d16;
        color: #ffffff;
    }
    .application-submit-btn {
        background: linear-gradient(135deg, #ffffff 0%, #ffd2b1 100%);
        color: #0c3a30;
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .application-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255, 210, 177, 0.2);
        color: #0c3a30;
    }
    .cx-label {
        color: #ffd2b1;
        font-size: 0.8rem;
        letter-spacing: 1.5px;
        font-weight: 700;
        margin-bottom: 8px;
        display: block;
    }

    /* Additional Speaker Talk Sections Styles */
    html {
        scroll-behavior: smooth;
    }
    .st-section {
        padding: 90px 0;
    }
    .st-bg-white {
        background-color: #ffffff;
    }
    .st-bg-cream {
        background-color: #fffaf4;
    }
    .st-bg-soft-cream {
        background-color: #fffcf9;
    }
    .st-bg-grey-green {
        background-color: #f8f6f2;
    }
    .st-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 10px;
        font-weight: 700;
        color: #0c3a30;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }
    .st-eyebrow::before {
        content: '';
        width: 28px;
        height: 2px;
        background: #ffd2b1;
        border-radius: 2px;
    }
    .st-heading {
        color: #0c3a30;
        font-weight: 800;
        font-size: clamp(28px, 4vw, 44px);
        line-height: 1.2;
        letter-spacing: -1px;
        margin-bottom: 24px;
    }
    .st-subheading {
        color: #4d6459;
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 720px;
    }
    
    /* Cards Style */
    .st-card {
        background: #ffffff;
        border: 1px solid rgba(12, 58, 48, 0.08);
        border-radius: 20px;
        padding: 36px 30px;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .st-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(12, 58, 48, 0.06);
        border-color: rgba(12, 58, 48, 0.2);
    }
    .st-card-icon {
        width: 60px;
        height: 60px;
        background-color: rgba(255, 210, 177, 0.15);
        color: #0c3a30;
        font-size: 1.5rem;
        border-radius: 15px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        transition: all 0.3s ease;
    }
    .st-card:hover .st-card-icon {
        background-color: #0c3a30;
        color: #ffd2b1;
    }
    .st-card-title {
        color: #0c3a30;
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 15px;
    }
    .st-card-text {
        color: #4d6459;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Timeline styling for How It Works */
    .st-timeline-item {
        position: relative;
        padding: 30px;
        background: #ffffff;
        border: 1px solid rgba(12, 58, 48, 0.06);
        border-radius: 20px;
        height: 100%;
        transition: all 0.3s ease;
    }
    .st-timeline-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 30px rgba(12, 58, 48, 0.05);
        border-color: rgba(255, 210, 177, 0.5);
    }
    .st-timeline-number {
        font-size: 2.5rem;
        font-weight: 900;
        color: rgba(255, 210, 177, 0.6);
        line-height: 1;
        margin-bottom: 15px;
        font-family: 'Fraunces', serif;
    }

    /* FAQ accordion styling */
    .st-accordion-item {
        background: #ffffff;
        border: 1px solid rgba(12, 58, 48, 0.08) !important;
        border-radius: 16px !important;
        margin-bottom: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .st-accordion-item:hover {
        border-color: rgba(12, 58, 48, 0.2) !important;
    }
    .st-accordion-button {
        font-weight: 700;
        font-size: 1.1rem;
        color: #0c3a30 !important;
        background-color: #ffffff !important;
        padding: 22px 28px;
        border: none !important;
        box-shadow: none !important;
        text-align: left;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .st-accordion-button:not(.collapsed) {
        background-color: #fffcf9 !important;
        border-bottom: 1px solid rgba(12, 58, 48, 0.08) !important;
    }
    .st-accordion-button i {
        transition: transform 0.3s ease;
    }
    .st-accordion-button:not(.collapsed) i {
        transform: rotate(180deg);
    }
    .st-accordion-body {
        padding: 24px 28px;
        color: #4d6459;
        font-size: 1rem;
        line-height: 1.6;
        background-color: #ffffff;
    }

    /* Image Wrapper Styles */
    .st-image-wrapper {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(12, 58, 48, 0.1);
        position: relative;
    }
    .st-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.6s ease;
    }
    .st-image-wrapper:hover img {
        transform: scale(1.05);
    }

    /* Custom Grid for Why Stories Matter (Community Section Look) */
    .st-stories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    @media (max-width: 991px) {
        .st-stories-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 575px) {
        .st-stories-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Checklist Style for What Makes a Great Story */
    .st-checklist {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px 40px;
    }
    .st-check-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        padding: 18px 0;
        border-bottom: 1px solid rgba(12, 58, 48, 0.08);
    }
    .st-check-mark {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        flex-shrink: 0;
        background: #ffd2b1;
        color: #0c3a30;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2px;
        font-weight: bold;
    }
    .st-check-item p {
        font-size: 15.5px;
        color: #4d6459;
        margin-bottom: 0;
    }
    .st-check-item p b {
        font-weight: 600;
        color: #0c3a30;
    }
    @media (max-width: 767px) {
        .st-checklist {
            grid-template-columns: 1fr;
            gap: 0;
        }
    }

    /* Featured Categories (Horizontal Scroll) from ycx.html.html */
    #categories {
        --theme-green: #0c3a30;
        --theme-peach: #ffd2b1;
        --bg-dark: #07221c;
        --bg-darker: #041411;
        --text-main: #f0f5f3;
        --text-muted: #96aca6;
        --accent-peach: #ffd2b1;
        --accent-peach-light: #ffe5d1;
        --accent-gradient: linear-gradient(135deg, var(--theme-peach), var(--accent-peach-light));
        --glass-border: rgba(255, 210, 177, 0.15);
        --font-head: 'Outfit', sans-serif;
        --font-body: 'Poppins', sans-serif;

        background-color: var(--bg-darker);
        overflow: hidden;
        padding: 80px 0;
        font-family: var(--font-body);
    }

    #categories h2 {
        font-family: var(--font-head);
        color: var(--text-main) !important;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    #categories h3 {
        font-family: var(--font-head);
    }

    #categories .gradient-text {
        background: var(--accent-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline-block;
    }

    .categories-wrapper {
        display: flex;
        gap: 2rem;
        padding: 2rem 0;
        overflow-x: auto;
        /* No snap — JS handles smooth momentum scrolling */
        scrollbar-width: none; /* Firefox */
    }

    .categories-wrapper::-webkit-scrollbar {
        display: none; /* Chrome */
    }

    .category-panel {
        min-width: 350px;
        height: 500px;
        border-radius: 30px;
        padding: 2.5rem 2.5rem 0 2.5rem;
        display: flex;
        flex-direction: column;
        position: relative;
        transition: all 0.4s ease;
        border: 1px solid var(--glass-border);
        overflow: hidden;
        background: linear-gradient(135deg, rgba(12, 58, 48, 0.25) 0%, rgba(7, 34, 28, 0.45) 100%);
        backdrop-filter: blur(12px);
    }

    .category-panel::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        border-radius: 30px;
        background: var(--accent-gradient);
        opacity: 0;
        z-index: 0;
        transition: opacity 0.5s ease;
    }

    .category-panel:hover::before {
        opacity: 0.1;
    }

    .category-panel:hover {
        transform: scale(1.02);
        border-color: rgba(255, 210, 177, 0.4);
    }

    .category-panel > * {
        position: relative;
        z-index: 1;
    }

    .category-panel h3 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        color: var(--text-main);
    }

    .cat-number {
        color: var(--theme-peach);
        font-weight: 600;
        letter-spacing: 1px;
        font-size: 1.1rem;
        display: block;
        margin-bottom: 0.5rem;
    }

    .cat-desc {
        color: var(--text-muted);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 0;
    }

    .cat-img-box {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 85%;
        height: 260px;
        border-radius: 24px 0 0 0;
        overflow: hidden;
        border-left: 2px solid var(--theme-peach);
        border-top: 2px solid var(--theme-peach);
        z-index: 1;
    }

    .cat-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .category-panel:hover .cat-img-box img {
        transform: scale(1.1);
    }
    
    .cat-arrow {
        display: none;
    }

    /* Scroll Reveal Animations for Explore Conversations */
    #categories .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
    }

    #categories .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>


<div class="authority-hero-section d-flex align-items-center position-relative">
    <div class="container pt-150 pb-100">
        <div class="row align-items-center g-5">
            
            <!-- Left Side Content -->
            <div class="col-lg-6">

                <div class="trust-badge-pill mb-4">
                    <i class="bi bi-mic-fill"></i> Share Your Voice & Story
                </div>

                <h1 class="trust-headline mb-4">Your Story Our Stage Global Impact</h1>
                <p class="text-white fs-5 mb-4" style="max-width: 600px; line-height: 1.6;">
                    Young Chanakya X provides a premium platform for visionary builders, ecosystem creators, industry veterans, and passionate leaders to share their transformative ideas, turning points, and actionable knowledge.
                </p>

                <ul class="style-none mt-4 text-white" style="list-style: none; padding: 0;">
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                            <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
                        </span>
                        Transformative Storytelling & Editorial Support
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                            <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
                        </span>
                        Engage with an Elite Audience of Thinkers & Builders
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                            <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
                        </span>
                        Multi-channel Distribution & Global Reach
                    </li>
                </ul>

            </div>

            <!-- Right Side Form Box -->
            <div class="col-lg-6">
                <div class="trust-metric-box">
                    <h4 class="text-white h5 mb-4" style="color: #ffd2b1 !important; border-bottom: 1px solid rgba(255, 210, 177, 0.15); padding-bottom: 15px;">
                        <i class="bi bi-patch-check-fill me-2"></i> Submit Talk Proposal
                    </h4>

                    <form id="speakerTalkForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="cx-label">Full Name *</label>
                                <input type="text" class="form-control cx-input" name="full_name" placeholder="E.g. John Doe" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="cx-label">Phone Number *</label>
                                <input type="tel" class="form-control cx-input" name="phone" placeholder="E.g. 9876543210" required>
                            </div>

                            <div class="col-md-6">
                                <label class="cx-label">Email ID *</label>
                                <input type="email" class="form-control cx-input" name="email" placeholder="john@company.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="cx-label">Social/LinkedIn Profile *</label>
                                <input type="url" class="form-control cx-input" name="social_url" placeholder="https://linkedin.com/in/..." required>
                            </div>

                            <div class="col-md-7">
                                <label class="cx-label">Proposed Talk Title *</label>
                                <input type="text" class="form-control cx-input" name="talk_title" placeholder="E.g. Scaling Tech Teams in 2026" required>
                            </div>

                            <div class="col-md-5">
                                <label class="cx-label">Speaking Language *</label>
                                <input type="text" class="form-control cx-input" name="speaking_language" placeholder="E.g. English, Hindi" required>
                            </div>

                            <div class="col-12">
                                <label class="cx-label">Talk Summary / Core Message *</label>
                                <textarea class="form-control cx-input" name="talk_summary" rows="3" placeholder="Briefly describe the key lessons or insights the audience will walk away with..." required></textarea>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn w-100 py-3 fw-bold text-uppercase application-submit-btn" style="letter-spacing: 1px; font-size: 0.85rem;">
                                    Submit Proposal <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ABOUT STORY TALKS -->
<section class="st-section st-bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="st-eyebrow">Introducing YCX Stage</div>
                <h2 class="st-heading">Raw Journeys. Unfiltered Wisdom. Real Impact.</h2>
                <p class="mb-4 text-muted" style="font-size: 1.05rem; line-height: 1.7;">
                    YCX Story Talks is a premium series dedicated to capturing the definitive turning points of ecosystem builders, founders, creators, and professionals. Unlike polished public relations statements, our format delves into the real challenges, early bottlenecks, and critical pivots that defined their trajectories.
                </p>
                <p class="mb-4 text-muted" style="font-size: 1.05rem; line-height: 1.7;">
                    We believe that true insight lies in the details of the climb—not just the view from the summit. Through live keynote stages, professional studio podcasts, and digital distributions, we provide the platform to document your experience for the next generation of builders.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="st-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&q=80&w=1200" alt="YCX Speaker Recording Session">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXPLORE CONVERSATIONS -->
<section id="categories">
    <div class="container">
        <h2 class="reveal" style="font-size: 2.5rem; margin-bottom: 1rem; color: #f0f5f3 !important;">Explore <span class="gradient-text">Conversations</span></h2>
        <div class="categories-wrapper reveal">
            <!-- 01 Career Journey -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">01</span>
                    <h3>Career Journey</h3>
                    <p class="cat-desc">Navigating pivots, ladders, and professional evolution.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=600&q=80" alt="Career Journey">
                </div>
            </div>
            <!-- 02 Startup Stories -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">02</span>
                    <h3>Startup Stories</h3>
                    <p class="cat-desc">The grit, the funding, and building from zero to one.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&q=80" alt="Startup Stories">
                </div>
            </div>
            <!-- 03 Leadership -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">03</span>
                    <h3>Leadership</h3>
                    <p class="cat-desc">Managing teams, setting vision, and driving culture.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600&q=80" alt="Leadership">
                </div>
            </div>
            <!-- 04 Innovation -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">04</span>
                    <h3>Innovation</h3>
                    <p class="cat-desc">Breaking norms and creating the technology of tomorrow.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80" alt="Innovation">
                </div>
            </div>
            <!-- 05 Personal Growth -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">05</span>
                    <h3>Personal Growth</h3>
                    <p class="cat-desc">Mental resilience, habit building, and finding purpose.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1490730141103-6cac27aaab94?w=600&q=80" alt="Personal Growth">
                </div>
            </div>
            <!-- 06 Community Impact -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">06</span>
                    <h3>Community Impact</h3>
                    <p class="cat-desc">How grassroots movement and collective action reshape industries.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=600&q=80" alt="Community Impact">
                </div>
            </div>
            <!-- 07 Financial Clarity -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">07</span>
                    <h3>Financial Clarity</h3>
                    <p class="cat-desc">Mastering money, capital allocation, and wealth-building mindsets.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80" alt="Financial Clarity">
                </div>
            </div>
            <!-- 08 Legacy Building -->
            <div class="category-panel">
                <div class="cat-content">
                    <span class="cat-number">08</span>
                    <h3>Legacy Building</h3>
                    <p class="cat-desc">Creating lasting institutions, brands, and cultural contributions.</p>
                </div>
                <div class="cat-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="cat-img-box">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80" alt="Legacy Building">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY STORIES MATTER -->
<section class="partner-sec st-section st-bg-soft-cream" id="stories-matter" style="padding-left: 32px; padding-right: 32px;">
    <div class="partner-head text-center mb-5">
        <div class="eyebrow rv" style="margin-bottom: 12px; color: #0c3a30 !important;">The Power of Narrative</div>
        <h2 class="sec-title rv" style="margin-bottom: 16px; color: #0c3a30 !important;">Why Stories Matter</h2>
        <p class="sec-desc rv mx-auto" style="margin-bottom: 0; line-height: 1.6; max-width: 600px; color: #4d6459;">Lessons aren't found in business summaries; they are forged in the moments of crisis, uncertainty, and breakthroughs.</p>
    </div>
    
    <div class="st-stories-grid">
        <!-- Card 1 -->
        <div class="p-card rv" style="transition-delay:0s">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Inspire Action — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">01</div>
                <div class="p-name">Inspire Action</div>
                <div class="p-desc">Your path could be the exact blueprint someone else needs to take their first step forward.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        
        <!-- Card 2 -->
        <div class="p-card rv" style="transition-delay:0.07s">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80" alt="Create Learning — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">02</div>
                <div class="p-name">Create Learning</div>
                <div class="p-desc">Experiences, especially the difficult ones, are the greatest teachers we can offer one another.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        
        <!-- Card 3 -->
        <div class="p-card rv" style="transition-delay:0.14s">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" alt="Build Community — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">03</div>
                <div class="p-name">Build Community</div>
                <div class="p-desc">Honest conversations bridge the gap between strangers, turning shared challenges into collective strength.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <!-- Card 4 -->
        <div class="p-card rv" style="transition-delay:0.21s">
            <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=600&q=80" alt="Vocalize Experience — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">04</div>
                <div class="p-name">Vocalize Experience</div>
                <div class="p-desc">Documenting your hard-earned wisdom turns temporary challenges into a permanent legacy.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <!-- Card 5 -->
        <div class="p-card rv" style="transition-delay:0.28s">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="Expand Visibility — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">05</div>
                <div class="p-name">Expand Visibility</div>
                <div class="p-desc">Putting your journey in front of a global ecosystem attracts partners, investors, and talent.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <!-- Card 6 -->
        <div class="p-card rv" style="transition-delay:0.35s">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="Foster Innovation — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">06</div>
                <div class="p-name">Foster Innovation</div>
                <div class="p-desc">Uncovering operational failures forces the ecosystem to design smarter, faster, and better solutions.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
    </div>
</section>

<!-- EDITORIAL LENS (WHAT MAKES A GREAT STORY) -->
<section class="st-section st-bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <div class="st-eyebrow">Our Editorial Lens</div>
                <h2 class="st-heading">What Makes a Great Story</h2>
                <p class="mb-4 text-muted" style="font-size: 1.05rem; line-height: 1.7;">
                    Every narrative we select is carefully analyzed to ensure it contains actionable value. We work with you to shape your talk around four primary inflection points:
                </p>
                <div class="d-flex gap-4 mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 45px; height: 45px; background: rgba(12, 58, 48, 0.05); color: #0c3a30; font-weight: 700;">1</div>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">The Trigger Point</h4>
                        <p class="text-muted small mb-0">The exact moment, insight, or challenge that set your build in motion.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 45px; height: 45px; background: rgba(12, 58, 48, 0.05); color: #0c3a30; font-weight: 700;">2</div>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">The Friction Zone</h4>
                        <p class="text-muted small mb-0">The unexpected bottleneck or setback that forced you to question the model.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 45px; height: 45px; background: rgba(12, 58, 48, 0.05); color: #0c3a30; font-weight: 700;">3</div>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">The Breakthrough</h4>
                        <p class="text-muted small mb-0">The structural solution, mental shift, or process pivot that resolved the issue.</p>
                    </div>
                </div>
                <div class="d-flex gap-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 45px; height: 45px; background: rgba(12, 58, 48, 0.05); color: #0c3a30; font-weight: 700;">4</div>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">The Framework</h4>
                        <p class="text-muted small mb-0">The core takeaway or step-by-step model that the audience can implement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="st-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&q=80&w=1200" alt="Mic on stage">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT MAKES A GREAT STORY (CHECKLIST) -->
<section class="st-section st-bg-white">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">The Standard</div>
            <h2 class="st-heading">What Makes a Great Story?</h2>
            <p class="st-subheading mx-auto">Not every experience becomes a Story Talks feature. Here's what we look for.</p>
        </div>
        <div class="st-checklist">
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Authentic experience</b> — something that actually happened to you.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Honest lessons</b> — no varnish over the hard parts.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Personal growth</b> — a visible before and after.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Challenges faced</b> — the friction is part of the story.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Positive impact</b> — on you, or on someone around you.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Practical insights</b> — something a listener can actually use.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Respectful storytelling</b> — fair to everyone in the story, not just you.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Original content</b> — your words, your version, first-hand.</p>
            </div>
        </div>
    </div>
</section>

<!-- STORIES WE'RE LOOKING FOR -->
<section class="st-section st-bg-grey-green">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">Curated Themes</div>
            <h2 class="st-heading">Stories We Are Looking For</h2>
            <p class="st-subheading mx-auto">We select narratives from a wide range of verticals, focusing on raw perspective and operational wisdom.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-bootstrap-fill"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">The Grit Climb</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Bootstrapping journeys, scaling from zero, funding obstacles, and surviving initial cash-flow crunches.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-cpu-fill"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">Tech Frontiers</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Building complex systems, utilizing AI systems, handling tech debt, and pivoting software architectures.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">Social Innovations</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Creating grassroot changes, educational shifts, micro-reforms, and high-impact non-profit constructs.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-buildings-fill"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">Corporate Pivots</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Intrapreneurship, executing major digital shifts in legacy structures, and reforming internal policies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY GET FEATURED -->
<section class="st-section st-bg-white">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">Speaker Benefits</div>
            <h2 class="st-heading">Why Get Featured on YCX</h2>
            <p class="st-subheading mx-auto">We provide premium assets, production value, and ecosystem access to ensure your story reaches the right minds.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-camera-reels-fill"></i>
                    </div>
                    <h3 class="st-card-title">Cinematic Production</h3>
                    <p class="st-card-text">Every talk is recorded with cinema-grade cameras, professional studio lighting, and high-end audio mastering to create an outstanding digital asset for your portfolio.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="st-card-title">Elite Network Access</h3>
                    <p class="st-card-text">Gain access to YCX's verified members, including venture capital allocators, startup founders, policy makers, and corporate leaders.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-megaphone-fill"></i>
                    </div>
                    <h3 class="st-card-title">Amplified Distribution</h3>
                    <p class="st-card-text">We syndicate your story across audio platforms (Spotify, Apple Podcasts), video channels, newsletter subscribers, and social feeds reaching over 100k+ professionals.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h3 class="st-card-title">Hands-on Editorial Support</h3>
                    <p class="st-card-text">Collaborate directly with our speech coaches and story editors to structure, refine, and polish your talk outline and delivery mechanics.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="st-section st-bg-cream">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">The Journey</div>
            <h2 class="st-heading">From Submission to Stage</h2>
            <p class="st-subheading mx-auto">We've structured a simplified collaborative workflow to refine, capture, and distribute your talk.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">01</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Submit Proposal</h4>
                    <p class="text-muted small mb-0">Fill out the outline form at the top of this page with your background and proposed topic overview.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">02</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Editorial Review</h4>
                    <p class="text-muted small mb-0">Our curators evaluate the submission and set up a discovery call to alignment on the story arc.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">03</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Story Workshop</h4>
                    <p class="text-muted small mb-0">Coached editing sessions to shape slide outlines, talking structures, and delivery pacing.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">04</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Record & Launch</h4>
                    <p class="text-muted small mb-0">Take the live stage or join our audio studio. We master the media and publish your talk globally.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SHARE YOUR STORY CTA -->
<section class="st-section" style="background: linear-gradient(135deg, #fffcf9 0%, #ffd2b1 40%, #ffeada 100%);">
    <div class="container text-center py-4">
        <div class="st-eyebrow" style="color: #0c3a30;">Ready to Inspire?</div>
        <h2 class="st-heading" style="color: #0c3a30; margin-bottom: 20px;">Your Stage Awaits</h2>
        <p class="mx-auto mb-5" style="color: #12261f; font-size: 1.1rem; line-height: 1.6; max-width: 650px;">
            Join a premium network of verified ecosystem leaders. Share the raw lessons and frameworks that will shape the builders of tomorrow.
        </p>
        <a href="#speakerTalkForm" class="btn px-5 py-3 fw-bold text-uppercase" style="background-color: #0c3a30; color: #ffd2b1; border-radius: 12px; border: none; font-size: 0.9rem; letter-spacing: 1px; transition: all 0.3s ease; text-decoration: none; display: inline-block;">
            Share Your Story Proposal <i class="bi bi-arrow-up ms-2"></i>
        </a>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="st-section st-bg-white">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">Common Queries</div>
            <h2 class="st-heading">Frequently Asked Questions</h2>
            <p class="st-subheading mx-auto">Find answers to key logistics, format queries, and eligibility guidelines.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="stFaqAccordion">
                    
                    <div class="st-accordion-item">
                        <h3 class="accordion-header" id="faqHeadingOne">
                            <button class="st-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                Is speaking at YCX free?
                                <i class="bi bi-chevron-down ms-2"></i>
                            </button>
                        </h3>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#stFaqAccordion">
                            <div class="st-accordion-body">
                                Yes. Speaking at YCX is entirely free. We do not charge speakers to take our stage, nor do we require speakers to pay for recording or production. We invest fully in capturing and polishing narratives worth telling.
                            </div>
                        </div>
                    </div>

                    <div class="st-accordion-item">
                        <h3 class="accordion-header" id="faqHeadingTwo">
                            <button class="st-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                What formats are available for talks?
                                <i class="bi bi-chevron-down ms-2"></i>
                            </button>
                        </h3>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#stFaqAccordion">
                            <div class="st-accordion-body">
                                We produce talks in multiple formats, depending on the topic depth and audience fit. This includes video podcast sessions (1-on-1 dialogue format), live keynotes on our event stages (12-15 minute structured talks), and focused panel discussions.
                            </div>
                        </div>
                    </div>

                    <div class="st-accordion-item">
                        <h3 class="accordion-header" id="faqHeadingThree">
                            <button class="st-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                What languages can I speak in?
                                <i class="bi bi-chevron-down ms-2"></i>
                            </button>
                        </h3>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#stFaqAccordion">
                            <div class="st-accordion-body">
                                You can speak in the language you express yourself best in. We currently support and release talks in English, Hindi, Tamil, Telugu, and Kannada, and we are working to expand language access further.
                            </div>
                        </div>
                    </div>

                    <div class="st-accordion-item">
                        <h3 class="accordion-header" id="faqHeadingFour">
                            <button class="st-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                Can I nominate another builder or speaker?
                                <i class="bi bi-chevron-down ms-2"></i>
                            </button>
                        </h3>
                        <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#stFaqAccordion">
                            <div class="st-accordion-body">
                                Yes. You can use the outline form on this page to submit a proposal for someone else. Be sure to provide their correct social media profiles and outline the core message they bring to the ecosystem.
                            </div>
                        </div>
                    </div>

                    <div class="st-accordion-item">
                        <h3 class="accordion-header" id="faqHeadingFive">
                            <button class="st-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                What happens after I submit a proposal?
                                <i class="bi bi-chevron-down ms-2"></i>
                            </button>
                        </h3>
                        <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#stFaqAccordion">
                            <div class="st-accordion-body">
                                Our editorial curators read and evaluate every single proposal. If we identify a fit with our upcoming publication schedule or event theme, we will reach out via email or phone within 5–7 working days to set up a preliminary discovery call.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">Proposal Submitted Successfully</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    Thank you for sharing your story proposal. Our editorial team will review your proposal and get in touch with you within 5–7 working days to discuss the next steps.
                </p>
                <button type="button" class="btn px-5 py-3 fw-bold text-uppercase w-100 d-block text-center" data-bs-dismiss="modal" style="background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var phoneInput = document.querySelector('input[name="phone"]');
        var iti;
        if (phoneInput) {
            iti = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
            });
        }

        var form = document.getElementById('speakerTalkForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Update phone input value with the full international number
                if (phoneInput && iti) {
                    phoneInput.value = iti.getNumber();
                }

                // Show Success Modal
                var successModalElement = document.getElementById('successModal');
                if (successModalElement) {
                    var myModal = new bootstrap.Modal(successModalElement);
                    myModal.show();
                }

                // Reset form
                form.reset();
            });
        }

        // Scroll Reveal Animations for Explore Conversations
        const revealElements = document.querySelectorAll('#categories .reveal');
        
        const revealOptions = {
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        };

        const revealObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, revealOptions);

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });

        // ── Buttery smooth momentum horizontal scroll for #categories ──────────
        (function () {
            var section = document.getElementById('categories');
            var wrapper = section ? section.querySelector('.categories-wrapper') : null;
            if (!section || !wrapper) return;

            var locked        = false;
            var frozenScrollY = 0;
            var allCardsSeen  = false;
            var touchStartY   = 0;
            var touchStartX   = 0;

            // Momentum state — velocity accumulates from wheel ticks and decays each frame
            var scrollPos  = 0;   // actual rendered position (float)
            var velocity   = 0;   // pixels per frame
            var friction   = 0.88; // 0–1: higher = glides longer, lower = stops faster
            var rafId      = null;

            /* ── Main animation loop ──────────────────────────────────────────── */
            function tick() {
                velocity *= friction;           // decay velocity each frame
                scrollPos += velocity;

                // Clamp to valid range
                var max = wrapper.scrollWidth - wrapper.clientWidth;
                if (scrollPos < 0) { scrollPos = 0; velocity = 0; }
                if (scrollPos > max) { scrollPos = max; velocity = 0; }

                wrapper.scrollLeft = scrollPos;

                // Check if last card is now in view
                if (scrollPos >= max - 2) {
                    allCardsSeen = true;
                    releaseLock();
                }

                // Keep loop alive while there is meaningful movement
                if (Math.abs(velocity) > 0.3) {
                    rafId = requestAnimationFrame(tick);
                } else {
                    velocity = 0;
                    rafId = null;
                }
            }

            function startTick() {
                if (!rafId) rafId = requestAnimationFrame(tick);
            }

            /* ── Check if last card is fully in view ─────────────────────────── */
            function isLastCardVisible() {
                var max = wrapper.scrollWidth - wrapper.clientWidth;
                return scrollPos >= max - 2;
            }

            /* ── Lock page at current scroll Y ──────────────────────────────── */
            function engageLock() {
                if (locked || allCardsSeen) return;
                frozenScrollY = window.scrollY;
                scrollPos     = wrapper.scrollLeft;
                locked = true;
            }

            /* ── Release page lock ───────────────────────────────────────────── */
            function releaseLock() {
                locked = false;
            }

            /* ── Hold page position while locked ────────────────────────────── */
            function onPageScroll() {
                if (!locked) {
                    var r = section.getBoundingClientRect();
                    if (r.bottom < 0) {
                        // Section scrolled out of view going up — full reset
                        scrollPos    = 0;
                        velocity     = 0;
                        wrapper.scrollLeft = 0;
                        allCardsSeen = false;
                    }
                    return;
                }
                if (window.scrollY !== frozenScrollY) {
                    window.scrollTo({ top: frozenScrollY, behavior: 'instant' });
                }
            }

            /* ── Wheel handler ───────────────────────────────────────────────── */
            window.addEventListener('wheel', function (e) {
                if (allCardsSeen) return;

                var sRect = section.getBoundingClientRect();

                // Engage lock when section top reaches the viewport top
                if (e.deltaY > 0 && sRect.top <= window.innerHeight && sRect.top > -section.offsetHeight) {
                    if (sRect.top <= 20) engageLock();
                }

                if (!locked) return;

                e.preventDefault();

                // Normalise across mouse wheel (deltaMode=0 pixels, mode=1 lines)
                var raw = e.deltaMode === 1 ? e.deltaY * 30 : e.deltaY;

                // Add a gentle fraction to velocity — keeps it slow & natural
                velocity += raw * 0.35;

                // Cap maximum speed so it never feels rushed
                var maxVel = 18;
                if (velocity >  maxVel) velocity =  maxVel;
                if (velocity < -maxVel) velocity = -maxVel;

                startTick();
            }, { passive: false });

            /* ── Page scroll listener ────────────────────────────────────────── */
            window.addEventListener('scroll', onPageScroll, { passive: false });

            /* ── Touch support ───────────────────────────────────────────────── */
            section.addEventListener('touchstart', function (e) {
                touchStartY = e.touches[0].clientY;
                touchStartX = e.touches[0].clientX;
                velocity    = 0; // kill any momentum on new touch
            }, { passive: true });

            section.addEventListener('touchmove', function (e) {
                if (allCardsSeen) return;

                var dy = touchStartY - e.touches[0].clientY;
                var dx = Math.abs(e.touches[0].clientX - touchStartX);

                if (Math.abs(dy) < dx) return; // mostly horizontal — native handles

                var sRect = section.getBoundingClientRect();
                if (sRect.top <= 20) engageLock();

                if (!locked) return;
                e.preventDefault();

                velocity += dy * 0.6;
                touchStartY = e.touches[0].clientY;
                touchStartX = e.touches[0].clientX;
                startTick();
            }, { passive: false });

            /* ── Release lock when section fully leaves the viewport ─────────── */
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) releaseLock();
                });
            }, { threshold: 0.05 });
            io.observe(section);
        })();
    });
</script>
@endpush

@endsection
