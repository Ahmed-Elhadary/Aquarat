@extends('frontend.layouts.app')
@section('title', ' ')
@section('content')
    @php $lang = LaravelLocalization::getCurrentLocale(); @endphp

    <section
        class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0"
        data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('Images/1.jpeg') }}">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12 align-self-center text-center">
                    <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold mb-1"> أعمالنا </h1>
                    <p class="text-color-light custom-secondary-font text-uppercase mb-0"> أعمالنا </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-no-border bg-color-grey m-0">
        <h2 style="text-align: center;
                    font-weight: 500;">أعمالنا </h2>
        <div class="container py-2">

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
                data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active"
                        href="#"> الكل</a></li>
                @foreach ($categories as $category)
                    <li class="nav-item" data-option-value=".category_{{ $category->id }}"><a
                            class="nav-link text-1 text-uppercase" href="#">{{ $category->ar_name }}</a></li>
                @endforeach
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">


                    @foreach ($products as $product)
                        <div class="col-sm-6 col-lg-3 isotope-item category_{{ $product->maincategory->id }}">
                            <span class="thumb-info custom-thumb-info-4">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html"
                                    class="text-decoration-none  text-color-dark">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('images/Products/' . $product->image) }}" alt class="img-fluid"
                                            style="height: 280px;
                                            object-fit: cover;" />
                                    </span>
                                </a>
                                <span class="thumb-info-caption custom-box-shadow">
                                    <span class="thumb-info-caption-text">
                                        <h2 class="font-weight-bold text-5 text-center">
                                            <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html"
                                                class="text-decoration-none  text-color-dark"
                                                style="font-size: 15px;">
                                                {{ $product[$lang . '_name'] }}
                                            </a>
                                        </h2>
                                    </span>
                                </span>
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>






@endsection
@push('custom-scripts')
    <script>
        $(function() {
            $('.timeline-nav').slick({
                slidesToShow: 12,
                slidesToScroll: 1,
                asNavFor: '.timeline-slider',
                centerMode: false,
                focusOnSelect: true,
                mobileFirst: true,
                arrows: false,
                infinite: false,
                responsive: [{
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
                responsive: [{
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
