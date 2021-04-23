<?php

use Illuminate\Support\Facades\Route;
use Eagle\User\Http\Controllers\UserController;

Route::group(["middleware" => ["web", "auth"]], function ($router) {
    $router->get("/user", [UserController::class, "index"])->name("user.index");
});
