@extends('frontend.layout.master')
@section('title', strip_tags($logo->title ?? ''))
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
      <div class="row" style="padding: 5px;margin-top: 20px;">
        <div class="card" >
            <div class="card-header" style="margin-top: 10px;margin-bottom: 10px;">
              <div class="row">
                @if(Auth::check())
                  @if(Auth::user()->user_type=='student')
                    @include('short_menu')
                  @endif
                @endif
              </div>
            </div>
            <div class="card-body student_info_section" style="min-height: 500px;background: ">
              <h3 class="text-center">Payment History</h3>
              <br>
              <div class="row">
                <!-- <div class="col-md-6">
                  
                                           <li ></li>
                                           <li class="{!!  Request::is('form-four') ? 'current-menu-item current_page_item' : ''  !!}"> <a class="student_admin" href="{{url('form-four')}}">Profile</a></li>

                                         <li class="{!!  Request::is('logout') ? 'current-menu-item current_page_item' : ''  !!}"> <a href="{!!  url('logout')!!}">Logout</a></li>
                                         
                </div> -->
                <div class="col-md-6">
                  
                </div>
              </div>

              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Center</th>
                    <th>Course Name</th>
                    <th>Payment Type</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                @forelse($payments as $key=>$value)   
                  <tr class="success">
                    <td>{!! $value->student->first_name ?? '' !!}  {!! $value->student->last_name ?? '' !!}</td>
                    <td>{!! $value->center->name ?? '' !!}</td>
                    <td>{!! $value->course->name ?? '' !!}</td>
                    <td>{!! $value->payment_type ?? '' !!}</td>
                    <td>{!! $value->amount ?? '' !!}</td>
                  </tr>
                  @empty
                  <tr class="danger">
                    <td colspan="5" class="text-center">No Data Found</td>
                    
                  </tr>
                  @endforelse
                  
                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
</div> 

@endsection
@section('script')
<script type="text/javascript">
 
</script>
@endsection