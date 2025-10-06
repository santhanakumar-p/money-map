<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incomes = [
            ['user_id' => 1, 'source' => 'Salary', 'description' => 'Monthly salary', 'amount' => 3000.00, 'income_date' => '2025-10-01'],
            ['user_id' => 1, 'source' => 'Freelance', 'description' => 'Project payment', 'amount' => 500.00, 'income_date' => '2025-10-02'],
            ['user_id' => 2, 'source' => 'Investment', 'description' => 'Stock dividends', 'amount' => 200.00, 'income_date' => '2025-10-03'],
            ['user_id' => 2, 'source' => 'Gift', 'description' => 'Birthday gift', 'amount' => 100.00, 'income_date' => '2025-10-04'],
            ['user_id' => 3, 'source' => 'Selling Items', 'description' => 'Sold old laptop', 'amount' => 350.00, 'income_date' => '2025-10-05'],
            ['user_id' => 3, 'source' => 'Bonus', 'description' => 'Quarterly bonus', 'amount' => 400.00, 'income_date' => '2025-10-06'],
            ['user_id' => 4, 'source' => 'Rental', 'description' => 'Room rental', 'amount' => 600.00, 'income_date' => '2025-10-07'],
            ['user_id' => 4, 'source' => 'Refund', 'description' => 'Tax refund', 'amount' => 250.00, 'income_date' => '2025-10-08'],
            ['user_id' => 5, 'source' => 'Lottery', 'description' => 'Lottery win', 'amount' => 150.00, 'income_date' => '2025-10-09'],
            ['user_id' => 5, 'source' => 'Cashback', 'description' => 'Shopping cashback', 'amount' => 50.00, 'income_date' => '2025-10-10'],
        ];

        foreach ($incomes as $income) {
            Income::create($income);
        }
    }
}
