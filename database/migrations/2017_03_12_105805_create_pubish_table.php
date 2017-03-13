<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePubishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('country',100);
            $table->string('city',100);
            $table->string('address');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
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
        Schema::dropIfExists('publishs');
    }
}
