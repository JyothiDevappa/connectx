<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">

    <meta name="description" content="Babun is a beautiful website template designed for Business & Consulting websites.">

    <meta property="og:site_name" content="Babun">
    <meta property="og:url" content="https://creativegigstf.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Babun - Business & Consulting HTML5 Template">
    <meta property="og:image" content="{{ asset('images/assets/ogg.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#1A4137">
    <meta name="msapplication-navbutton-color" content="#1A4137">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">

    <title>ConnectX</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56"
        href="{{ asset('images/fav-icon/icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
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