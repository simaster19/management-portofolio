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
        Schema::create('surat_kematian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_profil_desa');
            $table->unsignedBigInteger('id_surat');
            $table->unsignedBigInteger('id_ibu');
            $table->unsignedBigInteger('id_ayah');
            $table->unsignedBigInteger('id_pelapor');
            $table->unsignedBigInteger('id_saksi');


            $table->string('nama_kk', 50);
            $table->string('no_kk', 50);
            //Jenazah
            $table->string('nik_jenazah', 50);
            $table->string('nama_jenazah', 50);
            $table->date('tanggal_lahir_jenazah');
            $table->integer('umur_jenazah');
            $table->string('tempat_lahir_jenazah', 50);
            $table->string('agama_jenazah', 30);
            $table->string('pekerjaan_jenazah', 30);
            $table->string('jenis_kelamin_jenazah', 30);
            $table->text('alamat_jenazah');
            $table->string('rt_jenazah', 5);
            $table->string('rw_jenazah', 5);
            $table->string('desa_jenazah', 30);
            $table->string('kecamatan_jenazah', 30);
            $table->string('kota_jenazah', 30);
            $table->integer('anak_ke_jenazah');
            $table->date('tanggal_kematian');
            $table->time('jam_kematian');
            $table->string('sebab_kematian', 100);
            $table->string('tempat_kematian', 100);
            $table->string('yang_menerangkan', 50);
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
        Schema::dropIfExists('surat_kematian');
    }
};
