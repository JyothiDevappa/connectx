<section class="image-carousel-section pt-80 pb-80" style="background-color: #f9f9f9; overflow: hidden;">
    <div class="container-fluid px-4 px-lg-5" style="max-width: 1700px; margin: 0 auto;">
        <div class="section-head text-center mb-50">
            <div class="eyebrow rv" style="color: #0c3a30;">Gallery</div>
            <h2 class="sec-title rv" style="color: #0c3a30;">Experience The Ecosystem</h2>
        </div>

        <div class="slick-image-carousel">
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070&auto=format&fit=crop" alt="Event" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" alt="Networking" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" alt="Discussion" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=2070&auto=format&fit=crop" alt="Meetup" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" alt="Collaboration" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1558403194-611308249627?q=80&w=2070&auto=format&fit=crop" alt="Stage" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
            <div class="carousel-item-wrap px-3">
                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=2070&auto=format&fit=crop" alt="Audience" style="width: 100%; border-radius: 20px; aspect-ratio: 4/3; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<style>
    .slick-image-carousel {
        padding-bottom: 60px;
        margin-bottom: 20px;
    }
    .slick-image-carousel .slick-track {
        display: flex;
        align-items: center;
    }
    .slick-image-carousel .slick-dots {
        bottom: 0px !important;
    }
    .slick-image-carousel .slick-dots li button:before {
        font-size: 12px;
    }
    .carousel-item-wrap img {
        transition: transform 0.3s ease;
    }
    .carousel-item-wrap:hover img {
        transform: scale(1.03);
    }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slick-image-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
@endpush
