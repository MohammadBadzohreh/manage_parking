<?php


namespace Eagle\Payment\Providers;

use Eagle\Payment\Events\SuccessfulPayment;
use Eagle\Payment\Listeners\AddCarToParking;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SuccessfulPayment::class => [
            AddCarToParking::class,
        ]
    ];

    public function boot()
    {
        parent::boot();
    }

}
