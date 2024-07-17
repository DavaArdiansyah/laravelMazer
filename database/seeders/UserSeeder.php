<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'gultom@mail.com',
            'password' => Hash::make('gultom123'),
            'role' => 'Admin',
        ]);
        User::create([
            'email' => 'forit@mail.com',
            'password' => Hash::make('forit123'),
            'role' => 'Perusahaan',
        ]);
        User::create([
            'email' => 'rasyad@mail.com',
            'password' => Hash::make('rasyad123'),
            'role' => 'Alumni',
        ]);
    }
}
