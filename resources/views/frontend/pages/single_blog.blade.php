@extends('frontend.layouts.app')
@section('title', 'المركز الاعلامي')
@section('content')

    @php $lang = LaravelLocalization::getCurrentLocale(); @endphp

    <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
        <div class="container">
            <span class="text-bg"> @lang('site.about_company') </span>
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white"> @lang('site.about_company')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('homePage') }}"> @lang('site.home')</a></li>
                        <li> @lang('site.about_company') </li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <!-- single article section -->

    <div class="mt-3 mb-3">
        <div class="container">

            <div class="col-lg-12">
                <div class="single-article-section">
                    <div class="single-article-text">

                        <img src="{{ asset('images/Blog/' . $blog->image) }}" alt="" srcset="" style="height: 300px;
                                width: 400px;
                                object-fit: contain;
                                border: 1px solid #DDD;
        margin-bottom: 10px;">

                        <!-- <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> @lang('site.admin')</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p> -->

                        <h2>{{ $blog[$lang . '_title'] }}</h2>
                        <p>{{ $blog[$lang . '_description'] }}</p>

                    </div>



                </div>
            </div>

        </div>
    </div>
    <!-- end single article section -->
@endsection
