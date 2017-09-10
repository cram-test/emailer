<?php

namespace Emailer\Events;

use Emailer\Role;
use Emailer\User;
use Illuminate\Contracts\Mail\Mailable;

/**
 * Class FeedbackEvent
 * @package Emailer\Events
 */
class FeedbackEvent extends SenderEmailAbstract
{
    /**
     * @var string
     */
    public $eventId = 'receive.feedback';

    /**
     * @inheritdoc
     */
    protected function addRecipients()
    {
        $adminRole = Role::where('name', 'admin')->first();
        foreach ($adminRole->users()->get() as $recipient) {
            $this->mail->to($recipient);
        }
    }
}
