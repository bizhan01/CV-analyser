<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonlInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personl_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('fullName');
            $table->string('profession');
            $table->date('dob');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('profileImage');
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
        Schema::dropIfExists('personl_infos');
    }
}
