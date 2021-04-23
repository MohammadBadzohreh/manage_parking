<?php

namespace Eagle\User\Http\Controllers;
use App\Http\Controllers\Controller;
use Eagle\User\Repositories\UserRepo;

class UserController extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {

        $this->userRepo = $userRepo;
    }

    public function index()
    {
        $users =$this->userRepo->paginate();
        return view("User::index",compact("users"));
    }

}
