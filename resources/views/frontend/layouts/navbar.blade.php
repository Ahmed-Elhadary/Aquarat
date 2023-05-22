<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="demo-church.html">
                                <img alt="Porto" width="123" height="68" src="{{ asset('dashboard/login/images/Capture.PNG') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav order-2 order-lg-1 alternative-font-4">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dark-text header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{ route('homePage') }}">
                                                الصفحة الرئيسية
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-full-color dropdown-primary">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('about') }}">
                                                من نحن
                                            </a>

                                        <li>
                                            <a class="nav-link" href="demo-church-sermons.html">
                                                Sermons
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-church-events.html">
                                                Events
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="">
                                                أعمالنا
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-church-blog.html">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div role="main" class="main">
