<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menus';
    protected $fillable=['main_menu','menu_url','parent_id','status','created_at','updated_at'];

    public function submenu(){
    	return $this->hasOne(Menu::class,'id','parent_id');
    }
}
