<?php

namespace Eagle\User\Providers;

use Eagle\RolePermission\Models\Permission;
use Eagle\User\Models\User;
use Eagle\User\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . "./../Routes/auth.php");
        $this->loadRoutesFrom(__DIR__ . "./../Routes/user-routes.php");
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations");
        $this->loadViewsFrom(__DIR__ . "./../Resources/Views", "User");
        config()->set("auth.providers.users.model", User::class);

        Gate::before(function (User $user) {
            return $user->hasPermissionTo(Permission::SUPER_ADMIN) ? true : null;
        });

        Gate::policy(User::class, UserPolicy::class);
    }

    public function boot()
    {
        config()->set('auth.providers.users.model', User::class);
    }

}
