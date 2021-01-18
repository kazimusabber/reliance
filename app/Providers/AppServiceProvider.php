<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $logo = \App\Logo::where('status', 1)->first();
        $socialmedia = \App\Social::get();
        $contacts = \App\Contact::where('status', 1)->where('contact_setup_id',1)->first();


        $student_info_data = \App\StudentInformation::with(['center','course','session']);
        if(\Auth::user()->center_id ?? ''){
            if(\Auth::user()->center_id ?? '' !=''){
                $student_info_data =$student_info_data->where('center_id',Auth::user()->center_id ?? '');
            }
        }
    $student_info_data =$student_info_data->where('status',1)->get();
    //digit5face292b3763
    //digit5face292b3763@ssl
    $store_id =$logo->store_id ?? ''; 
    $store_password =$logo->store_password ?? ''; 

    $loging_users = \DB::select(" SELECT t1.loging_user as loging_user, t1.user_types as user_types FROM(
            SELECT IF(user_type='admin',COUNT(`login_user`),0 )  AS loging_user,'Admin' AS user_types
            FROM users
            WHERE `login_user`=1 GROUP BY user_type
            UNION ALL
            SELECT IF(user_type='center',COUNT(`login_user`),0 )  AS loging_user,'Center' AS user_types
            FROM users
            WHERE `login_user`=1 GROUP BY user_type
            UNION ALL
            SELECT IF(user_type='student',COUNT(`login_user`),0 )  AS loging_user,'Student' AS user_types
            FROM users
            WHERE `login_user`=1 GROUP BY user_type ) as t1 ");
       
        putenv("STORE_ID=".$store_id."");
        putenv("STORE_PASSWORD=".$store_password."");

        $frontendmenus = \App\Menu::with('submenu')->where('parent_id',0)->orderBy('serial','ASC')->get();
        
        view()->share(compact('logo','student_info_data','loging_users','frontendmenus','socialmedia','contacts'));
        Schema::DefaultStringLength(191);
    }
}
