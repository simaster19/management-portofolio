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
        Schema::create('saksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('pekerjaan', 50);
            $table->text('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('desa', 30);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->integer('type_saksi'); //Saksi 1 2
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
        Schema::dropIfExists('saksi');
    }
};
