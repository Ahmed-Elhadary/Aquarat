@extends('frontend.layouts.app')
@section('title',' أسئلة وأجابة ')
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

@section('content')
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg">الأسئلة العامة</span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">الأسئلة العامة</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{ route('homePage') }}">الصفحة الرئيسية</a></li>
                                <li>الأسئلة العامة </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">

                <div class="section-full bg-gray content-inner faq">
                    <div class="container">
                        <div class="row title">
                            <div class="col-12">
                                <div class="section-head text-black text-right">
                                    <h3>اسئلة عامة</h3>
                                </div>
                                <div class="section-head text-black text-left">
                                    <!--<form action="">-->
                                    <!--    <input type="text" class="form-control">-->
                                    <!--</form>-->
                                </div>
                            </div>

                        </div>
                        <div class="row m-b30">
                            <div class="col-lg-12 col-sm-12">
                                <div class="dlab-accordion faq-2 box-sort-in" id="accordion2">
                                    <?php $i=1 ?>
                                    @foreach ($faqs as $faq )
                                        <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#faq{{ $faq->id }}"
                                                            class="collapsed" aria-expanded="false">
                                                           {{ $i++ }}. {{ $faq->ar_question }}
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="faq{{ $faq->id }}" class="acod-body collapse" data-parent="#accordion2" style="">
                                                    <div class="acod-content">
                                                        {!! html_entity_decode( $faq->ar_answer ) !!}
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- Faq Info END -->

                    </div>
                </div>


            </div>
        </div>


@endsection
