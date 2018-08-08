<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [ //when this hapens I wonna make sure  that we do:
            'App\Listeners\EventListener', //this and next listener ..etc
        ],
        //like an example
        'App\Events\UserWasBanned' =>[
          'App\Listeners\EmailBanNotification', //php artisan event:genarate will created these files
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
