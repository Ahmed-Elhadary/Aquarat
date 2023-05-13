  <!-- Footer -->
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

  <footer class="site-footer" style="display: block; ">
    <div class="footer-top" style="background-image:url({{ asset('assets/img/bg2.png')}}); background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-md-5  col-lg-5 col-sm-6 footer-col-4 ">
                    <div class="widget">
                        <h2  class="footer-title text-white"> @lang('site.queenland') </h2 >
                        <p class="text-capitalize m-b20">
                            @lang('site.footer_desc')
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-7 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="footer-title text-white">
                            @lang('site.url')
                        </h5>
                        <ul>
                            <li><a href="{{ route('homePage') }}">@lang('site.home')</a></li>
                            <li><a href="{{ route('about') }}"> @lang('site.about') </a></li>
                            <li><a href="{{ route('category') }}"> @lang('site.category') </a></li>
                            <li><a href="{{ route('services') }}">@lang('site.services')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-7 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="footer-title text-white">
                            @lang('site.url')
                        </h5>
                        <ul>
                            <li><a href="{{ route('news') }}"> @lang('site.media') </a></li>
                            <li><a href="{{ route('contact') }}"> @lang('site.contact') </a></li>
                            <li><a href="{{ route('faq') }}">  @lang('site.faq')  </a></li>
                            <li><a href="{{ route('policy') }}">  @lang('site.policy')  </a></li>
                        </ul>
                    </div>
                </div>
                @if($contactInfo)
                <div class="col-md-3 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title text-white ">
                            @lang('site.contact')
                        </h5>
                        <ul>
                            <li><i class="ti-location-pin"></i>
                                <div class="contactInfo-data">
                                  {!! html_entity_decode( $contactInfo[$lang.'_address']) !!}
                                </div>
                            </li>
                            <li><i class="ti-mobile"></i>
                                <div class="contactInfo-data">
                                   {!! html_entity_decode( $contactInfo->phone) !!}
                                </div>
                            </li>
                            <li><i class="ti-email"></i>
                                <div class="contactInfo-data">
                                   {!! html_entity_decode( $contactInfo->email) !!}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif

            </div>
        </div>





    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left "> <span>
                    @lang('site.faq_copyright')
                </span> </div>
                <div class="col-md-6 col-sm-6 text-right ">
                    <div class="widget-link ">
                        <ul>

                            <li><a href="{{ route('faq') }}">
                                    @lang('site.faq_office')
                                </a></li>
                            <li><a href="{{ route('policy') }}">
                                     @lang('site.policy')
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="chating">
<input type="checkbox" id="click">
<label for="click">
  <i class="fa fa-whatsapp" ></i>
  <i class="fa fa-times"></i>
</label>
<div class="wrapper">
  <div class="head-text">
    راسنا الأن
</div>
<div class="chat-box">

    <div class="desc-text">
        كيف يمكننا مساعدتك ؟
    </div>
    <form action="{{ route('whatsappMessage') }}" method="POST" target="_blank">
        @csrf
        <input type="text" class="form-control" placeholder="أكتب أسمك" name="name" required />
        <textarea type="text" name="message" rows="10" placeholder="أكتب رسالتك" required></textarea>
        <input type="hidden" name="myPhone" value="201101200050">
       <div class="field">
         <button type="submit">أرسال </button>
       </div>
    </form>
</div>
</div>
<!-- Footer END -->

{{-- <form action="{{ route('whatsappMessage') }}" method="POST" target="_blank">
    @csrf
    <input type="text" name="name">
    <input type="text" name="message">
    <input type="hidden" name="myPhone" value="201017515187">
    <button type="submit"> send</button>
</form> --}}
