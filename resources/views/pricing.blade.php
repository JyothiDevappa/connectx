@extends('layout.app')

@section('content')

<!-- Inner Banner -->
<div class="inner-banner-two light-bg text-center pt-200 md-pt-150 pb-85 lg-pb-50 position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <ul class="style-none d-inline-flex justify-content-center pager">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="#">Pages</a></li>
                    <li>/</li>
                    <li>Pricing</li>
                </ul>
                <h1 class="hero-heading">Our Membership & pricing</h1>
                <p class="text-lg">Find out the pricing for different service and products</p>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_01.svg') }}" alt="" class="lazy-img shapes shape_01">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_02.svg') }}" alt="" class="lazy-img shapes shape_02">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_03">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_04">
</div>

<!-- Pricing Section -->
<div class="pricing-section light-bg border-top pt-120 lg-pt-80 pb-150 lg-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <div class="title-one">
                    <h2>Solo, Agency or team?</h2>
                </div>
                <p class="text-lg pt-10 m0">Find out the which plan match with your needs</p>
            </div>
            <div class="col-lg-5">
                <nav class="pricing-nav d-flex justify-content-center justify-content-lg-end md-mt-40">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-month-tab" data-bs-toggle="tab" data-bs-target="#nav-month" type="button" role="tab" aria-controls="nav-month" aria-selected="true">Monthly</button>
                        <button class="nav-link" id="nav-year-tab" data-bs-toggle="tab" data-bs-target="#nav-year" type="button" role="tab" aria-controls="nav-year" aria-selected="false">Yearly</button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="tab-content mt-50 md-mt-30">
            <div class="tab-pane show active" id="nav-month" role="tabpanel" aria-labelledby="nav-month-tab" tabindex="0">
                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-65 md-mb-30">
                        <div class="pricing-card-one d-flex flex-column w-100 h-100 text-center">
                            <h2 class="fw-bold">Business</h2>
                            <div class="row">
                                <div class="col-xxl-9 m-auto">
                                    <p>For individuals and teams. Get <span>1 month premium market access</span></p>
                                </div>
                            </div>
                            <div class="price-banner text-lg-start d-lg-flex justify-content-center align-items-center">
                                <div class="price"><sup>$</sup> 09</div>
                                <div class="ps-lg-4">
                                    <strong class="text-lg fw-500">Monthly membership</strong>
                                    <span>Starting at $53/mo</span>
                                </div>
                            </div>
                            <ul class="style-none mb-35">
                                <li>100% Better results</li>
                                <li>Suspe Ndisse Suscipit Sagittis</li>
                                <li>Review Credit Reports</li>
                            </ul>
                            <div class="action-btn text-center">Try us without risk. <a href="#">Choose Plan <i class="bi bi-chevron-right"></i></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-65 md-mb-30">
                        <div class="pricing-card-one d-flex flex-column w-100 h-100 text-center">
                            <h2 class="fw-bold">Agency</h2>
                            <div class="row">
                                <div class="col-xxl-9 m-auto">
                                    <p>For big agency & team, Get <span>1 month premium market access</span></p>
                                </div>
                            </div>
                            <div class="price-banner text-lg-start d-lg-flex justify-content-center align-items-center">
                                <div class="price"><sup>$</sup> 12</div>
                                <div class="ps-lg-4">
                                    <strong class="text-lg fw-500">Monthly membership</strong>
                                    <span>Starting at $53/mo</span>
                                </div>
                            </div>
                            <ul class="style-none mb-35">
                                <li>100% Better results</li>
                                <li>Suspe Ndisse Suscipit Sagittis</li>
                                <li>Review Credit Reports</li>
                            </ul>
                            <div class="action-btn text-center">Try us without risk. <a href="#">Choose Plan <i class="bi bi-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="nav-year" role="tabpanel" aria-labelledby="nav-year-tab" tabindex="0">
                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-65 md-mb-30">
                        <div class="pricing-card-one d-flex flex-column w-100 h-100 text-center">
                            <h2 class="fw-bold">Business</h2>
                            <div class="row">
                                <div class="col-xxl-9 m-auto">
                                    <p>For individuals and teams. Get <span>1 year premium market access</span></p>
                                </div>
                            </div>
                            <div class="price-banner text-lg-start d-lg-flex justify-content-center align-items-center">
                                <div class="price"><sup>$</sup> 99</div>
                                <div class="ps-lg-4">
                                    <strong class="text-lg fw-500">Yearly membership</strong>
                                    <span>Starting at $53/mo</span>
                                </div>
                            </div>
                            <ul class="style-none mb-35">
                                <li>100% Better results</li>
                                <li>Suspe Ndisse Suscipit Sagittis</li>
                                <li>Review Credit Reports</li>
                            </ul>
                            <div class="action-btn text-center">Try us without risk. <a href="#">Choose Plan <i class="bi bi-chevron-right"></i></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-65 md-mb-30">
                        <div class="pricing-card-one d-flex flex-column w-100 h-100 text-center">
                            <h2 class="fw-bold">Agency</h2>
                            <div class="row">
                                <div class="col-xxl-9 m-auto">
                                    <p>For big agency & team, Get <span>1 year premium market access</span></p>
                                </div>
                            </div>
                            <div class="price-banner text-lg-start d-lg-flex justify-content-center align-items-center">
                                <div class="price"><sup>$</sup> 129</div>
                                <div class="ps-lg-4">
                                    <strong class="text-lg fw-500">Yearly membership</strong>
                                    <span>Starting at $53/mo</span>
                                </div>
                            </div>
                            <ul class="style-none mb-35">
                                <li>100% Better results</li>
                                <li>Suspe Ndisse Suscipit Sagittis</li>
                                <li>Review Credit Reports</li>
                            </ul>
                            <div class="action-btn text-center">Try us without risk. <a href="#">Choose Plan <i class="bi bi-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-banner position-relative">
            <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_04.svg') }}" alt="" class="lazy-img shapes screen_01">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <h2>Want a <span>custom pricing</span> plan for your business?</h2>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="{{ url('contact') }}" class="btn-four">Let's Talk</a>
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
