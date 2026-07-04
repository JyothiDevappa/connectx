<style>
/* ==========================================
   FOOTER — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Light Copyright Bar ---- */
.footer-copyright-bar {
    background: #0c3a30;
    color: #c5c5c5;
    border-top: none;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.3px;
    padding: 24px 0;
    width: 100%;
}

.footer-copyright-bar a {
    color: #c5c5c5;
    text-decoration: none;
    transition: all 0.2s ease;
}

.footer-copyright-bar a:hover {
    color: #ffffff;
    text-decoration: underline;
}

.footer-copyright-links {
    display: flex;
    align-items: center;
    gap: 15px;
}

.footer-copyright-links span {
    color: rgba(255, 255, 255, 0.25);
}

@media (max-width: 767px) {
    .footer-copyright-bar {
        padding: 18px 12px;
    }
}

/* ---- Footer brand description ---- */
.footer-brand-desc {
    font-size: 14px;
    line-height: 1.85;
    color: #6b7280 !important;
    font-weight: 400;
    max-width: 320px;
    margin: 0 0 28px 0;
}

.footer-nav-link a {
    color: #6b7280 !important;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-nav-link a:hover {
    color: #0c3a30 !important;
}

@media (max-width: 767px) {
    .footer-brand-desc {
        font-size: 13px;
        max-width: 100%;
        margin-bottom: 20px;
        text-align: left;
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
    .footer-two .footer-intro .logo img {
        max-height: 50px;
    }
    .footer-two .footer-intro p.lh-sm {
        font-size: 14px;
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
    #footer-mobile-row {
        display: flex !important;
        flex-wrap: wrap !important;
        flex-direction: row !important;
    }
    
    /* 1. Intro (Full width) */
    #footer-mobile-row > div:nth-child(1) {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
        margin-bottom: 32px !important;
    }
    
    /* 2 & 3. Links and Programs (50% side-by-side) */
    #footer-mobile-row > div:nth-child(2),
    #footer-mobile-row > div:nth-child(3) {
        width: 50% !important;
        max-width: 50% !important;
        flex: 0 0 50% !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
    
    /* 4. Contact Us (Full width) */
    #footer-mobile-row > div:nth-child(4) {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
        margin-top: 16px !important;
    }
    
    /* Left-align all elements for clean reading */
    #footer-mobile-row .footer-intro {
        text-align: left !important;
    }
    #footer-mobile-row .footer-intro .logo {
        justify-content: flex-start !important;
        display: flex;
    }
    #footer-mobile-row .footer-intro .social-icon {
        justify-content: flex-start !important;
    }
    
    #footer-mobile-row .footer-title {
        font-size: 16px !important;
        margin-bottom: 12px !important;
    }
    #footer-mobile-row .footer-nav-link a {
        font-size: 14px;
        padding: 4px 0;
    }
}

@media (max-width: 480px) {
    #footer-mobile-row .footer-title {
        font-size: 15px !important;
    }
    #footer-mobile-row .footer-nav-link a {
        font-size: 13px;
    }
    #footer-mobile-row .footer-nav-link li {
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
    #footer-mobile-row {
        row-gap: 24px !important;
    }
}

@media (max-width: 480px) {
    #footer-mobile-row {
        row-gap: 20px !important;
    }
}
</style>

<!-- Footer Two -->

<div class="footer-two no-bg">
    <div class="container">
        <div class="bg-wrapper position-relative">

            <div class="container">
                <div class="row justify-content-between" id="footer-mobile-row">                    <!-- LEFT -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 footer-intro mb-30">

                        <div class="logo mb-35 md-mb-20">
                            <a href="{{ url('/') }}" class="d-flex align-items-center gap-3 text-decoration-none">
                                <img src="{{ asset('images/logo/logo.png') }}" alt="Young Chanakya X Logo" style="max-height: 50px;">
                                <span style="font-size: 22px; font-weight: 800; color: #0c3a30; font-family: 'Manrope', sans-serif; letter-spacing: -0.5px; line-height: 1;">YoungChanakya<span style="color: #ffd2b1;">X</span></span>
                            </a>
                        </div>

                        <!-- <div class="logo mb-35 md-mb-20">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo/connectx1.svg') }}" 
             alt="Young Chanakya X Logo" 
             width="40" 
             height="40" 
             style="object-fit: contain; display: block;">
    </a>
</div> -->


                        <p class="footer-brand-desc">Young Chanakya X is a global creator ecosystem connecting creators, influencers, speakers, podcasters &amp; founders through live events, collaborations, and meaningful experiences.</p>

                        <ul class="style-none d-flex align-items-center social-icon">
                            <li>
                                <a href="https://www.linkedin.com/showcase/young-chanakya-x/" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://x.com/YoungChanakyaX" target="_blank">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UCunrW6XIpxgonRXd6CjQ9eQ" target="_blank">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.threads.net/@youngchanakyax" target="_blank">
                                    <i class="bi bi-threads"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <!-- LINKS -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-20">

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
                                <a href="{{ url('/about') }}">
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/events') }}">
                                    Events
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/connecters-list') }}">
                                    Directory
                                </a>
                            </li>

                        </ul>

                    </div>

                    <!-- PROGRAMS -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-20">

                        <h5 class="footer-title">
                            Programs
                        </h5>

                        <ul class="footer-nav-link style-none">

                            <li>
                                <a href="{{ url('/become-a-partner') }}">
                                    Become a Partner
                                </a>
                            </li>


                            <li>
                                <a href="{{ url('/become-a-sponser') }}">
                                    Become a Sponsor
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/contact') }}">
                                    Contact Us
                                </a>
                            </li>

                        </ul>

                    </div>

                    <!-- CONTACT US -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6 mb-20">

                        <h5 class="footer-title">
                            Contact Us
                        </h5>

                        <ul class="footer-nav-link style-none" style="display: flex; flex-direction: column; gap: 16px;">

                            <li style="display: flex; align-items: flex-start; gap: 12px; color: #6b7280; font-size: 14px; line-height: 1.4;">
                                <i class="bi bi-geo-alt-fill" style="color: #0c3a30; font-size: 1.1rem; margin-top: 2px;"></i>
                                <span>Tiruchengode, Tamil Nadu, India</span>
                            </li>

                            <li style="display: flex; align-items: center; gap: 12px; font-size: 14px;">
                                <i class="bi bi-telephone-fill" style="color: #0c3a30; font-size: 1.1rem;"></i>
                                <a href="tel:8667205661">+91 8667205661</a>
                            </li>

                            <li style="display: flex; align-items: center; gap: 12px; font-size: 14px;">
                                <i class="bi bi-envelope-fill" style="color: #0c3a30; font-size: 1.1rem;"></i>
                                <a href="mailto:youngchanakya.x@gmail.com">youngchanakya.x@gmail.com</a>
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
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 text-center text-md-start">
            <div class="copyright-left">
                Copyright &copy; {{ date('Y') }} Young ChanakyaX. All rights reserved.
            </div>
            <!-- <div class="footer-copyright-links justify-content-center">
                <a href="#">Privacy Policy</a>
                <span>|</span>
                <a href="#">Terms of Service</a>
                <span>|</span>
                <a href="#">Community Ethics</a>
            </div> -->
            <div class="copyright-right">
                Partners : <a href="#">FintechGie</a> &amp; <a href="#">Wegeni</a>
            </div>
        </div>
    </div>
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
