<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientLogo extends Model
{
    protected $table = 'client_logos';
    protected $fillable = [
        'title', 'client_logo_img', 'status','details','client_name','designation'
    ];
}
