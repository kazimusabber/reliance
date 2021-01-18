<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelcomeSpeach extends Model
{
    protected $table="welcome_speaches";
    protected $fillable=['name','title','image','description','status'];
}
