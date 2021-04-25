<?php

namespace Eagle\User\Http\Controllers;
use App\Http\Controllers\Controller;
use Eagle\RolePermission\Models\Role;
use Eagle\User\Http\Requests\AddRoleRequest;
use Eagle\User\Models\User;
use Eagle\User\Repositories\UserRepo;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {

        $this->userRepo = $userRepo;
    }

    public function index()
    {
        $this->authorize("manage",User::class);
        $users =$this->userRepo->paginate();
        $roles = Role::all();
        return view("User::index",compact("users","roles"));
    }

    public function addRole($userId, AddRoleRequest $request)
    {
        $this->authorize("manage",User::class);
        $user = $this->userRepo->findById($userId);
        $user->assignRole($request->role);
        newFeedback("عملیات موفقیت آمیز", "با موفقیت اضافه شد.");
        return back();
    }

    public function giveRole($user, $role)
    {
        $this->authorize("manage",User::class);
        $user = $this->userRepo->findById($user);
        if ($user->removeRole($role)) {
            return response()->json(['message'=>'عملیات با موفقیت انجام شد.'],
                Response::HTTP_OK);
        }
        return response()->json(['message'=>'خطا در عملیات.'],
            Response::HTTP_INTERNAL_SERVER_ERROR);
    }

}
