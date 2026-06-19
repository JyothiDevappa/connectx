@php
/**
 * Events Page SEO Data
 */
$seo = [
    'title'       => 'Events — Roundtables, Podcasts & Creator Sessions | ConnectX',
    'description' => 'Explore upcoming ConnectX events — exclusive roundtables, podcast recordings, keynote speakers, and creator networking sessions. Join elite business spaces for market changemakers.',
    'keywords'    => 'ConnectX events, creator roundtables, podcast sessions, keynote speakers, networking events, creator sessions India, ConnectX sessions 2026',
    'image'       => asset('images/assets/ogg.png'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
{{-- ── Events Page: EventSeries + Individual Event JSON-LD ─── --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "ConnectX Upcoming Events 2026",
    "description": "Exclusive roundtables, podcast sessions, keynote speakers, and creator networking sessions by ConnectX.",
    "url": "https://connectx.youngchanakya.com/events",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@type": "Event",
                "name": "C-Suite Strategy: Transcending Market Vulnerabilities",
                "description": "A closed-door collective for legacy operators and enterprise founders managing tier-1 capital models.",
                "startDate": "2026-07-18",
                "eventStatus": "https://schema.org/EventScheduled",
                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                "location": {
                    "@type": "Place",
                    "name": "Bengaluru Hub",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Bengaluru",
                        "addressCountry": "IN"
                    }
                },
                "organizer": {
                    "@type": "Organization",
                    "name": "ConnectX by Young Chanakya",
                    "url": "https://connectx.youngchanakya.com"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@type": "Event",
                "name": "ConnectX Paradigm Shift: Building Scalable Infrastructure",
                "description": "Deconstructing modern tech architectures with elite specialists deploying reliable, global structures.",
                "startDate": "2026-07-24",
                "eventStatus": "https://schema.org/EventScheduled",
                "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
                "location": {
                    "@type": "VirtualLocation",
                    "url": "https://connectx.youngchanakya.com/events"
                },
                "organizer": {
                    "@type": "Organization",
                    "name": "ConnectX by Young Chanakya",
                    "url": "https://connectx.youngchanakya.com"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 3,
            "item": {
                "@type": "Event",
                "name": "Keynote: Scaling Systems and Institutional Funding",
                "description": "An open-floor assembly pulling back the curtain on valuation strategies and board allocations.",
                "startDate": "2026-08-02",
                "eventStatus": "https://schema.org/EventScheduled",
                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                "location": {
                    "@type": "Place",
                    "name": "Leela Palace",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Bengaluru",
                        "addressCountry": "IN"
                    }
                },
                "organizer": {
                    "@type": "Organization",
                    "name": "ConnectX by Young Chanakya",
                    "url": "https://connectx.youngchanakya.com"
                }
            }
        }
    ]
}
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush



@section('content')
<style>
    /* EXECUTIVE CUSTOM DESIGN SYSTEM */
    .premium-hero-container {
        min-height: 75vh;
        background-image: linear-gradient(180deg, rgba(15, 23, 42, 0.55) 0%, #090d16 100%), 
                          url('https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=2000');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    .text-glow-headline {
        font-size: clamp(38px, 5.5vw, 72px);
        font-weight: 900;
        line-height: 1.2;
        padding-bottom: 15px;
        letter-spacing: -3px;
        background: linear-gradient(135deg, #ffffff 30%, #ffd2b1 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .custom-pill-nav {
        border: 1px solid rgba(12, 58, 48, 0.1);
        background: #f8f6f2;
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        padding: 6px;
        border-radius: 100px;
        display: inline-flex;
    }
    .custom-pill-nav .nav-link-item {
        color: #0c3a30;
        opacity: 0.7;
        padding: 10px 24px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border-radius: 100px;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
    }
    .custom-pill-nav .nav-link-item.active, 
    .custom-pill-nav .nav-link-item:hover {
        opacity: 1;
        color: #0c3a30 !important;
        background: #ffd2b1;
    }
    .ux-curated-card {
        background: #ffffff;
        border: none;
        border-radius: 24px;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
    }
    .ux-curated-card::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 24px;
        box-shadow: 0 40px 80px -15px rgba(15, 23, 42, 0.08);
        opacity: 0;
        transition: opacity 0.5s ease;
        pointer-events: none;
    }
    .ux-curated-card:hover {
        transform: translateY(-8px);
    }
    .ux-curated-card:hover::after {
        opacity: 1;
    }
    .card-frame-media {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        height: 240px;
    }
    .card-frame-media img {
        transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ux-curated-card:hover .card-frame-media img {
        transform: scale(1.06);
    }
    .glass-badge-tag {
        position: absolute;
        bottom: 16px;
        left: 16px;
        background: #ffd2b1;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #0c3a30;
        padding: 6px 16px;
        font-size: 0.7rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 8px;
    }
    .interactive-arrow-btn {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #f1f5f9;
        color: #090d16;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    .ux-curated-card:hover .interactive-arrow-btn {
        background: #0c3a30;
        color: #ffd2b1;
        transform: rotate(-45deg);
    }
    /* Minimalist Elegant Pagination */
    .lux-pagination-item {
        width: 48px;
        height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 1px solid #e2e8f0;
        color: #475569;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .lux-pagination-item.active {
        background: #0c3a30;
        border-color: #0c3a30;
        color: #ffd2b1;
    }
    .lux-pagination-item:hover:not(.active) {
        background: #f8fafc;
        border-color: #0c3a30;
        color: #0c3a30;
    }

    /* ==========================================
       EVENTS PAGE — MOBILE RESPONSIVE
       Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
       ========================================== */

    /* ---- Premium Hero Section ---- */
    @media (max-width: 991px) {
        .premium-hero-container {
            min-height: 65vh;
            background-attachment: scroll;
        }
        .premium-hero-container .container {
            padding-top: 120px;
            padding-bottom: 70px;
        }
        .text-glow-headline {
            font-size: clamp(32px, 5vw, 56px);
            letter-spacing: -2px;
        }
        .premium-hero-container p.fs-5 {
            font-size: 16px !important;
        }
    }

    @media (max-width: 767px) {
        .premium-hero-container {
            min-height: 55vh;
        }
        .premium-hero-container .container {
            padding-top: 100px;
            padding-bottom: 50px;
        }
        .text-glow-headline {
            font-size: clamp(26px, 7vw, 42px);
            letter-spacing: -1.5px;
            line-height: 1.25;
            padding-bottom: 10px;
        }
        .premium-hero-container p.fs-5 {
            font-size: 15px !important;
        }
        .premium-hero-container ul.style-none {
            flex-wrap: wrap;
            gap: 6px;
        }
    }

    @media (max-width: 480px) {
        .premium-hero-container {
            min-height: auto;
        }
        .premium-hero-container .container {
            padding-top: 90px;
            padding-bottom: 40px;
        }
        .text-glow-headline {
            font-size: 26px;
            letter-spacing: -1px;
        }
    }

    /* ---- Filter Strip ---- */
    @media (max-width: 767px) {
        .filter-strip-wrapper {
            padding: 12px 0 !important;
        }
        .filter-strip-wrapper .container {
            flex-direction: column;
            gap: 10px !important;
            align-items: flex-start !important;
        }
        .custom-pill-nav {
            width: 100%;
            overflow-x: auto;
            justify-content: flex-start;
            padding: 4px;
        }
        .custom-pill-nav .nav-link-item {
            padding: 8px 16px;
            font-size: 0.78rem;
            white-space: nowrap;
        }
    }

    @media (max-width: 480px) {
        .filter-strip-wrapper .container > span {
            font-size: 0.68rem;
        }
        .custom-pill-nav .nav-link-item {
            padding: 7px 12px;
            font-size: 0.72rem;
        }
    }

    /* ---- Event Cards Grid ---- */
    @media (max-width: 991px) {
        .content-showcase-section .container.py-4 {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }
        .ux-curated-card {
            border-radius: 20px;
        }
        .card-frame-media {
            height: 200px;
        }
    }

    @media (max-width: 767px) {
        .content-showcase-section {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
        .content-showcase-section .row.g-5 {
            row-gap: 20px !important;
        }
        .card-frame-media {
            height: 180px;
        }
        .ux-curated-card {
            border-radius: 16px;
        }
        .ux-curated-card p.text-secondary {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 480px) {
        .card-frame-media {
            height: 160px;
        }
        .ux-curated-card .card-body-content {
            padding-top: 14px !important;
        }
        .ux-curated-card h3.h5 {
            font-size: 0.95rem;
        }
        .interactive-arrow-btn {
            width: 38px;
            height: 38px;
        }
    }

    /* ---- Pagination ---- */
    @media (max-width: 480px) {
        .lux-pagination-item {
            width: 40px;
            height: 40px;
            font-size: 0.8rem;
        }
        .d-inline-flex.align-items-center.gap-2 {
            gap: 6px !important;
        }
    }
</style>

@php
    // Structured data representing your premium events matrix
    $curatedEvents = [
        [
            'category' => 'Roundtables',
            'title' => 'C-Suite Strategy: Transcending Market Vulnerabilities',
            'desc' => 'A closed-door collective for legacy operators and enterprise founders managing tier-1 capital models.',
            'date' => 'JUL 18, 2026',
            'location' => 'BENGALURU HUB',
            'host' => 'Aditya Verma',
            'role' => 'Managing Director',
            'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=800'
        ],
        [
            'category' => 'Podcasts',
            'title' => 'ConnectX Paradigm Shift: Building Scalable Infrastructure',
            'desc' => 'Deconstructing modern tech architectures with elite specialists deploying reliable, global structures.',
            'date' => 'JUL 24, 2026',
            'location' => 'EPISODE 42',
            'host' => 'Rohan Sharma',
            'role' => 'Principal Architect',
            'img' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&q=80&w=800'
        ],
        [
            'category' => 'Speakers',
            'title' => 'Keynote: Scaling Systems and Institutional Funding',
            'desc' => 'An open-floor assembly pulling back the curtain on valuation strategies and board allocations.',
            'date' => 'AUG 02, 2026',
            'location' => 'LEELA PALACE',
            'host' => 'Meera Nair',
            'role' => 'Venture Partner',
            'img' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=800'
        ],
        [
            'category' => 'Roundtables',
            'title' => 'SaaS Architecture & Cross-Border Frameworks',
            'desc' => 'Deep technical analysis on running international databases while staying completely compliant.',
            'date' => 'AUG 12, 2026',
            'location' => 'VIRTUAL SYMPOSIUM',
            'host' => 'Jyothidev',
            'role' => 'Full Stack Architect',
            'img' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=800'
        ],
        [
            'category' => 'Podcasts',
            'title' => 'ConnectX Paradigm Shift: High-End Consumer Behavior',
            'desc' => 'Dissecting how premium brands build conversion architectures that generate recurring market demand.',
            'date' => 'AUG 29, 2026',
            'location' => 'EPISODE 43',
            'host' => 'Karan Malhotra',
            'role' => 'Growth Lead',
            'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&q=80&w=800'
        ],
        [
            'category' => 'Speakers',
            'title' => 'Minimalist Strategy: The Architecture of Premium UX',
            'desc' => 'Analyzing functional minimalism, elegant typography, and interaction layers used by premium consumer brands.',
            'date' => 'SEP 05, 2026',
            'location' => 'ITC GARDENIA',
            'host' => 'Ananya Rao',
            'role' => 'UI/UX Director',
            'img' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800'
        ]
    ];
@endphp

<div class="premium-hero-container d-flex align-items-center position-relative">
    <div class="container pt-100 pb-100">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-10">
                
                <ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
                    <li><a href="#" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
                    <li class="text-white opacity-40">/</li>
                    <li class="text-white" style="color: #ffd2b1 !important;">ConnectX Sessions</li>
                </ul>

                <h1 class="text-glow-headline mb-4">Elite business spaces for market changemakers.</h1>
                <p class="fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
                    Unlocking strategies, scaling models, and building high-performance systems alongside leading business operators.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="filter-strip-wrapper bg-dark py-4 position-sticky top-0" style="z-index: 99; background-color: #0c3a30 !important; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <span class="text-white opacity-50 text-uppercase fw-bold tracking-wider" style="font-size: 0.75rem; letter-spacing: 1.5px;">
            Browse Upcoming Events
        </span>
        <div class="custom-pill-nav">
            <a href="#" class="nav-link-item active">All Events</a>
            <a href="#" class="nav-link-item">Roundtables</a>
            <a href="#" class="nav-link-item">Podcasts</a>
            <a href="#" class="nav-link-item">Speakers</a>
        </div>
    </div>
</div>

<div class="content-showcase-section py-5" style="background-color: #f8f6f2;">
    <div class="container py-4">
        <div class="row g-5">
            @foreach($curatedEvents as $event)
                <div class="col-md-6 col-lg-4">
                    <div class="ux-curated-card p-3 h-100 d-flex flex-column">
                        
                        <div class="card-frame-media">
                            <img src="{{ $event['img'] }}" class="w-100 h-100 object-fit-cover" alt="">
                            <div class="glass-badge-tag">{{ $event['category'] }}</div>
                        </div>

                        <div class="card-body-content pt-4 px-2 d-flex flex-column flex-grow-1">
                            
                            <div class="d-flex align-items-center gap-3 text-uppercase fw-bold text-muted mb-2" style="font-size: 0.72rem; letter-spacing: 1px;">
                                <span class="d-flex align-items-center gap-1">
                                    <i class="bi bi-calendar3" style="color: #0c3a30;"></i> {{ $event['date'] }}
                                </span>
                                <span class="d-flex align-items-center gap-1">
                                    <i class="bi bi-geo-alt" style="color: #0c3a30;"></i> {{ $event['location'] }}
                                </span>
                            </div>

                            <h3 class="h5 fw-bold mb-3" style="color: #0c3a30; line-height: 1.35; font-weight: 800;">
                                <a href="#" class="text-decoration-none text-dark transition-all">
                                    {{ $event['title'] }}
                                </a>
                            </h3>

                            <p class="text-secondary small mb-4" style="line-height: 1.6; font-size: 0.85rem;">
                                {{ $event['desc'] }}
                            </p>

                            <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="fw-bold d-flex align-items-center justify-content-center" 
                                         style="width: 38px; height: 38px; background: #0c3a30; color: #ffd2b1; border-radius: 12px; font-size: 0.8rem;">
                                        {{ strtoupper(substr($event['host'], 0, 2)) }}
                                    </div>
                                    <div>
                                        <h5 class="m-0 fw-bold" style="font-size: 0.825rem; color: #090d16;">{{ $event['host'] }}</h5>
                                        <p class="m-0 text-muted" style="font-size: 0.72rem;">{{ $event['role'] }}</p>
                                    </div>
                                </div>
                                
                                <a href="#" class="interactive-arrow-btn">
                                    <i class="bi bi-arrow-right fs-5"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-5 pt-4">
            <div class="col-12 text-center">
                <div class="d-inline-flex align-items-center gap-2">
                    <a href="#" class="lux-pagination-item"><i class="bi bi-chevron-left"></i></a>
                    <a href="#" class="lux-pagination-item active">1</a>
                    <a href="#" class="lux-pagination-item">2</a>
                    <a href="#" class="lux-pagination-item">3</a>
                    <a href="#" class="lux-pagination-item"><i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection