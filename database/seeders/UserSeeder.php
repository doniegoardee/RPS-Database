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
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'user_role' => 1,
            'password' => Hash::make('password'),
        ]);

        User::insert([
            [
                'name' => 'Viewer',
                'email' => 'viewer@gmail.com',
                'user_role' => 0,
                'password' => Hash::make('password')],

        ]);
    }
}
