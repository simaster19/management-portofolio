<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkat_rt_rw', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
            $table->string('nik')->unique();
            $table->string('nama', 100);
            $table->text('foto');
            $table->string('dusun', 50);
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('desa', 50);
            $table->string('kecamatan', 50);
            $table->string('kota', 50);
            $table->string('jabatan', 50); // RT RW
            $table->integer('status'); // 1 0
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
        Schema::dropIfExists('perangkat_rt_rw');
    }
};
