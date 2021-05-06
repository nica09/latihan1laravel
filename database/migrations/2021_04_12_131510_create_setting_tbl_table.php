<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_tbl', function (Blueprint $table) {
            $table->increments('Set_webid');
            $table->string('Set_webicon');
            $table->string('Set_webname');
            $table->string('Set_webdeskripsi');
            $table->string('Set_webemail');
            $table->string('Set_webphone');
            $table->string('Set_webfacebook');
            $table->string('Set_webinstagram');
            $table->string('Set_webtwitter');
            $table->string('Set_webgoogleplus');
            $table->string('Set_webopenhours');
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
        Schema::drop('setting_tbl');
    }
}
