<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
    protected $table="course_sessions";
    protected $fillable=['center_id','name','status','created_at','updated_at'];
}


