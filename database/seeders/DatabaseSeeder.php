<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory()->count(10000)->create();

        // $this->call([
        //     UserSeeder::class,
        //     ExpenseSeeder::class,
        //     IncomeSeeder::class,
        // ]);
    }
}
