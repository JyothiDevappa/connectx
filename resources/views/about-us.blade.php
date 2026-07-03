@php
/**
 * About Page SEO Data
 */
$seo = [
    'title'       => 'About Young Chanakya X — Our Vision, Mission & Creator Ecosystem Story',
    'description' => 'Learn about Young Chanakya X — a premium global creator ecosystem built to connect influencers, podcasters, speakers, and brands. Our mission is structured, scalable influence for every creator.',
    'keywords'    => 'about Young Chanakya X, Young Chanakya vision, creator ecosystem mission, Young Chanakya X story, who is Young Chanakya X, global creator platform, influencer community India',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "@id": "https://connectx.youngchanakya.com/about#webpage",
    "url": "https://connectx.youngchanakya.com/about",
    "name": "About Young Chanakya X — Our Vision, Mission & Creator Ecosystem Story",
    "description": "Learn about Young Chanakya X — a premium global creator ecosystem built to connect influencers, podcasters, speakers, and brands.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "about": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/",
        "founder": {
            "@type": "Person",
            "name": "Young Chanakya",
            "jobTitle": "Founder & Visionary",
            "worksFor": {
                "@type": "Organization",
                "name": "Young Chanakya X"
            }
        },
        "foundingDate": "2024",
        "description": "Young Chanakya X is built to bring creators together in a structured ecosystem where they can connect, collaborate, and be seen.",
        "numberOfEmployees": {
            "@type": "QuantitativeValue",
            "minValue": 1
        }
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<style>
    #hdr:not(.scrolled) .hamburger span {
        background: #0c3a30 !important;
    }
    .com-card {
        border-radius: 24px !important;
    }
    .com-btn {
        display: inline-block;
        padding: 12px 28px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        border-radius: 50px;
        text-decoration: none;
        margin-top: 24px;
        align-self: flex-start;
        transition: all 0.3s ease;
        text-align: center;
    }
    .com-btn-green {
        background-color: #0c3a30;
        color: #ffd2b1;
        border: 1px solid #0c3a30;
    }
    .com-btn-green:hover {
        background-color: #ffd2b1;
        color: #0c3a30;
        border-color: #ffd2b1;
    }
    .com-btn-peach {
        background-color: #ffd2b1;
        color: #0c3a30;
        border: 1px solid #ffd2b1;
    }
    .com-btn-peach:hover {
        background-color: #0c3a30;
        color: #ffd2b1;
        border-color: #0c3a30;
    }
</style>
@endpush



@section('content')

<div class="about-hero">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">About Young Chanakya X</div>
                <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">One Platform. Endless Possibilities.</h1>
                <p class="hero-copy">Young Chanakya X is a digital-first leadership and community platform where ambitious individuals come together to share stories, exchange knowledge, build meaningful relationships, and unlock real opportunities. We believe growth happens when people connect, learn, and collaborate through authentic experiences.</p>
              
                <div class="about-hero-buttons">
                    <a href="/become-a-sponser" class="about-btn-1">Become a Sponsor</a>
                    <a href="/become-a-partner" class="about-btn-2">Become a Partner</a>
                </div>


                {{-- <div class="hero-pill-row">
                    <span class="hero-pill">Creator Growth</span>
                    <span class="hero-pill">Podcast Visibility</span>
                    <span class="hero-pill">Brand Collaboration</span>
                </div> --}}
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <img class="hero-image" src="{{ asset('images/media/img_20.jpg') }}" alt="Young Chanakya X premium experience">
                    <div class="hero-side-card d-none d-lg-block">
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
  <div class="bg-text">Young Chanakya X</div>
  <div class="founder-inner">
    <div class="section-label light">Founder Statement</div>
    <h2 class="founder-title">Why We Built This</h2>
    <span class="quote-mark">"</span>
    <p class="founder-quote">
      Young Chanakya X is built to bring creators together in a structured ecosystem where they can <em>connect, collaborate, and be seen.</em> Our focus is simple — create spaces for real conversations, enable meaningful collaborations, and help creators grow their influence through content and community.
    </p>

    
 <div class="founder-byline">
    <div class="byline-avatar">
        <img src="{{ asset('images/media/founder.png') }}" alt="Kishorekumar Chandrasekaran">
    </div>

    <div class="byline-text">
        <div class="name">Kishorekumar Chandrasekaran</div>
        <div class="role">Founder and CEO</div>
    </div>
</div>

  </div>
</section>


