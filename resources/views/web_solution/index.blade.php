@extends('layouts.master')

@section('title')
    products
@endsection

@section('mainContent')
    <!-- Breadcrumb Section -->
    <section class="breadCrumArea">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Products
                    </h1>
                </div>
            </div>
        </div> -->
    </section>
        <section class="sliderArea" data-currentslide="activRev_1">
       <!--  <div class="nbr_approved">

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
                    <H3 id="i1536054459_9" class="" style="font-size: 32px !important; color: #06068a;">
                        Our Products
                    </H3>
                </div>
            </section>

            <section>
                <div class="container">
                    <div id="i1552402589_4" class="hyper-pricing mt-5">
                        <!-- <div class="row justify-content-md-center no-gutters">
                            @forelse($projects as $project)
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>{!! $project->project_name ?? null  !!}</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">
                                            @if(count($project->Feature)> 0)
                                            @foreach($project->Feature as $feature)
                                            <li><i class="fa fa-star"></i> {!! $feature->feature ?? null  !!}</li>
                                            @endforeach
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
 -->
                        <div class="row justify-content-md-center no-gutters">
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>ERP System</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Complete Web and Cloud based</li>

                                            <li><i class="fa fa-star"></i> Unlimited Data Storage</li>

                                            <li><i class="fa fa-star"></i> Inventory Management</li>

                                            <li><i class="fa fa-star"></i> Supply Chain Management</li>

                                            <li><i class="fa fa-star"></i> Claim & Claim Adjustment(Debit Note)</li>
                                            
                                            <li><i class="fa fa-star"></i> Reporting</li>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>POS System</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Billing and order processing</li>

                                            <li><i class="fa fa-star"></i> Sales monitoring and reporting</li>

                                            <li><i class="fa fa-star"></i> Inventory and stock management</li>

                                            <li><i class="fa fa-star"></i> Low-Stock Notifications</li>

                                            <li><i class="fa fa-star"></i> Stock Transfers Between Stores</li>

                                            <li><i class="fa fa-star"></i> Customer Database and Order History</li>

                                            <li><i class="fa fa-star"></i> Returns, Store Credit, and Refunds</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>School Management System</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Student Information</li>

                                            <li><i class="fa fa-star"></i> Parent Access</li>

                                            <li><i class="fa fa-star"></i> Teacher Information</li>

                                            <li><i class="fa fa-star"></i> Attendance & Timetable Management</li>

                                            <li><i class="fa fa-star"></i> Online Assessments and Assignments</li>

                                            <li><i class="fa fa-star"></i> Report Cards</li>

                                            <li><i class="fa fa-star"></i> Parent-teacher collaboration</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row justify-content-md-center no-gutters">
                             <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Hotel Management</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Reservations and Front Desk Support</li>

                                            <li><i class="fa fa-star"></i> Accounts, invoices and reports</li>

                                            <li><i class="fa fa-star"></i> Housekeeping</li>

                                            <li><i class="fa fa-star"></i> Restaurant Management</li>

                                            <li><i class="fa fa-star"></i> Revenue Management</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Supply Chain Management</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Purchasing</li>

                                            <li><i class="fa fa-star"></i> Operations</li>

                                            <li><i class="fa fa-star"></i> Resource Management</li>

                                            <li><i class="fa fa-star"></i> Information Workflow</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Ecommerce</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Content management capabilities</li>

                                            <li><i class="fa fa-star"></i> Promotion and discount code tools</li>

                                            <li><i class="fa fa-star"></i> An easy-to-use checkout</li>

                                            <li><i class="fa fa-star"></i> Reporting tools</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                         <div class="row justify-content-md-center no-gutters">
                            <!--<div class="col-sm-6 col-md-3 mb-4">-->
                            <!--    <div class="single-pricing-package ">-->

                            <!--        <div class="package-type">-->
                            <!--            <p>Library Management</p>-->
                            <!--            <h4></h4>-->
                            <!--        </div>-->
                            <!--        <div class="pricing-feature-wrap">-->
                            <!--            <H6>Features</H6>-->
                            <!--            <ul class="pricing-feature-list">-->

                            <!--                <li><i class="fa fa-star"></i> Keep record of different categories</li>-->

                            <!--                <li><i class="fa fa-star"></i> Online access for registered user</li>-->

                            <!--                <li><i class="fa fa-star"></i> Event calendar</li>-->

                            <!--                <li><i class="fa fa-star"></i> Item Tracking</li>-->

                            <!--                <li><i class="fa fa-star"></i> Generate customized report</li>-->

                            <!--            </ul>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <!--<div class="col-sm-6 col-md-3 mb-4">-->
                            <!--    <div class="single-pricing-package ">-->

                            <!--        <div class="package-type">-->
                            <!--            <p>Ecommerce</p>-->
                            <!--            <h4></h4>-->
                            <!--        </div>-->
                            <!--        <div class="pricing-feature-wrap">-->
                            <!--            <H6>Features</H6>-->
                            <!--            <ul class="pricing-feature-list">-->

                            <!--                <li><i class="fa fa-star"></i> Content management capabilities</li>-->

                            <!--                <li><i class="fa fa-star"></i> Promotion and discount code tools</li>-->

                            <!--                <li><i class="fa fa-star"></i> An easy-to-use checkout</li>-->

                            <!--                <li><i class="fa fa-star"></i> Reporting tools</li>-->

                            <!--            </ul>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>


                       <!--  <div class="row justify-content-md-center no-gutters">
                            @forelse($projects as $project)
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>{!! $project->project_name ?? null  !!}</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">
                                            @if(count($project->Feature)> 0)
                                            @foreach($project->Feature as $feature)
                                            <li><i class="fa fa-star"></i> {!! $feature->feature ?? null  !!}</li>
                                            @endforeach
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div> -->
                    </div>

                </div>
            </section>
        </div>
    </div>



    <!-- Portfolio Section -->
   <!--  <section class="portfolioArea commonSection folioPage">
        <div class="container">
            <div class="row">
                <div id="mixer" class="folioPage">
                    @foreach($projects as $project)
                        <div class="col-lg-6 col-sm-6 col-xs-12 text-center mix wdesign mdia">
                            <div class="folioImg">
                                <img src="{!! asset('images/'.$project->project_img) !!}" alt="">
                                                        <div class="folioHover2 dirHov">
                                                              <a href="{!! $project->description !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                                          <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                                                          </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> -->
@endsection
