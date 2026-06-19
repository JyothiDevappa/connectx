@php
/**
 * About Page SEO Data
 */
$seo = [
    'title'       => 'About ConnectX — Our Vision, Mission & Creator Ecosystem Story',
    'description' => 'Learn about ConnectX by Young Chanakya — a premium global creator ecosystem built to connect influencers, podcasters, speakers, and brands. Our mission is structured, scalable influence for every creator.',
    'keywords'    => 'about ConnectX, Young Chanakya vision, creator ecosystem mission, ConnectX story, who is ConnectX, global creator platform, influencer community India',
    'image'       => asset('images/assets/ogg.png'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
{{-- ── About Page: AboutPage + Organization Schema.org JSON-LD ── --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "@id": "https://connectx.youngchanakya.com/about#webpage",
    "url": "https://connectx.youngchanakya.com/about",
    "name": "About ConnectX — Our Vision, Mission & Creator Ecosystem Story",
    "description": "Learn about ConnectX by Young Chanakya — a premium global creator ecosystem built to connect influencers, podcasters, speakers, and brands.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "about": {
        "@type": "Organization",
        "name": "ConnectX by Young Chanakya",
        "url": "https://connectx.youngchanakya.com/",
        "founder": {
            "@type": "Person",
            "name": "Young Chanakya",
            "jobTitle": "Founder & Visionary",
            "worksFor": {
                "@type": "Organization",
                "name": "ConnectX"
            }
        },
        "foundingDate": "2024",
        "description": "ConnectX is built to bring creators together in a structured ecosystem where they can connect, collaborate, and be seen.",
        "numberOfEmployees": {
            "@type": "QuantitativeValue",
            "minValue": 1
        }
    }
}
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endpush



@section('content')

<div class="about-hero">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow">About ConnectX</div>
                <h1>Creators, conversations, and confidence built for the next era.</h1>
                <p class="hero-copy">ConnectX is a premium digital ecosystem for creators, voices, and brands who want structured influence, real collaborations, and a stronger stage for stories.</p>
              
                <div class="about-hero-buttons">
    <a href="#partner" class="about-btn-1">Explore Our Ecosystem</a>
    <a href="#contact" class="about-btn-2">Partner With ConnectX</a>
</div>


                <div class="hero-pill-row">
                    <span class="hero-pill">Creator Growth</span>
                    <span class="hero-pill">Podcast Visibility</span>
                    <span class="hero-pill">Brand Collaboration</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <img class="hero-image" src="{{ asset('images/media/img_20.jpg') }}" alt="ConnectX premium experience">
                    <div class="hero-side-card">
                        <h5>Signature Initiative</h5>
                        <p>A creator-first platform designed to connect public voices, podcasts, and community events with trusted partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<!-- FOUNDER STATEMENT -->
<section class="founder-section">
  <div class="bg-text">ConnectX</div>
  <div class="founder-inner">
    <div class="section-label light">Founder Statement</div>
    <h2 class="founder-title">Why We Built This</h2>
    <span class="quote-mark">"</span>
    <p class="founder-quote">
      ConnectX is built to bring creators together in a structured ecosystem where they can <em>connect, collaborate, and be seen.</em> Our focus is simple — create spaces for real conversations, enable meaningful collaborations, and help creators grow their influence through content and community.
    </p>

    
 <div class="founder-byline">
    <div class="byline-avatar">
        <img src="{{ asset('images/media/founder.png') }}" alt="Young Chanakya">
    </div>

    <div class="byline-text">
        <div class="name">Young Chanakya</div>
        <div class="role">Founder & Visionary, ConnectX</div>
    </div>
</div>

  </div>
</section>


<div class="vm-section">
  <div class="vm-block vision-block">
    <div class="section-label dark">Our Direction</div>
    <h2 class="section-title dark">Vision</h2>
    <p class="body-text">To build one of the world's largest digital creator and influencer ecosystems, connecting voices across countries and industries, where influence is structured, scalable, and collaborative.</p>
    <ul class="check-list">
      <li>Global creator connectivity</li>
      <li>Collaboration across global ecosystems</li>
      <li>Cross-industry influence network</li>
      <li>Content-led ecosystem growth</li>
    </ul>
    <span class="vm-number">01</span>
  </div>
  <div class="vm-block mission-block">
    <div class="section-label light">Our Purpose</div>
    <h2 class="section-title light">Mission</h2>
    <p class="body-text">To create a platform where creators can consistently access opportunities to speak, collaborate, and grow their influence through structured digital experiences.</p>
    <ul class="check-list">
      <li>Enable creator-to-creator networking</li>
      <li>Provide stages through podcasts, lounges &amp; events</li>
      <li>Create visibility through content &amp; collaborations</li>
      <li>Connect communities, brands, and creators</li>
    </ul>
    <span class="vm-number">02</span>
  </div>
</div>


<div class="block-feature-ten position-relative mt-150 lg-mt-80 pb-100 lg-pb-60">

    <div class="container">

        <!-- TITLE -->
        <div class="row align-items-center">

            <div class="col-lg-8 wow fadeInUp" style="visibility: visible;">

                <div class="title-one mb-50 lg-mb-20">

                    <div class="upper-title">
                        ConnectX
                    </div>

                    <h2>
                        Our Core Values
                    </h2>

                </div>

            </div>

        </div>


        <!-- VALUES -->
        <div class="line-wrapper position-relative">

            <div class="row gx-lg-5">

                <!-- VALUE 1 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="images/icon/about.svg" alt="" class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Access Over Exclusivity
                            </h4>

                            <p class="m0">
                                We create access to meaningful opportunities, networks, and platforms.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 2 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="images/icon/about.svg" alt="" class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Content First
                            </h4>

                            <p class="m0">
                                Every interaction, event, and collaboration is designed to generate content and visibility.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 3 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="images/icon/about.svg" alt="" class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Collaboration Over Competition
                            </h4>

                            <p class="m0">
                                Growth happens faster when creators work together.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 4 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10 pt-25 lg-pt-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="images/icon/about.svg" alt="" class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Real Conversations
                            </h4>

                            <p class="m0">
                                We value authentic discussions over scripted narratives.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 5 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10 pt-25 lg-pt-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="images/icon/about.svg" alt="" class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Global Mindset
                            </h4>

                            <p class="m0">
                                ConnectX is built without geographic limitations.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- VALUE 6 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">

                    <div class="card-style-sixteen d-flex mt-60 lg-mt-40 mb-60 lg-mb-10 pt-25 lg-pt-10">

                        <div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center">

                            <img src="images/icon/about.svg" alt="" class="lazy-img">

                        </div>

                        <div class="text">

                            <h4 class="fw-bold mb-20 sm-mb-10">
                                Consistent Growth
                            </h4>

                            <p class="m0">
                                Opportunities are not one-time — they are continuous.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-bg-ring r1"></div>
    <div class="cta-bg-ring r2"></div>
    <div class="cta-bg-ring r3"></div>
    <div class="cta-inner">
      <div class="section-label light">Ready to Grow?</div>
      <h2 class="section-title light">Your Voice Deserves<br>a <span class="italic-accent">Bigger Stage</span></h2>
      <p class="cta-tagline">If you are a creator, influencer, speaker, or community builder — ConnectX is built for
        you.</p>
      <div class="cta-features">
        <span class="pill">Join the Ecosystem</span>
        <span class="pill">Access Creator Lounges</span>
        <span class="pill">Speak & Collaborate</span>
        <span class="pill">Build Beyond Platforms</span>
      </div>
      <button class="cta-btn">Join ConnectX</button>
    </div>
  </section>

  
@endsection

