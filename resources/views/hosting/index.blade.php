@extends('layouts.master')

@section('title')
    Hosting
@endsection

@section('mainContent')
    <!-- Breadcrumb Section -->
    <section class="breadCrumArea">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Hosting <span>Service</span></h1>
                </div>
            </div>
        </div> -->
    </section>
        <section class="sliderArea" data-currentslide="activRev_1">
        <!-- <div class="nbr_approved">

        <h2>NBR Approved VAT Management Software</h2>
        <hr style="border:2px solid #fff">
        <h1>VAT<span style="color: darkred;">Smart</span>  </h1>
        <h2 class="text-center" style="color: #fff;">VAT Software</h2>
        <h3>by Allied Information Technology Limited</h3>
        </div> -->
        @include('inc.slider')
       <!-- <img src="{!! asset('/images/ss-main-banner.jpg') !!}" class="banner_image"> -->
    </section>


    <div id="darkness"></div>
    <div id="main" class="main">
        <div class="main-content-inner">
            <style>
                .vat-report-left p:before {
                    content: '\f061';
                    font-family: 'FontAwesome';
                    margin-right: 10px;
                    font-size: 13px;
                }

                .vat-report-right p:before {
                    content: '\f061';
                    font-family: 'FontAwesome';
                    margin-right: 10px;
                    font-size: 11px;
                }

                #i1552561577_1 {
                    padding-top: 30px;
                    padding-bottom: 20px;
                }

                #i1552561672_1 {
                    padding-top: 20px;
                    padding-bottom: 20px;
                    text-align: center;
                }

                #i1552561651_3 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }

                .custom-industry p::before {
                    content: '\f111';
                    font-family: 'FontAwesome';
                    margin-right: 10px;
                    font-size: 12px;
                }

                #i1552562750_3 {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                .custom-industry p::before {
                    content: '\f111';
                    font-family: 'FontAwesome';
                    margin-right: 10px;
                    font-size: 12px;
                }

                #i1552562016_17 {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                .custom-industry p::before {
                    content: '\f111';
                    font-family: 'FontAwesome';
                    margin-right: 10px;
                    font-size: 12px;
                }

                #i1536054448_1 {
                    padding-top: 25px;
                    padding-bottom: 25px;
                    background-color: rgba(233, 233, 233, 1);
                    text-align: center;
                }
            </style>

            <section id="i1536054448_1">
                <div class="container">
                    <H3 id="i1536054459_9" class="" style="font-size: 32px; color: #06068a;">
                        Packages
                    </H3>
                </div>
            </section>

            <section>
                <div class="container">
                    <div id="i1552402589_4" class="hyper-pricing mt-5">
                        <div class="row justify-content-md-center no-gutters">
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Domain Registration</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">
                                            <li><i class="fa fa-star"></i> Price depends on parent domain</li>

                                            <li><i class="fa fa-star"></i> Account Control Panel</li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>STANDARD</p>
                                        <h4></h4>
                                    </div>

                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> 1 GB Disk Space</li>

                                            <li><i class="fa fa-star"></i> 3 Databases List</li>

                                            <li><i class="fa fa-star"></i> 3 Sub-Domain</li>

                                            <li><i class="fa fa-star"></i> Account Control Panel</li>

                                        </ul>
                                    </div>
                                    <!--<br>-->
                                    <!--<br>-->

                                    <!--<div class="pricing-feature-wrap">-->
                                    <!--    <H6>Price</H6>-->
                                    <!--    <ul class="pricing-feature-list">-->

                                    <!--        <li><i class="fa fa-star"></i> 1800 Tk per Year</li>-->

                                    <!--    </ul>-->
                                    <!--</div>-->

                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>PREMIUM</p>
                                        <h4></h4>
                                    </div>

                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> 500 GB Disk Space</li>

                                            <li><i class="fa fa-star"></i> 100 Databases List</li>

                                            <li><i class="fa fa-star"></i> 3 Free Domains Registration</li>

                                            <li><i class="fa fa-star"></i> 1 Hosting Space</li>

                                            <li><i class="fa fa-star"></i> Free Ad Coupons</li>

                                            <li><i class="fa fa-star"></i> Account Control Panel</li>

                                        </ul>
                                    </div>

                                    <!--<div class="pricing-feature-wrap">-->
                                    <!--    <H6>Price</H6>-->
                                    <!--    <ul class="pricing-feature-list">-->

                                    <!--        <li><i class="fa fa-star"></i> $19 per Month</li>                                            -->

                                    <!--    </ul>-->
                                    <!--</div>-->

                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>ULTIMATE</p>
                                        <h4></h4>
                                    </div>

                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Unlimited Disk Space</li>

                                            <li><i class="fa fa-star"></i> 200 Databases List</li>

                                            <li><i class="fa fa-star"></i> 10 Free Domains Registration</li>

                                            <li><i class="fa fa-star"></i> 2 Hosting Space</li>

                                            <li><i class="fa fa-star"></i> Free Ad Coupons</li>

                                            <li><i class="fa fa-star"></i> Account Control Panel</li>

                                        </ul>
                                    </div>

                                    <!--<div class="pricing-feature-wrap">-->
                                    <!--    <H6>Price</H6>-->
                                    <!--    <ul class="pricing-feature-list">-->

                                    <!--        <li><i class="fa fa-star"></i> $79 Yearly</li>                                            -->

                                    <!--    </ul>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
