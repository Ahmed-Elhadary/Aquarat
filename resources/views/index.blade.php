@extends('frontend.layouts.app')
@section('title', __('site.queenland'))
@section('content')

    @php $lang = LaravelLocalization::getCurrentLocale(); @endphp
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md full-width nav-inside nav-inside-edge show-nav-hover custom-carousel-arrows-style-1 mb-0"
        data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['600px','600px','600px','500px','500px']"
        style="height: 600px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">


                <!-- Carousel Slide 2 -->
                @foreach ($sliders as $slider)
                    <div class="owl-item position-relative overflow-hidden"
                        style="
                        background:linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(68 68 68 / 58%)), url({{ asset('images/Slider/' . $slider->image) }});
                        background-size: cover; background-position: center; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row align-items-center justify-content-center h-100">
                                <div class="col-lg-7">
                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center text-center h-100">

                                        <h1 class="text-color-light font-weight-extra-bold text-13 line-height-1 mb-2 appear-animation slider-text"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                            data-plugin-options="{'minWindowWidth': 0}">{{ $slider->ar_description }}</h1>
                                        <a href="{{ route('about') }}"
                                            class="btn btn-primary font-weight-bold btn-py-2 btn-px-4 appear-animation button_slider"
                                            data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="1250">المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
    </div>



    <section class="section section-no-border m-0 bg-color-grey ">
        <div class="container">
            @if ($blog)
                <div class="row">
                    <div class="col">
                        <article class="custom-post-event bg-color-light p-4">
                            <div class="post-event-date  text-center">

                                <img src="{{ asset('images/Blog/' . $blog->image) }}" alt class="img-fluid"
                                    style="max-height: 110px;
                            object-fit: cover;
                            width: 190px;" />

                            </div>
                            <div class="post-event-content  ps-2" style="margin-right:203px;">
                                <h4 class="font-weight-bold text-color-dark">
                                    <span class="text-decoration-none custom-secondary-font text-color-dark">
                                        {{ $blog->ar_title }}
                                    </span>
                                </h4>
                                <p>{!! $blog->ar_description !!}</p>

                            </div>
                        </article>
                    </div>
                </div>
            @endif
        </div>
    </section>

    @foreach ($aboutCompany as $about)
        <section class="section section-no-border custom-position-relative custom-section-padding-1 bg-color-light m-0"
            style="overflow: hidden !important">
            {{--  <img class="custom-cloud left-pos d-none d-md-block appear-animation"
                data-appear-animation="customFadeInLeftNoRotate" data-appear-animation-delay="0"
                data-plugin-options="{'accY': -300}" src="{{ asset('images/About/' . $about->image) }}" alt />  --}}
            <div class="custom-big-square left-pos d-none d-md-block custom-box-shadow appear-animation"
                data-appear-animation="customFadeInLeft" data-appear-animation-delay="500"
                data-plugin-options="{'accY': -300}"
                style="background: url({{ asset('images/About/' . $about->image) }}); background-size: cover;"></div>
            <div class="custom-small-square left-pos d-none d-md-block custom-box-shadow appear-animation"
                data-appear-animation="customFadeInLeft" data-appear-animation-delay="1000"
                data-plugin-options="{'accY': -300}"
                style="background: url({{ asset('images/About/' . $about->image2) }}); background-size: cover;"></div>
            {{--  <img class="custom-cloud right-pos d-none d-md-block appear-animation"
                data-appear-animation="customFadeInRightNoRotate" data-appear-animation-delay="0"
                data-plugin-options="{'accY': -300}" src="{{ asset('images/About/' . $about->image) }}" alt />  --}}
            <div class="custom-big-square right-pos d-none d-md-block custom-box-shadow appear-animation"
                data-appear-animation="customFadeInRight" data-appear-animation-delay="500"
                data-plugin-options="{'accY': -300}"
                style="background: url({{ asset('images/About/' . $about->image3) }}); background-size: cover;"></div>
            <div class="custom-small-square right-pos d-none d-md-block custom-box-shadow appear-animation"
                data-appear-animation="customFadeInRight" data-appear-animation-delay="1000"
                data-plugin-options="{'accY': -300}"
                style="background: url({{ asset('images/About/' . $about->image4) }}); background-size: cover;"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-xl-10">
                        {{--  <h2 class="font-weight-bold"> {{ $about[$lang . '_company_name'] }}</h2>  --}}
                        <p> {!! $about[$lang . '_details'] !!}</p>
                        <a href="{{ route('about') }}" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4">
                            المزيد</a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach


    <section class="section section-no-border bg-color-grey m-0">
        <h2 style="text-align: center;
        font-weight: 500;">أعمالنا </h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="galleryAjaxBox" class="ajax-box ajax-box-init mb-4">
                        <div class="bounce-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>

                        <div class="ajax-box-content" id="galleryAjaxBoxContent"></div>

                    </div>
                </div>
            </div>
            <div class="row" data-plugin-masonry data-plugin-options="{'itemSelector': '.col-lg-4'}">

                @foreach ($products as $product)
                    <div class="col-lg-4">
                        <span class="thumb-info custom-thumb-info-4">
                            <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html"
                                class="text-decoration-none  text-color-dark">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('images/Products/' . $product->image) }}" alt class="img-fluid"
                                        style="height: 280px;
                                    object-fit: cover;" />
                                </span>
                            </a>
                            <span class="thumb-info-caption custom-box-shadow">
                                <span class="thumb-info-caption-text">
                                    <h2 class="font-weight-bold text-5 text-center">
                                        <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html"
                                            class="text-decoration-none  text-color-dark">
                                            {{ $product[$lang . '_name'] }}
                                        </a>
                                    </h2>
                                </span>
                            </span>
                        </span>
                    </div>
                @endforeach

            </div>
            <a href="{{ route('services') }}" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4"
                style="    display: block;
            width: 110px;
            margin: auto;">
                المزيد</a>
        </div>
    </section>

    <div id="examples" class="container  py-2">

        <div class="row">
            <h2 style="text-align: center;
            font-weight: 500;margin: 30px 0px;">أعمالنا </h2>
            <div class="col">

                <div class="owl-carousel owl-theme stage-margin"
                    data-plugin-options="{'items': 3, 'margin': 10, 'rtl':true, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">

                    @foreach ($reviews as $review)
                        <div>
                            <a href="{{ asset('Images/Reviews/'.$review->image) }}" target="_blank">
                            <img alt="" class="img-fluid rounded" style=" height: 300px;
                                object-fit: cover;"
                                src="{{ asset('Images/Reviews/'.$review->image) }}">
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
            <a href="{{ route('reviews') }}" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4"
            style="    display: block;
        width: 110px;
        margin: auto;margin-bottom:20px">
            المزيد</a>
        </div>
    </div>



@endsection

@push('custom-scripts')
@endpush
