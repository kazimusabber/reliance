<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSetup extends Model
{
    protected $table = 'contact_setups';
    protected $fillable = [
        'office_title', 'status'
    ];
}
