<?php

namespace Emailer\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Feedback extends Mailable
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
        return $this->markdown('emails.feedback');
    }
}
