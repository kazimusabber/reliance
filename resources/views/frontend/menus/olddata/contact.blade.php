@extends('frontend.layout.master')
@section('content')
<!-- Main content Start -->
<div class="main-content">
	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs sec-spacer sec-color">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="breadcrumbs-inner">
						<h1 class="page-title">Contact</h1>
						<ul>
							<li>
								<a class="active" href="{!! url('/') !!}">Home</a>
							</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumbs End -->

    <!-- map -->
    <div id="g-map" class="g-map">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0420027510127!2d90.36145821543234!3d23.8171053921407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c125b7c4e935%3A0x54ceb3faae3ddd38!2sSection%207%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1567441193436!5m2!1sen!2sbd" width="100%" height="100%" frameborder="1" style="border:0; box-shadow: " allowfullscreen></iframe>
        
    </div>
    <!-- map end -->
    
    <!-- Contact Start -->
    <section id="rs-contact" class="rs-contact gray-color pb-100">
        <div class="container">
            <div class="row">
                <div class="contact-bg">
                     @php
                        $logos = \App\Logo::where('status', 1)->get();
                    @endphp
                    @forelse($logos as $logo)
                    <div class="margin col-md-5">
                        <div class="contact-address">
                            <div class="contact-address-title">
                                <h2>Address</h2>
                                <p class="text-justify">{{$logo->address ?? null}}</p>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="address-text">
                                    {{$logo->phone ?? null}} <br>
                                    {{$logo->mobile ?? null}}
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-envelope-open-o"></i>
                                </div>
                                <div class="address-text">
                                    {{$logo->email ?? null}} <br>
                                    {{$logo->website ?? null}}
                                </div>
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address-text">
                                    {{$logo->address ?? null}}
                                </div>
                            </div>
                            <div class="social-icon-bottom">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                    <div class="margin col-md-7">   
                        <div class="contact-form">
                            <div class="contact-form-title">
                                <p class="contact-title">Quick Contact</p>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="alert alert-success alert-dismissible" id="showSuccessMessage" role="alert" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>
                                        <span class="success_copy"></span>
                                    </strong>
                                </div>
                            </div>                                        
                            <form method="POST" action="{{url('contact')}}" id="contactId">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="fa fa-address-book-o"></i>
                                            <input type="text" placeholder="Name" id="name" name="con_name">
                                            <span class="text-danger"> {{ $errors->first('con_name') }}</span>
                                        </div>                              
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="fa fa-envelope-o"></i>
                                            <input type="email_address" placeholder="E-Mail" id="email_address" name="email_address">
                                            <span class="text-danger"> {{ $errors->first('email_address') }}</span>
                                        </div>                              
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="fa fa-phone"></i>
                                            <input type="text" placeholder="Phone Number" id="phone_no" name="phone_no">
                                            <span class="text-danger"> {{ $errors->first('phone_no') }}</span>
                                        </div>                             
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="fa fa-gear"></i>
                                             <input class="required"  type="text" placeholder="Designation" name="designation" style="margin-right: 0px">
                                            
                                        </div>                              
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-field">
                                            <i class="fa fa-gear"></i>
                                           <input class="required" type="text" placeholder="Country"  name="country">
                                        </div>                              
                                    </div>
                                </div>                        
                                <div class="form-field">
                                    <textarea placeholder="Your Message Here" rows="7" id="message" name="message"></textarea>
                                    <span class="text-danger"> {{ $errors->first('message') }}</span>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="readon" id="save">SUBMIT NOW</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>               
            </div>
        </div>
    </section>
    <!-- Contact End -->
</div>
@endsection
@section('script')
<script>
    /*$(document).on('click', '#save', function (e) {
        e.preventDefault();
        $('.form-field i').css('top','50%');
        var formData = $('#contactId').serialize();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: '{{ url('contact') }}',
          type: 'POST',
          data:  formData, 
        })
        .done(function(response) {
            if (response.errors) {
                $('#showSuccessMessage').css('display','none');
                jQuery.each(response.errors, function(key, value){
                    $("*[id="+key+"]").siblings('.text-danger').text(value);
                    $("*[id="+key+"]").siblings('.form-field i').css('top','35%');
                });
            }else{
                $('.text-danger').css('display','none');
                $('#showSuccessMessage').removeAttr('style');
                $('.success_copy').text(response);
                $('#contactId').trigger("reset");
            }      
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
    });*/
</script>
@endsection