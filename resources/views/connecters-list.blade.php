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
        <div class="row g-5 align-items-stretch"> <div class="col-lg-4 d-flex flex-column">
                <div class="sticky-sidebar-menu h-100 d-flex flex-column">
                    <div class="sidebar-wrapper-shield p-4 rounded-4 d-flex flex-column justify-content-between h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px -10px rgba(0,0,0,0.02); min-height: 100%;">
                        
                        <div class="h-100 d-flex flex-column">
                            <div class="mb-4 ps-2">
                                <span class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 1.5px;">Ecosystem Verticals</span>
                            </div>
                            
                            <div class="nav flex-column nav-pills justify-content-between h-100 gap-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="sidebar-anchor-link active text-start border-0 w-100" id="v-pills-biz-tab" data-bs-toggle="pill" data-bs-target="#v-pills-biz" type="button" role="tab" aria-controls="v-pills-biz" aria-selected="true">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sidebar-num-badge">01</span>
                                        <span>Business & Growth</span>
                                    </span>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                                
                                <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-tech-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tech" type="button" role="tab" aria-controls="v-pills-tech" aria-selected="false">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sidebar-num-badge">02</span>
                                        <span>Innovation & Tech</span>
                                    </span>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                                
                                <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-fin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fin" type="button" role="tab" aria-controls="v-pills-fin" aria-selected="false">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sidebar-num-badge">03</span>
                                        <span>Finance & Policy</span>
                                    </span>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                                
                                <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-creative-tab" data-bs-toggle="pill" data-bs-target="#v-pills-creative" type="button" role="tab" aria-controls="v-pills-creative" aria-selected="false">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sidebar-num-badge">04</span>
                                        <span>Creative & Media</span>
                                    </span>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                                
                                <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-impact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-impact" type="button" role="tab" aria-controls="v-pills-impact" aria-selected="false">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sidebar-num-badge">05</span>
                                        <span>Social & Academic</span>
                                    </span>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="sidebar-insight-quote mt-4 p-4 rounded-4 position-relative overflow-hidden" style="background-color: #090d16; border: 1px solid rgba(255, 210, 177, 0.1);">
                            <div class="position-absolute top-0 end-0 p-3 opacity-10">
                                <i class="bi bi-quote text-white h1"></i>
                            </div>
                            <span class="text-uppercase fw-bold d-block mb-2" style="font-size: 0.65rem; color: #ffd2b1; letter-spacing: 2px;">Institutional Mandate</span>
                            <p class="m-0 fw-normal" style="font-size: 0.8rem; line-height: 1.5; color: rgba(255, 255, 255, 0.75);">
                                "Connecting verified structural leadership to accelerate enterprise and industrial ecosystem growth architectures."
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content h-100" id="v-pills-tabContent">
                    <div class="tab-pane fade show active h-100" id="v-pills-biz" role="tabpanel" aria-labelledby="v-pills-biz-tab">
                        <div class="network-cluster-card h-100 d-flex flex-column justify-content-between">
                            <div>
                                <div class="panel-hero-image mb-4 rounded-4 overflow-hidden" style="height: 200px; background: linear-gradient(to bottom, rgba(9,13,22,0.2), #090d16), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000') center/cover;"></div>
                                
                                <div class="d-flex align-items-center gap-3 mb-4">
                                    <div class="cluster-title-icon"><i class="bi bi-building-gear"></i></div>
                                    <div>
                                        <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 01</span>
                                        <h2 class="h4 fw-bold m-0 text-dark" style="font-weight: 800;">Business & Entrepreneurship</h2>
                                    </div>
                                </div>
                                <p class="text-muted small mb-4">Scale engines, industrial innovators, enterprise owners, and market strategists managing global expansions.</p>
                                <div class="d-flex flex-wrap gap-2 mb-2">
                                    @php $biz = ['Startup Founders', 'Women Entrepreneurs', 'Business Strategists', 'Family Business Owners', 'MSME Leaders', 'Franchisors & Consultants', 'D2C Brand Founders', 'Retail & E-commerce Leaders', 'Export-Import Specialists', 'Industrialists', 'Manufacturing Innovators', 'FMCG Leaders', 'Corporate CXOs', 'Billionaires', 'Business Coaches', 'Entrepreneurs in Residence']; @endphp
                                    @foreach($biz as $index => $item)
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
</div>

<style>
    .sticky-sidebar-menu {
        position: sticky;
        top: 40px; 
        z-index: 10;
    }
    
    /* Elegant, taller sidebar links to take up more presence */
    .sidebar-anchor-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 24px 24px; /* Increased vertical padding to make buttons look bigger and high-end */
        color: #64748b;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border-radius: 14px;
        background: #ffffff;
        border: 1px solid #e2e8f0 !important;
        flex-grow: 1; /* Allows links to organically adapt and fill up the layout height gap evenly */
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .sidebar-num-badge {
        font-size: 0.75rem;
        opacity: 0.4;
        font-weight: 800;
        font-family: monospace;
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
        padding-left: 30px;
        box-shadow: 0 8px 20px -6px rgba(9, 13, 22, 0.12);
    }
    
    .sidebar-anchor-link.active .sidebar-num-badge {
        opacity: 0.9;
        color: #ffd2b1;
    }
    
    /* Right Card Content Layout Elements */
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
        box-shadow: inset 0 0 100px rgba(0,0,0,0.4);
        background-blend-mode: multiply;
        transition: transform 0.6s ease;
    }
    .network-cluster-card:hover .panel-hero-image {
        transform: scale(1.01);
    }

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
        background: rgba(0,0,0,0.05);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>


@endsection