<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => Hash::make('john123')],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => Hash::make('jane123')],
            ['name' => 'Alice Brown', 'email' => 'alice@example.com', 'password' => Hash::make('alice123')],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'password' => Hash::make('bob123')],
            ['name' => 'Charlie Lee', 'email' => 'charlie@example.com', 'password' => Hash::make('charlie123')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
