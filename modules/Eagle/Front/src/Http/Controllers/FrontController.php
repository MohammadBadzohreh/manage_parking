<?php

 namespace Eagle\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Eagle\Parking\Repositories\ParkingRepo;

class FrontController extends Controller
{
    public function index(ParkingRepo$parkingRepo)
    {
        $parkings = $parkingRepo->paginate();
        return view("Front::index",compact("parkings"));
    }
}
