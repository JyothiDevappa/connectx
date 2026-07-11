@php
/**
 * Become a Partner Page SEO Data
 */
$seo = [
    'title'       => 'Become a Partner — Join the Young Chanakya X Creator Ecosystem',
    'description' => 'Partner with Young Chanakya X to access a premium creator ecosystem. Content partnerships, brand collaborations, media partnerships, and community connections await.',
    'keywords'    => 'become a Young Chanakya X partner, creator partnership, brand collaboration Young Chanakya X, media partnership India, content creator partner, Young Chanakya partner',
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
    "@type": "Service",
    "name": "Young Chanakya X Partnership Program",
    "url": "https://connectx.youngchanakya.com/become-a-partner",
    "description": "Partner with Young Chanakya X to access a premium global creator ecosystem. Content partnerships, brand collaborations, media partnerships, and community connections.",
    "provider": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    },
    "serviceType": "Creator Ecosystem Partnership",
    "areaServed": {
        "@type": "Country",
        "name": "India"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Partnership Types",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Content Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Brand Collaborations"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Media Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Community Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Event Partnerships"}}
        ]
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
@endpush

@section('content')

<style>
#hdr:not(.scrolled) .hamburger span {
    background: #0c3a30 !important;
}

.partner-form-box label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #19352d;
    margin-bottom: 8px;
    text-align: left;
}

.partner-form-box .form-control::placeholder {
    color: #888888 !important;
}

/* ==========================================
   BECOME A PARTNER — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Hero / Contact Section ---- */
@media (max-width: 991px) {
    .partner-contact-section {
        padding: 120px 0 70px;
    }
    .partner-content {
        text-align: center;
        padding-right: 0;
        margin-bottom: 36px;
    }
    .partner-content h1 {
        font-size: clamp(28px, 6vw, 42px);
        letter-spacing: -1px;
    }
    .partner-form-box {
        padding: 30px 24px;
    }
}

