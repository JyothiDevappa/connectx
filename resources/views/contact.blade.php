@php
/**
 * Contact Page SEO Data
 */
$seo = [
    'title'       => 'Contact Young Chanakya X — Get in Touch with Our Team',
    'description' => 'Contact Young Chanakya X to inquire about partnerships, sponsorships, creator collaborations, or any questions about our global creator ecosystem. Email us at youngchanakyaconnect@gmail.com.',
    'keywords'    => 'contact Young Chanakya X, Young Chanakya X email, Young Chanakya X partnership inquiry, reach Young Chanakya X, Young Chanakya contact, creator platform contact',
    'image'       => asset('images/assets/ogg.png'),
    'type'        => 'website',
    'robots'      => 'index, follow',
];
@endphp

@extends('layout.app')

@push('seo')
{{-- ── Contact Page: ContactPage + LocalBusiness JSON-LD ─── --}}
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "@id": "https://connectx.youngchanakya.com/contact#webpage",
    "url": "https://connectx.youngchanakya.com/contact",
    "name": "Contact Young Chanakya X — Get in Touch",
    "description": "Contact Young Chanakya X for partnership, sponsorship, and creator collaboration inquiries.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "mainEntity": {
        "@type": "Organization",
        "name": "Young Chanakya X",
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
@endverbatim
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

/* ==========================================
   THEME STYLE & COLOR BALANCE CUSTOMIZATIONS
   ========================================== */

.inner-banner-one {
    background-image: linear-gradient(135deg, rgba(12, 58, 48, 0.9) 0%, rgba(7, 31, 26, 0.95) 100%), 
                      url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?auto=format&fit=crop&q=80&w=1920') !important;
    background-size: cover !important;
    background-position: center !important;
    position: relative;
}

.inner-banner-one::before,
.inner-banner-one::after {
    display: none !important;
}

.inner-banner-one .hero-heading {
    font-size: clamp(36px, 5vw, 56px) !important;
    font-weight: 800 !important;
    line-height: 1.15 !important;
    letter-spacing: -2px !important;
    background: linear-gradient(135deg, #ffffff 40%, #ffd2b1 100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    padding: 0 !important;
    margin: 0 !important;
}

.inner-banner-one p {
    color: rgba(255, 255, 255, 0.9) !important;
    font-size: 1.1rem !important;
    line-height: 1.6 !important;
}

.inner-banner-one .pager {
    border-bottom: 1px solid rgba(255, 210, 177, 0.25) !important;
    padding-bottom: 4px !important;
}

.inner-banner-one .pager li {
    color: rgba(255, 255, 255, 0.6) !important;
    font-weight: 600 !important;
}

.inner-banner-one .pager li a {
    color: rgba(255, 255, 255, 0.8) !important;
    font-weight: 600 !important;
    text-decoration: none !important;
    transition: color 0.3s ease !important;
}

.inner-banner-one .pager li a:hover {
    color: #ffd2b1 !important;
}

.inner-banner-one .pager li:last-child {
    color: #ffd2b1 !important;
}

/* Custom Form Submit Button */
.form-style-one .btn-four {
    background-color: #ffd2b1 !important;
    color: #0c3a30 !important;
    border: 1px solid #ffd2b1 !important;
    border-radius: 50px !important; /* Fully rounded pill shape like other page buttons */
    height: 58px !important;
    line-height: 56px !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 8px 20px rgba(255, 210, 177, 0.15) !important;
    cursor: pointer !important;
}

.form-style-one .btn-four:hover {
    background-color: #0c3a30 !important; /* Invert green and peach on hover */
    color: #ffd2b1 !important;
    border-color: #0c3a30 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 12px 24px rgba(12, 58, 48, 0.2) !important;
}

/* Form inputs border adjustments */
.form-style-one .input-group-meta input:focus,
.form-style-one .input-group-meta textarea:focus {
    border: 1px solid #ffd2b1 !important;
    box-shadow: 0 0 0 3px rgba(255, 210, 177, 0.15) !important;
    outline: none !important;
}

.form-style-one .input-group-meta label {
    font-weight: 600 !important;
    color: #0c3a30 !important;
}

/* Theme-specific adjustments for Address/Contact Info Blocks */
.address-block-one .icon {
    background-color: #0c3a30 !important;
    border: 2px solid rgba(255, 210, 177, 0.4) !important;
    transition: transform 0.3s ease, border-color 0.3s ease !important;
}

.address-block-one:hover .icon {
    transform: translateY(-3px) !important;
    border-color: #ffd2b1 !important;
}

.address-block-one .title {
    font-weight: 700 !important;
    color: #0c3a30 !important;
}

.address-block-one p .call,
.address-block-one p .webaddress {
    color: #0c3a30 !important;
    font-weight: 600 !important;
    transition: color 0.3s ease !important;
    text-decoration: none !important;
}

.address-block-one p .call:hover,
.address-block-one p .webaddress:hover {
    color: #e8a876 !important;
    text-decoration: underline !important;
}
	</style>
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h1 class="hero-heading d-inline-block position-relative">Contact us for inquiries <img src="images/shape/shape_33.html" alt=""></h1>
					</div>
                    <div class="col-xl-4 col-lg-5 ms-auto">
                        <p class="text-white text-lg mb-70 lg-mb-40">Get our all info and also can message us directly from here</p>
                        <ul class="style-none d-inline-flex pager">
                            <li><a href="{{ url('/') }}">Home</a></li>
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




	

		

		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>



	@endsection
