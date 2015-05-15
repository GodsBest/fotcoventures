<?php

namespace Password\Auth\Reminders;

use Bogardo\Mailgun\Mailgun;
use Illuminate\Auth\Reminders\ReminderRepositoryInterface;
use Illuminate\Auth\UserProviderInterface;

class PasswordBroker extends \Illuminate\Auth\Reminders\PasswordBroker {

    /**
     * @param ReminderRepositoryInterface $reminders
     * @param UserProviderInterface $users
     * @param Mailgun $mailer
     * @param string $reminderView
     */
    public function __construct(ReminderRepositoryInterface $reminders, UserProviderInterface $users, Mailgun $mailer, $reminderView)
    {
        $this->users = $users;
        $this->mailer = $mailer;
        $this->reminders = $reminders;
        $this->reminderView = $reminderView;
    }

}