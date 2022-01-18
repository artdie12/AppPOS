<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatPengaturanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atur', function (Blueprint $table) {
            $table->increments('ida');
            $table->string('nama_perusahaan');
            $table->text('alamat')->nullable();
            $table->string('telepon');
            $table->string('path_logo')->nullable();
            $table->tinyInteger('tipe_nota');
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
        Schema::dropIfExists('atur');
        
    }
}
