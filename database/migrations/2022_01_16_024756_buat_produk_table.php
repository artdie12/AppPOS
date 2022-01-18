<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('idp');
            $table->integer('idk');
            $table->string('nama')->unique();
            $table->string('merek')->nullable();
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->float('diskon')->default(0);
            $table->integer('stok');            
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
        Schema::dropIfExists('produk');
    }
}
