@extends('frontend.layouts.app')
@section('title',' ')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->

				<section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('Images/About/2021-04-07-22-44-03_image_4.jpg') }}">
					<div class="container">
						<div class="row my-5">
							<div class="col-md-12 align-self-center text-center">
								<h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1">  من نحن</h1>
								<p class="text-color-light custom-secondary-font text-uppercase mb-0"> نبذة عنا</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
                        @foreach ($aboutCompany as $about)
						<div class="row">
							<div class="col-lg-7 col-sm-7">
								<h2 class="font-weight-bold">{{ $about[$lang.'_company_name'] }}</h2>
								<p>{{ $about[$lang.'_details'] }}</p>
								{{--  <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis mauris urna. Donec pellentesque eros non sapien malesuada, at facilisis diam interdum. Praesent non cursus dui, et consectetur risus. Pellentesque eu arcu sollicitudin, viverra neque ut, facilisis ligula. In faucibus tellus ac metus ullamcorper aliquet. Aliquam sem dui, cursus quis magna vitae, convallis malesuada tellus. Nam malesuada.</p>  --}}
							</div>
							<div class="col-lg-5 col-sm-5 d-none d-sm-block">
								<div class="custom-box-squares">
									<img class="custom-cloud left-pos-2" alt src="img/demos/church/others/left-cloud.png" />
									<div class="custom-big-square left-pos-2 custom-box-shadow" style="background: url({{ asset('images/About/'.$about->image )}}); background-size: cover;"></div>
									<div class="custom-small-square left-pos-2 custom-box-shadow" style="background: url({{ asset('images/About/'.$about->image2 )}}); background-size: cover;"></div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</section>



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
