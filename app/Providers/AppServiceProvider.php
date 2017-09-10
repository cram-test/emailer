<?php

namespace Emailer\Providers;

use Emailer\Events\FeedbackEvent;
use Emailer\Events\UserRegisteredEvent;
use Emailer\Mail\Feedback;
use Emailer\Mail\UserRegistered;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(UserRegisteredEvent::class)->needs(Mailable::class)->give(UserRegistered::class);
        $this->app->when(FeedbackEvent::class)->needs(Mailable::class)->give(Feedback::class);
    }
}
