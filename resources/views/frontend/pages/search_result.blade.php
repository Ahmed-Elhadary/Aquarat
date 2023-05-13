@extends('frontend.layouts.app')
@section('title',' المنتجات   ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="category dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url('{{ asset('assets/img/slide10.jpg') }}');">
                <div class="container">

                    <div class="row dlab-bnr-inr-entry">
                        <div class="col-12">
                            <h1 class="text-white text-center"> @lang('site.products') </h1>
                            <div class="searchbar">
                                <form class="headerFilter" action="{{ route('search') }}" method="GET">
                                <input class="global_search_input search_input" type="text" name="search" autocomplete="off" placeholder="بحــث..." required>
                                <button type="submit" class="search_icon ">
                                    <i class="ti-search"></i>
                                    <div class="spinner-border text-warning" role="status">
                                    <span class="sr-only">@lang('site.loading')...</span>
                                  </div>
                                </button>
                                </form>
                                <div class="result-search-list"></div>
                            </div>


                            <div class="breadcrumb-row text-left">
                                <ul class="list-inline">
                                    <li><a href="{{ route('homePage') }}">@lang('site.home') </a></li>
                                    <li>  @lang('site.search_result')  </li>
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


                <div class="section-full pt-4 portfolio text-uppercase bg-gray products-section" id="portfolio">
                    <div class="container">

                        <div class="headTitle">
                            <h2>  @lang('site.search_result')</h2>
                             <svg width="180px" height="20px">
                                        <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="50" y1="10" x2="130" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>


                        <div class="row">
                            @if($check !=0)
                            @foreach ($products as $product )
                                <div class="col-lg-3 col-md-6">
                                    <div class="dlab-box m-b30 dlab-team1">
                                        <div class="dlab-media">
                                                <img width="358" height="460" alt="" src="{{ asset('images/Products/'.$product->image)}}">
                                        </div>
                                        <div class="dlab-info">
                                            <a href="{{ route('viewProduct', $product->id) }}"><h4 class="dlab-title">{{ $product->ar_name }}</h4></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <p class="search no-result">

                                <i class="fa fa-info"></i>
                                 <br>
                                @lang('site.no_search_result')
                                </p>
                            @endif

                        </div>

                    </div>
                </div>




            </div>
        </div>
        <!-- Content END -->
@endsection

