<?php

Route::get('/boot', function () {
    return view('welcome');
});
    
Route::match(['get', 'post'], '/botman', 'BotManController@handle');


Route::fallback(function() {
    return redirect('/');
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exiCode = Artisan::call('config:clear');
   
    // return what you want
});
// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
// Home Content Here
Route::get('/', 'HomePageController@index');

// Menu Part Start Here
Route::get('add_menu', 'MenuController@create')->middleware("can:add_menu");
Route::get('edit_menu', 'MenuController@edit')->middleware("can:edit_menu");
Route::post('save_menu', 'MenuController@store')->middleware("can:save_menu");
Route::post('update_menu', 'MenuController@update')->middleware("can:update_menu");
Route::get('menu', 'MenuController@index')->middleware("can:menu");
Route::get('edit_menu/{id}', 'MenuController@edit')->middleware("can:edit_menu");
Route::get('delete_menu/{id}', 'MenuController@delete')->middleware("can:delete_menu");

// Home Page Part Start Here
Route::get('home_page', 'HomePageController@index');
Route::get('student-registration', 'HomePageController@studentRegistration');
Route::post('student_info_save', 'HomePageController@studentInfoSave');

Route::get('assessment/{id}', 'HomePageController@Assessment');
Route::post('question_paper_fetch', 'HomePageController@question_paper_fetch');

Route::any('check-answer', 'HomePageController@checkAnswer');
Route::any('program/{id}', 'HomePageController@courseDetails');
Route::any('program', 'HomePageController@program');
Route::any('form-four', 'HomePageController@formFour')->middleware("can:form_four");
Route::post('form-four-save', 'HomePageController@formFourSave')->middleware("can:form_four_save");
Route::post('exam-result-save', 'HomePageController@examResultSave');



// About Part Start Here
Route::get('about', 'HomePageController@about');
Route::get('contact', 'HomePageController@contact');
Route::get('gallery', 'HomePageController@galary');

// Apply Now 
Route::get('apply', 'HomePageController@applynow');




Route::get('user-profile','HomeController@userProfile')->middleware("can:user_profile");
Route::post('user-update','HomeController@userUpdate')->middleware("can:user_update");
Route::get('new-user','HomeController@newUser')->middleware("can:new_user");
Route::get('user-list','HomeController@userList')->middleware("can:user_list");
Route::get('user-info/{id}','HomeController@userEdit')->middleware("can:user_info");
Route::get('user-delete/{id}','HomeController@userDelete')->middleware("can:user_delete");
Route::get('payment','HomePageController@payment')->middleware("can:payment");
Route::get('payment_response','HomePageController@payment_response');
Route::get('due_payment','HomePageController@due_payment')->middleware("can:due_payment");;

//======================
// StudentController
//======================
Route::get('student-info','StudentController@index')->middleware('can:student_info');
Route::get('student-info/{id}','StudentController@show')->middleware("can:student_info");
Route::get('exam-mail/{id}','StudentController@examMail')->middleware("can:exam_mail");
Route::get('exam-result-list','StudentController@examResultList')->middleware("can:exam_result_list");
Route::get('check_new_student','StudentController@check_new_student')->middleware("can:check_new_student");
Route::get('update_stu_info','StudentController@update_stu_info')->middleware("can:update_stu_info");
Route::get('payment_history','StudentController@payment_history')->middleware("can:payment_history");



// Contact Part Start Here

Route::post('contact', 'ContactController@SendMessage');
Route::get('customer-message', 'ContactController@customerMessage');
Route::get('vat-smart', 'ContactController@vatSmart')->middleware("can:vat_smart");


//Question Controller Section
Route::get('question-create','QuestionController@create')->middleware("can:question_create");
Route::get('question','QuestionController@index')->middleware("can:question");
Route::post('question','QuestionController@store')->middleware("can:question");
Route::get('edit_question/{id}','QuestionController@edit')->middleware("can:edit_question");
Route::get('delete_question/{id}','QuestionController@delete')->middleware("can:delete_question");
//social media controller

Route::get('social','SocialController@index')->middleware("can:social");
Route::get('social-create','SocialController@create')->middleware("can:social_create");
Route::post('social-save','SocialController@store')->middleware("can:social_save");
Route::get('social-edit/{id}','SocialController@edit')->middleware("can:social_edit");
Route::post('social-update','SocialController@update')->middleware("can:social_update");
Route::get('social-delete/{id}','SocialController@delete')->middleware("can:social_delete");

// Event Part Start Here
Route::get('event', 'EventController@index');

