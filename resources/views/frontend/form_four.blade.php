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
            @if (\Session::has('success'))
                    <div class="alert alert-success" style="margin-top: 10px;">
                       
                        <p>   {!!  \Session::get('success') !!}</p>
                        
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
                <div class="card_head">

                   <div class="image_section">
                     <img src="/images/{{$logo->logo_img ?? '' }}" style="width: 100px;height: 100px">
                   </div>
                </div>
@php 
                    $levels = \App\StudentExamName::get();

                    @endphp
                <div class="row">
                  <form action="{{url('form-four-save')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <h3 class="s_div">Student Registration Form</h3>
                        <input type="hidden" name="id" value="{!! $info->id ?? '' !!}">
                      </div>
                      <div class="col-md-6 p_div">
                         <div class="student_image" id="student_image">
                          <!-- <strong class="photo_text">Upload Photo</strong> -->
                           <img id="blah" src="/images/{!!  $info->image ?? '' !!}" alt="Photo" style="height: 150px;width: 150px;" />
                         </div>
                         <input  type="file" name="image" class="form-control image_input"  style="width: 150px;margin-top: 10px;" >

                         @error('image')
                          <span class="req_icon" role="alert" style="margin-top: 20px">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror

                      </div>

                    </div>
                 
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
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" required placeholder="First Name" value="{{old('first_name',$info->first_name ?? '' )}}">
                        @error('first_name')
                          <span class="req_icon" role="alert" style="margin-top: 20px">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </td>
                      <td style="border-top: none;text-align: left;">
                        <input type="text" name="last_name" class="form-control" required  placeholder="Last Name" value="{{old('last_name',$info->last_name ?? '')}}">
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
                              <strong> Date of Birth:<span class="req_icon">*</span></strong>
                            </td>
                            <td style="border-top: none;text-align: left;">
                              <input type="date" name="dob" class="form-control"  placeholder="Date of Birth" value="{{old('dob',$info->dob ?? '')}}">
                              @error('dob')
                              <span class="req_icon" role="alert" style="margin-top: 20px">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </td>
                          </tr>
                          <tr style="border-top: none;">
                            <td style="border-top: none;text-align: left;width:30%">
                              <strong> NID / Birth Certificate :</strong>
                            </td>
                            <td style="border-top: none;text-align: left;">
                              <input type="text" name="nid" class="form-control"  placeholder="NID / Birth Certificate" value="{{old('nid',$info->nid ?? '')}}">
                               @error('nid')
                              <span class="req_icon" role="alert" style="margin-top: 20px">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </td>
                          </tr>
                          <tr style="border-top: none;">
                            <td style="border-top: none;text-align: left;width:30%">
                              <strong> Email Address: <span class="req_icon">*</span></strong>
                            </td>
                            <td style="border-top: none;text-align: left;">
                              <input type="email" name="email" class="form-control"  placeholder="Email Address" value="{{old('email',$info->email ?? '')}}">
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
                              <input type="text" required maxlength="15" name="mobile" class="form-control"  placeholder="Mobile Number" value="{{old('mobile',$info->mobile ?? '')}}">
                              @error('mobile')
                              <span class="req_icon" role="alert" style="margin-top: 20px">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </td>
                          </tr>
                          <tr style="border-top: none;">
                            <td style="border-top: none;text-align: left;width:30%">
                              <strong>  Parent’s Information:<span class="req_icon">*</span>  </strong>
                            </td>
                            <td style="border-top: none;text-align: left;"></td>
                          </tr>

                          <tr style="border-top: 1px solid gray;">
                            <td colspan="2">
                              <table class="table" style="width: 98%;margin:0 auto;border:1px solid gray;">
                                <tr>
                                  <td style="border: 1px solid gray;text-align: left;width:30%">
                                  <strong>  Father’s  Name :<span class="req_icon">*</span>  </strong>
                                </td>
                                <td style="border-top: 1px solid gray;text-align: left;">
                                  <input type="text" required  name="father_name" class="form-control"  placeholder="Father’s  Name" value="{{old('father_name',$info->father_name ?? '')}}">
                                  @error('father_name')
                              <span class="req_icon" role="alert" style="margin-top: 20px">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                                </td>
                                </tr>
                                <tr>
                                  <td style="border: 1px solid gray;text-align: left;width:30%">
                                      <strong>  Father’s  Phone No.<span class="req_icon">*</span>  </strong>
                                    </td>
                                    <td style="border-top: 1px solid gray;text-align: left;">
                                      <input type="text" required  name="father_mobile" class="form-control"  placeholder="Father’s  Mobile" value="{{old('father_mobile',$info->father_mobile ?? '')}}">
                                    @error('father_mobile')
                                      <span class="req_icon" role="alert" style="margin-top: 20px">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </td>
                                </tr>
                                <tr>
                                  <td style="border: 1px solid gray;text-align: left;width:30%">
                                      <strong>  Father’s  NID<span class="req_icon">*</span>  </strong>
                                    </td>
                                    <td style="border-top: 1px solid gray;text-align: left;">
                                      <input type="text" required  name="father_nid" class="form-control"  placeholder="Father’s  NID" value="{{old('father_nid',$info->father_nid ?? '')}}">
                                      @error('father_nid')
                                      <span class="req_icon" role="alert" style="margin-top: 20px">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </td>
                                </tr>
                              </table>
                              <br>
                              <table class="table" style="width: 98%;margin:0 auto;border:1px solid gray;">
                                <tr>
                                  <td style="border: 1px solid gray;text-align: left;width:30%">
                                  <strong>  Mother’s  Name :<span class="req_icon">*</span>  </strong>
                                </td>
                                <td style="border-top: 1px solid gray;text-align: left;">
                                  <input type="text" required  name="mother_name" class="form-control"  placeholder="Mother’s  Name" value="{{old('mother_name',$info->mother_name ?? '')}}">
                                  @error('mother_name')
                                      <span class="req_icon" role="alert" style="margin-top: 20px">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </td>
                                </tr>
                                <tr>
                                  <td style="border: 1px solid gray;text-align: left;width:30%">
                                      <strong>  Mother’s  Phone No.<span class="req_icon">*</span>  </strong>
                                    </td>
                                    <td style="border-top: 1px solid gray;text-align: left;">
                                      <input type="text" required  name="mother_mobile" class="form-control"  placeholder="Mother’s  Mobile" value="{{old('mother_mobile',$info->mother_mobile ?? '')}}">
                                      @error('mother_mobile')
                                      <span class="req_icon" role="alert" style="margin-top: 20px">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </td>
                                </tr>
                                <tr>
                                  <td style="border: 1px solid gray;text-align: left;width:30%">
                                      <strong>  Mother’s  NID<span class="req_icon">*</span>  </strong>
                                    </td>
                                    <td style="border-top: 1px solid gray;text-align: left;">
                                      <input type="text" required  name="mother_nid" class="form-control"  placeholder="Mother’s  NID" value="{{old('mother_nid',$info->mother_nid ?? '')}}">
                                      @error('mother_nid')
                                      <span class="req_icon" role="alert" style="margin-top: 20px">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr style="border-top: none;">
                            <td style="border-top: none;text-align: left;width:30%">
                              <strong>Academic Background: <span class="req_icon">*</span>  </strong>
                            </td>
                            <td style="border-top: none;text-align: left;"></td>
                          </tr>

                          <tr style="border-top: 1px solid gray;">
                            <td colspan="2">
                              <table class="table" style="width: 98%;margin:0 auto;border:1px solid gray;">
                                <thead>
                                    <tr>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        Degree
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        Major
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        Result
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        Year
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        <button type="button" class="btn btn-success add_more">+</button>
                                      </td>
                                    </tr>
                                </thead>
                                <tbody class="table_row">
                                  @php
                                  $acground = $info->acground ?? [];
                                   @endphp

                                @forelse($acground as $value) 
                                    <tr>
                                      <td style="border: 1px solid gray;text-align: left;">
                                      <select name="certificate_id[]"  class="form-control" required>
                                        <option value="">Select Level</option>
                                        @foreach($levels as $level)
                                        <option @if($value->certificate_id ?? '' == $level->id) selected @endif value="{!!  $level->id !!}">{!!  $level->short_name ?? '' !!}</option>
                                        @endforeach
                                      </select>
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        <input type="text" class="form-control" name="major_subject[]" value="{!! $value->major_subject ?? '' !!}">
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        <input type="text" class="form-control" name="result[]" maxlength="12" value="{!! $value->result ?? '' !!}">
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        <input type="text" class="form-control" name="years[]" maxlength="4" value="{!! $value->years ?? '' !!}" >
                                      </td>
                                      <td style="border: 1px solid gray;text-align: left;">
                                        
                                      </td>
                                    </tr>
                                @empty
                                    <tr>
                                      <td style="border: 1px solid gray;text-align: left;">
                                      <select name="certificate_id[]"  class="form-control" required>
                                        <option value="">Select Level</option>
                                        @foreach($levels as $level)
                                        <option  value="{!!  $level->id !!}">{!!  $level->short_name ?? '' !!}</option>
                                        @endforeach
                                    </select>
                                    </td>
                                    <td style="border: 1px solid gray;text-align: left;">
                                      <input type="text" class="form-control" name="major_subject[]" value="{!! old('major_subject') !!}" >
                                    </td>
                                    <td style="border: 1px solid gray;text-align: left;">
                                      <input type="text" class="form-control" name="result[]" maxlength="12" value="{!! old('result') !!}">
                                    </td>
                                    <td style="border: 1px solid gray;text-align: left;">
                                      <input type="text" class="form-control" name="years[]" maxlength="4" value="{!! old('years') !!}" >
                                    </td>
                                    <td style="border: 1px solid gray;text-align: left;">
                                      
                                    </td>
                                  </tr>
                                @endforelse
                                  
                                </tbody>
                              </table>
                             
                              
                            </td>
                          </tr>
                          <tr style="border-top: none;">
                              <td style="border-top: none;text-align: left;">
                                  <strong>Centre: <span class="req_icon">*</span>  </strong>
                              </td>
                              <td style="border-top: none;text-align: left;">
                                  <select name="center_id" id="select" class="form-control chane_class">
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
                                    <select class="form-control" name="course_id">
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
                                    <select class="form-control" name="session_id">
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
                                <strong>Level of your English skills: <span class="req_icon">*</span>  </strong>
                              </td>
                               <td style="border-top: none;text-align: left;">
                                @php 
                              $skillls = ['english_skill_l'=>'Listening','english_skill_r'=>'Reading','english_skill_w'=>'Writing','english_skill_s'=>'Speaking'];
                              $skilllevels = ['Expert','Advance','Moderate','Basic'];
                              $yes_no=['no'=>'NO','yes'=>'YES'];
                              $skill_form_db = [$info->english_skill_l ?? '',$info->english_skill_r ?? '',$info->english_skill_s ?? '',$info->english_skill_w ?? ''];
                              @endphp
                              <div class="row form-group">
                                @php $i=0; @endphp
                                  @forelse($skillls as $sk_key=>$skill)

                                  <div class="col-md-3">
                                    <label  class=" form-control-label">{!! $skill !!}</label>
                                    <select name="{!! $sk_key !!}"  class="form-control" required>
                                        <option value="">Select Level</option>
                                        @foreach($skilllevels as $skill)
                                        <option {{ old($sk_key,$skill_form_db[$i]) == $skill ? "selected" : "" }} value="{!!  $skill !!}">{!!  $skill !!}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  @php $i++; @endphp
                                @empty
                                @endforelse
                                </div>
                              </td>
                           </tr>
                           <!-- <tr style="border-top: none;">
                             <td style="border-top: none;text-align: left;">
                                  <strong>Payment Details: <span class="req_icon">*</span>  </strong>
                              </td>
                              <td>
                                
                   
                              </td>
                           </tr> -->
                           <tr>
                             <td style="border-top: none;text-align: left;">
                               
                             </td>
                             <td style="border-top: none;text-align: center;">
                               <!-- <button type="submit" class="btn btn-info" style="width: 150px">Save</button> -->
                               <div >
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i>Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i>Reset
                                </button>
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
  $(document).on('click','.add_more',function(){
    var output_html=`<tr>
                      <td style="border: 1px solid gray;text-align: left;">
                      <select name="certificate_id[]"  class="form-control" required>
                        <option value="">Select Level</option>
                        @foreach($levels as $level)
                        <option value="{!!  $level->id !!}">{!!  $level->short_name ?? '' !!}</option>
                        @endforeach
                    </select>
                    </td>
                    <td style="border: 1px solid gray;text-align: left;">
                      <input type="text" class="form-control" name="major_subject[]" >
                    </td>
                    <td style="border: 1px solid gray;text-align: left;">
                      <input type="text" class="form-control" name="result[]" maxlength="12">
                    </td>
                    <td style="border: 1px solid gray;text-align: left;">
                      <input type="text" class="form-control" name="years[]" maxlength="4" >
                    </td>
                    <td style="border: 1px solid gray;text-align: left;">
                      <button type="button" class="btn btn-danger remove_button">X</button>
                    </td>
                  </tr>`;

      $(document).find('.table_row').append(output_html);
  })

  $(document).on('click','.remove_button',function(){
    console.log($(this).parent('tr'))
     $(this).closest("tr").remove();
  })

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

</script>
@endsection