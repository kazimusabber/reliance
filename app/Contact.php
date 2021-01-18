<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = ('contacts');
    protected $fillable = [
      'location', 'email', 'phone', 'contact_setup_id'
    ];

    public function getName(){
        return $this->hasOne('App\ContactSetup', 'id','contact_setup_id');
    }
}
