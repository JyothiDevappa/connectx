@php
/**
 * Contact Page SEO Data
 */
$seo = [
    'title'       => 'Contact ConnectX — Get in Touch with Our Team',
    'description' => 'Contact ConnectX to inquire about partnerships, sponsorships, creator collaborations, or any questions about our global creator ecosystem. Email us at youngchanakyaconnect@gmail.com.',
    'keywords'    => 'contact ConnectX, ConnectX email, ConnectX partnership inquiry, reach ConnectX, Young Chanakya contact, creator platform contact',
    'image'       => asset('images/assets/ogg.png'),
    'type'        => 'website',
    'robots'      => 'index, follow',
];
@endphp

@extends('layout.app')

@push('seo')
{{-- ── Contact Page: ContactPage + LocalBusiness JSON-LD ─── --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "@id": "https://connectx.youngchanakya.com/contact#webpage",
    "url": "https://connectx.youngchanakya.com/contact",
    "name": "Contact ConnectX — Get in Touch",
    "description": "Contact ConnectX for partnership, sponsorship, and creator collaboration inquiries.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "mainEntity": {
        "@type": "Organization",
        "name": "ConnectX by Young Chanakya",
        "url": "https://connectx.youngchanakya.com/",
        "email": "youngchanakyaconnect@gmail.com",
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "contactType": "customer service",
                "email": "youngchanakyaconnect@gmail.com",
                "availableLanguage": ["English", "Hindi"]
            },
            {
                "@type": "ContactPoint",
                "contactType": "sales",
                "email": "youngchanakyaconnect@gmail.com",
                "contactOption": "TollFree",
                "availableLanguage": ["English", "Hindi"]
            }
        ]
    }
}
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
@endpush

@section('content')

<style>

.hero-heading {
    color: #ffffff !important;
    position: relative;
}

.hero-heading img {
    filter: brightness(0) invert(1);
}

/* ==========================================
   CONTACT PAGE — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Inner Banner ---- */
@media (max-width: 991px) {
    .inner-banner-one {
        padding-top: 160px !important;
        padding-bottom: 60px !important;
    }
    .inner-banner-one .hero-heading {
        font-size: 36px;
    }
    .inner-banner-one .col-xl-4 {
        margin-top: 20px;
    }
    .inner-banner-one .col-xl-4 p {
        margin-bottom: 20px !important;
    }
}

@media (max-width: 767px) {
    .inner-banner-one {
        padding-top: 130px !important;
        padding-bottom: 50px !important;
    }
    .inner-banner-one .hero-heading {
        font-size: 28px;
    }
    .inner-banner-one .col-xl-4 {
        margin-left: 0 !important;
    }
    .pager {
        flex-wrap: wrap;
    }
}

@media (max-width: 480px) {
    .inner-banner-one {
        padding-top: 110px !important;
        padding-bottom: 40px !important;
    }
    .inner-banner-one .hero-heading {
        font-size: 24px;
        line-height: 1.3;
    }
}

/* ---- Contact Info Blocks ---- */
@media (max-width: 767px) {
    .contact-us-section {
        padding-top: 60px !important;
    }
    .address-block-one {
        padding: 0 10px;
    }
    .address-block-one .title {
        font-size: 18px;
    }
    .address-block-one p {
        font-size: 14px;
    }
    .address-block-one .webaddress {
        font-size: 13px;
        word-break: break-all;
    }
    .call {
        font-size: 18px !important;
    }
}

@media (max-width: 480px) {
    .address-block-one .icon {
        width: 60px !important;
        height: 60px !important;
    }
    .address-block-one .icon img {
        width: 28px;
    }
}

/* ---- Contact Form Section ---- */
@media (max-width: 991px) {
    .bg-wrapper.light-bg.mt-80 {
        margin-top: 40px !important;
    }
    .bg-wrapper.light-bg .col-lg-5 {
        padding: 40px 30px 0;
    }
    .bg-wrapper.light-bg .col-lg-7 {
        padding: 30px;
    }
    .form-style-one.ps-xl-5 {
        padding-left: 0 !important;
    }
    .title-one h2 {
        font-size: 26px;
    }
}

@media (max-width: 767px) {
    .bg-wrapper.light-bg .col-lg-5 {
        padding: 30px 20px 0;
    }
    .bg-wrapper.light-bg .col-lg-7 {
        padding: 20px;
    }
    .title-one h2 {
        font-size: 22px;
    }
    .btn-four {
        font-size: 15px;
        padding: 14px 20px;
    }
}

@media (max-width: 480px) {
    .bg-wrapper.light-bg .col-lg-5 {
        padding: 20px 14px 0;
    }
    .bg-wrapper.light-bg .col-lg-7 {
        padding: 14px;
    }
    .title-one h2 {
        font-size: 20px;
    }
}

/* ---- Map Section ---- */
@media (max-width: 767px) {
    .map-banner {
        margin-top: 50px !important;
    }
    .map-banner .gmap_canvas {
        height: 280px !important;
    }
    .gmap_iframe {
        height: 280px !important;
    }
}

@media (max-width: 480px) {
    .map-banner .gmap_canvas {
        height: 220px !important;
    }
    .gmap_iframe {
        height: 220px !important;
    }
}

/* ---- Newsletter Section ---- */
@media (max-width: 991px) {
    .newsletter-banner {
        margin-top: 30px;
    }
    .newsletter-banner .main-wrapper {
        padding: 30px 0;
    }
    .newsletter-banner h2 {
        font-size: 28px;
    }
    .newsletter-banner .col-lg-6:last-child {
        margin-top: 20px;
    }
}

@media (max-width: 767px) {
    .newsletter-banner form .d-flex {
        flex-direction: column;
        gap: 12px;
    }
    .newsletter-banner form input[type="email"] {
        width: 100%;
        border-radius: 12px;
    }
    .newsletter-banner form button {
        align-self: flex-end;
    }
    .newsletter-banner h2 {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    .newsletter-banner h2 {
        font-size: 20px;
    }
    .newsletter-banner p.text-lg {
        font-size: 14px;
    }
}
	</style>
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


		

		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>



	@endsection