@extends('layout.app')

@section('content')

<style>

/*=====================================================
    HERO SECTION
=====================================================*/
.hero-banner-six .list-item li {
    position: relative;
    padding-left: 48px;
    margin-bottom: 20px;
    font-size: 15px;
    font-weight: 500;
    line-height: 1.6em;
    color: #000;
}

.hero-banner-six .list-item li:before {
    content: "\F26E";
    font-family: "bootstrap-icons";
    position: absolute;
    left: 0;
    top: 6px;
    width: 28px;
    height: 28px;
    line-height: 28px;
    border-radius: 50%;
    text-align: center;
    background: #F5F1E8;
    color: #000;
    font-size: 14px;
    font-weight: 700;
}

.connectx-list-title {
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #000;
}

/*=====================================================
    FOUNDER SECTION
=====================================================*/
.founder-text{
    font-size: 15px !important;
    line-height: 1.7em !important;
    color: #ffffff !important;
}

.founder-label{
    letter-spacing: 2px;
    color:#12372A;
    font-size:14px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 20px;
    display: inline-block;
}

/*=====================================================
    VISION & MISSION SECTION
=====================================================*/
.text-feature-one .list-item li{
    position: relative;
    padding-left: 42px;
    margin-bottom: 18px;
    font-size: 17px;
    font-weight: 500;
    line-height: 1.7em;
    color: #000;
}

.text-feature-one .list-item li:before{
    content: "\F26E";
    font-family: "bootstrap-icons";
    position: absolute;
    left: 0;
    top: 3px;
    width: 26px;
    height: 26px;
    line-height: 26px;
    border-radius: 50%;
    text-align: center;
    background: #F5F1E8;
    color: #000;
    font-size: 13px;
}

.text-feature-one .media-wrapper img{
    border-radius: 30px;
}

/*=====================================================
    MOBILE
=====================================================*/
@media (max-width: 991px) {

    .hero-banner-six .list-item li {
        font-size: 16px;
        padding-left: 42px;
    }

    .hero-banner-six .list-item li:before {
        width: 24px;
        height: 24px;
        line-height: 24px;
        font-size: 12px;
    }

    .connectx-list-title {
        font-size: 24px;
    }

    .text-feature-one .media-wrapper{
        margin-top: 60px;
    }

    .text-feature-one .list-item li{
        font-size: 16px;
    }
}

</style>


<!-- 
=============================================
    HERO SECTION
============================================== 
-->
<div class="hero-banner-six pt-170 md-pt-110 position-relative">

    <div class="container position-relative">

        <div class="row align-items-center justify-content-between">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 col-md-6 wow fadeInLeft">

                <div class="pt-20 pb-50">

                    <h1 class="hero-heading fw-bold">
                        The Vision Behind ConnectX
                    </h1>

                    <p class="text-lg pt-35 lg-pt-30 pb-35 lg-pb-20">
                        Young Chanakya ConnectX is a global digital ecosystem built to connect creators, influencers, speakers, podcasters, storytellers, and modern public voices.
                    </p>

                    <h4 class="connectx-list-title">
                        ConnectX creates:
                    </h4>

                    <ul class="style-none list-item pb-20">

                        <li>Digital visibility</li>

                        <li>Creator collaboration</li>

                        <li>Premium networking</li>

                        <li>Real-world opportunities</li>

                        <li>Global creator ecosystems</li>

                    </ul>

                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-6 d-md-flex justify-content-end wow fadeInRight">

                <div class="media-wrapper position-relative ms-lg-5">

                    <img src="{{ asset('images/assets/screen_22.svg') }}"
                        alt=""
                        class="lazy-img shapes screen_01">

                    <img src="{{ asset('images/assets/screen_23.png') }}"
                        alt=""
                        class="lazy-img shapes screen_02">

                    <img src="{{ asset('images/shape/shape_43.svg') }}"
                        alt=""
                        class="lazy-img shapes bg-shape">

                </div>

            </div>

        </div>

    </div>

</div>



<!-- 
=============================================
    FOUNDER STATEMENT SECTION
