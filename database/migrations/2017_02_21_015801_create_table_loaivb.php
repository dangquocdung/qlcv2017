<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoaivb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('loaivb', function (Blueprint $table) {
          $table->increments('id');
          $table->string('loaivb');
          $table->string('ghichu');
          $table->timestamps();
      });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('loaivb');
    }
}
