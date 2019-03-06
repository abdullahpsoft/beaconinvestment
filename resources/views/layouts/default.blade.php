<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Arvo:400,700%7COpen+Sans:300,300italic,400,400italic,700italic,800%7CUbuntu:500">
    <link rel="stylesheet" href="{{asset('assets/css/botstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="httpqwertywindows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div class="page">
    <div class="page-loader page-loader-variant-1">
        <div><a class="brand brand-md brand-inverse" href="index.html"><img src="{{asset('assets/images/logo-light-beacon-145x30.png')}}" alt="" width="250" height="75"/></a>
            <div class="page-loader-body">
                <div id="spinningSquaresG">
                    <div class="spinningSquaresG" id="spinningSquaresG_1"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_2"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_3"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_4"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_5"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_6"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_7"></div>
                    <div class="spinningSquaresG" id="spinningSquaresG_8"></div>
                </div>
            </div>
        </div>
    </div>
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
                                                    <a href="http://capital.beaconinvestment.org/login" title="Login">
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
                                        <li><a href="{{ URL::to('about') }}">About us</a>
                                        </li>

                                    @if(Sentinel::guest())
                                        <li><a href="{{ URL::to('login') }}">Login</a>
                                        </li>
                                        @else
                                            <li {{ (Request::is('my-account') ? 'class=active' : '') }}><a href="{{ URL::to('my-account') }}">My Account</a>
                                            </li>
                                            <li><a href="{{ URL::to('logout') }}">Logout</a>
                                            </li>
                                        @endif

                                            <li><a href="{{ URL::to('projects') }}">Our Projects</a>
                                        </li>
                                        <li><a href="{{ URL::to('blognew') }}">Blog</a>
                                            <!--<ul class="rd-navbar-dropdown">
                                              <li><a href="blog-csc-why.html">Why CSC</a>
                                              </li>
                                              <li><a href="blog-csc-location.html">Location</a>
                                              </li>
                                              <li><a href="blog-csc-purpose.html">Purpose</a>
                                              </li>
                                              <li><a href="blog-csc-booking.html">Booking</a>
                                              </li>
                                            </ul>-->
                                        </li>
                                        <li {!! (Request::is('contact') ? 'class="active"' : '') !!}><a href="{{ URL::to('contact') }}">Contact</a>
                                        </li>
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



@yield('content')





    <footer class="page-foot bg-ebony-clay context-dark">
        <div class="section-40 section-md-75">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-9 col-md-11 col-xl-12">
                        <div class="row row-50">
                            <div class="col-md-6 col-lg-10 col-xl-3">
                                <div class="inset-xl-right-20" style="max-width: 510px;"><a class="brand brand-inverse" href="index.html"><img src="{{asset('assets/images/logo-light-beacon-145x30.png')}}" alt="" width="200" height="50"/></a>
                                    <p class="text-shuttle-gray">Beacon Investment leads the industry in wealth management. Our independent  broker services have over 20 years of industry experience.</p><a class="link link-group link-group-animated link-bold link-white" href="#"><span>Free Consultation</span><span class="icon icon-xxs icon-primary fa fa-angle-right"></span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <h6 class="text-uppercase">Recent Posts</h6>
                                <article class="post post-preview post-preview-inverse"><a href="blog-csc-location.html">
                                        <div class="unit flex-row unit-spacing-lg">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="{{asset('assets/images/post-beacon-1-70x70.jpg')}}" alt="" width="70" height="70"/>
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>Facilitating Location Of Capital Smart City</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2017-12-13">Dec 13, 2017</time>
                                                        </li>
                                                        <li>0 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></a></article>
                                <article class="post post-preview post-preview-inverse"><a href="blog-csc-booking.html">
                                        <div class="unit flex-row unit-spacing-lg">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="{{asset('assets/images/post-beacon-2-70x70.jpg')}}" alt="" width="70" height="70"/>
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>Booking Details In Capital Smart City</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2017-12-13">13 Dec, 2017</time>
                                                        </li>
                                                        <li>0 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></a></article>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <h6 class="text-uppercase">Quick links</h6>
                                <div class="row" style="max-width: 270px;">
                                    <div class="col-6">
                                        <ul class="list-marked-variant-2">
                                            <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="projects-grid.html">Our Projects</a></li>
                                            <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-marked-variant-2">
                                            <li><a href="about.html">About us</a></li>
                                            <li {!! (Request::is('contact') ? 'class="active"' : '') !!}><a href="{{ URL::to('contact') }}">Contacts</a></li>
                                            <li><a href="#">Appointment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <h6 class="text-uppercase">Contact us</h6>
                                <address class="contact-info text-left">
                                    <div class="unit flex-row unit-spacing-md align-items-center">
                                        <div class="unit-left"><span class="icon icon-xs text-shuttle-gray fa-phone"></span></div>
                                        <div class="unit-body"><a class="link-white" href="tel:+92-51-2360778">+92 (51) 2360778</a></div>
                                    </div>
                                    <div class="unit flex-row unit-spacing-md align-items-center">
                                        <div class="unit-left"><span class="icon icon-xs text-shuttle-gray fa fa-envelope-o"></span></div>
                                        <div class="unit-body"><a class="link-white" href="mailto:beaconinvestment.org@gmail.com">beaconinvestment.org@gmail.com</a></div>
                                    </div>
                                    <div class="unit flex-row unit-spacing-md">
                                        <div class="unit-left"><span class="icon icon-xs text-shuttle-gray fa-map-marker"></span></div>
                                        <div class="unit-body"><a class="link-white d-inline" href="https://maps.google.com/maps?ll=33.670063,72.999572&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;cid=2231230579167631212">Office # 26, 2nd Floor Al-Rahmat Mall G-11 Markaz, Islamabad</a></div>
                                    </div>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
        <footer class="page-foot section section-35 bg-ebony-clay context-dark">
            <div class="container text-center">
                <div class="row row-15 flex-row-md-reverse justify-content-md-between align-items-md-center">
                    <div class="col-md-6 text-md-right">
                        <div class="group-sm group-middle">
                            <p class="font-italic text-white">Follow Us:</p>
                            <ul class="list-inline list-inline-reset">
                                <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-facebook" href="https://www.facebook.com/beaconinvestment/"></a></li>
                                <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-twitter" href="https://twitter.com/beaconinvest"></a></li>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-left">
                        <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#174;&nbsp;</span><span>Beacon Investment.&nbsp;</span><a class="link-white-v2" href="#">Registered</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </footer>

</div>
<div class="snackbars" id="form-output-global"></div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/core.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>