@extends('frontend.layout.master')
@section('title', 'Payment'))
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
  @if (\Session::has('message'))
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 transaction_message">
                
                   <table class="table">
                     <tr style="border-top: 0px">
                       <td colspan="4" style="border-top: 0px ">{!!  \Session::get('message') !!}</td>
                     </tr>
                     <tr>
                       <td>Transection Id :</td>
                       <td>{!!  \Session::get('tran_id') !!}</td>
                       <td>Amount :</td>
                       <td>{!!  \Session::get('amount') !!}</td>
                     </tr>
                     <tr>
                       <td colspan="2">Transection Status :</td>
                       <td colspan="2">{!!  \Session::get('status') !!}</td>
                     </tr>

                   </table>
             
                </div>
                <div class="col-md-3"></div>
              </div>
    @endif
            </div>
        <div class="col-md-1"></div>
        <div class="col-md-10 student_info_section">
            <div class="card-body card-block">
                

                

                   
                <div class="row">
                  <form action="{{url('form-four-save')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    
                 
                  <table class="table" style="width: 100%;border: none;">
                    
                    <tr style="border-top: none;">
                      <td style="border-top: none;text-align: left;"><strong>Name of the Applicant:</strong> </td>
                      <td style="border-top: none;text-align: left;"></td>
                    </tr>  
                    <tr style="border-top: none;">
                      <td style="border-top: none;text-align: left;"><strong>First Name<span class="req_icon">*</span></strong></td>
                      <td style="border-top: none;text-align: left;"><strong>Last Name<span class="req_icon">*</span></strong></td>
                    </tr>
                    <tr style="border-top: none;">
                      <td style="border-top: none;text-align: left;">
                        <input type="text" name="first_name" class="form-control first_name @error('first_name') is-invalid @enderror" required placeholder="First Name" value="{{old('first_name',$info->first_name ?? '' )}}">
                        <input type="hidden" name="id" class="form-control student_id"   value="{{old('id',$info->user_id ?? '' )}}">
                        @error('first_name')
                          <span class="req_icon" role="alert" style="margin-top: 20px">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </td>
                      <td style="border-top: none;text-align: left;">
                        <input type="text" name="last_name" class="form-control last_name" required  placeholder="Last Name" value="{{old('last_name',$info->last_name ?? '')}}">
                        @error('last_name')
                          <span class="req_icon" role="alert" style="margin-top: 20px">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </td>
                      
                    </tr>
                    <tr style="border-top: none;text-align: left;">
                      <table class="table" style="width: 100%;border: none;">
                         
                          
                          <tr style="border-top: none;">
                            <td style="border-top: none;text-align: left;width:30%">
                              <strong> Email Address: <span class="req_icon">*</span></strong>
                            </td>
                            <td style="border-top: none;text-align: left;">
                              <input type="email" name="email" class="form-control email"  placeholder="Email Address" value="{{old('email',$info->email ?? '')}}">
                               @error('email')
                              <span class="req_icon" role="alert" style="margin-top: 20px">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </td>
                          </tr>
                          <tr style="border-top: none;">
                            <td style="border-top: none;text-align: left;width:30%">
                              <strong> Mobile Number:<span class="req_icon">*</span>  </strong>
                            </td>
                            <td style="border-top: none;text-align: left;">
                              <input type="text" required maxlength="15" name="mobile" class="form-control mobile"  placeholder="Mobile Number" value="{{old('mobile',$info->mobile ?? '')}}">
                              @error('mobile')
                              <span class="req_icon" role="alert" style="margin-top: 20px">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </td>
                          </tr>
                          
                          <tr style="border-top: none;">
                              <td style="border-top: none;text-align: left;">
                                  <strong>Centre: <span class="req_icon">*</span>  </strong>
                              </td>
                              <td style="border-top: none;text-align: left;">
                                  <select name="center_id" id="select" class="form-control chane_class center_id">
                                    <option value="">Select Centre</option>
                                    @forelse($centers as $center)
                                    <option {{ old('center_id',$info->center_id ?? '') == $center->id ? "selected" : "" }} data-courses="{{ $center->courses }}" attr_branch="{{ $center->name ?? '' }}" value="{!! $center->id ?? '' !!}">{!! $center->name ?? '' !!}</option>
                                    @empty
                                    @endforelse
                                </select>
                              </td>
                          </tr>
                           <tr style="border-top: none;">
                              <td style="border-top: none;text-align: left;">
                                  <strong>Select your course: <span class="req_icon">*</span>  </strong>
                              </td>

                              <td style="border-top: none;text-align: left;">
                                  <div class="course_details_section">
                                    <select class="form-control course_id" name="course_id">
                                      <option value="">Select Course</option>
                                      @if($info->course ?? [])
                                        <option selected value="{{ $info->course->id ?? ''}}">{{$info->course->name ?? ''}}</option>
                                      @endif
                                    </select>
                                  </div>
                              </td>
                           </tr>
                           <tr style="border-top: none;">
                              <td style="border-top: none;text-align: left;">
                                  <strong>Sessions: <span class="req_icon">*</span>  </strong>
                              </td>

                              <td style="border-top: none;text-align: left;">
                                  <div class="course_sessions_section">
                                    <select class="form-control session_id" name="session_id">
                                      <option value="">Select session</option>
                                      @forelse($course_sessions as $seson)
                                        <option {{ old('session_id',$info->session_id ?? '') == $seson->id ? "selected" : "" }} value="{{$seson->id ?? '' }}">{{$seson->name ?? '' }}</option>
                                      @empty
                                      @endforelse
                                    </select>
                                  </div>
                              </td>
                           </tr>
                           <tr style="border-top: none;">
                              <td style="border-top: none;text-align: left;">
                                  <strong>Amount: <span class="req_icon">*</span>  </strong>
                              </td>

                              <td style="border-top: none;text-align: left;">
                                  <input type="number" name="amount" min="0" step="any" class="form-control amount" placeholder="Amount" value="">
                              </td>
                           </tr>
                           
                           <tr style="border-top: none;">
                             <td style="border-top: none;text-align: left;">
                                  <strong>Payment Details: <span class="req_icon">*</span>  </strong>
                              </td>
                              <td>
                                <div class="terms-accept">
                                <div class="custom-checkbox">
                                <input type="checkbox" id="terms_accept">
                                <label for="terms_accept">I agree <a href="#">Terms &amp; Conditions</a></label>
                                </div>
                                </div>
                                <span style="font-size:12px;">Please agree to our terms and conditon for compleate your payment</span>
                              <button class="your-button-class" id="sslczPayBtn"
                                token="if you have any token validation"
                                postdata = "your javascript arrays or objects which requires in backend" order="If you already have the transaction generated for current order"
                                endpoint="{{url('pay-via-ajax')}}" disabled style="width:100%;background:#8eb8d482;"> Pay Now
                                </button>
                              </td>
                           </tr>
                           <tr>
                             <td style="border-top: none;text-align: left;">
                               
                             </td>
                             <td style="border-top: none;text-align: center;">
                               <!-- <button type="submit" class="btn btn-info" style="width: 150px">Save</button> -->
                               <div >
                                <!-- <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i>Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i>Reset
                                </button> -->
                            </div>
                             </td>
                           </tr>
                          
                      </table>
                    </tr>
              


                  </table>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
      </div>
  </div>
