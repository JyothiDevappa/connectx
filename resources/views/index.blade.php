@extends('layout.app')

@section('content')

<style>

/* =========================
   HERO SECTION
========================= */

.hero-banner-one{
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;

    /* pushes content below navbar */
    padding: 160px 0 100px;

    background: #000;
}

/* =========================
   BACKGROUND IMAGE
========================= */
.hero-banner-one .hero-bg {
    position: absolute;
    inset: 0;

    background:
    linear-gradient(
        rgba(0,0,0,0.45),
        rgba(0,0,0,0.45)
    ),
    url('{{ asset("images/media/img_05.jpg") }}');

    /* This ensures the image fills the area */
    background-size: cover !important;

    /* CHANGE THIS: 'top' anchors the image to the top edge */
    background-position: top center;

    background-repeat: no-repeat;
    z-index: 1;
}

/* =========================
   CONTENT
========================= */

.hero-content{
    position: relative;
    z-index: 2;

    /* moves text slightly down */
    margin-top: 40px;
}

.hero-title{
    font-size: 72px;
    line-height: 1.08em;
    font-weight: 800;
    color: #fff;

    margin-bottom: 28px;

    letter-spacing: -2px;
    max-width: 850px;
}

.hero-text{
    font-size: 20px;
    line-height: 1.9em;
    color: rgba(255,255,255,0.88);

    max-width: 760px;

    margin-bottom: 45px;

    font-weight: 400;
}

/* =========================
   BUTTONS
========================= */

.hero-btn-group{
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.theme-btn-one{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    background: #fff;
    color: #000;

    padding: 18px 40px;
    border-radius: 60px;

    font-size: 16px;
    font-weight: 700;
    text-decoration: none;

    transition: all 0.3s ease;
}

.theme-btn-one:hover{
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.theme-btn-two{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    border: 2px solid #fff;
    color: #fff;

    padding: 18px 40px;
    border-radius: 60px;

    font-size: 16px;
    font-weight: 700;
    text-decoration: none;

    transition: all 0.3s ease;
}

.theme-btn-two:hover{
    background: #fff;
    color: #000;
}

/* =========================
   TABLET
========================= */

@media (max-width: 991px){

    .hero-banner-one{
        min-height: auto;
        padding: 150px 0 90px;
    }

    .hero-content{
        margin-top: 20px;
    }

    .hero-title{
        font-size: 54px;
        line-height: 1.15em;
    }

    .hero-text{
        font-size: 18px;
        line-height: 1.8em;
    }
}

/* =========================
   MOBILE
========================= */

@media (max-width: 767px){

    .hero-banner-one{
        padding: 130px 0 80px;
    }

    .hero-content{
        margin-top: 10px;
    }

    .hero-title{
        font-size: 40px;
        line-height: 1.2em;
        letter-spacing: -1px;
    }

    .hero-text{
        font-size: 16px;
        line-height: 1.8em;
        margin-bottom: 35px;
    }

    .hero-btn-group{
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .theme-btn-one,
    .theme-btn-two{
        width: 100%;
        justify-content: center;
        padding: 16px 24px;
    }
}


.growth-points{
    display: flex;
    flex-direction: column;
    gap: 22px;
    margin-top: 35px;
}

.growth-item{
    position: relative;
    padding-left: 48px;
}

.growth-item span{
    position: absolute;
    left: 0;
    top: 4px;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: #ffd2b1; /* your bg color */
}

/* TICK */
.growth-item span::before{
    content: "\f00c";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    color: #76583b; /* white tick */
    font-size: 11px;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.growth-item p{
    margin: 0;
    font-size: 20px;
    line-height: 1.7;
    font-weight: 500;
    color: #111;
}

/* GLOBAL SECTION HEADING STYLE */
.section-heading-main {
    font-family: 'Satoshi', sans-serif !important;
    font-size: 48px !important;
    font-weight: 700 !important;
    text-transform: lowercase !important;
}

.section-heading-main::first-letter {
    text-transform: uppercase;
}

/* ADD SPACE BEFORE FOOTER */

.text-feature-one{
    padding-bottom: 120px;
}

/* Mobile */
@media (max-width: 991px){
    .text-feature-one{
        padding-bottom: 80px;
    }
}

/* 1. Make the card a container and round the corners */
.card-custom {
    position: relative;
    border-radius: 24px; 
    overflow: hidden;    
    width: 100%;
    display: block;
}

/* 2. Fix the Image Wrapper */
.card-img-wrapper {
    position: relative;
    width: 100%;
    line-height: 0; /* Removes tiny gap at bottom of image */
}

.card-img-wrapper img {
    width: 100%;
    height: auto;
    display: block;
}

/* 3. Your Overlay: Moving it INSIDE the card */
.card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60%; /* Covers the bottom half for readability */
    background: linear-gradient(to top, 
        rgba(0, 0, 0, 0.9) 0%, 
        rgba(0, 0, 0, 0.5) 40%, 
        transparent 100%);
    z-index: 1;
}

/* 4. Moving the Text INSIDE the card at the bottom */
.card-text1 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px 10px; /* Space from the bottom edge */
    z-index: 2; /* Sits on top of the overlay */
    text-align: center;
}

.card-text1 p {
    color: #ffffff !important; /* Forces text to be white */
    font-weight: 600;
    font-size: 16px;
    margin: 0;
}

/* card section */
.connectx-cta-card{
    background: #fff;
    border: 1px solid #dfe7e2;
    border-radius: 28px;
    padding: 55px 50px;
    min-height: 100%;
    transition: 0.3s ease;
}

.connectx-cta-card:hover{
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.05);
}

.connectx-cta-card h3{
    font-size: 38px;
    line-height: 1.2em;
    font-weight: 700;
    margin: 12px 0 22px;
    color: #000;
}

.connectx-cta-card p{
    font-size: 17px;
    line-height: 1.9em;
    color: #555;
    margin-bottom: 35px;
    max-width: 95%;
}

.connectx-cta-card .small-text{
    font-size: 17px;
    font-weight: 500;
    color: #76583b;
}

/* BUTTON */

.connectx-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #76583b;
    color: #fff !important;
    height: 62px;
    padding: 0 34px;
    border-radius: 16px;
    font-size: 16px;
    font-weight: 600;
    transition: 0.3s ease;
    text-decoration: none;
}

