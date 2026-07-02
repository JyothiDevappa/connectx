<section class="connectx-gallery-section">
    <div class="connectx-gallery-container">
        <div class="connectx-gallery-track">
            <!-- Set 1 -->
            <div class="connectx-gallery-content">
                <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?auto=format&fit=crop&q=80&w=800" class="gallery-img wide" alt="Corporate Collaboration">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" class="gallery-img narrow" alt="Professional Teamwork">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=800" class="gallery-img wide" alt="Business Conference">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600" class="gallery-img narrow" alt="Startup Innovation">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800" class="gallery-img wide" alt="Creator Ecosystem">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=600" class="gallery-img narrow" alt="Strategic Partnership">
            </div>
            <!-- Set 2 (Duplicate for infinite looping) -->
            <div class="connectx-gallery-content" aria-hidden="true">
                <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?auto=format&fit=crop&q=80&w=800" class="gallery-img wide" alt="Corporate Collaboration">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" class="gallery-img narrow" alt="Professional Teamwork">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=800" class="gallery-img wide" alt="Business Conference">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600" class="gallery-img narrow" alt="Startup Innovation">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800" class="gallery-img wide" alt="Creator Ecosystem">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=600" class="gallery-img narrow" alt="Strategic Partnership">
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .connectx-gallery-section {
        padding: 60px 0;
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
        height: 280px;
        object-fit: cover;
        border-radius: 16px;
        display: block;
        user-select: none;
        -webkit-user-drag: none;
        transition: filter 0.3s ease;
    }

    /* Alternating widths */
    .gallery-img.wide {
        width: 420px; /* 3:2 ratio */
    }

    .gallery-img.narrow {
        width: 280px; /* 1:1 ratio */
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
        .gallery-img {
            height: 200px;
            border-radius: 12px;
        }
        .gallery-img.wide {
            width: 300px;
        }
        .gallery-img.narrow {
            width: 200px;
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
        .gallery-img {
            height: 130px;
            border-radius: 8px;
        }
        .gallery-img.wide {
            width: 195px;
        }
        .gallery-img.narrow {
            width: 130px;
        }
        .connectx-gallery-content {
            gap: 10px;
            padding-right: 10px;
        }
    }
</style>
@endpush
