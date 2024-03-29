<?php

namespace Eagle\RolePermission\Repositories;

use Eagle\RolePermission\Models\Role;

class RoleRepo
{

    public function all()
    {
        return Role::all();
    }


    public function findById($id)
    {
        return Role::findOrFail($id);
    }


    public function store($request)
    {
        Role::create(['name' => $request->name])->syncPermissions($request->permissions);
    }

    public function update($id, $request)
    {
        $role = $this->findById($id);
        $role->syncPermissions($request->permissions)->update(["name" => $request->name]);
    }

    public function delete($id)
    {
        return Role::where("id", $id)->delete();
    }
}
