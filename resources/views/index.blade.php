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
                                        {{--  <span class="position-relative text-color-light text-6 line-height-5 font-weight-medium custom-secondary-font pe-4 mb-0 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                    dfffffffffffffffffffffffffffffffff
                                </span>  --}}
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
    @foreach ($aboutCompany as $about)
        <section class="section section-no-border custom-position-relative custom-section-padding-1 bg-color-light m-0">
            <img class="custom-cloud left-pos d-none d-md-block appear-animation"
                data-appear-animation="customFadeInLeftNoRotate" data-appear-animation-delay="0"
                data-plugin-options="{'accY': -300}" src="{{ asset('images/About/' . $about->image) }}" alt />
            <div class="custom-big-square left-pos d-none d-md-block custom-box-shadow appear-animation"
                data-appear-animation="customFadeInLeft" data-appear-animation-delay="500"
                data-plugin-options="{'accY': -300}"
                style="background: url({{ asset('images/About/' . $about->image) }}); background-size: cover;"></div>
            <div class="custom-small-square left-pos d-none d-md-block custom-box-shadow appear-animation"
                data-appear-animation="customFadeInLeft" data-appear-animation-delay="1000"
                data-plugin-options="{'accY': -300}"
                style="background: url({{ asset('images/About/' . $about->image2) }}); background-size: cover;"></div>
            <img class="custom-cloud right-pos d-none d-md-block appear-animation"
                data-appear-animation="customFadeInRightNoRotate" data-appear-animation-delay="0"
                data-plugin-options="{'accY': -300}" src="{{ asset('images/About/' . $about->image) }}" alt />
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
                        <h2 class="font-weight-bold"> {{ $about[$lang . '_company_name'] }}</h2>
                        <p> {{ $about[$lang . '_details'] }}</p>
                        <a href="{{ route('about') }}" class="btn btn-primary custom-btn-style-1 text-uppercase mt-4">
                            المزيد</a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    {{--  <section class="page-header page-header-modern bg-color-secondary  mb-0">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">مشاريعنا</h1>
            </div>
        </div>
    </div>
</section>  --}}

    <section class="section section-no-border bg-color-light m-0">
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
                                class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('images/Products/' . $product->image) }}" alt class="img-fluid" />
                                </span>
                            </a>
                            <span class="thumb-info-caption custom-box-shadow">
                                <span class="thumb-info-caption-text">
                                    <h2 class="font-weight-bold text-5 text-center">
                                        <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html"
                                            class="text-decoration-none custom-secondary-font text-color-dark"
                                            data-ajax-on-page>
                                            {{ $product[$lang . '_name'] }}
                                        </a>
                                    </h2>
                                </span>
                            </span>
                        </span>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



    <section class="section section-no-border custom-position-relative custom-overflow-hidden p-0 m-0">
        <div class="custom-view-our-location text-center">
            <img src="img/demos/church/others/view-our-location.png" alt />
            <a href="#" onclick="initMapAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)"
                class="custom-view-location custom-secondary-font font-weight-bold text-color-light text-decoration-none">View
                Our Location</a>
        </div>
        <div id="googlemaps" class="google-map"></div>
    </section>
@endsection

@push('custom-scripts')
@endpush
