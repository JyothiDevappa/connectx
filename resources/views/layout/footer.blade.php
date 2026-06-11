<style>
/* ==========================================
   FOOTER — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Green Copyright Bar ---- */
.footer-copyright-bar {
    background: #0c3a30;
    color: rgba(255, 255, 255, 0.75);
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.3px;
    padding: 16px 20px;
    width: 100%;
}

@media (max-width: 767px) {
    .footer-copyright-bar {
        font-size: 13px;
        padding: 13px 16px;
    }
}

@media (max-width: 480px) {
    .footer-copyright-bar {
        font-size: 12px;
        padding: 11px 12px;
    }
}


/* ---- Outer wrapper ---- */
@media (max-width: 991px) {
    .footer-two {
        padding: 40px 0;
    }
    .footer-two .bg-wrapper {
        padding: 40px 24px 24px !important;
    }
    .footer-two .bg-wrapper .shapes {
        display: none !important;
    }
}

@media (max-width: 767px) {
    .footer-two {
        padding: 30px 0;
    }
    .footer-two .bg-wrapper {
        padding: 36px 16px 20px !important;
    }
}

@media (max-width: 480px) {
    .footer-two {
        padding: 24px 0;
    }
    .footer-two .bg-wrapper {
        padding: 28px 12px 16px !important;
    }
}

/* ---- Logo / Brand (left column) ---- */
@media (max-width: 767px) {
    .footer-two .footer-intro {
        text-align: center;
    }
    .footer-two .footer-intro .logo {
        display: flex;
        justify-content: center;
    }
    .footer-two .footer-intro .logo img {
        max-height: 50px;
    }
    .footer-two .footer-intro p.lh-sm {
        font-size: 14px;
    }
    .footer-two .footer-intro .social-icon {
        justify-content: center !important;
    }
}

@media (max-width: 480px) {
    .footer-two .footer-intro .logo img {
        max-height: 44px;
    }
    .footer-two .footer-intro p.lh-sm {
        font-size: 13px;
        margin-bottom: 14px !important;
    }
}

/* ---- Footer nav columns ---- */
@media (max-width: 767px) {
    /* Two columns side-by-side on mobile */
    .footer-two .col-lg-2,
    .footer-two .col-xxl-2 {
        width: 50% !important;
        max-width: 50% !important;
    }
    .footer-two .footer-title {
        font-size: 16px !important;
        margin-bottom: 12px !important;
    }
    .footer-two .footer-nav-link a {
        font-size: 14px;
        padding: 4px 0;
    }
}

@media (max-width: 480px) {
    /* Stack all columns to full width on very small screens */
    .footer-two .col-lg-2,
    .footer-two .col-xxl-2 {
        width: 50% !important;
        max-width: 50% !important;
    }
    .footer-two .footer-title {
        font-size: 15px !important;
    }
    .footer-two .footer-nav-link a {
        font-size: 13px;
    }
    .footer-two .footer-nav-link li {
        margin-bottom: 6px;
    }
}

/* ---- Social Icons ---- */
@media (max-width: 767px) {
    .footer-two .social-icon li a {
        width: 36px;
        height: 36px;
        font-size: 14px;
    }
}

/* ---- Copyright inside bg-wrapper ---- */
@media (max-width: 991px) {
    .footer-two .copyright {
        position: static !important;
        margin-top: 20px;
        font-size: 13px;
        padding-top: 16px;
        border-top: 1px solid rgba(0, 0, 0, 0.07);
    }
}

@media (max-width: 480px) {
    .footer-two .copyright {
        font-size: 12px;
        margin-top: 14px;
        padding-top: 12px;
    }
}



/* ---- Scroll-to-top button ---- */
@media (max-width: 767px) {
    .scroll-top {
        width: 42px;
        height: 42px;
        font-size: 22px;
        right: 16px;
        bottom: 16px;
    }
}

@media (max-width: 480px) {
    .scroll-top {
        width: 38px;
        height: 38px;
        font-size: 20px;
        right: 12px;
        bottom: 12px;
    }
}

/* ---- row gap for the columns ---- */
@media (max-width: 767px) {
    .footer-two .row.justify-content-between {
        row-gap: 24px;
    }
}

@media (max-width: 480px) {
    .footer-two .row.justify-content-between {
        row-gap: 20px;
    }
}
</style>

<!-- Footer Two -->

<div class="footer-two no-bg">
    <div class="container">
        <div class="bg-wrapper position-relative">

            <div class="container">
                <div class="row justify-content-between">

                    <!-- LEFT -->
                    <div class="col-xl-3 col-lg-4 footer-intro mb-30">

                        <div class="logo mb-35 md-mb-20">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo/connectx1.png') }}" alt="ConnectX Logo">


                            </a>
                        </div>

                        <!-- <div class="logo mb-35 md-mb-20">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo/connectx1.svg') }}" 
             alt="ConnectX Logo" 
             width="40" 
             height="40" 
             style="object-fit: contain; display: block;">
    </a>
</div> -->


                        <p class="lh-sm mb-40 md-mb-20">
                            Follow Us

                        </p>

                        <ul class="style-none d-flex align-items-center social-icon">
                            <li>
                                <a href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="bi bi-dribbble"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <!-- LINKS -->
                    <div class="col-lg-2 col-sm-4 mb-20">

                        <h5 class="footer-title">
                            Links
                        </h5>

                        <ul class="footer-nav-link style-none">

                            <li>
                                <a href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Pricing Plan
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>

                            <!-- <li>
                                <a href="#">
                                    Careers
                                </a>
                            </li> -->

                            <!-- <li>
                                <a href="#">
                                    Features
                                </a>
                            </li> -->

                        </ul>

                    </div>

                    <!-- COMPANY -->
                    <div class="col-lg-2 col-sm-4 mb-20">

                        <h5 class="footer-title">
                            Company
                        </h5>

                        <ul class="footer-nav-link style-none">

                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Blogs
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    FAQ’s
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/contact') }}">
                                    Contact
                                </a>
                            </li>

                        </ul>

                    </div>

                    <!-- SUPPORT -->
                    <div class="col-xxl-2 col-lg-3 col-sm-4 mb-20">

                        <h5 class="footer-title">
                            Support
                        </h5>

                        <ul class="footer-nav-link style-none">

                            <li>
                                <a href="#">
                                    Terms of Use
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Terms & Conditions
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Privacy
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Cookie Policy
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Self Service
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>



            </div>

            <!-- SHAPES -->
            <img src="{{ asset('images/shape/shape_06.svg') }}"
                alt=""
                class="lazy-img shapes shape_01">

            <img src="{{ asset('images/shape/shape_06.svg') }}"
                alt=""
                class="lazy-img shapes shape_02">

        </div>
    </div>
</div>

<!-- COPYRIGHT BAR -->
<div class="footer-copyright-bar">
    &copy; {{ date('Y') }} ConnectX. All Rights Reserved.
</div>

<!-- Scroll Top -->
<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>

<!-- JS FILES -->
<script src="{{ asset('vendor/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/validator.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('js/theme.js') }}"></script>