</div> 

@endsection
@section('script')
<script type="text/javascript">
  
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); 
  }
}

$(".image_input").change(function() {
  readURL(this);
});
  


  $(document).on('change','.chane_class',function(){
        var corses = $('.chane_class option:selected').attr('data-courses')
        var data_set =`<select name="course_id" id="select" class="form-control " required>`
         data_set +=`<option value="">Select Course</option>`
        if(corses !==undefined){
          var array_data = JSON.parse(corses);
          if(array_data.length > 0){
              for (var i = 0; i < array_data.length; i++) {
                  data_set+=`<option value="${array_data[i].id}">${array_data[i].name}</option>`;
              }
          }else{
              data_set +=`<option value="">No Course Found</option>`
          }
        }else{
          data_set +=`<option value="">No Course Found</option>`
        }
        data_set+=`</select>`;
        $(document).find('.course_details_section').html(data_set);
    });

  $('#terms_accept').click(function(){
      if($(this).prop("checked") == true){
      $('#sslczPayBtn').prop('disabled',false);
      $('#paywalleBtn').prop('disabled',false);
      $('#paywalleBtn').css("background","");
      $('#sslczPayBtn').css("background","");
      }
      else if($(this).prop("checked") == false){
      $('#sslczPayBtn').prop('disabled',true);
      $('#paywalleBtn').prop('disabled',true);
      $('#paywalleBtn').css("background","#12de9b4d");
      $('#sslczPayBtn').css("background","#8eb8d482");
      }
});

  var obj = {};
obj.first_name = $('.first_name').val();
obj.last_name = $('.last_name').val();
obj.student_id = $('.student_id').val();
obj.email = $('.email').val();
obj.mobile = $('.mobile').val();
obj.center_id = $('.center_id').val();
obj.course_id = $('.course_id').val();
obj.session_id = $('.session_id').val();
obj.amount = $('.amount').val();
$('#sslczPayBtn').prop('postdata', obj);


/*(function (window, document){
var loader = function () {
var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
tag.parentNode.insertBefore(script, tag);
};

window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
*/
<?php echo $logo->ssl_script ?? ''; ?>


$(document).on('change','.form-control',function(){
    obj.first_name = $('.first_name').val();
    obj.last_name = $('.last_name').val();
    obj.student_id = $('.student_id').val();
    obj.email = $('.email').val();
    obj.mobile = $('.mobile').val();
    obj.center_id = $('.center_id').val();
    obj.course_id = $('.course_id').val();
    obj.session_id = $('.session_id').val();
    obj.amount = $('.amount').val();
    $('#sslczPayBtn').prop('postdata', obj);
})

</script>
@endsection