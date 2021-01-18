@extends('layouts.master')

@section('title')
    About
@endsection
@section('mainContent')
<style>
p.about_us::first-letter {
  font-size: 200%;
  color: #8A2BE2;
}
.about_us {
    font-size: 22px;
    line-height: 1.5em;
    text-align: justify;
    font-family: unset;
}
</style>
    <!--================= Box Div Start ==================-->
    <div class="boxWrapper">
        <!--================= Box Div Start ==================-->
        <!-- Breadcrumb Section -->
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
    </section>
   


        <section id="i1534249279_1">
            <div class="container">
                <div class="row " id="i1534249355_6" style="padding: 56px 0 80px 0px;">
                    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 " id="i1534249355_7">

                        <div id="i1534249388_10">

                            <p class='about_us'style="font-size: 18px; font-weight: 600; color: black; line-height: 1.7em;">{!! $abouts->description !!}</p>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Skill Section -->
        {!! --        <section class="skillArea commonSection">-- !!}
        {!! --            <div class="overlay"></div>-- !!}
        {!! --            <div class="container">-- !!}
        {!! --                <div class="row">-- !!}
        {!! --                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">-- !!}
        {!! --                        <h2 class="commonTittle white">Our<span>skills</span></h2>-- !!}
        {!! --                        <p class="subTittle">Lorem ipsum dolor amet consetetur sadipscing elitr</p>-- !!}
        {!! --                    </div>-- !!}
        {!! --                </div>-- !!}
        {!! --                <div class="row">-- !!}
        {!! --                    @foreach($skills as $skill)-- !!}
        {!! --                        <div class="col-lg-4 col-sm-12 col-xs-12 text-center">-- !!}
        {!! --                            <div class="singleSkill wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-- !!}
        {!! --                                <div class="skillOne cmskill" data-skills="{!! $skill->work_percent/100 !!}"-- !!}
        {!! --                                     data-gradientstart="#DF3F31" data-gradientend="#FBC877"><strong></strong></div>-- !!}
        {!! --                                <p>{!! $skill->tech_title !!}</p>-- !!}
        {!! --                            </div>-- !!}
        {!! --                        </div>-- !!}
        {!! --                    @endforeach-- !!}
        {!! --                </div>-- !!}
        {!! --            </div>-- !!}
        {!! --        </section>-- !!}
    </div>
    <!--================= Box Div End ==================-->
@endsection
