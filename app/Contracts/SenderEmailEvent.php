<?php
namespace Emailer\Contracts;

/**
 * Interface SendEmail
 * @package Emailer\Contracts
 */
interface SenderEmailEvent
{
    /**
     * Send email notification
     *
     * @return void
     */
    public function sendEmail();
}