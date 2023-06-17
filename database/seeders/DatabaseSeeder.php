<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'name' => 'Miftakhul Kirom',
            'foto' => 'coba.jpg',
            'email' => 'test@example.com',
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);
    }
}
