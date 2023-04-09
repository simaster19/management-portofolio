<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Miftakhul Kirom',
            'foto' => 'coba.jpg',
            'email' => 'test@example.com',
            'username' => 'admin',
            'password' => '$2y$10$ADoNbcA0nRQ8mMEIxPk0F.xjFZUuu8ap87kvEKd5G00iFXH/7knGq'
        ]);
    }
}
