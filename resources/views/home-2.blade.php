@php
/**
 * Home-2 — Trust-Driven Ecosystem Homepage
 * ─────────────────────────────────────────
 * A storytelling homepage that answers visitor trust questions
 * through a guided journey: Curiosity → Understanding → Trust →
 * Credibility → Opportunity → Aspiration → Belonging → Action.
 */
$seo = [
    'title'       => 'Young Chanakya X — Where Stories, Knowledge & People Connect',
    'description' => 'Young Chanakya X is a curated leadership ecosystem connecting founders, creators, experts, researchers, educators, investors, mentors, speakers, and changemakers through knowledge exchange, collaboration, and community impact.',
    'keywords'    => 'Young Chanakya X, Young Chanakya X ecosystem, leadership network, talent discovery, mentorship community, startup ecosystem, research collaboration, awards recognition, podcast network, community chapters India',
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
            "description": "A curated leadership ecosystem connecting founders, creators, experts, researchers, and changemakers.",
            "inLanguage": "en-IN"
        },
        {
            "@type": "Organization",
            "@id": "https://connectx.youngchanakya.com/#organization",
            "name": "Young Chanakya X",
            "url": "https://connectx.youngchanakya.com/",
            "description": "A digital-first ecosystem where leaders, creators, and changemakers connect to exchange knowledge, collaborate, and create impact.",
            "foundingDate": "2024",
            "founder": {
                "@type": "Person",
                "name": "Young Chanakya",
                "jobTitle": "Founder & Visionary"
            }
        }
    ]
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/home-2.css') }}?v={{ time() }}">
@endpush

@section('content')


{{-- ════════════════════════════════════════════════════════════
     1. HERO — "What exactly is this?"
     Visitor Psychology: Curiosity. First 3 seconds decide everything.
     Trust Goal: Instantly communicate purpose, credibility, and scale.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-hero rv" id="home">
    <div class="h2-hero__bg">
        <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=1800&q=80"
             alt="Professional community gathering at Young Chanakya X ecosystem event">
        <div class="h2-hero__overlay"></div>
        <div class="h2-hero__grain"></div>
    </div>

    <div class="container">
        <div class="h2-hero__content">
            <div class="h2-hero__label">
                <span>Young Chanakya X Ecosystem</span>
            </div>

            <h1 class="h2-hero__title">
                Where Stories, Knowledge<br>& People <em>Connect.</em>
            </h1>

            <p class="h2-hero__subtitle">
                A curated ecosystem where founders, creators, experts, researchers, educators, investors, mentors, speakers, and changemakers come together to exchange knowledge, collaborate meaningfully, and create lasting impact.
            </p>

            <div class="h2-hero__actions">
                <a href="/become-a-partner" class="h2-btn h2-btn--accent">Join the Ecosystem →</a>
                <a href="/about" class="h2-btn h2-btn--outline">Our Story</a>
            </div>

            <div class="h2-hero__trust">
                <div class="h2-hero__trust-item">
                    <i class="bi bi-shield-check-fill"></i> Verified Members Only
                </div>
                <div class="h2-hero__trust-item">
                    <i class="bi bi-people-fill"></i> 500+ Ecosystem Leaders
                </div>
                <div class="h2-hero__trust-item">
                    <i class="bi bi-geo-alt-fill"></i> Active Across 12+ Cities
                </div>
            </div>
        </div>
    </div>

    <div class="h2-hero__scroll">
        <div class="h2-hero__scroll-line"></div>
        <span class="h2-hero__scroll-text">Explore</span>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     2. TRUST BAR — Borrowed Credibility
     Visitor Psychology: Validation. "Who else is involved?"
     Trust Goal: Institutional association before any content.
     ════════════════════════════════════════════════════════════ --}}

