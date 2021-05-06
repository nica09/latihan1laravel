<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLetterTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_tbl', function (Blueprint $table) {
            $table->increments('id_letter');
            $table->string('news_letter');
            $table->string('gambar');
            $table->string('judul',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_tbl');
    }
}
