<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_centers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->srting('name')->nullable();
            $table->srting('address')->nullable();
            $table->srting('mobile')->nullable();
            $table->srting('start_date')->nullable();
            $table->srting('sender_mail')->nullable();
            $table->longText('mail_content')->nullable();
            $table->text('mail_footer')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('training_centers');
    }
}
