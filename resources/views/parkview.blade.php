@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Parkview
    @parent
@stop

{{-- page level styles --}}
@section('content')
    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-image-1.jpg')}})
            ;">
        <div class="container">
            <div class="page-title">
                <h2>Park View City</h2>
            </div>
        </div>
    </section>

    <section class="section-top-60 section-md-top-90 section-bottom-120">
        <div class="container">
            <!-- <h3 class="text-center">Vertical Tabs</h3>-->
            <div class="row justify-content-md-center">
                <div class="col-xl-10">
                    <div class="tabs-custom tabs-vertical tabs-corporate" id="tabs-2">
                        <ul class="nav nav-tabs">
                            <li><a class="active" href="#tabs-2-1" data-toggle="tab">Overview</a></li>
                            <li><a href="#tabs-2-2" data-toggle="tab">Map & Location</a></li>
                            <li><a href="#tabs-2-3" data-toggle="tab">Videos</a></li>
                            <li><a href="#tabs-2-4" data-toggle="tab">Property Types</a></li>
                            <li><a href="#tabs-2-5" data-toggle="tab">Payment Plan</a></li>
                            <li><a href="#tabs-2-6" data-toggle="tab">Features</a></li>
                            <li><a href="#tabs-2-7" data-toggle="tab">Developer</a></li>
                            <li><a href="#tabs-2-8" data-toggle="tab">Marketed By</a></li>
                            <li><a href="#tabs-2-9" data-toggle="tab">Contact Us</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-2-1">
                                <section>
                                    <div class="container isotope-wrap">
                                        <div class="row row-40 text-center">
                                            <div class="col-12">
                                                <ul class="isotope-filters-responsive">
                                                    <li>
                                                        <p>Choose your category:</p>
                                                    </li>
                                                    <li class="block-top-level">
                                                        <button class="isotope-filters-toggle button button-sm button-default" data-custom-toggle="#isotope-1" data-custom-toggle-hide-on-blur="true">Filter<span class="caret"></span></button>
                                                        <div class="isotope-filters isotope-filters-minimal isotope-filters-horizontal" id="isotope-1">
                                                            <ul class="list-inline">
                                                                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                                                                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Map & Location</a></li>
                                                                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Residential Units</a></li>
                                                                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Salient Features</a></li>
                                                            </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="row isotope isotope-gutter-default" data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery">
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview1_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview1.jpg')}}" data-photo-swipe-item="" data-size="1200x809"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview2_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview2.jpg')}}" data-photo-swipe-item="" data-size="1200x912"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview3_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview3.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview4_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview4.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html'"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview5_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview5.jpg')}}" data-photo-swipe-item="" data-size="1200x902"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview6_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview6.jpg')}}" data-photo-swipe-item="" data-size="1200x935"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview7_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview7.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview8_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview8.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview9_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview9.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div><div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/parkview10_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class=" link link-original" href="{{asset('assets/images/parkview10.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                        <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                            <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                                <figure><img src="{{asset('assets/images/parkview11_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                                </figure>
                                                                <div class="caption"><a class="link link-original" href="{{asset('assets/images/parkview11.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show" id="tabs-2-2">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Location</h3>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8962.453472855705!2d73.21385394663412!3d33.71887381829114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfc20e2f8137c9%3A0xea559b5033b4c05a!2sPark+View+City%2C+Islamabad!5e0!3m2!1sen!2s!4v1544097335345" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <p class="text-gray-darker">Park view city situated in the heart of Islamabad is a definition of luxury and serenity. When it comes to finding the perfect family friendly neighbourhood a lot of things are to be considered, from schools to hospitals to other facilities that are required.</p>
                                    </div>
                                    <div class="container">
                                        <h3>Map</h3>
                                        <figure><img src="{{asset('assets/images/parkviewmap.jpg')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">Park view city situated in the heart of Islamabad is a definition of luxury and serenity. When it comes to finding the perfect family friendly neighbourhood a lot of things are to be considered, from schools to hospitals to other facilities that are required.</p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show" id="tabs-2-3">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Park View City</h3>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xbJJFgJfoTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <h3>Marketing By Beacon Investment</h3>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nF-b2eHU8a4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div> </section> </div>
                            <div class="tab-pane fade" id="tabs-2-4">
                                <section class="section-60 section-md-100">
                                    <div class="container">
                                        <h3 class="text-center">Property Types</h3>
                                        <div class="row justify-content-md-center">
                                            <div class="col-xl-10">
                                                <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist" aria-multiselectable="true">
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading1" role="tab">
                                                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1" aria-controls="accordionOneCollapse1" aria-expanded="true">Residential
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1">
                                                            <div class="card-body">
                                                                <p class="text-gray-05">There are four different residential type plots, i.e. 5 Marla, 10 Marla, 1 Kanal and 2 Kanal. Booking for only residential plots has been started.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading2" role="tab">
                                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse2" aria-controls="accordionOneCollapse2" aria-expanded="false">Commercial
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse" id="accordionOneCollapse2" role="tabpanel" aria-labelledby="accordionOneHeading2">
                                                            <div class="card-body">
                                                                <p class="text-gray-05">The booking for commericial plots has not been started yet. Hence, details regarding commericial plot sizes and prices have not been released.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-5">
                                <section class="bg-decoration-wrap bg-decoration-bottom section-bottom-60 section-xl-top-100 section-xl-bottom-100 bg-athens-gray">
                                    <div class="container bg-decoration-content">
                                        <div class="row justify-content-md-center">
                                            <h3>Installment Details</h3>
                                            <div class="col-lg-10 col-xl-12">
                                                <div class="row row-40 align-items-md-end">
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table pricing-table-preferred">
                                                            <div class="pricing-table-label">
                                                                <p>Most popular</p>
                                                            </div>
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">5 Marla
                                                                    <h6>Rs.</h6>
                                                                    <div class="pricing-object pricing-object-lg">
                                                                        <span class="price">395,000</span>
                                                                        <span class="small small-bottom">/ quarter</span>
                                                                    </div>
                                                                    <div class="divider-circle"></div>
                                                                    <ul class="pricing-list">
                                                                        <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 3,957,500</span></li>
                                                                        <li>Size <span class="text-ubold text-ebony-clay">5 Marla</span></li>
                                                                        <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 797,500</span></li>
                                                                        <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                        <li>Duration 2.5 years</li>
                                                                    </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('park-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">8 Marla</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">600,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 6,012,500</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">8 Marla</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 1,212,500</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('park-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">12 Marla</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">700,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 7,015,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">12 Marla</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 1,415,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('park-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">1 Kanal</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">1,250,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 12,525,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">1 Kanal</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 2,525,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('park-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">2 Kanal</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">2,750,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 27,550,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">2 Kanal</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 5,55,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('park-price') }}">Details</a></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-decoration-object bg-whisperapprox"></div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-6">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Features</h3>
                                        <figure><img src="{{asset('assets/images/park-logo.png')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">Park view city believes in providing comfort and luxury to its people, it is a gated community making it secure and safe for families, located on the prime location of Islamabad next to Bahria enclave. It has all you need to raise a family in the best imaginable environment. Modern infrastructure, load shedding free society, underground supply of electricity and 24/7 availability of gas and water makes it the perfect fit for your famil</p>
                                        <p class="text-gray-darker">Park view city covers every need of its residents whether you are an adult, a teen or a child. Luxurious facilities within the community can easily take care of any pent-up stress due to rush hours</p>
                                        <p class="text-gray-darker">Elegant housing plan and modern state of the art facilities ranging from hospital, school, mosque, parks, cinema, shopping mall, food street, gym, zoo and a huge sports complex with indoor and outdoor sports like bowling, swimming, golf, snooker and many more within the gated community allowing you and your family to utilize the basic needs and enjoy the luxuries of life in a secure stress-free environment</p>

                                        <p class="text-gray-darker"> Following are some salient features of Taj Residencia:</p>
                                        <p class="text-gray-darker">
                                        <ul class="list-marked">
                                            <li>Prime Location</li>
                                            <li>Security and surveillance</li>
                                            <li>Power backup</li>
                                            <li>Modern Infrastructure</li>
                                            <li>Underground Supply of Electricity</li>
                                            <li>No Load shedding </li>
                                            <li>Mosques, commercial areas and parks</li>
                                            <li>24/7 Availability Of Gas And Water</li>
                                        </ul>
                                        </p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-7">
                                <section class="section-35 section-md-50">
                                    <section class="section-35 section-md-50">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3></h3>
                                                </div>
                                            </div>
                                            <div class="row row-30 justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/vision.PNG')}}" alt="" width="570" height="386"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>Since its inception in 2002. Park view by vision group has accomplished unprecedent feats in the realm of realm of real estate of pakistan. In just under adecade, park view by visiom group rose from a beginner real state player to a dominant real estate giant and today stand as a leading name in the industry.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-8">
                                <h3>Beacon Investment</h3>
                                <figure><img src="{{asset('assets/images/typography-9-beacon-570x386.jpg')}}" alt="" width="570" height="386"/>
                                </figure>
                                <p>In Beacon Investment, we care a lot for our customers. We are not here to just earn money but also are eager to have the reputation of being unique in our dealings. That uniqueness encompasses fairness, honesty, and no illegal money making. Yes, you are not just our customer, you are a part of our family of clients that deserves to be treated as such.</p>
                                <p>Beacon Investment, as a company, is strictly against any kind of deceit to our customers. We do not indulge in ‘TOP’, an unethical advantage and greedy practice being followed by short-visioned dealers.</p>
                                <p>We are currently dealing with societies that are trustworthy after an excessive research about its owners, developers and their backgrounds. We have experienced professional with about 20 years experience in selling/trading of land/homes and construction.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-9">
                                <div class="col-lg-12 col-xl-12">
                                    <h3>Get in Touch</h3>
                                    <form class="rd-mailform form-modern" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                        <div class="row row-30">
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                                    <label class="form-label" for="contact-name">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="contact-email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-wrap">
                                                    <div class="textarea-lined-wrap">
                                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                                        <label class="form-label" for="contact-message">Message</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-30 row-offset-5">
                                            <div class="col-sm-8">
                                                <button class="button button-primary button-block" type="submit">Send</button>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="button button-silver-outline button-block" type="reset">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </section>


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
@stop