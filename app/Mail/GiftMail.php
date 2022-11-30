<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GiftMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newGift)
    {
        $this->gift = $newGift;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $gift = $this->gift;
        return $this->view('email.gift', compact('gift'));
    }
}
