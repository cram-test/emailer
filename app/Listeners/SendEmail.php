<?php

namespace Emailer\Listeners;

use Emailer\Contracts\SenderEmailEvent;

class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  SenderEmailEvent  $event
     * @return void
     */
    public function handle(SenderEmailEvent $event)
    {
        $event->sendEmail();
    }
}