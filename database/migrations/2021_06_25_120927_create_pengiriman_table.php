<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pengirim');
            $table->string('alamat_pengirim');
            $table->string('hp_pengirim');
            $table->string('nm_penerima');
            $table->string('alamat_penerima');
            $table->string('hp_penerima');
            $table->string('barang');
            $table->string('no_resi');
            $table->string('tgl_pengirim');
            $table->string('ttl_pembayaran');
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
        Schema::dropIfExists('pengiriman');
    }
}
