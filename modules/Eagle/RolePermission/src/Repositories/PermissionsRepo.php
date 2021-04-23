<?php
namespace Eagle\RolePermission\Repositories;

use Eagle\RolePermission\Models\Permission;

class PermissionsRepo{

    public function all()
    {
        return Permission::all();
    }
}
