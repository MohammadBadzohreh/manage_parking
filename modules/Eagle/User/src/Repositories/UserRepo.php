<?php

namespace Eagle\User\Repositories;
use Eagle\User\Models\User;

class UserRepo
{
    public function paginate()
    {
//        todo chage line for paginateion
        return User::all();
    }

}
