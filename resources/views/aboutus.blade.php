@extends('layouts/default')

{{-- Page title --}}
@section('title')
About us
@parent
@stop

{{-- page level styles --}}
@section('content')

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

        <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-image-1.jpg')}});">
            <div class="container">
                <div class="page-title">
                    <h2>About</h2>
                </div>
            </div>
        </section>

        <section class="section-66 section-md-90 section-xl-bottom-120 bg-whisperapprox">
            <div class="container">
                <h3>About Us</h3>
                <div class="row row-40 justify-content-xl-between align-items-center">
                    <div class="col-md-6 col-xl-5 text-secondary">
                        <div class="inset-md-right-15 inset-xl-right-0">
                            <p>Our Investment Company, located in Islamabad, Pakistan, is a full service real estate company that provides acquisition, development and finance expertise for both commercial and multi-family projects.</p>
                            <p>
                                The mission of Beacon Investment is to provide our investors with the most honest, reliable and efficient real estate services in Pakistan. We will strive to meet all of your real estate needs and provide you with exceptional loyalty.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-progress">
                            <li>
                                <p class="animated fadeIn">Residential Investments</p>
                                <div class="progress-bar-js progress-bar-horizontal progress-bar-red-orange-1" data-value="80" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                            </li>
                            <li>
                                <p class="animated fadeIn">Commercial Investments</p>
                                <div class="progress-bar-js progress-bar-horizontal progress-bar-dodger-blue" data-value="65" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                            </li>
                            <li>
                                <p class="animated fadeIn">Construction</p>
                                <div class="progress-bar-js progress-bar-horizontal progress-bar-gorse" data-value="87" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                            </li>
                            <li>
                                <p class="animated fadeIn">Investment Consultancy</p>
                                <div class="progress-bar-js progress-bar-horizontal progress-bar-danger-01" data-value="90" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-60 section-md-90 bg-gray-lighter">
            <div class="container">
                <div class="row row-60">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail thumbnail-variant-1">
                            <div class="thumbnail-image"><img src="{{asset('assets/images/team-beacon-01-189x189.jpg')}}" alt="" width="189" height="189"/>
                                <div class="thumbnail-image-inner"><a class="icon icon-md material-icons-local_phone link-primary-inverse-v2" href="tel:+92-333-9722217"></a><a class="icon icon-md-smaller fa-envelope-o link-white" href="mailto:beacon.tariqmalik@gmail.com"></a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <h5 class="header"><a href="#">Tariq Iqbal Malik</a></h5>
                                <p class="text-gray-05">Co-founder &amp; CEO</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail thumbnail-variant-1">
                            <div class="thumbnail-image"><img src="{{asset('assets/images/team-beacon-04-189x189.jpg')}}" alt="" width="189" height="189"/>
                                <div class="thumbnail-image-inner"><a class="icon icon-md material-icons-local_phone link-primary-inverse-v2" href="tel:+92-334-5054117"></a><a class="icon icon-md-smaller fa-envelope-o link-white" href="mailto:sehbantariq@gmail.com"></a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <h5 class="header"><a href="#">Sahban Tariq Malik</a></h5>
                                <p class="text-gray-05">Chief Marketing Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail thumbnail-variant-1">
                            <div class="thumbnail-image"><img src="{{asset('assets/images/team-beacon-03-189x189.jpg')}}" alt="" width="189" height="189"/>
                                <div class="thumbnail-image-inner"><a class="icon icon-md material-icons-local_phone link-primary-inverse-v2" href="tel:+92-333-9733317"></a><a class="icon icon-md-smaller fa-envelope-o link-white" href="mailto:zaintariq163@gmail.com"></a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <h5 class="header"><a href="#">Zain Tariq</a></h5>
                                <p class="text-gray-05">Chief Marketing Technology Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-whisperapprox">
            <div class="container">
                <div class="row justify-content-sm-center justify-content-md-start">
                    <div class="col-sm-10 col-md-6 text-left section-60 section-md-90">
                        <div>
                            <h3>Our Mission</h3>
                            <div class="box-photo-frame"><img src="{{asset('assets/images/about-1-beacon-510x268.jpg')}}" alt="" width="510" height="268"/>
                            </div>
                            <h6>Our Investment Principles</h6>
                            <p>Our goal is to maximize investor return and minimize any potential loss by applying these principles in a disciplined and pragmatic process. We rely on facts, not speculation to purchase high return, predictable companies at significant discounts to intrinsic values.</p>
                        </div>
                    </div>
                    <div class="col-md-6 context-dark section-image-aside section-image-aside-right pos-relative-before-sm section-60 section-md-0 d-md-flex">
                        <div class="section-image-aside-img" style="background-image: url({{asset('assets/images/bg-image-12.jpg')}});">
                            <div class="section-bordered-inside"></div>
                        </div>
                        <div class="row align-items-md-center offset-top-0">
                            <div class="col-md-11 col-lg-10 to-front offset-md-1 offset-lg-2">
                                <h3>Benefits & Risks</h3>
                                <h5>Why Choose Us</h5>
                                <p class="text-white-05">We have a great experience in dealing with clients' needs and we wish to give all we have to make you a part of our family of clients.</p>
                                <ul class="list-marked">
                                    <li class="text-white">Competent Professionals</li>
                                    <li class="text-white">Potential wealth generation</li>
                                    <li class="text-white">Going The Extra Mile</li>
                                    <li class="text-white">Access to a range of real assets</li>
                                    <li class="text-white">Geared exposure</li>
                                    <li class="text-white">Financial Sense Check</li>
                                </ul><a class="button button-icon button-icon-right button-primary big" href="#"><span class="icon icon-xs fa-angle-right"></span>Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-60 section-md-90 section-lg-top-30 section-lg-bottom-0">
            <div class="container">
                <div class="row justify-content-md-center justify-content-lg-start">
                    <div class="col-md-12 col-lg-6 d-lg-block"><img src="{{asset('assets/images/about-2-beacon-446x608.jpg')}}" alt="" width="600" height="350" style="padding-top: 75px;"> <!-- Sahban -->
                    </div>
                    <div class="col-md-10 col-lg-5 offset-lg-1 align-self-lg-center" style="
            margin-top: 25px;
            margin-bottom: 25px;"> <!-- Sahban -->
                        <h3 class="text-center">We Are Different</h3>
                        <div class="inset-lg-left-15">
                            <ul class="list-xl">
                                <li>
                                    <article class="icon-box-horizontal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left"><span class="icon icon-primary icon-md icon-1"></span></div>
                                            <div class="unit-body">
                                                <h5><a href="#">Going The Extra Mile</a></h5>
                                                <p class="text-gray-05">We are proactive about the clients needs and we are committed to give ease and assurance to give our clients the peace of mind in complicated matters.</p>
                                            </div>
                                        </div>
                                    </article>

                                </li>
                                <li>
                                    <article class="icon-box-horizontal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left"><span class="icon icon-primary icon-md icon-2"></span></div>
                                            <div class="unit-body">
                                                <h5><a href="#">Financial Sense Check</a></h5>
                                                <p class="text-gray-05">We take it as our duty to make you aware of the potential traps that can be there as well as the benefits of making certain decisions, using our 20 years of experience. </p>
                                            </div>
                                        </div>
                                    </article>

                                </li>
                                <li>
                                    <article class="icon-box-horizontal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left"><span class="icon icon-primary icon-md icon-3"></span></div>
                                            <div class="unit-body">
                                                <h5><a href="#">Competent Professionals</a></h5>
                                                <p class="text-gray-05">We have a great experience in dealing with clients' needs and we wish to give all we have to make you a part of our family of clients.</p>
                                            </div>
                                        </div>
                                    </article>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>


@stop