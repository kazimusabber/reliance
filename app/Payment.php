<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $table="orders";
   protected $fillable=['student_id','center_id','course_id','payment_type','amount','name','email','phone','address','status','transaction_id'];


   public function student(){
   	return $this->hasOne(\App\StudentInformation::class,'user_id','student_id');
   }
   public function center(){
   	return $this->hasOne(\App\TrainingCenter::class,'id','center_id');
   }
   public function course(){
   	return $this->hasOne(\App\Course::class,'id','course_id');
   }
}


