<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('nid')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('height_edu_l')->nullable();
            $table->string('height_edu_y')->nullable();
            $table->string('height_edu_r')->nullable();
            $table->text('academic_background')->nullable();
            $table->string('first_language')->nullable();
            $table->string('other_language')->nullable();
            $table->string('english_skill_l')->nullable();
            $table->string('english_skill_r')->nullable();
            $table->string('english_skill_s')->nullable();
            $table->string('english_skill_w')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('center_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('session_id')->nullable();
            $table->string('ms_w_skill')->nullable();
            $table->string('ms_e_skill')->nullable();
            $table->string('ms_pp_skill')->nullable();
            $table->string('ms_out_skill')->nullable();
            $table->string('have_laptop')->nullable();
            $table->string('have_internet')->nullable();
            $table->string('interest')->nullable();
            $table->string('feature_yourself')->nullable();
            $table->string('ex_in_freel')->nullable();
            $table->string('year_of_ex_fl')->nullable();
            $table->string('specify_area')->nullable();
            $table->string('have_work_ex')->nullable();
            $table->string('year_of_work_ex')->nullable();
            $table->integer('status')->nullable();
            $table->integer('exam_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_information');
    }
}
