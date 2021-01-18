<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permissions=['check_new_student','achievement_save','achievement_setup_save','add_about','add_achievement','add_achievement_setup','add_career','add_center',
'add_client_logo','add_contact','add_contact_setup','add_courses','add_feature','add_info','add_logo','add_member','add_menu',
'add_mission','add_post','add_project','add_project_type','add_save','add_service','add_skill','career','change_b_t','contact',
'contact_create',' delete_feature','delete_about','delete_achievement','delete_achievement_setup','delete_career','delete_center',
'delete_client_logo','delete_contact','delete_contact_setup','delete_courses','delete_feature','delete_info','delete_logo',
'delete_mission','delete_project','delete_project_setup','delete_question','delete_service','delete_skill','delete_slider',
'edit_feature','edit_about','edit_achievement','edit_achievement_setup','edit_career','edit_center','edit_client_logo',
'edit_contact','edit_contact_setup','edit_courses','edit_feature','edit_info','edit_logo','edit_member','edit_menu','edit_mission',
'edit_post','edit_project','edit_project_setup','edit_question','edit_service','edit_skill','edit_slider','event','home',
'hosting','manage_about','manage_achievement','manage_achievement_setup','manage_center','manage_client_logo','manage_contact',
'manage_contact_setup','manage_courses','manage_feature','manage_info','manage_logo','manage_mission','manage_post','manage_project',
'manage_project_type','manage_service','manage_skill','manage_slider','new_user','owner_profile_store','owner_profile','post_post','product_feature','product_feature_list','products','project','project_feature_save','project_feature_update','project_save',
'project_setup_save','question','question','question_create','save_about','save_career','save_center','save_client_logo','save_contact',
'save_contact_setup','save_courses','save_feature','save_info','save_logo','save_member','save_mission','save_post','save_service',
'save_skill','service','social','social_create','social_delete','social_edit','social_save','social_update','update_about',
'update_achievement','update_achievement_setup','update_bt','update_center','update_client_logo','update_contact','update_contact_setup',
'update_courses','update_feature','update_info','update_logo','update_mission','update_post','update_project','update_project_setup',
'update_service','update_skill','update_slider','user_delete','user_info','user_list','user_profile','user_update','vat_smart','exam_result_list','student_info','exam_mail','user_list','user_info','student_info','form_four','form_four_save','update_stu_info','payment','payment_history','add_slider','due_payment','delete_post','save_menu','menu','edit_menu','delete_menu','update_menu'];




         foreach($permissions as $key=>$line){
                    Gate::define($line, function ($user) use ($line) {
                       if($user->user_type =='admin'){
                            return true;
                       }

                       if($user->user_type =="center"){
                            if($line =='manage_center') return true;
                            if($line =='edit_center') return true;
                            if($line =='home') return true;
                            if($line =='student_info') return true;
                            if($line =='add_courses') return true;
                            if($line =='save_courses') return true;
                            if($line =='edit_courses') return true;
                            if($line =='update_courses') return true;
                            if($line =='manage_courses') return true;
                            if($line =='user_list') return true;
                            if($line =='user_info') return true;
                            if($line =='student_info') return true;
                            if($line =='form_four') return true;
                            if($line =='form_four_save') return true;
                            if($line =='payment') return true;
                            if($line =='payment_history') return true;
                            if($line =='due_payment') return true;
                       }


                       if($user->user_type =="student"){
                            if($line =='home') return true;
                            if($line =='form_four') return true;
                            if($line =='form_four_save') return true;
                            if($line =='payment') return true;
                       }
                        
                    });
                }

        //
    }
}
