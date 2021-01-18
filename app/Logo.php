<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logos';
    protected $fillable = [
        'title', 'logo_img', 'status','description','phone','email','website','mobile','address','default_color','map_url','store_id','store_password','ssl_script','under_constraction','under_constraction_text'
    ];
}




