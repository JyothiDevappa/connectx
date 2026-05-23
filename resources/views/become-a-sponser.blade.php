@extends('layout.app')

@section('content')

<style>

/* =========================================
   SPONSOR SECTION
========================================= */

.sponsor-contact-section{
    position: relative;
    padding: 180px 0 100px;
    background: #f8f6f2;
    overflow: hidden;
}

@media (max-width: 991px){
    .sponsor-contact-section{
        padding: 140px 0 70px;
    }
}

.sponsor-content h1{
    font-size: 52px;
    line-height: 1.15em;
    font-weight: 700;
    color: #000;
    margin-bottom: 25px;
    letter-spacing: -1px;
}

.sponsor-content p{
    font-size: 16px;
    line-height: 1.9em;
    color: #555;
    margin-bottom: 0;
}

@media (max-width: 991px){
    .sponsor-content{
        margin-bottom: 40px;
    }

    .sponsor-content h1{
        font-size: 38px;
        line-height: 1.25em;
    }
}

@media (max-width: 576px){
    .sponsor-content h1{
        font-size: 30px;
    }
}

/* FORM BOX */

.sponsor-form-box{
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 60px rgba(0,0,0,0.08);
    position: relative;
}

@media (max-width: 576px){
    .sponsor-form-box{
        padding: 25px;
    }
}

/* INPUTS */

.sponsor-form-box .form-control,
.sponsor-form-box select{
    height: 58px;
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 0 18px;
    font-size: 15px;
    color: #000;
    box-shadow: none;
    transition: all .3s ease;
    background: #fff;
}

.sponsor-form-box textarea.form-control{
    height: 130px;
    padding-top: 15px;
}

.sponsor-form-box .form-control:focus,
.sponsor-form-box select:focus{
    border-color: #76583b;
    box-shadow: 0 0 0 3px rgba(118,88,59,0.10);
}

/* BUTTON */

.btn-sponsor-submit{
    width: 100%;
    height: 58px;
    border: none;
    border-radius: 12px;
    background: #76583b;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    transition: all .3s ease;
}

.btn-sponsor-submit:hover{
    background: #5e442d;
    color: #fff;
}

/* OPTIONAL SHAPE */

.sponsor-contact-section::before{
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    background: rgba(118,88,59,0.05);
    border-radius: 50%;
    top: -200px;
    right: -150px;
}






/* sponser section */
/* ======================
SPONSOR CARDS
====================== */

.sponsor-category-section{
    background:#fff;
}

.sponsor-card{
    background:#ffffff;
    padding:40px 30px;
    border-radius:25px;
    height:100%;

    border:1px solid #e8e8e8;

    box-shadow:0 10px 30px rgba(0,0,0,.05);
}

/* removed hover */

.sponsor-card .icon{
    width:75px;
    height:75px;

    border-radius:20px;

    background:#76583b;

    color:#fff;

    font-size:28px;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:25px;
}

.sponsor-card h4{
    color:#000;
    font-size:24px;
    font-weight:700;
    margin-bottom:15px;
}

.sponsor-card p{
    color:#555;
    line-height:1.8;
    margin-bottom:20px;
}

.sponsor-card ul{
    padding:0;
    margin:0;
    list-style:none;
}

.sponsor-card ul li{
    position:relative;

    padding-left:30px;

    margin-bottom:12px;

    color:#222;

    font-size:15px;
}

.sponsor-card ul li:before{
    content:"✓";

    position:absolute;

    left:0;
    top:2px;

    width:18px;
    height:18px;

    background:#76583b;

    border-radius:50%;

    color:#fff;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:10px;
}



/* CTA BUTTON */

.sponsor-cta{
    margin-top:35px;
}

.btn-become-sponsor{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding:16px 34px;

    background:#76583b;

    color:#fff;

    border-radius:14px;

    font-size:16px;
    font-weight:600;

    text-decoration:none;

    transition:.3s ease;

    border:1px solid #76583b;
}

.btn-become-sponsor:hover{
    background:transparent;

    color:#76583b;

    transform:translateY(-3px);
}

/* smooth scroll */

html{
    scroll-behavior:smooth;
}
/* second section  */
/* ==========================
WHY CONNECTX SECTION
========================== */

