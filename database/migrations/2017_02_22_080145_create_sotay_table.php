<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSotayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('sotay', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('nguoitao')->unsigned();
             $table->foreign('nguoitao')->references('id')->on('users');
             $table->string('tieude');
             $table->string('diadiem')->nullable();
             $table->text('noidung');
             $table->string('tepdinhkem')->nullable();
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
         //
         Schema::dropIfExists('sotay');
     }
}
