<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunfactsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funfacts_tbl', function (Blueprint $table) {
            $table->increments('id_funfacts');
            $table->string('gambar');
            $table->string('judul',50);
            $table->string('deskripsi',255);
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
        Schema::drop('funfacts_tbl');
    }
}
