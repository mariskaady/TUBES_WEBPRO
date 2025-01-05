<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'mariska',
            'email' => 'mariska@example.com',
            'role'=> 'pasien',
            'password'=> Hash::make('pasien')
        ]);
        User::factory()->create([
            'name' => 'petugas',
            'email' => 'petugas@example.com',
            'role'=> 'petugas',
            'password'=> Hash::make('petugas')
        ]);
    }
}
