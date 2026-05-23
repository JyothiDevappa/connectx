@extends('layout.app')

@section('content')

<style>
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

@media (max-width: 991px) {
    .hero-banner-six .list-item li {
        font-size: 18px;
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
}
</style>

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
                    <img src="{{ asset('images/assets/screen_22.svg') }}" alt="" class="lazy-img shapes screen_01">
                    <img src="{{ asset('images/assets/screen_23.png') }}" alt="" class="lazy-img shapes screen_02">
                    <img src="{{ asset('images/shape/shape_43.svg') }}" alt="" class="lazy-img shapes bg-shape">
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
