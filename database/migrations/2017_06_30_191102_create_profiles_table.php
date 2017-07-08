<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->indexed();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->integer('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('affiliate')->nullable();
            $table->string('front_squat')->nullable();
            $table->string('back_squat')->nullable();
            $table->string('clean_and_jerk')->nullable();
            $table->string('snatch')->nullable();
            $table->string('deadlift')->nullable();
            $table->text('bio')->nullable();
            $table->string('img_link')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
