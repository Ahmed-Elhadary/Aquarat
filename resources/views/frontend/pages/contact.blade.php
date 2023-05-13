@extends('frontend.layouts.app')
@section('title',' تواصل معنا ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg"> @lang('site.contact')</span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">@lang('site.contact')</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{ route('homePage') }}">@lang('site.home') </a></li>
                                <li>@lang('site.contact') </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">
                <div class="section-full content-inner bg-white contact-style-1">
                    <div class="container">

                        <div class="headTitle">
                            <h2>@lang('site.contact')</h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>


                        <div class="row">
                            <!-- right part start -->
                            <div class="col-lg-4 col-md-6 d-flex m-b30">
                                <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
                                    <h3 class="m-b5">@lang('site.fast_contact') </h3>
                                    <p>@lang('site.for_contact').</p>
                                    <ul class="no-margin">
                                        <li class="icon-bx-wraper left m-b30">
                                            <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dlab-tilte">@lang('site.address')</h6>
                                                <div class="contactInfo-data">
                                                    {!! html_entity_decode( $contactInfo[$lang.'_address']) !!}
                                                </div>

                                            </div>
                                        </li>
                                        <li class="icon-bx-wraper left  m-b30">
                                            <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dlab-tilte"> @lang('site.email')</h6>
                                                <div class="contactInfo-data">
                                                    {!! html_entity_decode( $contactInfo->email) !!}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="icon-bx-wraper left">
                                            <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dlab-tilte"> @lang('site.phone')</h6>
                                                <div class="contactInfo-data">
                                                    {!! html_entity_decode( $contactInfo->phone) !!}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="m-t20">
                                        <ul class="dlab-social-icon border dlab-social-icon-lg">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- right part END -->
                            <!-- Left part start -->
                            <div class="col-lg-8 col-md-6  mb-4 m-b30 mb-md-0">
                                <div class="p-a30 bg-gray clearfix radius-sm">
                                    <h3 class="m-b10"> @lang('site.send_u_message') </h3>
                                    <div class="dzFormMsg"></div>
                                    <form method="post" action="{{ route('contactus.store') }}"  class="" >
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
                                                        <input name="phone" type="text" class="form-control" required="" placeholder=" @lang('site.phone')">
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
                                                        <textarea name="message" rows="4" class="form-control" required="" placeholder="@lang('site.your_message')"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <button type="submit"   class="site-button m-r10 m-b10 btnhover20"> @lang('site.send')</button>
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
