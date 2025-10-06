<?php

namespace Database\Seeders;

use App\Models\Expence;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expenses = [
            ['user_id' => 1, 'title' => 'Groceries', 'description' => 'Weekly groceries', 'amount' => 75.50, 'expense_date' => '2025-10-01'],
            ['user_id' => 1, 'title' => 'Electricity Bill', 'description' => 'Monthly electricity', 'amount' => 120.00, 'expense_date' => '2025-10-02'],
            ['user_id' => 2, 'title' => 'Internet', 'description' => 'Monthly internet subscription', 'amount' => 45.00, 'expense_date' => '2025-10-03'],
            ['user_id' => 2, 'title' => 'Fuel', 'description' => 'Car fuel', 'amount' => 60.00, 'expense_date' => '2025-10-04'],
            ['user_id' => 3, 'title' => 'Dining', 'description' => 'Restaurant dinner', 'amount' => 80.00, 'expense_date' => '2025-10-05'],
            ['user_id' => 3, 'title' => 'Books', 'description' => 'Educational books', 'amount' => 40.00, 'expense_date' => '2025-10-06'],
            ['user_id' => 4, 'title' => 'Gym', 'description' => 'Monthly gym fee', 'amount' => 35.00, 'expense_date' => '2025-10-07'],
            ['user_id' => 4, 'title' => 'Medical', 'description' => 'Doctor visit', 'amount' => 150.00, 'expense_date' => '2025-10-08'],
            ['user_id' => 5, 'title' => 'Clothes', 'description' => 'Shopping', 'amount' => 90.00, 'expense_date' => '2025-10-09'],
            ['user_id' => 5, 'title' => 'Transport', 'description' => 'Taxi rides', 'amount' => 50.00, 'expense_date' => '2025-10-10'],
        ];

        foreach ($expenses as $expense) {
            Expence::create($expense);
        }
    }
}
