
@extends('frontend.layouts.app')
@section('title','المركز الاعلامي')
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

<div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
    <div class="container">
        <span class="text-bg">  @lang('site.media_center')</span>
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white" > @lang('site.media_center')</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li><a href="{{ route('homePage') }}">@lang('site.home') </a></li>
                    <li>  @lang('site.media_center')</li>
                </ul>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>


	<!-- breadcrumb-section -->
	{{-- <div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Organic Information</p>
						<h1>News Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150 mt-5">
		<div class="container">
			<div class="row">
                @foreach ($News as $new )


				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">

                        <a href="{{ route('single.news',$new->id) }}">


                            <img src="{{ asset('images/Blog/'.$new->image) }}" alt="" srcset="" style="width: 100%;
                            height: 250px;
                            object-fit: contain;
                            border: 1px solid;">
                        </a>
                        if($new->video){

                            <video id="video" class="slide__img"  style="width: 100%;
                            height: 250px;" src="{{ asset("$new->video") }}"
                                autoplay loop playsinline muted>
                            </video>

                        }
                        {{--  @endif  --}}

                            {{--  <div class="slide__img" style="background-image: url(images/Slider/{{ $slider->image }});">
                                <div class="overlay">
                                </div>
                            </div>
                            <div class="overlay">
                            </div>  --}}
						<div class="news-text-box p-0">
							<h3 class="mb-1 mt-3"><a href="{{ route('single.news',$new->id) }}">{{ $new[$lang.'_title'] }}</a></h3>

							<p class="excerpt mb-0">{{ $new[$lang.'_description'] }}</p>
							<a href="{{ route('single.news',$new->id) }}" class="read-more-btn">@lang('site.read_more') <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
  @endforeach
			</div>

		</div>
	</div>
	<!-- end latest news -->



@endsection
