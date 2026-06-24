<!--
    ============================================================
    SEO PARTIAL - resources/views/partials/seo.blade.php
    ============================================================
    Usage: include at the top of every page layout.
    Each page can pass a $seo[] array via php before extends.
    ============================================================
-->

@php
    // ── Site-wide defaults ──────────────────────────────────────
    $siteName    = 'Young Chanakya X';
    $siteUrl     = config('app.url');
    $defaultImg  = asset('images/assets/ogg.png');
    $canonical   = url()->current();

    // Merge page-specific overrides with defaults
    $seo = $seo ?? [];

    $title       = $seo['title']       ?? 'Young Chanakya X — Global Creator Ecosystem by Young Chanakya';
    $description = $seo['description'] ?? 'Young Chanakya X is a premium global creator ecosystem by Young Chanakya connecting influencers, podcasters, speakers, founders, and brands through collaborations, events, and exclusive experiences.';
    $keywords    = $seo['keywords']    ?? 'Young Chanakya X, Young Chanakya, creator ecosystem, influencer network, podcast, brand partnerships, creator lounges, digital creators, India';
    $ogImage     = $seo['image']       ?? $defaultImg;
    $ogType      = $seo['type']        ?? 'website';
    $robots      = $seo['robots']      ?? 'index, follow';
    $author      = $seo['author']      ?? 'Young Chanakya X';
@endphp

{{-- ── Core Meta ──────────────────────────────────────────────── --}}
<title>{{ $title }}</title>
<meta name="description"    content="{{ $description }}">
<meta name="keywords"       content="{{ $keywords }}">
<meta name="author"         content="{{ $author }}">
<meta name="robots"         content="{{ $robots }}">
<meta name="language"       content="English">
<meta name="revisit-after"  content="7 days">

{{-- ── Canonical URL ─────────────────────────────────────────── --}}
<link rel="canonical" href="{{ $canonical }}">

{{-- ── Open Graph (Facebook / LinkedIn / WhatsApp) ──────────── --}}
<meta property="og:site_name"   content="{{ $siteName }}">
<meta property="og:type"        content="{{ $ogType }}">
<meta property="og:url"         content="{{ $canonical }}">
<meta property="og:title"       content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image"       content="{{ $ogImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt"   content="{{ $siteName }} — Creator Ecosystem">
<meta property="og:locale"      content="en_IN">

{{-- ── Twitter Card ─────────────────────────────────────────── --}}
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:site"        content="@@YoungChanakyaX">
<meta name="twitter:creator"     content="@@YoungChanakya">
<meta name="twitter:title"       content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image"       content="{{ $ogImage }}">
<meta name="twitter:image:alt"   content="{{ $siteName }} — Creator Ecosystem">

{{-- ── Favicon & App Icons ───────────────────────────────────── --}}
<link rel="icon"             type="image/png" sizes="32x32"  href="{{ asset('images/fav-icon/icon.png') }}">
<link rel="icon"             type="image/png" sizes="16x16"  href="{{ asset('images/fav-icon/icon.png') }}">
<link rel="shortcut icon"    type="image/x-icon"             href="{{ asset('images/fav-icon/icon.png') }}">
<link rel="apple-touch-icon" sizes="180x180"                 href="{{ asset('images/fav-icon/icon.png') }}">
<meta name="theme-color"                    content="#1A4137">
<meta name="msapplication-TileColor"        content="#1A4137">
<meta name="msapplication-navbutton-color"  content="#1A4137">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-capable"   content="yes">
<meta name="apple-mobile-web-app-title"     content="{{ $siteName }}">

{{-- ── Mobile / Viewport ────────────────────────────────────── --}}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"              content="width=device-width, initial-scale=1.0">

