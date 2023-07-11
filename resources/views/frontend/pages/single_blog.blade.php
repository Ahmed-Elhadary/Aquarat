@extends('frontend.layouts.app')
@section('title', 'المركز الاعلامي')
@section('content')

    @php $lang = LaravelLocalization::getCurrentLocale(); @endphp


    <section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('Images/1.jpeg') }}">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12 align-self-center text-center">
                    <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1">   شهاداتنا</h1>
                    <p class="text-color-light custom-secondary-font text-uppercase mb-0">  بعض شهاداتنا</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border bg-color-light m-0">
        <div class="container">

            <div class="row">
                @foreach ($ClientReviews as $ClientReview)
                <div class="col-lg-4 col-sm-6 mt-3">
                    <span class="thumb-info custom-thumb-info-3 custom-box-shadow-2">
                        <span class="thumb-info-wrapper">
                            <a href="{{ asset('images/Reviews/'.$ClientReview->image)}}" target="_blank"  class="text-decoration-none">
                                <img height="235px;" style="object-fit: contain" src="{{ asset('images/Reviews/'.$ClientReview->image)}}"/>
                            </a>
                        </span>
                        <span class="thumb-info-caption text-center">
                            <span class="thumb-info-caption-text">
                                <h4 class="font-weight-bold custom-primary-font mb-0 mt-3">
                                    <a href="demo-church-about-us-staff-detail.html" class="text-color-dark text-decoration-none">
                                        {{ $ClientReview->ar_name }}
                                    </a>
                                </h4>
                            </span>
                        </span>
                    </span>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
