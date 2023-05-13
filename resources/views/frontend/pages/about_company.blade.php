@extends('frontend.layouts.app')
@section('title',' عن كوين لاند ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp


        <div class="page-content bg-white">

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg">@lang('site.about_company') </span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">  @lang('site.about_company') </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{ route('homePage') }}">@lang('site.home')  </a></li>
                                <li> @lang('site.about')  </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">

                <div class="section-full content-inner const-about about-page">
                    <div class="container">

                        <div class="headTitle">
                            <h2>@lang('site.about_queenland') {{ $company[$lang.'_name'] }}  </h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>



                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-12 " data-wow-duration="2s"
                                data-wow-delay="0.3s">
                                <div class="radius-sm m-b30 img-ho1">
                                    @if($company->aboutCompany)
                                    <div class="img-border">
                                        <img src="{{ asset('images/About/'.$company->aboutCompany->image )}}" alt="">
                                    </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12 " data-wow-duration="2s"
                                data-wow-delay="0.6s">
                                <div class="content-bx1">
                                    @if($company->aboutCompany)
                                    <div class="about-year"> <span>{{ $company->aboutCompany->years }}</span>
                                        <p>@lang('site.years')<br>@lang('site.of_work')<br>@lang('site.experience')</p>
                                    </div>
                                    @endif
                                    <div class="section-head style2">
                                        <h2 class="title"> {{ $company->aboutCompany[$lang.'_company_name'] }}</h2>
                                        @if ()

                                        @endif
                                        <p>
                                            {{ $company->aboutCompany[$lang.'_details'] }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                {{--  <div class="section-full content-inner bg-white">
                    <div class="container">

                        <div class="row">

                            @foreach ($services as $service)
                                <div class="col-lg-4 col-md-6 col-sm-12 m-b30  wow bounceInUp" data-wow-duration="2s"
                                    data-wow-delay="0.3s">
                                    <div class="icon-bx-wraper bx-style-2 m-l40 p-a30 left bg-gray icon-bx-ho">
                                        <div class="icon-bx-sm bg-primary m-b20"><span class="icon-cell"><i
                                                    class="{{ $service->icon }}"></i></span> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="dlab-tilte">{{ $service[$lang.'name'] }}</h5>
                                            <p>
                                                {{ $service[$lang.'_details'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box"
                    style="background-image:url(assets/img/slide10.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInRight" data-wow-duration="2s"
                                data-wow-delay="0.2s">
                                <div class="section-head text-white text-center">
                                    <img src="{{asset('assets/img/logo.jpg')}}" alt="" style=" width: 160px; margin-bottom: 15px;">
                                    <h2 class="title">@lang('site.best_product')</h2>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="row sp20">
                                    <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s"
                                        data-wow-delay="0.2s">
                                        <div class="icon-bx-wraper center counter-style-5">
                                            <div class="icon-xl m-b20">
                                                <span class="icon-cell"><i class="flaticon-value"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <div class="dlab-separator bg-primary"></div>
                                                <h2 class="dlab-tilte counter">{{ $achievements->clients }}</h2>
                                                <p>@lang('site.happy_customer') </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s"
                                        data-wow-delay="0.4s">
                                        <div class="icon-bx-wraper center counter-style-5">
                                            <div class="icon-xl m-b20">
                                                <span class="icon-cell"><i class="flaticon-employee"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <div class="dlab-separator bg-primary"></div>
                                                <h2 class="dlab-tilte counter">{{ $achievements->employee }}</h2>
                                                <p> @lang('site.employees') </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s"
                                        data-wow-delay="0.6s">
                                        <div class="icon-bx-wraper center counter-style-5">
                                            <div class="icon-xl m-b20">
                                                <span class="icon-cell"><i class="flaticon-company"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <div class="dlab-separator bg-primary"></div>
                                                <h2 class="dlab-tilte counter">{{ $achievements->since }}</h2>
                                                <p> @lang('site.built_since') </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="company-date" dir="ltr">
                    <div class="container">

                        <div class="headTitle">
                            <h2> @lang('site.company_date')</h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>
                        <div class="timeline">
                            <div class="timeline-nav">
                                @foreach ($dates as   $date)
                                  <div class="timeline-nav__item">{{ Carbon\Carbon::parse($date->company_date)->format('Y') }}</div>
                                @endforeach

                            </div>
                            <div class="timeline-wrapper">
                                <div class="timeline-slider">

                                    @foreach ($dates as  $date)
                                    <div class="timeline-slide" >
                                        <div class="timeline-slide__content"   data-year="{{ Carbon\Carbon::parse($date->company_date)->format('Y') }}">
                                            <span class="timeline-year">{{ Carbon\Carbon::parse($date->company_date)->format('Y') }}</span>
                                            <h4 class="timeline-title">{{ $date[$lang.'_title'] }}</h4>
                                            <p class="timeline-text">
                                                {{ $date[$lang.'_details'] }}
                                            </p>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>  --}}




            </div>
        </div>
        <!-- Content END -->

@endsection
@push('custom-scripts')
	<script>

$(function () {
    $('.timeline-nav').slick({
        slidesToShow: 12,
        slidesToScroll: 1,
        asNavFor: '.timeline-slider',
        centerMode: false,
        focusOnSelect: true,
        mobileFirst: true,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 8,
                }
            },
            {
                breakpoint: 0,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                }
            }
        ]
    });

    $('.timeline-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.timeline-nav',
        centerMode: true,
        cssEase: 'ease',
        edgeFriction: 0.5,
        mobileFirst: true,
        speed: 500,
        responsive: [
            {
                breakpoint: 0,
                settings: {
                    centerMode: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true
                }
            }
        ]
    });

});

</script>
@endpush