.connectx-benefits-section{
    background:#fff;
}

.connectx-benefits-section .sc-title{
    color:#000;
}

.connectx-benefits-section .main-title{
    color:#000;
}

.connectx-benefits-section p{
    color:#666;
}

.benefit-card{
    background:#fff;

    padding:35px;

    height:100%;

    border-radius:24px;

    border:1px solid #ececec;

    box-shadow:0 8px 25px rgba(0,0,0,.04);
}

.icon-box{
    width:70px;
    height:70px;

    border-radius:18px;

    background:#76583b;

    color:#fff;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:24px;

    margin-bottom:22px;
}

.benefit-card h4{
    color:#000;

    font-size:22px;

    font-weight:700;

    margin-bottom:15px;
}

.benefit-card p{
    color:#666;

    line-height:1.8;

    margin:0;
}



/* /* CONNECTX BRAND SECTION */

.connectx-brand-section .bg-wrapper{
    min-height: 620px;
}

.connectx-points{
    padding-left:0;
    margin:0;
}

.connectx-points li{
    position:relative;
    color:#fff;
    font-size:20px;
    line-height:1.8em;

    padding:18px 0 18px 70px;

    border-bottom:1px solid rgba(255,255,255,0.12);
}

.connectx-points li:last-child{
    border-bottom:none;
}

/* Tick icon */

.connectx-points li::before{
    content:"✓";

    position:absolute;

    left:0;
    top:16px;

    width:42px;
    height:42px;

    background:#76583b;

    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    color:#fff;

    font-size:18px;
    font-weight:700;
}

@media(max-width:991px){

    .connectx-brand-section .bg-wrapper{
        min-height:auto;
    }

    .connectx-points li{
        font-size:17px;
        padding-left:60px;
    }

}

/* *4. Sponsorship Categories* */

.title-style-one .sc-title{
    color:#000;
}

.title-style-one .main-title{
    color:#000 !important;
}
/* ==========================
CTA SECTION
========================== */

.connectx-cta-section{
    background:#fff;
}

.cta-wrapper{

    background:#f8f6f3;

    padding:70px;

    border-radius:35px;

    border:1px solid #ececec;
}

.cta-content .sc-title{
    color:#76583b;

    margin-bottom:15px;

    font-weight:700;
}

.cta-content h2{

    color:#000;

    font-size:48px;

    font-weight:700;

    line-height:1.3;

    margin-bottom:35px;
}

.cta-points{

    display:flex;

    flex-wrap:wrap;

    gap:18px;
}

.point{

    display:flex;

    align-items:center;

    gap:12px;

    background:#fff;

    padding:14px 22px;

    border-radius:50px;

    border:1px solid #e7e7e7;
}

.point i{

    width:28px;

    height:28px;

    background:#76583b;

    color:#fff;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:12px;
}

.point span{
    color:#111;
    font-weight:600;
}

.theme-btn-one{
    margin-top:20px;
}


@media(max-width:991px){

.cta-wrapper{
    padding:45px;
}

.cta-content h2{
    font-size:34px;
}

.text-lg-end{
    margin-top:35px;
}

}



/* fifth section */


</style>


<section class="sponsor-contact-section">
    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">

                <div class="sponsor-content wow fadeInUp">

                    <h1>
                        Partner in Shaping India’s <br>
                        Next Business Era
                    </h1>

                    <p>
                        Associate your brand with India’s next wave of changemakers,
                        entrepreneurs, and innovation-driven programs — while gaining
                        visibility, influence, and meaningful engagement with
                        future-ready talent and ecosystems.
                    </p>
<div class="sponsor-cta">
    <a href="#sponsor-form" class="btn-become-sponsor">
        Become a Sponsor
    </a>
