<?php

use Illuminate\Support\Facades\Route;
use Eagle\Front\Http\Controllers\FrontController;
Route::group(["middleware"=>["web"]],function ($router){
    $router->get("/", [FrontController::class, "index"])->name("car.index");

});
