<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCuahangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cuahang', function (Blueprint $table) {
            $table->string('chucuahang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuahang', function (Blueprint $table) {
            //
        });
        Schema::table('cuahang', function (Blueprint $table) {
        $table->dropColumn('chucuahang');
        });
    }
}
