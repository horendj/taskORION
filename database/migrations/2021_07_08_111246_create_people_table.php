<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('email');
          $table->bigInteger('address_id')->unsigned();
          $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
          $table->string('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