// Career Part Start Here
Route::get('career', 'CareerController@index')->middleware("can:career");
Route::get('add_career', 'CareerController@create')->middleware("can:add_career");
Route::post('save_career', 'CareerController@store')->middleware("can:save_career");
Route::get('edit_career', 'CareerController@edit')->middleware("can:edit_career");
Route::get('delete_career/{id}', 'CareerController@deleteCareer')->middleware("can:delete_career");


// Team Member Part Start Here
Route::get('add_member', 'TeamMemberController@create')->middleware("can:add_member");
Route::get('edit_member', 'TeamMemberController@edit')->middleware("can:edit_member");
Route::post('save_member', 'TeamMemberController@store')->middleware("can:save_member");

// Skill Part Start Here
Route::get('add_skill', 'SkillController@create')->middleware("can:add_skill");
Route::post('save_skill', 'SkillController@store')->middleware("can:save_skill");
Route::get('edit_skill/{id}', 'SkillController@edit')->middleware("can:edit_skill");
Route::post('update_skill', 'SkillController@update')->middleware("can:update_skill");
Route::get('manage_skill', 'SkillController@manageSkill')->middleware("can:manage_skill");
Route::get('delete_skill/{id}', 'SkillController@deleteSkill')->middleware("can:delete_skill");

// Skill Part Start Here
Route::get('add_info', 'SCInfoController@create')->middleware("can:add_info");
Route::post('save_info', 'SCInfoController@store')->middleware("can:save_info");
Route::get('edit_info/{id}', 'SCInfoController@edit')->middleware("can:edit_info");
Route::post('update_info', 'SCInfoController@update')->middleware("can:update_info");
Route::get('manage_info', 'SCInfoController@manageSCInfo')->middleware("can:manage_info");
Route::get('delete_info/{id}', 'SCInfoController@deleteSCInfo')->middleware("can:delete_info");
Route::get('change_b_t', 'SCInfoController@change_b_t')->middleware("can:change_b_t");
Route::post('update_bt', 'SCInfoController@update_bt')->middleware("can:update_bt");


//// Contact Part Start Here
//Route::get('add_contact', 'ContactController@create');
//Route::post('save_contact', 'ContactController@store');
//Route::get('edit_contact/{id}', 'ContactController@edit');
//Route::post('update_contact', 'ContactController@update');
//Route::get('manage_contact', 'ContactController@manageContact');

// Logo Part Start Here
Route::get('add_logo', 'LogoController@create')->middleware("can:add_logo");
Route::post('save_logo', 'LogoController@store')->middleware("can:save_logo");
Route::get('edit_logo/{id}', 'LogoController@edit')->middleware("can:edit_logo");
Route::post('update_logo', 'LogoController@update')->middleware("can:update_logo");
Route::get('manage_logo', 'LogoController@manageLogo')->middleware("can:manage_logo");
Route::get('delete_logo/{id}', 'LogoController@deleteLogo')->middleware("can:delete_logo");
Route::get('owner-profile', 'ProfileController@index')->middleware("can:owner_profile");
Route::post('owner-profile', 'ProfileController@store');

// Client Logo Part Start Here
Route::get('add_client-logo', 'ClientLogoController@create')->middleware("can:add_client_logo");
Route::post('save_client-logo', 'ClientLogoController@store')->middleware("can:save_client_logo");
Route::get('edit_client-logo/{id}', 'ClientLogoController@edit')->middleware("can:edit_client_logo");
Route::post('update_client-logo', 'ClientLogoController@update')->middleware("can:update_client_logo");
Route::get('manage_client-logo', 'ClientLogoController@manageClientLogo')->middleware("can:manage_client_logo");
Route::get('delete_client-logo/{id}', 'ClientLogoController@deleteClientLogo')->middleware("can:delete_client_logo");

// Slider Part Start Here
Route::get('add_slider', 'SliderController@create')->middleware("can:add_slider");
Route::post('add_save', 'SliderController@store')->middleware("can:add_save");
Route::get('edit_slider/{id}', 'SliderController@edit')->middleware("can:edit_slider");
Route::post('update_slider', 'SliderController@update')->middleware("can:update_slider");
Route::get('manage_slider', 'SliderController@manageSlider')->middleware("can:manage_slider");
Route::get('delete_slider/{id}', 'SliderController@deleteSlider')->middleware("can:delete_slider");

