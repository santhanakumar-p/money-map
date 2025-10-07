<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DailyTransactionSummaryMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $expenses;
    public $incomes;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $expenses, $incomes)
    {
        $this->user = $user;
        $this->expenses = $expenses;
        $this->incomes = $incomes;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Daily Expense & Income Summary',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.daily-expense-income-summary',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
