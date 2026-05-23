@extends('layout.app')

@section('content')

<style>

/* =========================================
   PARTNER CONTACT PAGE
========================================= */

.partner-contact-section{
    position: relative;
    padding: 180px 0 100px;
    background: #f8f6f2;
    overflow: hidden;
}

@media (max-width: 991px){
    .partner-contact-section{
        padding: 140px 0 70px;
    }
}

/* LEFT CONTENT */

.partner-content{
    padding-right: 50px;
}

.partner-tag{
    display: inline-block;
    padding: 8px 18px;
    border-radius: 30px;
    background: rgba(118,88,59,0.10);
    color: #76583b;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 18px;
}

.partner-content h1{
    font-size: 50px;
    line-height: 1.15em;
    font-weight: 700;
    color: #000;
    margin-bottom: 22px;
    letter-spacing: -1px;
}

.partner-content p{
    font-size: 16px;
    line-height: 1.9em;
    color: #555;
    margin-bottom: 0;
}

@media (max-width: 991px){

    .partner-content{
        padding-right: 0;
        margin-bottom: 40px;
    }

    .partner-content h1{
        font-size: 38px;
    }
}

@media (max-width: 576px){

    .partner-content h1{
        font-size: 30px;
    }
}

/* FORM BOX */

.partner-form-box{
    background: #fff;
    padding: 40px;
    border-radius: 22px;
    box-shadow: 0 15px 60px rgba(0,0,0,0.08);
    position: relative;
}

@media (max-width: 576px){

    .partner-form-box{
        padding: 25px;
    }
}

/* INPUTS */

