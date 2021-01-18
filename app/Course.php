<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TrainingCenter;

class Course extends Model
{
    protected $table="courses";
    protected $fillable=['name','center_id','details','start_date','end_date','teacher_id','fee','status'];

    public function center(){
    	return $this->hasOne(TrainingCenter::class,'id','center_id');
    }
}
