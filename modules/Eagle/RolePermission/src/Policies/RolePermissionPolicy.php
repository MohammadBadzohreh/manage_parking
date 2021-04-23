<?php

namespace Eagle\RolePermission\Policies;

use Eagle\RolePermission\Models\Permission;
use Eagle\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePermissionPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function manage(User $user)
    {
        return true; //todo hanle 403 error
        if ($user->hasPermissionTo(Permission::PERMISSION_MANAGE_ROLE_PERMISSION)) return true;
        return null;
    }

    public function store(User $user)
    {
        return true; //todo hanle 403 error
        if ($user->hasPermissionTo(Permission::PERMISSION_MANAGE_ROLE_PERMISSION)) return true;
        return null;
    }

    public function edit(User $user)
    {
        return true; //todo hanle 403 error
        if ($user->hasPermissionTo(Permission::PERMISSION_MANAGE_ROLE_PERMISSION)) return true;
        return null;
    }

    public function delete(User $user)
    {
        return true; //todo hanle 403 error
        if ($user->hasPermissionTo(Permission::PERMISSION_MANAGE_ROLE_PERMISSION)) return true;
        return null;
    }
}
