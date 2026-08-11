<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="Young Chanakya X, Young Chanakya, creator ecosystem, influencer network, podcast, brand partnerships, creators, India">

    <meta name="description" content="Young Chanakya X is a premium global creator ecosystem by Young Chanakya connecting influencers, podcasters, speakers, founders, and brands.">

    <meta property="og:site_name" content="Young Chanakya X">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Young Chanakya X — Global Creator Ecosystem">
    <meta property="og:image" content="{{ asset('images/assets/seo-share.jpg') }}">
    
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
    </style>

</head>

<body>

    <div class="main-page-wrapper">

        @yield('content')

    </div>


    <!-- JS FILES -->

    <script src="{{ asset('vendor/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>

    <!-- Slick Slider -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>

    <!-- Fancybox -->
    <script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <!-- Lazy -->
    <script src="{{ asset('vendor/jquery.lazy.min.js') }}"></script>

    <!-- Counter -->
    <script src="{{ asset('vendor/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('vendor/jquery.waypoints.min.js') }}"></script>

    <!-- Validator -->
    <script src="{{ asset('vendor/validator.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.js') }}"></script>

    @stack('scripts')

</body>
</html>
