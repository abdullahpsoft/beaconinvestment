@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Eighteen Islamabad
    @parent
@stop

{{-- page level styles --}}
@section('content')
    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-image-1.jpg')}});">
        <div class="container">
            <div class="page-title">
                <h2>Eighteen Islamabad</h2>
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
                            <li><a href="#tabs-2-3" data-toggle="tab">Property Types</a></li>
                            <li><a href="#tabs-2-4" data-toggle="tab">Payment Plan</a></li>
                            <li><a href="#tabs-2-5" data-toggle="tab">Features</a></li>
                            <li><a href="#tabs-2-6" data-toggle="tab">Developer</a></li>
                            <li><a href="#tabs-2-7" data-toggle="tab">Marketed By</a></li>
                            <li><a href="#tabs-2-8" data-toggle="tab">Contact Us</a></li>
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
                                                                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Residential Villas & Apartments</a></li>
                                                                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Salient Features</a></li>
                                                            </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="row isotope isotope-gutter-default" data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery">
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/eighteen-1-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/eighteen-1-beacon-1200x800.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/eighteen-7-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/eighteen-7-beacon-1200x800.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 3">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/eighteen-4-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/eighteen-4-beacon-1200x800.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 1">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/eighteen-2-beacon-370x278.png')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/eighteen-2-beacon-1200x800.png')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/eighteen-5-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/eighteen-5-beacon-1200x800.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
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
                                                            <figure><img src="{{asset('assets/images/eighteen-3-beacon-370x278.png')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/ighteen-3-beacon-1200x800.png')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-6 isotope-item" data-filter="Category 2">
                                                        <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="gallery-item.html"><span class="icon icon-sm fa fa-link"></span></a>
                                                            <figure><img src="{{asset('assets/images/eighteen-6-beacon-370x278.jpg')}}" alt="" width="370" height="278"/>
                                                            </figure>
                                                            <div class="caption"><a class="link link-original" href="{{asset('assets/images/eighteen-6-beacon-1200x800.jpg')}}" data-photo-swipe-item="" data-size="1200x800"></a></div>
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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.1657167308354!2d72.8856438148214!3d33.60100448073106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df99daa6499a71%3A0xc510c634b6eafcd4!2sElite+Housing+Society!5e0!3m2!1sen!2s!4v1516074486052" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <p class="text-gray-darker">'Eighteen Islamabad' is a 2.77 million sq yard gated community being developed in the 18 district, to the south west of the downtown Islamabad.'Eighteen' is ten minutes away from the New Islamabad Airport.</p>
                                    </div>
                                    <div class="container">
                                        <h3>Master Plan</h3>
                                        <figure><img src="{{asset('assets/images/eighteen-14-beacon-570x386.jpg')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">
                                        <ul class="list-marked">
                                            <li>2.6 Million Square Yards of Land, with a 1.3 Kilometer land front</li>
                                            <li>Over 6,000,000 square feet of Residential Units, with an 80-20 split for Villas and Apartments respectively</li>
                                            <li>Education village, spread over 147,020 Square Feet of Land</li>
                                            <li>Themed around a professional 7200 yards, Eighteen Hole Golf Course</li>
                                            <li>Five Star Hotel, spread over a land area of 95,330 Square Feet with Panoramic Views of the Golf Course</li>
                                            <li>Secured Gated Community for a community of exclusive 2,000 households</li>
                                        </ul></p>
                                    </div>
                                    <div class="container">
                                        <h3>Map</h3>
                                        <figure><img src="{{asset('assets/images/eighteen-1-beacon-570x386.png')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">'Eighteen Islamabad' is a 2.77 million sq yard gated community being developed in the 18 district, to the south west of the downtown Islamabad.'Eighteen' is ten minutes away from the New Islamabad Airport.</p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-3">
                                <section class="section-60 section-md-100">
                                    <div class="container">
                                        <h3 class="text-center">Property Types</h3>
                                        <div class="row justify-content-md-center">
                                            <div class="col-xl-10">
                                                <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist" aria-multiselectable="true">
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading1" role="tab">
                                                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1" aria-controls="accordionOneCollapse1" aria-expanded="true">Residential Villas
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1">
                                                            <div class="card-body">
                                                                <p class="text-gray-05">'Eighteen Islamabad' will cover an area of 2.7 million sq yards with about 2000 residential units including 1100 villas and 900 apartments. Following are the sizes of residential villas</p>
                                                                <p class="text-gray-darker">
                                                                <ul class="list-ordered">
                                                                    <li>10 MARLA</li>
                                                                    <li>1 KANAL</li>
                                                                    <li>2 KANAL</li>
                                                                    <li>4 KANAL</li>
                                                                    <li>8 KANAL</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading2" role="tab">
                                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse2" aria-controls="accordionOneCollapse2" aria-expanded="false">Residential Apartments
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse" id="accordionOneCollapse2" role="tabpanel" aria-labelledby="accordionOneHeading2">
                                                            <div class="card-body">
                                                                <p class="text-gray-05">Eighteen Islamabad has designed 2 Bed, 3 Bed and 4 Bed lavishing apartments.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-custom card-light">
                                                        <div class="card-heading" id="accordionOneHeading3" role="tab">
                                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse3" aria-controls="accordionOneCollapse3" aria-expanded="false">Commercial Units
                                                                    <div class="card-arrow"></div></a></div>
                                                        </div>
                                                        <div class="card-collapse collapse" id="accordionOneCollapse3" role="tabpanel" aria-labelledby="accordionOneHeading3">
                                                            <div class="card-body">
                                                                <p class="text-gray-05">To be launched</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-4">
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
                                                                <h5 class="pricing-table-header">10 Marla</h5>
                                                                <h6>US $</h6>
                                                                <div class="pricing-object pricing-object-xs">
                                                                    <span class="price">$14,000 - $17,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">$282,000 - $345,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">207.18 - 365.39 m<sup>2</sup></span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay"></span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installment</span></li>
                                                                    <li>Duration 4 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="#">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">1 Kanal</h5>
                                                                <h6>US $</h6>
                                                                <div class="pricing-object pricing-object-xs">
                                                                    <span class="price">$26,000 - $37,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">$537,000 - $618,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">399.42 - 544.48 m<sup>2</sup></span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay"></span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installment</span></li>
                                                                    <li>Duration 4 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="#">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">2 Kanal</h5>
                                                                <h6>US $</h6>
                                                                <div class="pricing-object pricing-object-xs">
                                                                    <span class="price">$53,000 - $73,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">$1,071,000 - $1,218,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">878.68 - 1,334.65 m<sup>2</sup></span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay"></span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installment</span></li>
                                                                    <li>Duration 4 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="#">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">4 Kanal</h5>
                                                                <h6>US $</h6>
                                                                <div class="pricing-object pricing-object-xs">
                                                                    <span class="price">$113,000 - $168,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">$2,260,000 - $2,802,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">1,778.59 - 2,204.43 m<sup>2</sup></span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay"></span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installment</span></li>
                                                                    <li>Duration 4 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="#">Details</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="pricing-table">
                                                            <div class="pricing-table-body">
                                                                <h5 class="pricing-table-header">8 Kanal</h5>
                                                                <h6>US $</h6>
                                                                <div class="pricing-object pricing-object-xs">
                                                                    <span class="price">$183,500 - $195,000</span>
                                                                    <span class="small small-bottom">/ quarter</span>
                                                                </div>
                                                                <div class="divider-circle"></div>
                                                                <ul class="pricing-list">
                                                                    <li>Total Price <span class="text-ubold text-ebony-clay">$3,670,000 - $3,909,000</span></li>
                                                                    <li>Size <span class="text-ubold text-ebony-clay">3726.77-4020.23 m<sup>2</sup></span></li>
                                                                    <li>Booking @ 10% <span class="text-ubold text-ebony-clay"></span></li>
                                                                    <li><span class="text-ubold text-ebony-clay">Quarterly Installment</span></li>
                                                                    <li>Duration 4 years</li>
                                                                </ul>
                                                            </div>
                                                            <div class="pricing-table-footer"><a class="button button-primary button-block" href="#">Details</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-decoration-object bg-whisperapprox"></div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-5">
                                <section class="section-35">
                                    <div class="container">
                                        <h3>Features</h3>
                                        <figure><img src="{{asset('assets/images/eighteen-14-beacon-570x386.jpg')}}" alt="" width="570" height="386"/>
                                        </figure>
                                        <p class="text-gray-darker">
                                            Two years ago, Ora Developers in partnership with the Saif Group and Kohistan Builders & Developers, had a vision of bringing a new and international way of living to Pakistan. Together, they assembled the best in design, construction and sustainable living to create the ultimate lifestyle destination. Eighteen Islamabad designed a community of villas and apartments serviced by world-class amenities, a secure, relaxing, luxurious environment created for people who expect the very best.</p>
                                        <p class="text-gray-darker">Eighteen Islamabad offers a 4 years payment plan in which Villa will be delivered in 3 years and you can pay the remaining amount while living inside in it. Eighteen Islamabad presents an array of luxurious living options suitable for families of all sizes. For couples, there are chic, city-style apartments, dramatically designed with wide-angle, uninterrupted views of the golf
                                            course. For larger families or those who desire more space, Eighteen offers lavish private villas. These expansive four- and eight-kanal villas are designed in an intriguing and exclusive crescent shape. They are truly extraordinary homes.</p>
                                        <p class="text-gray-darker"> Following are some salient features of Eighteen's Islamabad's Elite Reverie Housing Scheme:</p>
                                        <p class="text-gray-darker">
                                        <ul class="list-marked">
                                            <li>Professional 7200 yards Golf Course</li>
                                            <li>A lifestyle dominated by comfort and secure living</li>
                                            <li>Dedicated education village</li>
                                            <li>Health zone</li>
                                            <li>Ample green space with kid's areas</li>
                                            <li>Beautiful Lakes and Green Spaces</li>
                                            <li>Five star hotel</li>
                                            <li>Retail Park</li>
                                            <li>Tennis courts</li>
                                            <li>Swimming pools</li>
                                            <li>Cricket fields</li>
                                        </ul>
                                        </p>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-6">
                                <section class="section-35 section-md-50">
                                    <section class="section-35 section-md-50">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3>Saif Group</h3>
                                                </div>
                                            </div>
                                            <div class="row row-30 justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/eighteen-14-beacon-570x386.jpg')}}x" alt="" width="570" height="386"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>The Saif Group was established in the late 1960’s and has created a rich portfolio in textiles, power generation, oil and gas exploration, optical fibre and health care</p>
                                                        <p>The Saif Group is one of the leading industrial and services conglomerates in Pakistan. Its primary operations encompass: oil and gas exploration, power generation, textiles manufacturing, real estate development, health care services, information technology services, software development and environmental management.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                    <section class="section-35 section-md-50">
                                        <div class="container">
                                            <h3>Ora Developers</h3>
                                            <div class="row row-30 flex-row-md-reverse justify-content-lg-between">
                                                <div class="col-md-12">
                                                    <figure><img src="{{asset('assets/images/eighteen-10-beacon-570x386.png')}}" alt="" width="570" height="386"/>
                                                    </figure>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-gray-darker">
                                                        <p>Ora Developers has a proven and diverse history of successful international projects, including the Grosvenor Square in the UK, Ayia Napa Marina in Cyprus, Silver Sands in Grenada, and Pyramid Hills, Pier 88, Crimson Bar & Grill and the Nile City Towers in Egypt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-7">
                                <h3>Beacon Investment</h3>
                                <figure><img src="{{asset('assets/images/typography-9-beacon-570x386.jpg')}}" alt="" width="570" height="386"/>
                                </figure>
                                <p>In Beacon Investment, we care a lot for our customers. We are not here to just earn money but also are eager to have the reputation of being unique in our dealings. That uniqueness encompasses fairness, honesty, and no illegal money making. Yes, you are not just our customer, you are a part of our family of clients that deserves to be treated as such.</p>
                                <p>Beacon Investment, as a company, is strictly against any kind of deceit to our customers. We do not indulge in ‘TOP’, an unethical advantage and greedy practice being followed by short-visioned dealers.</p>
                                <p>We are currently dealing with societies that are trustworthy after an excessive research about its owners, developers and their backgrounds. We have experienced professional with about 20 years experience in selling/trading of land/homes and construction.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-2-8">
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