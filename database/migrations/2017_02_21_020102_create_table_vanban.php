<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVanban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vanban', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('loaivb_id')->references('id')->on('loaivb');
          $table->string('kihieu');
          $table->date('ngayki');
          $table->integer('nguoiki_id')->references('id')->on('users');
          $table->date('ngaybanhanh');
          $table->string('trichyeu');
          $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('vanban');
    }
}
