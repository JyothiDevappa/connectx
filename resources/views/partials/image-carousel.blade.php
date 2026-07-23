<section class="connectx-gallery-section">
    <div class="connectx-gallery-container">
        <div class="connectx-gallery-track">
            <!-- Set 1 -->
         <div class="connectx-gallery-content">
    <img src="{{ asset('images/media/partner-page-gallery/horizental-1.jpg') }}" class="gallery-img wide" alt="Strategic Partnership Meeting">

    <img src="{{ asset('images/media/partner-page-gallery/square-1.jpg') }}" class="gallery-img narrow" alt="Business Handshake Partnership">

    <img src="{{ asset('images/media/partner-page-gallery/horizental-2.jpg') }}" class="gallery-img wide" alt="Corporate Networking Event">

    <img src="{{ asset('images/media/partner-page-gallery/square-2.jpg') }}" class="gallery-img narrow" alt="Professional Business Collaboration">

    <img src="{{ asset('images/media/partner-page-gallery/horizental-3.jpg') }}" class="gallery-img wide" alt="Innovation & Ecosystem Growth">

    <img src="{{ asset('images/media/partner-page-gallery/square-3.jpg') }}" class="gallery-img narrow" alt="Successful Partnership Discussion">
</div>
         
<!-- Set 2 (Duplicate for infinite looping) -->
<div class="connectx-gallery-content" aria-hidden="true">
    <img src="{{ asset('images/media/partner-page-gallery/horizental-1.jpg') }}" class="gallery-img wide" alt="Strategic Partnership Meeting">

    <img src="{{ asset('images/media/partner-page-gallery/square-1.jpg') }}" class="gallery-img narrow" alt="Business Handshake Partnership">

    <img src="{{ asset('images/media/partner-page-gallery/horizental-2.jpg') }}" class="gallery-img wide" alt="Corporate Networking Event">

    <img src="{{ asset('images/media/partner-page-gallery/square-2.jpg') }}" class="gallery-img narrow" alt="Professional Business Collaboration">

    <img src="{{ asset('images/media/partner-page-gallery/horizental-3.jpg') }}" class="gallery-img wide" alt="Innovation & Ecosystem Growth">

    <img src="{{ asset('images/media/partner-page-gallery/square-3.jpg') }}" class="gallery-img narrow" alt="Successful Partnership Discussion">
</div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .connectx-gallery-section {
        padding: 20px 0;
        background-color: #ffffff;
        overflow: hidden;
        width: 100%;
    }

    .connectx-gallery-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .connectx-gallery-track {
        display: flex;
        width: max-content;
        animation: connectx-marquee-scroll 35s linear infinite;
    }

    .connectx-gallery-track:hover {
        animation-play-state: paused;
    }

    .connectx-gallery-content {
        display: flex;
        align-items: center;
        gap: 20px;
        padding-right: 20px; /* Must equal gap to prevent loop jump */
    }

    .gallery-img {
        object-fit: cover;
        border-radius: 16px;
        display: block;
        user-select: none;
        -webkit-user-drag: none;
        transition: filter 0.3s ease;
    }

    /* Alternating widths and heights */
    .gallery-img.wide {
        width: 420px;
        height: 280px;
    }

    .gallery-img.narrow {
        width: 280px;
        height: 340px;
    }

    @keyframes connectx-marquee-scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .connectx-gallery-section {
            padding: 40px 0;
        }
        .gallery-img.wide {
            width: 300px;
            height: 200px;
        }
        .gallery-img.narrow {
            width: 200px;
            height: 240px;
        }
        .connectx-gallery-content {
            gap: 15px;
            padding-right: 15px;
        }
    }

    @media (max-width: 576px) {
        .connectx-gallery-section {
            padding: 30px 0;
        }
        .gallery-img.wide {
            width: 195px;
            height: 130px;
        }
        .gallery-img.narrow {
            width: 130px;
            height: 155px;
        }
        .connectx-gallery-content {
            gap: 10px;
            padding-right: 10px;
        }
    }
</style>
@endpush
