@extends('layouts.master')

@section('title')
    Contact
@endsection


@section('mainContent')
<style type="text/css">
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #2C2D89;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #2C2D89;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #2C2D89;
}

.contactForm form input {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e5e5e5;
    color: #979797;
    float: left;
    font-size: 16px;
    font-style: italic;
    line-height: 0.8;
    padding: 9px 0 13px 20px;
    width: 410px;
    border-radius: 50px;
}
.contactForm form button {
    /* background: transparent none repeat scroll 0 0; */
    border: #fff;
    color: #fff;
    display: inline-block;
    font-size: 20px;
    margin-top: 30px;
    padding: 14px 50px;
    text-align: center;
    text-transform: uppercase;
    -webkit-transition: all 700ms ease-in-out;
    -moz-transition: all 700ms ease-in-out;
    -ms-transition: all 700ms ease-in-out;
    -o-transition: all 700ms ease-in-out;
    transition: all 700ms ease-in-out;
    font-weight: 800;
    margin-bottom: 40px;
    background: green;
}
</style>
    <section class="breadCrumArea">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">contact <span>us</span></h1>
                </div>
            </div>
        </div> -->
    </section>
@php
$owner_information=\App\Profile::first();
@endphp
   <section class="sliderArea">
        <div class="nbr_approved" style="top:10px;">
        @if($owner_information->image!=null)
        <img src="{!! asset('/images') !!}/{!! $owner_information->image !!}" class="" style="height: 300px;">
        <p class="text-center" style="color:#fff;">{!! $owner_information->owner_name ?? null !!}</p>
        <p class="text-center" style="color:#fff;">{!! $owner_information->owner_name ?? null !!}</p>
        @endif
        </div> 
       <img src="{!! asset('/images') !!}/{!! $owner_information->baner_img ?? null !!}" class="banner_image" style="height: 441px;"> 
   
    <section class="contactArea commonSection">
        <div class="container" style="background: #353f49">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="contactForm">
                        <h2 class="text-center" style="color: #fff;
    padding: 10px;
    font-size: 40px">Contact Us</h2>

                        @if ($message = Session::get('message'))
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!!  $message  !!}</strong>
                        </div>
                        @endif
                        <form method="post" action="{!! url('contact') !!}">
                            {!! csrf_field() !!}
                            <div class="row">
                            <input class="required" type="text" placeholder="Full name" name="con_name">
                            <input class="required" type="email" placeholder="Email address" id="contact_email" name="email_address">
                            </div>
                            <div class="clearfix"></div>

                            <div class="row" style="margin-top: 12px;">
                            <input class="" type="text" placeholder="Company Name" name="company_name">
                            <input class="required" type="number" placeholder="Phone Number" name="phone_no">
                            </div>
                            <div class="clearfix"></div>
                            <div class="row" style="margin-top: 12px;">
                            <input class="required"  type="text" placeholder="Designation" name="designation" style="margin-right: 0px">
                            <input class="required" type="text" placeholder="Country"  name="country">
                            </div>
                            <div class="clearfix"></div>
                            <div class="row" style="width: auto;">
                            <textarea class="required" placeholder="Message" name="message"></textarea>
                            </div>
                            {!! -- <button class="btn btn-success" type="submit" id="unConSubmit">send</button> -- !!}
                            <button class="btn btn-success" type="submit" id="">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
