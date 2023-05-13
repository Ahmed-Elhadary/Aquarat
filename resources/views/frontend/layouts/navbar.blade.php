        <!-- header -->
        <header class="site-header mo-left header-transparent box-header header" style="height: 116px;">
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion logo-dark">
                            <a href="#"><img src="{{ asset('assets/img/logo.jpg') }}" alt=""></a>
                        </div>
                        <!-- nav toggle button --><button class="navbar-toggler collapsed navicon justify-content-end"
                            type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span> <span></span> <span></span> </button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button radius-no">
                                    @lang('site.search')
                                </button>
                            </div>
                        </div>
                        <!-- Quik search -->


                        {{-- searchbar --}}
                        <div class="dlab-quik-search">
                            <form class="headerFilter" action="{{ route('search') }}" method="GET">
                                <input class="global_search_input  form-control" type="text" name="search"
                                    autocomplete="off" placeholder="@lang('site.search')..." required>
                                <span id="quik-search-remove"><i style="color:#FFF" class="ti-close"></i></span>
                            </form>
                            <div class="result-search-list"></div>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header d-md-block d-lg-none">
                                <a href="https://industry.dexignzone.com/xhtml-rtl/index.html">
                                    {{-- <div class="logo-header mostion logo-dark"> --}}
                                    {{-- <a href="#"> --}}
                                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="">
                                    {{-- </a> --}}
                                    {{-- </div> --}}
                                </a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="{{ request()->is('*ar') || request()->is('*en') ? 'active' : '' }}  has-mega-menu homedemo"> <a
                                        href="{{ route('homePage') }}">@lang('site.home')</a></li>
                                <li class="{{ request()->is('*about') ? 'active' : '' }} has-mega-menu homedemo"> <a
                                        href="{{ route('about') }}">@lang('site.about')</a></li>


                                <li class="{{request()->is('*category') || request()->is('*category/*') || request()->is('*product/*') || request()->is('*search*') ? 'active' : '' }}  has-mega-menu ">
                                    <a href="{{ route('category') }}">
                                        @lang('site.products')  <i class="fa fa-chevron-down"></i> </a>

                                    <ul class="mega-menu">
                                        @foreach ($navCategories as $category)
                                        <li> <a href="javascript:;">{{ $category[$lang.'_name'] }}</a>
                                            <ul>
                                                @if($category->products->count())
                                                @foreach ($category->products->take(4) as $product)
                                                <li><a href="{{ route('viewProduct',$product->id ) }}">{{ $product[$lang.'_name'] }}</a></li>
                                                @endforeach
                                                <li><a href="{{ route('products',$category->id) }}">- @lang('site.more_view')...</a></li>
                                                @else
                                                <li>
                                                    <a>
                                                        @lang('site.no_products')
                                                    </a>
                                                </li>
                                                @endif
                                            </ul>

                                        </li>


                                        @endforeach
                                    </ul>

                                </li>
                                {{-- <li class="{{ request()->is('*category') --}}
                                {{-- // ||request()->is('*category/*') || request()->is('*product/*') || request()->is('*search*')  ? 'active' : '' }}  has-mega-menu homedemo"> <a href="{{ route('category') }}">المنتجات</a></li> --}}
                                <li class="{{ request()->is('*services') ? 'active' : '' }} has-mega-menu homedemo">
                                    <a href="{{ route('services') }}">@lang('site.services')</a></li>
                                <li class=" {{ request()->is('*news') ? 'active' : '' }} has-mega-menu homedemo">
                                    <a href="{{ route('news') }}">@lang('site.media')</a></li>
                                <li class="{{ request()->is('*contact') ? 'active' : '' }} has-mega-menu homedemo">
                                    <a href="{{ route('contact') }}">@lang('site.contact') </a></li>
                                    <li class="has-mega-menu homedemo">
                                    {{-- <div class="max-nav-toggler"> --}}
                                        <button class="theme-btn toggle-btn"><span class="flaticon-menu-2"></span></button>
                                        @if (LaravelLocalization::getCurrentLocale() == 'en')
                                            <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="language-btn">
                                               <img src="{{ asset('assets/img/egypt.png') }}" alt=""style="width: 35px;height: 20px;object-fit: cover;">
                                           </a>
                                        @else
                                            <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="language-btn">
                                               <img src="{{ asset('assets/img/usd.png') }}" alt=""style="width: 35px;height: 20px;object-fit: cover;">
                                           </a>
                                        @endif
                                    {{-- </div> --}}
                                    </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->
