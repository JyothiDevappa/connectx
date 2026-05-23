<header class="theme-main-menu menu-overlay menu-style-two sticky-menu">

    <!-- TOP INFO -->
    <div class="gap-fix info-row">
        <div class="d-md-flex justify-content-between">

            <div class="greetings text-center">
                <span class="opacity-50">Hello!!</span>
                <span class="fw-500">Welcome to connectX</span>
            </div>

            <ul class="style-none d-none d-md-flex contact-info">

                <li class="d-flex align-items-center">
                    <img src="{{ asset('images/icon/icon_14.svg') }}" class="icon me-2">
                    <a href="mailto:youngchanakyaconnect@gmail.com" class="fw-500">
                        youngchanakyaconnect@gmail.com
                    </a>
                </li>

                <li class="d-flex align-items-center">
                    <img src="{{ asset('images/icon/icon_15.svg') }}" class="icon me-2">
                    <a href="tel:+7576994478" class="fw-500">
                        +757 699-4478
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- HEADER -->
    <div class="inner-content gap-fix">
        <div class="top-header position-relative">

            <div class="d-flex align-items-center">

                <!-- LOGO -->
                <div class="logo order-lg-0">
                    <a href="{{ url('/') }}" class="d-flex align-items-center">
                        <img src="{{ asset('images/logo/h.svg') }}" alt="">
                    </a>
                </div>

                <!-- RIGHT SIDE -->
                <div class="right-widget order-lg-3 ms-auto">

                    <ul class="d-flex align-items-center style-none">

                        <li class="d-flex align-items-center login-btn-one me-3">
                            <img src="{{ asset('images/icon/icon_16.svg') }}" class="icon me-2">

                            <a href="#"
                               data-bs-toggle="modal"
                               data-bs-target="#loginModal"
                               class="fw-500">
                               Login
                            </a>
                        </li>

                        <li class="d-none d-md-inline-block ms-3">
                            <a href="#"
                               class="signup-btn-one icon-link">

                                <span>Signup</span>

                                <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-lg p0 ms-lg-5 order-lg-2">

                    <button class="navbar-toggler d-block d-lg-none"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">

                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav align-items-lg-center">

                            <!-- MOBILE LOGO -->
                            <li class="d-block d-lg-none">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('images/logo/h.svg') }}">
                                    </a>
                                </div>
                            </li>

                            <!-- HOME -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle"
                                   href="#"
                                   role="button"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">

                                   Home
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ url('/') }}" class="dropdown-item">
                                            <span>Finance</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-2') }}" class="dropdown-item">
                                            <span>Business Consultancy</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-3') }}" class="dropdown-item">
                                            <span>Banking</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-4') }}" class="dropdown-item">
                                            <span>Payment Solution</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-5') }}" class="dropdown-item">
                                            <span>Digital Agency</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-6') }}" class="dropdown-item">
                                            <span>Marketing</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-7') }}" class="dropdown-item">
                                            <span>Insurance</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/home-8') }}" class="dropdown-item">
                                            <span>Tax Agency</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-- PAGES -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle"
                                   href="#"
                                   data-bs-toggle="dropdown">

                                   Pages
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ url('/about') }}" class="dropdown-item">
                                            About Us
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/about-2') }}" class="dropdown-item">
                                            About Us V2
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/pricing') }}" class="dropdown-item">
                                            Pricing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/faq') }}" class="dropdown-item">
                                            FAQ
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/testimonial') }}" class="dropdown-item">
                                            Testimonial
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <!-- SERVICES -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle"
                                   href="#"
                                   data-bs-toggle="dropdown">

                                   Services
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ url('/services-1') }}" class="dropdown-item">
                                            Service V1
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/services-2') }}" class="dropdown-item">
                                            Service V2
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/service-details') }}" class="dropdown-item">
                                            Service Details
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-- BLOG -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle"
                                   href="#"
                                   data-bs-toggle="dropdown">

                                   Blog
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ url('/blog-1') }}" class="dropdown-item">
                                            Blog List
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/blog-2') }}" class="dropdown-item">
                                            Blog Grid
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/blog-details') }}" class="dropdown-item">
                                            Blog Details
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-- SHOP -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle"
                                   href="#"
                                   data-bs-toggle="dropdown">

                                   Shop
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ url('/shop') }}" class="dropdown-item">
                                            Shop
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/shop-details') }}" class="dropdown-item">
                                            Shop Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/cart') }}" class="dropdown-item">
                                            Cart
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/checkout') }}" class="dropdown-item">
                                            Checkout
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-- CONTACT -->
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ url('/contact') }}">
                                   Contact
                                </a>
                            </li>

                        </ul>

                    </div>

                </nav>

            </div>
        </div>
    </div>
</header>