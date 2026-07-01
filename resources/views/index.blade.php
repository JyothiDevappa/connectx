@php
/**
 * Homepage SEO Data
 * ─────────────────
 * Defines dynamic meta title, description, keywords, and OG image
 * consumed by resources/views/partials/seo.blade.php (included in layout/app.blade.php).
 */
$seo = [
    'title'       => 'Young Chanakya X — Global Creator Ecosystem by Young Chanakya',
    'description' => 'Young Chanakya X is a premium global creator ecosystem connecting influencers, podcasters, speakers, founders, and brands through collaborations, exclusive events, and creator lounges. Partner with the future of influence.',
    'keywords'    => 'Young Chanakya X, creator ecosystem, influencer network, brand partnerships, creator lounges, podcasts, roundtables, India creator network, digital creators, become a partner',
    'image'       => asset('images/assets/ogg.png'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "WebSite",
            "@id": "https://connectx.youngchanakya.com/#website",
            "name": "Young Chanakya X",
            "url": "https://connectx.youngchanakya.com/",
            "description": "Global creator ecosystem by Young Chanakya connecting influencers, podcasters, speakers, and brands.",
            "inLanguage": "en-IN",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://connectx.youngchanakya.com/connecters-list?q={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }
        },
        {
            "@type": "Organization",
            "@id": "https://connectx.youngchanakya.com/#organization",
            "name": "Young Chanakya X",
            "url": "https://connectx.youngchanakya.com/",
            "logo": {
                "@type": "ImageObject",
                "url": "https://connectx.youngchanakya.com/images/logo/connectx.png",
                "width": 400,
                "height": 100
            },
            "image": "https://connectx.youngchanakya.com/images/assets/ogg.png",
            "description": "Young Chanakya X is a premium global creator ecosystem connecting influencers, podcasters, speakers, founders, and brands through collaborations, exclusive events, and creator lounges.",
            "foundingDate": "2024",
            "founder": {
                "@type": "Person",
                "name": "Young Chanakya",
                "jobTitle": "Founder & Visionary"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "youngchanakyaconnect@gmail.com",
                "contactType": "customer service",
                "availableLanguage": ["English", "Hindi"]
            },
            "sameAs": [
                "https://www.linkedin.com/company/connectx",
                "https://www.instagram.com/connectx",
                "https://twitter.com/connectx",
                "https://www.youtube.com/@connectx"
            ]
        }
    ]
}
@endverbatim
</script>
@endpush


@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}?v={{ time() }}">
<link rel="stylesheet" href="{{ asset('css/custom-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/home-2.css') }}?v={{ time() }}">
@endpush



@section('content')


<!-- HERO -->
<section class="hero" id="home">
    <div class="hero-slides">
        <!-- Slide 1 -->
        <div class="hero-slide active">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1800&q=80" alt="Partner With the Future of Influence">
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-content">
                <h1>Partner With the<br><em>Future of Influence</em></h1>
                <p class="hero-desc">Young Chanakya X collaborates with brands, media platforms, startups, studios,
                    communities, and ecosystem partners to build one of the world's fastest-growing creator and influencer
                    networks.
                </p>
                <div class="hero-btns">
                    <button class="btn-hero-primary" onclick="document.getElementById('partner').scrollIntoView({behavior: 'smooth'})">Collaborate With Young Chanakya X →</button>
                    <button class="btn-hero-outline" onclick="window.location.href='/become-a-partner'">Become a Partner</button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=1800&q=80" alt="Empower Your Creator Journey">
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-content">
                <h1>Empowering the Next<br><em>Generation of Creators</em></h1>
                <p class="hero-desc">We provide creators with state-of-the-art lounges, professional recording studios, live panel roundtables, and a global network of peers to scale their reach and impact.
                </p>
                <div class="hero-btns">
                    <button class="btn-hero-primary" onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'})">Join the Community →</button>
                    <button class="btn-hero-outline" onclick="document.getElementById('events').scrollIntoView({behavior: 'smooth'})">Explore Creator Spaces</button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=1800&q=80" alt="High-Impact Brand Partnerships">
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-content">
                <h1>High-Impact Brand<br><em>Partnerships &amp; Events</em></h1>
                <p class="hero-desc">Connect your brand with highly engaged audiences through curated sponsorships, regional creator meetups, annual showcase awards, and co-branded experiences.
                </p>
                <div class="hero-btns">
                    <button class="btn-hero-primary" onclick="document.getElementById('community').scrollIntoView({behavior: 'smooth'})">Explore Sponsorships →</button>
                    <button class="btn-hero-outline" onclick="document.getElementById('events').scrollIntoView({behavior: 'smooth'})">View Our Events</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="hero-arrow prev-btn" aria-label="Previous Slide">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button class="hero-arrow next-btn" aria-label="Next Slide">
        <i class="bi bi-chevron-right"></i>
    </button>

    <div class="hero-scroll">
        <div class="scroll-line"></div>
        <span class="scroll-txt">Scroll to explore</span>
    </div>
    
    <div class="hero-dots">
        <div class="hdot on" data-i="0"></div>
        <div class="hdot" data-i="1"></div>
        <div class="hdot" data-i="2"></div>
    </div>
