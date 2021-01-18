<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'project_name', 'project_type', 'description', 'service_status', 'project_img', 'project_setup_id'
    ];

    public function getName(){
        return $this->hasOne('App\ProjectSetup', 'id','project_setup_id');

    }

   public function Feature(){
        return $this->hasMany(ProjectFeature::class,'project_id','id')->where('status',1)->orderBy('serial');

    }
}
