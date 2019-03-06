<!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/botstrap.css') }}">-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<header class="page-head">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate-light" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="bg-ebony-clay context-dark">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-aside-wrap">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                            <div class="rd-navbar-aside-content">
                                <ul class="rd-navbar-aside-group list-units">
                                    <li>
                                        <div class="unit flex-row unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon icon-xxs icon-primary fa-map-marker"></span></div>
                                            <div class="unit-body"><a class="link-secondary" href="https://maps.google.com/maps?ll=33.670063,72.999572&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;cid=2231230579167631212">Office # 26 Second Floor Al-Rahmat Mall G-11 Markaz, Islamabad</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit flex-row unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon icon-xxs icon-primary fa-clock-o"></span></div>
                                            <div class="unit-body"><span class="time">Mon – Sun: 9:00am–18:00pm. Friday CLOSED</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit flex-row unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon icon-xxs icon-primary fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-secondary" href="tel:+92-51-2360778">+92 (51) 2360778</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <div style="margin-right: 4%">
                                    <nav class="sub_menu">
                                        <ul class="menu">
                                            <li class="header-wc-myaccount">
                                                <a href="{{ URL::to('login') }}" title="Login">
                                                    <i class="fa fa-user icon-space" aria-hidden="true"></i>
                                                    <span class="text">Login</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="rd-navbar-aside-group">
                                    <ul class="list-inline list-inline-reset">
                                        <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-facebook" href="https://www.facebook.com/beaconinvestment/"></a></li>
                                        <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-twitter" href="https://twitter.com/beaconinvest"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-inner">
                <div class="rd-navbar-group">
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand" href="index.html"><img src="images/logo-beacon-145x30.png" alt="" width="200" height="50"/></a>
                    </div>
                    <div class="rd-navbar-group-asside">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li><a href="about.html">About us</a>
                                    </li>
                                    <li {!! (Request::is('contact') ? 'class="active"' : '') !!}><a href="{{ URL::to('contact') }}">Contact Us</a>
                                    </li>

                                @if(Sentinel::guest())
                                    <li><a href="{{ URL::to('login') }}">Login</a>
                                    </li>
                                    <li><a href="projects-grid.html">Our Projects</a>
                                    </li>
                                    <li><a href="{{ URL::to('blog') }}">Blog</a>
                                    </li>
                                    @else
                                        <li {{ (Request::is('my-account') ? 'class=active' : '') }}><a href="{{ URL::to('my-account') }}">My Account</a>
                                        </li>
                                        <li><a href="{{ URL::to('logout') }}">Logout</a>
                                        </li>

                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-search">
                            <form class="rd-search" action="search-results.html" method="GET" data-search-live="rd-search-results-live" data-search-live-count="6">
                                <div class="rd-search-inner">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-search-form-input">Search...</label>
                                        <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                                    </div>
                                    <button class="rd-search-submit" type="submit"></button>
                                </div>
                                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                            </form>
                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap"></button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>