<?php

namespace Database\Seeders;

use Eagle\Car\Database\Seeders\CarTypeTableSeeder;
use Eagle\RolePermission\Database\Seeders\PermissionTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CarTypeTableSeeder::class);
    }
}
