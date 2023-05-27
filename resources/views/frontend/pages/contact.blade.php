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

                        <div class="row">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h1 class="mt-5 mb-5">تواصل معنا</h1>
								<ul class="list list-icons list-icons-style-2 mt-2" style="font-size: 18px">
									<li> <strong class="text-dark"> العنوان:  </strong> {!! html_entity_decode( $contactInfo['ar_address']) !!}</li>
									<li> <strong class="text-dark">ارقامنا : </strong> {!! html_entity_decode( $contactInfo->phone) !!}</li>
									<li> <strong class="text-dark">  البريد الالكترونى: </strong> <a > {!! html_entity_decode( $contactInfo->email) !!}</a></li>
								</ul>
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
