<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SCInfo extends Model
{
    protected $table="s_c_infos";
    protected $fillable=['title','quantity','status','created_at','updated_at'];
}
