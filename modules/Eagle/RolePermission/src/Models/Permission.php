<?php

namespace Eagle\RolePermission\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    const MANAGE_PARKING = "manage parking";
    const SUPER_ADMIN = "super admin";
    const MANAGE_ROLE_PERMISSION = "manage role permission";
    const MANAGE_CARS = "manage cars";
    const MANAGE_TRANSACTIONS = "manage transactions";
    const MANAGE_USERS = "manage users";

    static $Permissions = [
        self::MANAGE_PARKING,
        self::SUPER_ADMIN,
        self::MANAGE_ROLE_PERMISSION,
        self::MANAGE_CARS,
        self::MANAGE_TRANSACTIONS,
        self::MANAGE_USERS,
    ];
}
