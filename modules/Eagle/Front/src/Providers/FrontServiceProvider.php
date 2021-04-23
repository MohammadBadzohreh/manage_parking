<?php

namespace Eagle\Front\Providers;


use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    public function register()
    {
       $this->loadViewsFrom(__DIR__."./../Resources/Views","Front");
       $this->loadRoutesFrom(__DIR__."./../Routes/front-routes.php");
    }

    public function boot()
    {

    }
}
