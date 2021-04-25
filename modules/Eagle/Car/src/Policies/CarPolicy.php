<?php

namespace Eagle\Car\Policies;

use Eagle\Car\Models\Car;
use Eagle\RolePermission\Models\Permission;
use Eagle\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function functions(User $user, Car $car)
    {
        if ($user->hasPermissionTo(Permission::SUPER_ADMIN)
            || $user->hasPermissionTo(Permission::MANAGE_CARS)
            || $user->id == $car->user_id) return true;
        return null;
    }
}
