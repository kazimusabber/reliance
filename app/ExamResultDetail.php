<?php

namespace App;
use App\StudentInformation;
use Illuminate\Database\Eloquent\Model;

class ExamResultDetail extends Model
{

	protected $table="exam_result_details";
	protected $fillable=['student_id','set_id','result_sheet','result_percentage','status','created_at','updated_at'];

	public function student(){
		return $this->hasOne(StudentInformation::class,'id','student_id');
	}
    

}
