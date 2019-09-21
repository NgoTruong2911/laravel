<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_sp');
            $table->text('mota');
            $table->decimal('gia',9,3);
            $table->integer('soluong');
            // $table->integer('kho_id');
            $table->unsignedBigInteger('kho_id');
            $table->foreign('kho_id')->references('id')->on('kho'); // create foreign key
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
        Schema::dropIfExists('sanpham');
        Schema::enableForeignKeyConstraints();
    }
}