.connectx-btn:hover{
    background: #5e442c;
    color: #fff !important;
    transform: translateY(-2px);
}

/* SHAPES */

.shape-circle{
    position: absolute;
    border-radius: 50%;
    background: #f2e8db;
}

.top-circle{
    width: 170px;
    height: 170px;
    top: -70px;
    right: -30px;
}

.bottom-circle{
    width: 240px;
    height: 240px;
    bottom: -140px;
    left: 18%;
}

/* RESPONSIVE */

@media (max-width: 991px){

    .connectx-cta-card{
        padding: 40px 30px;
    }

    .connectx-cta-card h3{
        font-size: 30px;
    }
}

@media (max-width: 576px){

    .connectx-cta-card{
        padding: 35px 25px;
    }

    .connectx-cta-card h3{
        font-size: 26px;
    }

    .connectx-btn{
        width: 100%;
    }
}

</style>


<!-- HERO SECTION START -->
<section class="hero-banner-one">

    <!-- Background -->
    <div class="hero-bg"></div>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 col-md-11">

                <div class="hero-content">

                    <h1 class="hero-title">
                        Partner With the Future of Influence
                    </h1>

                    <p class="hero-text">
                        Young Chanakya ConnectX collaborates with brands, media platforms, startups, studios, communities, and ecosystem partners to build one of the world’s fastest-growing creator and influencer networks.
                    </p>

                    <div class="hero-btn-group">

                        <a href="#" class="theme-btn-one">
                            Collaborate With ConnectX
                        </a>

                        <a href="#" class="theme-btn-two">
                            Become a Partner
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
<!-- HERO SECTION END -->



<!-- SECOND SECTION -->

<div class="text-feature-one position-relative" style="background-color: #f8f0e6; padding: 60px 0; margin-top: 0;">
    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 wow fadeInLeft">

                <div class="title-one">
                    <div class="upper-title">About ConnectX</div>
                    <h2 class="section-heading-main">Young chanakya connectx</h2>
                </div>

                <p class="text-lg mt-40 lg-mt-30 mb-35">
                    Young Chanakya ConnectX is a digital-first creator ecosystem designed to bring influencers, content creators, public voices, and storytellers into one global network.
                </p>

                <div class="growth-points">

                    <div class="growth-item">
                        <span></span>
                        <p>Collaborate</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Build visibility</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Speak on podcasts</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Attend exclusive events</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Share stories in front of audience & camera</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Access creator lounges & networking rooms</p>
                    </div>

                </div>

                <a href="#" class="btn-four mt-40">
                    Join Connectx
                </a>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-5 ms-auto wow fadeInRight">

                <div class="media-wrapper position-relative">

                    <img src="{{ asset('images/media/img_01.jpg') }}"
                         alt=""
                         class="w-100 border-radius-20">

                </div>

            </div>

        </div>

    </div>
