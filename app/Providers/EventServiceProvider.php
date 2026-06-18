<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Domains\Order\Events\OrderCreated::class => [
            \App\Domains\Order\Listeners\OrderCreatedListener::class,
        ],
        \App\Domains\Order\Forward\Events\OrderForwarded::class => [
            \App\Domains\Order\Forward\Listeners\OrderForwardedListener::class,
        ],
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
