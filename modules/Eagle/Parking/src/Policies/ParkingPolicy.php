<?php

namespace Eagle\Parking\Policies;

use Eagle\RolePermission\Models\Permission;
use Eagle\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ParkingPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {

    }

    public function manage(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_PARKING)) return true;
        return false;
    }
}
