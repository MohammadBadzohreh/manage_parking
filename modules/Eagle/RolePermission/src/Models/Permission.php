<?php

namespace Eagle\RolePermission\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    const MANAGE_OWN_PARKING = "manage own parking";
    const MANAGE_PARKING = "manage parking";
    const SUPER_ADMIN = "super admin";

    static $Permissions = [
        self::MANAGE_OWN_PARKING,
        self::MANAGE_PARKING,
        self::SUPER_ADMIN,
    ];
}
