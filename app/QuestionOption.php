<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
     protected $table="question_options";
    protected $fillable=['question_id','que_serial','que_option','created_by','updated_by','created_at','updated_at'];
}
