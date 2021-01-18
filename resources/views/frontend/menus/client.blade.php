@extends('frontend.layout.master')
@section('style')
<style>
#more {display: none;}
#more2 {display: none;}
#more3 {display: none;}
#more4 {display: none;}
.btnClass{
    color: purple;
}
.btnClass:hover{
    color: #5f1a5f;
}
</style>
@endsection
@section('content')
<!-- Main content Start -->
<div class="main-content">
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs sec-spacer sec-color">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="breadcrumbs-inner">
					<h1 class="page-title">Our Clients</h1>
					<ul>
						<li>
							<a class="active" href="{!!  url('/') !!}">Home</a>
						</li>
						<li>Our Clients</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumbs End -->

<!-- Leadership Section Start -->
<div class="leadership-section pt-100 pb-70">
	<div class="container">
		<div class="sec-title text-center">
            <h3 style="color:#83b614">Our Clients</h3>                    
        </div>
	</div>
	<div class="container">
		 <div class="row grid-style-13">
	    	<div class="col-md-6">
	    		<div class="single-team-member">
	    			<div class="image-section">
	    				<img src="images/team/1.jpg" alt="">
	    				<div class="overlay-section">
			    			{!! -- <div class="detail-link">
          						<a href="team-details.html"><i class="fa fa-link"></i></a>
          					</div> -- !!}
		    			</div>
	    			</div>
	    			<div class="box-section">
	    				<div class="box-text">
	    					<div class="box-title">
		    					<h4><a href="#">Stuard Bloom</a></h4>
		    					<h5>Executive Vice President</h5>
		    				</div>				    				
            				<div class="social-icons"> 
            					<a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            					<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
            				</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="single-team-member">
	    			<div class="image-section">
	    				<img src="images/team/2.jpg" alt="">
	    				<div class="overlay-section">	
			    			{!! -- <div class="detail-link">
          						<a href="team-details.html"><i class="fa fa-link"></i></a>
          					</div> -- !!}
		    			</div>
	    			</div>
	    			<div class="box-section">
	    				<div class="box-text">
	    					<div class="box-title">
		    					<h4><a href="#">Peter Thugs</a></h4>
		    					<h5>Chief Financial Officer</h5>
		    				</div>				    				
            				<div class="social-icons"> 
            					<a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            					<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
            				</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="single-team-member">
	    			<div class="image-section">
	    				<img src="images/team/3.jpg" alt="">
	    				<div class="overlay-section">	
			    			{!! -- <div class="detail-link">
          						<a href="team-details.html"><i class="fa fa-link"></i></a>
          					</div> -- !!}
		    			</div>
	    			</div>
	    			<div class="box-section">
	    				<div class="box-text">
	    					<div class="box-title">
		    					<h4><a href="#">Stefen Glory</a></h4>
		    					<h5>Chief Information Officer</h5>
		    				</div>				    				
            				<div class="social-icons"> 
            					<a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            					<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
            				</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="single-team-member">
	    			<div class="image-section">
	    				<img src="images/team/4.jpg" alt="">
	    				<div class="overlay-section">	
			    			{!! -- <div class="detail-link">
          						<a href="team-details.html"><i class="fa fa-link"></i></a>
          					</div> -- !!}
		    			</div>
	    			</div>
	    			<div class="box-section">
	    				<div class="box-text">
	    					<div class="box-title">
		    					<h4><a href="#">William Johnson</a></h4>
		    					<h5>Chairman & CEO</h5>
		    				</div>				    				
            				<div class="social-icons"> 
            					<a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
            					<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            					<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
            				</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	   <!-- customer Start -->
    <section id="rs-customer" class="rs-defult-customer rs-customer3 sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3 style="color:#83b614">Our happy clients say about us:</h3>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <!-- Style 1 Start -->
                <div class="customer-item">
                    <div class="item-img">
                        <img src="images/testimonial2/1.jpg" alt="">
                    </div>
                    <div class="item-details">
                        <p>World Soft BD is a great software firm with an excellent team. They have met or exceeded my expectations<span class="dots-class">...</span><span class="more-content" style="display:none"> on School Management Software.They have not only provided awesome software but also provided quick and quality support and service wherever and whenever we needed. Through this software, we have released our huge workload. We are really thankful to the World Soft BD team for their great feedback.</span><strong><a href="javascript:void(0)" class="btnClass">Read More</a></strong></p>
                    </div>
                    <div class="item-author">
                        <div class="item-name">
                            Mr. XXX
                        </div>
                        <div class="item-designation">Headmaster, Pallabi Model High School</div>
                    </div>
                </div>
                <!-- Style 1 End -->

                <!-- Style 2 Start -->
                <div class="customer-item">
                    <div class="item-img">
                        <img src="images/testimonial2/2.jpg" alt="">
                    </div>
                    <div class="item-details">
                        <p>In my history of working with World Soft BD, I can honestly say that they are not only a company but also<span class="dots-class">...</span><span class="more-content" style="display:none"> a great supporter to develop our market management system. They also helped us a lot to adopt this system through their quick and quality service. It is my great pleasure to recommend World Soft BD to you.</span><strong><a href="javascript:void(0)" class="btnClass">Read More</a></strong></p>
                    </div>
                    <div class="item-author">
                        <div class="item-name">
                            Miss.YYY
                        </div>
                        <div class="item-designation">President, Mukto Bangla Cooperative Society</div>
                    </div>
                </div>
                <!-- Style 2 End -->

                <!-- Style 3 Start -->
                <div class="customer-item">
                    <div class="item-img">
                        <img src="images/testimonial2/6.jpg" alt="">
                    </div>
                    <div class="item-details">
                        <p>It is my great pleasure to put a comment on World Soft BD. I have a strong attachment with this<span class="dots-class">...</span><span class="more-content" style="display:none"> team for many years. I have always found them as committed, honest and flexible through their services. I wish the great success of World Soft BD in the competitive software market by keeping their past records.</span><strong><a href="javascript:void(0)" class="btnClass">Read More</a></strong></p>
                    </div>
                    <div class="item-author">
                        <div class="item-name">
                            Md. Human Kabir 
                        </div>
                        <div class="item-designation">Deputy Secretary,Government of Bangladesh</div>
                    </div>
                </div>
                <!-- Style 3 End -->

                <!-- Style 4 Start -->
                <div class="customer-item">
                    <div class="item-img">
                        <img src="images/testimonial2/4.jpg" alt="">
                    </div>
                    <div class="item-details">
                        <p>World Soft BD is a brilliant software company, is highly creative, and has helped me in my business<span class="dots-class">...</span><span class="more-content" style="display:none"> tremendously. Their service has enabled me to increase the growth of my business. I really liked their professionalism and the way they delivered their service. The best thing I must quote and that is their exact understanding of my expectation. I would be delighted to recommend them to anyone who is looking for the type of help that they offer.</span><strong><a href="javascript:void(0)" class="btnClass">Read More</a></strong></p>
                    </div>
                    <div class="item-author">
                        <div class="item-name">
                            Mr. ZZZ
                        </div>
                        <div class="item-designation">CEO, Japan-Bangladesh Technical Institute</div>
                    </div>
                </div>
                <!-- Style 4 End -->
            </div>
        </div>
    </section>
    <!-- customar end -->
	</div>
</div>
<!-- Leadership Section End -->
@endsection
@section('script')
<script>
    $('.btnClass').click(function(event) {
        if ($(this).parents('.item-details').find('.more-content').attr('style')) {
            $(this).text('Read Less');
            $(this).parents('.item-details').find('.dots-class').css('display','none');
            $(this).parents('.item-details').find('.more-content').removeAttr('style');
        }else{
            $(this).text('Read More');
            $(this).parents('.item-details').find('.dots-class').removeAttr('style');
            $(this).parents('.item-details').find('.more-content').css('display','none');
        }
        
    });
</script>
@endsection