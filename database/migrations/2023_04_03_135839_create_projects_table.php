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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->text('cover');
            $table->string('jenis_project');
            $table->string('judul')->unique();
            $table->string('slug');
            $table->text('project_url');
            $table->string('dibuat_dengan');
            $table->string('nama_client', 50);
            $table->text('keterangan');
            $table->string('status', 50)->default('PERSONAL'); //PERSONAL, FREELANCE, COURSE
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
