<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements';
    protected $fillable = [
        'description', 'status', 'achievement_setup_id'
    ];

    public function getName(){
        return $this->hasOne('App\AchievementSetup', 'id','achievement_setup_id');
    }
}
