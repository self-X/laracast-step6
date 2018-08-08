<?php

namespace App\Listeners;

use App\Events\UserWasBanned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class EmailBanNotification //implements  ShouldQueue //contract which implements Queue provider
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasBanned  $event
     * @return void
     */
    public function handle(UserWasBanned $event)
    {
        //$this->mailer->sendBanNotification()
        var_dump('Notify'. $event->user->name. 'that they have been banned from the site.');
    }
}
