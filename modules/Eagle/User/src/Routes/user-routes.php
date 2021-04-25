<?php

use Illuminate\Support\Facades\Route;
use Eagle\User\Http\Controllers\UserController;

Route::group(["middleware" => ["web", "auth"]], function ($router) {
    $router->get("/user", [UserController::class, "index"])->name("user.index");
    $router->post("user/{user}/add-role",[ UserController::class,"addRole"])->name("add.role");
    $router->delete("/{user}/giveRole/{role}",[UserController::class, "giveRole"])->name("give.role.user");
});
