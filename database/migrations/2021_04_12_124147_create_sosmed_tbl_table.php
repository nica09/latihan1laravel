<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSosmedTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosmed_tbl', function (Blueprint $table) {
            $table->increments('id_contact');
            $table->string('icon');
            $table->string('facebook');
            $table->string('gmail');
            $table->string('twitter');
            $table->string('google_plus');
            $table->string('name');
            $table->string('openhours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sosmed_tbl');
    }
}