</div>





<!-- third section -->


<section class="section mt-50 mb-50">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 text-center">
                <h2 class="color-brand-1 mb-20 wow animate__ animate__fadeIn animated section-heading-main"
                    data-wow-delay=".0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                    Who can partner with us
                </h2>

                <p class="font-lg color-gray-500 wow animate__ animate__fadeIn animated"
                    data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    Built for Modern Ecosystem Collaborations
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-4 mt-50">

            <!-- Card 1 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Business & Startup Voices</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Lifestyle & Wellness</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Sports & Adventure</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Digital Media Creators</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>News & Commentary</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Motivation & Storytelling</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Tech & Innovation</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col mb-4">
                <div class="card-custom wow animate__ animate__fadeInUp animated"
                    data-wow-delay="0.7s"
                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/media/chess.png') }}" alt="ConnectX" class="img-fluid">

                        <div class="card-overlay"></div>

                        <div class="card-text1">
                            <p>Regional & Cultural Creators</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>









<div class="block-feature-one position-relative light-bg-deep mt-100 lg-mt-60 pt-120 lg-pt-60 pb-130 lg-pb-60">
    <div class="container">

        <div class="position-relative">

            <div class="title-one text-center mb-40 lg-mb-10">
                <div class="upper-title" style="color:#76583b;">
                    ConnectX Experiences
                </div>

                <h2 class="section-heading-main">
                    Experiences that create influence
                </h2>
            </div>

            <div class="row justify-content-center">

                <!-- PODCASTS -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp">

                    <div class="card-style-two vstack tran3s w-100 mt-30">

                        <i class="fas fa-podcast fa-3x mb-25"
                           style="color:#76583b;"></i>

                        <h4 class="fw-bold mb-20">
                            Podcasts
                        </h4>

                        <p class="mb-0">
                            Share your journey, insights, and opinions.
                        </p>

                    </div>

                </div>

                <!-- NETWORKING -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                     data-wow-delay="0.1s">

                    <div class="card-style-two vstack tran3s w-100 mt-30">

                        <i class="fas fa-users fa-3x mb-25"
                           style="color:#76583b;"></i>

                        <h4 class="fw-bold mb-20">
                            Networking
                        </h4>

                        <p class="mb-0">
                            Meet creators, founders, and industry voices globally.
                        </p>

                    </div>

                </div>

                <!-- AWARDS -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                     data-wow-delay="0.2s">

                    <div class="card-style-two vstack tran3s w-100 mt-30">

                        <i class="fas fa-award fa-3x mb-25"
                           style="color:#76583b;"></i>

                        <h4 class="fw-bold mb-20">
                            Awards
                        </h4>

                        <p class="mb-0">
                            Recognition for impact, creativity, and influence.
                        </p>

                    </div>

                </div>

                <!-- ROUNDTABLES -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp">

                    <div class="card-style-two vstack tran3s w-100 mt-30">

                        <i class="fas fa-microphone fa-3x mb-25"
                           style="color:#76583b;"></i>

                        <h4 class="fw-bold mb-20">
                            Roundtables
                        </h4>

                        <p class="mb-0">
                            Focused discussions with creators and thought leaders.
                        </p>

                    </div>

                </div>

                <!-- MEETUPS -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                     data-wow-delay="0.1s">

                    <div class="card-style-two vstack tran3s w-100 mt-30">

                        <i class="fas fa-globe fa-3x mb-25"
                           style="color:#76583b;"></i>

                        <h4 class="fw-bold mb-20">
                            Meetups
                        </h4>

                        <p class="mb-0">
                            City-based and global creator gatherings.
                        </p>

                    </div>

                </div>

                <!-- CREATOR LOUNGES -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                     data-wow-delay="0.2s">

                    <div class="card-style-two vstack tran3s w-100 mt-30">

                        <i class="fas fa-camera fa-3x mb-25"
                           style="color:#76583b;"></i>

                        <h4 class="fw-bold mb-20">
                            Creator Lounges
                        </h4>

                        <p class="mb-0">
                            Speak directly in front of audience & camera.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <img src="{{ asset('images/shape/shape_05.svg') }}"
         alt=""
         class="lazy-img shapes shape_01">

    <img src="{{ asset('images/shape/shape_05.svg') }}"
         alt=""
         class="lazy-img shapes shape_02">

</div>

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>



      



