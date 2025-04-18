<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $startDate;
    public $endDate;
    public $totalPrice;

    public function __construct($startDate, $endDate, $totalPrice)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->totalPrice = $totalPrice;
    }

    public function build()
    {
        return $this->subject('Confirmation de votre réservation')
            ->view('emails.email-reservation')
            ->with([
                'startDate' => $this->startDate,
                'endDate' => $this->endDate,
                'totalPrice' => $this->totalPrice,
            ]);
    }
}
