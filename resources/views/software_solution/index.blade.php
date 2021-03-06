@extends('layouts.master')

@section('title')
    Software Solutions
@endsection

@section('mainContent')
    <!-- Breadcrumb Section -->
    <section class="breadCrumArea">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Software <span>Solutions</span></h1>
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
      <!--  <img src="{!! asset('/images/ss-main-banner.jpg') !!}" class="banner_image"> -->
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
                        Our Services
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
                                        <p>Software Development</p>
                                        <h4></h4>
                                    </div>
                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">
                                            <li><i class="fa fa-star"></i> Requirements analysis and specification</li>

                                            <li><i class="fa fa-star"></i> Design and development</li>

                                            <li><i class="fa fa-star"></i> Testing</li>

                                            <li><i class="fa fa-star"></i> Deployment</li>

                                            <li><i class="fa fa-star"></i> Maintenance and support</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Mobile Apps</p>
                                        <h4></h4>
                                    </div>

                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">
                                            <li><i class="fa fa-star"></i> Simplicity for the end user</li>

                                            <li><i class="fa fa-star"></i> Both iOS and Android</li>

                                            <li><i class="fa fa-star"></i> High performance</li>

                                            <li><i class="fa fa-star"></i> Good Performance</li>

                                            <li><i class="fa fa-star"></i> Security</li>

                                            <li><i class="fa fa-star"></i> Offline work</li>

                                            <li><i class="fa fa-star"></i> Regular updates</li>

                                            <li><i class="fa fa-star"></i> Feedback and contact means</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Web Application</p>
                                        <h4></h4>
                                    </div>

                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Quality Web Content</li>

                                            <li><i class="fa fa-star"></i> Clear, User-friendly Navigation</li>

                                            <li><i class="fa fa-star"></i> Simple and Professional Design</li>

                                            <li><i class="fa fa-star"></i> Executing Time</li>

                                            <li><i class="fa fa-star"></i> Web Compatibility</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="single-pricing-package ">

                                    <div class="package-type">
                                        <p>Web Designing</p>
                                        <h4></h4>
                                    </div>

                                    <div class="pricing-feature-wrap">
                                        <H6>Features</H6>
                                        <ul class="pricing-feature-list">

                                            <li><i class="fa fa-star"></i> Quality Web Content</li>

                                            <li><i class="fa fa-star"></i> Clear, User-friendly Navigation</li>

                                            <li><i class="fa fa-star"></i> Simple and Professional</li>

                                            <li><i class="fa fa-star"></i> Webpage Speed</li>

                                            <li><i class="fa fa-star"></i> Web Compatibility</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Portfolio Section -->
    <!-- <section class="portfolioArea commonSection folioPage">
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