<section class="connectx-cta-section position-relative pt-100 pb-100 lg-pt-80 lg-pb-80">
    <div class="container">

        <div class="row">

            <!-- PARTNER -->
            <div class="col-lg-6 d-flex wow fadeInUp">

                <div class="connectx-cta-card w-100 position-relative overflow-hidden">

                    <!-- Shapes -->
                    <div class="shape-circle top-circle"></div>
                    <div class="shape-circle bottom-circle"></div>

                    <div class="position-relative z-1">

                        <span class="small-text">
                            Collaborate. Connect. Grow.
                        </span>

                        <h3>
                            Become a Partner
                        </h3>

                        <p>
                            Join hands with ConnectX to build impactful networks,
                            share expertise, and shape the next generation of creators.
                        </p>

                        <a href="#"
                           class="connectx-btn">

                            Partner With Us

                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- SPONSOR -->
            <div class="col-lg-6 d-flex wow fadeInUp"
                 data-wow-delay="0.1s">

                <div class="connectx-cta-card w-100 position-relative overflow-hidden">

                    <!-- Shapes -->
                    <div class="shape-circle top-circle"></div>
                    <div class="shape-circle bottom-circle"></div>

                    <div class="position-relative z-1">

                        <span class="small-text">
                            Support. Empower. Lead.
                        </span>

                        <h3>
                            Become a Sponsor
                        </h3>

                        <p>
                            Align your brand with a premium creator ecosystem,
                            gain visibility, and support transformative experiences.
                        </p>

                        <a href="#"
                           class="connectx-btn">

                            Join as Sponsor

                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>









<!-- fourth section -->

<!-- create section -->

<div class="block-feature-fifteen mt-90" style="background-color: #f8f0e6;">
    <div class="container py-5">
        <div class="position-relative">

            <!-- TITLE -->
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="title-two text-center mb-30 sm-mb-10">
                        <div class="upper-title-two mb-10">
                            <!-- HOW CONNECTX WORKS -->
                        </div>

                        <h2 class="text-dark section-heading-main">
How connectx works</h2>
                    </div>
                </div>
            </div>

            <!-- STEPS -->
            <div class="row justify-content-center">

                <!-- STEP 1 -->
                <div class="col-lg-3 col-md-6 d-flex wow fadeInUp">
                    <div class="card-style-twentyOne mt-40 w-100">

                        <div class="icon rounded-circle m-auto position-relative d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/assets/ils_08.svg') }}" alt="">

                            <span class="numb position-absolute d-flex align-items-center justify-content-center rounded-circle">
                                01
                            </span>

                        </div>

                        <p class="text-center text-lg mt-50 px-3">
                            Build your creator identity and showcase your content,
                            voice, category, and digital presence within the
                            ConnectX ecosystem.
                        </p>

                        <h5 class="text-center mt-3">
                            Create Your Profile
                        </h5>

                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="col-lg-3 col-md-6 d-flex wow fadeInUp"
                    data-wow-delay="0.1s">

                    <div class="card-style-twentyOne mt-40 w-100">

                        <div class="icon rounded-circle m-auto position-relative d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/assets/ils_09.svg') }}" alt="">

                            <span class="numb position-absolute d-flex align-items-center justify-content-center rounded-circle">
                                02
                            </span>

                        </div>

                        <p class="text-center text-lg mt-50 px-3">
                            Enter ConnectX Lounges, networking rooms,
                            podcasts, roundtables, and creator experiences
                            designed for visibility.
                        </p>

                        <h5 class="text-center mt-3">
                            Access Creator Spaces
                        </h5>

                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="col-lg-3 col-md-6 d-flex wow fadeInUp"
                    data-wow-delay="0.2s">

                    <div class="card-style-twentyOne mt-40 w-100">

                        <div class="icon rounded-circle m-auto position-relative d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/assets/ils_10.svg') }}" alt="">

                            <span class="numb position-absolute d-flex align-items-center justify-content-center rounded-circle">
                                03
                            </span>

                        </div>

                        <p class="text-center text-lg mt-50 px-3">
                            Network with influencers, creators,
                            communities, brands, and public voices
                            across industries and countries.
                        </p>

                        <h5 class="text-center mt-3">
                            Connect & Collaborate
                        </h5>

                    </div>
                </div>

                <!-- STEP 4 -->
                <div class="col-lg-3 col-md-6 d-flex wow fadeInUp"
                    data-wow-delay="0.3s">

                    <div class="card-style-twentyOne mt-40 w-100">

                        <div class="icon rounded-circle m-auto position-relative d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/assets/ils_11.svg') }}" alt="">

                            <span class="numb position-absolute d-flex align-items-center justify-content-center rounded-circle">
                                04
                            </span>

                        </div>

                        <p class="text-center text-lg mt-50 px-3">
                            Increase visibility through collaborations,
                            events, podcasts, creator opportunities,
                            and ecosystem-driven exposure.
                        </p>

                        <h5 class="text-center mt-3">
                            Grow Your Influence
                        </h5>

                    </div>
                </div>

            </div>

            <!-- BUTTON -->
            <div class="text-center mt-60 position-relative line-btn">
                <a href="#" class="btn-twenty">
                    Join ConnectX
                </a>
            </div>

            <img src="{{ asset('images/shape/shape_05.svg') }}"
                alt=""
                class="shapes shape_01">

        </div>
    </div>
