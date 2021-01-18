@extends('layouts.master')

@section('title')
    Hosting
@endsection

@section('mainContent')
    <!-- Breadcrumb Section -->
    <section class="breadCrumArea">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Hosting <span>Service</span></h1>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Portfolio Section -->
    <section class="portfolioArea commonSection folioPage">
        <div class="container-fluid">
            <div class="row">
                <div id="mixer" class="folioPage">
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix wdesign mdia">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/1.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio12h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix print brand">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/2.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio15h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix photo">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/3.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio14h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix marketing">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/4.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio4h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix mdia photo">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/5.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio8h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix brand marketing">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/6.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio16h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix wdesign">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/7.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio2h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix print">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/8.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio13h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix wdesign mdia">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/9.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio10h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix print brand">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/10.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio9h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix photo">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/11.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio6h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix marketing">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/12.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio1h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix mdia photo">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/13.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio11h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix brand marketing">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/14.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio5h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix wdesign">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/15.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio7h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center mix print">
                        <div class="folioImg">
                            <img src="{!! asset('frontEnd/images/folio1/16.jpg') !!}" alt="">
                            <div class="folioHover2 dirHov">
                                <a href="{!! asset('frontEnd/images/home1/folio3h.jpg') !!}" class="prePhoto" data-rel="prettyPhoto"><i class="icon-search3"></i></a>
                                <a href="folioSingle.html" class="detailsLink"><i class="icon-location"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
