

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

/* second section */

        /* SECTION */

        .connectx-about {
            padding: 120px 0;
            background: linear-gradient(135deg,
                    #fffdfb 0%,
                    #fff5ec 100%);
            position: relative;
            overflow: hidden;
        }

        .connectx-about::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: #ffd2b1;
            opacity: .25;
            border-radius: 50%;
            top: -180px;
            right: -120px;
            filter: blur(100px);
        }

        .connectx-about::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: #76583b;
            opacity: .08;
            border-radius: 50%;
            bottom: -150px;
            left: -100px;
            filter: blur(100px);
        }

        .container {
            width: 90%;
            max-width: 1300px;
            margin: auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        /* LEFT */

        .tag {
            display: inline-block;
            padding: 12px 24px;
            background: #52381e;
            color: white;
            border-radius: 50px;
            font-size: 13px;
            letter-spacing: 2px;
            margin-bottom: 28px;
        }

        .title {
            font-size: 42px;
            line-height: 1.2;
            font-weight: 700;
            color: #52381e;
            margin-bottom: 22px;
        }

        .title span {
            color: #76583b;
            position: relative;
        }

        .title span::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 4px;
            background: #ffd2b1;
            border-radius: 20px;
        }

        .desc {
            font-size: 18px;
            line-height: 1.9;
            color: #666;
            margin-bottom: 30px;
            max-width: 620px;
        }

        .sub-title {
            font-size: 20px;
            font-weight: 700;
            color: #52381e;
            margin-bottom: 25px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 45px;
        }

        .feature {
            background: white;
            padding: 20px;
            border-radius: 22px;
            box-shadow:
                0 20px 50px rgba(0, 0, 0, .05);
            color: #52381e;
            font-weight: 500;
        }

        .feature span {
            color: #76583b;
            margin-right: 8px;
        }

        .btn {
            display: inline-block;
            padding: 18px 36px;
            background: #52381e;
            color: white;
            text-decoration: none;
            border-radius: 60px;
            font-weight: 600;
            transition: .3s;
        }

        .btn:hover {
            background: #76583b;
            transform: translateY(-4px);
        }

        /* RIGHT */

        .visual {
            position: relative;
        }

        .main-image {
            height: 650px;
            border-radius: 35px;
            overflow: hidden;
            box-shadow:
                0 35px 80px rgba(82, 56, 30, .18);
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .float-card {
            position: absolute;
            background: white;
            padding: 16px 24px;
            border-radius: 18px;
            box-shadow:
                0 20px 50px rgba(0, 0, 0, .08);
            font-weight: 600;
            color: #52381e;
        }

        .card1 {
            top: 50px;
            left: -30px;
        }

        .card2 {
            right: -20px;
            top: 240px;
        }

        .card3 {
            left: 20px;
            bottom: 40px;
        }

        @media(max-width:991px) {

            .about-grid {
                grid-template-columns: 1fr;
            }

            .title {
                font-size: 34px;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .main-image {
                height: 500px;
            }

            .float-card {
                position: relative;
                left: auto;
                right: auto;
                top: auto;
                bottom: auto;
                margin-top: 15px;
            }

        }

/* third section */


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




/* fourth section */



		 /* sixth section */

        .connectx-work {
            padding: 110px 0;
            background: #f3efe9;
        }

        .container {
            width: 90%;
            max-width: 1280px;
            margin: auto;
        }

        .section-head {
            text-align: center;
            margin-bottom: 70px;
        }

        .main-title {
            font-size: 42px;
            font-weight: 700;
            color: #52381e;
            margin-bottom: 18px;
        }

        .section-head p {
            font-size: 17px;
            color: #666;
            max-width: 650px;
            margin: auto;
            line-height: 1.8;
        }

        .work-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .work-card {
            background: white;
            padding: 35px 28px;
            border-radius: 28px;
            box-shadow:
                0 20px 50px rgba(0, 0, 0, .05);
            transition: .3s;
            text-align: center;
            border-top: 5px solid #76583b;
        }

        .work-card:hover {
            transform: translateY(-8px);
        }

        .icon-box {
            width: 110px;
            height: 110px;
            margin: auto;
            margin-bottom: 28px;
            background: #fff6ef;
            border-radius: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-box img {
            width: 75px;
            height: 75px;
            object-fit: contain;
        }

        .work-card h3 {
            font-size: 24px;
            color: #52381e;
            margin-bottom: 16px;
            line-height: 1.4;
        }

        .work-card p {
            font-size: 15px;
            line-height: 1.9;
            color: #666;
        }

        @media(max-width:1100px) {

            .work-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:768px) {

            .connectx-work {
                padding: 80px 0;
            }

            .main-title {
                font-size: 34px;
            }

            .work-grid {
                grid-template-columns: 1fr;
            }

        }

		/* fifth section */

		
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




<!-- 
=============================================
    Hero Banner
============================================== 
-->



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

<!-- second section about  -->
<section class="connectx-about">

<div class="container">

<div class="about-grid">

<!-- LEFT -->

<div>

<div class="tag">
ABOUT CONNECTX
</div>

<h2 class="title">
About <span>ConnectX</span>
</h2>

<p class="desc">
Young Chanakya ConnectX is a digital-first creator ecosystem designed to bring influencers, content creators, public voices, and storytellers into one global network.
</p>

<h3 class="sub-title">
ConnectX creates opportunities for creators to:
</h3>

<div class="features">

<div class="feature">
<span>✔</span>
Collaborate
</div>

<div class="feature">
<span>✔</span>
Build Visibility
</div>

<div class="feature">
<span>✔</span>
Speak on podcasts
</div>

<div class="feature">
<span>✔</span>
Attend exclusive events
</div>

<div class="feature">
<span>✔</span>
Share stories in front of audience & camera
</div>

<div class="feature">
<span>✔</span>
Access creator lounges & networking rooms
</div>

</div>

<a href="#" class="btn">
Join ConnectX
</a>

</div>

<!-- RIGHT -->

<div class="visual">

<div class="main-image">

<img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1200"
alt="connectx">

</div>

<div class="float-card card1">
🎙 Podcast Sessions
</div>

<div class="float-card card2">
🤝 Creator Networking
</div>

<div class="float-card card3">
🌍 Global Community
</div>

</div>

</div>

</div>

</section>



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


<!-- fourth section -->


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





	  <!-- fifth section -->
	   

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



<!-- sixth section  -->



    <section class="connectx-work">

        <div class="container">

            <div class="section-head">

                <h2 class="main-title">
                    How ConnectX Works
                </h2>

                <!-- <p>
A creator journey built for visibility, collaboration,
networking and growth.
</p> -->

            </div>

            <div class="work-grid">

                <!-- CARD 1 -->

                <div class="work-card">

                    <div class="icon-box">
                        <img src="images/ils_09.svg" alt="">
                    </div>

                    <h3>Create Your Profile</h3>

                    <p>
                        Build your creator identity and showcase your content,
                        voice, category, and digital presence within the
                        ConnectX ecosystem.
                    </p>

                </div>

                <!-- CARD 2 -->

                <div class="work-card">

                    <div class="icon-box">
                        <img src="images/ils_09.svg" alt="">
                    </div>

                    <h3>Access Creator Spaces</h3>

                    <p>
                        Enter ConnectX Lounges, networking rooms,
                        podcasts, roundtables and creator-first experiences
                        designed for engagement.
                    </p>

                </div>

                <!-- CARD 3 -->

                <div class="work-card">

                    <div class="icon-box">
                        <img src="images/ils_09.svg" alt="">
                    </div>

                    <h3>Connect & Collaborate</h3>

                    <p>
                        Network with influencers, creators,
                        communities, brands and public voices across
                        industries and countries.
                    </p>

                </div>

                <!-- CARD 4 -->

                <div class="work-card">

                    <div class="icon-box">
                        <img src="images/ils_09.svg" alt="">
                    </div>

                    <h3>Grow Your Influence</h3>

                    <p>
                        Increase visibility through collaborations,
                        events, podcasts, creator opportunities and
                        ecosystem exposure.
                    </p>

                </div>

            </div>

        </div>

    </section>



	<!-- last section -->

	



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