@media (max-width: 767px) {
    .partner-contact-section {
        padding: 100px 0 50px;
    }
    .partner-content h1 {
        font-size: 28px;
        margin-bottom: 16px;
    }
    .partner-content p {
        font-size: 15px;
    }
    .partner-form-box {
        padding: 24px 18px;
    }
    .partner-submit-btn {
        padding: 14px;
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .partner-contact-section {
        padding: 90px 0 40px;
    }
    .partner-content h1 {
        font-size: 24px;
    }
    .partner-form-box {
        padding: 20px 14px;
    }
}

/* Checklist Info */
.checklist-style {
    list-style: none;
    padding: 0;
    margin: 35px 0 0 0;
}

.checklist-style li {
    font-size: 16px;
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

</style>

<style>
    .about-hero .eyebrow.rv { color: #0c3a30 !important; font-weight: 700; font-family: 'DM Mono', monospace; font-size: 13px; }
    .about-hero .eyebrow.rv::before { background: #d4936a !important; width: 42px; height: 2px; }
</style>
<div class="about-hero" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Partner With Us</div>
                <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Build the Future Together</h1>
                <p class="hero-copy">Join the Young Chanakya X ecosystem to access a premium global network. We foster meaningful content partnerships, brand collaborations, and community connections that drive innovation and long-term value.</p>
              
                <div class="about-hero-buttons">
                    <a href="#partnership-opportunities" class="about-btn-2">View Partnership Opportunities</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="partner-form-box" id="partner-form">

                    @if (session('error') || $errors->any())
                        <div class="alert alert-danger mb-4" style="font-weight: 500;">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> 
                            @if (session('error'))
                                {{ session('error') }}
                            @else
                                Please correct the errors in the form below.
                            @endif
                        </div>
                    @endif

                    <form action="{{ route('partner.apply') }}" method="POST">
                        @csrf

                        <div class="row">

                            <!-- 1. Full Name and Phone number -->
                            <div class="col-md-6 mb-3">
                                <label for="partner-name">Full Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-name"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Full Name" required>
                                @error('name')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-phone">Phone / WhatsApp <span class="text-danger">*</span></label>
                                <input type="tel"
                                    id="partner-phone"
                                    class="form-control"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="E.g. +91 98765 43210" required>
                                @error('phone')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 2. Email -->
                            <div class="col-12 mb-3">
                                <label for="partner-email">Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                    id="partner-email"
                                    class="form-control"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email Address" required>
                                @error('email')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 3. Company Name, Designation -->
                            <div class="col-md-6 mb-3">
                                <label for="partner-company">Organization / Company Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-company"
                                    class="form-control"
                                    name="company"
                                    value="{{ old('company') }}"
                                    placeholder="Organization / Company Name" required>
                                @error('company')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-designation">Designation / Role <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-designation"
                                    class="form-control"
                                    name="designation"
                                    value="{{ old('designation') }}"
                                    placeholder="Designation / Role" required>
                                @error('designation')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 4. LinkedIn and website url -->
                            <div class="col-md-6 mb-3">
                                <label for="partner-linkedin">LinkedIn Profile <span class="text-danger">*</span></label>
                                <input type="url"
                                    id="partner-linkedin"
                                    class="form-control"
                                    name="linkedin"
                                    value="{{ old('linkedin') }}"
                                    placeholder="LinkedIn Profile" required>
                                @error('linkedin')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-website">Website URL (Optional)</label>
                                <input type="url"
                                    id="partner-website"
                                    class="form-control"
                                    name="website"
                                    value="{{ old('website') }}"
                                    placeholder="Website URL">
                                @error('website')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 5. partnership type select -->
                            <div class="col-12 mb-4">
                                <label for="partner-type">Partnership Type <span class="text-danger">*</span></label>
                                <select class="form-control form-select"
                                    id="partner-type"
                                    name="partnership_type" required>
                                    <option value="" disabled {{ old('partnership_type') ? '' : 'selected' }}>
                                        Select Partnership Type
                                    </option>
                                    @foreach(['Content Partnerships', 'Brand Collaborations', 'Media Partnerships', 'Community Partners', 'Technology Partners'] as $type)
                                        <option value="{{ $type }}" {{ old('partnership_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                                @error('partnership_type')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="partner-submit-btn">
                                    Submit
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- second section -->

<section class="connectx-how-works-section-wrapper pt-70 lg-pt-80 pb-70 lg-pb-80">
    <div class="container">

        <div class="text-center mb-70">
            <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Our Network</div>
            <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Who We Work With</h2>
        </div>

        <div class="row align-items-center gy-5">

            <!-- CONTENT SIDE -->
            <div class="col-lg-6 wow fadeInRight">
                <div class="px-lg-4" style="margin-top: -30px;">
                    <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px; color: #d4936a;">Community First</div>
                    <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15; margin-bottom: 25px;">Building a Scalable <br> Creator Network</h2>

                    <p class="sec-desc rv" style="margin-bottom: 35px; color: #4b5563;">
                        Young Chanakya X is building a network of creators, voices, and collaborators across industries and geographies, enabling partners to access a diverse and growing ecosystem.
                    </p>

                    <style>
                        .connectx-expand-points.theme-dark li {
                            color: #ffffff !important;
                        }
                        .connectx-expand-points.theme-dark li::before {
                            background: rgba(255, 210, 177, 0.15) !important;
                            color: #ffd2b1 !important;
                            border: 1px solid rgba(255, 210, 177, 0.3) !important;
                        }
                    </style>
                    <ul class="style-none connectx-expand-points theme-dark">
                        <li>Multi-industry creator ecosystem</li>
                        <li>Cross-border collaboration opportunities</li>
                        <li>Digital-first scalable network</li>
                    </ul>
                </div>
            </div>

            <!-- IMAGE SIDE -->
            <div class="col-lg-6 col-md-10 m-auto wow fadeInLeft">
                <div class="media-wrapper px-lg-4">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=80"
                        alt="Global business collaboration"
                        class="lazy-img w-100 connectx-expand-pro-img" style="border-radius: 20px;">
                </div>
            </div>

        </div>
    </div>
</section>

@if (session('success'))
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">The Start of a Powerful Collaboration</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    Your partnership application has been successfully received. Our team is currently reviewing your profile and will connect with you shortly to explore how we can align our visions for mutual growth. We look forward to building something extraordinary together.
                </p>
                <a href="{{ url('/') }}" class="btn px-5 py-3 fw-bold text-uppercase w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue Exploring
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successModalElement = document.getElementById('successModal');
        if (successModalElement) {
            var myModal = new bootstrap.Modal(successModalElement);
            myModal.show();
        }
    });
</script>
@endpush
@endif

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var phoneInput = document.querySelector('input[name="phone"]');
        if (phoneInput) {
            var iti = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
            });

            // On submit, update phone input value with the full international number
            var form = phoneInput.closest('form');
            if (form) {
                form.addEventListener('submit', function() {
                    phoneInput.value = iti.getNumber();
                });
            }
        }
    });
</script>
@endpush

@endsection
