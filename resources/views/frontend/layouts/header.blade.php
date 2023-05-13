<!DOCTYPE html>
<!-- saved from url=(0054)https://industry.dexignzone.com/xhtml-rtl/index-5.html -->
<html @if (LaravelLocalization::getCurrentLocale() == 'ar') lang="ar" dir="rtl"
@else
lang="en" dir="ltr"
@endif >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="الصناعة - قالب HTML المصنع والصناعي">
    <meta property="og:title" content="الصناعة - قالب HTML المصنع والصناعي">
    <meta property="og:description" content="الصناعة - قالب HTML المصنع والصناعي">
    <meta property="og:image" content="">
    <meta name="format-detection" content="telephone=no">

    <title>@yield('title') </title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>	<script src="js/html5shiv.min.js"></script>	___scripts_1___	<![endif]-->
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templete.min.css') }}">
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rtl.min.css') }}">
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ltr-style.min.css') }}">

    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/flaticon/flaticon.css') }}">
    <!-- Google Font -->
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <!-- Google Font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/base.css') }}" />
</head>

<body>
    <div class="page-wraper roboto-condensed">
