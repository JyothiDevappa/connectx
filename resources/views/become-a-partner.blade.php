@extends('layout.app')

@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush
<style>
    /* =========================================
   PARTNER CONTACT PAGE
========================================= */
    .main-title {
        font-weight: 900;
        line-height: 1.15;
        letter-spacing: -2px;
        color: #0c3a30;
        font-size: clamp(34px, 4vw, 56px);
    }

    .partner-contact-section {
        position: relative;
        padding: 180px 0 100px;
        background: #f8f6f2;
        overflow: hidden;
    }

    @media (max-width: 991px) {
        .partner-contact-section {
            padding: 140px 0 70px;
        }
    }

    /* LEFT CONTENT */

    .partner-content {
        padding-right: 50px;
    }

    .partner-tag {
        display: inline-block;
        padding: 8px 18px;
        border-radius: 30px;
        background: rgba(118, 88, 59, 0.10);
        color: #76583b;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 18px;
    }

    .partner-content h1 {
        font-size: 50px;
        line-height: 1.15em;
        font-weight: 700;
        color: #0c3a30;
        margin-bottom: 22px;
        letter-spacing: -1px;
    }

    .partner-content p {
        font-size: 16px;
        line-height: 1.9em;
        color: #555;
        margin-bottom: 0;
    }

    @media (max-width: 991px) {

        .partner-content {
            padding-right: 0;
            margin-bottom: 40px;
        }

        .partner-content h1 {
            font-size: 38px;
        }
    }

    @media (max-width: 576px) {

        .partner-content h1 {
            font-size: 30px;
        }
    }

    /* FORM BOX */

    .partner-form-box {
        background: #fff;
        padding: 40px;
        border-radius: 22px;
        box-shadow: 0 15px 60px rgba(0, 0, 0, 0.08);
        position: relative;
    }

    @media (max-width: 576px) {

        .partner-form-box {
            padding: 25px;
        }
    }

    /* INPUTS */

    .partner-form-box .form-control,
    .partner-form-box select {
        height: 58px;
        border-radius: 12px;
        border: 1px solid #e5e5e5;
        padding: 0 18px;
        font-size: 15px;
        color: #000;
        box-shadow: none;
        transition: all .3s ease;
        background: #fff;
    }

    .partner-form-box .form-control:focus,
    .partner-form-box select:focus {
        border-color: #76583b;
        box-shadow: 0 0 0 3px rgba(118, 88, 59, 0.10);
    }

    /* BUTTON */

    .partner-submit-btn {
        width: 100%;
        height: 58px;
        border: none;
        border-radius: 12px;
        background: #19352d;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        transition: all .3s ease;
    }

    .partner-submit-btn:hover {
        background: #5e442d;
        color: #fff;
    }

    /* SHAPE */

    .partner-contact-section::before {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: rgba(118, 88, 59, 0.05);
        top: -180px;
        right: -180px;
    }




    /* WHO WE WORK WITH */

    /* .connectx-work-card {

        background: #fff;

        padding: 45px 35px;

        border-radius: 30px;

        margin-bottom: 30px;

        height: 100%;

        transition: .35s;

        border: 1px solid rgba(118, 88, 59, .12);

        box-shadow: 0 10px 30px rgba(0, 0, 0, .04);

    }

    .connectx-work-card:hover {

        transform: translateY(-8px);

        box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
    }

    .connectx-work-card .icon-box {

        width: 70px;
        height: 70px;

        background: #76583b;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        margin-bottom: 25px;
    }

    .connectx-work-card .icon-box span {

        color: #fff;

        font-size: 18px;

        font-weight: 700;
    }

    .connectx-work-card h4 {

        margin-bottom: 18px;

        font-size: 24px;

        font-weight: 600;
    }

    .connectx-work-card p {

        margin: 0;

        line-height: 1.8em;

        color: #666;
    }

    @media(max-width:991px) {

        .connectx-work-card {

            padding: 35px 25px;

        }

        .connectx-work-card h4 {

            font-size: 21px;

        }

    } */



    /* cards */
    /* CARDS */

    .connectx-card {

        background: #fff;

        padding: 40px;

        border-radius: 30px;

        height: 100%;

        box-shadow: 0 10px 30px rgba(0, 0, 0, .04);

        transition: .35s;
    }

    .connectx-card:hover {

        transform: translateY(-8px);

    }

    .icon-box {

        width: 75px;

        height: 75px;

        background: #0c3a30;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        margin-bottom: 25px;
    }

    .icon-box i {

        color: #fff;

        font-size: 24px;

    }

    .connectx-card ul li,
    .expand-list li {

        position: relative;

        padding-left: 40px;

        margin-bottom: 16px;
    }

    .connectx-card ul li:before,
    .expand-list li:before {

        content: "✓";

        position: absolute;

        left: 0;

        top: 2px;

        width: 24px;

        height: 24px;

        background: #ffd2b1;

        color: #fff;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 11px;
    }

    /* EXPANSION */

    .connectx-expand-points {

        padding: 0;

        margin: 0;
    }

    .connectx-expand-points li {

        position: relative;

        padding-left: 52px;

        margin-bottom: 18px;

        font-size: 17px;

        line-height: 1.8em;

        color: #222;
    }

    .connectx-expand-points li:last-child {

        margin-bottom: 0;
    }

    .connectx-expand-points li:before {

        content: "✓";

        position: absolute;

        left: 0;

        top: 2px;

        width: 32px;

        height: 32px;

        background: #ffd2b1;


        color: #fff;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 12px;

        font-weight: 700;
    }

    @media(max-width:991px) {

        .connectx-expand-points li {

            padding-left: 48px;

            font-size: 16px;

        }

    }

    .partner-page or .become-partner-section */ .partner-page,
    .become-partner-section {
        margin-bottom: 20px;
        /* or 40px if you want more space */
    }

    /* second section */
