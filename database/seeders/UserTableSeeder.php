<?php

namespace Database\Seeders;

use Eagle\User\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name'=>"mohammad badzohreh",
            "email"=>"badzohreee@gmail.com",
            "email_verified_at"=>now(),
            "password"=>bcrypt("Mohammad100%"),
        ]);
    }
}
