<?php

namespace Eagle\User\Policies;

use Eagle\RolePermission\Models\Permission;
use Eagle\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {

    }

    public function manage(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_USERS)) return true;
        return false;
    }
}
