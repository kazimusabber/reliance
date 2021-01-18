<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AchievementSetup extends Model
{
    protected $table = 'achievement_setups';
    protected $fillable = [
        'achievement_type', 'status'
    ];
}
