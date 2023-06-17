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
        Schema::create('surat_kelahiran', function (Blueprint $table) {
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
            //Anak/bayi
            $table->string('nama_anak', 50);
            $table->string('jenis_kelamin_anak', 50);
            $table->string('tempat_dilahirkan', 50);
            $table->string('tempat_kelahiran', 50);
            $table->string('hari', 50);
            $table->date('tanggal_lahir');
            $table->time('jam');
            $table->string('jenis_kelahiran', 50);
            $table->integer('kelahiran_ke');
            $table->string('penolong_kelahiran');
            $table->float('berat_bayi');
            $table->float('panjang_bayi');
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
        Schema::dropIfExists('surat_kelahiran');
    }
};
