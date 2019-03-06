@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Taj
    @parent
@stop

{{-- page level styles --}}
@section('content')
    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-image-1.jpg')}});">
        <div class="container">
            <div class="page-title">
                <h2>Taj Residencia</h2>
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
                            <li><a href="#tabs-2-10" data-toggle="tab">Development Pictures</a></li>

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
                                                            <figure><img src="{{asset('assets/images/Location%20Map%20Taj_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/Location%20Map%20Taj.jpg')}}" data-photo-swipe-item="" data-size="1200x809"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Ali_BEACON%20TAJwith%20commercial%20Taj%20list_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/Ali_BEACON%20TAJwith%20commercial%20Taj%20list.jpg')}}" data-photo-swipe-item="" data-size="1200x912"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Centaurus_Mall_II_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/Centaurus_Mall_II.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/CommercialHub-01-01-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/CommercialHub-01-01.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Taj_Schools-01_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/Taj_Schools-01.jpg')}}" data-photo-swipe-item="" data-size="1200x902"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Hospital_01-01_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/Hospital_01-01.jpg')}}" data-photo-swipe-item="" data-size="1200x935"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/grandMosque-01_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/grandMosque-01.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/Theme_Park_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/Theme_Park.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.744681795695!2d72.96368041527438!3d33.58597778073529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df96c8527108db%3A0xbe1dda3a6ce1e925!2sTaj+Residencia!5e0!3m2!1sen!2s!4v1543821049312" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                                        <p class="text-gray-darker">Our site is set on a palatial green just 20 minutes’ drive from The Centaurus, 5 minutes’ drive form Quaid-e-Azam International Hospital, 10 minutes from New Islamabad International Airport. That’s close enough for convenience and far enough to escape from city living! Taj Residencia is located parallel to CDA sector I-14 and I-15 Islamabad. It has three entrances, one is from I-14 link road. Second entrance is facing CDA sector I-16 and third entrance is Lakhu road which is towards Thalian Interchange motorway M2.</p>
                                    </div>
                                    <div class="container">
                                        <h3>Map</h3>
                                        <figure><img src="{{asset('assets/images/locationmaptaj.jpg')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">Our site is set on a palatial green just 20 minutes’ drive from The Centaurus, 5 minutes’ drive form Quaid-e-Azam International Hospital, 10 minutes from New Islamabad International Airport. That’s close enough for convenience and far enough to escape from city living! Taj Residencia is located parallel to CDA sector I-14 and I-15 Islamabad. It has three entrances, one is from I-14 link road. Second entrance is facing CDA sector I-16 and third entrance is Lakhu road which is towards Thalian Interchange motorway M2.</p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show" id="tabs-2-3">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Taj Residencia</h3>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7GghAt2RHKc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <h3>Marketing By Beacon Investment</h3>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ptHGbMeJya4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
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

                                                </div></div></div></div>
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
                                                                <h5 class="pricing-table-header">25 x 50
                                                                    <h6>Rs.</h6>
                                                                    <div class="pricing-object pricing-object-lg">
                                                                        <span class="price">320,000</span>
                                                                        <span class="small small-bottom">/ quarter</span>
                                                                    </div>
                                                                    <div class="divider-circle"></div>
                                                                    <ul class="pricing-list">
                                                                        <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 4,000,000</span></li>
                                                                        <li>Size <span class="text-ubold text-ebony-clay">25 x 50</span></li>
                                                                        <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 800,000</span></li>
                                                                        <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                        <li>Duration 2.5 years</li>
                                                                    </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('taj-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">30 x 60</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">376,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 4,700,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">30 x 60</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 940,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('taj-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">35 x 70</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">440,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 5,500,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">30 x 60</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 1,100,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('taj-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">40 x 80</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">536,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 6,700,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">40 x 80</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 1,340,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('taj-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">50 x 90</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">760,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 9,500,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">50 x 90</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 1,900,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('taj-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">70 x 120</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">1,480,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 18,500,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">70 x 120</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 3,700,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 2.5 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('taj-price') }} ">Details</a></div>
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
                                        <figure><img src="{{asset('assets/images/Logo%20Taj.jpg')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">Taj Residencia is our newest venture and brings with it luxury living and service to purpose built private estates. We are bringing together everything we have learned about luxury design and incorporating it into a purpose built private estate for the 21st Century. With our unrivalled reputation for luxury residential properties, we will deliver not only the finest homes in unique locations but a lifestyle to match. Future owners at the Taj Residencia will benefit from a range of facilities including their own private parkland, woodland walks, sports facilities, as well as healthcare, spa, restaurant, 24-hour security and bespoke concierge team designed to meet all needs. Encompassing a collection of different styles of luxury homes, from beautiful apartments, Villas, townhouses and large detached properties.</p>
                                        <p class="text-gray-darker">After having delivered “The Centaurus” we have now eyed a perfect corner in Islamabad to furnish the most modern, secure and picturesque housing society i.e. “Taj Residencia”. After having redefined the shopping and excursion trends of Islamabad through “The Centaurus” (the most modernized & visited shopping hub of The Capital), our experts are now ready to take your ideal living standard one step ahead through “Taj Residencia”. Live in the middle of it all. “Taj Residencia” is at the heart of contemporary living, architecture, culture, fashion, dining, parks and beautiful sunsets, offering the best of Islamabad, all in one place. This project is dedicated to enhance the opportunities of parallel growth based on attractive returns for investors, users and to the company itself. Our people specialize in fit out, technology, construction and development and are used to delivering places that help people and businesses thrive. This vicinity is designed to be a unique blend of modern infrastructure and naturally enriched, calm landscape of Islamabad. “Taj Residencia” being a brainchild of vastly experienced team of urban developers has a planning edge over its contemporary neighborhoods.</p>
                                        <p class="text-gray-darker"> Following are some salient features of Taj Residencia:</p>
                                        <p class="text-gray-darker">
                                        <ul class="list-marked">
                                            <li>Gated community</li>
                                            <li>Security and surveillance</li>
                                            <li>Power backup</li>
                                            <li>Underground cabling</li>
                                            <li>Waste collection system</li>
                                            <li>Fiber optic</li>
                                            <li>Mosques, commercial areas and parks</li>
                                            <li>Elementary schools</li>
                                            <li>Educational Institutes</li>
                                            <li>Safari Park and Botanical Gardens</li>
                                            <li>Residencial Towers</li>
                                            <li>Mini Golf Course</li>
                                            <li>Commercial Hub & Shoping Centers</li>
                                            <li>Sports Complex</li>
                                            <li>24/7 Security and CCTV Cameras</li>
                                            <li>24/7 Maintenance Services</li>
                                            <li>Grand Jamia Mosque</li>
                                            <li>3D Cinemas</li>
                                            <li>Water Filterations Plants</li>
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
                                                    <h3>SARDAR GROUP</h3>
                                                </div>
                                            </div>
                                            <div class="row row-30 justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/Logo%20Taj.jpg')}}" alt="" width="570" height="386"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>The Sardar Group is a commercial real estate firm that has led, designed & constructed the luxury living market in Pakistan. In 2013, The Group’s achievement in setting an unrivalled international benchmark, far higher than ever achieved in Pakistan’s history, took place when state of the art mega project; The Centaurus was designed, constructed and delivered.</p>
                                                        <p>With the unrivalled reputation for offering and operating luxury living in Pakistan, The Sardar Group of companies deliver not only the finest living spaces, but a lifestyle to match. With high end features and amenities, our private estates provide a concierge lifestyle designed to meet all our residents’ needs. To ensure our world-class standards are maintained, The Sardar Group of companie’s manages all its project process from concept to completion.</p>
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

                            <div class="tab-pane fade " id="tabs-2-10">
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
                                                                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">November</a></li>
                                                                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">April</a></li>
                                                                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">March</a></li>
                                                                <li><a data-isotope-filter="Category 4" data-isotope-group="gallery" href="#">February</a></li>
                                                                <li><a data-isotope-filter="Category 5" data-isotope-group="gallery" href="#">October</a></li>

                                                            </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="row isotope isotope-gutter-default" data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery">
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1784_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1784.jpg')}}" data-photo-swipe-item="" data-size="1200x809"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1788_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1788.jpg')}}" data-photo-swipe-item="" data-size="1200x912"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1790_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1790.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1791_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1791.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1813_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1813.jpg')}}" data-photo-swipe-item="" data-size="1200x935"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1818_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1818.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1837_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1837.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1847_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1847.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1858_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1858.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1880_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1880.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1907_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1907.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/IMG_1917_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/IMG_1917.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_03_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_03.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_04_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_04.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_05_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_05.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_06_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_06.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_07_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_07.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_08_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_08.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/April_Update_09_370X278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/April_Update_09.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/March_Update_01_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/March_Update_01.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/March_Update_02_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/March_Update_02.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/March_Update_03_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/March_Update_03.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/March_Update_04_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/March_Update_04.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/March_Update_05_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/March_Update_05.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/March_Update_06_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/March_Update_06.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 4">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/feb1_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/feb1.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 4">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/feb2_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/feb2.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 4">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/feb3_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/feb3.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 4">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/feb4_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/feb4.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 4">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/feb5_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/feb5.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct1_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct1.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct2_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct2.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct3_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct3.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct4_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct4.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct5_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct5.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct6_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct6.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct7_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct7.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct8_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="images/oct8.jpg" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct9_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct9.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 5">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/oct10_370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/oct10.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>

@stop