============================================== 
-->
<div class="feedback-section-eight position-relative z-1 mt-120 lg-mt-80 pt-120 lg-pt-80 pb-120 lg-pb-80">

    <div class="container">

        <div class="position-relative z-1 wrapper">

            <div class="feedback-block-eight">

                <div class="row align-items-center">

                    <!-- LEFT IMAGE -->
                    <div class="col-xl-5 col-lg-6">

                        <img src="{{ asset('images/media/founder.png') }}"
                            alt=""
                            class="media-img m-auto md-mb-40">

                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-6 ms-auto">

                        <!-- <div class="icon d-flex align-items-center justify-content-center rounded-circle">

                            <img src="{{ asset('images/icon/icon_114.svg') }}"
                                alt="">

                        </div> -->

                        <span class="founder-label">
                            Founder Statement
                        </span>

                        <blockquote style="line-height:1.5em;">

                            Meet the Founder of ConnectX


                        </blockquote>

                        <p class="founder-text pt-20 mb-0">

                            ConnectX is built to bring creators together in a structured ecosystem where they can connect, collaborate, and be seen.

                            <br><br>

                            Our focus is simple — create spaces for real conversations, enable meaningful collaborations, and help creators grow their influence through content and community.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>












<!-- 
=============================================
    Vision & Mission Section
============================================== 
-->
<div class="block-feature-two mt-80">

    <div class="container">

        <div class="wrapper">

            <div class="row align-items-stretch">

                <!-- MISSION -->
                <div class="col-lg-6 col-md-6">

                    <div class="card-style-three connectx-card pt-45 md-pt-30 pb-35 sm-pb-30 h-100">

                        <img src="{{ asset('images/icon/icon_10.svg') }}"
                            alt=""
                            class="lazy-img connectx-icon">

                        <h4 class="fw-bold mt-30 mb-25">
                            Our Mission
                        </h4>

                        <p class="mb-30">

                            To create a platform where creators can consistently access opportunities to speak, collaborate, and grow their influence through structured digital experiences.

                        </p>

                        <ul class="style-none connectx-tick-list">

                            <li>Enable creator-to-creator networking</li>

                            <li>Provide stages through podcasts, lounges, and events</li>

                            <li>Create visibility through content and collaborations</li>

                            <li>Connect communities, brands, and creators</li>

                        </ul>

                    </div>

                </div>


                <!-- VISION -->
                <div class="col-lg-6 col-md-6">

                    <div class="card-style-three connectx-card pt-45 md-pt-30 pb-35 sm-pb-30 h-100">

                        <img src="{{ asset('images/icon/icon_10.svg') }}"
                            alt=""
                            class="lazy-img connectx-icon">

                        <h4 class="fw-bold mt-30 mb-25">
                            Our Vision
                        </h4>

                        <p class="mb-30">

                            To build one of the world’s largest digital creator and influencer ecosystems, connecting voices across countries and industries, where influence is structured, scalable, and collaborative.

                        </p>

                        <ul class="style-none connectx-tick-list">

                            <li>Global creator connectivity</li>

                            <li>Collaboration across global ecosystems</li>

                            <li>Cross-industry influence network</li>

                            <li>Content-led ecosystem growth</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<style>

.block-feature-two{
    padding-bottom: 120px;
}

.block-feature-two .wrapper{
    border: 1px solid #E5E5E5;
    border-radius: 25px;
    overflow: hidden;
    background: #fff;
}

.block-feature-two .row > div:first-child{
    border-right: 1px solid #E5E5E5;
}

/* CARD */
.connectx-card{
    padding-left: 55px;
    padding-right: 55px;
}

/* ICON */
.connectx-icon{
    width: 60px;
    height: 60px;
    object-fit: contain;
}

/* TITLE */
.connectx-card h4{
    font-size: 36px;
    color: #12372A;
}

/* PARAGRAPH */
.connectx-card p{
    font-size: 17px;
    line-height: 1.9em;
    color: #555;
}

/* TICK LIST */
.connectx-tick-list li{
    position: relative;
    padding-left: 42px;
    margin-bottom: 18px;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.7em;
    color: #000;
}

.connectx-tick-list li:before{
    content: "\F26E";
    font-family: "bootstrap-icons";
    position: absolute;
    left: 0;
    top: 3px;
    width: 26px;
    height: 26px;
    line-height: 26px;
    border-radius: 50%;
    text-align: center;
    background: #F5F1E8;
    color: #000;
    font-size: 13px;
    font-weight: 700;
}

