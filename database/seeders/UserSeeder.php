<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Mario',
                'last_name' => 'Rossi',
                'email' => 'mario.rossi@example.com',
                'password' => 'password123',
            ],
            [
                'name' => 'Anna',
                'last_name' => 'Bianchi',
                'email' => 'anna.bianchi@example.com',
                'password' => 'mypassword',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
