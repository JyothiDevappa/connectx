@extends('layout.app')
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
                <h1>Creators, conversations, and confidence — built for the next era.</h1>
                <p class="hero-copy">ConnectX is a premium digital ecosystem for creators, voices, and brands who want structured influence, real collaborations, and a stronger stage for stories.</p>
                <div class="hero-actions">
                    <a href="#partner" class="btn btn-dark btn-lg">Explore Our Ecosystem</a>
                    <a href="#contact" class="btn btn-outline-dark btn-lg">Partner With ConnectX</a>
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

<div id="partner" class="about-section bg-light">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <h2>Why ConnectX Feels Premium</h2>
                <p class="lead">We combine elevated storytelling, curated creator experiences, and strategic ecosystem growth to deliver measurable visibility and engagement.</p>
                <div class="feature-panel">
                    <ul>
                        <li>Curated creator circles and events</li>
                        <li>Professional content and podcast stages</li>
                        <li>Brand-aligned collaborations with impact</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="side-panel">
                    <h3>Designed for creators who want more than attention.</h3>
                    <p>ConnectX is not just another network — it is a structured launchpad where creators and communicators build credibility, expand reach, and create meaningful influence.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="power-card h-100">
                    <span class="tag">Perspective</span>
                    <h4>Creator-led Identity</h4>
                    <p>We place creators at the center of every experience, helping them shape strong, consistent digital brands.</p>
                </div>
            </div>
            <div class="col">
                <div class="power-card h-100">
                    <span class="tag">Experience</span>
                    <h4>Exclusive Collaborations</h4>
                    <p>Connect with storytellers, podcasts, and premium partners who value authentic narratives over noise.</p>
                </div>
            </div>
            <div class="col">
                <div class="power-card h-100">
                    <span class="tag">Impact</span>
                    <h4>Long-term Visibility</h4>
                    <p>Every ConnectX program is built to turn creator moments into ongoing influence and measurable growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-section bg-light">
    <div class="container">
        <div class="stats-row">
            <div class="stats-card">
                <strong>10K+</strong>
                <span>Creator engagements</span>
            </div>
            <div class="stats-card">
                <strong>85%</strong>
                <span>Partner satisfaction</span>
            </div>
            <div class="stats-card">
                <strong>40+</strong>
                <span>Curated events held</span>
            </div>
            <div class="stats-card">
                <strong>Global</strong>
                <span>Creator reach</span>
            </div>
        </div>
    </div>
</div>

<div class="quote-section">
    <div class="container">
        <div class="quote-card">
            <div>
                <div class="quote-mark">“</div>
                <div class="quote-copy">ConnectX was created so every creator can step into a premium space that values ideas, connection, and quality over viral moments. Here, your voice meets opportunity.</div>
                <div class="quote-author mt-4">
                    <div class="avatar">
                        <img src="{{ asset('images/media/img_20.jpg') }}" alt="Founder">
                    </div>
                    <div class="info">
                        <strong>Founding Team</strong>
                        <span>Young Chanakya ConnectX</span>
                    </div>
                </div>
            </div>
            <div class="side-panel">
                <h3>What makes us different</h3>
                <p>We integrate creator storytelling, partner strategy, and curated distribution to make every collaboration feel premium and purposeful.</p>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="cta-banner">
    <div class="container">
        <div class="cta-panel">
            <h3>Ready to join a premium creator ecosystem?</h3>
            <div class="cta-actions">
                <a href="#contact" class="btn btn-white">Join ConnectX</a>
                <a href="#partner" class="btn btn-outline-light">Book a Meet</a>
            </div>
        </div>
    </div>
</div>

@endsection

