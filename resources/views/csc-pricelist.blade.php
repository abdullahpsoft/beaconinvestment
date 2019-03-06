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
                        <th>QUARTERLY PAYMENT FOR 3 Years</th>
                        <th>RESIDENTIAL</th>
                    </tr>
                    </thead>
                </table>
                <table class="table table-primary table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Installment No.</th>
                        <th>Installment Details</th>
                        <th>5 Marla <br>125 Sq Yd</th>
                        <th>10 Marla <br>250 Sq Yd</th>
                        <th>1 Kanal <br>500 Sq Yd</th>
                        <th>2 Kanal <br>1000 Sq Yd</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" align="center" style="font-weight: bold">Total Price (Rs.)</td>
                        <td style="font-weight: bold">2,100,000</td>
                        <td style="font-weight: bold">3,600,000</td>
                        <td style="font-weight: bold">5,400,000</td>
                        <td style="font-weight: bold">10,600,000</td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Booking @ 10%</td>
                        <td>210,000</td>
                        <td>360,000</td>
                        <td>540,500</td>
                        <td>1,060,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Confirmation (After 90 days)</td>
                        <td>210,000</td>
                        <td>360,000</td>
                        <td>540,500</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1st Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2nd Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>3rd Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>5th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>6th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>7th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>8th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>9th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>10th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>11th Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>710,000</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Final Quarter</td>
                        <td>140,000</td>
                        <td>240,000</td>
                        <td>360,000</td>
                        <td>670,000</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" align="center">Total (Rs.)</td>
                        <td>2,100,000</td>
                        <td>3,600,000</td>
                        <td>5,400,000</td>
                        <td>10,600,000</td>
                    </tr>
                    </tfoot>
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
                                        Facing Park/Corner/Main Road (between 41' and 99') each contain 10% extra of total price.
                                    </p>
                                    <br>
                                    <p class="text-gray-05">
                                        In addition to above Main Boulevard (100' and above) contain 15% extra of Total Price.
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
                                    <p class="text-gray-05">36 months schedule of payment (Quarterly)</p>
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
                                    <p class="text-gray-05">10% Rebate on Lump Sum Payment | 5% Rebate on 50% Down Payment</p>
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
                                    <p class="text-gray-05">Rs. 10,000 </p>
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