// Mission Part Start Here
Route::get('add_mission', 'MissionController@create')->middleware("can:add_mission");
Route::post('save_mission', 'MissionController@store')->middleware("can:save_mission");
Route::get('edit_mission/{id}', 'MissionController@edit')->middleware("can:edit_mission");
Route::post('update_mission', 'MissionController@update')->middleware("can:update_mission");
Route::get('manage_mission', 'MissionController@manageMission')->middleware("can:manage_mission");
Route::get('delete_mission/{id}', 'MissionController@deleteMission')->middleware("can:delete_mission");
// TrainingCenter Start Here
Route::get('add_center', 'TrainingCenterController@create')->middleware("can:add_center");
Route::post('save_center', 'TrainingCenterController@store')->middleware("can:save_center");
Route::get('edit_center/{id}', 'TrainingCenterController@edit')->middleware("can:edit_center");
Route::post('update_center', 'TrainingCenterController@update')->middleware("can:update_center");
Route::get('manage_center', 'TrainingCenterController@managecenter')->middleware("can:manage_center");
Route::get('delete_center/{id}', 'TrainingCenterController@deletecenter')->middleware("can:delete_center");
// CoursesController Start Here
Route::get('add_courses', 'CourseController@create')->middleware("can:add_courses");
Route::post('save_courses', 'CourseController@store')->middleware("can:save_courses");
Route::get('edit_courses/{id}', 'CourseController@edit')->middleware("can:edit_courses");
Route::post('update_courses', 'CourseController@update')->middleware("can:update_courses");
Route::get('manage_courses', 'CourseController@manageCourses')->middleware("can:manage_courses");
Route::get('delete_courses/{id}', 'CourseController@deleteCourses')->middleware("can:delete_courses");

// Feature Part Start Here
Route::get('add_feature', 'FeatureController@create')->middleware("can:add_feature");
Route::post('save_feature', 'FeatureController@store')->middleware("can:save_feature");
Route::get('edit_feature/{id}', 'FeatureController@edit')->middleware("can:edit_feature");
Route::post('update_feature', 'FeatureController@update')->middleware("can:update_feature");
Route::get('manage_feature', 'FeatureController@manageFeature')->middleware("can:manage_feature");
Route::get('delete_feature/{id}', 'FeatureController@deleteFeature')->middleware("can:delete_feature");

// Service Part Start Here
Route::get('add_service', 'ServiceController@create')->middleware("can:add_service");
Route::post('save_service', 'ServiceController@store')->middleware("can:save_service");
Route::get('edit_service/{id}', 'ServiceController@edit')->middleware("can:edit_service");
Route::post('update_service', 'ServiceController@update')->middleware("can:update_service");
Route::get('manage_service', 'ServiceController@manageService')->middleware("can:manage_service");
Route::get('delete_service/{id}', 'ServiceController@deleteService')->middleware("can:delete_service");

// About Part Start Here
Route::get('add_about', 'AboutController@create')->middleware("can:add_about");
Route::post('save_about', 'AboutController@store')->middleware("can:save_about");
Route::get('edit_about/{id}', 'AboutController@edit')->middleware("can:edit_about");
Route::post('update_about', 'AboutController@update')->middleware("can:update_about");
Route::get('manage_about', 'AboutController@manageAbout')->middleware("can:manage_about");
Route::get('delete_about/{id}', 'AboutController@deleteAbout')->middleware("can:delete_about");

// Contact Part Start Here
Route::get('add_contact_setup', 'ContactSetupController@create')->middleware("can:add_contact_setup");
Route::post('save_contact_setup', 'ContactSetupController@store')->middleware("can:save_contact_setup");
Route::get('edit_contact_setup/{id}', 'ContactSetupController@edit')->middleware("can:edit_contact_setup");
Route::post('update_contact_setup', 'ContactSetupController@update')->middleware("can:update_contact_setup");
Route::get('manage_contact_setup', 'ContactSetupController@manageContactSetup')->middleware("can:manage_contact_setup");
Route::get('delete_contact_setup/{id}', 'ContactSetupController@deleteContactSetup')->middleware("can:delete_contact_setup");

// Contact Part Start Here
Route::get('add_contact', 'ContactController@create')->middleware("can:add_contact");
Route::post('save_contact', 'ContactController@store')->middleware("can:save_contact");
Route::get('edit_contact/{id}', 'ContactController@edit')->middleware("can:edit_contact");
Route::post('update_contact', 'ContactController@update')->middleware("can:update_contact");
Route::get('manage_contact', 'ContactController@manageContact')->middleware("can:manage_contact");
Route::get('delete_contact/{id}', 'ContactController@deleteContact')->middleware("can:delete_contact");

