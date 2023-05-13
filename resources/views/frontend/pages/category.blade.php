@extends('frontend.layouts.app')
@section('title',' التصنيف الرئيسي ')
@section('content')

@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="category dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <div class="row dlab-bnr-inr-entry">
                        <div class="col-12">
                            <h1 class="text-white text-center">@lang('site.products_classification')  </h1>

                            <div class="searchbar">
                                <form class="headerFilter" action="{{ route('search') }}" method="GET">
                                <input class="global_search_input search_input" type="text" name="search" autocomplete="off" placeholder="@lang('site.search')" required>
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
                                    <li> @lang('site.products_classification')  </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">


                <div class="section-full content-inner-2 portfolio text-uppercase bg-gray category-section" id="portfolio">
                    <div class="container">

                        <div class="headTitle">
                            <h2>@lang('site.products_classification') </h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>


                        <div class="row">
                            @foreach ($categories as $category )
                                <div class="col-lg-3 col-md-6">
                                    <div class="indurance-feature-item">
                                        <div class="feature-image">
                                            <img src="{{ asset('images/Main_Category/'.$category->image)}}" alt="">
                                        </div>
                                        <a href="{{ route('products',$category->id) }}">
                                            <div class="feature-content">
                                                <h5 class="title">{{ $category[$lang.'_name'] }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="section-content box-sort-in m-b15">
                            <div class="pagination-bx rounded pagination-sm clearfix">
                                {{ $categories->links('paginator') }}
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!-- Content END -->
 @endsection

