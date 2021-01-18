<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerContact extends Model
{
    protected $table ='customer_contact';
    protected $fillable = [
      'con_name', 'email_address', 'phone_no', 'country','message','company_name','status','is_seen'
    ]; 
}
