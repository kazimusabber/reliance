@extends('frontend.layout.master')
@php
  
  $title_url = url('program')."/". $info->id;
  $url = $title_url;
  $image = url('/'.'images/'.$info->image ?? '');

  $site_name = $info->name ?? "DHUB";
@endphp
@section('title', strip_tags($info->name ?? ''))
@section('description', strip_tags($info->short_description ?? ''))
@section('keywords', strip_tags($info->name ?? ''))
@section('url', $url)
@section('image', $image)
@section('site_name', $site_name)
@section('content')
@section('style')

@endsection
<div class="main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
          @if($info->image ==null)
             <img src="{{$dumy_image}}" alt="Image" style="height: 70vh;width: 100%;margin-bottom: 10px;">
            @else
             <img src="{{url('/')}}/images/{{$info->image ?? $dumy_image}}" style="height: 70vh;width: 100%;margin-bottom: 10px;" >
            @endif
            <h3>{!! $info->name ?? ''!!}</h3>

        </div>
        <div class="col-md-12" style="background: #f0f3f6">
          <div class="col-md-4" style="padding:10px; ">
             <div style="border-right: 2px solid #bec5cb;">
                <h6 class="text-center" style="font-size: 12px;">Current Status</h6>
                <h6 class="text-center" >
                  <span style="background: #ffd200;padding: 7px;font-size: 14px;border-radius: 20px;">NOT ENROLLED</span>
                </h6>
              </div>
          </div>
          <div class="col-md-4" style="padding:10px; ">
            <div style="border-right: 2px solid #bec5cb;">
              <h6 class="text-center" style="font-size: 12px;">Price</h6>
                <h6 class="text-center" >
                  <span style="">BDT {!! $info->price ?? '' !!}</span>
                </h6>
                </div>
              </div>
          <div class="col-md-4" style="padding:10px; ">
            <div >
              <h6 class="text-center" style="font-size: 12px;">Get Started</h6>
                <h6 class="text-center" >
                  <a style="width: 50%;background: linear-gradient(to bottom right, #33ccff 0%, #009900 100%);" class="btn btn-primary" href="{{url('/student-registration')}}">Take this Course</a>
                </h6>
                </div>
              </div>
          
        </div>
        <div class="col-md-12" style="margin-top: 10px;">
            <h5>COURSE DESCRIPTION:</h5>
            <div>
              {!! $info->short_description ?? '' !!}
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 10px;margin-bottom: 20px;">
            <h5>COURSE DESCRIPTION:</h5>
            <div>
              {!! $info->details ?? '' !!}
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 10px;margin-bottom: 20px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <div class="row">
                                <div class="col-md-6">
                                  <a style="width: 100%" class="btn btn-info" href="{{url('/program')}}">Back</a>
                                  <br>
                                </div>

                                <div class="col-md-6">
                                    <a style="width: 50%;background: linear-gradient(to bottom right, #33ccff 0%, #009900 100%);width: 100%" class="btn btn-primary enroll_mobile_button" href="{{url('/student-registration')}}">
                                    Enroll</a>
                                </div>
                            </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="col-md-12" style="margin-top: 10px;margin-bottom: 20px;">
           <div class="share_button_section">
                <div class="sharethis-inline-share-buttons" data-url="{{url('course')}}/{{$info->id}}" data-title="{!! $info->name ?? '' !!}" data-image="/images/{{$info->image ?? ''}}" data-description="{!! $info->details ?? '' !!}">
                </div>     
            </div>
        </div>
        
  </div>
</div> 

@endsection
@section('script')
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f30def0c354e70013104c79&product=inline-share-buttons" async="async"></script>
@endsection