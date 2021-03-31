<?php

namespace Eagle\User\Providers;

use Eagle\User\Models\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . "./../Routes/auth.php");
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations");
        $this->loadViewsFrom(__DIR__ . "./../Resources/Views", "User");
    }

    public function boot()
    {
        config()->set('auth.providers.users.model', User::class);
    }

}