/* ==========================================================================
   ConnectX Completely Isolated "How Works" Grid Stylesheet
   ========================================================================= */

/* Main wrapper spacing rules if needed */
.connectx-how-works-section-wrapper {
    position: relative;
}

/* Unique Main Title Class */
.how-work-main-heading {
    font-size: 2.5rem !important;
    font-weight: 700 !important;
    color: #37665c !important;
    margin: 0 !important;
}

/* Outer grid container wrapping all cards together */
.how-works-section-cards-container {
    border: 1px solid rgba(55, 102, 92, 0.15) !important;
    border-radius: 16px !important;
    overflow: hidden !important;
    background: #ffffff !important;
    box-shadow: 0 20px 40px rgba(55, 102, 92, 0.04) !important;
}

/* Base card container styling */
.how-works-section-card {
    padding: 3rem 2.5rem !important;
    height: 100% !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important; 
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1) !important;
    position: relative !important;
    z-index: 1 !important;
}

/* Background grid block style variants */
.how-works-bg-light {
    background-color: #ffffff !important;
}
.how-works-bg-tint {
    background-color: rgba(255, 210, 177, 0.12) !important; /* 12% opacity tint of #ffd2b1 */
}

/* CRITICAL FIX: The wrapper layout strictly locking items to a horizontal row */
.how-works-header-flex-row {
    display: flex !important;
    flex-direction: row !important;      /* Forces inline row flow layout */
    align-items: center !important;     /* Centers everything vertically inline */
    justify-content: flex-start !important;
    gap: 12px !important;                /* Distance between badge element and h4 text */
    margin-bottom: 1.5rem !important;
    width: 100% !important;
}

/* Custom isolated text header class */
.how-works-h4 {
    font-size: 1.35rem !important;
    font-weight: 600 !important;
    color: #37665c !important;
    margin: 0 !important;
    padding: 0 !important;
    line-height: 1.2 !important;
    display: inline-block !important;   /* Nullifies global block behaviors dropping lines */
    vertical-align: middle !important;
    transition: color 0.3s ease !important;
}

/* Custom isolated badge element */
.how-works-badge-num {
    font-size: 0.9rem !important;
    font-weight: 700 !important;
    color: #37665c !important;
    letter-spacing: 0.05em !important;
    background: rgba(255, 210, 177, 0.4) !important; /* Default soft accent */
    padding: 4px 12px !important;
    border-radius: 30px !important;
    transition: all 0.3s ease !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;          /* Prevents text container from crushing badge dimensions */
    height: 32px !important;
    vertical-align: middle !important;
}

/* Custom isolated description block paragraphs */
.how-works-p-desc {
    font-size: 0.98rem !important;
    color: #555555 !important;
    line-height: 1.6 !important;
    margin: 0 !important;
    transition: color 0.3s ease !important;
}

