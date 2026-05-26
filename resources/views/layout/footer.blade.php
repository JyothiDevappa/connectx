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

                            <li>
                                <a href="#">
                                    Careers
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Features
                                </a>
                            </li>

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

                <!-- COPYRIGHT -->
                <div class="copyright text-center">
                    © {{ date('Y') }} ConnectX. All Rights Reserved.
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