<?php

namespace Eagle\RolePermission\Database\Seeders;

use Eagle\RolePermission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    public function run()
    {
        foreach (Permission::$Permissions as $permission){
            Permission::query()->create([
                "name"=>$permission,
            ]);
        }
    }
}
