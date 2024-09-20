<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('education', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('degree');
          $table->string('fieldOfStudy');
          $table->string('school');
          $table->string('city');
          $table->string('country');
          $table->string('end');
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
        Schema::dropIfExists('education');
    }
}
