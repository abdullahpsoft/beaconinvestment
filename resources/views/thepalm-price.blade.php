@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Our Project
    @parent
@stop

{{-- page level styles --}}
@section('content')
    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-image-1.jpg')}});">
        <div class="container">
            <div class="page-title">
                <h2>Price List</h2>
            </div>
        </div>
    </section>


    <section class="section-60 section-md-100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>One bed Appartments</th>
                        <th>Rs. 7500 per Sq.ft</th>
                    </tr>
                    </thead>
                </table>
                <table class="table table-primary table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Installment No.</th>
                        <th>Installment Details</th>
                        <th>700 </th>
                        <th>735</th>
                        <th>785</th>
                        <th>865</th>
                        <th>1033</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" align="center" style="font-weight: bold">Total Price (Rs.)</td>
                        <td style="font-weight: bold">5,250,000</td>
                        <td style="font-weight: bold">5,512,500</td>
                        <td style="font-weight: bold">5,887,500</td>
                        <td style="font-weight: bold">6,487,500</td>
                        <td style="font-weight: bold">7,747,500</td>


                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Booking @ 10%</td>
                        <td>525,000</td>
                        <td>551,250</td>
                        <td>588,750</td>
                        <td>648,750</td>
                        <td>774,750</td>


                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Allotment @ 10%</td>
                        <td>525,000</td>
                        <td>551,250</td>
                        <td>588,750</td>
                        <td>648,750</td>
                        <td>774,750</td>


                    </tr>
                    <tr>
                        <td>3</td>
                        <td>confirmation @ 5%</td>
                        <td>262,500</td>
                        <td>275,625</td>
                        <td>294,375</td>
                        <td>324,375</td>
                        <td>387,375</td>


                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Monthly (34*1%)</td>
                        <td>52,500</td>
                        <td>55,125</td>
                        <td>58,875</td>
                        <td>64,875</td>
                        <td>77,475</td>


                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quaterly (12*3%)</td>
                        <td>157,500</td>
                        <td>165,375</td>
                        <td>176,625</td>
                        <td>194,625</td>
                        <td>232,425</td>


                    </tr>
                    <tr>
                        <td>6</td>
                        <td>On Possesion 5%</td>
                        <td>262,500</td>
                        <td>275,625</td>
                        <td>294,375</td>
                        <td>324,375</td>
                        <td>387,375</td>


                    </tr>


                </table>
            </div>
        </div>
    </section>
    <section class="section-60 section-md-100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Two bed Appartments</th>
                        <th>Rs. 7500 per Sq.ft</th>
                    </tr>
                    </thead>
                </table>
                <table class="table table-primary table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Installment No.</th>
                        <th>Installment Details</th>
                        <th>1183 </th>
                        <th>1590</th>
                        <th>1690</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" align="center" style="font-weight: bold">Total Price (Rs.)</td>
                        <td style="font-weight: bold">8,872,500</td>
                        <td style="font-weight: bold">11,925,000</td>
                        <td style="font-weight: bold">12,675,500</td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Booking @ 10%</td>
                        <td>887,250</td>
                        <td>1,192,500</td>
                        <td>1,267,500</td>



                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Allotment @ 10%</td>
                        <td>887,250</td>
                        <td>1,192,500</td>
                        <td>1,267,500</td>



                    </tr>
                    <tr>
                        <td>3</td>
                        <td>confirmation @ 5%</td>
                        <td>443,625</td>
                        <td>596,250</td>
                        <td>633,750</td>



                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Monthly (34*1%)</td>
                        <td>88,725</td>
                        <td>119,250</td>
                        <td>126,750</td>



                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quaterly (12*3%)</td>
                        <td>266,175</td>
                        <td>357,750</td>
                        <td>380,250</td>



                    </tr>
                    <tr>
                        <td>6</td>
                        <td>On Possesion 5%</td>
                        <td>443,625</td>
                        <td>596,250</td>
                        <td>633,750</td>



                    </tr>


                </table>
            </div>
        </div>
    </section>
    <section class="section-60 section-md-100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Three bed Appartments</th>
                        <th>Rs. 7500 per Sq.ft</th>
                    </tr>
                    </thead>
                </table>
                <table class="table table-primary table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Installment No.</th>
                        <th>Installment Details</th>
                        <th>2365 </th>
                        <th>2442</th>
                        <th>2600</th>
                        <th>2685</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" align="center" style="font-weight: bold">Total Price (Rs.)</td>
                        <td style="font-weight: bold">17,737,500</td>
                        <td style="font-weight: bold">18,315,000</td>
                        <td style="font-weight: bold">19,500,000</td>
                        <td style="font-weight: bold">20,137,500</td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Booking @ 10%</td>
                        <td>1,773,750</td>
                        <td>1,831,500</td>
                        <td>1,950,000</td>
                        <td>2,013,750</td>



                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Allotment @ 10%</td>
                        <td>1,773,750</td>
                        <td>1,831,500</td>
                        <td>1,950,000</td>
                        <td>2,013,750</td>



                    </tr>
                    <tr>
                        <td>3</td>
                        <td>confirmation @ 5%</td>
                        <td>886,875</td>
                        <td>915,750</td>
                        <td>975,000</td>
                        <td>1,006,875</td>


                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Monthly (34*1%)</td>
                        <td>177,375</td>
                        <td>183,150</td>
                        <td>195,000</td>
                        <td>201,375</td>


                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quaterly (12*3%)</td>
                        <td>532,125</td>
                        <td>549,450</td>
                        <td>585,000</td>
                        <td>604,125</td>



                    </tr>
                    <tr>
                        <td>6</td>
                        <td>On Possesion 5%</td>
                        <td>886,875</td>
                        <td>915,750</td>
                        <td>975,000</td>
                        <td>1,006,875</td>






                    </tr>

                </table>
            </div>
        </div>
    </section>
    <section class="section-60 section-md-100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Four bed Appartments</th>
                        <th>Rs. 7500 per Sq.ft</th>
                    </tr>
                    </thead>
                </table>
                <table class="table table-primary table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Installment No.</th>
                        <th>Installment Details</th>
                        <th>2555 </th>
                        <th>3143</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" align="center" style="font-weight: bold">Total Price (Rs.)</td>
                        <td style="font-weight: bold">19,162,500</td>
                        <td style="font-weight: bold">23,572,500</td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Booking @ 10%</td>
                        <td>1,916,250</td>
                        <td>2,357,250</td>



                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Allotment @ 10%</td>
                        <td>1,916,250</td>
                        <td>2,357,250</td>



                    </tr>
                    <tr>
                        <td>3</td>
                        <td>confirmation @ 5%</td>
                        <td>958,125</td>
                        <td>1,178,625</td>



                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Monthly (34*1%)</td>
                        <td>191,625</td>
                        <td>235,725</td>



                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quaterly (12*3%)</td>
                        <td>574,875</td>
                        <td>707,175</td>



                    </tr>
                    <tr>
                        <td>6</td>
                        <td>On Possesion 5%</td>
                        <td>958,125</td>
                        <td>1,178,625</td>



                    </tr>


                </table>
            </div>
        </div>
    </section>
    <section class="section-60 section-md-90 section-xl-bottom-120">
        <div class="container">
            <h3>Note</h3>
            <div class="row row-offset-2 justify-content-md-center">
                <div class="col-xl-10">
                    <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist" aria-multiselectable="true">
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading1" role="tab">
                                <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1" aria-controls="accordionOneCollapse1" aria-expanded="true">PRIME LOCATION CHARGES
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1">
                                <div class="card-body">
                                    <p class="text-gray-05">
                                        Corner will be charged 10% extra .
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading2" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse2" aria-controls="accordionOneCollapse2" aria-expanded="false">PAYMENT SCHEDULE
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse2" role="tabpanel" aria-labelledby="accordionOneHeading2">
                                <div class="card-body">
                                    <p class="text-gray-05">30 months schedule of payment (Quarterly)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading3" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse3" aria-controls="accordionOneCollapse3" aria-expanded="false">REBATE
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse3" role="tabpanel" aria-labelledby="accordionOneHeading3">
                                <div class="card-body">
                                    <p class="text-gray-05">upper ground floor will be charged @RS.7800/-Prsqft. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading4" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse4" aria-controls="accordionOneCollapse4" aria-expanded="false">MEMBERSHIP FEE
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse4" role="tabpanel" aria-labelledby="accordionOneHeading4">
                                <div class="card-body">
                                    <p class="text-gray-05">Rs. 5,000 on  25' x 50',30' x 60' </p>
                                    <p class="text-gray-05">Rs. 7,500 on 35' x 70',40' x 80',50' x 90' </p>

                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading5" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse5" aria-controls="accordionOneCollapse5" aria-expanded="false">DEVELOPMENT CHARGES
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse5" role="tabpanel" aria-labelledby="accordionOneHeading5">
                                <div class="card-body">
                                    <p class="text-gray-05">Above prices are exclusive of development charges.</p>
                                    <p class="text-gray-05">Installments are required to be deposited by 1st of each quarter.</p>
                                    <p class="text-gray-05">Above payment plan and prices are subject to change without notice.</p>
                                    <p class="text-gray-05">PayOrder/DD to be made in favor of <span style="color: #000066;font-weight: bold">FUTURE DEVELOPMENTS HOLDINGS (PVT) LTD</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop