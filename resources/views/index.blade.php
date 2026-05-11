@extends('layout.app')

@section('content')

<style>
	.media-wrapper img {
    filter: none !important;
}

.growth-points{
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.growth-item{
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.growth-item span{
    width: 10px;
    height: 10px;
    background: #000;
    border-radius: 50%;
    margin-top: 10px;
    flex-shrink: 0;
}

.growth-item p{
    margin: 0;
    font-size: 20px;
    line-height: 1.7;
}

.closing-text{
    font-size: 20px;
    line-height: 1.8;
    opacity: 0.8;
}

.border-radius-20{
    border-radius: 20px;
}
	</style>



<div class="hero-banner-six pt-170 md-pt-110 position-relative">
    <div class="container position-relative">
        <div class="row justify-content-between">

            <div class="col-md-6 wow fadeInLeft">
                <div class="pt-20 pb-50">

                    <h1 class="hero-heading fw-bold">
                        India’s Leadership Network for Speakers, Influencers & Professionals
                    </h1>

                    <p class="text-lg pt-35 lg-pt-30 pb-35 lg-pb-20">
                        A curated ecosystem where voices, ideas, and opportunities connect across industries.
                    </p>

                    <div class="d-flex flex-wrap">
                        <a href="{{ route('contact') }}" class="btn-eighteen tran3s me-4 mt-10">
                            Join ConnectX
                        </a>

                        <a href="{{ route('contact') }}" class="btn-nineteen tran3s mt-10">
                            Become a Speaker
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-6 d-md-flex justify-content-end wow fadeInRight">
                <div class="media-wrapper position-relative ms-lg-5">

                    <!-- <img 
                        src="{{ asset('images/lazy.svg') }}" 
                        data-src="{{ asset('images/assets/screen_22.svg') }}" 
                        alt="" 
                        class="lazy-img shapes screen_01"
                    >

                    <img 
                        src="{{ asset('images/lazy.svg') }}" 
                        data-src="{{ asset('images/assets/screen_23.png') }}" 
                        alt="" 
                        class="lazy-img shapes screen_02"
                    >

                    <img 
                        src="{{ asset('images/lazy.svg') }}" 
                        data-src="{{ asset('images/shape/shape_43.svg') }}" 
                        alt="" 
                        class="lazy-img shapes bg-shape"
                    > -->

                </div>
            </div>

        </div>

        <!-- <div class="row">
            <div class="col-12">

                <div class="partner-logo-one pt-60 md-pt-50">

                    <p class="fw-500 text-dark mb-40">
                        <span class="text-decoration-underline">Join 27,000+</span>
                        professionals & brands already growing with ConnectX
                    </p>

                    <div class="partner-slider-one">

                        <div class="item">
                            <div class="logo d-flex align-items-center">
                                <img src="{{ asset('images/logo/media_03.png') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="logo d-flex align-items-center">
                                <img src="{{ asset('images/logo/media_04.png') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="logo d-flex align-items-center">
                                <img src="{{ asset('images/logo/media_05.png') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="logo d-flex align-items-center">
                                <img src="{{ asset('images/logo/media_01.png') }}" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <div class="logo d-flex align-items-center">
                                <img src="{{ asset('images/logo/media_02.png') }}" alt="">
                            </div>
                        </div>

                    </div>

                </div>

            </div> -->
        </div>
    </div>






    <!-- SECOND SECTION -->


<div class="text-feature-one mt-150 lg-mt-80">
    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 wow fadeInLeft">

                <div class="title-one">
                    <h2>Why Most People Don’t Grow Fast Enough</h2>
                </div>

                <p class="text-lg mt-40 lg-mt-30 mb-35">
                    Growth is not limited by talent. It is limited by access.
                </p>

                <div class="growth-points">

                    <div class="growth-item">
                        <span></span>
                        <p>No access to the right network</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Limited exposure to real-world thinking</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>Learning without practical application</p>
                    </div>

                    <div class="growth-item">
                        <span></span>
                        <p>No direct connection to industry leaders</p>
                    </div>

                </div>

                <p class="closing-text mt-45">
                    Most people are surrounded by the same circle,
                    the same ideas, and the same limitations.
                </p>

                <h5 class="fw-bold mt-25">
                    Real growth begins when you enter the right network.
                </h5>

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







<div class="block-feature-four position-relative mt-150 lg-mt-80 pb-150 lg-pb-80">
    <div class="container">

        <!-- HEADING -->
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-9 m-auto wow fadeInUp">
                <div class="title-one text-center mb-60 lg-mb-30">
                    <h2>Built for People Who Want More</h2>

                    <p class="text-lg mt-25">
                        A community designed for ambitious individuals who want
                        stronger connections, better opportunities, and meaningful growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- CARDS -->
        <div class="row gx-xxl-5 justify-content-center">

            <!-- SPEAKERS -->
            <div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
                <div class="card-style-six text-center vstack tran3s w-100 mt-30">

                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{ asset('images/icon/icon_20.svg') }}" alt="">
                    </div>

                    <h4 class="fw-bold mt-40 md-mt-30 mb-20">
                        Speakers
                    </h4>

                    <p class="mb-20">
                        Share ideas, build presence, and influence meaningful conversations.
                    </p>

                    <a href="{{ url('/services-1') }}"
                       class="arrow-btn tran3s m-auto stretched-link">

                        <img src="{{ asset('images/icon/icon_09.svg') }}" alt="">
                    </a>

                </div>
            </div>

            <!-- INFLUENCERS -->
            <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                 data-wow-delay="0.1s">

                <div class="card-style-six text-center vstack tran3s w-100 mt-30 active">

                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{ asset('images/icon/icon_21.svg') }}" alt="">
                    </div>

                    <h4 class="fw-bold mt-40 md-mt-30 mb-20">
                        Influencers
                    </h4>

                    <p class="mb-20">
                        Expand reach, collaborate across industries, and create impact.
                    </p>

                    <a href="{{ url('/services-1') }}"
                       class="arrow-btn tran3s m-auto stretched-link">

                        <img src="{{ asset('images/icon/icon_09.svg') }}" alt="">
                    </a>

                </div>
            </div>

            <!-- FOUNDERS -->
            <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                 data-wow-delay="0.2s">

                <div class="card-style-six text-center vstack tran3s w-100 mt-30">

                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{ asset('images/icon/icon_22.svg') }}" alt="">
                    </div>

                    <h4 class="fw-bold mt-40 md-mt-30 mb-20">
                        Founders
                    </h4>

                    <p class="mb-20">
                        Connect with like-minded individuals, explore opportunities, and grow your network.
                    </p>

                    <a href="{{ url('/services-1') }}"
                       class="arrow-btn tran3s m-auto stretched-link">

                        <img src="{{ asset('images/icon/icon_09.svg') }}" alt="">
                    </a>

                </div>
            </div>

            <!-- PROFESSIONALS -->
            <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                 data-wow-delay="0.3s">

                <div class="card-style-six text-center vstack tran3s w-100 mt-30">

                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{ asset('images/icon/icon_20.svg') }}" alt="">
                    </div>

                    <h4 class="fw-bold mt-40 md-mt-30 mb-20">
                        Professionals
                    </h4>

                    <p class="mb-20">
                        Move beyond your role with better exposure, insights, and connections.
                    </p>

                    <a href="{{ url('/services-1') }}"
                       class="arrow-btn tran3s m-auto stretched-link">

                        <img src="{{ asset('images/icon/icon_09.svg') }}" alt="">
                    </a>

                </div>
            </div>

            <!-- ASPIRING LEADERS -->
            <div class="col-lg-4 col-md-6 d-flex wow fadeInUp"
                 data-wow-delay="0.4s">

                <div class="card-style-six text-center vstack tran3s w-100 mt-30">

                    <div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                        <img src="{{ asset('images/icon/icon_21.svg') }}" alt="">
                    </div>

                    <h4 class="fw-bold mt-40 md-mt-30 mb-20">
                        Aspiring Leaders
                    </h4>

                    <p class="mb-20">
                        Gain clarity, direction, and access to people who are already building.
                    </p>

                    <a href="{{ url('/services-1') }}"
                       class="arrow-btn tran3s m-auto stretched-link">

                        <img src="{{ asset('images/icon/icon_09.svg') }}" alt="">
                    </a>

                </div>
            </div>

        </div>
    </div>

    <!-- SHAPES -->
    <img src="{{ asset('images/shape/shape_05.svg') }}"
         alt=""
         class="shapes shape_01">

    <img src="{{ asset('images/shape/shape_06.svg') }}"
         alt=""
         class="shapes shape_02">
</div>














    <img 
        src="{{ asset('images/lazy.svg') }}" 
        data-src="{{ asset('images/shape/shape_42.svg') }}" 
        alt="" 
        class="lazy-img shapes shape_01"
    >
</div>



@endsection