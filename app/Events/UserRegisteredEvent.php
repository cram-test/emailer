<?php
namespace Emailer\Events;

use Emailer\User;
use Illuminate\Contracts\Mail\Mailable;

class UserRegisteredEvent extends SenderEmailAbstract
{
    /**
     * @var string
     */
    public $eventId = 'user.registered';

    /**
     * @var User
     */
    public $user;

    /**
     * UserRegisteredEvent constructor.
     *
     * @param Mailable $mail
     * @param array $context
     */
    public function __construct(Mailable $mail, array $context)
    {
        parent::__construct($mail, $context);
        $this->user = $context['user'];
        $this->mail->context = $context;
    }

    /**
     * @inheritdoc
     */
    protected function addRecipients()
    {
        $this->mail->to($this->user);
    }
}