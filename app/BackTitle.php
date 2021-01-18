<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackTitle extends Model
{
    protected $table="back_titles";
    protected $fillable=['title','image','status','created_at','updated_at','instractor_title','instractor_image','instractor_details','special_text'];
}