.partner-form-box .form-control,
.partner-form-box select{
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
.partner-form-box select:focus{
    border-color: #76583b;
    box-shadow: 0 0 0 3px rgba(118,88,59,0.10);
}

/* BUTTON */

.partner-submit-btn{
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

.partner-submit-btn:hover{
    background: #5e442d;
    color: #fff;
}

/* SHAPE */

.partner-contact-section::before{
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: rgba(118,88,59,0.05);
    top: -180px;
    right: -180px;
}




/* WHO WE WORK WITH */

.connectx-work-card{

    background:#fff;

    padding:45px 35px;

    border-radius:30px;

    margin-bottom:30px;

    height:100%;

    transition:.35s;

    border:1px solid rgba(118,88,59,.12);

    box-shadow:0 10px 30px rgba(0,0,0,.04);
}

.connectx-work-card:hover{

    transform:translateY(-8px);

    box-shadow:0 20px 50px rgba(0,0,0,.08);
}

.connectx-work-card .icon-box{

    width:70px;
    height:70px;

    background:#76583b;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    margin-bottom:25px;
}

.connectx-work-card .icon-box span{

    color:#fff;

    font-size:18px;

    font-weight:700;
}

.connectx-work-card h4{

    margin-bottom:18px;

    font-size:24px;

    font-weight:600;
}

.connectx-work-card p{

    margin:0;

    line-height:1.8em;

    color:#666;
}

@media(max-width:991px){

.connectx-work-card{

padding:35px 25px;

}

.connectx-work-card h4{

font-size:21px;

}

}



/* cards */
/* CARDS */

.connectx-card{

background:#fff;

padding:40px;

border-radius:30px;

height:100%;

box-shadow:0 10px 30px rgba(0,0,0,.04);

transition:.35s;
}

.connectx-card:hover{

transform:translateY(-8px);

}

.icon-box{

width:75px;

height:75px;

background:#76583b;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

margin-bottom:25px;
}

.icon-box i{

color:#fff;

font-size:24px;

}

.connectx-card ul li,
.expand-list li{

position:relative;

padding-left:40px;

margin-bottom:16px;
}

.connectx-card ul li:before,
.expand-list li:before{

content:"✓";

position:absolute;

left:0;

top:2px;

width:24px;

height:24px;

background:#76583b;

color:#fff;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

font-size:11px;
}

/* EXPANSION */

.connectx-expand-points{

padding:0;

margin:0;
}

.connectx-expand-points li{

position:relative;

padding-left:52px;

margin-bottom:18px;

font-size:17px;

line-height:1.8em;

color:#222;
}

.connectx-expand-points li:last-child{

margin-bottom:0;
}

.connectx-expand-points li:before{

content:"✓";

position:absolute;

left:0;

top:2px;

width:32px;

height:32px;

background:#76583b;

color:#fff;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

font-size:12px;

font-weight:700;
}

@media(max-width:991px){

.connectx-expand-points li{

padding-left:48px;

font-size:16px;

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
<section class="connectx-work-section pt-150 lg-pt-80 pb-120 lg-pb-80">

    <div class="container">

        <!-- TITLE -->

        <div class="title-two text-center mb-70">

            <!-- <div class="upper-title-two mb-15">
                WHO WE WORK WITH
            </div> -->

            <h2 class="text-dark">
                               WHO WE WORK WITH

            </h2>

        </div>

        <!-- CARDS -->

        <div class="row gx-4">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6">

                <div class="connectx-work-card">

                    <div class="icon-box">
                        <span>01</span>
                    </div>

                    <h4>Content Platforms</h4>

                    <p>
                        Organizations focused on digital content,
                        publishing, and audience engagement
                        across formats.
                    </p>

                </div>

            </div>

            <!-- CARD 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-work-card">

                    <div class="icon-box">
                        <span>02</span>
                    </div>

                    <h4>Creator Networks</h4>

                    <p>
                        Communities and groups working with
                        creators, influencers and digital
                        storytellers.
                    </p>

                </div>

            </div>

            <!-- CARD 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-work-card">

                    <div class="icon-box">
                        <span>03</span>
                    </div>

                    <h4>Media & Production Teams</h4>

                    <p>
                        Studios and teams involved in podcasts,
                        video production and content creation.
                    </p>

                </div>

            </div>

            <!-- CARD 4 -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-work-card">

                    <div class="icon-box">
                        <span>04</span>
                    </div>

                    <h4>Community Builders</h4>

                    <p>
                        Groups building active communities,
                        engagement systems and networking
                        ecosystems.
                    </p>

                </div>

            </div>

            <!-- CARD 5 -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-work-card">

                    <div class="icon-box">
                        <span>05</span>
                    </div>

                    <h4>Agencies & Growth Teams</h4>

                    <p>
                        Teams focused on campaigns,
                        creator partnerships and
                        brand visibility growth.
                    </p>

                </div>

            </div>

            <!-- CARD 6 -->

            <div class="col-lg-4 col-md-6">

                <div class="connectx-work-card">

                    <div class="icon-box">
                        <span>06</span>
                    </div>

                    <h4>Ecosystem Enablers</h4>

                    <p>
                        Organizations supporting startups,
                        innovation communities and
                        professional networks.
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
                                WHY PARTNER WITH CONNECTX
                            </div>

                            <h2 class="text-dark">

                                Structured Collaboration <br>
                                Built for Long-Term Growth

                            </h2>

                        </div>

                        <p class="text-lg text-dark mt-25 mb-35">

                            ConnectX is designed to enable structured
                            collaboration between partners and creators,
                            ensuring engagement, content integration
                            and long-term ecosystem value.

                        </p>

                        <ul class="style-none connectx-partner-list">

                            <li>Collaboration-first ecosystem approach</li>

                            <li>Content-driven engagement model</li>

                            <li>Cross-industry network access</li>

                            <li>Structured opportunities for co-creation</li>

                            <li>Scalable digital visibility framework</li>

                            <li>Long-term ecosystem alignment</li>

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

              
                <h2 class="main-title fw-700">

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

                <li>
                    Expanding content and engagement formats
                </li>

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

            <img src="images/assets/screen_16.webp"
                 alt=""
                 class="lazy-img">

        </div>

    </div>

</div>
@endsection