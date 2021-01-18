<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectSetup extends Model
{
    protected $table = 'project_setups';
    protected $fillable = [
        'status', 'project_type'
    ];
}
