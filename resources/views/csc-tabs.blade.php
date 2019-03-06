@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Capital Smart City
    @parent
@stop

{{-- page level styles --}}
@section('content')
    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-image-1.jpg')}});">
        <div class="container">
            <div class="page-title">
                <h2>Capital Smart City</h2>
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
                                                                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Residential Units & Farm Houses</a></li>
                                                                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Salient Features</a></li>
                                                            </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="row isotope isotope-gutter-default" data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery">
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-1-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-1-beacon-720x830_original.jpg')}}" data-photo-swipe-item="" data-size="1200x809"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/csc_pricelist_370x278.jpeg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/csc_pricelist.jpg')}}" data-photo-swipe-item="" data-size="1200x912"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-7-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-7-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-2-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-2-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-6-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-6-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x902"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-5-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-5-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x935"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-3-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-3-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-9-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-9-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/gallery-grid-8-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/gallery-8-beacon-1200x800_original.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13307.938583290126!2d72.8909183!3d33.5017766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbf21e4cdc530bdfc!2sCapital+Smart+City!5e0!3m2!1sen!2s!4v1515355060574" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                                        <p class="text-gray-darker">The project lies between Lahore-Islamabad Motorway M-2 and Chakri Road, near Thalian Road in the vicinity of the under-construction New Islamabad International Airport. According to the map, the society will have its main entrance through a dedicated interchange on M-2.</p>
                                        <p class="text-gray-darker">With the construction of this interchange, Capital Smart City will be left only 5.5 kilometer away from Islamabad’s Toll Plaza on M-2. The construction work on the interchange is yet to start.</p>
                                    </div>
                                    <div class="container">
                                        <h3>Map</h3>
                                        <figure><img src="{{asset('assets/images/gallery-1-beacon-720x830_original.jpg')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">The project lies between Lahore-Islamabad Motorway M-2 and Chakri Road, near Thalian Road in the vicinity of the under-construction New Islamabad International Airport. According to the map, the society will have its main entrance through a dedicated interchange on M-2.</p>
                                        <p class="text-gray-darker">With the construction of this interchange, Capital Smart City will be left only 5.5 kilometer away from Islamabad’s Toll Plaza on M-2. The construction work on the interchange is yet to start.</p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show" id="tabs-2-3">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Capital Smart City</h3>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/AP2AF_anKXE?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                        <h3>Marketing By Beacon Investment</h3>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/UsfcD5SlbW8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                            </div>
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
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading3" role="tab">
                                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse3" aria-controls="accordionOneCollapse3" aria-expanded="false">Farm Houses
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse" id="accordionOneCollapse3" role="tabpanel" aria-labelledby="accordionOneHeading3">
                                                            <div class="card-body">
                                                                <p class="text-gray-05">According to the map, there will be three different sized farm houses in Capital Smart City. i.e. 5 Kanal, 10 Kanal and 20 Kanal. The price details of farm houses has not been released by the developers.</p>
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
                                                                <h5 class="pricing-table-header">5 Marla</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">140,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 2,100,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">125 Sq Yd</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 210,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 3 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('csc-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">10 Marla</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">240,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 3,600,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">250 Sq Yd</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 360,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 3 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('csc-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">1 Kanal</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">360,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 5,400,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">500 Sq Yd</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 540,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 3 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('csc-price') }}">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">2 Kanal</h5>
                                                                <h6>Rs.</h6>
                                                                <div class="pricing-object pricing-object-lg">
                                                                    <span class="price">710,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">Rs. 10,600,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">1000 Sq Yd</span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay">Rs. 1,060,000</span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installments</span></li>
                                                                    <li>Duration 3 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="{{ URL::to('csc-price') }}">Details</a></div>
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
                                        <figure><img src="images/typography-3-beacon-570x386.jpg" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">Capital Smart City is a new addition to the development projects happening all over Pakistan. Pakistan’s first Smart City, located in Islamabad. The project constitutes of both residential and commercial plots with the mission to provide basic requirements of every day life.</p>
                                        <p class="text-gray-darker">The aim of developing Capital Smart City is to provide a luxurious lifestyle and economic opportunities to the people of the country. The Capital Smart City will be a large city having education zone in the area of 139 acres including secondary and high schools, colleges, university and learning centers. Capital Smart City Islamabad has also planned an ideally located central commercial area for offices and shopping plaza to cater the shopping needs of individuals. The city has also reserved some of the land for health clinics, medical centers, and a well-equipped hospital to secure the life of Capital Smart City’s residents.</p>
                                        <p class="text-gray-darker"> Following are some salient features of Capital Smart City:</p>
                                        <p class="text-gray-darker">
                                        <ul class="list-marked">
                                            <li>55,000 Kanal Project</li>
                                            <li>Near New Islamabad International Airport</li>
                                            <li>Direct Access from Islamabad-Lahore Motorway and from Chakri Road</li>
                                            <li>Designated Interchange by FWO</li>
                                            <li>South Asia's First Ever Grade 8 Eco-Friendly City</li>
                                            <li>Beautiful Lakes and Green Spaces</li>
                                            <li>World Class Hotels and Shopping Mall</li>
                                            <li>Majestic Theme Park</li>
                                            <li>24/7 Electricity</li>
                                            <li>18 Holes PGA Standard Golf Course</li>
                                            <li>Community Club</li>
                                            <li>Education and Health Zone</li>
                                            <li>Wide Carpeted Roads</li>
                                            <li>State-of-the-Art Transit System</li>
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
                                                    <h3>Habib Rafiq (PVT.) LTD.</h3>
                                                </div>
                                            </div>
                                            <div class="row row-30 justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/typography-2-beacon-570x386.jpg')}}" alt="" width="570" height="386"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>Habib Rafiq (Pvt.) Limited has come a long way to symbolize commitment, distinction and professional Excellence by meeting the stringent, demanding and extra ordinary work requirements of the client. HRL has undertaken prestigious projects of high engineering, national and international importance involving civil, electrical and mechanical works for the last 60 years.</p>
                                                        <p>HRL enjoys the reputation of being a trend setter in the ever expanding arena of housing and infrastructure in the last 10 years and has earned a respect and reputation of being most recognized name in the market. The biggest name in real estate development are proud to have HRL associated with them. HRL has added value through a useful engineering contribution towards the concept of development of housing and infrastructure vis-a-vis other disciplines.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                    <section class="section-35 section-md-50">
                                        <div class="container">
                                            <h3>Surbana & Jurong</h3>
                                            <div class="row row-30 flex-row-md-reverse justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/typography-4-beacon-570x386.jpg')}}" alt="" width="570" height="386"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>The designers of Capital Smart City is a renowned singaporean based company Surbana Jurong. Surbana Jurong Private Limited (also referred to as Surbana Jurong) is a Singaporean government-owned consultancy company focusing on infrastructure and urban development. With over 50 years of track record in successful project delivery, the Surbana Jurong Group has grown to become one of the largest Asia-based urban, industrial and infrastructure consulting firms.</p>
                                                        <p>
                                                            Surbana Jurong acquired SMEC Holdings and AETOS Holdings in August and October 2016 respectively. These acquisitions have raised its staff count to 13,000 employees.In November 2017, Surbana Jurong acquired Robert Bird Group, a global consulting engineering firm. Jurong International Holdings was a wholly owned subsidiary of JTC Corporation specialising in industrial development. It has built townships and provided marine and infrastructure developments.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
            </div></div>
    </section>


@stop