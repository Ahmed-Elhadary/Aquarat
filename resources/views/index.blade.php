@extends('frontend.layouts.app')
@section('title',__('site.queenland'))
@section('content')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->
            <div class="demo-2 loading">
                <div class="slideshow">
                    <div class="slides">

                        @foreach ($sliders as $slider)
                            <div class="slide {{ ($loop->first) ? 'slide--current' : '' }}">
                                @if($slider->image)
                                    <div class="slide__img" style="background-image: url(images/Slider/{{ $slider->image }});">
                                        <div class="overlay">
                                        </div>
                                    </div>
                                @elseif($slider->video)
                                    <video id="video" class="slide__img"  width="100%" src="{{ asset("$slider->video") }}"
                                        autoplay loop playsinline muted>
                                    </video>
                                    <div class="overlay">
                                    </div>
                                @endif

                                <h3 class="slide__title">@lang('site.queenland')
                                </h3>
                                <p class="slide__desc">
                                   {{ $slider[$lang.'_description'] }}
                                </p>

                                <a href="#home-about">
                                    <div class="arrow-container ">
                                        <div class="arrow-2">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <div class="arrow-1 animated hinge infinite zoomIn"></div>
                                    </div>
                                </a>
                            </div>
                        @endforeach



                    </div>
                    <nav class="slidenav">


                        <button class="slidenav__item slidenav__item--next">
                            <a class="animated-arrow-right ">
                                <span class="the-arrow -left">
                                    <span class="shaft"></span>
                                </span>
                                <span class="circle"></span>
                                <span class="the-arrow -right">
                                    <span class="shaft"></span>
                                </span>
                                </span>
                            </a>
                        </button>
                        <button class="slidenav__item slidenav__item--prev" style="display: none;">
                            <a class="animated-arrow-left">
                                <span class="the-arrow -left">
                                    <span class="shaft"></span>
                                </span>
                                <span class="circle"></span>
                                <span class="the-arrow -right">
                                    <span class="shaft"></span>
                                </span>
                                </span>
                            </a>
                        </button>
                    </nav>
                </div>
            </div>

            {{--  companies  --}}

            <div class="section-full bg-gray content-inner-2 pt-5 pb-3" >
                <div class="container">

                    <div class="headTitle">
                        <h2>@lang('site.companies')</h2>
                         <svg width="200px" height="20px">
                                    <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                     <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                        </svg>
                    </div>
                    <div class="img-carousel owl-carousel owl-theme owl-none dots-style-3 owl-rtl owl-drag">

                                @foreach ($companies as $company)


                                    <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">

                                        <div class="dlab-box m-b30 dlab-team1">
                                            <div class="dlab-media">
                                                <a href="javascript:;">
                                                    @if($company->image)
                                                    <img width="358" height="460" alt="" src="{{ asset('images/company/'.$company->image)}}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="dlab-info">
                                                <h4 class="dlab-title"><a href="javascript:;">{{ $company[$lang.'_name'] }}</a></h4>
                                                {{--  <a href="{{ route('viewcompany',$company->id ) }}"><span class="dlab-position"> @lang('site.read_more') ..</span></a>  --}}

                                            </div>
                                        </div>

                                    </div>

                                    @endforeach
                        </div>

                </div>
            </div>



            <div class="content-block" id="home-about">
                <!-- Content Section -->
                <div class="section-full content-inner const-about">
                    <div class="container">

                        <div class="headTitle">
                            <h2>@lang('site.about') @lang('site.queenland') </h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>

                        @foreach ($aboutCompany as $about)


                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-12 " data-wow-duration="2s"
                                data-wow-delay="0.3s">
                                <div class="radius-sm m-b30 img-ho1">
                                    <div class="img-border">
                                        <img src="{{ asset('images/About/'.$about->image )}}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12 " data-wow-duration="2s"
                                data-wow-delay="0.6s">
                                <div class="content-bx1">
                                    <div class="about-year"> <span>{{ $about->years }}</span>
                                        <p>@lang('site.years')<br>@lang('site.of_work')<br>@lang('site.experience')</p>
                                    </div>
                                    <div class="section-head style2">
                                        <h2 class="title"> {{ $about[$lang.'_company_name'] }}</h2>
                                        <p>
                                            {{ $about[$lang.'_details'] }}
                                        </p>
                                    </div>
                                    <a href="{{ route('about') }}" class="site-button m-r10 m-b10 btnhover20">@lang('site.more_view')</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Content Section End -->
                <!-- team -->
{{--
                <div class="section-full  content-inner">
                    <div class="container">

                        <div class="headTitle">
                            <h2>الهيكل الإدارى </h2>
                             <svg width="180px " height="20px">
                                        <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="50" y1="10" x2="130" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>
                        <div class="row">
                            @foreach ($people as $person)
                            <div class="col-lg-3 col-md-6 col-sm-6 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.1s">

                                        <a class="blogArrow"  data-toggle="modal" data-target="#exampleModalCenter"
                                        data-ar_name="{{ $person->ar_name }}" data-image='{{ $person->image }}'
                                        data-ar_job_title ='{{ $person->ar_job_title }}' data-ar_details="{{ $person->ar_details }}"
                                        data-facebook="{{ $person->facebook }}" data-twitter="{{ $person->twitter }}"
                                        data-instagram="{{ $person->instagram }}" data-gmail="{{ $person->gmail }}"
                                        data-linkedin="{{ $person->linkedin }}">
                                        <div class="dlab-box m-b30  dlab-team6">
                                            <div class="dlab-border-left"></div>
                                            <div class="dlab-border-right"></div>
                                            <div class="dlab-media">
                                                    <img alt="" src="{{ asset('images/People/'.$person->image)}}">
                                            </div>
                                            <div class="dlab-info">
                                                <h4 class="dlab-title"><a >{{ $person->ar_name }}</a></h4>
                                                <span class="dlab-position">{{ $person->ar_job_title }}</span>
                                            </div>
                                        </div>
                                    </a>

                        </div>
                            @endforeach

                        </div>
                        <a href="{{ route('employee') }}" class="site-button m-r10 m-b10 btnhover20 ">عرض المزيد</a>
                    </div>
                </div> --}}

                <!-- new product -->

                <div class="section-full bg-gray content-inner-2" >
                    <div class="container">

                        <div class="headTitle">
                            <h2>@lang('site.new_products')</h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>
                        <div class="img-carousel owl-carousel owl-theme owl-none dots-style-3 owl-rtl owl-drag">

                                    @foreach ($products as $product)


                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('images/Products/'.$product->image)}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">{{ $product[$lang.'_name'] }}</a></h4>
                                                    <a href="{{ route('viewProduct',$product->id ) }}"><span class="dlab-position"> @lang('site.read_more') ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        @endforeach
                            </div>
                        <div class="text-center">
                            <a href="#" class="site-button m-r10 m-b10 btnhover20 "> @lang('site.more_view')</a>
                        </div>
                    </div>
                </div>

                <!-- end new product -->

                <!-- reviews -->

                 <div class="section-full content-inner   bg-white" id="client">
                    <div class="container">

                        <div class="headTitle">
                            <h2>@lang('site.emplopyees_decision')  </h2>
                             <svg width="200px" height="20px">
                                        <line x1="0" y1="10" x2="200" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                         <line x1="60" y1="10" x2="140" y2="10" stroke="#f7c800" stroke-width="6px"></line>
                            </svg>
                        </div>
                        <div
                            class="testimonial-six owl-loaded owl-theme owl-carousel owl-none dots-style-3 owl-rtl owl-drag">

                            @foreach ($reviews as $review)


                            <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>
                                           {{ $review[$lang.'_message'] }}
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow">
                                            @if ($review->image)
                                            <img src="{{ asset('images/Reviews/'.$review->image )}}"  width="100" height="100" alt="">
                                            @else
                                            <img src="{{ asset('images/profile.jpg')}}"  width="100" height="100" alt="">
                                            @endif
                                        </div>
                                        <h5 class="testimonial-name m-t0 m-b5">{{ $review[$lang.'_name'] }}</h5> <span
                                            class="testimonial-position">{{ $review[$lang.'_job'] }}</span>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>

                </div>

