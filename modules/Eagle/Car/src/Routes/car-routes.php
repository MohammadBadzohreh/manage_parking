<?php

use Illuminate\Support\Facades\Route;
use Eagle\Car\Http\Controllers\CarController;


Route::group(["middleware" => ["web", "auth"]], function ($router) {
    $router->get("/car", [CarController::class, "index"])->name("car.index");
    $router->get("/car/create", [CarController::class, "create"])->name("car.create");
    $router->post("/car/store", [CarController::class, "store"])->name("car.store");
    $router->get("/car/edit/{id}", [CarController::class, "edit"])->name("car.edit");
    $router->put("/car/update/{id}", [CarController::class, "update"])->name("car.update");
    $router->delete("/car/delete/{id}", [CarController::class, "delete"])->name("car.delete");

    $router->post("/car/{parking:id}/buy", [CarController::class, "buy"])->name("parking.buy");
});
