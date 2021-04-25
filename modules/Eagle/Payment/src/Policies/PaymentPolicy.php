<?php

namespace Eagle\Payment\Policies;

use Eagle\RolePermission\Models\Permission;
use Eagle\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function manage(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_TRANSACTIONS)) return true;
        return false;
    }
}
