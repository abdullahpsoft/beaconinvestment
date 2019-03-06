@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Our Project
    @parent
@stop

{{-- page level styles --}}
@section('content')


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
                                                            <figure><img src="{{asset('assets/images/Image18 2019-01.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/origin18.jpg')}}" data-photo-swipe-item="" data-size="1200x809"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image5 512019-01-23 at 5.23.18 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/origional5.jpg')}}" data-photo-swipe-item="" data-size="1200x912"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image19 2019-01-23 at 5.28.49 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/original19.jpeg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image14 2019-01-23 at 5.26.58 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/orig14.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image16 2019-01-23 at 5.25.52 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/orig16.jpg')}}" data-photo-swipe-item="" data-size="1200x902"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image15 2019-01-23 at 5.26.13 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/orig15.jpg')}}" data-photo-swipe-item="" data-size="1200x935"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image11 2019-01-23 at 5.28.13 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/origion11.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Image1 2019-01-23 at 5.24.39 PM.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/origional1.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.3913251615236!2d73.09563691466175!3d33.647020880718074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfead734e64003%3A0x7a83c126aaa28bcc!2sThe+Palm+Residential+Apartments!5e0!3m2!1sen!2s!4v1547884290074" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <p class="text-gray-darker">Our site is set on a palatial green just 20 minutes’ drive from The Centaurus, 5 minutes’ drive form Quaid-e-Azam International Hospital, 10 minutes from New Islamabad International Airport. That’s close enough for convenience and far enough to escape from city living! The Palm is Located Service Road West, Near Sohan Interchange, Islamabad Expressway, Pakistan.

                                        </p>
                                    </div>
                                    <div class="container">
                                        <h3></h3>
                                        <figure><img src="images/" alt="" width="1200" height="800"/>
                                        </figure>
                                        <p class="text-gray-darker"> </p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show" id="tabs-2-3">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>The Palm</h3>
                                        <iframe width="744" height="409" src="https://www.youtube.com/embed/y-0HAAByFV0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <h3></h3>
                                </section> </div>
                            <div class="tab-pane fade" id="tabs-2-4">
                                <section class="section-60 section-md-100">
                                    <div class="container">
                                        <h3 class="text-center">Property Types</h3>
                                        <div class="row justify-content-md-center">
                                            <div class="col-xl-10">
                                                <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist" aria-multiselectable="true">
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading1" role="tab">
                                                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1" aria-controls="accordionOneCollapse1" aria-expanded="true">One Bed Appartment-Rs 7500 per Sqft.
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1">
                                                            <div class="card-body">
                                                                <p class="text-gray-05"> <p>one bed appartment sizes are</p>
                                                                <ul class="list-bullet">
                                                                    <li>700sqft</li>
                                                                    <li>735sqft</li>
                                                                    <li>785sqft</li>
                                                                    <li>865sqft</li>
                                                                    <li>1033sqft</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading2" role="tab">
                                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse2" aria-controls="accordionOneCollapse2" aria-expanded="false">Two Bed Appartments
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse" id="accordionOneCollapse2" role="tabpanel" aria-labelledby="accordionOneHeading2">
                                                            <div class="card-body">
                                                                <p class="text-gray-05"><p>two bed appartments Sizes are</p>
                                                                <ul class="list-bullet">
                                                                    <li>1183sqft</li>
                                                                    <li>1590sqft</li>
                                                                    <li>1690sqft</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist" aria-multiselectable="true">
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading1" role="tab">
                                                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1" aria-controls="accordionOneCollapse1" aria-expanded="true">Three Bed Appartment-Rs 7500 per Sqft.
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1">
                                                            <div class="card-body">
                                                                <p class="text-gray-05"> <p>Three bed appartment sizes are</p>
                                                                <ul class="list-dot">
                                                                    <li>2365sqft</li>
                                                                    <li>2442sqft</li>
                                                                    <li>2600sqft</li>
                                                                    <li>2685sqft</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist" aria-multiselectable="true">
                                                        <div class="card card-custom card-light">
                                                            <div class="card-heading" id="accordionOneHeading1" role="tab">
                                                                <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1" aria-controls="accordionOneCollapse1" aria-expanded="true">Four Bed Appartment-Rs 7500 per Sqft.
                                                                        <div class="card-arrow"></div></a></div>
                                                            </div>
                                                            <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1">
                                                                <div class="card-body">
                                                                    <p class="text-gray-05"> <p>Four bed appartment sizes are</p>

                                                                    <ul class="list dotted">
                                                                        <li><ol>2555sqft</ol></li>
                                                                        <li>3143sqft</li>
                                                                    </ul>


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
                                                                <h5 class="pricing-table-header">One Bed Appartment
                                                                    <h6>Rs.</h6>
                                                                    <div class="pricing-object pricing-object-lg">
                                                                        <span class="price">7,500</span>
                                                                        <span class="small small-bottom">/ sqft</span>
                                                                    </div>
                                                                    <div class="divider-circle"></div>
                                                                    <ul class="pricing-list">
                                                                        <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 5,250,000 to 7,747,500</span></li>
                                                                        <li>Size <span class="text-ubold text-ebony-clay">700 to 1033 sqft</span></li>
                                                                    </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('palm-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">Two Bed Appartment</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">7,500</span>
                                                                    <span class="small small-bottom">/ sqft</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 8,872,500 to 12,675,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">1183 to 1690 sqft</span></li>


                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('palm-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">Three Bed Appartment</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">7,500</span>
                                                                    <span class="small small-bottom">/sqft</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 17,737,500 to 20,137,500</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">2365 to 2685</span></li>

                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('palm-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">Four Bed Appartment</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">7,500</span>
                                                                    <span class="small small-bottom">/sqft</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 19,162,500 to 23,572,500</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">2555 x 3143</span></li>

                                                                </ul>
                                                                <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('palm-price') }}">Details</a></div>
                                                            </div>

                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-6">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Features</h3>
                                        <figure><img src="{{asset('assets/images/the-palm-centered-1.jpg')}}" alt="" width="635" height="151"/>
                                        </figure>
                                        <p class="text-gray-darker">The Palm Luxury Residential Project Located within Islamabad, a modern lifestyle community focused on residential leisure, inspired by nature is set to become a secured gated community. THE PALM is a nine story residential apartment buildings with the most attractive location on Islamabad Expressway. The beauty of this project is that it is purely intended for residential purpose with all the amenities in one place.</p>
                                        <p class="text-gray-darker">THE Palm is offering a great Investment opportunity in the ideal location of Islamabad. What makes Palm the best Investment is its Uniqueness among all the Housing projects in this area. A home which has all the benefits of a commercial place, now thats something to invest in...   </p>
                                        <p class="text-gray-darker">'THE PALM' the best place to live is the following features that are very hard to find now a days in any other project.</p>
                                        <p class="text-gray-darker">
                                        <ul class="list-marked">
                                            <li>SECURE GATED COMMUNITY</li>
                                            <li>PRAYING AREA</li>
                                            <li>SWIMMING POOL</li>
                                            <li>CAR PARKING</li>
                                            <li>PLAYING AREA</li>
                                            <li>ROOF TOP RESTAURANTS</li>
                                            <li>GYM AREA</li>

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
                                                    <h3>MOHKAM ENTERPRISES</h3>
                                                </div>
                                            </div>
                                            <div class="row row-30 justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/Mnk1anzi.jpg')}}" alt="" width="557" height="255"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>Like its name, Mohkam Enterprises is a well based and strong construction company. Mohkam Enterprises is a coming together of individuals that are highly qualified, possessing sound experience in their respective fields.</p>
                                                        <p>These individuals, with their expertise and capabilities, have decided to join hands to become a force in the industry. With a long history of building quality projects, the union of all these experts give, Mohkam Enterprises a contemporary approach and an edge over the competition.
                                                            The unchallenged spirit of Mohkam Enterprises promise to transform the conventional outlook of Pakistan’s construction techniques and to start this change Mohkam Enterprises presents you, The Palm.</p>
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

                        </div></div></div></div></div>

    </section>

@stop