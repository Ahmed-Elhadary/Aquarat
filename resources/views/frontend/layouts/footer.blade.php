<!-- Footer -->
@php $lang = LaravelLocalization::getCurrentLocale(); @endphp

<footer id="footer" class="bg-color-secondary custom-footer m-0" style="background: url('img/demos/church/footer-bg.jpg'); background-size: cover;">
    <div class="container pt-5">
        <div class="row text-center">
            <div class="col">
                <a href="demo-church.html" class="text-decoration-none">
                    <img src="img/demos/church/logo-footer.png" width="123" height="48" alt class="img-fluid custom-img-fluid-center" />
                </a>
            </div>
        </div>
        <hr class="solid tall custom-hr-color-1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 custom-sm-margin-bottom-1">
                <i class="fas fa-map-marker-alt text-color-primary custom-icon-size-1"></i>
                <p class="custom-text-color-2 alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">  @lang('site.address')</strong>
                    {!! html_entity_decode( $contactInfo[$lang.'_address']) !!}
                </p>
            </div>
            <div class="col-lg-4 custom-sm-margin-bottom-1">
                <i class="far fa-clock text-color-primary custom-icon-size-1"></i>
                <p class="custom-text-color-2 alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Join us on</strong>
                    Sunday Worship<br>
                    8.00pm - 9.00pm
                </p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-phone-volume text-color-primary custom-icon-size-1"></i>
                <p class="alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Call us now</strong>
                    <a href="tel:+91123456789" class="text-decoration-none custom-text-color-2">    {!! html_entity_decode( $contactInfo->phone) !!}</a></br>
                    <a href="mail:mail@example.com" class="text-decoration-none custom-text-color-2">{!! html_entity_decode( $contactInfo->email) !!}</a>
                </p>
            </div>
        </div>
        <hr class="solid tall custom-hr-color-1">
        <div class="row text-center pb-5">
            <div class="col">
                <ul class="social-icons social-icons-clean custom-social-icons mb-3">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-googleplus"><a href="http://www.google.com/" target="_blank" title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="alternative-font-4 text-3 text-color-light opacity-7">© Copyright 2021. All Rights Reserved.</p>
            </div>
        </div>
    </div>


</footer>

{{-- <form action="{{ route('whatsappMessage') }}" method="POST" target="_blank">
    @csrf
    <input type="text" name="name">
    <input type="text" name="message">
    <input type="hidden" name="myPhone" value="201017515187">
    <button type="submit"> send</button>
</form> --}}
