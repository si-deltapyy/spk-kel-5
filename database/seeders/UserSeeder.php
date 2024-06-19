<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'admin@test',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'name' => 'Prodi Informatika',
            'role' => 'Customer',
            'email' => 'if@test',
            'password' => Hash::make('123'),
        ]);
    }
}
