<?php

namespace Eagle\User\Repositories;
use Eagle\User\Models\User;

class UserRepo
{

    public function findById($id)
    {
        return User::query()->find($id);
    }
    public function paginate()
    {
        return User::all();
    }

}
