<?php

namespace Password\Auth\Reminders;

class ReminderServiceProvider extends \Illuminate\Auth\Reminders\ReminderServiceProvider
{
    /**
     * Register the password broker instance.
     *
     * @return void
     */
    protected function registerPasswordBroker()
    {
        $this->app->bindShared('auth.reminder', function($app)
        {
            // The reminder repository is responsible for storing the user e-mail addresses
            // and password reset tokens. It will be used to verify the tokens are valid
            // for the given e-mail addresses. We will resolve an implementation here.
            $reminders = $app['auth.reminder.repository'];

            $users = $app['auth']->driver()->getProvider();

            $view = $app['config']['auth.reminder.email'];

            // The password broker uses the reminder repository to validate tokens and send
            // reminder e-mails, as well as validating that password reset process as an
            // aggregate service of sorts providing a convenient interface for resets.
            return new PasswordBroker(

                $reminders, $users, $app->make('mailgun'), $view

            );
        });
    }
}