</div>
        </div>
        <!-- Content END -->
        <div class="modal fade modal-employee text-center" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"> @lang('site.employee_details') </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="modal-image"  alt="">
                    <h3 class="modal-name"> </h3>
                    <h4 class="modal-position"></h4>
                    <p class="modal-description"></p>
                    <ul class="modal-social">
                        <li>
                            <a class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="google" target="_blank"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">@lang('site.close')</button>
                </div>
              </div>
            </div>
          </div>


@endsection

@push('custom-scripts')
<script type="text/javascript" src="{{ asset('assets/js/demo2.js')}}"></script>

<script>
$('#exampleModalCenter').on('show.bs.modal',function(e){

    $('.modal-employee .modal-social li').show();

    var btntarget = $(e.relatedTarget);
    var ar_name = btntarget.data('ar_name');
    var image = btntarget.data('image');
    var ar_details = btntarget.data('ar_details');
    var facebook = btntarget.data('facebook');
    var twitter = btntarget.data('twitter');
    var instagram = btntarget.data('instagram');
    var linkedin = btntarget.data('linkedin');
    var gmail = btntarget.data('gmail');
    var ar_job_title = btntarget.data('ar_job_title');

    var ss="{{ asset('images/People') }}/"+image;

    $('.modal-employee .modal-name').text(ar_name);
    $('.modal-employee .modal-description').text(ar_details);
    $('.modal-employee .modal-image').attr("src", ss);
    $('.modal-employee .modal-position').text(ar_job_title);
    if(facebook){
        $('.modal-employee .modal-social .facebook').attr("href",facebook);
    }else{
        $('.modal-employee .modal-social .facebook').parent().hide();
    }
    if(twitter){
        $('.modal-employee .modal-social .twitter').attr("href",twitter);
    }else{
        $('.modal-employee .modal-social .twitter').parent().hide();
    }
    if(instagram){
        $('.modal-employee .modal-social .instagram').attr("href",instagram);
    }else{
        $('.modal-employee .modal-social .instagram').parent().hide();
    }
    if(linkedin){
        $('.modal-employee .modal-social .linkedin').attr("href",linkedin);
    }else{
        $('.modal-employee .modal-social .linkedin').parent().hide();
    }
    if(gmail){
        $('.modal-employee .modal-social .google').attr("href",gmail);
    }else{
        $('.modal-employee .modal-social .google').parent().hide();
    }

});

</script>
@endpush

