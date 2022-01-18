<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatBeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('beli', function (Blueprint $table) {
            $table->increments('idb');
            $table->integer('idsup');
            $table->integer('total_item');
            $table->integer('total_harga');
            $table->float('diskon')->default(0);
            $table->integer('bayar')->default(0);
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
        Schema::dropIfExists('beli');
      
    }
}
