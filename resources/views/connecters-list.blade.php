@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush

@section('content')
<style>
    /* CONNECTORS AUTHORITY DESIGN SYSTEM */
    .authority-hero-section {
        min-height: 80vh;
        background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.7) 0%, #090d16 100%),
            url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .trust-headline {
        font-size: clamp(36px, 5vw, 64px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -2px;
        background: linear-gradient(135deg, #ffffff 40%, #ffd2b1 100%);
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

    .sticky-sidebar-menu {
        position: sticky;
        top: 40px;
        z-index: 10;
    }

    /* ==========================================
       CONNECTORS LIST — MOBILE RESPONSIVE
       Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
       ========================================== */

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

    /* ---- Sidebar + Content Layout ---- */
    @media (max-width: 991px) {
        .showcase-content-wrapper .col-lg-4 {
            /* Show sidebar as horizontal scrollable nav on tablet */
            width: 100% !important;
            max-width: 100% !important;
        }
        .sticky-sidebar-menu {
            position: static !important;
            top: auto !important;
        }
        #v-pills-tab {
            flex-direction: row !important;
            overflow-x: auto;
            gap: 8px;
            padding-bottom: 8px;
            flex-wrap: nowrap !important;
        }
        .sidebar-anchor-link {
            white-space: nowrap;
            padding: 12px 18px !important;
            font-size: 0.78rem !important;
        }
        .sidebar-anchor-link.active {
            padding-left: 18px !important;
        }
    }

    @media (max-width: 767px) {
        .showcase-content-wrapper.py-5 {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
        .showcase-content-wrapper .container.py-5 {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        .network-cluster-card {
            padding: 24px 20px !important;
            border-radius: 20px !important;
        }
        .network-cluster-card .d-flex.align-items-center.gap-3.mb-4 {
            flex-wrap: wrap;
        }
        .network-cluster-card h2.h4 {
            font-size: 1.1rem;
        }
        .panel-hero-image {
            height: 160px !important;
        }
        .connector-node-pill {
            padding: 10px 16px !important;
            font-size: 0.82rem !important;
        }
        .cluster-title-icon {
            width: 44px;
            height: 44px;
            font-size: 1.2rem;
        }
    }

    @media (max-width: 480px) {
        .network-cluster-card {
            padding: 18px 14px !important;
        }
        .panel-hero-image {
            height: 130px !important;
        }
        .connector-node-pill {
            padding: 8px 12px !important;
            font-size: 0.78rem !important;
        }
        .sidebar-anchor-link {
            padding: 10px 14px !important;
            font-size: 0.72rem !important;
        }
        .network-cluster-card h2.h4 {
            font-size: 1rem;
        }
    }
</style>


<div class="authority-hero-section d-flex align-items-center position-relative">
    <div class="container pt-150 pb-100">
        <div class="row align-items-center g-5">
            <div class="col-xl-7 col-lg-8">

                <div class="trust-badge-pill mb-4">
                    <i class="bi bi-shield-check-fill"></i> Institutional Ecosystem Directory
                </div>

                <h1 class="trust-headline mb-4">The verified nexus of market leadership.</h1>
                <p class="text-white opacity-75 fs-5 mb-5" style="max-width: 600px; line-height: 1.6;">
                    ConnectX orchestrates premium structural access to vetted visionaries, enterprise owners, and specialized policy framework architects globally.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-4 text-white opacity-50" style="font-size: 0.8rem; font-weight: 700; letter-spacing: 1px;">
                    <span class="d-flex align-items-center gap-2"><i class="bi bi-patch-check fs-5 text-warning"></i> 100% VETTED ENTRANTS</span>
                    <span class="d-flex align-items-center gap-2"><i class="bi bi-lock fs-5 text-warning"></i> SECURE NDAs ENFORCED</span>
                </div>
            </div>

            <div class="col-xl-5 col-lg-4">
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-12">
                        <div class="trust-metric-box">
                            <h4 class="display-6 fw-bold text-white mb-1" style="letter-spacing: -1px;">500+</h4>
                            <p class="text-uppercase tracking-wider text-muted m-0" style="font-size: 0.7rem; font-weight: 700; color: #ffd2b1 !important;">Active C-Suite Founders</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="trust-metric-box">
                            <h4 class="display-6 fw-bold text-white mb-1" style="letter-spacing: -1px;">12+</h4>
                            <p class="text-uppercase tracking-wider text-muted m-0" style="font-size: 0.7rem; font-weight: 700; color: #ffd2b1 !important;">Industrial Verticals</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="trust-metric-box" style="background: linear-gradient(135deg, rgba(255,210,177,0.05) 0%, rgba(9,13,22,0) 100%); border-color: rgba(255,210,177,0.15);">
                            <p class="text-white small m-0" style="line-height: 1.5; opacity: 0.8;">
                                <i class="bi bi-info-circle me-1 text-warning"></i> Access to specific ecosystem segments requires verified profile clearance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- second section -->
<div class="showcase-content-wrapper py-5" style="background-color: #f8fafc;">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-lg-4">
                <div class="sticky-sidebar-menu">
                    <div class="mb-4 ps-3">
                        <span class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 1.5px;">Ecosystem Verticals</span>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="sidebar-anchor-link active text-start border-0 w-100" id="v-pills-biz-tab" data-bs-toggle="pill" data-bs-target="#v-pills-biz" type="button" role="tab" aria-controls="v-pills-biz" aria-selected="true">
                            Business & Growth <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-tech-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tech" type="button" role="tab" aria-controls="v-pills-tech" aria-selected="false">
                            Innovation & Tech <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-fin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fin" type="button" role="tab" aria-controls="v-pills-fin" aria-selected="false">
                            Finance & Policy <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-creative-tab" data-bs-toggle="pill" data-bs-target="#v-pills-creative" type="button" role="tab" aria-controls="v-pills-creative" aria-selected="false">
                            Creative & Media <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-impact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-impact" type="button" role="tab" aria-controls="v-pills-impact" aria-selected="false">
                            Social & Academic <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-biz" role="tabpanel" aria-labelledby="v-pills-biz-tab">
                        <div class="network-cluster-card">
                            <div class="panel-hero-image mb-4 rounded-4 overflow-hidden" style="height: 200px; background: linear-gradient(
    to bottom,
    rgba(9,13,22,0.2),
    #090d16
), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000') center/cover;"></div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-building-gear"></i></div>
                                <div>
                                    <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 01</span>
                                    <h2 class="h4 fw-bold m-0 text-dark" style="font-weight: 800;">Business & Entrepreneurship</h2>
                                </div>
                            </div>
                            <p class="text-muted small mb-4">Scale engines, industrial innovators, enterprise owners, and market strategists managing global expansions.</p>
                            <div class="d-flex flex-wrap gap-2">
                                @php $biz = ['Startup Founders', 'Women Entrepreneurs', 'Business Strategists', 'Family Business Owners', 'MSME Leaders', 'Franchisors & Consultants', 'D2C Brand Founders', 'Retail & E-commerce Leaders', 'Export-Import Specialists', 'Industrialists', 'Manufacturing Innovators', 'FMCG Leaders', 'Corporate CXOs', 'Billionaires', 'Business Coaches', 'Entrepreneurs in Residence']; @endphp
                                @foreach($biz as $index => $item)
                                <a href="#" class="connector-node-pill"><span class="node-index">{{ $index + 1 }}</span> {{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-tech" role="tabpanel" aria-labelledby="v-pills-tech-tab">
                        <div class="network-cluster-card">
                            <div class="panel-hero-image mb-4 rounded-4 overflow-hidden" style="height: 200px; background: linear-gradient(to bottom, rgba(9,13,22,0.2), #090d16), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=1000') center/cover;"></div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-cpu"></i></div>
                                <div>
                                    <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 02</span>
                                    <h2 class="h4 fw-bold m-0 text-dark" style="font-weight: 800;">Innovation & Technology</h2>
                                </div>
                            </div>
                            <p class="text-muted small mb-4">Architects designing structural software architectures, AI data systems, and complex engineering frameworks.</p>
                            <div class="d-flex flex-wrap gap-2">
                                @php $tech = ['Technology Innovators', 'AI & Data Science Experts', 'Cybersecurity Specialists', 'Blockchain & Web3 Founders', 'FinTech Founders', 'SaaS Entrepreneurs', 'HealthTech Innovators', 'EdTech Founders', 'AgriTech Leaders', 'DeepTech Researchers', 'Product Managers', 'Robotics & Automation Experts', 'IoT Innovators']; @endphp
                                @foreach($tech as $index => $item)
                                <a href="#" class="connector-node-pill"><span class="node-index">{{ $index + 1 }}</span> {{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-fin" role="tabpanel" aria-labelledby="v-pills-fin-tab">
                        <div class="network-cluster-card">
                            <div class="panel-hero-image mb-4 rounded-4 overflow-hidden" style="height: 200px; background: linear-gradient(to bottom, rgba(9,13,22,0.2), #090d16), url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&q=80&w=1000') center/cover;"></div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                <div>
                                    <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 03</span>
                                    <h2 class="h4 fw-bold m-0 text-dark" style="font-weight: 800;">Finance, Investment & Policy</h2>
                                </div>
                            </div>
                            <p class="text-muted small mb-4">Venture vehicles, allocation managers, structural legal compliance advisors, and system regulators.</p>
                            <div class="d-flex flex-wrap gap-2">
                                @php $fin = ['Investors & Venture Capitalists', 'Angel Investors', 'Wealth Managers', 'Chartered Accountants', 'Taxation Experts', 'Stock Market Architects', 'Banking Leaders', 'Corporate Lawyers', 'Policy Makers & Bureaucrats', 'Government Advisors', 'Legal & Compliance Specialists']; @endphp
                                @foreach($fin as $index => $item)
                                <a href="#" class="connector-node-pill"><span class="node-index">{{ $index + 1 }}</span> {{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-creative" role="tabpanel" aria-labelledby="v-pills-creative-tab">
                        <div class="network-cluster-card">
                            <div class="panel-hero-image mb-4 rounded-4 overflow-hidden" style="height: 200px; background: linear-gradient(to bottom, rgba(9,13,22,0.2), #090d16), url('https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80&w=1000') center/cover;"></div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-bezier2"></i></div>
                                <div>
                                    <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 04</span>
                                    <h2 class="h4 fw-bold m-0 text-dark" style="font-weight: 800;">Creative, Media & Marketing</h2>
                                </div>
                            </div>
                            <p class="text-muted small mb-4">Architects of message distribution pipelines, enterprise brand strategists, and functional design thinkers.</p>
                            <div class="d-flex flex-wrap gap-2">
                                @php $media = ['Marketing Gurus', 'Branding Experts', 'PR & Communications Specialists', 'Content Creators & Influencers', 'Authors & Business Writers', 'Design Thinkers & UX Experts', 'Advertising Leaders', 'Podcast Hosts & Storytellers', 'Trend Analysts & Futurists', 'Community Builders']; @endphp
                                @foreach($media as $index => $item)
                                <a href="#" class="connector-node-pill"><span class="node-index">{{ $index + 1 }}</span> {{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-impact" role="tabpanel" aria-labelledby="v-pills-impact-tab">
                        <div class="network-cluster-card">
                            <div class="panel-hero-image mb-4 rounded-4 overflow-hidden" style="height: 200px; background: linear-gradient(to bottom, rgba(9,13,22,0.2), #090d16), url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=1000') center/cover;"></div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-globe-central-south"></i></div>
                                <div>
                                    <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 05</span>
                                    <h2 class="h4 fw-bold m-0 text-dark" style="font-weight: 800;">Social Impact & Academic Research</h2>
                                </div>
                            </div>
                            <p class="text-muted small mb-4">Sustainability operators, research scholars, global academic authorities, and structural change mentors.</p>
                            <div class="d-flex flex-wrap gap-2">
                                @php $social = ['Social Entrepreneurs', 'Sustainability Champions', 'Philanthropists', 'Impact Investors', 'Non-Profit Leaders', 'CSR Heads', 'Academic Experts & Educators', 'Professors & Scholars', 'Researchers & Innovators', 'Global Education Advisors']; @endphp
                                @foreach($social as $index => $item)
                                <a href="#" class="connector-node-pill"><span class="node-index">{{ $index + 1 }}</span> {{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* STICKY CONFIGURATION WITH BOOTSTRAP TABS */
    .sticky-sidebar-menu {
        position: sticky;
        top: 100px;
        z-index: 10;
    }

    .sidebar-anchor-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 24px;
        color: #64748b;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border-radius: 14px;
        margin-bottom: 10px;
        background: #ffffff;
        border: 1px solid #e2e8f0 !important;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .sidebar-anchor-link:hover {
        background: #f8fafc;
        color: #090d16;
        padding-left: 28px;
    }

    .sidebar-anchor-link.active {
        background: #090d16 !important;
        color: #ffd2b1 !important;
        border-color: #090d16 !important;
        padding-left: 32px;
        box-shadow: 0 10px 25px -5px rgba(9, 13, 22, 0.15);
    }

    /* Content Layout Elements */
    .network-cluster-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 32px;
        padding: 40px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .cluster-title-icon {
        width: 56px;
        height: 56px;
        background: #090d16;
        color: #ffd2b1;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .panel-hero-image {
        box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.4);
        background-blend-mode: multiply;
        transition: transform 0.6s ease;
    }

    .network-cluster-card:hover .panel-hero-image {
        transform: scale(1.01);
    }

    /* Interactive List Badges */
    .connector-node-pill {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 100px;
        padding: 12px 22px;
        font-size: 0.88rem;
        font-weight: 600;
        color: #334155;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
    }

    .connector-node-pill:hover {
        background: #090d16;
        border-color: #090d16;
        color: #ffd2b1 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px -5px rgba(9, 13, 22, 0.1);
    }

    .node-index {
        font-size: 0.7rem;
        opacity: 0.5;
        background: rgba(0, 0, 0, 0.05);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .connector-node-pill:hover .node-index {
        background: rgba(255, 255, 255, 0.15);
        opacity: 1;
    }
</style>

@endsection