</div>






<div class="blog-section-two position-relative mt-150 lg-mt-80 mb-150 lg-mb-80">
    <div class="container">

        <div class="position-relative">

            <div class="row gx-xxl-5">

                <!-- ITEM -->
                <div class="col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">

                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                style="background-image: url('{{ asset('images/blog/blog_img_03.jpg') }}');">

                            <a href="#"
                               class="stretched-link rounded-5 date tran3s">
                                09 FEB
                            </a>

                        </figure>

                        <div class="post-data">

                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <a href="#"
                                   class="blog-title">

                                    <h4>
                                        Spending Habits, 13 Tips for grow Your Money.
                                    </h4>

                                </a>

                                <a href="#"
                                   class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>
                </div>


                <!-- ITEM -->
                <div class="col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp"
                             data-wow-delay="0.1s">

                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                style="background-image: url('{{ asset('images/blog/blog_img_04.jpg') }}');">

                            <a href="#"
                               class="stretched-link rounded-5 date tran3s">
                                12 AUG
                            </a>

                        </figure>

                        <div class="post-data">

                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <a href="#"
                                   class="blog-title">

                                    <h4>
                                        Our Travel Card Makes you Happy.
                                    </h4>

                                </a>

                                <a href="#"
                                   class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>
                </div>


                <!-- ITEM -->
                <div class="col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">

                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                style="background-image: url('{{ asset('images/blog/blog_img_12.jpg') }}');">

                            <a href="#"
                               class="stretched-link rounded-5 date tran3s">
                                09 FEB
                            </a>

                        </figure>

                        <div class="post-data">

                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <a href="#"
                                   class="blog-title">

                                    <h4>
                                        It’s easy to buildup your business with us
                                    </h4>

                                </a>

                                <a href="#"
                                   class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>
                </div>


                <!-- ITEM -->
                <div class="col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp"
                             data-wow-delay="0.1s">

                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                style="background-image: url('{{ asset('images/blog/blog_img_13.jpg') }}');">

                            <a href="#"
                               class="stretched-link rounded-5 date tran3s">
                                12 AUG
                            </a>

                        </figure>

                        <div class="post-data">

                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <a href="#"
                                   class="blog-title">

                                    <h4>
                                        Manage your online banking & get rewarded
                                    </h4>

                                </a>

                                <a href="#"
                                   class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>
                </div>


                <!-- ITEM -->
                <div class="col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">

                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                style="background-image: url('{{ asset('images/blog/blog_img_14.jpg') }}');">

                            <a href="#"
                               class="stretched-link rounded-5 date tran3s">
                                09 FEB
                            </a>

                        </figure>

                        <div class="post-data">

                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <a href="#"
                                   class="blog-title">

                                    <h4>
                                        Discover smarter ways to scale your brand
                                    </h4>

                                </a>

                                <a href="#"
                                   class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>
                </div>


                <!-- ITEM -->
                <div class="col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp"
                             data-wow-delay="0.1s">

                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                style="background-image: url('{{ asset('images/blog/blog_img_15.jpg') }}');">

                            <a href="#"
                               class="stretched-link rounded-5 date tran3s">
                                12 AUG
                            </a>

                        </figure>

                        <div class="post-data">

                            <div class="d-flex justify-content-between align-items-center flex-wrap">

                                <a href="#"
                                   class="blog-title">

                                    <h4>
                                        Creative networking events for future leaders
                                    </h4>

                                </a>

                                <a href="#"
                                   class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>
                </div>

            </div>


            <!-- PAGINATION -->
            <div class="pagination-one mt-20">

                <ul class="style-none d-flex align-items-center justify-content-center">

                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>...</li>

                    <li>
                        <a href="#">
                            Last <i class="bi bi-arrow-right"></i>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>
</div>



@endsection