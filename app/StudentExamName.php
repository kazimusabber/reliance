<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentExamName extends Model
{
    protected $table="student_exam_names";
    protected $fillable=['id', 'short_name', 'full_name', 'created_at', 'updated_at'];
}
