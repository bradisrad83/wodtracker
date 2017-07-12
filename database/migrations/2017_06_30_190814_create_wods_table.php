<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->indexed();
            $table->text('strength')->nullable();
            $table->text('strength_notes')->nullable();
            $table->string('wod_type')->nullable();
            $table->text('wod')->nullable();
            $table->string('wod_results')->nullable();
            $table->text('wod_notes')->nullable();
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
        Schema::dropIfExists('wods');
    }
}
