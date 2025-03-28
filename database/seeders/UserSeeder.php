<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::insert([
            [
                'name' => 'RPS',
                'email' => 'rps@gmail.com',
                'password' => Hash::make('password')],

        ]);
    }
}