// Post Part Start Here
Route::get('post', 'PostController@index')->middleware("can:post_post");
Route::get('add_post', 'PostController@create')->middleware("can:add_post");
Route::post('save_post', 'PostController@store')->middleware("can:save_post");
Route::get('edit_post/{id}', 'PostController@edit')->middleware("can:edit_post");
Route::post('update_post/{id}', 'PostController@update')->middleware("can:update_post");
Route::get('manage_post', 'PostController@managePost')->middleware("can:manage_post");
Route::get('delete_post/{id}', 'PostController@delete_post')->middleware("can:delete_post");

// Project Setup Part Start Here
Route::get('add_project_type', 'ProjectSetupController@create')->middleware("can:add_project_type");
Route::post('project_setup_save', 'ProjectSetupController@store')->middleware("can:project_setup_save");
Route::get('edit_project_setup/{id}', 'ProjectSetupController@edit')->middleware("can:edit_project_setup");
Route::post('update_project_setup', 'ProjectSetupController@update');
Route::get('manage_project_type', 'ProjectSetupController@manageProjectSetup')->middleware("can:manage_project_type");
Route::get('delete_project_setup/{id}', 'ProjectSetupController@deleteProjectSetup')->middleware("can:delete_project_setup");

// Project Part Start Here
Route::get('project', 'ProjectController@index')->middleware("can:project");
Route::get('add_project', 'ProjectController@create')->middleware("can:add_project");
Route::post('project_save', 'ProjectController@store')->middleware("can:project_save");
Route::get('edit_project/{id}', 'ProjectController@edit')->middleware("can:edit_project");
Route::post('update_project', 'ProjectController@update')->middleware("can:update_project");
Route::get('manage_project', 'ProjectController@manageProject')->middleware("can:manage_project");
Route::get('product-feature', 'ProjectController@projectFeature')->middleware("can:project_feature_save");
Route::any('project-feature-save', 'ProjectController@projectFeatureSave')->middleware("can:project_feature_save");
Route::any('product-feature-list', 'ProjectController@projectFeatureList')->middleware("can:product_feature_list");
Route::any('project-feature-update', 'ProjectController@projectFeatureUpdate')->middleware("can:project_feature_update");
Route::any('edit-feature/{id}', 'ProjectController@editFeature')->middleware("can:edit_feature");
Route::any('delete-feature/{id}', 'ProjectController@deleteProjectFeature')->middleware("can:delete_feature");
Route::get('delete_project/{id}', 'ProjectController@deleteProject')->middleware("can:delete_project");

// Achievement Setup Part Start Here
Route::get('add_achievement_setup', 'AchievementSetupController@create')->middleware("can:add_achievement_setup");
Route::post('achievement_setup_save', 'AchievementSetupController@store')->middleware("can:achievement_setup_save");
Route::get('edit_achievement_setup/{id}', 'AchievementSetupController@edit')->middleware("can:edit_achievement_setup");
Route::post('update_achievement_setup', 'AchievementSetupController@update')->middleware("can:update_achievement_setup");
Route::get('manage_achievement_setup', 'AchievementSetupController@manageAchievementSetup')->middleware("can:manage_achievement_setup");
Route::get('delete_achievement_setup/{id}', 'AchievementSetupController@deleteAchievementSetup')->middleware("can:delete_achievement_setup");

// Achievement Part Start Here
Route::get('add_achievement', 'AchievementController@create')->middleware("can:add_achievement");
Route::post('achievement_save', 'AchievementController@store')->middleware("can:achievement_save");
Route::get('edit_achievement/{id}', 'AchievementController@edit')->middleware("can:edit_achievement");
Route::post('update_achievement', 'AchievementController@update')->middleware("can:update_achievement");
Route::get('manage_achievement', 'AchievementController@manageAchievement')->middleware("can:manage_achievement");
Route::get('delete_achievement/{id}', 'AchievementController@deleteAchievement')->middleware("can:delete_achievement");

// Web Solution Part Start Here
Route::get('products', 'WebSolutionController@index');

// Software Solution Part Start Here
Route::get('service', 'SoftwareSolutionController@index');

// Software Solution Part Start Here
Route::get('hosting', 'HostingController@index');

Route::post('sendquestion','ContactController@sendquestion');
Route::get('downlaodfile/{id}','ContactController@getDownload');

Route::post('aussubmitform','ContactController@aussubmitform');
Route::post('cansubmitform','ContactController@cansubmitform');

Route::get('studentallfile/{id}','ContactController@studentallfile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
