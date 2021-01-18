@extends('frontend.layout.master')
@section('title', strip_tags($logo->title ?? ''))
@section('description', strip_tags($logo->description ?? ''))
@section('content')
@section('style')

@endsection
<div class="main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 student_info_section">
          <h2 style="padding-top: 20px;text-align: center;">General Inquiry Form</h2>
          @if (\Session::has('warning'))
            <div class="alert alert-warning">
                <ul>
                    <li>{{  \Session::get('warning') }}</li>
                </ul>
            </div>
          @endif
          @if (\Session::has('success'))
            <div class="alert alert-success text-center">
                <h2>{{  \Session::get('success') }}</h2>
            </div>
            @else
         
            <div class="card-body card-block">
                <form action="{!! url('student_info_save') !!}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">First Name <span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="first_name" placeholder="Enter First Name" class="form-control" required maxlength = "50" value="{!! old('first_name') !!}">
                            <span class="text-danger">{!! $errors->has('first_name')? $errors->first('first_name'):'' !!}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Last Name<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="last_name" placeholder="Enter Last name" class="form-control" required maxlength="50" value="{!! old('last_name') !!}">
                            <span class="text-danger">{!! $errors->has('last_name')? $errors->first('last_name'):'' !!}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Email<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="text-input" name="email" placeholder="Enter email" class="form-control" required maxlength="50" value="{!! old('email') !!}">
                            <span class="text-danger">{!! $errors->has('email')? $errors->first('email'):'' !!}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Mobile Number<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="mobile" placeholder="Enter mobile" class="form-control" required maxlength="15" value="{!! old('mobile') !!}">
                            
                            <span class="text-danger">{!! $errors->has('mobile')? $errors->first('mobile'):'' !!}</span>
                        </div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3">
                            <label  class=" form-control-label">Highest Level of Education<span class="req_icon">*</span></label>
                        </div>
                        @php 
                        $levels = \App\StudentExamName::get();

                        @endphp
                        <div class="col-12 col-md-9">
                            <div class="row form-group">
                              <div class="col-md-4">
                                <label  class=" form-control-label">Level</label>
                                <select name="height_edu_l"  class="form-control" required>
                                    <option value="">Select Level</option>
                                    @foreach($levels as $level)
                                    <option value="{!!  $level->id !!}">{!!  $level->short_name ?? '' !!}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-md-4">
                                <label  class=" form-control-label">Year</label>
                                  <?php 
                                    $this_year = date("Y"); 
                                    $back_year= $this_year-30;
                                  ?>
                                <select name="height_edu_y"  class="form-control" required>
                                    <option value="">Select Year</option>
                                    @for ($year = $back_year; $year <= $back_year + 30; $year++) 
                                     <option value="{!! $year !!}">{!! $year !!}</option>
                                    @endfor
                                    
                                </select>
                              </div>
                              <div class="col-md-4">
                                 <label  class=" form-control-label">Result</label>
                                  <input type="text" id="text-input" name="height_edu_r" placeholder="Enter Result" class="form-control" required value="{!! old('height_edu_r') !!}">
                              </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Center<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="center_id" id="select" class="form-control chane_class">
                                <option value="">Select Center</option>
                                @forelse($centers as $center)
                                <option data-courses="{{ $center->courses }}" attr_branch="{{ $center->name ?? '' }}" value="{!! $center->id ?? '' !!}">{!! $center->name ?? '' !!}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select your course<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                          <div class="course_details_section">
                            <select class="form-control" name="course_id">
                              <option value="">Select Course</option>
                            </select>
                          </div>
                            
                        </div>
                    </div>

                    <div class="row form-group">
                      <div class="col col-md-3">
                            <label  class=" form-control-label">Level of your English skills<span class="req_icon">*</span></label>
                        </div>
                        @php 
                        $skillls = ['english_skill_l'=>'Listening','english_skill_r'=>'Reading','english_skill_w'=>'Writing','english_skill_s'=>'Speaking'];
                        $skilllevels = ['Expert','Advance','Moderate','Basic'];
                        $yes_no=['no'=>'NO','yes'=>'YES'];
                        @endphp
                        <div class="col-12 col-md-9">
                            <div class="row form-group">
                              @forelse($skillls as $sk_key=>$skill)
                              <div class="col-md-3">
                                <label  class=" form-control-label">{!! $skill !!}</label>
                                <select name="{!! $sk_key !!}"  class="form-control" required>
                                    <option value="">Select Level</option>
                                    @foreach($skilllevels as $skill)
                                    <option value="{!!  $skill !!}">{!!  $skill !!}</option>
                                    @endforeach
                                </select>
                              </div>
                            @empty
                            @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3">
                            <label  class=" form-control-label">Select your skills<span class="req_icon">*</span></label>
                        </div>
                        @php 
                        $skillls = ['ms_w_skill'=>'Microsoft Word','ms_e_skill'=>'Microsoft Excel','ms_pp_skill'=>'Micr. PowerPoint','ms_out_skill'=>'Microsoft Outlook'];
                        $skilllevels = ['Expert','Advance','Moderate','Basic'];
                        @endphp
                        <div class="col-12 col-md-9">
                            <div class="row form-group">
                              @forelse($skillls as $sk_key=>$skill)
                              <div class="col-md-3">
                                <label  class=" form-control-label">{!! $skill !!}</label>
                                <select name="{!! $sk_key !!}"  class="form-control" required>
                                    <option value="">Select Level</option>
                                    @foreach($skilllevels as $skill)
                                    <option value="{!!  $skill !!}">{!!  $skill !!}</option>
                                    @endforeach
                                </select>
                              </div>
                            @empty
                            @endforelse
                            </div>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Do you have a computer/laptop at home<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="have_laptop"  class="form-control">
                              @foreach($yes_no as $yn_key=>$yn)
                                <option value="{!! $yn_key !!}">{!! $yn !!}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Do you have internet access at home<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="have_internet"  class="form-control">
                                 @foreach($yes_no as $yn_key=>$yn)
                                <option value="{!! $yn_key !!}">{!! $yn !!}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Why are you interested in this course? (50 words)<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea class="form-control" name="interest" maxlength="50">{!! old('interest') !!}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">What you want to see yourself after 5 years? (200 Words)<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea class="form-control" name="feature_yourself" maxlength="200">{!! old('feature_yourself') !!}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Do you have any experience in freelancing sector?<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="ex_in_freel"  class="form-control ex_in_freel">
                                 @foreach($yes_no as $yn_key=>$yn)
                                  <option value="{!! $yn_key !!}">{!! $yn !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group year_of_ex_fl">
                        <div class="col col-md-3">
                            <label for="select" class="form-control-label">Years of experience<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="year_of_ex_fl" placeholder="Enter Year of experience" class="form-control" value="{!! old('year_of_ex_fl') !!}" maxlength="4"><br>
                            <input type="text"  name="specify_area" placeholder="Specify your area" class="form-control" value="{!! old('specify_area') !!}" >
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Are you working anywhere?<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="have_work_ex"  class="form-control have_work_ex">
                                @foreach($yes_no as $yn_key=>$yn)
                                <option value="{!! $yn_key !!}">{!! $yn !!}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group year_of_work_ex">
                        <div class="col col-md-3">
                            <label  class=" form-control-label">Total years of experience<span class="req_icon">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="year_of_work_ex" class="form-control" value="{!! old('year_of_work_ex') !!}" maxlength="4" placeholder="Total years of experience">
                        </div>
                    </div>

                    <div class="card_footer">
                      <!-- <div class="row">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i>Submit
                        </button>
                          </div>
                          <div class="col-md-6">
                              <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i>Reset
                        </button>
                          </div>
                      </div> -->
                      <button style="float: right;" type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i>Reset
                        </button>
                        <button style="float: right;" type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i>Submit
                        </button>
                        
                        
                    </div>
                </form>
            </div>
         @endif
        </div>
        <div class="col-md-1"></div>
      </div>
  </div>
</div> 
<style type="text/css">
 
</style>
@endsection
@section('script')
<script type="text/javascript">
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
   $(document).on('change','.ex_in_freel',function(){
        var check_yes_no = $(this).find("option:selected").val();
        show_div(check_yes_no,".year_of_ex_fl","year_of_ex_fl","specify_area")
   })




   $(document).on('change','.have_work_ex',function(){
        var check_yes_no = $(this).find("option:selected").val();
        show_div(check_yes_no,".year_of_work_ex","year_of_work_ex","")
   })


   function show_div(check_yes_no,div_section,field_1='',field_2=''){
    if(check_yes_no =='yes'){
      $(document).find(div_section).show();
    }else{
      $(document).find(div_section).hide();
      if(field_1 !=''){
        $(document).find("input[name='"+field_1+"']").val('');
      }
      if(field_2 !=''){
        $(document).find("input[name='"+field_2+"']").val('');
      }
    }
    
   }
</script>
@endsection