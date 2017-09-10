<?php
namespace Emailer\Events;

use Emailer\Contracts\SenderEmailEvent;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Class SenderEmailAbstract
 * @package Emailer\Events
 */
abstract class SenderEmailAbstract implements SenderEmailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Mailable
     */
    public $mail;

    /**
     * @var string
     */
    public $eventId;

    /**
     * SenderEmailAbstract constructor.
     * @param Mailable $mail
     * @param array $context
     */
    public function __construct(Mailable $mail, array $context)
    {
        $this->mail = $mail;
        $this->mail->context = $context;
    }

    /**
     * Send email function
     * @throws \Exception
     * @return void
     */
    public function sendEmail()
    {
        if (empty($this->eventId)) {
            throw new \Exception('Not registered event');
        }
        $this->addRecipients();
        \Mail::send($this->mail);
    }

    /**
     * Add recipients to email
     *
     * @return void
     */
    abstract protected function addRecipients();
}