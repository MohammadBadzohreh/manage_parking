<?php

namespace Eagle\Payment\Providers;

use Eagle\Payment\Gateways\Gateway;
use Eagle\Payment\Gateways\Zarinpal\ZarinpalAdaptor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    protected $namespace = "Eagle\Payment\Http\Controllers";

    public function register()
    {
        $this->app->register(EventServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations");
        Route::middleware("web")
            ->namespace($this->namespace)
            ->group(__DIR__ . "./../Routes/payment-routes.php");
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations");
        $this->loadViewsFrom(__DIR__ . "./../Resources/Views","Payment");
        $this->loadJsonTranslationsFrom(__DIR__ . "./../Resources/Lang");
    }

    public function boot()
    {
        $this->app->singleton(Gateway::class, function ($app) {
            return new ZarinpalAdaptor();
        });

    }

}
