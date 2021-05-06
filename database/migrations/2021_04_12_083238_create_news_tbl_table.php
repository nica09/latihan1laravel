<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tbl', function (Blueprint $table) {
            $table->increments('id_news');
            $table->string('gambar');
            $table->string('judul',50);
            $table->string('deskripsi',255);
            $table->string('tags');
            $table->string('komentar',250);
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_tbl');
    }
}