<div class="h2-trustbar">
    <div class="container">
        <div class="h2-trustbar__inner">
            <span class="h2-trustbar__label">Ecosystem Partners</span>
            <div class="h2-trustbar__logos">
                {{-- Replace these with real partner logos --}}
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/272px-Google_2015_logo.svg.png" alt="Partner" class="h2-trustbar__logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/200px-Microsoft_logo_%282012%29.svg.png" alt="Partner" class="h2-trustbar__logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/200px-Amazon_logo.svg.png" alt="Partner" class="h2-trustbar__logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/200px-Netflix_2015_logo.svg.png" alt="Partner" class="h2-trustbar__logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/100px-Apple_logo_black.svg.png" alt="Partner" class="h2-trustbar__logo">
            </div>
        </div>
    </div>
</div>




{{-- ════════════════════════════════════════════════════════════
     4. IMPACT METRICS — "Has this created real impact?"
     Visitor Psychology: Proof. Numbers bypass skepticism.
     Trust Goal: Quantified evidence that this is real and active.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--cream">
    <div class="container">
        <div class="h2-section-header">
            <div class="h2-eyebrow rv">Ecosystem Impact</div>
            <h2 class="h2-heading rv">Numbers that speak for themselves.</h2>
        </div>

        <div class="h2-metrics__grid">
            <div class="h2-metric rv">
                <div class="h2-metric__number stat-num" data-target="500">0<sup>+</sup></div>
                <div class="h2-metric__label">Ecosystem Members</div>
            </div>
            <div class="h2-metric rv">
                <div class="h2-metric__number stat-num" data-target="12">0<sup>+</sup></div>
                <div class="h2-metric__label">Active Cities</div>
            </div>
            <div class="h2-metric rv">
                <div class="h2-metric__number stat-num" data-target="50">0<sup>+</sup></div>
                <div class="h2-metric__label">Events & Sessions</div>
            </div>
            <div class="h2-metric rv">
                <div class="h2-metric__number stat-num" data-target="15">0<sup>+</sup></div>
                <div class="h2-metric__label">Industry Verticals</div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     4b. WHAT DOES "X" MEAN? — "What is the deeper idea here?"
     Visitor Psychology: Conceptual clarity. Understanding the DNA of the brand.
     Trust Goal: Show that X isn't random — it's a deliberate philosophy of intersection.
     ════════════════════════════════════════════════════════════ --}}

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

            {{-- Connection Lines (SVG) --}}
            <svg class="h2-xm__lines" viewBox="0 0 1200 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                <line class="h2-xm__line" x1="600" y1="450" x2="210" y2="140" stroke-dasharray="6 4"/>
                <line class="h2-xm__line" x1="600" y1="450" x2="990" y2="140" stroke-dasharray="6 4"/>
                <line class="h2-xm__line" x1="600" y1="450" x2="100" y2="500" stroke-dasharray="6 4"/>
                <line class="h2-xm__line" x1="600" y1="450" x2="1100" y2="500" stroke-dasharray="6 4"/>
                <line class="h2-xm__line" x1="600" y1="450" x2="260" y2="790" stroke-dasharray="6 4"/>
                <line class="h2-xm__line" x1="600" y1="450" x2="940" y2="790" stroke-dasharray="6 4"/>
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


