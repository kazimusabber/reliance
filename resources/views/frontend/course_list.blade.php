@extends('frontend.layout.master')
@section('title', strip_tags($logo->title ?? ''))
@section('description', strip_tags($logo->description ?? ''))
@section('content')
@section('style')

<style>
.program_title{
  font-size: 20px;font-weight: 900;
}
.center_search_form{
  width: 250px;margin: 0px auto;
}
</style>
@endsection
<div class="main-content">
  <div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs-inner">
            <h1 class="page-title">Find Your Program</h1>
            <ul>
              <li>
                <a class="active" href="{!!  url('/') !!}">Home</a>
              </li>
              <li>Find Your Program</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row text-center" style="margin-top: 20px;">
      <form action="" method="post" class="center_search_form"  >
                  @csrf
               
                <label style="font-size: 20px;text-align: center;">Center Name</label>
                <select class="form-control" name="center_id" onchange="this.form.submit()">
                  <option @if($center_id == "all") selected @endif value="all">All</option>
                  @forelse($centers as $center)
                     <option @if($center_id ==$center->id ?? '') selected @endif value="{{$center->id ?? ''}}">{{$center->name ?? ''}}</option>
                  @empty
                 
                  @endforelse
                </select>
                 </form>
    </div>
    <div class="row" style="margin-top: 20px;">
      @php
      $dumy_image = url('/')."/images/dumy_image.png";
       @endphp
      @forelse($infos as $key=>$info)
      
      <div class="col-md-4">
        <div class="card course_card" style="">
            <div class="card-header">
              <a href="{{url('program')}}/{{$info->id}}">
             @if($info->image ==null)
                       <img src="{{$dumy_image}}" class="course_card_image" style="width: 100%;" >
                      @else
                       <img src="{{url('/')}}/images/{{$info->image ?? $dumy_image}}" style="  height: 200px;" >
                      @endif
            </a>
            </div>
            <div class="card-body course_card_body" >
              <h5 class="card-title" style="margin-top: 10px;">
                <a class="program_title" href="{{url('program')}}/{{$info->id}}">{!! $info->name ?? ''!!}</a>
              </h5>
              <p class="card-text">
                <a href="{{url('program')}}/{{$info->id}}" style="color: #000000;">{!! substr(strip_tags($info->short_description ?? ''), 0, 300) !!}...</a>
              </p>
             
              
            </div>
            <div class="card-footer " style="background: #fff;" >
              <a  class="btn btn-primary enroll_button" href="{{url('/student-registration')}}">Enroll Now</a>
            </div>
          </div>
      </div>
      @empty
       <div style="height: 150px;margin-top: 100px;">
         <h3 class="text-center" style="margin-top:50px;">No Program Found</h3>
       </div>
      
      @endforelse

    </div> 
   <div class="row text-center">
     {{ $infos->links() }}
   </div>
  </div>
</div> 
@endsection
@section('script')

@endsection