</section>


<!-- MARQUEE -->
<div class="marquee-wrap">
    <div class="marquee-track">
        <div class="mq-item">Explore</div>
        <div class="mq-item">Exchange</div>
        <div class="mq-item">Express</div>
        <div class="mq-item">Experience</div>
        <div class="mq-item">Expand</div>
        <div class="mq-item">Excel</div>
        <div class="mq-item">Explore</div>
        <div class="mq-item">Exchange</div>
        <div class="mq-item">Express</div>
        <div class="mq-item">Experience</div>
        <div class="mq-item">Expand</div>
        <div class="mq-item">Excel</div>
        <div class="mq-item">Explore</div>
        <div class="mq-item">Exchange</div>
        <div class="mq-item">Express</div>
        <div class="mq-item">Experience</div>
        <div class="mq-item">Expand</div>
        <div class="mq-item">Excel</div>
    </div>
</div>

<!-- FOUNDER SECTION -->
<section class="about founder-section" id="founder" style="background-color: var(--clr-white); border-bottom: 1px solid rgba(0,0,0,0.05); padding: 100px 0;">
    <style>
        .founder-grid {
            display: grid;
            grid-template-columns: 1.35fr 1fr;
            gap: 60px;
            align-items: center;
        }
        @media (max-width: 991px) {
            .founder-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
    <div class="container">
        <div class="founder-grid">
            <div class="about-content rv-l" style="padding: 0;">
                <div class="eyebrow rv">Meet The Founder</div>
<h2 class="sec-title rv"
    style="font-size: clamp(24px, 2.8vw, 42px) !important;
           line-height: 1.15 !important;
           letter-spacing: -1px !important;
           max-width: 650px !important;
           width: 100% !important;
           white-space: normal !important;">
    Shaping the Next Generation of Startup Leaders
</h2>                <p class="sec-desc rv" style="margin-bottom: 24px; font-size: 1.05rem;">The greatest empires weren’t built by followers—they were built by thinkers, strategists, and doers. At Young Chanakya X, our mission is to cultivate modern-day Chanakyas who lead with wisdom, adaptability, and impact.</p>
                
                <div class="rv" style="border-left: 3px solid var(--orange); padding-left: 20px; margin-bottom: 30px;">
                    <p style="font-size: 1.15rem; font-style: italic; font-weight: 500; color: #0c3a30; margin-bottom: 0; line-height: 1.6;">
                        "If you chase Saraswati (Knowledge), Lakshmi (Wealth) will chase you. Knowledge is Power, Information is Wealth."
                    </p>
                </div>

                <p class="sec-desc rv" style="margin-bottom: 40px; font-size: 1.05rem;">I’ve always believed that success is not about where you start, but how you scale. And for that, you need the right ecosystem, the right people, and the right mindset. If you dare to dream and are ready to hustle, you are in the right place.</p>
                
                <div class="rv">
                    <a href="https://www.linkedin.com/in/kishorekumarceo" target="_blank" class="btn-main" style="text-decoration: none;"><i class="bi bi-linkedin" style="margin-right: 8px;"></i>Connect with me</a>
                </div>
            </div>
            
            <div class="rv-r" style="border-radius: 24px; overflow: hidden; max-width: 480px; width: 100%; margin: 0 auto; box-shadow: 0 24px 48px rgba(12, 58, 48, 0.12); position: relative; aspect-ratio: 4/5;">
                <img src="{{ asset('images/media/founder.png') }}" alt="Kishorekumar Chandrasekeran" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                
                <!-- Gradient Overlay -->
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, rgba(12, 58, 48, 0.95) 0%, rgba(12, 58, 48, 0.5) 60%, transparent 100%); pointer-events: none; z-index: 1;"></div>
                
                <!-- Text Overlay -->
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 32px 20px 32px; z-index: 2;">
                    <strong style="display: block; color: #fff; font-size: clamp(1.5rem, 4vw, 2.1rem); line-height: 1.15; font-weight: 800; margin-bottom: 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.5);">Kishorekumar Chandrasekeran</strong>
                    <span style="display: inline-block; background: var(--orange); color: #0c3a30; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; padding: 6px 16px; border-radius: 100px;">Founder | Serial Entrepreneur</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 
<!-- ABOUT -->
<section class="about" id="about">
    <div class="about-inner">
        <div class="about-img-side rv-l">

            <img src="/images/media/img_20.jpg" alt="About Young Chanakya X">


            <div class="about-img-overlay"></div>
            <!-- <div class="about-badge">
          <strong>10K+</strong>
          <span>Global Creators</span>
        </div> -->
        </div>
        <div class="about-content rv-r">
            <div class="eyebrow rv">About Young Chanakya X</div>
            <h2 class="sec-title">A Digital-First<br>Creator Ecosystem</h2>
            <p class="sec-desc">Young Chanakya X is designed to bring influencers, content creators, public
                voices,
                and storytellers into one global network — creating opportunities like never before.</p>
            <div class="about-pills">
                <div class="pill">Collaborate</div>
                <div class="pill">Build Visibility</div>
                <div class="pill">Speak on Podcasts</div>
                <div class="pill">Exclusive Events</div>
                <div class="pill">Share Your Stories</div>
                <div class="pill">Creator Lounges</div>
            </div>
            <button class="btn-main">Join Young Chanakya X →</button>
        </div>
    </div>
