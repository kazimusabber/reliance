<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';

    protected $fillable = [
      'name', 'designation', 'age', 'join_date', 'salary', 'experts', 'quotation'
    ];
}
