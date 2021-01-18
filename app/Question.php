<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionOption;

class Question extends Model
{
    protected $table="questions";
    protected $fillable=['question','ques_ans','set_id','created_by','updated_by','created_at','updated_at','status'];


    public function question_options(){
    	return $this->hasMany(QuestionOption::class,'question_id','id');
    }
}

	