/* ==========================================================================
   Interactive Hover Elements Transitions
   ========================================================================== */

/* Main card hover block */
.how-works-section-card:hover {
    background-color: #37665c !important;
    transform: translateY(-4px) !important;
    box-shadow: 0 15px 30px rgba(55, 102, 92, 0.2) !important;
    z-index: 2 !important;
}

/* Heading element updates to clean white text on active hover layout */
.how-works-section-card:hover .how-works-h4 {
    color: #ffffff !important;
}

/* Paragraph element description text transitions on active hover */
.how-works-section-card:hover .how-works-p-desc {
    color: rgba(255, 255, 255, 0.8) !important;
}

/* Flipped Hover Requirement: Number background becomes Green, number text shifts to Orange */
.how-works-section-card:hover .how-works-badge-num {
    background: #37665c !important;
    color: #ffd2b1 !important;
    border: 1px solid rgba(255, 210, 177, 0.3) !important;
}

/* ==========================================================================
   Clean Grid Layout Borders Viewport Mixins
   ========================================================================== */

@media (min-width: 992px) {
    .hw-grid-border-end-lg { border-right: 1px solid rgba(55, 102, 92, 0.15) !important; }
    .hw-grid-border-end-md { border-right: 1px solid rgba(55, 102, 92, 0.15) !important; }
    .hw-grid-border-bottom-md { border-bottom: 1px solid rgba(55, 102, 92, 0.15) !important; }
}

@media (min-width: 768px) and (max-width: 991.98px) {
    .hw-grid-border-end-md { border-right: 1px solid rgba(55, 102, 92, 0.15) !important; }
    .hw-grid-border-bottom-md { border-bottom: 1px solid rgba(55, 102, 92, 0.15) !important; }
    .hw-grid-border-bottom-sm { border-bottom: 1px solid rgba(55, 102, 92, 0.15) !important; }
}

@media (max-width: 767.98px) {
    .how-works-section-card {
        border-bottom: 1px solid rgba(55, 102, 92, 0.15) !important;
        padding: 2.5rem 1.5rem !important;
    }
    .how-works-section-cards-container .col-md-6:last-child .how-works-section-card {
        border-bottom: none !important;
    }
}
    
</style>


<section class="partner-contact-section">

    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT SIDE -->
            <div class="col-lg-5">

                <div class="partner-content wow fadeInUp">

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
    <div class="row align-items-center">

        <!-- CONTENT SIDE -->

        <div class="col-lg-6 order-lg-last wow fadeInRight">

            <div class="ps-xl-5 ms-xxl-4">

                <div class="title-three mb-35 md-mb-20">

                    <!-- <div class="upper-title">
                    EXPANDING ACROSS INDUSTRIES & REGIONS
                </div> -->

                    <h2>

                        Expanding Across Industries <br> and Regions

                    </h2>

                </div>

                <p class="text-lg mb-40 lg-mb-30">

                    ConnectX is building a network of creators, voices, and collaborators across industries and geographies, enabling partners to access a diverse and growing ecosystem.



                </p>

                <ul class="style-none connectx-expand-points">

                    <li>
                        Multi-industry creator ecosystem
                    </li>

                    <li>
                        Cross-border collaboration opportunities
                    </li>

                    <li>
                        Digital-first scalable network
                    </li>

                    <li>
                        Continuous onboarding of new voices
                    </li>

                    <!-- <li>
                        Expanding content and engagement formats
                    </li> -->

                </ul>

                <!-- <div class="d-flex justify-content-between align-items-center mt-65 lg-mt-50">

                <a href="#"
                   class="btn-thirteen tran3 flex-fill">

                    Explore Opportunities

                </a>

                <a href="#"
                   class="btn-fourteen tran3s">

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div> -->

            </div>

        </div>

        <!-- IMAGE SIDE -->

        <div class="col-lg-6 col-md-8 m-auto wow fadeInLeft">

            <div class="media-wrapper md-mt-60">

                <!-- <img src="images/assets/screen_16.webp"
                    alt=""
                    class="lazy-img"> -->

              <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=80"
     alt="Global business collaboration"
     class="lazy-img">

     
            </div>

        </div>

    </div>
    @endsection