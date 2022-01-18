<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatJualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual', function (Blueprint $table) {
            $table->increments('idj');
            $table->integer('idm');
            $table->integer('total_item');
            $table->integer('total_harga');
            $table->integer('diskon')->default(0);
            $table->integer('dibayar')->default(0);
            $table->integer('diterima')->default(0);
            $table->integer('idu');
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
        Schema::dropIfExists('jual');
        
    }
}
