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
        Schema::create('surat_pengantar_warga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_profil_desa');
            $table->unsignedBigInteger('id_surat');

            $table->string('nik', 50);
            $table->string('nama', 50);
            $table->string('no_kk', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('kewarganegaraan', 30);
            $table->string('agama', 30);
            $table->string('pekerjaan', 30);
            $table->text('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('desa', 30);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->string('keperluan', 100);
            $table->date('berlaku_tgl');
            $table->date('berakhir_tgl');
            $table->text('keterangan');
            $table->string('ambil', 30);
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
        Schema::dropIfExists('surat_pengantar_warga');
    }
};
