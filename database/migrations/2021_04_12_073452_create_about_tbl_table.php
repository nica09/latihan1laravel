<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_tbl', function (Blueprint $table) {
            $table->increments('id_about');
            $table->string('counter',250);
            $table->string('stat_info',250);
            $table->string('video');
            $table->string('judul');
            $table->string('deskripsi',255);
            $table->string('vivamus',255);
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
        Schema::drop('about_tbl');
    }
}
