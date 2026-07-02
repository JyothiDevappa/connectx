@php
/**
 * Contact Page SEO Data
 */
$seo = [
    'title'       => 'Contact Young Chanakya X — Get in Touch with Our Team',
    'description' => 'Contact Young Chanakya X to inquire about partnerships, sponsorships, creator collaborations, or any questions about our global creator ecosystem. Email us at youngchanakyaconnect@gmail.com.',
    'keywords'    => 'contact Young Chanakya X, Young Chanakya X email, Young Chanakya X partnership inquiry, reach Young Chanakya X, Young Chanakya contact, creator platform contact',
    'image'       => asset('images/assets/seo-share.jpg'),
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

.premium-hero-container {
    min-height: 75vh;
    background-image: linear-gradient(180deg, rgba(12, 58, 48, 0.55) 0%, #090d16 100%), 
                      url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2000');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.text-glow-headline {
    font-size: clamp(38px, 5.5vw, 72px);
    font-weight: 900;
    line-height: 1.2;
    padding-bottom: 15px;
    letter-spacing: -3px;
    background: linear-gradient(135deg, #ffffff 30%, #ffd2b1 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* ---- Premium Hero Section ---- */
@media (max-width: 991px) {
    .premium-hero-container {
        min-height: 65vh;
        background-attachment: scroll;
    }
    .premium-hero-container .container {
        padding-top: 150px;
        padding-bottom: 70px;
    }
    .text-glow-headline {
        font-size: clamp(32px, 5vw, 56px);
        letter-spacing: -2px;
    }
    .premium-hero-container p.fs-5 {
        font-size: 16px !important;
    }
}

@media (max-width: 767px) {
    .premium-hero-container {
        min-height: 55vh;
    }
    .premium-hero-container .container {
        padding-top: 130px;
        padding-bottom: 50px;
    }
    .text-glow-headline {
        font-size: clamp(26px, 7vw, 42px);
        letter-spacing: -1.5px;
        line-height: 1.25;
        padding-bottom: 10px;
    }
    .premium-hero-container p.fs-5 {
        font-size: 15px !important;
    }
    .premium-hero-container ul.style-none {
        flex-wrap: wrap;
        gap: 6px;
    }
}

@media (max-width: 480px) {
    .premium-hero-container {
        min-height: auto;
    }
    .premium-hero-container .container {
        padding-top: 110px;
        padding-bottom: 40px;
    }
    .text-glow-headline {
        font-size: 26px;
        letter-spacing: -1px;
    }
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
		<div class="premium-hero-container d-flex align-items-center position-relative">
			<div class="container pt-200 pb-100">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-10">
						
						<ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
							<li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
							<li class="text-white opacity-40">/</li>
							<li class="text-white" style="color: #ffd2b1 !important;">Contact Us</li>
						</ul>

						<h1 class="text-glow-headline mb-4">Let's build the future of influence together.</h1>
						<p class="fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
							Have questions about partnerships, sponsorships, or joining the ecosystem? Reach out and start a conversation.
						</p>
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
										<p>Tiruchengode, <br>India</p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_91.svg" alt="" class="lazy-img"></div>
										<h5 class="title">Contact Info</h5>
										<p>Give us a call at <br><a href="tel:8667205661" class="call text-lg fw-500">8667205661</a></p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="images/lazy.svg" data-src="images/icon/icon_92.svg" alt="" class="lazy-img"></div>
										<h5 class="title">Mail Us</h5>
										<p>Send a mail to<br><a href="mailto:youngchanakya.x@gmail.com" class="webaddress">youngchanakya.x@gmail.com</a></p>
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
                                    <form action="{{ route('contact.submit') }}" method="POST" id="contact-form" data-toggle="validator">
                                        @csrf
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
                                                <div class="input-group-meta form-group mb-40">
                                                    <label for="">Phone Number*</label>
                                                    <input type="text" placeholder="Phone Number*" name="phone" required="required" data-error="Phone number is required.">
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
