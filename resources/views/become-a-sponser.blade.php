@php
/**
 * Become a Sponsor Page SEO Data
 */
$seo = [
    'title'       => 'Become a Sponsor — Community & Sponsorship Opportunities | ConnectX',
    'description' => 'Sponsor ConnectX events and creator programs to amplify your brand reach. Access title sponsorships, event sponsorships, community sponsorships, and creator ecosystem packages.',
    'keywords'    => 'ConnectX sponsorship, sponsor ConnectX, event sponsorship India, brand visibility creator events, community sponsor Young Chanakya, creator platform sponsorship',
    'image'       => asset('images/assets/ogg.png'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
{{-- ── Sponsor Page: Service Schema.org JSON-LD ─── --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "ConnectX Sponsorship Program",
    "url": "https://connectx.youngchanakya.com/become-a-sponser",
    "description": "Sponsor ConnectX events and creator programs to amplify your brand reach. Access title, event, community, and ecosystem sponsorship packages.",
    "provider": {
        "@type": "Organization",
        "name": "ConnectX by Young Chanakya",
        "url": "https://connectx.youngchanakya.com/"
    },
    "serviceType": "Event & Creator Ecosystem Sponsorship",
    "areaServed": {
        "@type": "Country",
        "name": "India"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Sponsorship Packages",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Title Sponsorship"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Event Sponsorship"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Community Sponsorship"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Creator Ecosystem Sponsorship"}}
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

/* =========================================
   SPONSOR SECTION
========================================= */

.sponsor-contact-section{
    position: relative;
    padding: 180px 0 100px;
    background: #f8f6f2;
    overflow: hidden;
}

@media (max-width: 991px){
    .sponsor-contact-section{
        padding: 140px 0 70px;
    }
}

.sponsor-content h1{
    font-size: 52px;
    line-height: 1.15em;
    font-weight: 700;
    color: #000;
    margin-bottom: 25px;
    letter-spacing: -1px;
}

.sponsor-content p{
    font-size: 16px;
    line-height: 1.9em;
    color: #555;
    margin-bottom: 0;
}

@media (max-width: 991px){
    .sponsor-content{
        margin-bottom: 40px;
    }

    .sponsor-content h1{
        font-size: 38px;
        line-height: 1.25em;
    }
}

@media (max-width: 576px){
    .sponsor-content h1{
        font-size: 30px;
    }
}

/* FORM BOX */

.sponsor-form-box{
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 60px rgba(0,0,0,0.08);
    position: relative;
}

@media (max-width: 576px){
    .sponsor-form-box{
        padding: 25px;
    }
}

/* INPUTS */

.sponsor-form-box .form-control,
.sponsor-form-box select{
    height: 58px;
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 0 18px;
    font-size: 15px;
    color: #000;
    box-shadow: none;
    transition: all .3s ease;
    background: #fff;
}

.sponsor-form-box textarea.form-control{
    height: 130px;
    padding-top: 15px;
}

.sponsor-form-box .form-control:focus,
.sponsor-form-box select:focus{
    border-color: #0c3a30;
    box-shadow: 0 0 0 3px rgba(12,58,48,0.12);
}

/* BUTTON */

.btn-sponsor-submit{
    width: 100%;
    height: 58px;
    border: none;
    border-radius: 12px;
    background: #19352d;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    transition: all .3s ease;
}

.btn-sponsor-submit:hover{
    background: #071f1a;
    color: #fff;
}

/* OPTIONAL SHAPE */

.sponsor-contact-section::before{
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    background: rgba(118,88,59,0.05);
    border-radius: 50%;
    top: -200px;
    right: -150px;
}






/* sponser section */
/* ======================
SPONSOR CARDS
====================== */

.sponsor-category-section{
    background:#fff;
}

.sponsor-card{
    background:#ffffff;
    padding:40px 30px;
    border-radius:25px;
    height:100%;

    border:1px solid #e8e8e8;

    box-shadow:0 10px 30px rgba(0,0,0,.05);
}

/* removed hover */

.sponsor-card .icon{
    width:75px;
    height:75px;

    border-radius:20px;

    background: #19352d;

    color:#fff;

    font-size:28px;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:25px;
}

.sponsor-card h4{
    color:#000;
    font-size:24px;
    font-weight:700;
    margin-bottom:15px;
}

.sponsor-card p{
    color:#555;
    line-height:1.8;
    margin-bottom:20px;
}

.sponsor-card ul{
    padding:0;
    margin:0;
    list-style:none;
}

.sponsor-card ul li{
    position:relative;

    padding-left:30px;

    margin-bottom:12px;

    color:#222;

    font-size:15px;
}

.sponsor-card ul li:before{
    content:"✓";

    position:absolute;

    left:0;
    top:2px;

    width:18px;
    height:18px;

    background: #0c3a30;

    border-radius:50%;

    color:#fff;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:10px;
}



/* CTA BUTTON */

.sponsor-cta{
    margin-top:35px;
}

.btn-become-sponsor{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding:16px 34px;

    background: #19352d;

    color:#fff;

    border-radius:14px;

    font-size:16px;
    font-weight:600;

    text-decoration:none;

    transition:.3s ease;

    border:1px solid #19352d;
}

.btn-become-sponsor:hover{
    background:transparent;

    color:#ffd2b1;

    transform:translateY(-3px);
}

/* smooth scroll */

html{
    scroll-behavior:smooth;
}
/* second section  */
/* ==========================
WHY CONNECTX SECTION
========================== */

.connectx-benefits-section{
    background:#fff;
}

.connectx-benefits-section .sc-title{
    color:#000;
}

.connectx-benefits-section .main-title{
    color:#000;
}

.connectx-benefits-section p{
    color:#666;
}

.benefit-card{
    background:#fff;

    padding:35px;

    height:100%;

    border-radius:24px;

    border:1px solid #ececec;

    box-shadow:0 8px 25px rgba(0,0,0,.04);
}

.icon-box{
    width:70px;
    height:70px;

    border-radius:18px;

    background: #19352d;

    color:#fff;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:24px;

    margin-bottom:22px;
}

.benefit-card h4{
    color:#000;

    font-size:22px;

    font-weight:700;

    margin-bottom:15px;
}

.benefit-card p{
    color:#666;

    line-height:1.8;

    margin:0;
}



/* =============================================
   CONNECTX BRAND SECTION — OVERRIDES
   ============================================= */

/* Override global bg image with our professional conference photo */
.connectx-brand-section.fancy-banner-seven .bg-wrapper {
    background: url('../images/media/here-is-my-colleague.jpg') no-repeat center center !important;
    background-size: cover !important;
    min-height: 680px;
    position: relative;
}

/* Strong dark overlay so all text is crisp and readable */
.connectx-brand-section.fancy-banner-seven .bg-wrapper::before,
.connectx-brand-section.fancy-banner-seven .bg-wrapper::after {
    content: '' !important;
    position: absolute !important;
    inset: 0 !important;
    width: 100% !important;
    height: 100% !important;
    transform: none !important;
    z-index: 0 !important;
}

.connectx-brand-section.fancy-banner-seven .bg-wrapper::before {
    background: rgba(0, 0, 0, 0.70) !important;
}

.connectx-brand-section.fancy-banner-seven .bg-wrapper::after {
    background: rgba(0, 0, 0, 0.25) !important;
}

/* Ensure z-index stacking works for content */
.connectx-brand-section .bg-wrapper .container {
    position: relative;
    z-index: 2;
}

/* ---- Left heading block ---- */
.connectx-brand-section .brand-tag {
    display: inline-block;
    background: rgba(118,88,59,0.30);
    border: 1px solid rgba(118,88,59,0.60);
    color: #e8c89a;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    padding: 6px 18px;
    border-radius: 30px;
    margin-bottom: 22px;
}

.connectx-brand-section .brand-heading {
    font-size: clamp(30px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -1px;
    color: #ffffff;
    margin-bottom: 20px;
}

.connectx-brand-section .brand-heading span {
    color: #e8c89a;
}

.connectx-brand-section .brand-desc {
    font-size: 17px;
    line-height: 1.85;
    color: rgba(255,255,255,0.80);
    margin-bottom: 36px;
    max-width: 480px;
}

/* CTA button for brand section */
.btn-brand-explore {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 36px;
    background: #0c3a30;
    color: #ffd2b1;
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    border: 2px solid #0c3a30;
    transition: all .3s ease;
    letter-spacing: 0.3px;
}

.btn-brand-explore i {
    font-size: 14px;
    transition: transform .3s ease;
}

.btn-brand-explore:hover {
    background: transparent;
    color: #ffd2b1;
    border-color: #ffd2b1;
}

.btn-brand-explore:hover i {
    transform: translateX(4px);
}

/* ---- Points list — high specificity to override global fancy-banner-seven li styles ---- */
.connectx-brand-section .bg-wrapper .connectx-points,
.connectx-points {
    padding-left: 0;
    margin: 0;
    list-style: none;
}

/* Override the white-card style from style.min.css for fancy-banner-seven .bg-wrapper li */
.connectx-brand-section .bg-wrapper .connectx-points li,
.connectx-brand-section.fancy-banner-seven .bg-wrapper li.connectx-points-item,
.connectx-points li {
    position: relative !important;
    color: #ffffff !important;
    font-size: 17px !important;
    font-weight: 500 !important;
    line-height: 1.5 !important;
    padding: 18px 20px 18px 68px !important;
    margin-bottom: 10px !important;
    border-radius: 14px !important;
    background: rgba(255,255,255,0.08) !important;
    border: 1px solid rgba(255,255,255,0.13) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
    transition: background .25s ease, border-color .25s ease !important;
}

.connectx-brand-section .bg-wrapper .connectx-points li:hover,
.connectx-points li:hover {
    background: rgba(255,255,255,0.14) !important;
    border-color: rgba(232,200,154,0.40) !important;
}

.connectx-brand-section .bg-wrapper .connectx-points li:last-child,
.connectx-points li:last-child {
    margin-bottom: 0 !important;
    border-bottom: 1px solid rgba(255,255,255,0.13) !important;
}

/* Override the orange/peach bullet from style.min.css fancy-banner-seven .bg-wrapper li:before */
.connectx-brand-section .bg-wrapper .connectx-points li::before,
.connectx-brand-section.fancy-banner-seven .bg-wrapper .connectx-points li::before,
.connectx-points li::before {
    content: "✓" !important;
    position: absolute !important;
    left: 16px !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    width: 36px !important;
    height: 36px !important;
    background: #0c3a30 !important;
    border: 2px solid rgba(232,200,154,0.50) !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #e8c89a !important;
    font-size: 15px !important;
    font-weight: 800 !important;
    font-family: inherit !important;
}

/* Override the after pseudo-element (check icon overlay from global) */
.connectx-brand-section .bg-wrapper .connectx-points li::after,
.connectx-brand-section.fancy-banner-seven .bg-wrapper .connectx-points li::after,
.connectx-points li::after {
    display: none !important;
}

@media(max-width:991px){
    .connectx-brand-section.fancy-banner-seven .bg-wrapper {
        min-height: auto;
    }
    .connectx-brand-section .brand-desc {
        max-width: 100%;
    }
    .connectx-brand-section .bg-wrapper .connectx-points li,
    .connectx-points li {
        font-size: 15px !important;
        padding-left: 60px !important;
    }
}

@media(max-width:767px){
    .connectx-brand-section .brand-heading {
        font-size: 26px;
    }
    .connectx-brand-section .bg-wrapper .connectx-points li,
    .connectx-points li {
        font-size: 14px !important;
        padding: 14px 16px 14px 56px !important;
    }
    .connectx-brand-section .bg-wrapper .connectx-points li::before,
    .connectx-points li::before {
        width: 30px !important;
        height: 30px !important;
        font-size: 13px !important;
        left: 14px !important;
    }
}

/* *4. Sponsorship Categories* */

.title-style-one .sc-title{
    color:#000;
}

.title-style-one .main-title{
    font-size: clamp(34px, 4vw, 56px);
    font-weight: 900;
    line-height: 1.15;
    letter-spacing: -2px;
    color: #0c3a30;
    margin-bottom: 24px;
}
/* ==========================
CTA SECTION
========================== */

.connectx-cta-section{
    background:#fff;
}

.cta-wrapper{

    background:#f8f6f3;

    padding:70px;

    border-radius:35px;

    border:1px solid #ececec;
}

.cta-content .sc-title{
    color:#0c3a30;

    margin-bottom:15px;

    font-weight:700;
}

.cta-content h2{

    color:#000;

    font-size:48px;

    font-weight:700;

    line-height:1.3;

    margin-bottom:35px;
}

.cta-points{

    display:flex;

    flex-wrap:wrap;

    gap:18px;
}

.point{

    display:flex;

    align-items:center;

    gap:12px;

    background:#fff;

    padding:14px 22px;

    border-radius:50px;

    border:1px solid #e7e7e7;
}

.point i{

    width:28px;

    height:28px;

    background:#0c3a30;

    color:#fff;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:12px;
}

.point span{
    color:#111;
    font-weight:600;
}

.theme-btn-one{
    margin-top:20px;
}


@media(max-width:991px){

.cta-wrapper{
    padding:45px;
}

.cta-content h2{
    font-size:34px;
}

.text-lg-end{
    margin-top:35px;
}

}



/* ==========================================
   BECOME A SPONSOR — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Hero / Sponsor Contact Section ---- */
@media (max-width: 991px) {
    .sponsor-contact-section {
        padding: 130px 0 70px;
    }
    .sponsor-content {
        margin-bottom: 40px;
        text-align: center;
    }
    .sponsor-content h1 {
        font-size: 36px;
    }
    .sponsor-cta {
        display: flex;
        justify-content: center;
    }
}

@media (max-width: 767px) {
    .sponsor-contact-section {
        padding: 110px 0 60px;
    }
    .sponsor-content h1 {
        font-size: 28px;
    }
    .sponsor-form-box {
        padding: 28px 20px;
    }
}

@media (max-width: 480px) {
    .sponsor-contact-section {
        padding: 100px 0 50px;
    }
    .sponsor-content h1 {
        font-size: 24px;
        letter-spacing: -0.5px;
    }
    .sponsor-form-box {
        padding: 20px 14px;
    }
    .btn-sponsor-submit {
        height: 52px;
        font-size: 15px;
    }
    .btn-become-sponsor {
        padding: 13px 24px;
        font-size: 14px;
    }
}

/* ---- Why ConnectX (Benefits) Section ---- */
@media (max-width: 991px) {
    .connectx-benefits-section.pt-120 {
        padding-top: 70px;
    }
    .connectx-benefits-section.pb-120 {
        padding-bottom: 70px;
    }
    .benefit-card {
        padding: 28px;
    }
}

@media (max-width: 767px) {
    .connectx-benefits-section .main-title {
        font-size: 28px;
    }
    .benefit-card {
        padding: 24px 20px;
    }
    .benefit-card h4 {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    .connectx-benefits-section .main-title {
        font-size: 22px;
    }
    .benefit-card {
        padding: 20px 16px;
    }
    .icon-box {
        width: 56px;
        height: 56px;
        font-size: 20px;
        margin-bottom: 16px;
    }
}

/* ---- Brand Presence Section ---- */
@media (max-width: 991px) {
    .connectx-brand-section .bg-wrapper {
        min-height: auto !important;
        padding: 60px 20px !important;
    }
    .connectx-points li {
        font-size: 16px;
        padding-left: 55px;
    }
    .connectx-brand-section .title-two h2 {
        font-size: 28px;
    }
}

@media (max-width: 767px) {
    .connectx-brand-section .bg-wrapper {
        padding: 50px 16px !important;
    }
    .connectx-brand-section .title-two h2 {
        font-size: 24px;
    }
    .connectx-brand-section .title-two p {
        font-size: 14px;
    }
    .connectx-points li {
        font-size: 15px;
        padding-left: 52px;
        padding-top: 14px;
        padding-bottom: 14px;
    }
    .connectx-points li::before {
        width: 36px;
        height: 36px;
        font-size: 16px;
        top: 12px;
    }
    .connectx-brand-section .col-lg-5 {
        margin-top: 30px;
    }
}

@media (max-width: 480px) {
    .connectx-brand-section .title-two h2 {
        font-size: 21px;
    }
    .connectx-points li {
        font-size: 14px;
        padding-left: 48px;
    }
    .connectx-points li::before {
        width: 30px;
        height: 30px;
        font-size: 14px;
    }
}

/* ---- Sponsorship Categories Section ---- */
@media (max-width: 991px) {
    .sponsor-category-section.pt-120 {
        padding-top: 70px;
    }
    .sponsor-category-section.pb-120 {
        padding-bottom: 70px;
    }
    .sponsor-card {
        padding: 30px 24px;
    }
    .title-style-one .main-title {
        letter-spacing: -1px;
    }
}

@media (max-width: 767px) {
    .title-style-one .main-title {
        font-size: 26px;
        letter-spacing: -0.5px;
    }
    .sponsor-card {
        padding: 24px 20px;
    }
    .sponsor-card h4 {
        font-size: 20px;
    }
    .sponsor-card .icon {
        width: 60px;
        height: 60px;
        font-size: 24px;
        margin-bottom: 18px;
    }
}

@media (max-width: 480px) {
    .title-style-one .main-title {
        font-size: 22px;
    }
    .sponsor-card {
        padding: 20px 16px;
    }
    .sponsor-card h4 {
        font-size: 18px;
    }
}

/* ---- CTA / text-feature-five Section ---- */
@media (max-width: 991px) {
    .text-feature-five.mt-150 {
        margin-top: 80px !important;
    }
    .connectx-cta-bg .text-wrapper {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }
    .connectx-cta-bg .media-wrapper {
        min-height: 260px;
    }
    .cta-wrapper {
        padding: 40px;
    }
    .cta-content h2 {
        font-size: 30px;
    }
}

@media (max-width: 767px) {
    .text-feature-five.mt-150 {
        margin-top: 60px !important;
    }
    .connectx-cta-bg .text-wrapper {
        padding: 28px 20px !important;
    }
    .connectx-cta-bg .col-lg-6.order-lg-first {
        order: 2 !important;
    }
    .connectx-cta-bg .col-lg-6.order-lg-last {
        order: 1 !important;
    }
    .connectx-cta-bg .title-one h2.text-dark {
        font-size: 24px;
    }
    .cta-wrapper {
        padding: 30px 20px;
    }
    .cta-content h2 {
        font-size: 26px;
    }
    .cta-points {
        gap: 12px;
    }
    .point {
        padding: 10px 16px;
        font-size: 14px;
    }
    .btn-eleven {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .connectx-cta-bg .title-one h2.text-dark {
        font-size: 20px;
    }
    .cta-content h2 {
        font-size: 22px;
    }
    .cta-wrapper {
        padding: 24px 14px;
    }
    .connectx-list li {
        font-size: 14px;
    }
}

/* ---- Checklist Style (Speaker page matching layout) ---- */
.checklist-style {
    padding: 0;
    margin: 25px 0 0 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
    list-style: none;
}

.checklist-style li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 500;
    color: #10221c;
}

.checklist-style .check-icon {
    width: 24px;
    height: 24px;
    background: #0c3a30;
    color: #ffffff;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .checklist-style {
        display: inline-flex;
        text-align: left;
        align-items: flex-start;
        margin: 25px auto 0 auto;
    }
}

@media (max-width: 767px) {
    .checklist-style li {
        font-size: 15px;
    }
}

/* fifth section */


</style>


<section class="sponsor-contact-section">
    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">

                <div class="sponsor-content wow fadeInUp d-flex flex-column">

                    <h1>
                        Partner in Shaping India’s <br>
                        Next Business Era
                    </h1>

                    <p>
                        Associate your brand with India’s next wave of changemakers,
                        entrepreneurs, and innovation-driven programs — while gaining
                        visibility, influence, and meaningful engagement with
                        future-ready talent and ecosystems.
                    </p>

                    <ul class="checklist-style style-none mb-30">
                        <li>
                            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Strategic Entrepreneurial Guidance & Growth Support</span>
                        </li>
                        <li>
                            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Networking with Industry Experts & Global Leaders</span>
                        </li>
                        <li>
                            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                            <span>Access to attend premium startup & leadership events</span>
                        </li>
                    </ul>

                    <div class="sponsor-cta">
                        <a href="#sponsor-form" class="btn-become-sponsor">
                            Become a Sponsor
                        </a>
                    </div>
                </div>

            </div>


            <!-- RIGHT FORM -->
            <div class="col-lg-6">

                <div class="sponsor-form-box wow fadeInUp">

                    <form action="#" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Full Name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="Email Address">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                       class="form-control"
                                       name="phone"
                                       placeholder="Phone / WhatsApp">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                       class="form-control"
                                       name="company"
                                       placeholder="Company Name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                       class="form-control"
                                       name="designation"
                                       placeholder="Designation / Role">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="url"
                                       class="form-control"
                                       name="linkedin"
                                       placeholder="LinkedIn Profile">
                            </div>

                            <div class="col-12 mb-3">
                                <select class="form-control" name="sponsorship_level">

                                    <option selected disabled>
                                        -- Sponsor Type --
                                    </option>

                                    <option>Sponsor</option>
                                    <option>Co-Sponsor</option>
                                    <option>Powered by Sponsor</option>
                                    <option>Associate Sponsor</option>
                                    <option>Supporting Sponsor</option>
                                    <option>Education Sponsor</option>
                                    <option>Innovation Sponsor</option>
                                    <option>Hospitality Sponsor</option>
                                    <option>Merchandise Sponsor</option>
                                    <option>Logistics Sponsor</option>
                                    <option>Financial Sponsor</option>
                                    <option>Wellness Sponsor</option>
                                    <option>Career Sponsor</option>
                                    <option>Green Sponsor</option>
                                    <option>Networking Sponsor</option>

                                </select>
                            </div>

                            <div class="col-12 mb-4">
                                <input type="url"
                                       class="form-control"
                                       name="website"
                                       placeholder="Website URL (Optional)">
                            </div>

                            <div class="col-12">
                                <button type="submit"
                                        class="btn-sponsor-submit">
                                    Submit
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- ===================================
WHY CONNECT WITH CONNECTX
=================================== -->
<section class="connectx-benefits-section pt-120 pb-120">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-80">

            <div class="title-style-one">

                <!-- <div class="sc-title text-uppercase">
                    WHY CONNECT WITH CONNECTX
                </div> -->

                <h2 class="main-title fw-700">
Why Connect With ConnectX                </h2>

                <p class="mt-25">
                   Position your brand within a structured creator ecosystem designed for consistent visibility, engagement, and collaboration
                </p>

            </div>

        </div>

        <div class="row gx-4 gy-4">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-eye"></i>
                    </div>

                    <h4>Consistent Visibility</h4>

                    <p>
                        Maintain ongoing brand presence across podcasts,
                        events, and digital content formats.
                    </p>

                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>

                    <h4>Curated Creator Access</h4>

                    <p>
                        Connect directly with selected influencers,
                        speakers, and creators across industries.
                    </p>

                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-bullhorn"></i>
                    </div>

                    <h4>Multi-Channel Exposure</h4>

                    <p>
                        Extend reach through podcasts, meetups,
                        roundtables, and digital campaigns.
                    </p>

                </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-comments"></i>
                    </div>

                    <h4>Active Engagement</h4>

                    <p>
                        Participate in collaborations,
                        creator interactions, and discussions.
                    </p>

                </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-globe"></i>
                    </div>

                    <h4>Scalable Presence</h4>

                    <p>
                        Expand visibility through an evolving
                        and growing global creator network.
                    </p>

                </div>
            </div>

            <!-- 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-chart-line"></i>
                    </div>

                    <h4>Structured Opportunities</h4>

                    <p>
                        Leverage recurring formats for measurable
                        and predictable brand exposure.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>



<!-- third section — Brand Presence -->
<section class="fancy-banner-seven box-layout connectx-brand-section pt-120 lg-pt-80">

    <div class="bg-wrapper border-40 position-relative z-1 overflow-hidden pt-120 pb-120 lg-pt-80 lg-pb-80">

        <div class="container position-relative" style="z-index:2;">

            <div class="row align-items-center gy-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">

                    <span class="brand-tag">Sponsorship Exposure</span>

                    <h2 class="brand-heading">
                        Your Brand, Everywhere<br>
                        <span>ConnectX Shows Up</span>
                    </h2>

                    <p class="brand-desc">
                        As a ConnectX sponsor, your brand is woven into every
                        high-impact format — from podcasts and digital campaigns
                        to live events, creator lounges, and award platforms.
                        Real visibility. Real reach. Real results.
                    </p>

                    <a href="#sponsor-form" class="btn-brand-explore">
                        Explore Sponsorship Packages
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

                <!-- RIGHT LIST -->
                <div class="col-lg-5 ms-auto">

                    <ul class="style-none connectx-points">

                        <li>Podcasts &amp; Video Content</li>

                        <li>Creator Lounges &amp; Networking Spaces</li>

                        <li>Meetups &amp; Roundtables</li>

                        <li>Awards &amp; Recognition Platforms</li>

                        <li>Digital Campaigns &amp; Collaborations</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
SPONSORSHIP CATEGORIES
========================= -->
<section class="sponsor-category-section pt-120 pb-120">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-70">
            <div class="title-style-one">
                <div class="sc-title text-uppercase">
                    Sponsorship Categories
                </div>

                <h2 class="main-title fw-700">
                    Choose a Sponsorship Level Based on <br>
                    Visibility & Collaboration Goals
                </h2>
            </div>
        </div>

        <div class="row gx-4 gy-4">

            <!-- MAIN SPONSOR -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-crown"></i>
                    </div>

                    <h4>Sponsor</h4>

                    <p>
                        Primary brand visibility across major ConnectX initiatives
                    </p>

                    <ul>
                        <li>Naming rights across flagship events</li>
                        <li>Highest logo visibility</li>
                        <li>Premium podcast positioning</li>
                        <li>Opening & closing mentions</li>
                        <li>Creator collaborations</li>
                    </ul>

                </div>
            </div>

            <!-- POWERED BY -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-bolt"></i>
                    </div>

                    <h4>Powered By Sponsor</h4>

                    <p>
                        Secondary headline branding with ecosystem presence
                    </p>

                    <ul>
                        <li>Powered By branding</li>
                        <li>Logo placement</li>
                        <li>Podcast integration</li>
                        <li>Campaign opportunities</li>
                        <li>Creator access</li>
                    </ul>

                </div>
            </div>

            <!-- CO SPONSOR -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>

                    <h4>Co-Sponsor</h4>

                    <p>
                        Supporting partner across shared initiatives
                    </p>

                    <ul>
                        <li>Shared event branding</li>
                        <li>Campaign participation</li>
                        <li>Content visibility</li>
                        <li>Networking access</li>
                        <li>Joint initiatives</li>
                    </ul>

                </div>
            </div>

            <!-- PLATINUM -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-gem"></i>
                    </div>

                    <h4>Platinum Sponsor</h4>

                    <p>
                        High-level presence across multiple formats
                    </p>

                    <ul>
                        <li>High visibility branding</li>
                        <li>Podcast integrations</li>
                        <li>Creator access</li>
                        <li>Networking sessions</li>
                        <li>Meetups & lounges</li>
                    </ul>

                </div>
            </div>

            <!-- GOLD -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-medal"></i>
                    </div>

                    <h4>Gold Sponsor</h4>

                    <p>
                        Strong visibility in selected events
                    </p>

                    <ul>
                        <li>Session branding</li>
                        <li>Campaign presence</li>
                        <li>Meetups</li>
                        <li>Networking access</li>
                        <li>Digital exposure</li>
                    </ul>

                </div>
            </div>

            <!-- SILVER -->
            <div class="col-lg-4 col-md-6">
                <div class="sponsor-card">

                    <div class="icon">
                        <i class="fas fa-award"></i>
                    </div>

                    <h4>Silver Sponsor</h4>

                    <p>
                        Focused exposure in specific programs
                    </p>

                    <ul>
                        <li>Program branding</li>
                        <li>Campaign participation</li>
                        <li>Target networking</li>
                        <li>Content visibility</li>
                        <li>Niche exposure</li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</section>





<div class="text-feature-five position-relative mt-150 lg-mt-80 pb-50">

    <div class="container">

        <div class="bg-wrapper connectx-cta-bg">

            <div class="row">

                <!-- CONTENT SIDE -->
                <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">

                    <div class="text-wrapper pt-60 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">

                        <div class="title-one">

                            <h2 class="text-dark">
                                Start Building Consistent <br>
                                Brand Visibility Through ConnectX
                            </h2>

                        </div>

                        <p class="text-lg text-dark mt-25 mb-35">

                            Grow alongside creators, content experiences,
                            networking formats and active community engagement.

                        </p>

                        <ul class="style-none connectx-list">

                            <li>Connect with creators</li>

                            <li>Build visibility through content</li>

                            <li>Participate in active engagement formats</li>

                        </ul>

                        <a href="#"
                           class="btn-eleven d-inline-flex align-items-center mt-40">

                            <span class="text">
                                Become a Sponsor Today
                            </span>

                            <div class="icon tran3s rounded-circle d-flex align-items-center">

                                <img src="images/icon/icon_27.svg"
                                     alt=""
                                     class="lazy-img">

                            </div>

                        </a>

                    </div>

                </div>

                <!-- IMAGE SIDE -->
                <div class="col-lg-6 d-flex order-lg-first">

                    <div class="media-wrapper w-100 d-flex align-items-center justify-content-center position-relative">

                        <img src="images/assets/screen_07.svg"
                             alt=""
                             class="lazy-img shapes screen_01">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection