<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class TrainingCenter extends Model
{
	protected $table="training_centers";
    protected $fillable=['name','address','mobile','start_date','status','sender_mail','mail_content','mail_footer','mail_subject','exam_mail_body' ];

public function courses(){
    	return $this->hasMany(Course::class,'center_id','id');
    }
}


