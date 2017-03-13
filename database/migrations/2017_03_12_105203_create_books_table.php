<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->bigInteger('isbn');
            $table->Integer('yearPub');
            $table->Integer('numberOfPrint');
            $table->Integer('pages');
            $table->string('language',10);
            $table->char('sizebook',4);
            $table->tinyinteger('numberOfFolder');
            $table->integer('copies');
            $table->integer('id_publish');
            $table->integer('id_typebook');
            $table->integer('price');
            $table->string('description',500);
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
        Schema::dropIfExists('books');
    }
}
