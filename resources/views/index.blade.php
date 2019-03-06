@extends('layouts/default')
@section('title')
Beacon Investment | Home
@stop
@section('content')
    <section>
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="false" data-simulate-touch="true">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" data-slide-bg="{{asset('assets/images/home-slider-1-slide-1.jpg')}}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <div class="shilder-header-with-divider d-none d-lg-block" data-caption-animate="fadeInUp" data-caption-delay="0s">A Trusted Name in Real Estate Market</div>
                                    <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="100s">Real Estate for you<br>Managing Investment And Marketing Effectively</h2><a class="button button-icon button-icon-right button-primary big" data-caption-animate="fadeInUp" data-caption-delay="250" href="tel:+92-51-2360778"><span class="icon icon-xs fa-angle-right"></span>Call Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="{{asset('assets/images/home-slider-1-slide-2.jpg')}}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center justify-content-xl-start">
                                <div class="col-xl-1 d-none d-xl-inline-block d-xxl-none"></div>
                                <div class="col-md-11 col-lg-8 col-xl-6 text-xl-left">
                                    <h2 class="slider-header text-ebony-clay" data-caption-animate="fadeInUp" data-caption-delay="0s">Want To Make Profits<br>On Investment?</h2>
                                    <p class="text-bigger text-regular slider-text text-ebony-clay" data-caption-animate="fadeInUp" data-caption-delay="100">Beacon Investment can assist you with any aspect of investment management</p><a class="button button-icon button-icon-right button-primary big" data-caption-animate="fadeInUp" data-caption-delay="250" href="tel:+92-51-2360778"><span class="icon icon-xs fa-angle-right"></span>Call Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar d-xl-none"></div>
            <div class="swiper-nav-wrap">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="section-50 section-md-90">
        <div class="container text-center">
            <h3>Our Services</h3>
            <div class="row row-40 row-offset-3">
                <div class="col-md-6 col-lg-4 height-fill">
                    <article class="icon-box">
                        <div class="box-top">
                            <div class="box-icon"><span class="icon icon-primary icon-lg-bigger material-icons-supervisor_account"></span></div>
                            <div class="box-header">
                                <h5><a href="#">Investment Management</a></h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="box-body">
                            <p class="text-gray-05">Fair dealings and always wish for a rewarding relationship</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 height-fill">
                    <article class="icon-box">
                        <div class="box-top">
                            <div class="box-icon"><span class="icon icon-primary icon-lg-bigger mercury-ico mercury-icon-partners"></span></div>
                            <div class="box-header">
                                <h5><a href="#">Sales &amp; Trading</a></h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="box-body">
                            <p class="text-gray-05">We aim to maintain a healthy relationship by getting you the best so that you are compelled to look for no one else but us</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 height-fill">
                    <article class="icon-box">
                        <div class="box-top">
                            <div class="box-icon"><span class="icon icon-primary icon-lg-bigger material-icons-supervisor_account"></span></div>
                            <div class="box-header">
                                <h5><a href="#">Construction</a></h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="box-body">
                            <p class="text-gray-05">Experience and Knowledge to construct and renovate your dream ideas</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-whisperapprox">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-sm-10 col-md-6 text-left section-60 section-md-75">
                    <div class="inset-right-30">
                        <div class="box-photo-frame d-block">
                            <div class="embed-responsive">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/AP2AF_anKXE?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 d-none d-lg-inline-block"></div>
                            <div class="col-lg-10">
                                <blockquote class="quote-simple inset-lg-left-15">
                                    <div class="quote-body">
                                        <q>Together, we can enable your business to achieve even more.</q>
                                    </div>
                                </blockquote>
                                <p class="text-dusty-gray">Beacon Investment leads the industry in wealth management. Our independent broker services have over 20 years of industry experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 context-dark section-image-aside section-image-aside-right pos-relative-before-sm section-60 section-md-0 d-md-flex">
                    <div class="section-image-aside-img" style="background-image: url({{asset('assets/images/bg-image-9.jpg')}});">
                        <div class="section-bordered-inside"></div>
                    </div>
                    <div class="row align-items-md-center offset-top-0">
                        <div class="col-lg-10 col-xl-9 to-front offset-md-1 offset-lg-2">
                            <div class="inset-lg-left-15">
                                <h3>Why Choose Us</h3>
                                <div class="unit unit-spacing-md flex-sm-row">
                                    <div class="unit-left"><span class="icon icon-7"></span></div>
                                    <div class="unit-body">
                                        <h6>Competent Professionals</h6>
                                        <p class="text-white-05">We have a great experience in dealing with clients' needs and we wish to give all we have to make you a part of our family of clients</p>
                                    </div>
                                </div>
                                <div class="unit unit-spacing-md flex-sm-row">
                                    <div class="unit-left"><span class="icon icon-8"></span></div>
                                    <div class="unit-body">
                                        <h6>Going The Extra Mile</h6>
                                        <p class="text-white-05">We are proactive about the clients needs and we are committed to give ease and assurance to give our clients the peace of mind in complicated matters</p>
                                    </div>
                                </div>
                                <div class="unit unit-spacing-md flex-sm-row">
                                    <div class="unit-left"><span class="icon icon-9"></span></div>
                                    <div class="unit-body">
                                        <h6>Financial Sense Check</h6>
                                        <p class="text-white-05">We take it as our duty to make you aware of the potential traps that can be there as well as the benefits of making certain decisions, using our 20 years of experience</p>
                                    </div>
                                </div><a class="button button-icon button-icon-right button-primary big buttons-inset-horizontal-15" href="#"><span class="icon icon-xs fa-angle-right"></span>Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-50 section-md-100">
        <div class="container">
            <h3 class="text-center">Meet Our Team</h3>
            <div class="row row-40">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/team-beacon-01-246x300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-333-9722217">+92 (333) 972–2217</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:beacon.tariqmalik@gmail.com">beacon.tariqmalik@gmail.com</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Tariq Iqbal Malik</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/team-beacon-04-246x300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-334-5054117">+92 (334) 505-4117</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:sehbantariq@gmail.com">sehbantariq@gmail.com</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Sahban Tariq</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Chief Marketing Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/team-beacon-03-246x300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-333-9733317">+92 (333) 973-3317</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:zaintariq163@gmail.com">zaintariq163@gmail.com</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Zain Tariq</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Chief Marketing Technology Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/wasim_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-309-5557706">+92 (309) 555-7706</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:arketing@beaconinvestment.org">marketing@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Waseem Rauf</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/bilal_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-309-5557703">+92 (309) 555-7703</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:sales@beaconinvestment.org">sales@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Bilal Ahmed</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/rao_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href=""></a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="accounts@beaconinvestment.org">accounts@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Rao Shahrukh</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Accounts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/qamar-246-300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-309-5557705">+92 (309) 555-7705</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:sales@beaconinvestment.org">sales@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Qamar Zaman Khan</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Supplier Relations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/ahsan_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-309-5557706">+92 (309) 555-7706</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="crm@beaconinvestment.org">crm@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Rana Ahsan</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Customer Relations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/abdullah_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href=""></a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:it@beaconinvestment.org">it@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Abdullah Manzoor</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Information Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/wahab_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:+92-309-5557704">+92 (309) 555-7704</a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:sales@beaconinvestment.org">sales@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Abdul Wahab</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Assistant Manager Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/mog_246_300.jpg')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href=""></a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:marketing@beaconinvestment.org">marketing@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Moghees</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Graphics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="{{asset('assets/images/female_246_300.png')}}" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href=""></a></div>
                                <div class="link-group"><span class="icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:marketing@beaconinvestment.org">marketing@beaconinvestment.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Zunaira Taj</a></p>
                                <div class="divider divider-md"></div>
                                <p class="text-caption">Manager Social Media</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section parallax-container bg-black" data-parallax-img="{{asset('assets/images/bg-image-3.jpg')}}">
        <div class="parallax-content">
            <div class="section-60 section-md-100">
                <div class="container">
                    <h3 class="text-center">Counters</h3>
                    <div class="row row-40 row-offset-1 align-items-sm-end">
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter"><span class="icon icon-11"></span>
                                <div class="text-large counter">250</div>
                                <h5 class="box-header">Trusted Clients</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter"><span class="icon icon-12"></span>
                                <div class="text-large counter">03</div>
                                <h5 class="box-header">Certificates</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter"><span class="icon icon-13"></span>
                                <div class="text-large counter">20</div>
                                <h5 class="box-header">Years of Experience</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter"><span class="icon icon-14"></span>
                                <div class="text-large counter">10</div>
                                <h5 class="box-header">Experts</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-50 section-md-100 bg-whisperapprox">
        <div class="parallax-content">
            <div class="section-66 section-md-90 section-xl-bottom-120 context-dark">
                <div class="container">
                    <h3 class="text-center">Testimonials</h3>
                    <div class="owl-carousel owl-quote-bordered owl-nav-style-1" data-items="1" data-lg-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
                        <div class="owl-item">
                            <div class="inset-xl-left-60 inset-xl-right-40">
                                <blockquote class="quote-bordered">
                                    <div class="quote-body">
                                        <div class="quote-open">
                                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                                <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                            </svg>
                                        </div>
                                        <div class="quote-body-inner">
                                            <h6>Highly Professional Team</h6>
                                            <p>
                                                <q>Working with Beacon Investment has been a great experience. An exceptional group of people who are well versed in all legal, accounting, and compliance aspects of fund administration for onshore or offshore investments. I would highly recommend.</q>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="quote-footer">
                                        <div class="unit flex-row unit-spacing-sm align-items-center">
                                            <div class="unit-left"><img class="img-circle" src="{{asset('assets/images/clients-testimonials-2-beacon-68x68.jpg')}}" width="68" height="68" alt=""/>
                                            </div>
                                            <div class="unit-body">
                                                <cite class="text-black">Sahban Tariq Malik</cite>
                                                <p class="text-primary">Chief Marketing Officer</p>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="inset-xl-left-60 inset-xl-right-40">
                                <blockquote class="quote-bordered">
                                    <div class="quote-body">
                                        <div class="quote-open">
                                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                                <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                            </svg>
                                        </div>
                                        <div class="quote-body-inner">
                                            <h6>Real Experts in Investment Management</h6>
                                            <p>
                                                <q>These guys are efficient! From the first moment that I dealt with Beacon Investment I knew that they were real pros. They are asking the right questions, and when getting the answers they are on ball non-stop, providing an excellent service!</q>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="quote-footer">
                                        <div class="unit flex-row unit-spacing-sm align-items-center">
                                            <div class="unit-left"><img class="img-circle" src="" width="68" height="68" alt=""/>
                                            </div>
                                            <div class="unit-body">
                                                <cite class="text-black">Muhammad Farooq</cite>
                                                <p class="text-primary">Civil Servant</p>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="inset-xl-left-60 inset-xl-right-40">
                                <blockquote class="quote-bordered">
                                    <div class="quote-body">
                                        <div class="quote-open">
                                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                                <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                            </svg>
                                        </div>
                                        <div class="quote-body-inner">
                                            <h6>A Team of Dedicated Investment Specialists</h6>
                                            <p>
                                                <q>It took me a while to find someone who could accomplish what I needed for my company. I have to say it was well worth the wait. Beacon Investment is a team of real professionals who showed their hard work, patience, and professionalism, and they far exceeded my expectations.</q>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="quote-footer">
                                        <div class="unit flex-row unit-spacing-sm align-items-center">
                                            <div class="unit-left"><img class="img-circle" src="" width="68" height="68" alt=""/>
                                            </div>
                                            <div class="unit-body">
                                                <cite class="text-black">Zafar Iqbal</cite>
                                                <p class="text-primary">Civil Servant</p>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="inset-xl-left-60 inset-xl-right-40">
                                <blockquote class="quote-bordered">
                                    <div class="quote-body">
                                        <div class="quote-open">
                                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                                <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                            </svg>
                                        </div>
                                        <div class="quote-body-inner">
                                            <h6>A Team of Dedicated Investment Specialists</h6>
                                            <p>
                                                <q>It has been a pleasure to work with Meet Our Team of professional designers. The Reactive team was quick studies who learned about our complex business and market and created a web presence that we are all proud to call our own. Many thanks to all of you!</q>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="quote-footer">
                                        <div class="unit flex-row unit-spacing-sm align-items-center">
                                            <div class="unit-left"><img class="img-circle" src="" width="68" height="68" alt=""/>
                                            </div>
                                            <div class="unit-body">
                                                <cite class="text-black">Arsalan Malik</cite>
                                                <p class="text-primary">Business Development Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-50 section-md-90 section-md-bottom-100">
        <div class="container text-center">
            <h3>Latest News</h3>
            <div class="row row-40 row-offset-6 justify-content-sm-center">
                <div class="col-sm-8 col-md-5 col-xl-3">
                    <div class="post-boxed d-xl-inline-block">
                        <div class="post-boxed-img-wrap"><a href="blog-csc-why.html"><img src="{{asset('assets/images/home-1-beacon-268x182.jpg')}}" alt="" width="268" height="182"/></a></div>
                        <div class="post-boxed-caption">
                            <div class="post-boxed-title font-weight-bold"><a href="blog-csc-why.html">Why Capital Smart City?</a></div>
                            <div class="offset-top-5">
                                <ul class="list-inline list-inline-dashed text-uppercase font-accent">
                                    <li>13 Dec, 2017</li>
                                    <li><span>by <a class="text-primary" href="#">ADMIN</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-xl-3">
                    <div class="post-boxed d-xl-inline-block">
                        <div class="post-boxed-img-wrap"><a href="blog-csc-purpose.html"><img src="{{asset('assets/images/home-2-beacon-268x182.jpg')}}" alt="" width="268" height="182"/></a></div>
                        <div class="post-boxed-caption">
                            <div class="post-boxed-title font-weight-bold"><a href="blog-csc-purpose.html">The Region's All Purpose Hub</a></div>
                            <ul class="list-inline list-inline-dashed text-uppercase font-accent">
                                <li>13 Dec, 2017</li>
                                <li><span>by <a class="text-primary" href="#">ADMIN</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-xl-3">
                    <div class="post-boxed d-xl-inline-block">
                        <div class="post-boxed-img-wrap"><a href="blog-csc-booking.html"><img src="{{asset('assets/images/home-3-beacon-268x182.jpg')}}" alt="" width="268" height="182"/></a></div>
                        <div class="post-boxed-caption">
                            <div class="post-boxed-title font-weight-bold"><a href="blog-csc-booking.html">Booking Details In Capital Smart City</a></div>
                            <ul class="list-inline list-inline-dashed text-uppercase font-accent">
                                <li>13 Dec, 2017</li>
                                <li><span>by <a class="text-primary" href="#">ADMIN</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-xl-3">
                    <div class="post-boxed d-xl-inline-block">
                        <div class="post-boxed-img-wrap"><a href="blog-csc-location.html"><img src="{{asset('assets/images/home-4-beacon-268x182.jpg')}}" alt="" width="268" height="182"/></a></div>
                        <div class="post-boxed-caption">
                            <div class="post-boxed-title font-weight-bold"><a href="blog-csc-location.html">Facilitating Location Of Capital Smart City</a></div>
                            <ul class="list-inline list-inline-dashed text-uppercase font-accent">
                                <li>13 Dec, 2017</li>
                                <li><span>by <a class="text-primary" href="#">ADMIN</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop