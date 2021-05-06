<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_tbl', function (Blueprint $table) {
            $table->increments('id_slider');
            $table->string('Gambar_slider');
            $table->string('Title',50);
            $table->string('Deskripsi',255);
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
        Schema::drop('slider_tbl');
    }
}
