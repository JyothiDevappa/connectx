@php
    // Structured data representing your premium events matrix (must match events.blade.php slugs)
    $curatedEvents = [
        [
            'slug' => 'founder-spotlight-series-scaling-beyond-series-a',
            'category' => 'Spotlight',
            'title' => 'Founder Spotlight Series: Scaling Beyond Series A',
            'desc' => 'Deconstructing startup milestones, market entry barriers, and scaling systems for high-growth ventures.',
            'date' => 'JUL 18, 2026',
            'time' => '04:00 PM - 06:30 PM IST',
            'location' => 'BENGALURU HUB',
            'venue_detail' => 'Indiranagar Creator Lounge, Indiranagar',
            'host' => 'Aditya Verma',
            'role' => 'Venture Partner',
            'host_bio' => 'Aditya is a growth advisor who has coached over 50 startups to scale their capital and customer acquisition.',
            'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=1200',
            'highlights' => [
                'Deconstructing key startup milestones',
                'Identifying and overcoming market entry barriers',
                'Implementing scaling systems for high-growth ventures'
            ],
            'cohort' => 'Early-stage Founders, VC associates, and Growth Operators.',
            'outcomes' => [
                'A comprehensive startup scaling blueprint.',
                'A self-evaluation Series A readiness audit.',
                'Proven growth hacking models and metrics templates.'
            ]
        ],
        [
            'slug' => 'creator-connect-sessions-multi-platform-monetization',
            'category' => 'Connect',
            'title' => 'Creator Connect Sessions: Multi-Platform Monetization',
            'desc' => 'Unlocking premium brand sponsorships, media kit architectures, and co-branded content monetization loops.',
            'date' => 'JUL 24, 2026',
            'time' => '05:00 PM - 08:00 PM IST',
            'location' => 'EPISODE 42',
            'venue_detail' => 'ConnectX Live Studio & Podcast Suite',
            'host' => 'Rohan Sharma',
            'role' => 'Growth Lead',
            'host_bio' => 'Rohan is a digital strategist advising over 20+ top-tier influencers on audience optimization.',
            'img' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&q=80&w=1200',
            'highlights' => [
                'Unlocking premium brand sponsorships',
                'Building media kit architectures that convert',
                'Designing co-branded content monetization loops'
            ],
            'cohort' => 'Professional Creators, Influencers, Podcasters, and Digital Talents.',
            'outcomes' => [
                'A brand deck optimization template.',
                'A premium sponsorship negotiations checklist.',
                'Multi-platform content strategy and workflow guides.'
            ]
        ],
        [
            'slug' => 'women-in-leadership-circle-directing-enterprise-operations',
            'category' => 'Leadership',
            'title' => 'Women in Leadership Circle: Directing Enterprise Operations',
            'desc' => 'A collaborative forum for female business leaders, operational executives, and board candidates.',
            'date' => 'AUG 02, 2026',
            'time' => '10:00 AM - 01:00 PM IST',
            'location' => 'LEELA PALACE',
            'venue_detail' => 'Grand Ballroom, The Leela Palace, Bengaluru',
            'host' => 'Meera Nair',
            'role' => 'UI/UX Director',
            'host_bio' => 'Meera leads product design pipelines for top-tier digital portals across APAC.',
            'img' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=1200',
            'highlights' => [
                'Directing high-stakes enterprise operations',
                'Structuring boards and advisory circles',
                'Navigating executive leadership growth paths'
            ],
            'cohort' => 'Female Executives, VPs, Directors, and Board Members.',
            'outcomes' => [
                'Custom enterprise management templates.',
                'Board communication outlines and toolkits.',
                'A framework manual for leadership development.'
            ]
        ],
        [
            'slug' => 'mentor-connect-program-engineering-architecture-scales',
            'category' => 'Mentor',
            'title' => 'Mentor Connect Program: Engineering & Architecture Scales',
            'desc' => 'Direct technical mapping alongside elite system architects deploying robust enterprise configurations.',
            'date' => 'AUG 12, 2026',
            'time' => '03:00 PM - 05:30 PM IST',
            'location' => 'VIRTUAL SYMPOSIUM',
            'venue_detail' => 'Secure Live Stream Link',
            'host' => 'Jyothidev',
            'role' => 'Full Stack Architect',
            'host_bio' => 'Jyothidev is a SaaS architecture consultant who has designed compliant multi-region databases.',
            'img' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1200',
            'highlights' => [
                'Direct technical mapping with system architects',
                'Deploying robust enterprise network configurations',
                'Scaling databases and distributed structures'
            ],
            'cohort' => 'Software Engineers, System Architects, and Technical Project Managers.',
            'outcomes' => [
                'Multi-region system failover designs.',
                'SaaS database compliance checklists.',
                'Scalable infrastructure database guidelines.'
            ]
        ],
        [
            'slug' => 'fireside-chats-building-legacy-brand-narratives',
            'category' => 'Fireside',
            'title' => 'Fireside Chats: Building Legacy Brand Narratives',
            'desc' => 'An intimate, raw conversation with veteran operators detailing brand strategy, pivots, and positioning.',
            'date' => 'AUG 29, 2026',
            'time' => '06:00 PM - 07:30 PM IST',
            'location' => 'EPISODE 43',
            'venue_detail' => 'Main Lounge Studio',
            'host' => 'Karan Malhotra',
            'role' => 'Principal Architect',
            'host_bio' => 'Karan drives growth models for premium lifestyle brands with multi-million dollar yearly run-rates.',
            'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&q=80&w=1200',
            'highlights' => [
                'Intimate discussions on brand strategy and positioning',
                'Executing successful pivots in shifting consumer spaces',
                'Bespoke brand narrative architectures'
            ],
            'cohort' => 'Brand Strategists, Marketing Heads, and Creative Copywriters.',
            'outcomes' => [
                'A legacy positioning playbook.',
                'Target cohort messaging models.',
                'Brand identity and communication checklists.'
            ]
        ],
        [
            'slug' => 'ceo-conversations-navigating-cross-border-ventures',
            'category' => 'CEO',
            'title' => 'CEO Conversations: Navigating Cross-Border Ventures',
            'desc' => 'Closed-door insights on international compliance, currency risk, and building global operating structures.',
            'date' => 'SEP 05, 2026',
            'time' => '02:00 PM - 05:00 PM IST',
            'location' => 'ITC GARDENIA',
            'venue_detail' => 'The Chanakya Suite, ITC Gardenia, Bengaluru',
            'host' => 'Ananya Rao',
            'role' => 'Managing Director',
            'host_bio' => 'Ananya advises Fortune 500 enterprises on operational expansion structures and capital efficiency.',
            'img' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1200',
            'highlights' => [
                'Insights on international corporate compliance',
                'Managing cross-border currency and asset risks',
                'Building global operational frameworks'
            ],
            'cohort' => 'Chief Executive Officers, Directors, and Global Venture Partners.',
            'outcomes' => [
                'Cross-border expansion checklists.',
                'International compliance audit guidelines.',
                'A blueprint for global business structures.'
            ]
        ]
    ];

    // Identify current event by slug
    $currentEvent = null;
    foreach ($curatedEvents as $e) {
        if ($e['slug'] === $slug) {
            $currentEvent = $e;
            break;
        }
    }

    // Fallback if slug doesn't match
    if (!$currentEvent) {
        $currentEvent = $curatedEvents[0];
    }

    // SEO setup
    $seo = [
        'title'       => $currentEvent['title'] . ' | Young Chanakya X Events',
        'description' => $currentEvent['desc'] . ' Join elite business spaces for market changemakers.',
        'keywords'    => 'Young Chanakya X, ' . $currentEvent['category'] . ', ' . $currentEvent['host'] . ', business events 2026',
        'image'       => $currentEvent['img'],
        'type'        => 'website',
    ];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
{!! json_encode([
    "@" . "context" => "https://schema.org",
    "@" . "type" => "Event",
    "name" => $currentEvent['title'],
    "description" => $currentEvent['desc'],
    "startDate" => "2026-07-18",
    "eventStatus" => "https://schema.org/EventScheduled",
    "eventAttendanceMode" => "https://schema.org/OfflineEventAttendanceMode",
    "location" => [
        "@" . "type" => "Place",
        "name" => $currentEvent['location'],
        "address" => [
            "@" . "type" => "PostalAddress",
            "addressLocality" => "Bengaluru",
            "addressCountry" => "IN"
        ]
    ],
    "organizer" => [
        "@" . "type" => "Organization",
        "name" => "Young Chanakya X",
        "url" => "https://connectx.youngchanakya.com"
    ]
]) !!}
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush

