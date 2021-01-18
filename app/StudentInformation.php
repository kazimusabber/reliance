<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TrainingCenter;
use App\Course;
use App\CourseSession;
use App\AcademicHistry;
use App\Payment;

class StudentInformation extends Model
{
    protected $table="student_information";
    protected $fillable=['first_name','last_name','dob','nid','email','mobile','father_name','father_mobile','father_nid','mother_name','mother_mobile','mother_nid','academic_background','first_language','other_language','english_skill_l','english_skill_r','english_skill_s','english_skill_w','user_id','center_id','course_id','session_id','ms_w_skill','ms_e_skill','ms_pp_skill','ms_out_skill','have_laptop','have_internet','interest','feature_yourself','ex_in_freel','year_of_ex_fl','have_work_ex','year_of_work_ex','exam_status','status'];


    public function center(){
    	return $this->hasOne(TrainingCenter::class,'id','center_id');
    }
    public function course(){
    	return $this->hasOne(Course::class,'id','course_id');
    }
    public function session(){
    	return $this->hasOne(CourseSession::class,'id','session_id');
    }
    public function acground(){
        return $this->hasMany(AcademicHistry::class,'student_id','id');
    }

    public function payment(){
        return $this->hasMany(Payment::class,'student_id','id');
    }
}

