@extends('frontend.layout.master')
@section('content')

<!-- Main content Start -->
<div class="main-content">
	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs sec-spacer sec-color">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumbs-inner">
						<h1 class="page-title">About Us</h1>
						<ul>
							<li>
								<a class="active" href="{!! url('/') !!}">Home</a>
							</li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumbs End -->

    <!-- Accordion Start -->
    <section class="rs-about-3 sec-spacer">
        <div class="container">
            <div class="row">
               
                <div class="backgroundText col-md-7">
                    <div class="sec-title">
                        <h3 style="color: #83b614">{{$abouts->topics ?? null}}</h3>
                    </div>
                    <p class="about-desc text-justify">{{$abouts->description ?? null}}</p>

                    
                </div>
               
                <div class="col-md-5 mpt-20">
                    <!-- panel start -->
                    <div class="panel-group mb-0" id="accordion">
                @forelse($missions as $key=>$mission)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen{{$key}}">{{$mission->title ?? null }}</a>
                                </h4>
                            </div>
                            <div id="collapseTen{{$key}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="text-justify"><strong><i>{{$mission->description ?? null }}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                @empty
                @endforelse              
                    </div>
                    <!-- panel end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Accordion Us End -->

    <!-- Counter Up Section Start Here-->
    <div class="counter-top-area sec-spacer">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="rs-count">
                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i class="fa fa-hand-peace-o"></i>
                            <h3 class="rs-counter">25000</h3>                      
                            <h4>Client Retentions</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->
					
                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i class="fa fa-group"></i>
                            <h3 class="rs-counter">33028</h3>                      
                            <h4>Satisfied Clients</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->
					
                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i class="fa fa-gears"></i>
                            <h3 class="rs-counter">25</h3>                     
                            <h4>Years of Service</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->
					
                    <!-- COUNTER-LIST START -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms">
                        <div class="rs-counter-list">
                            <i class="fa fa-database"></i>
                            <h3 class="rs-counter">339</h3>                       
                            <h4 class="last">Professionals</h4>
                        </div>
                    </div>
                    <!-- COUNTER-LIST END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Down Section End Here-->

     <!-- Expertise Area satar -->
    <div class="why-choose-us sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mpb-40">
                    <div class="services-middle-img">
                        <img src="images/service/6.jpg" alt="Service Image" />
                    </div>
                </div>
                <div class="col-md-6 services-responsibiity">
                    <div class="sec-title">
                        <h3 style="color:#83b614">Why Rely on Us</h3>
                    </div>
                    <div class="services-item">                               
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i class="fa fa-certificate"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="service-details.html">Focus</a></h4>
                            <ul class="relu-ul">
                                <li>We are the new arena of software world;</li>
                                <li>Customer satisfaction is our priority;</li>
                                <li>We maintain our professionalism through honesty, integrity, and politeness;</li>
                                <li>We keep a long-term relationship with our clients;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-item">                               
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i class="fa fa-file-text-o"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="service-details.html">Ability</a></h4>
                            <ul class="relu-ul">
                                <li>We have a skilled, well-groomed and sincere team;</li>
                                <li>According to the needs of the customer, we build customized software;</li>
                                <li>We ensure sustainable software service;</li>
                                <li>We listen & understand the customer and do accordingly;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-item">                               
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i class="fa fa-handshake-o"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="service-details.html">Service</a></h4>
                            <ul class="relu-ul">
                                <li>We sell not only software but also ensure pre and post software adaptation service;</li>
                                <li>Every minor problem of the client is important to us;</li>
                                <li>A 24/7 service facility is available.</li>
                                <li>We are originating results-oriented internet business solutions and technologies.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise Area end -->

    <!-- About Us Start -->
    <section id="rs-about" class="rs-about pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-7 pr-md-65">
                    <div class="sec-title">
                        <h3 style="color:#83b614">Our Chairman Says</h3>      
                    </div>
                    <p class="about-desc mt-5 text-justify">Our goal is to help you achieve your desired business outcomes through our product and service, and provide a remarkable experience along the way. We have a dedicated team and diversified software always beside you to boost your business growth and reach the ultimate destination. We never compromise with our quality and business ethics. From the commencement to now, we are working hard to contribute in the development of Bangladesh.</p>

                    <p class="about-desc margin-remove text-justify"> We hope we will be a part of digital Bangladesh and Bangladesh will be a role model of information, communication, and technology in the globe.</p>
                </div>
                <div class="col-md-5 mpt-40">
                    <div class="video-section-area">
                        <img src="images/video/video.jpg" alt="">
                        <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik" title="Video Icon">
                            <img class="video-icon" src="images/video/video-icon.png" alt="">
                        </a>
                        <div class="overly-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

</div>
<!-- Main content End --> 
@endsection