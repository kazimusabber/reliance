@extends('layouts.master')

@section('title')
    Home
@endsection

@section('mainContent')

<section class="breadCrumArea">
       
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

    <!--  include('inc.slider') -->

    <!-- Testimonial Section -->
    <section class="testiArea commonSection">
        <div class="container">
          
              @foreach($missions as $mission)
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center">
                    <div class="singleTest wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                       
                            <h2>{!! $mission->title !!}</h2>
                       
                    </div>
                    <div class="quote wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        
                            <p class="quotation">
                                {!! $mission->description !!}
                            </p>
                       
                    </div>
                </div>
            </div>
            <br>
             @endforeach
        </div>
    </section>

    <!-- Feature Section -->
    <section class="featureArea commonSection">
        <div class="container">
            <div class="row">
                @foreach($features as $feature)
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                         data-wow-delay="300ms">
                        <div class="featureImg">
                            <img src="{!! asset('/images/'.$feature->feature_img) !!}" alt="">
                        </div>
                        <div class="featureContent">
                            <h3><a>{!! $feature->title !!}</a></h3>
                            <p style="color: black; font-weight: 600;">{!! $feature->description !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

  



    <section class="team-skills section-sm" id="skills">
      <h2 style="text-align: center; color: #2C2D89; font-size: 36px;">Our Valuable Clients</h2>
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="padding-right: 0px;">
                  <div id="clients-slider" class="clients-logo-slider">
                      @foreach($client_logos as $client_logo)
                          <img style="width: 196px; height: 80px; padding: 8px 8px 8px 8px; border: 2px solid; margin-bottom: 4px; border-radius: 12px;"
                               src="{!! asset('images/'.$client_logo->client_logo_img) !!}" alt="">
                          @endforeach
  
                  </div>
              </div>
          </div>
      </div>
  </section>

   

@endsection
