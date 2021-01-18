@extends('admin.master')

@section('title')
    Student Details
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="row">
                <div class="col-md-12">
                    @if (\Session::has('warning'))
                <p style="color: red;font-size: 16px;text-align: center;font-weight: bold;">{{  \Session::get('warning') }}</p>
                        
                  @endif
                  @if (\Session::has('success'))
                  <p style="color: green;font-size: 16px;text-align: center;font-weight: bold;">{{  \Session::get('success') }}</p>
                    
                  @endif
                </div>
            </div>
            <!-- <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Student Details</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-success" href="{{url('student-info')}}">Student List</a>
                        <a class="btn btn-info" href="{{url('exam-mail')}}/{{$info->id}}">Send Exam Link</a>
                    </div>
                </div>
            </div> -->
            <div class="card-body">
                <div class="table-responsive">
                <form action="">
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody>
                           <!--  <tr>
                                <td colspan="2"><b>Candidates English Listening & Speaking Skill Marking</b></td>
                                <td>
                                    <input type="text" name="Candidates_English_Listening" placeholder="English Listening Skill" class="form-control student_info_class" attr_id="{{$info->id}}" value="{!! $info->Candidates_English_Listening ?? '' !!}">
                                </td>
                                <td>
                                    <input type="text" name="Speaking_Skill" placeholder="Speaking Skill" class="form-control student_info_class" attr_id="{{$info->id}}" value="{!! $info->Speaking_Skill ?? '' !!}">
                                </td>
                            </tr> -->
                            <!-- <tr>
                                <td colspan="2"><b>Candidates Computer Skill Marking</b></td>
                                <td colspan="2">
                                    <input type="text" name="Cancomputerskill" placeholder="Cancomputer skill" class="form-control student_info_class" attr_id="{{$info->id}}" value="{!! $info->Cancomputerskill ?? '' !!}">
                                </td>
                            </tr> -->
                            <!-- <tr>
                                <td colspan="2"><b>Candidate’s knowledge about freelancing</b></td>
                                <td colspan="2">
                                    <input type="text" name="knowledge_about_freelancing" placeholder="knowledge about freelancing" class="form-control student_info_class" attr_id="{{$info->id}}" value="{!! $info->knowledge_about_freelancing ?? '' !!}">
                                </td>
                            </tr> -->

                            <tr>
                               <!--  <td><b>Exam Status</b></td>
                                <td>{!! $info->exam_status ?? '' !!}</td> -->
                                <td></td>
                                <td></td>
                                <td><b>Status</b></td>
                                <td>@if($info->status==1) <span style="color: red;font-weight: bold;">New</span> @else <span style="color: green;font-weight: bold;">Seen</span> @endif</td>
                            </tr>

                            <tr>
                                <td><b>First Name</b></td>
                                <td>{!! $info->first_name ?? '' !!}</td>
                                <td><b>Last Name</b></td>
                                <td>{!! $info->last_name ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Date of Birth</b></td>
                                <td>{!! $info->dob ?? '' !!}</td>
                                <td><b>Age Range</b></td>
                                <td>{!! $info->nid ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>{!! $info->email ?? '' !!}</td>
                                <td><b>Mobile</b></td>
                                <td>{!! $info->mobile ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Father Name</b></td>
                                <td>{!! $info->father_name ?? '' !!}</td>
                                <td><b>Father Mobile</b></td>
                                <td>{!! $info->father_mobile ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Father NID</b></td>
                                <td>{!! $info->father_nid ?? '' !!}</td>
                                <td><b>Father Mobile</b></td>
                                <td>{!! $info->father_mobile ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Mother Name</b></td>
                                <td>{!! $info->mother_name ?? '' !!}</td>
                                <td><b>Mother Mobile</b></td>
                                <td>{!! $info->mother_mobile ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Mother NID</b></td>
                                <td>{!! $info->mother_nid ?? '' !!}</td>
                                <td><b>Academic Background</b></td>
                                <td>{!! $info->academic_background ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>First Language</b></td>
                                <td>{!! $info->first_language ?? '' !!}</td>
                                <td><b>Other Language</b></td>
                                <td>{!! $info->other_language ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>English Skill Listening</b></td>
                                <td>{!! $info->english_skill_l ?? '' !!}</td>
                                <td><b>English Skill Reading</b></td>
                                <td>{!! $info->english_skill_r ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>English Skill Speaking</b></td>
                                <td>{!! $info->english_skill_s ?? '' !!}</td>
                                <td><b>English Skill Writing</b></td>
                                <td>{!! $info->english_skill_w ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>User Id</b></td>
                                <td>{!! $info->user_id ?? '' !!}</td>
                                <td><b>Center Name</b></td>
                                <td>{!! $info->center->name ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Center Name</b></td>
                                <td>{!! $info->center->name ?? '' !!}</td>
                                <td><b>Session Name</b></td>
                                <td>{!! $info->session->name ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Microsoft Word</b></td>
                                <td>{!! $info->ms_w_skill ?? '' !!}</td>
                                <td><b>Microsoft Excel</b></td>
                                <td>{!! $info->ms_e_skill ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Microsoft PowerPoint</b></td>
                                <td>{!! $info->ms_pp_skill ?? '' !!}</td>
                                <td><b>Microsoft Outlook</b></td>
                                <td>{!! $info->ms_out_skill ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Have Laptop</b></td>
                                <td>{!! $info->have_laptop ?? '' !!}</td>
                                <td><b>Have Internet</b></td>
                                <td>{!! $info->have_internet ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Have Laptop</b></td>
                                <td>{!! $info->interest ?? '' !!}</td>
                                <td><b>Have Internet</b></td>
                                <td>{!! $info->have_internet ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Feature </b></td>
                                <td colspan="3">{!! $info->feature_yourself ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>experience in freelancing</b></td>
                                <td>{!! $info->ex_in_freel ?? '' !!}</td>
                                <td><b>Years of experience</b></td>
                                <td>{!! $info->year_of_ex_fl ?? '' !!}</td>
                            </tr>
                            <tr>
                                <td><b>Specify Area</b></td>
                                <td>{!! $info->specify_area ?? '' !!}</td>
                                <td><b>working experience</b></td>
                                <td>{!! $info->have_work_ex ?? ''!!}</td>
                            </tr>
                        </tbody>
                       
                    </table>
                </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection

