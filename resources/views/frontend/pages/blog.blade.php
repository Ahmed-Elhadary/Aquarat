
@extends('frontend.layouts.app')
@section('title','المركز الاعلامي')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

<section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('Images/1.jpeg') }}">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1">   خدماتنا</h1>
                <p class="text-color-light custom-secondary-font text-uppercase mb-0">  بعض خدماتنا</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border bg-color-light m-0">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($CompanyServices as $CompanyService)
            <div class="col-lg-4 mb-4">
                <article class="custom-post-blog">
                    <span class="thumb-info custom-thumb-info-2">
                        <span class="thumb-info-wrapper">
                            <a href="demo-church-blog-detail.html">
                                <img src="{{ asset('images/CompanyService/'.$CompanyService->image )}}" style="object-fit:fill; height: 250px " alt class="img-fluid" />
                            </a>
                        </span>
                        <span class="thumb-info-caption custom-box-shadow">
                            <span class="thumb-info-caption-text">
                                <h4 class="font-weight-bold mb-4">
                                    <span class="text-decoration-none custom-secondary-font text-color-dark">
                                        {{ $CompanyService->ar_name }}
                                    </span>
                                </h4>
                                <p>{!! $CompanyService->ar_details !!}</p>
                            </span>
                        </span>
                    </span>
                </article>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
