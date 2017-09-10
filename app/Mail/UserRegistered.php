<?php

namespace Emailer\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    public $context;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user_registered');
    }
}