</section>
--}}

<!-- ABOUT YOUNG CHANAKYA X -->
<section class="about" id="about-ycx">
    <div class="about-inner">
        <div class="about-img-side rv-l">
            <img src="/images/media/img_20.jpg" alt="About Young Chanakya X">
            <div class="about-img-overlay"></div>
        </div>
        <div class="about-content rv-r" >
            <div class="eyebrow rv">About Young Chanakya X</div>
            <h2 class="sec-title rv">A Digital-First Leadership Platform</h2>
            <p class="sec-desc rv">Young Chanakya X is a digital-first leadership and community platform that connects ambitious individuals through meaningful conversations, authentic storytelling, knowledge sharing, networking, mentorship, and collaboration.</p>
            <p class="sec-desc rv">We believe that every individual has a story worth sharing, knowledge worth passing on, and experiences that can inspire others. By bringing together students, entrepreneurs, founders, professionals, creators, mentors, educators, and changemakers, Young Chanakya X creates an ecosystem where learning happens through people and opportunities are created through relationships.</p>
        </div>
    </div>
</section>


<!-- WHO CAN PARTNER -->
<section class="partner-sec" id="partner">
    <div class="partner-head">
        <div class="eyebrow rv">Who Can Partner With Us</div>
        <h2 class="sec-title rv">Built for Modern<br>Ecosystem Collaborations</h2>
        <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px;">We connect diverse creators, brands, and ecosystem partners to unlock shared visibility, audience reach, and growth.</p>
    </div>
    <div class="partner-grid">
        <div class="p-card rv" style="transition-delay:0s">
            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&q=80" alt="Business and Startup Voices — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">01</div>
                <div class="p-name">Business & Startup Voices</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        <div class="p-card rv" style="transition-delay:0.07s">
            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=600&q=80" alt="Lifestyle and Wellness Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">02</div>
                <div class="p-name">Lifestyle & Wellness</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        <div class="p-card rv" style="transition-delay:0.14s">
            <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=600&q=80" alt="Sports and Adventure Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">03</div>
                <div class="p-name">Sports & Adventure</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        <div class="p-card rv" style="transition-delay:0.21s">
            <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&q=80" alt="Digital Media Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">04</div>
                <div class="p-name">Digital Media Creators</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        <div class="p-card rv" style="transition-delay:0.28s">
            <img src="https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=600&q=80" alt="News and Commentary Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">05</div>
                <div class="p-name">News & Commentary</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        <div class="p-card rv" style="transition-delay:0.35s">
            <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=600&q=80" alt="Motivation and Storytelling Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">06</div>
                <div class="p-name">Motivation & Storytelling</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        <div class="p-card rv" style="transition-delay:0.42s">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="Tech and Innovation Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">07</div>
                <div class="p-name">Tech & Innovation</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <div class="p-card rv" style="transition-delay:0.49s">
            <img src="https://images.unsplash.com/photo-1504609773096-104ff2c73ba4?w=600&q=80" alt="Regional and Cultural Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">08</div>
                <div class="p-name">Regional & Cultural Creators</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>


        <div class="p-card rv" style="transition-delay:0.56s">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Education and Learning Creators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-cat">09</div>
                <div class="p-name">Education & Learning</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <div class="p-card rv" style="transition-delay:0.63s">
            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600&q=80" alt="Entertainment">
            <div class="p-card-ov">
                <div class="p-cat">10</div>
                <div class="p-name">Entertainment & Pop Culture</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>


    </div>
</section>


