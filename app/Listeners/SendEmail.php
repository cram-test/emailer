<?php

namespace Emailer\Listeners;

use Emailer\Contracts\SenderEmailEvent;

class SendEmail
{
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