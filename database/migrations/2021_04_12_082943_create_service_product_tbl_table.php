<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProductTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_product_tbl', function (Blueprint $table) {
            $table->increments('id_service');
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
        Schema::drop('service_product_tbl');
    }
}
