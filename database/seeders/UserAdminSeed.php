<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
            'name' => 'João Baptista Cachiombo',
            'email' => 'baptista@jonhsabores.com',
            'password' => Hash::make("123456"),
            'access_id' => 1,
        ]);
    }
}
