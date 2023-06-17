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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role', 50);
            $table->string('name', 100);
            $table->text('foto');
            $table->string('username', 50)->unique();
            $table->text('password');
            $table->integer('status')->default(1);
            $table->timestamps();
            // $table->id();
            // $table->string('roles')->default('USER');
            // $table->string('name');
            // $table->text('foto');
            // $table->text('background');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('username');
            // $table->text('password');
            // $table->rememberToken();
            // $table->softDeletes();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
