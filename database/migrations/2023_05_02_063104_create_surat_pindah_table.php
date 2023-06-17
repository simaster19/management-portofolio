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
        Schema::create('surat_pindah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_profil_desa');
            $table->unsignedBigInteger('id_surat');

            $table->string('no_kk', 50);
            $table->string('nama_pemohon', 50);
            $table->string('jenis_permohonan', 100);

            $table->text('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('desa', 30);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->string('kode_pos', 10);

            $table->text('alamat_pindah');
            $table->string('rt_pindah', 5);
            $table->string('rw_pindah', 5);
            $table->string('desa_pindah', 30);
            $table->string('kecamatan_pindah', 30);
            $table->string('kota_pindah', 30);
            $table->string('kode_pos_pindah', 10);
            $table->string('alasan_pindah', 100);
            $table->string('jenis_kepindahan', 100);
            $table->string('anggota_keluarga_tidak_pindah', 100);
            $table->string('anggota_keluarga_yang_pindah', 100);

            $table->string('nama_sponsor', 50);
            $table->string('type_sponsor', 50);
            $table->text('alamat_sponsor', 50);
            $table->string('nomor_itas', 100);
            $table->date('masa_berlaku_itas');

            $table->string('negara_tujuan', 30);
            $table->text('alamat_tujuan');
            $table->string('kode_negara', 20);
            $table->string('penanggung_jawab', 50);
            $table->date('rencana_pindah_tanggal');
            $table->string('no_hp', 20);
            $table->string('email', 20);
            $table->string('ambil', 20);
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
        Schema::dropIfExists('surat_pindah');
    }
};
