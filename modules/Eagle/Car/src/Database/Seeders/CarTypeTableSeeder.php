<?php

namespace Eagle\Car\Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Car::$CARS_TYPE as $type){
            DB::table("car_types")->insert(["name"=>$type]);
        }
    }
}
