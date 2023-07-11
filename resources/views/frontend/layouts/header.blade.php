<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'ar') lang="ar" dir="rtl"
@else
lang="en" dir="ltr" @endif>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MS </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    {{--  <meta name="keywords" content="mukhadbat, alsahmim, mukhadbat-alsahmim,صهاميم,مخضبات الصهاميم,مخضبات">
    <meta name="description"  content="mukhadbat, alsahmim, mukhadbat-alsahmim,صهاميم,مخضبات الصهاميم,مخضبات">  --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400,400i,700%7CSintony:400,700,800&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/master/rtl/css/rtl-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/master/rtl/css/rtl-theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/master/rtl/css/rtl-theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/master/rtl/css/rtl-theme-shop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/master/rtl/css/demos/rtl-demo-church.css') }}">

    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skin-church.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <style>
        @import url('http://fonts.cdnfonts.com/css/cairo');

        body,
        h1,a,button,
        span,
        h2,
        h3,
        h4,strong,p,b,
        h5 , ul, li,.custom-secondary-font{
            font-family: 'Cairo', sans-serif !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
