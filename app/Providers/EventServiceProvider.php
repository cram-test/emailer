<?php

namespace Emailer\Providers;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Emailer\Events\FeedbackEvent' => [
            'Emailer\Listeners\SendEmail',
        ],
        'Emailer\Events\UserRegisteredEvent' => [
            'Emailer\Listeners\SendEmail',
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
    }
}
