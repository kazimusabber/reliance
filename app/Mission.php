<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'missions';
    protected $fillable = [
        'title', 'description'
    ];
}
