<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectFeature extends Model
{
   protected $table = 'project_features';
   protected $fillable = [
        'project_id', 'feature', 'serial','created_at', 'updated_at', 'created_by','updated_by','status'
    ];

   public function ProjectName(){
   	return $this->hasOne(Project::class, 'id', 'project_id');
   }
}
