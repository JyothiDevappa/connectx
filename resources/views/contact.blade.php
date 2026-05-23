@extends('layout.app')

@section('content')


		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative" style="background-image: url(images/media/img_26.jpg);">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h1 class="hero-heading d-inline-block position-relative">Contact us for inquiries <img src="images/shape/shape_33.html" alt=""></h1>
					</div>
                    <div class="col-xl-4 col-lg-5 ms-auto">
                        <p class="text-white text-lg mb-70 lg-mb-40">Get our all info and also can message us directly from here</p>
                        <ul class="style-none d-inline-flex pager">
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>Contact</li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
		<!-- /.inner-banner-one -->

		


		<!-- 
		=============================================
			Contact Us
		============================================== 
		-->
		<div class="contact-us-section pt-150 lg-pt-80">
			<div class="container">
                <div class="position-relative">
                    <div class="row">
						<div class="col-12 m-auto">
							<div class="row">
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_90.svg" alt="" class="lazy-img"></div>
										<h5 class="title">Our Address</h5>
										<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_91.svg" alt="" class="lazy-img"></div>
										<h5 class="title">Contact Info</h5>
										<p>give us call at <br><a href="tel:310.841.5500" class="call text-lg fw-500">310.841.5500</a></p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_92.svg" alt="" class="lazy-img"></div>
										<h5 class="title">Mail Us</h5>
										<p>send a mail to<br><a href="#" class="webaddress">youngchanakyaconnect@gmail.com</a></p>
									</div> <!-- /.address-block-one -->
								</div>
							</div>
						</div>
					</div>

                    <div class="bg-wrapper light-bg mt-80 lg-mt-40">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="d-flex flex-column flex-lg-column-reverse">
									<div class="row">
										<div class="col-md-8 col-6 me-auto ms-auto"><img src="images/lazy.svg" data-src="images/assets/ils_07.svg" alt="" class="lazy-img me-auto ms-auto"></div>
									</div>
									<div class="title-one text-center text-lg-start md-mt-20 mb-70 md-mb-30">
										<h2>Have inquiries? Reach out via message</h2>
									</div>
									<!-- /.title-one -->
								</div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-style-one ps-xl-5">
                                    <form action="https://html.creativegigstf.com/babun/babun/inc/contact.php" id="contact-form" data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="row controls">
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="">Name*</label>
                                                    <input type="text" placeholder="Your Name*" name="name" required="required" data-error="Name is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label for="">Email*</label>
                                                    <input type="email" placeholder="Email Address*" name="email" required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-35">
                                                    <textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12"><button class="btn-four tran3s w-100 d-block">Send Message</button></div>
                                        </div>
                                    </form>
                                </div> <!-- /.form-style-one -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-banner mt-120 lg-mt-80">
                <div class="gmap_canvas h-100 w-100">
                    <iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka%20collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
		</div>
		<!-- ./contact-us-section -->




		<!--
		=====================================================
			Newsletter Banner
		=====================================================
		-->
        <div class="newsletter-banner mt-40">
            <div class="container">
                <div class="main-wrapper bottom-border">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="fw-bold">Our Newsletter.</h2>
                            <p class="text-lg md-pb-20">Get instant news by subscribe to our daily newsletter</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="me-auto ms-auto me-lg-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <input type="email" placeholder="Enter your email address">
                                    <button class="rounded-circle tran3s"><i class="bi bi-arrow-right"></i></button>
                                </div>
                                <p class="text-center text-lg-end m0 pt-5">Already subscribed? <a href="#" class="text-dark fw-500">Unsubscribe</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.main-wrapper -->
            </div>
        </div>


		<!--
		=====================================================
			Footer Three
		=====================================================
		-->
		<div class="footer-three">
			<div class="container">
				<div class="inner-wrapper position-relative">
					<div class="row justify-content-between">
						<div class="col-lg-4 footer-intro mb-30">
							<div class="round-bg color-two rounded-circle text-center d-flex flex-column align-items-center justify-content-center">
								<div class="logo mb-15">
									<a href="index.html">
										<img src="images/logo/logo_02.svg" alt="">
									</a>
								</div> 
								<!-- logo -->
								<p class="lh-sm mb-45 lg-mb-30">2190 Urban Terrace, Mirpur,  <br>Licensed in 50 states.</p>
								<p class="m0"><a href="#">+757 699-4478</a></p>
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 mb-20">
							<h5 class="footer-title">Links</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="index.html">Home</a></li>
								<li><a href="pricing.html">Pricing Plan</a></li>
								<li><a href="about-us-v1.html">About us</a></li>
								<li><a href="service-v1.html">Our services</a></li>
								<li><a href="project-v2.html">Portfolio</a></li>
								<li><a href="service-v2.html">Features</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-sm-4 mb-20">
							<h5 class="footer-title">Company</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="about-us-v2.html">About us</a></li>
								<li><a href="blog-v2.html">Blogs</a></li>
								<li><a href="faq.html">FAQ’s</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-xxl-2 col-lg-3 col-sm-4 mb-20">
							<h5 class="footer-title">Support</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="contact.html">Terms of use</a></li>
								<li><a href="contact.html">Terms & conditions</a></li>
								<li><a href="contact.html">Privacy</a></li>
								<li><a href="contact.html">Cookie policy</a></li>
							</ul>
						</div>
					</div>
					<img src="images/lazy.svg" data-src="images/shape/shape_38.svg" alt="" class="lazy-img shapes shape_01">
					<img src="images/lazy.svg" data-src="images/shape/shape_39.svg" alt="" class="lazy-img shapes shape_02">
				</div> <!-- /.inner-wrapper -->
			</div>
			<div class="container">
				<div class="bottom-footer">
					<div class="row">
						<div class="col-xl-4 col-lg-3 order-lg-3 mb-15">
							<ul class="style-none d-flex align-items-center justify-content-center justify-content-lg-end social-icon">
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-dribbble"></i></a></li>
								<li><a href="#"><i class="bi bi-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-6 order-lg-2 mb-15">
							<ul class="style-none bottom-nav d-flex justify-content-center order-lg-last">
								<li><a href="contact.html">Privacy & Terms</a></li>
								<li><a href="contact.html">Cookies</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-3 order-lg-1 mb-15">
							<div class="copyright text-center text-lg-start order-lg-first">Copyright @2023 babun inc.</div>
						</div>
					</div>
				</div>
				<!-- /.bottom-footer -->
			</div>
		</div> <!-- /.footer-three -->


		<!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-wrapper m-auto">
							<ul class="nav nav-tabs border-0 w-100" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Signup</button>
								</li>
							</ul>
							<div class="tab-content mt-30">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Hi, Welcome Back!</h2>
										<p>Still don't have an account? <a href="#">Sign up</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="Youremail@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_13.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember">
														<label for="remember">Keep me logged in</label>
													</div>
													<a href="#">Forget Password?</a>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" role="tabpanel" id="fc2">
									<div class="text-center mb-20">
										<h2>Register</h2>
										<p>Already have an account? <a href="#">Login</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Zubayer Hasan">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="zubayerhasan@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_13.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember2">
														<label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
													</div>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Sign up</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							
							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3 fs-6">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/google.png" alt="">
										<span class="ps-3">Signup with Google</span>
									</a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/facebook.png" alt="">
										<span class="ps-3">Signup with Facebook</span>
									</a>
								</div>
							</div>
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>
            </div>
        </div>


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- WOW js -->
		<script src="vendor/wow/wow.min.js"></script>
		<!-- Slick Slider -->
		<script src="vendor/slick/slick.min.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Lazy -->
		<script src="vendor/jquery.lazy.min.js"></script>
		<!-- js Counter -->
		<script src="vendor/jquery.counterup.min.js"></script>
		<script src="vendor/jquery.waypoints.min.js"></script>
		
		<!-- validator js -->
		<script src="vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
	</div> <!-- /.main-page-wrapper -->


















	@endsection