<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('tieudekhongdau');
            $table->string('TomTat');
            $table->string('NoiDung');
            $table->string('Hinh');
            $table->integer('NoiBat');
            $table->integer('LuotXem');
            $table->integer('idLoaiTin')->unsigned();
            $table->foreign('idLoaiTin')->references('id')->on('loai_tins')->onDelete('cascade');
            $table->integer('idtheloai')->unsigned();
            $table->foreign('idtheloai')->references('id')->on('the_loais')->onDelete('cascade');
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
        Schema::dropIfExists('tin_tucs');
    }
}
