@extends('layout.app')

@section('content')

@push('styles')

<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">

@endpush
<style>

/* ==========================================
   BECOME A PARTNER — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Hero / Contact Section ---- */
@media (max-width: 991px) {
    .partner-contact-section {
        padding: 130px 0 70px;
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
        padding: 110px 0 60px;
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

</style>


<section class="partner-contact-section">

    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT SIDE -->
            <div class="col-lg-5">

                <div class="partner-content wow fadeInUp d-flex flex-column">

                    <span class="partner-tag">
                        Growth Partner
                    </span>

                    <h1>
                        Become a Partner
                    </h1>

                    <p>
                        At Young Chanakya, we believe in collaboration that drives
                        opportunities, growth, and meaningful change. By partnering
                        with us, you become a part of a vibrant ecosystem that
                        nurtures future leaders, entrepreneurs, and changemakers.
                    </p>

                    <ul class="checklist-style style-none">
                        <li>
                            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Strategic Entrepreneurial Guidance & Growth Support</span>
                        </li>
                        <li>
                            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Networking with Industry Experts & Global Leaders</span>
                        </li>
                        <li>
                            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Access to attend premium startup & leadership events</span>
                        </li>
                    </ul>

                </div>

            </div>


            <!-- RIGHT SIDE FORM -->
            <div class="col-lg-7">

                <div class="partner-form-box wow fadeInUp">

                    <form action="#" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Full Name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="Email Address">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                    class="form-control"
                                    name="phone"
                                    placeholder="Phone / WhatsApp">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                    class="form-control"
                                    name="company"
                                    placeholder="Organization / Company Name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                    class="form-control"
                                    name="designation"
                                    placeholder="Designation / Role">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="url"
                                    class="form-control"
                                    name="linkedin"
                                    placeholder="LinkedIn Profile">
                            </div>

                            <div class="col-12 mb-3">

                                <select class="form-control"
                                    name="partnership_type">

                                    <option selected disabled>
                                        -- Partnership Type --
                                    </option>

                                    <option>Media Partners</option>
                                    <option>Digital Partners</option>
                                    <option>Consulting Partners</option>
                                    <option>Knowledge Partners</option>
                                    <option>Industry Partners</option>
                                    <option>Innovation & Technology Partners</option>
                                    <option>Community Partners</option>
                                    <option>Learning & Development Partners</option>
                                    <option>Event Partners</option>
                                    <option>Finance & Growth Partners</option>

                                </select>

                            </div>

                            <div class="col-12 mb-4">

                                <input type="url"
                                    class="form-control"
                                    name="website"
                                    placeholder="Website URL">

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

</section>


<!-- second section -->

<section class="connectx-how-works-section-wrapper pt-150 lg-pt-80 pb-120 lg-pb-80">
    <div class="container">

        <div class="how-work-main-heading-box text-center mb-70">
            <h2 class="how-work-main-heading">Who We Work With</h2>
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

<div class="text-feature-five position-relative mt-150 lg-mt-80 pb-50">

    <div class="container">

        <div class="bg-wrapper connectx-partner-bg">

            <div class="row">

                <!-- CONTENT SIDE -->
                <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">

                    <div class="text-wrapper pt-60 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">

                        <div class="title-one">

                            <div class="upper-title-two mb-15">
                                Why Partner with ConnectX </div>

                            <h2 class="text-dark">

                                Structured Collaboration <br>
                                Built for Long-Term Growth

                            </h2>

                        </div>

                        <p class="text-lg text-dark mt-25 mb-35">

                            ConnectX connects partners and creators through meaningful collaboration, engagement, and growth

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
CONNECTX PARTNERSHIP OPPORTUNITIES
========================= -->

<section class="connectx-partnership-section pt-120 pb-120">

    <div class="container">

        <!-- HEADING -->

        <div class="text-center mb-70">

            <div class="title-style-one">


                <h2 class="main-title">
                    ConnectX Partnership Opportunities
                </h2>




            </div>

        </div>

        <div class="row gx-4 gy-4">

            <!-- CONTENT -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-card">

                    <div class="icon-box">
                        <i class="fas fa-podcast"></i>
                    </div>

                    <h4>Content Partnerships</h4>

                    <p>
                        Collaborate on creator-led content formats
                        and storytelling experiences.
                    </p>

                    <ul class="style-none">

                        <li>Podcasts and interview series</li>

                        <li>Creator-led storytelling formats</li>

                        <li>Video and digital content production</li>

                        <li>Knowledge-driven content</li>

                        <li>Multi-format collaborations</li>

                    </ul>

                </div>

            </div>

            <!-- BRAND -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-card">

                    <div class="icon-box">
                        <i class="fas fa-bullhorn"></i>
                    </div>

                    <h4>Brand Collaborations</h4>

                    <p>
                        Work with creators and influencers
                        to build meaningful narratives.
                    </p>

                    <ul class="style-none">

                        <li>Campaign collaborations</li>

                        <li>Product launches</li>

                        <li>Brand storytelling</li>

                        <li>Influencer engagement</li>

                        <li>Integrated experiences</li>

                    </ul>

                </div>

            </div>

            <!-- MEDIA -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-card">

                    <div class="icon-box">
                        <i class="fas fa-video"></i>
                    </div>

                    <h4>Media Partnerships</h4>

                    <p>
                        Amplify visibility through media,
                        coverage and content reach.
                    </p>

                    <ul class="style-none">

                        <li>Event coverage</li>

                        <li>Creator features</li>

                        <li>Digital interviews</li>

                        <li>Platform visibility</li>

                        <li>Co-branded initiatives</li>

                    </ul>

                </div>

            </div>

            <!-- COMMUNITY -->

            <div class="col-lg-6">

                <div class="connectx-card">

                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>

                    <h4>Community Partnerships</h4>

                    <p>
                        Collaborate with communities and
                        networks to expand engagement.
                    </p>

                    <ul class="style-none">

                        <li>Community programs</li>

                        <li>Cross-network collaborations</li>

                        <li>Ecosystem conversations</li>

                        <li>Audience access</li>

                        <li>Joint engagement activities</li>

                    </ul>

                </div>

            </div>

            <!-- TECHNOLOGY -->

            <div class="col-lg-6">

                <div class="connectx-card">

                    <div class="icon-box">
                        <i class="fas fa-microchip"></i>
                    </div>

                    <h4>Technology Partnerships</h4>

                    <p>
                        Support ecosystems through
                        tools and digital infrastructure.
                    </p>

                    <ul class="style-none">

                        <li>Platform integrations</li>

                        <li>Production technologies</li>

                        <li>Creator solutions</li>

                        <li>Infrastructure support</li>

                        <li>Content innovation</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
EXPANDING ACROSS INDUSTRIES
========================= -->
<section class="connectx-expand-section pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- CONTENT SIDE -->
            <div class="col-lg-6 order-lg-last wow fadeInRight">

                <div class="ps-xl-5 ms-xxl-4">

                    <div class="title-three mb-25 md-mb-20">
                        <h2>
                            Expanding Across Industries <br> and Regions
                        </h2>
                    </div>

                    <p class="text-lg mb-35 lg-mb-25">
                        ConnectX is building a network of creators, voices, and collaborators across industries and geographies, enabling partners to access a diverse and growing ecosystem.
                    </p>

                    <ul class="style-none connectx-expand-points">
                        <li>Multi-industry creator ecosystem</li>
                        <li>Cross-border collaboration opportunities</li>
                        <li>Digital-first scalable network</li>
                        <li>Continuous onboarding of new voices</li>
                    </ul>

                </div>

            </div>

            <!-- IMAGE SIDE -->
            <div class="col-lg-6 col-md-10 m-auto wow fadeInLeft">

                <div class="media-wrapper md-mt-60 pe-xl-4">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=80"
                        alt="Global business collaboration"
                        class="lazy-img w-100 connectx-expand-pro-img">
                </div>

            </div>

        </div>
    </div>
</section>

@endsection