{{-- <!-- WHY YOUNG CHANAKYA X -->
<style>
    .why-ycx {
        padding: 120px 0;
        background: var(--primary-dark);
        color: var(--white);
        position: relative;
        overflow: hidden;
    }
    .why-ycx::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at center, rgba(255,210,177,0.03) 0%, transparent 70%);
        pointer-events: none;
    }
    .why-header {
        text-align: center;
        margin-bottom: 64px;
        position: relative;
        z-index: 2;
    }
    .why-header .eyebrow {
        color: var(--accent) !important;
    }
    .why-header .eyebrow::before {
        background: var(--accent) !important;
    }
    .why-heading {
        font-size: clamp(32px, 4vw, 48px);
        font-weight: 900;
        letter-spacing: -1px;
        margin-bottom: 24px;
        color: var(--white);
    }
    .why-heading em {
        color: var(--accent);
        font-style: italic;
    }
    .why-desc {
        font-size: 18px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.8);
        max-width: 680px;
        margin: 0 auto;
    }
    
    .why-grid-container {
        width: 100%;
        margin: 0 auto 64px;
        position: relative;
        z-index: 2;
        text-align: center;
    }
    
    .why-brings-text {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--accent);
        margin-bottom: 40px;
    }

    .why-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .why-card {
        position: relative;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 20px;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-start;
        padding: 30px 24px;
        text-align: left;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .why-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 210, 177, 0.3);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .why-card-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        transition: transform 0.6s ease;
    }

    .why-card:hover .why-card-bg {
        transform: scale(1.05);
    }

    .why-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(7, 31, 26, 0.9) 0%, rgba(7, 31, 26, 0.2) 100%);
        z-index: 2;
        transition: background 0.4s ease;
    }
    
    .why-card:hover .why-card-overlay {
        background: linear-gradient(to top, rgba(7, 31, 26, 0.95) 0%, rgba(255, 210, 177, 0.1) 100%);
    }

    .why-title {
        position: relative;
        z-index: 3;
        font-size: 18px;
        font-weight: 700;
        color: var(--white);
        margin: 0;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .why-title i {
        color: var(--accent);
        font-size: 20px;
    }

    .why-footer {
        text-align: center;
        max-width: 700px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        padding-top: 40px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }
    
    .why-footer-text {
        font-size: 18px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.7);
    }
    .why-footer-text strong {
        color: var(--white);
        font-weight: 600;
    }

    @media (max-width: 991px) {
        .why-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .why-ycx {
            padding: 80px 0;
        }
    }
    
    @media (max-width: 767px) {
        .why-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .why-heading {
            font-size: 28px;
        }
        .why-desc {
            font-size: 16px;
        }
        .why-card {
            min-height: 160px;
            padding: 24px;
        }
    }
</style>

<section class="why-ycx" id="why-ycx">
    <div class="container">
        
        <div class="why-header">
            <div class="eyebrow rv">Purpose</div>
            <h2 class="why-heading rv">Why <em>Young Chanakya X?</em></h2>
            <p class="why-desc rv">
                The world has information everywhere, but meaningful connections are rare.
            </p>
        </div>

        <div class="why-grid-container">
            <div class="why-brings-text rv">Young Chanakya X brings together</div>
            
            <div class="why-grid">
                <div class="why-card rv" style="transition-delay: 0.0s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80" alt="Leadership">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-flag"></i> Leadership</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.1s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=600&q=80" alt="Storytelling">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-chat-quote"></i> Storytelling</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.2s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=600&q=80" alt="Podcasts">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-mic"></i> Podcasts</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.3s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&q=80" alt="Community">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-people"></i> Community</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.4s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&q=80" alt="Networking">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-diagram-3"></i> Networking</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.5s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&q=80" alt="Mentorship">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-compass"></i> Mentorship</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.6s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Learning">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-lightbulb"></i> Learning</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.7s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1522071901873-411886a10004?w=600&q=80" alt="Collaboration">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-intersect"></i> Collaboration</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.8s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80" alt="Events">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-calendar-event"></i> Events</h3>
                </div>
            </div>
        </div>

        <div class="why-footer rv" style="transition-delay: 0.4s;">
            <p class="why-footer-text">
                ...into one integrated ecosystem designed to support <strong>long-term personal and professional growth.</strong>
            </p>
        </div>

    </div>
</section> --}}

<!-- HOW CONNECTX WORKS -->

<style>
    @keyframes lineGrow {
        from {
            transform: scaleX(0);
        }

        to {
            transform: scaleX(1);
        }
    }

    @keyframes lineGrowVertical {
        from {
            transform: translateX(-50%) scaleY(0);
        }

        to {
            transform: translateX(-50%) scaleY(1);
        }
    }

    @keyframes circlePop {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        70% {
            transform: scale(1.18);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cx-heading {
        opacity: 0;
        animation: fadeUp 0.5s ease 0.05s forwards;
    }

    .cx-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #ffd2b1;
        color: #0c3a30;
        font-size: 18px;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transform: scale(0);
        opacity: 0;
    }

    .cx-c1 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 0.35s forwards;
    }

    .cx-c2 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 0.75s forwards;
    }

    .cx-c3 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 1.15s forwards;
    }

    .cx-c4 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 1.55s forwards;
    }

    .cx-text {
        opacity: 0;
    }

    .cx-t1 {
        animation: fadeUp 0.5s ease 0.55s forwards;
    }

    .cx-t2 {
        animation: fadeUp 0.5s ease 0.95s forwards;
    }

    .cx-t3 {
        animation: fadeUp 0.5s ease 1.35s forwards;
    }

    .cx-t4 {
        animation: fadeUp 0.5s ease 1.75s forwards;
    }
</style>

<style>
/* =============================================
   HOW CONNECTX WORKS — RESPONSIVE
   ============================================= */
.hcw-container {
    margin-top: 100px;
    margin-bottom: 100px;
}

.hcw-wrapper {
    background: #0c3a30;
    border-radius: 16px;
    padding: 44px 36px 52px;
    font-family: var(--font-sans);
    overflow: hidden;
}

