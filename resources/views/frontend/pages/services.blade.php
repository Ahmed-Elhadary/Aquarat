@extends('frontend.layouts.app')
@section('title',' الخدمات   ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg">  @lang('site.services')</span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">@lang('site.services') </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{ route('homePage') }}"> @lang('site.home')</a></li>
                                <li> @lang('site.services') </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">

                <div class="section-full content-inner bg-gray">
                    <div class="container">


                        <div class="headTitle">
                            <h2>@lang('site.services') </h2>
                             <svg width="180px" height="20px">
                                        <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="50" y1="10" x2="130" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                    </div>
                        <div class="row">

                            <div class="col-lg-8 col-md-12">
                                <div class="section-content row">

                                    <?php $i=1 ?>
                                    @foreach ($services as $service)


                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        @if($i < 10)
                                                 <div class="icon-bx-wraper" data-name="0{{ $i }}">
                                        @else
                                                <div class="icon-bx-wraper" data-name="{{ $i }}">
                                        @endif

                                        <div class="icon-lg">
                                                <a class="icon-cell"><i class="{{ $service->icon }}"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">{{ $service[$lang.'_name'] }}</h2>
                                                <p>{{ $service[$lang.'_details'] }}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <?php $i++ ?>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                            <div class="p-a30  clearfix radius-sm" style="background: #FFF;">
                                <h3 class="m-b10"> @lang('site.send_message_for_us') </h3>
                                <div class="dzFormMsg"></div>
                                <form method="post" action="{{ route('contactus.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="name" type="text" required="" class="form-control" placeholder="@lang('site.name')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="phone" type="number" class="form-control" required="" placeholder="@lang('site.phone')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="email" type="email" class="form-control" required="" placeholder="@lang('site.email')">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="message" rows="4" class="form-control" required="" placeholder="@lang('site.your_message')..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button "> <span>@lang('site.send')</span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- Content END -->

    @endsection
