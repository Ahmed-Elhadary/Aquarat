@extends('frontend.layouts.app')
@section('title',' تفاصيل المنتج   ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="category dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url({{ asset('assets/img/slide10.jpg') }})">
                <div class="container">
                    <div class="row dlab-bnr-inr-entry">
                        <div class="col-12">
                            <h1 class="text-white text-center"> @lang('site.product_view')  </h1>
                            <div class="searchbar">
                                <form class="headerFilter" action="{{ route('search') }}" method="GET">
                                <input class="global_search_input search_input" type="text" name="search" autocomplete="off" placeholder="بحــث..." required>
                                <button type="submit" class="search_icon ">
                                    <i class="ti-search"></i>
                                    <div class="spinner-border text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                  </div>
                                </button>
                                </form>
                                <div class="result-search-list"></div>
                            </div>


                            <div class="breadcrumb-row text-left">
                                <ul class="list-inline">
                                    <li><a href="{{ route('homePage') }}">@lang('site.home') </a></li>
                                    @if ($searchPage == 0)
                                     <li> {{ $product[$lang.'_name'] }}  </li>
                                    @else
                                    <li>
                                        @foreach ($products as $product)
                                            {{ $product[$lang.'_name'] }}
                                        @endforeach
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <!-- Breadcrumb row -->

                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">

                @if ($searchPage == 0)
                <div class="section-full content-inner const-about about-page">
                    <div class="container">
                        <div class="headTitle">
                            <h2>@lang('site.product_details')   </h2>
                             <svg width="180px" height="20px">
                                        <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="50" y1="10" x2="130" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-12 wow bounceInRight" data-wow-duration="2s"
                                data-wow-delay="0.3s">
                                <div class="radius-sm m-b30 img-ho1 dis-none-border">
                                    <div class="img-border">
                                        <img src="{{ asset('images/Products/'.$product->image)}}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12 wow bounceInLeft" data-wow-duration="2s"
                                data-wow-delay="0.6s">
                                <div class="content-bx1">

                                    <div class="section-head style2">
                                        <h2 class="title"> {{ $product[$lang.'_name'] }}  </h2>
                                        <p>
                                            {!! html_entity_decode(  $product[$lang.'_details'] ) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="section-full content-inner const-about about-page">
                    <div class="container">

                                <div class="headTitle">
                                    <h2> @lang('site.product_details')  </h2>
                                     <svg width="180px" height="20px">
                                                <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                                 <line x1="50" y1="10" x2="130" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                                    </svg>
                                </div>
                        @foreach ($products as $product)

                        @endforeach
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-12  wow bounceInRight " data-wow-duration="2s"  data-wow-delay="0.2s">
                                <div class="radius-sm m-b30 img-ho1">
                                    <div class="img-border">
                                        <img src="{{ asset('images/Products/'.$product->image)}}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12  wow bounceInLeft" data-wow-duration="2s"  data-wow-delay="0.4s">
                                <div class="content-bx1">

                                    <div class="section-head style2">
                                        <h2 class="title"> {{ $product[$lang.'_name'] }}  </h2>
                                        <p>
                                            {!! html_entity_decode(  $product[$lang.'_details'] ) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @endif


            </div>
        </div>
        <!-- Content END -->

    @endsection