.hcw-wrapper .eyebrow {
    color: #ffd2b1 !important;
}

.hcw-wrapper .eyebrow::before {
    background: #ffd2b1 !important;
}

.hcw-wrapper .hcw-heading {
    color: #ffffff !important;
    font-size: clamp(28px, 4vw, 56px) !important;
    font-weight: 400 !important;
    margin: 0 0 48px;
    letter-spacing: -0.3px !important;
}

.hcw-wrapper .hcw-heading span {
    font-style: italic !important;
    font-weight: 500 !important;
    color: #ffd2b1 !important;
}

.hcw-relative {
    position: relative;
}

/* Connector lines — desktop only */
.hcw-line-bg,
.hcw-line-anim {
    position: absolute;
    top: 24px;
    left: 24px;
    width: 75%; /* Reaches exactly to the center of the 4th circle (75% across the 4-column grid) */
    height: 1px;
    border-radius: 2px;
}
.hcw-line-bg  { background: #1f5a45; z-index: 0; }
.hcw-line-anim {
    background: #ffd2b1;
    z-index: 1;
    transform-origin: left;
    transform: scaleX(0);
    animation: lineGrow 1.2s cubic-bezier(.4,0,.2,1) 0.2s forwards;
}

/* Steps grid */
.hcw-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
    position: relative;
    z-index: 2;
}

