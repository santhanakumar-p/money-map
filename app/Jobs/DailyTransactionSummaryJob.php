<?php

namespace App\Jobs;

use App\Mail\DailyTransactionSummaryMail;
use App\Models\Expence;
use App\Models\Income;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class DailyTransactionSummaryJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $today = Carbon::today();
        $users = User::all();

        foreach ($users as $user) {
            $expenses = Expence::where('user_id', $user->id)
                ->whereDate('expense_date', $today)
                ->get();
            $incomes = Income::where('user_id', $user->id)
                ->whereDate('income_date', $today)
                ->get();

            if ($expenses->isEmpty() && $incomes->isEmpty()) {
                continue;
            }
            Mail::to($user->email)->send(new DailyTransactionSummaryMail($user, $expenses, $incomes));
        }
    }

}