{{-- ════════════════════════════════════════════════════════════
     5. WHAT X STANDS FOR — "What does this ecosystem do?"





{{-- ════════════════════════════════════════════════════════════
     7. FEATURED LEADERS — "Who is already part of this?"
     Visitor Psychology: Social proof through real people.
     Trust Goal: Named individuals with titles = strongest trust signal.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--cream" id="leaders">
    <div class="container">
        <div class="h2-section-header">
            <div class="h2-eyebrow rv">Featured Ecosystem Leaders</div>
            <h2 class="h2-heading rv">The people who make<br>this ecosystem <em>real.</em></h2>
            <p class="h2-desc h2-desc--center rv">
                Verified leaders across business, technology, finance, creative industries, and social impact.
            </p>
        </div>

        <div class="h2-leaders__grid">
            <div class="h2-leader rv">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&h=200&fit=crop&q=80"
                     alt="Ecosystem Leader" class="h2-leader__photo">
                <div class="h2-leader__name">
                    Vikram Patel <i class="bi bi-patch-check-fill"></i>
                </div>
                <div class="h2-leader__title">Serial Entrepreneur<br>Founder, ScaleX Ventures</div>
                <div class="h2-leader__domain">Business & Growth</div>
            </div>
            <div class="h2-leader rv">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=200&h=200&fit=crop&q=80"
                     alt="Ecosystem Leader" class="h2-leader__photo">
                <div class="h2-leader__name">
                    Dr. Meera Nair <i class="bi bi-patch-check-fill"></i>
                </div>
                <div class="h2-leader__title">AI Researcher<br>IISc Bengaluru</div>
                <div class="h2-leader__domain">Innovation & Tech</div>
            </div>
            <div class="h2-leader rv">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&q=80"
                     alt="Ecosystem Leader" class="h2-leader__photo">
                <div class="h2-leader__name">
                    Rohan Gupta <i class="bi bi-patch-check-fill"></i>
                </div>
                <div class="h2-leader__title">Venture Partner<br>Nexus Capital</div>
                <div class="h2-leader__domain">Finance & Investment</div>
            </div>
            <div class="h2-leader rv">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&fit=crop&q=80"
                     alt="Ecosystem Leader" class="h2-leader__photo">
                <div class="h2-leader__name">
                    Ananya Rao <i class="bi bi-patch-check-fill"></i>
                </div>
                <div class="h2-leader__title">Content Strategist<br>Creator Economy Lead</div>
                <div class="h2-leader__domain">Creative & Media</div>
            </div>
        </div>

        <div class="text-center mt-5 rv">
            <a href="/connecters-list" class="h2-btn">Explore the Full Directory →</a>
        </div>
    </div>
</section>







{{-- ════════════════════════════════════════════════════════════
     10. PODCAST & KNOWLEDGE — Content proof
     Visitor Psychology: "Show me, don't tell me."
     Trust Goal: Real content proves the ecosystem produces tangible output.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--dark" id="podcast">
    <div class="container">
        <div class="h2-podcast__grid">
            <div class="rv-l">
                <div class="h2-podcast__visual">
                    <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?w=800&q=80"
                         alt="Young Chanakya X podcast recording session"
                         loading="lazy">
                    <div class="h2-podcast__play">
                        <i class="bi bi-play-fill"></i>
                    </div>
                </div>
            </div>
            <div class="rv-r">
                <div class="h2-eyebrow h2-eyebrow--light">Podcast & Knowledge Network</div>
                <h2 class="h2-heading h2-heading--light">Conversations that<br>move <em>industries.</em></h2>
                <p class="h2-desc h2-desc--light">
                    Real stories, expert insights, and unfiltered conversations with ecosystem leaders — recorded in our creator lounges and distributed globally.
                </p>

                <div class="h2-podcast__episodes">
                    <div class="h2-podcast__ep">
                        <span class="h2-podcast__ep-num">EP 42</span>
                        <p class="h2-podcast__ep-title">Building Scalable Infrastructure with Rohan Sharma</p>
                        <span class="h2-podcast__ep-dur">38 min</span>
                    </div>
                    <div class="h2-podcast__ep">
                        <span class="h2-podcast__ep-num">EP 41</span>
                        <p class="h2-podcast__ep-title">From Research to Revenue: Dr. Meera Nair's Journey</p>
                        <span class="h2-podcast__ep-dur">45 min</span>
                    </div>
                    <div class="h2-podcast__ep">
                        <span class="h2-podcast__ep-num">EP 40</span>
                        <p class="h2-podcast__ep-title">The Art of Community Building at Scale</p>
                        <span class="h2-podcast__ep-dur">32 min</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     11. TALENT WING — Future Leaders
     Visitor Psychology: Aspiration for emerging talent; pride for seniors.
     Trust Goal: An ecosystem that invests in the next generation is built to last.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--white" id="talent">
    <div class="container">
        <div class="h2-talent__grid">

            <div class="rv-l">
                <div class="h2-eyebrow">Talent Wing</div>
                <h2 class="h2-heading">Discovering tomorrow's <em>leaders</em> today.</h2>
                <p class="h2-desc">
                    The Talent Wing identifies, elevates, and connects high-potential individuals — students, young professionals, and emerging innovators — with the mentors, platforms, and opportunities they need to lead.
                </p>

                <div class="h2-talent__features">
                    <div class="h2-talent__feat">
                        <div class="h2-talent__feat-icon"><i class="bi bi-search"></i></div>
                        <div class="h2-talent__feat-title">Talent Identification</div>
                        <p class="h2-talent__feat-desc">Scouting high-potential individuals across campuses and communities.</p>
                    </div>
                    <div class="h2-talent__feat">
                        <div class="h2-talent__feat-icon"><i class="bi bi-eye"></i></div>
                        <div class="h2-talent__feat-title">Visibility Platforms</div>
                        <p class="h2-talent__feat-desc">Podcasts, features, and event stages that amplify emerging voices.</p>
                    </div>
                    <div class="h2-talent__feat">
                        <div class="h2-talent__feat-icon"><i class="bi bi-compass"></i></div>
                        <div class="h2-talent__feat-title">Expert Mentorship</div>
                        <p class="h2-talent__feat-desc">Direct access to industry leaders for guidance and growth.</p>
                    </div>
                    <div class="h2-talent__feat">
                        <div class="h2-talent__feat-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <div class="h2-talent__feat-title">Leadership Pathways</div>
                        <p class="h2-talent__feat-desc">Structured programs that fast-track professional development.</p>
                    </div>
                </div>

                <a href="/become-a-partner" class="h2-btn">Nominate Emerging Talent →</a>
            </div>

            <div class="rv-r">
                <div class="h2-talent__visual">
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&q=80"
                         alt="Young professionals at a leadership development event"
                         loading="lazy">
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     12. AWARDS & RECOGNITION
     Visitor Psychology: Aspiration. "I want to be recognized here."
     Trust Goal: An ecosystem that confers recognition has institutional authority.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--cream" id="awards">
    <div class="container">
        <div class="h2-section-header">
            <div class="h2-eyebrow rv">Awards & Recognition</div>
            <h2 class="h2-heading rv">Celebrating excellence across<br>the <em>ecosystem.</em></h2>
            <p class="h2-desc h2-desc--center rv">
                Annual recognition for leaders, innovators, and changemakers who create measurable impact through their work.
            </p>
        </div>

        <div class="h2-awards__grid">
            <div class="h2-award rv">
                <div class="h2-award__icon"><i class="bi bi-gem"></i></div>
                <div class="h2-award__title">Leadership Excellence</div>
                <p class="h2-award__desc">Recognizing individuals who demonstrate exceptional leadership, vision, and community contribution across industries.</p>
            </div>
            <div class="h2-award rv">
                <div class="h2-award__icon"><i class="bi bi-lightning-charge"></i></div>
                <div class="h2-award__title">Innovation & Impact</div>
                <p class="h2-award__desc">Celebrating founders, researchers, and creators who build solutions that create measurable societal or economic impact.</p>
            </div>
            <div class="h2-award rv">
                <div class="h2-award__icon"><i class="bi bi-stars"></i></div>
                <div class="h2-award__title">Emerging Talent</div>
                <p class="h2-award__desc">Spotlighting future leaders — students, young professionals, and rising voices who show extraordinary promise.</p>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════
     13. MENTORSHIP & EXPERT NETWORK
     Visitor Psychology: "Can I access real experts, not just peers?"
     Trust Goal: Named mentors with real credentials = depth of network.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--dark" id="mentors">
    <div class="container">
        <div class="h2-section-header">
            <div class="h2-eyebrow h2-eyebrow--light rv">Mentorship & Expert Network</div>
            <h2 class="h2-heading h2-heading--light rv">Learn from leaders who've <em>built it.</em></h2>
            <p class="h2-desc h2-desc--light h2-desc--center rv">
                Structured access to experienced leaders across industries — ongoing guidance, not one-time conversations.
            </p>
        </div>

        <div class="h2-mentors__grid">
            <div class="h2-mentor rv">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&q=80"
                     alt="Mentor" class="h2-mentor__photo">
                <div class="h2-mentor__name">Aditya Verma</div>
                <div class="h2-mentor__expertise">Business Strategy</div>
                <div class="h2-mentor__years">18+ years experience</div>
            </div>
            <div class="h2-mentor rv">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=200&h=200&fit=crop&q=80"
                     alt="Mentor" class="h2-mentor__photo">
                <div class="h2-mentor__name">Kavitha Nair</div>
                <div class="h2-mentor__expertise">Product & Technology</div>
                <div class="h2-mentor__years">15+ years experience</div>
            </div>
            <div class="h2-mentor rv">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&q=80"
                     alt="Mentor" class="h2-mentor__photo">
                <div class="h2-mentor__name">Suresh Iyer</div>
                <div class="h2-mentor__expertise">Venture Capital</div>
                <div class="h2-mentor__years">20+ years experience</div>
            </div>
            <div class="h2-mentor rv">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&fit=crop&q=80"
                     alt="Mentor" class="h2-mentor__photo">
                <div class="h2-mentor__name">Lakshmi Devi</div>
                <div class="h2-mentor__expertise">Research & Academia</div>
                <div class="h2-mentor__years">22+ years experience</div>
            </div>
        </div>

        <div class="text-center mt-5 rv">
            <a href="/become-a-partner" class="h2-btn h2-btn--accent">Connect with a Mentor →</a>
        </div>
    </div>
</section>




{{-- ════════════════════════════════════════════════════════════
     15. MEMBERSHIP ECOSYSTEM — "How can I participate?"
     Visitor Psychology: Self-selection. "Which tier am I?"
     Trust Goal: Structured tiers = exclusive, professionally managed.
     ════════════════════════════════════════════════════════════ --}}

<section class="h2-section h2-section--cream" id="membership">
    <div class="container">
        <div class="h2-section-header">
            <div class="h2-eyebrow rv">Membership Ecosystem</div>
            <h2 class="h2-heading rv">Structured access for<br>every <em>stage.</em></h2>
            <p class="h2-desc h2-desc--center rv">
                From emerging talent to industry leaders — the right level of access, community, and opportunity.
            </p>
        </div>

        <div class="h2-membership__grid">

            {{-- Tier 1 --}}
            <div class="h2-tier rv">
                <div class="h2-tier__badge">Tier 01</div>
                <div class="h2-tier__name">Emerging</div>
                <div class="h2-tier__audience">For students, aspiring entrepreneurs, and early-career professionals.</div>
                <ul class="h2-tier__benefits">
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Community directory listing</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Access to public events & meetups</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Talent Wing nomination eligibility</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Peer networking opportunities</li>
                </ul>
                <a href="/become-a-partner" class="h2-btn h2-btn--outline-dark" style="width:100%; justify-content:center;">Apply →</a>
            </div>

            {{-- Tier 2 (Featured) --}}
            <div class="h2-tier h2-tier--featured rv">
                <div class="h2-tier__badge">Tier 02</div>
                <div class="h2-tier__name">Professional</div>
                <div class="h2-tier__audience">For founders, researchers, creators, and experienced professionals.</div>
                <ul class="h2-tier__benefits">
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Everything in Emerging</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Podcast & speaking opportunities</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Mentorship matching</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Awards nomination eligibility</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Exclusive roundtable access</li>
                </ul>
                <a href="/become-a-partner" class="h2-btn h2-btn--accent" style="width:100%; justify-content:center;">Apply →</a>
            </div>

            {{-- Tier 3 --}}
            <div class="h2-tier rv">
                <div class="h2-tier__badge">Tier 03</div>
                <div class="h2-tier__name">Leadership</div>
                <div class="h2-tier__audience">For industry leaders, investors, advisors, and institutional heads.</div>
                <ul class="h2-tier__benefits">
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Everything in Professional</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Advisory council consideration</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Institutional partnership access</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Keynote speaker invitations</li>
                    <li class="h2-tier__benefit"><i class="bi bi-check2-circle"></i> Strategic collaboration opportunities</li>
                </ul>
                <a href="/become-a-partner" class="h2-btn h2-btn--outline-dark" style="width:100%; justify-content:center;">Apply →</a>
            </div>

        </div>
    </div>
</section>



@endsection

