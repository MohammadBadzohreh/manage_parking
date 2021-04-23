<?php

namespace Eagle\RolePermission\Http\Controllers;

use App\Http\Controllers\Controller;
use Eagle\Common\Responses\AjaxResponses;
use Eagle\RolePermission\Http\Requests\RolePermissionStoreRequest;
use Eagle\RolePermission\http\Requests\UpdateRolerequest;
use Eagle\RolePermission\Models\Role;
use Eagle\RolePermission\Repositories\PermissionsRepo;
use Eagle\RolePermission\Repositories\RoleRepo;

class RolePermissionsController extends Controller
{

    private $RoleRepo;
    private $PermissionRepo;

    public function __construct(RoleRepo $RoleRepo, PermissionsRepo $permissionRepo)
    {
        $this->RoleRepo = $RoleRepo;
        $this->PermissionRepo = $permissionRepo;
    }

    public function index(PermissionsRepo $permissionRepo)
    {
        $this->authorize('manage', Role::class);
        $roles = $this->RoleRepo->all();
        $permissions = $this->PermissionRepo->all();
        return view("RolePermissions::index", compact("roles", "permissions"));
    }

    public function store(RolePermissionStoreRequest $request)
    {

        $this->authorize("store", Role::class);
        $this->RoleRepo->store($request);
        newFeedback("عملیات موفقیت آمیز", "عملیات با موفقیت انجام شد", "green");
        return redirect(route("permissions.index"));
    }

    public function edit($id)
    {
        $this->authorize("edit", Role::class);
        $role = $this->RoleRepo->findById($id);
        $permissions = $this->PermissionRepo->all();

        return view("RolePermissions::edit", compact("role", "permissions"));
    }

    public function update(UpdateRolerequest $request, $roleId)
    {
        $this->authorize("edit", Role::class);
        $this->RoleRepo->update($roleId, $request);
        newFeedback("عملیات موفقیت آمیز", "ویرایش با موفقیت انجام شد", "green");
        return redirect(route("permissions.index"));
    }

    public function destroy($roleId)
    {
        $this->authorize("delete", Role::class);
        $this->RoleRepo->delete($roleId);
        newFeedback("عملیات موفقیت آمیز", "حذف با موفقیت انجام شد!", "red");
        return redirect()->route("permissions.index");
    }

}
