<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('db_kpop', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama_printilan');
            $table->String('kategori_printilan');
            $table->String('stock_printilan');
        

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
          Schema::dropIfExists('db_kpop');
    }
}