/* MOBILE */
@media (max-width: 991px){

    .block-feature-two .row > div:first-child{
        border-right: none;
        border-bottom: 1px solid #E5E5E5;
    }

    .connectx-card{
        padding-left: 30px;
        padding-right: 30px;
    }

    .connectx-card h4{
        font-size: 28px;
    }

    .connectx-tick-list{
        margin-bottom: 30px;
    }
}

</style>








<!-- 
=============================================
    Core Values Section
============================================== 
-->
<div class="block-feature-ten position-relative mt-150 lg-mt-80 pb-100 lg-pb-60">

    <div class="container">

        <!-- TITLE -->
        <div class="row align-items-center">

            <div class="col-lg-8 wow fadeInUp">

                <div class="title-one mb-50 lg-mb-20">

                    <div class="upper-title">
                        ConnectX
                    </div>

                    <h2>
                        Our Core Values
                    </h2>

                </div>

            </div>

        </div>


        <!-- VALUES -->
        <div class="line-wrapper position-relative">

            <div class="row gx-lg-5">

                <!-- VALUE 1 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/icon/icon_10.svg') }}"
                                alt=""
                                class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Access Over Exclusivity
                            </h4>

                            <p class="m0">
                                We create access to meaningful opportunities, networks, and platforms.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 2 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/icon/icon_10.svg') }}"
                                alt=""
                                class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Content First
                            </h4>

                            <p class="m0">
                                Every interaction, event, and collaboration is designed to generate content and visibility.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 3 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/icon/icon_10.svg') }}"
                                alt=""
                                class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Collaboration Over Competition
                            </h4>

                            <p class="m0">
                                Growth happens faster when creators work together.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 4 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10 pt-25 lg-pt-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/icon/icon_10.svg') }}"
                                alt=""
                                class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Real Conversations
                            </h4>

                            <p class="m0">
                                We value authentic discussions over scripted narratives.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 5 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10 pt-25 lg-pt-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/icon/icon_10.svg') }}"
                                alt=""
                                class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Global Mindset
                            </h4>

                            <p class="m0">
                                ConnectX is built without geographic limitations.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 6 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10 pt-25 lg-pt-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="{{ asset('images/icon/icon_10.svg') }}"
                                alt=""
                                class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Consistent Growth
                            </h4>

                            <p class="m0">
                                Opportunities are not one-time — they are continuous.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>





<style>

.card-style-sixteen .icon{
    background: #F5F1E8;
}

.card-style-sixteen .icon img{
    width: 32px;
}

.card-style-sixteen .text p{
    font-size: 16px;
    line-height: 1.8em;
}

/* CTA */
.fancy-banner-five{
    background: #12372A;
    border-radius: 35px;
    overflow: hidden;
    margin-left: 20px;
    margin-right: 20px;
}

@media (max-width: 991px){

    .fancy-banner-five{
        margin-left: 12px;
        margin-right: 12px;
        border-radius: 25px;
    }


}

</style>














<div class="text-feature-five position-relative mt-150 lg-mt-80 pb-50">
    <div class="container">
        <div class="bg-wrapper">
            <div class="row">

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">

                    <div class="text-wrapper pt-50 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">

                        <div class="title-one">
                            <h2 class="text-dark">
                                Your Voice Deserves a Bigger Stage
                            </h2>
                        </div>

                        <p class="text-lg text-dark mt-25 mb-35 lg-mb-30">
                            If you are a creator, influencer, speaker, or community builder looking to connect, collaborate, and grow your influence, ConnectX is built for you.
                        </p>

                        <ul class="style-none list-item">
                            <li>Join the ecosystem</li>
                            <li>Access creator lounges</li>
                            <li>Speak, collaborate, and create</li>
                            <li>Build your presence beyond platforms</li>
                        </ul>

                        <a href="#" class="btn-eleven d-inline-flex align-items-center mt-40">
                            <span class="text">Join ConnectX</span>

                            <div class="icon tran3s rounded-circle d-flex align-items-center">
                                <img src="{{ asset('images/icon/icon_27.svg') }}" alt="" class="lazy-img">
                            </div>
                        </a>

                    </div>

                </div>

                <!-- LEFT IMAGE -->
                <div class="col-lg-6 d-flex order-lg-first">

                    <div class="media-wrapper w-100 d-flex align-items-center justify-content-center position-relative">

                        <img src="{{ asset('images/media/img_20.jpg') }}"
                             alt=""
                             class="lazy-img w-100">

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection