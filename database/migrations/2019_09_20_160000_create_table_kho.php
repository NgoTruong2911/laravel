<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_kho');
            $table->string('diachi_kho');
            $table->string('sdt_kho',11);
            // $table->integer('chukho_id');
            $table->unsignedBigInteger('chukho_id');
            $table->foreign('chukho_id')->references('id')->on('nguoidung');
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
        Schema::dropIfExists('kho');
        Schema::enableForeignKeyConstraints();
    }
}
