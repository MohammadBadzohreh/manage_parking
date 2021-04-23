<?php

namespace Eagle\Car\Providers;

use Illuminate\Support\ServiceProvider;

class CarServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__."./../Resources/Views","Car");
        $this->loadRoutesFrom(__DIR__."./../Routes/car-routes.php");
        $this->loadJsonTranslationsFrom(__DIR__."./../Resources/Lang");
        $this->loadMigrationsFrom(__DIR__."./../Database/Migrations");
    }
    public function boot(){

    }
}
