<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\ProductsStatusMoved' => [
            'App\Listeners\SendProductsStatusMovedNotice',
        ],
        'App\Events\ProductStatusMoveRequest' => [
            'App\Listeners\SendProductStatusMoveRequestNotice',
        ],
        'App\Events\CardboardSend' => [
            'App\Listeners\SendCardboardSendNotice',
        ],
        'App\Events\AdditionStockStatusMoved' => [
            'App\Listeners\SendAdditionStockStatusMovedNotice',
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