</div>
                </div>

            </div>


            <!-- RIGHT FORM -->
            <div class="col-lg-6">

                <div class="sponsor-form-box wow fadeInUp">

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
                                       placeholder="Company Name">
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
                                <select class="form-control" name="sponsorship_level">

                                    <option selected disabled>
                                        -- Sponsor Type --
                                    </option>

                                    <option>Sponsor</option>
                                    <option>Co-Sponsor</option>
                                    <option>Powered by Sponsor</option>
                                    <option>Associate Sponsor</option>
                                    <option>Supporting Sponsor</option>
                                    <option>Education Sponsor</option>
                                    <option>Innovation Sponsor</option>
                                    <option>Hospitality Sponsor</option>
                                    <option>Merchandise Sponsor</option>
                                    <option>Logistics Sponsor</option>
                                    <option>Financial Sponsor</option>
                                    <option>Wellness Sponsor</option>
                                    <option>Career Sponsor</option>
                                    <option>Green Sponsor</option>
                                    <option>Networking Sponsor</option>

                                </select>
                            </div>

                            <div class="col-12 mb-4">
                                <input type="url"
                                       class="form-control"
                                       name="website"
                                       placeholder="Website URL (Optional)">
                            </div>

                            <div class="col-12">
                                <button type="submit"
                                        class="btn-sponsor-submit">
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

<!-- ===================================
WHY CONNECT WITH CONNECTX
=================================== -->
<section class="connectx-benefits-section pt-120 pb-120">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-80">

            <div class="title-style-one">

                <!-- <div class="sc-title text-uppercase">
                    WHY CONNECT WITH CONNECTX
                </div> -->

                <h2 class="main-title fw-700">
                   WHY CONNECT WITH CONNECTX
                </h2>

                <p class="mt-25">
                   Position your brand within a structured creator ecosystem designed for consistent visibility, engagement, and collaboration
                </p>

            </div>

        </div>

        <div class="row gx-4 gy-4">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-eye"></i>
                    </div>

                    <h4>Consistent Visibility</h4>

                    <p>
                        Maintain ongoing brand presence across podcasts,
                        events, and digital content formats.
                    </p>

                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>

                    <h4>Curated Creator Access</h4>

                    <p>
                        Connect directly with selected influencers,
                        speakers, and creators across industries.
                    </p>

                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-bullhorn"></i>
                    </div>

                    <h4>Multi-Channel Exposure</h4>

                    <p>
                        Extend reach through podcasts, meetups,
                        roundtables, and digital campaigns.
                    </p>

                </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-comments"></i>
                    </div>

                    <h4>Active Engagement</h4>

                    <p>
                        Participate in collaborations,
                        creator interactions, and discussions.
                    </p>

                </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-globe"></i>
                    </div>

                    <h4>Scalable Presence</h4>

                    <p>
                        Expand visibility through an evolving
                        and growing global creator network.
                    </p>

                </div>
            </div>

            <!-- 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-chart-line"></i>
                    </div>

                    <h4>Structured Opportunities</h4>

                    <p>
                        Leverage recurring formats for measurable
                        and predictable brand exposure.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>



<!-- third section -->
<section class="fancy-banner-seven box-layout connectx-brand-section pt-120 lg-pt-80">

    <div class="bg-wrapper border-40 position-relative z-1 overflow-hidden pt-140 pb-140 lg-pt-90 lg-pb-90">

        <div class="container position-relative z-2">

            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">

                    <div class="title-two mb-40">

                        <!-- <div class="upper-title-two text-white mb-15">
                            BRAND PRESENCE ACROSS CONNECTX
                        </div> -->

                        <h2 class="text-white">
                          BRAND PRESENCE ACROSS CONNECTX
                        </h2>

                        <p class="text-white mt-25 opacity-75">
                           Your brand is integrated across all high-engagement formats within ConnectX

                        </p>

                    </div>

                    <!-- <a href="#" class="btn-twenty">
                        Become a Sponsor
                    </a> -->

                </div>

                <!-- RIGHT LIST -->
                <div class="col-lg-5 ms-auto">

                    <ul class="style-none connectx-points lg-mt-50">

                        <li>Podcasts & Video Content</li>

                        <li>Creator Lounges & Networking Spaces</li>

                        <li>Meetups & Roundtables</li>

                        <li>Awards & Recognition Platforms</li>

                        <li>Digital Campaigns & Collaborations</li>

                    </ul>

                </div>

            </div>

        </div>

        <img src="images/shape/shape_50.svg"
             alt=""
             class="lazy-img shapes shape_01">

    </div>

</section>


