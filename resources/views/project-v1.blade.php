@extends('layout.app')

@section('content')

<!-- Inner Banner -->
<div class="inner-banner-two light-bg text-center pt-200 md-pt-150 pb-85 lg-pb-50 position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <ul class="style-none d-inline-flex justify-content-center pager">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>/</li>
                    <li>Project</li>
                </ul>
                <h1 class="hero-heading">Project Portfolio</h1>
                <p class="text-lg">Offering solutions & services to address a of financial issues</p>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_01.svg') }}" alt="" class="lazy-img shapes shape_01">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_02.svg') }}" alt="" class="lazy-img shapes shape_02">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_03">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_04">
</div>

<!-- Projects Grid -->
<div class="portfolio-one position-relative mt-150 lg-mt-80 mb-150 lg-mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="portfolio-block-one">
                    <div class="img-holder round-border mb-25">
                        <img src="{{ asset('images/gallery/img_05.jpg') }}" alt="" class="w-100">
                        <a class="fancybox" data-fancybox="" href="{{ asset('images/gallery/img_05.jpg') }}"><i class="bi bi-plus"></i></a>
                    </div>
                    <h6><a href="{{ url('project-details-v1') }}">Project Title One</a></h6>
                    <ul class="style-none d-flex gap-2"><li>Design</li><li>Branding</li></ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="portfolio-block-one">
                    <div class="img-holder round-border mb-25">
                        <img src="{{ asset('images/gallery/img_06.jpg') }}" alt="" class="w-100">
                        <a class="fancybox" data-fancybox="" href="{{ asset('images/gallery/img_06.jpg') }}"><i class="bi bi-plus"></i></a>
                    </div>
                    <h6><a href="{{ url('project-details-v1') }}">Project Title Two</a></h6>
                    <ul class="style-none d-flex gap-2"><li>Marketing</li><li>Strategy</li></ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="portfolio-block-one">
                    <div class="img-holder round-border mb-25">
                        <img src="{{ asset('images/gallery/img_07.jpg') }}" alt="" class="w-100">
                        <a class="fancybox" data-fancybox="" href="{{ asset('images/gallery/img_07.jpg') }}"><i class="bi bi-plus"></i></a>
                    </div>
                    <h6><a href="{{ url('project-details-v1') }}">Project Title Three</a></h6>
                    <ul class="style-none d-flex gap-2"><li>Web</li><li>Development</li></ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fancy Banner -->
<div class="fancy-banner-three position-relative">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="title-one mb-20 lg-mb-10">
                    <h2 class="text-white">Want to Chat? Feel free to Contact our Team.</h2>
                </div>
                <p class="text-lg m0 text-white opacity-75">If you have anything in mind just contact us with our expert.</p>
            </div>
            <div class="col-lg-4 col-md-3">
                <a href="{{ url('contact') }}" class="quote-btn tran5s rounded-circle d-flex align-items-center justify-content-center ms-auto">
                    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/icon/icon_30.svg') }}" alt="" class="lazy-img">
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