.hcw-step {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.hcw-wrapper .hcw-step-title {
    color: #ffffff !important;
    font-size: 15px !important;
    font-weight: 500 !important;
    margin: 0 0 8px;
    line-height: 1.35 !important;
}

.hcw-wrapper .hcw-step-desc {
    color: #ffffff !important;
    font-size: 12.5px !important;
    line-height: 1.65 !important;
    margin: 0;
}

/* ---- Tablet & Mobile: Vertical Timeline (Single Column) ---- */
@media (max-width: 767px) {
    .hcw-container {
        margin-top: 60px;
        margin-bottom: 60px;
    }
    .hcw-wrapper {
        padding: 36px 24px 44px;
        border-radius: 14px;
    }
    .hcw-heading {
        font-size: clamp(24px, 6vw, 36px);
        margin: 0 0 36px;
    }
    /* Position connector lines vertically through the centers of circles */
    .hcw-line-bg,
    .hcw-line-anim {
        display: block;
        position: absolute;
        left: 22px; /* Center of the 44px circle */
        top: 22px; /* Center of the first circle */
        bottom: 22px; /* Center of the last circle */
        right: auto;
        height: auto;
        width: 3px;
        border-radius: 2px;
        transform: translateX(-50%);
    }
    .hcw-line-bg {
        background: #1f5a45;
        z-index: 0;
    }
    .hcw-line-anim {
        background: #ffd2b1;
        z-index: 1;
        transform-origin: top;
        transform: translateX(-50%) scaleY(0);
        animation: lineGrowVertical 1.2s cubic-bezier(.4,0,.2,1) 0.2s forwards;
    }
    .hcw-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    .hcw-step {
        flex-direction: row;
        align-items: flex-start;
        gap: 20px;
    }
    .cx-circle {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        font-size: 18px;
        z-index: 2; /* Keep circle above the line */
    }
    .hcw-step-title {
        font-size: 15px;
        margin-bottom: 6px;
    }
    .hcw-step-desc {
        font-size: 12.5px;
    }
}

/* ---- Mobile: Smaller Vertical Timeline ---- */
@media (max-width: 480px) {
    .hcw-container {
        margin-top: 48px;
        margin-bottom: 48px;
    }
    .hcw-wrapper {
        padding: 28px 18px 36px;
        border-radius: 12px;
    }
    .hcw-heading {
        font-size: clamp(22px, 7vw, 30px);
        margin: 0 0 28px;
    }
    .hcw-line-bg,
    .hcw-line-anim {
        left: 20px; /* Center of 40px circle */
        top: 20px;
        bottom: 20px;
    }
    .hcw-grid {
        gap: 24px;
    }
    .hcw-step {
        gap: 16px;
    }
    .cx-circle {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
    .hcw-step-title {
        font-size: 14px;
    }
    .hcw-step-desc {
        font-size: 12px;
    }
}
</style>

<h2 class="sr-only">How Young Chanakya X Works — 4 steps to create, access, connect, and grow.</h2>

<div class="container hcw-container">
    <div class="hcw-wrapper">
        <div class="eyebrow rv">Our Process</div>
        <p class="cx-heading hcw-heading">
            How <span>Young Chanakya X </span>  Works
        </p>
        <p class="sec-desc rv" style="color: rgba(255, 255, 255, 0.75) !important; max-width: 600px; margin-top: -20px; margin-bottom: 44px;">
            Follow these simple steps to join the Young Chanakya X network, access premium lounges, and launch high-impact collaborations.
        </p>
    
        <div class="hcw-relative">
    
            <div class="hcw-line-bg"></div>
            <div class="hcw-line-anim"></div>
    
            <div class="hcw-grid">
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c1">1</div>
                    <div class="cx-text cx-t1">
                        <p class="hcw-step-title">Create Your Profile</p>
                        <p class="hcw-step-desc">Create your creator profile and showcase your content within Young Chanakya X.</p>
                    </div>
                </div>
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c2">2</div>
                    <div class="cx-text cx-t2">
                        <p class="hcw-step-title">Access Creator Spaces</p>
                        <p class="hcw-step-desc">Access creator lounges, networking spaces, podcasts, and exclusive experiences.</p>
                    </div>
                </div>
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c3">3</div>
                    <div class="cx-text cx-t3">
                        <p class="hcw-step-title">Connect &amp; Collaborate</p>
                        <p class="hcw-step-desc">Connect with creators, influencers, brands, and communities worldwide.</p>
                    </div>
                </div>
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c4">4</div>
                    <div class="cx-text cx-t4">
                        <p class="hcw-step-title">Grow Your Influence</p>
                        <p class="hcw-step-desc">Grow your visibility through collaborations, events, and creator opportunities.</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>


<style>
</style>



<!-- EXPERIENCES -->
<section class="cx-premium-viewport">
    <div class="cx-custom-cursor"></div>

    <div class="cx-wrapper">
        <div class="cx-editorial-header">
            <div class="eyebrow rv">Young Chanakya X Experiences</div>
            <h2 class="cx-main-heading">Experiences That Create Influence</h2>
            <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px;">From high-quality recording lounges to city meetups, we offer unmatched offline and online opportunities to scale your reach.</p>
        </div>

        <div class="cx-viewport-grid">

            <div class="cx-premium-card cx-col-wide">
                <div class="cx-img-container">
                    <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&q=80&w=1000" alt="Podcasts" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">PODCASTS</span>
                    <h3 class="cx-premium-title">Podcasts</h3>
                    <p class="cx-premium-text">Conversations with founders, CEOs, creators, and innovators. Real experiences. Practical lessons. Shared on record.</p>
                </div>
                <div class="cx-arrow-token">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&q=80&w=600" alt="Stories" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">STORIES</span>
                    <h3 class="cx-premium-title">Story Sharing</h3>
                    <p class="cx-premium-text">Every journey matters. Publish startup stories, career experiences, and personal transformations.</p>
                </div>
                <div class="cx-arrow-token">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600" alt="Network" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">NETWORK</span>
                    <h3 class="cx-premium-title">Networking</h3>
                    <p class="cx-premium-text">Relationships across industries. Students, professionals, investors, mentors — all in one space.</p>
                </div>
                <div class="cx-arrow-token">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=600" alt="Mentorship" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">MENTORSHIP</span>
                    <h3 class="cx-premium-title">Mentorship</h3>
                    <p class="cx-premium-text">The right conversation changes everything. Connect with mentors who've navigated the path you're on.</p>
                </div>
                <div class="cx-arrow-token">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="https://images.unsplash.com/photo-1610116306796-6fea9f4fae38?auto=format&fit=crop&q=80&w=600" alt="Live Events" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">LIVE EVENTS</span>
                    <h3 class="cx-premium-title">Live Experiences</h3>
                    <p class="cx-premium-text">Where ideas become action. Webinars, summits, roundtables, fireside chats, and meetups.</p>
                </div>
                <div class="cx-arrow-token">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </div>

            <div class="cx-premium-card cx-col-wide">
                <div class="cx-img-container">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=1000" alt="Collaborate" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">COLLABORATE</span>
                    <h3 class="cx-premium-title">Collaboration</h3>
                    <p class="cx-premium-text">Build with people who share your vision. Partnerships for startups, research, content, and innovation.</p>
                </div>
                <div class="cx-arrow-token">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- WAYS TO GET INVOLVED -->
<section class="ways-to-involve-sec">
    <div class="container">
        <div class="section-head text-center" style="margin-bottom: 50px;">
            <div class="eyebrow rv">Ways to Engage</div>
            <h2 class="sec-title rv" style="color: var(--primary-dark);">Be Part of the Experience</h2>
            <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-left: auto; margin-right: auto;">Explore a range of initiatives designed to connect you with industry leaders, ideas, and opportunities.</p>
        </div>
    </div>

    <div class="marquee-container" style="padding-bottom: 0;">
        <div class="marquee-track">
            @php
                $marqueeRow1 = [
                    'Founder Spotlight', 'CEO Conversations', 'Startup Stories', 'Community Podcasts', 
                    'Student Leadership Series', 'Women in Leadership', 'Creator Sessions'
                ];
                $marqueeRow2 = [
                    'Industry Roundtables', 'Campus Chapters', 'Mentor Connect', 'Innovation Talks', 
                    'Networking Meetups', 'Workshops', 'Fireside Chats', 'Leadership Summit'
                ];
            @endphp
            @foreach($marqueeRow1 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
            @foreach($marqueeRow1 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
        </div>
    </div>
    
    <div class="marquee-container" style="padding-top: 15px;">
        <div class="marquee-track marquee-track-reverse">
            @foreach($marqueeRow2 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
            @foreach($marqueeRow2 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
        </div>
    </div>
</section>

<!-- EVENT LISTING -->
<section class="blog-section-two position-relative mt-150 lg-mt-80 mb-150 lg-mb-80" id="events">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow rv">Event Listing</div>
            <h2 class="sec-title rv">Curated events for every creator journey</h2>
            <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-bottom: 0; margin-left: auto; margin-right: auto;">Explore upcoming panels, awards gala ceremonies, regional conferences, and exclusive brand sponsorship opportunities.</p>
        </div>

        <div class="position-relative">
            <div class="row gx-xxl-5">

                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ asset("images/media/img.jpg") }}');">
                            <a href="#" class="stretched-link rounded-5 date tran3s">09 FEB</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#" class="blog-title">
                                    <h4>Creator Growth Masterclass</h4>
                                </a>
                                <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- <div class="post-info">Young Chanakya X Team . 6 hrs . Masterclass</div> -->
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ asset("images/blog/blog_img_04.jpg") }}');">
                            <a href="#" class="stretched-link rounded-5 date tran3s">12 AUG</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#" class="blog-title">
                                    <h4>Voices of Influence Roundtable</h4>
                                </a>
                                <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- <div class="post-info">Live Panel . 4 hrs . Roundtable</div> -->
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ asset("images/media/img_50.jpg") }}');">
                            <a href="#" class="stretched-link rounded-5 date tran3s">18 SEP</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#" class="blog-title">
                                    <h4>Networking & Collab Night</h4>
                                </a>
                                <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- <div class="post-info">Community Hub . 5 hrs . Networking</div> -->
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ asset("images/media/img_48.webp") }}');">
                            <a href="#" class="stretched-link rounded-5 date tran3s">22 OCT</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#" class="blog-title">
                                    <h4>Meetup Market Mixer</h4>
                                </a>
                                <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- <div class="post-info">City Event . 3 hrs . Meetups</div> -->
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ asset("images/media/img_58.webp") }}');">
                            <a href="#" class="stretched-link rounded-5 date tran3s">05 NOV</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#" class="blog-title">
                                    <h4>Creator Lounge Live</h4>
                                </a>
                                <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- <div class="post-info">Studio Stream . 2 hrs . Lounge</div> -->
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ asset("images/media/img_20.jpg") }}');">
                            <a href="#" class="stretched-link rounded-5 date tran3s">15 DEC</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#" class="blog-title">
                                    <h4>Awards Showcase Evening</h4>
                                </a>
                                <a href="#" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- <div class="post-info">Showcase . 4 hrs . Awards</div> -->
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- THE DNA OF CONNECTX -->
<section class="h2-section h2-section--white h2-xmeaning" id="what-x-means">
    <div class="container">

        {{-- Section Header --}}
        <div class="h2-section-header">
            <div class="h2-eyebrow rv">The DNA of Young Chanakya X</div>
            <h2 class="h2-heading rv">What Does "<em>X</em>" Mean?</h2>
            <p class="h2-desc h2-desc--center rv">
                The letter X represents the point where ideas, people, opportunities, and experiences intersect — creating something greater than the sum of its parts.
            </p>
        </div>

        {{-- Constellation Layout --}}
        <div class="h2-xm__constellation rv">

            {{-- Central X Hub --}}
            <div class="h2-xm__hub">
                <div class="h2-xm__hub-ring h2-xm__hub-ring--1"></div>
                <div class="h2-xm__hub-ring h2-xm__hub-ring--2"></div>
                <div class="h2-xm__hub-ring h2-xm__hub-ring--3"></div>
                <div class="h2-xm__hub-letter">X</div>
                <div class="h2-xm__hub-tagline">Where Everything Intersects</div>
            </div>

            {{-- Connection Lines (SVG) — x2/y2 targets the center of each node's icon circle --}}
            <svg class="h2-xm__lines" viewBox="0 0 1200 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                <defs>
                    <marker id="icon-dot-default" markerWidth="6" markerHeight="6" refX="3" refY="3" orient="auto">
                        <circle cx="3" cy="3" r="2.5" fill="rgba(12,58,48,0.25)"/>
                    </marker>
                    <marker id="icon-dot-hover" markerWidth="6" markerHeight="6" refX="3" refY="3" orient="auto">
                        <circle cx="3" cy="3" r="2.5" fill="rgba(255,210,177,0.9)"/>
                    </marker>
                </defs>
                {{-- explore: node top:40 left:100, icon center = (100+110, 40+34) = (210,74) scaled ~(221,78) --}}
                <line class="h2-xm__line h2-xm__line--explore"    x1="600" y1="450" x2="221" y2="78"  stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- exchange: node top:40 right:100 → left=820, icon center = (820+110, 74) = (930,74) scaled ~(979,78) --}}
                <line class="h2-xm__line h2-xm__line--exchange"   x1="600" y1="450" x2="979" y2="78"  stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- express: node top:380 left:-10, icon center = (100, 414) scaled ~(105,436) --}}
                <line class="h2-xm__line h2-xm__line--express"    x1="600" y1="450" x2="105" y2="436" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- experience: node top:380 right:-10 → left=930, icon center = (1040,414) scaled ~(1095,436) --}}
                <line class="h2-xm__line h2-xm__line--experience" x1="600" y1="450" x2="1095" y2="436" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- expand: node bottom:20 left:150, icon center = (260, ~754) scaled ~(274,734) --}}
                <line class="h2-xm__line h2-xm__line--expand"     x1="600" y1="450" x2="274" y2="734" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- excel: node bottom:20 right:150 → left=770, icon center = (880,~754) scaled ~(926,734) --}}
                <line class="h2-xm__line h2-xm__line--excel"      x1="600" y1="450" x2="926" y2="734" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
            </svg>

            {{-- Concept Nodes --}}
            <div class="h2-xm__node h2-xm__node--explore" data-concept="explore">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-compass"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">01</div>
                    <h3 class="h2-xm__node-title">Explore</h3>
                    <p class="h2-xm__node-desc">Discover inspiring people, innovative ideas, industries, startups, technologies, careers, and opportunities that broaden your perspective.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--exchange" data-concept="exchange">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-arrow-left-right"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">02</div>
                    <h3 class="h2-xm__node-title">Exchange</h3>
                    <p class="h2-xm__node-desc">Share knowledge, insights, experiences, and practical wisdom with a community that values learning and collaboration.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--express" data-concept="express">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-chat-quote"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">03</div>
                    <h3 class="h2-xm__node-title">Express</h3>
                    <p class="h2-xm__node-desc">Tell your story, communicate your ideas, showcase your expertise, and inspire others through authentic conversations.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--experience" data-concept="experience">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-calendar-event"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">04</div>
                    <h3 class="h2-xm__node-title">Experience</h3>
                    <p class="h2-xm__node-desc">Participate in podcasts, workshops, networking events, live sessions, and real-world interactions that create lasting learning.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--expand" data-concept="expand">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-diagram-3"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">05</div>
                    <h3 class="h2-xm__node-title">Expand</h3>
                    <p class="h2-xm__node-desc">Grow your professional network, discover partnerships, connect with mentors, and unlock new opportunities.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--excel" data-concept="excel">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-graph-up-arrow"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">06</div>
                    <h3 class="h2-xm__node-title">Excel</h3>
                    <p class="h2-xm__node-desc">Continuously improve your skills, leadership, career, and business while contributing to a thriving ecosystem.</p>
                </div>
            </div>

        </div>{{-- /.h2-xm__constellation --}}

        {{-- Bottom Statement --}}
        <div class="h2-xm__bottom rv">
            <p class="h2-xm__statement">
                Every interaction within the ecosystem moves you through these six dimensions — creating a continuous cycle of <strong>growth, contribution, and impact.</strong>
            </p>
        </div>

    </div>
