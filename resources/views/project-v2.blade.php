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
                <h1 class="hero-heading">Our Most Recent Projects</h1>
                <p class="text-lg">Offering solutions & services to address a of financial issues</p>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_01.svg') }}" alt="" class="lazy-img shapes shape_01">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_02.svg') }}" alt="" class="lazy-img shapes shape_02">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_03">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_04">
</div>

<!-- Portfolio Section -->
<div class="portfolio-two position-relative mt-150 lg-mt-80 mb-150 lg-mb-60">
    <div class="container">
        <div class="position-relative">
            <div id="portfolio-gallery-v2-wrapper" class="column-two">
                <div class="grid-sizer"></div>
                <div class="isotop-item">
                    <div class="portfolio-block-one mb-60 lg-mb-40">
                        <div class="img-holder round-border">
                            <img src="{{ asset('images/gallery/img_05.jpg') }}" alt="" class="img-meta w-100 tran5s">
                            <a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="{{ asset('images/gallery/img_05.jpg') }}" tabindex="0"><i class="bi bi-plus"></i></a>
                        </div>
                        <div class="caption">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <ul class="style-none d-flex tag">
                                        <li>PRINT</li>
                                        <li>DESIGN</li>
                                    </ul>
                                    <h6><a href="{{ url('project-details-v1') }}" class="pj-title">Tax Preparation</a></h6>
                                </div>
                                <div>
                                    <a href="{{ url('project-details-v1') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isotop-item">
                    <div class="portfolio-block-one mb-60 lg-mb-40">
                        <div class="img-holder round-border">
                            <img src="{{ asset('images/gallery/img_06.jpg') }}" alt="" class="img-meta w-100 tran5s">
                            <a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="{{ asset('images/gallery/img_06.jpg') }}" tabindex="0"><i class="bi bi-plus"></i></a>
                        </div>
                        <div class="caption">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <ul class="style-none d-flex tag">
                                        <li>Mobile</li>
                                        <li>UI/UX</li>
                                    </ul>
                                    <h6><a href="{{ url('project-details-v1') }}" class="pj-title">Investment Planning</a></h6>
                                </div>
                                <div>
                                    <a href="{{ url('project-details-v1') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn text-center mt-30 lg-mt-10">
                <a href="#" class="btn-nine rounded-circle d-inline-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
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
