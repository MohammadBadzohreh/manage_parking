<?php

use Illuminate\Support\Facades\Route;
use Eagle\Parking\Http\Controllers\ParkingController;

Route::group(["middleware" => ['web']], function ($router) {

    Route::group(["middleware"=>["auth"]],function ($router){
        $router->get("/parking", [ParkingController::class, "index"])
            ->name("parking.index");

        $router->get("/parking/create", [ParkingController::class, "create"])
            ->name("parking.create");

        $router->post("/parking/store", [ParkingController::class, "store"])
            ->name("parking.store");

        $router->get("/parking/edit/{id}", [ParkingController::class, "edit"])
            ->name("parking.edit");

        $router->put("/parking/update/{id}", [ParkingController::class, "update"])
            ->name("parking.update");

        $router->delete("/parking/delete/{id}", [ParkingController::class, "delete"])
            ->name("parking.delete");
    });


    $router->get("/parking/detail/{id}", [ParkingController::class, "detail"])
        ->name("parking.detail");



});