<!-- =========================
SPONSORSHIP CATEGORIES
========================= -->
<section class="sponsor-category-section pt-120 pb-120">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-70">
            <div class="title-style-one">
                <div class="sc-title text-uppercase">
                    Sponsorship Categories
                </div>

                <h2 class="main-title fw-700">
                    Choose a Sponsorship Level Based on <br>
                    Visibility & Collaboration Goals
                </h2>
            </div>
        </div>

        <div class="row gx-4 gy-4">

            <!-- MAIN SPONSOR -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-crown"></i>
                    </div>

                    <h4>Sponsor</h4>

                    <p>
                        Primary brand visibility across major ConnectX initiatives
                    </p>

                    <ul>
                        <li>Naming rights across flagship events</li>
                        <li>Highest logo visibility</li>
                        <li>Premium podcast positioning</li>
                        <li>Opening & closing mentions</li>
                        <li>Creator collaborations</li>
                    </ul>

                </div>
            </div>

            <!-- POWERED BY -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-bolt"></i>
                    </div>

                    <h4>Powered By Sponsor</h4>

                    <p>
                        Secondary headline branding with ecosystem presence
                    </p>

                    <ul>
                        <li>Powered By branding</li>
                        <li>Logo placement</li>
                        <li>Podcast integration</li>
                        <li>Campaign opportunities</li>
                        <li>Creator access</li>
                    </ul>

                </div>
            </div>

            <!-- CO SPONSOR -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>

                    <h4>Co-Sponsor</h4>

                    <p>
                        Supporting partner across shared initiatives
                    </p>

                    <ul>
                        <li>Shared event branding</li>
                        <li>Campaign participation</li>
                        <li>Content visibility</li>
                        <li>Networking access</li>
                        <li>Joint initiatives</li>
                    </ul>

                </div>
            </div>

            <!-- PLATINUM -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-gem"></i>
                    </div>

                    <h4>Platinum Sponsor</h4>

                    <p>
                        High-level presence across multiple formats
                    </p>

                    <ul>
                        <li>High visibility branding</li>
                        <li>Podcast integrations</li>
                        <li>Creator access</li>
                        <li>Networking sessions</li>
                        <li>Meetups & lounges</li>
                    </ul>

                </div>
            </div>

            <!-- GOLD -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-medal"></i>
                    </div>

                    <h4>Gold Sponsor</h4>

                    <p>
                        Strong visibility in selected events
                    </p>

                    <ul>
                        <li>Session branding</li>
                        <li>Campaign presence</li>
                        <li>Meetups</li>
                        <li>Networking access</li>
                        <li>Digital exposure</li>
                    </ul>

                </div>
            </div>

            <!-- SILVER -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-award"></i>
                    </div>

                    <h4>Silver Sponsor</h4>

                    <p>
                        Focused exposure in specific programs
                    </p>

                    <ul>
                        <li>Program branding</li>
                        <li>Campaign participation</li>
                        <li>Target networking</li>
                        <li>Content visibility</li>
                        <li>Niche exposure</li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</section>





<div class="text-feature-five position-relative mt-150 lg-mt-80 pb-50">

    <div class="container">

        <div class="bg-wrapper connectx-cta-bg">

            <div class="row">

                <!-- CONTENT SIDE -->
                <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">

                    <div class="text-wrapper pt-60 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">

                        <div class="title-one">

                            <h2 class="text-dark">
                                Start Building Consistent <br>
                                Brand Visibility Through ConnectX
                            </h2>

                        </div>

                        <p class="text-lg text-dark mt-25 mb-35">

                            Grow alongside creators, content experiences,
                            networking formats and active community engagement.

                        </p>

                        <ul class="style-none connectx-list">

                            <li>Connect with creators</li>

                            <li>Build visibility through content</li>

                            <li>Participate in active engagement formats</li>

                        </ul>

                        <a href="#"
                           class="btn-eleven d-inline-flex align-items-center mt-40">

                            <span class="text">
                                Become a Sponsor Today
                            </span>

                            <div class="icon tran3s rounded-circle d-flex align-items-center">

                                <img src="images/icon/icon_27.svg"
                                     alt=""
                                     class="lazy-img">

                            </div>

                        </a>

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

@endsection