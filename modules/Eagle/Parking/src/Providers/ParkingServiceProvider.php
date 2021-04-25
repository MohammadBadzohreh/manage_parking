<?php

namespace Eagle\Parking\Providers;

use Eagle\Parking\Models\Parking;
use Eagle\Parking\Policies\ParkingPolicy;
use Eagle\Payment\Policies\PaymentPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class ParkingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . "./../Routes/parking-routes.php");
        $this->loadViewsFrom(__DIR__ . "./../Resources/Views", "Parking");
        $this->loadJsonTranslationsFrom(__DIR__ . "./../Resources/Lang");
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations/2021_04_10_084451_create_parking_table.php");
        Gate::policy(Parking::class, ParkingPolicy::class);
    }

    public function boot()
    {

    }
}
