<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicHistry extends Model
{
    protected $table="academic_histries";
    protected $fillable=['student_id','certificate_id','major_subject','result'];
}


