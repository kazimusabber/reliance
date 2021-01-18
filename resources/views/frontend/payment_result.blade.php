@extends('frontend.layout.master')
@section('title', 'Payment Result'))
@section('description', strip_tags($logo->description ?? ''))
@section('content')
@section('style')
 <style type="text/css">
   
   .p_div{
     text-align: -webkit-right;
    right: 20px;
   }
   .s_div{
        margin-top: 10%;
    text-align: center;

   }
 </style>
@endsection
<div class="main-content">
  <div class="container">
            @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!!  \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
      <div class="row">
        <div class="card-header" style="margin-top: 10px;margin-bottom: 10px;">
              <div class="row">
                @if(Auth::check())
                  @if(Auth::user()->user_type=='student')
                    @include('short_menu')
                  @endif
                @endif
              </div>
            </div>
        <div class="col-md-1"></div>
        <div class="col-md-10 student_info_section">
            <div class="card-body card-block">
                 @php

                

                 @endphp
                
            </div>
        </div>
        <div class="col-md-1"></div>
      </div>
  </div>
</div> 

@endsection
@section('script')

@endsection