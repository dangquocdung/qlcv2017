<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFilevb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('filevb', function (Blueprint $table) {
           $table->increments('id');
           $table->string('filevb');
           $table->integer('vanban_id')->references('id')->on('vanban');
           $table->string('ghichu')->nullable();
           $table->timestamps();
       });    }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
       Schema::dropIfExists('filevb');
     }
}
