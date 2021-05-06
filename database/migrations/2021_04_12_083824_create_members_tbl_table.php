<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_tbl', function (Blueprint $table) {
            $table->increments('id_member');
            $table->string('gambar');
            $table->string('nama',50);
            $table->string('deskripsi',255);
            $table->string('jabatan',100);
            $table->string('facebook');
            $table->string('email');
            $table->string('twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members_tbl');
    }
}