@section('content')
<style>
    /* PREMIUM EVENT DETAILS STYLES */
    .premium-detail-hero {
        min-height: 55vh;
        background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.45) 0%, #090d16 100%), 
                          url('{{ $currentEvent['img'] }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    
    .detail-headline {
        font-size: clamp(32px, 4vw, 54px);
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: -2px;
        background: linear-gradient(135deg, #ffffff 40%, #ffd2b1 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .badge-premium-accent {
        background-color: #ffd2b1;
        color: #0c3a30;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 8px;
        padding: 6px 16px;
        display: inline-block;
    }

    .meta-item-box {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 16px;
        transition: all 0.3s ease;
    }

    .meta-item-box:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: #ffd2b1;
    }

    .premium-card-wrapper {
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 30px 60px -15px rgba(12, 58, 48, 0.05);
        border: 1px solid rgba(12, 58, 48, 0.05);
        padding: 40px;
    }

    .details-sidebar-card {
        background: #0c3a30;
        color: #ffffff;
        border-radius: 24px;
        padding: 32px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 40px 80px -15px rgba(12, 58, 48, 0.2);
    }

    .form-control-premium {
        background: rgba(255, 255, 255, 0.06) !important;
        border: 1px solid rgba(255, 255, 255, 0.15) !important;
        color: #ffffff !important;
        border-radius: 12px;
        padding: 14px 18px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .form-control-premium:focus {
        border-color: #ffd2b1 !important;
        background: rgba(255, 255, 255, 0.1) !important;
        box-shadow: 0 0 0 4px rgba(255, 210, 177, 0.15) !important;
    }

    .btn-premium-action {
        background: #ffd2b1;
        color: #0c3a30;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        border-radius: 12px;
        padding: 14px 28px;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        border: none;
        width: 100%;
    }

    .btn-premium-action:hover {
        background: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -5px rgba(255, 255, 255, 0.2);
    }

    .timeline-item-premium {
        position: relative;
        padding-left: 32px;
        margin-bottom: 24px;
    }

    .timeline-item-premium::before {
        content: '';
        position: absolute;
        left: 0;
        top: 6px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #0c3a30;
        border: 2px solid #ffd2b1;
        z-index: 2;
    }

    .timeline-item-premium::after {
        content: '';
        position: absolute;
        left: 5px;
        top: 18px;
        bottom: -30px;
        width: 2px;
        background: #e2e8f0;
        z-index: 1;
    }

    .timeline-item-premium:last-child::after {
        display: none;
    }

    .ux-curated-card {
        background: #ffffff;
        border: none;
        border-radius: 24px;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
    }
    .ux-curated-card:hover {
        transform: translateY(-8px);
    }
    .card-frame-media {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        height: 200px;
    }
    .glass-badge-tag {
        position: absolute;
        bottom: 16px;
        left: 16px;
        background: #ffd2b1;
        backdrop-filter: blur(12px);
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
        text-decoration: none;
    }
    .ux-curated-card:hover .interactive-arrow-btn {
        background: #0c3a30;
        color: #ffd2b1;
        transform: rotate(-45deg);
    }

    /* Responsiveness improvements */
    @media (max-width: 991px) {
        .premium-detail-hero {
            min-height: 45vh;
            background-attachment: scroll;
        }
        .premium-card-wrapper, .details-sidebar-card {
            padding: 24px;
            border-radius: 16px;
        }
    }
</style>

<div class="premium-detail-hero d-flex align-items-center position-relative">
    <div class="container pt-100 pb-100">
        <div class="row">
            <div class="col-xl-9 col-lg-11">
                
                <ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
                    <li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
                    <li class="text-white opacity-40">/</li>
                    <li><a href="{{ url('/events') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Events</a></li>
                    <li class="text-white opacity-40">/</li>
                    <li class="text-white" style="color: #ffd2b1 !important;">Details</li>
                </ul>

                <span class="badge-premium-accent mb-3">{{ $currentEvent['category'] }}</span>
                <h1 class="detail-headline mb-4">{{ $currentEvent['title'] }}</h1>

                <div class="row g-3 mt-2 text-white">
                    <div class="col-sm-4">
                        <div class="meta-item-box">
                            <span class="d-block text-uppercase opacity-50 mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">Date & Time</span>
                            <span class="fw-bold" style="font-size: 0.9rem;">{{ $currentEvent['date'] }}</span>
                            <span class="d-block text-muted small mt-1">{{ $currentEvent['time'] }}</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="meta-item-box">
                            <span class="d-block text-uppercase opacity-50 mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">Location / Space</span>
                            <span class="fw-bold text-uppercase" style="font-size: 0.9rem;">{{ $currentEvent['location'] }}</span>
                            <span class="d-block text-muted small mt-1 text-truncate">{{ $currentEvent['venue_detail'] }}</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="meta-item-box">
                            <span class="d-block text-uppercase opacity-50 mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">Host & Curator</span>
                            <span class="fw-bold" style="font-size: 0.9rem;">{{ $currentEvent['host'] }}</span>
                            <span class="d-block text-muted small mt-1">{{ $currentEvent['role'] }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="details-body-section py-5" style="background-color: #f8f6f2;">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Main Content (Left) -->
            <div class="col-lg-8">
                <div class="premium-card-wrapper mb-4">
                    <h3 class="fw-bold mb-4" style="color: #0c3a30;">Event Overview</h3>
                    <p class="fs-5" style="color: #475569; line-height: 1.7; font-weight: 500;">
                        {{ $currentEvent['desc'] }}
                    </p>
                    <p style="color: #475569; line-height: 1.7;">
                        This exclusive event, hosted by Young Chanakya X, acts as a collaborative space designed for creators, high-performing operators, and enterprise leaders. Participants will explore practical frameworks, case-study teardowns, and interact directly with experienced managers in their fields.
                    </p>
                    
                    <h4 class="fw-bold mt-5 mb-3" style="color: #0c3a30;">Key Highlights</h4>
                    <ul class="list-unstyled">
                        @foreach($currentEvent['highlights'] as $highlight)
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <span class="d-inline-flex align-items-center justify-content-center" 
                                      style="width: 24px; height: 24px; border-radius: 50%; background: rgba(12, 58, 48, 0.08); color: #0c3a30; min-width: 24px; margin-top: 2px;">
                                    <i class="bi bi-check" style="font-size: 1.25rem;"></i>
                                </span>
                                <span style="color: #475569; font-weight: 500;">{{ $highlight }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="premium-card-wrapper mb-4">
                    <h3 class="fw-bold mb-4" style="color: #0c3a30;">Target Cohort & Core Outcomes</h3>
                    
                    <div class="p-4 rounded-4 mb-4" style="background: rgba(12, 58, 48, 0.03); border: 1px solid rgba(12, 58, 48, 0.08);">
                        <h5 class="fw-bold mb-2" style="color: #0c3a30;">Ideal Target Cohort</h5>
                        <p class="m-0 text-secondary" style="font-size: 0.95rem; line-height: 1.6;">
                            {{ $currentEvent['cohort'] }}
                        </p>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #0c3a30;">Strategic Outcomes</h5>
                    <div class="row g-3">
                        @foreach($currentEvent['outcomes'] as $index => $outcome)
                            <div class="col-12">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="d-flex align-items-center justify-content-center fw-bold" 
                                         style="width: 28px; height: 28px; background: #ffd2b1; color: #0c3a30; border-radius: 8px; font-size: 0.85rem; min-width: 28px; margin-top: 2px;">
                                        0{{ $index + 1 }}
                                    </div>
                                    <p class="text-secondary m-0" style="font-size: 0.95rem; line-height: 1.6;">
                                        {{ $outcome }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Host Bio Card -->
                <div class="premium-card-wrapper">
                    <h3 class="fw-bold mb-4" style="color: #0c3a30;">Curator Bio</h3>
                    <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                        <div class="fw-bold d-flex align-items-center justify-content-center text-uppercase" 
                             style="width: 80px; height: 80px; background: #0c3a30; color: #ffd2b1; border-radius: 20px; font-size: 1.8rem; min-width: 80px; box-shadow: 0 10px 20px -5px rgba(12, 58, 48, 0.2);">
                            {{ strtoupper(substr($currentEvent['host'], 0, 2)) }}
                        </div>
                        <div>
                            <h4 class="fw-bold m-0" style="color: #090d16;">{{ $currentEvent['host'] }}</h4>
                            <p class="text-muted small mb-2">{{ $currentEvent['role'] }}</p>
                            <p class="m-0 text-secondary" style="line-height: 1.6; font-size: 0.95rem;">
                                {{ $currentEvent['host_bio'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Form (Right) -->
            <div class="col-lg-4">
                <div class="details-sidebar-card position-sticky" style="top: 100px; z-index: 10;">
                    <h4 class="fw-bold mb-3" style="color: #ffd2b1;">Apply to Attend</h4>
                    <p class="small opacity-80 mb-4" style="line-height: 1.5;">
                        Spaces are limited and curated for strategic alignment. Please fill out the form below to register your interest.
                    </p>

                    <form action="#" method="POST" id="rsvp-premium-form">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small fw-bold opacity-90 text-uppercase tracking-wider" style="font-size: 0.65rem; letter-spacing: 0.5px;">Full Name</label>
                            <input type="text" class="form-control form-control-premium" placeholder="e.g. John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold opacity-90 text-uppercase tracking-wider" style="font-size: 0.65rem; letter-spacing: 0.5px;">Email Address</label>
                            <input type="email" class="form-control form-control-premium" placeholder="e.g. john@company.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold opacity-90 text-uppercase tracking-wider" style="font-size: 0.65rem; letter-spacing: 0.5px;">LinkedIn Profile / Website</label>
                            <input type="url" class="form-control form-control-premium" placeholder="https://linkedin.com/in/username" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold opacity-90 text-uppercase tracking-wider" style="font-size: 0.65rem; letter-spacing: 0.5px;">Why would you like to join?</label>
                            <textarea class="form-control form-control-premium" rows="3" placeholder="Briefly describe your objectives..." required></textarea>
                        </div>
                        <button type="submit" class="btn-premium-action">Submit RSVP</button>
                    </form>
                    <div id="rsvp-status-message" class="mt-3 text-center small text-success fw-bold" style="display:none;">
                        Application Submitted Successfully!
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Events Section -->
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <h3 class="fw-bold mb-4" style="color: #0c3a30; border-bottom: 2px solid rgba(12, 58, 48, 0.05); padding-bottom: 12px;">Related Upcoming Sessions</h3>
            </div>
            <div class="row g-4 mt-1">
                @php
                    $count = 0;
                @endphp
                @foreach($curatedEvents as $event)
                    @if($event['slug'] !== $currentEvent['slug'] && $count < 3)
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
                                    </div>
                                    <h4 class="h6 fw-bold mb-3" style="color: #0c3a30; line-height: 1.35; font-weight: 800;">
                                        <a href="{{ url('/event-details/' . $event['slug']) }}" class="text-decoration-none text-dark transition-all">
                                            {{ $event['title'] }}
                                        </a>
                                    </h4>
                                    <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                        <span class="small fw-semibold text-secondary">{{ $event['host'] }}</span>
                                        <a href="{{ url('/event-details/' . $event['slug']) }}" class="interactive-arrow-btn">
                                            <i class="bi bi-arrow-right fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $count++; @endphp
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('rsvp-premium-form');
        const successMessage = document.getElementById('rsvp-status-message');
        
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                form.reset();
                successMessage.style.display = 'block';
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000);
            });
        }
    });
</script>
@endsection