</section>


<section class="membership-section position-relative mt-150 lg-mt-80 mb-150 lg-mb-80" id="membership">
  <div class="container">
    <div class="section-head text-center" style="margin-bottom: 50px;">
        <div class="eyebrow rv">Membership</div>
        <h2 class="sec-title rv" style="color: #0c3a30;">Find your role in the ecosystem.</h2>
    </div>
    <div class="mem-grid">
      <div class="mem-card">
        <div class="mem-role">Community Member</div>
        <h3>Member</h3>
        <p class="mem-desc">Access stories, events, discussions, and networking across the platform.</p>
      </div>
      <div class="mem-card featured">
        <div class="mem-role">Knowledge Leader</div>
        <h3>Creator / Mentor</h3>
        <p class="mem-desc">Share articles, stories, and thought leadership — or guide aspiring professionals as a mentor.</p>
        <span class="mem-badge">Most Popular</span>
      </div>
      <div class="mem-card">
        <div class="mem-role">Platform Voice</div>
        <h3>Speaker</h3>
        <p class="mem-desc">Participate in podcasts, events, and educational sessions to amplify your expertise.</p>
      </div>
      <div class="mem-card">
        <div class="mem-role">Community Leader</div>
        <h3>Ambassador</h3>
        <p class="mem-desc">Represent Young Chanakya X within campuses or regional communities.</p>
      </div>
      <div class="mem-card">
        <div class="mem-role">Organizational</div>
        <h3>Partner</h3>
        <p class="mem-desc">Collaborate through events, programs, sponsorships, and strategic initiatives.</p>
      </div>
      <div class="mem-card" style="background:rgba(12,58,48,0.04); border-style:dashed; display:flex; align-items:center; justify-content:center; text-align:center;">
        <div>
          <div style="font-size:32px; margin-bottom:12px;">✨</div>
          <div style="font-size:18px; color:#0c3a30; font-weight:700; margin-bottom:8px;">Not sure where you fit?</div>
          <div style="font-size:14px; color:#6b7280;">Join and discover your role within the community.</div>
          <a href="#" class="btn-primary" style="margin-top:20px; display:inline-block; font-size:13px; padding:10px 24px;">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')







@endpush






@endsection


