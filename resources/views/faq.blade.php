@extends('layout.app')

@section('content')

<!-- Inner Banner -->
<div class="inner-banner-two light-bg text-center pt-200 md-pt-150 pb-85 lg-pb-50 position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <ul class="style-none d-inline-flex justify-content-center pager">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="#">Pages</a></li>
                    <li>/</li>
                    <li>FAQ's</li>
                </ul>
                <h1 class="hero-heading">Questions & Answers</h1>
                <p class="text-lg">Find out the all the question & answers you have about us</p>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_01.svg') }}" alt="" class="lazy-img shapes shape_01">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/assets/ils_02.svg') }}" alt="" class="lazy-img shapes shape_02">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_03">
    <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="lazy-img shapes shape_04">
</div>

<!-- FAQ Section -->
<div class="faq-section-three light-bg border-top pt-120 lg-pt-80 pb-150 lg-pb-80">
    <div class="container">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab">All</button>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-marketing" type="button" role="tab" >Marketing</button>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-banking" type="button" role="tab" >Banking</button>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-finance" type="button" role="tab" >Finance</button>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-payment" type="button" role="tab" >Payments</button>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-terms" type="button" role="tab" >Terms & Conditions</button>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-account" type="button" role="tab" >Account</button>
            </div>
        </nav>
        <div class="tab-content mt-60 lg-mt-40">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" tabindex="0">
                <div class="accordion accordion-style-one" id="accordionOne">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                How does the free trial work?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                            <div class="accordion-body">
                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do you find different criteria in your process?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                            <div class="accordion-body">
                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                What do you look for in a founding team?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                            <div class="accordion-body">
                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-marketing" role="tabpanel" tabindex="0">
                <div class="accordion accordion-style-one" id="accordionTwo">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="false" aria-controls="collapseOneA">
                                How does the free trial work?
                            </button>
                        </h2>
                        <div id="collapseOneA" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                            <div class="accordion-body">
                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-60 lg-mt-50">
            <h2 class="fs-1 mb-30">Don't get your answer?</h2>
            <a href="{{ url('contact') }}" class="btn-four">Contact Us</a>
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
