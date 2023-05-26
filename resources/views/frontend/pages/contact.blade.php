@extends('frontend.layouts.app')
@section('title',' تواصل معنا ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('Images/1.jpeg') }}">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-12 align-self-center text-center">
                            <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1"> تواصل معنا </h1>
                            {{--  <p class="text-color-light custom-secondary-font text-uppercase mb-0"> نبذة عنا</p>  --}}
                        </div>
                    </div>
                </div>
            </section>

        	<div class="container mt-5 mt-lg-0 pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-6 text-center pb-3 pb-lg-0 mb-5 mb-lg-0">
                        <span class="d-block text-color-grey positive-ls-2 font-weight-normal custom-font-size-2 text-color-light opacity-6 mb-1">GET IN TOUCH</span>
                        <h2 class="font-weight-bold text-color-light text-10 mb-5">تواصل معنا</h2>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="row pb-5 mb-5">
                                    <div class="col">
                                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                            <img class="icon-animated" width="55" src="{{ asset('Images/contactus/icon-location.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-3'}" />
                                            <h4 class="font-weight-bold text-color-secondary text-5 mb-0">العنوان</h4>
                                            <p class=" mb-0">  {!! html_entity_decode( $contactInfo['ar_address']) !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                            <img class="icon-animated" width="55" src="{{ asset('Images/contactus/icon-mail.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mb-3'}" />
                                            <h4 class="font-weight-bold text-color-secondary text-5 mb-0">البريد الالكتروني</h4>
                                            <a href="mailto:email@domain.com" class="font-weight-light mb-0">   {!! html_entity_decode( $contactInfo->email) !!}</a>



                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 pt-5">

                                <div class="row pb-5 mb-5">
                                    <div class="col">
                                        <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                            <img class="icon-animated" width="55" src="{{ asset('Images/contactus/icon-phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mb-3'}" />
                                            <h4 class="font-weight-bold text-5 mb-0">ارقامنا</h4>
                                            <a href="tel:+1234567890" class=" font-weight-light mb-0">  {!! html_entity_decode( $contactInfo->phone) !!}</a>
                                        </div>
                                    </div>
                                </div>
                                {{--  <div class="row">
                                    <div class="col">
                                        <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                            <img class="icon-animated" width="55" src="{{ asset('Images/contactus/icon-calendar.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-3'}" />
                                            <h4 class="font-weight-bold text-color-light text-5 mb-0">Working Days/Hours</h4>
                                            <p class="text-4 text-color-light opacity-5 font-weight-light mb-0">Mon - Sun / 9:00AM - 8:00PM</p>
                                        </div>
                                    </div>
                                </div>  --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        {{--  <span class="d-block text-color-secondary positive-ls-2 font-weight-normal custom-font-size-2 text-color-light opacity-6 text-center mb-1">CONTACT FORM</span>  --}}
                        <h2 class="font-weight-bold text-10 text-center pb-3 mb-4">ارسل لنا</h2>
                        <div class="row">
                            <div class="col">

                                <form class="custom-form-style-1 " action="{{ route('contactus.store') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="text" value="" maxlength="100" class="form-control" name="name" placeholder="الاسم" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="text" value=""  maxlength="100" class="form-control" name="phone" placeholder="رقم الجوال" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="email" value="" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="البريد الالكتروني" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <textarea maxlength="5000"  rows="6" class="form-control" name="message" placeholder="رسالتك" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col text-center">
                                            <button type="submit"  class="btn  text-3 font-weight-bold px-5 py-3" style="background: #5595c8;
                                            color: #FFF;
                                            padding: 8px 25px !important;">ارسال</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content END -->
@endsection
