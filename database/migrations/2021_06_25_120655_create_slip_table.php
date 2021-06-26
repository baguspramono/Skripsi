<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slip', function (Blueprint $table) {
            $table->id();
            $table->string('no_slip');
            $table->string('id_mobil');
            $table->string('tgl');
            $table->string('keterangan');
            $table->string('id_supir');
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
        Schema::dropIfExists('slip');
    }
}
