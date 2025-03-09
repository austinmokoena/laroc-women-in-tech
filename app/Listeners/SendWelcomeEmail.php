<?php

namespace App\Listeners;

use App\Notifications\WelcomeEmail;
use Illuminate\Auth\Events\Registered;

class SendWelcomeEmail
{
    public function handle(Registered $event)
    {
        $event->user->notify(new WelcomeEmail());
    }
}