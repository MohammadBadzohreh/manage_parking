<?php

namespace Eagle\RolePermission\Providers;

use Closure;
use Eagle\RolePermission\Models\Role;
use Eagle\RolePermission\Policies\RolePermissionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class RolePermissionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations");
        $this->loadRoutesFrom(__DIR__ . "./../Routes/rolePermission-routes.php");
        $this->loadViewsFrom(__DIR__ . "./../Resources/Views", "RolePermissions");

        $this->loadJsonTranslationsFrom(__DIR__."./../Resources/Lang");

        Gate::policy(Role::class,RolePermissionPolicy::class);
    }

    public function boot()
    {

    }
}
