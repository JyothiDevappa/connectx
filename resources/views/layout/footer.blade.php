<!-- Footer One -->
<div class="footer-one">
    <div class="container">
        <div class="inner-wrapper">
            <div class="row justify-content-between">

                <!-- LEFT -->
                <div class="col-xl-4 col-md-3 footer-intro mb-30">
                    <div class="logo mb-15">
                        <a href="{{ url('/') }}" class="d-inline-block d-lg-none">
                            <img src="{{ asset('images/logo/logo_01.png') }}" alt="">
                        </a>
                    </div>

                    <p class="text-white lh-sm mb-35">
                        Top-rated <span class="opacity-50">business <br> consultancy for your success</span>
                    </p>

                    <ul class="style-none d-flex align-items-center social-icon">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>

                <!-- LINKS -->
                <div class="col-xl-2 col-md-3 col-sm-4 mb-20">
                    <h5 class="footer-title">Links</h5>
                    <ul class="footer-nav-link style-none">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our services</a></li>
                    </ul>
                </div>

                <!-- COMPANY -->
                <div class="col-xl-2 col-md-3 col-sm-4 mb-20">
                    <h5 class="footer-title">Company</h5>
                    <ul class="footer-nav-link style-none">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">FAQ’s</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>

                <!-- SUPPORT -->
                <div class="col-xl-2 col-md-3 col-sm-4 mb-20">
                    <h5 class="footer-title">Support</h5>
                    <ul class="footer-nav-link style-none">
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Cookie policy</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- BOTTOM -->
    <div class="container">
        <div class="bottom-footer">
            <div class="row align-items-center">

                <!-- NEWSLETTER -->
                <div class="col-lg-5 order-lg-last mb-15">
                    <div class="footer-newsletter float-xl-end">
                        <h5 class="footer-title">Subscribe Newsletter</h5>
                        <form action="#">
                            <input type="email" placeholder="Enter your email address">
                            <button><i class="bi bi-arrow-right"></i></button>
                        </form>
                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div class="col-lg-7 order-lg-first mb-15">
                    <a href="{{ url('/') }}" class="d-none d-lg-inline-block mb-25">
                        <img src="{{ asset('images/logo/logo_01.png') }}" alt="">
                    </a>

                    <div class="d-xl-flex align-items-center">
                        <ul class="style-none bottom-nav d-flex flex-wrap justify-content-center justify-content-lg-start order-lg-last">
                            <li><a href="#">Privacy & Terms</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>

                        <div class="copyright me-xl-4 lg-mt-10 order-lg-first">
                            © {{ date('Y') }} connectX. All Rights Reserved.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Scroll Top -->
<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>

<!-- JS FILES (CRITICAL FIX) -->
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