<div class="vm-section">
  <div class="vm-block vision-block">
    <div class="section-label dark">A Trusted Global Platform for Leadership & Growth</div>
    <h2 class="section-title dark">Our Vision</h2>
    <p class="body-text">To become the world’s most trusted platform for leadership, entrepreneurship, knowledge sharing, and professional collaboration by empowering individuals to learn from each other and create meaningful impact.</p>
    <ul class="check-list ps-0">
      <li>Build global trust in leadership and collaboration</li>
      <li>Empower individuals through peer-to-peer learning</li>
      <li>Strengthen entrepreneurship and innovation ecosystems</li>
      <li>Enable meaningful professional and industry connections</li>
      <li>Create long-term social and economic impact through knowledge sharing</li>
    </ul>
    {{-- <span class="vm-number">01</span> --}}
  </div>
  <div class="vm-block mission-block">
    <div class="section-label light">Connecting People, Knowledge & Opportunities</div>
    <h2 class="section-title light">Our Mission</h2>
    <p class="body-text">We are committed to building a dynamic ecosystem where ambitious individuals from diverse backgrounds come together to learn, share, and grow through authentic relationships and collaboration.</p>
    <ul class="check-list ps-0">
      <li>Connect ambitious people across industries and generations</li>
      <li>Create a trusted space for authentic conversations and storytelling</li>
      <li>Bridge education, entrepreneurship, technology, and industry</li>
      <li>Promote continuous learning through shared real-world experiences</li>
      <li>Enable collaborations that generate opportunities and long-term value</li>
    </ul>
    {{-- <span class="vm-number">02</span> --}}
  </div>
</div>


<div class="block-feature-ten position-relative mt-150 lg-mt-80 pb-100 lg-pb-60">

    <div class="container">

        <!-- TITLE -->
        <div class="row">

            <div class="col-lg-8 mx-auto text-center wow fadeInUp" style="visibility: visible;">

                <div class="title-one mb-50 lg-mb-20 text-center">

                    <div class="upper-title">
                        Young Chanakya X
                    </div>

                    <h2>
                        Our Core Values
                    </h2>
                    
                    <p class="sec-desc rv mx-auto mt-3 px-xl-5" style="line-height: 1.6; max-width: 600px;">
                        Our core values define the principles that guide our choices, shape our community, and drive our vision to build a trusted global platform for leadership and growth.
                    </p>

                </div>

            </div>

        </div>


        <!-- VALUES -->
        <div class="values-grid position-relative">

            <div class="row gx-lg-4">

                <!-- VALUE 1 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-door-open"></i>

                        </div>

                        <h4 class="core-value-title">
                            Access Over Exclusivity
                        </h4>

                        <p class="core-value-desc">
                            We create access to meaningful opportunities, networks, and platforms.
                        </p>

                    </div>

                </div>


                <!-- VALUE 2 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-collection-play"></i>

                        </div>

                        <h4 class="core-value-title">
                            Content First
                        </h4>

                        <p class="core-value-desc">
                            Every interaction, event, and collaboration is designed to generate content and visibility.
                        </p>

                    </div>

                </div>


                <!-- VALUE 3 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-people"></i>

                        </div>

                        <h4 class="core-value-title">
                            Collaboration Over Competition
                        </h4>

                        <p class="core-value-desc">
                            Growth happens faster when creators work together.
                        </p>

                    </div>

                </div>


                <!-- VALUE 4 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-chat-quote"></i>

                        </div>

                        <h4 class="core-value-title">
                            Real Conversations
                        </h4>

                        <p class="core-value-desc">
                            We value authentic discussions over scripted narratives.
                        </p>

                    </div>

                </div>


                <!-- VALUE 5 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-globe"></i>

                        </div>

                        <h4 class="core-value-title">
                            Global Mindset
                        </h4>

                        <p class="core-value-desc">
                            Young Chanakya X is built without geographic limitations.
                        </p>

                    </div>

                </div>


                <!-- VALUE 6 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-graph-up-arrow"></i>

                        </div>

                        <h4 class="core-value-title">
                            Consistent Growth
                        </h4>

                        <p class="core-value-desc">
                            Opportunities are not one-time — they are continuous.
                        </p>

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
      <p class="cta-tagline">If you are a creator, influencer, speaker, or community builder — Young Chanakya X is built for
        you.</p>
      <div class="cta-features">
        <span class="pill">Join the Ecosystem</span>
        <span class="pill">Access Creator Lounges</span>
        <span class="pill">Speak & Collaborate</span>
        <span class="pill">Build Beyond Platforms</span>
      </div>
      <button class="cta-btn" onclick="window.location.href='/connecters-list'">Join Young Chanakya X</button>
    </div>
  </section>


@endsection


