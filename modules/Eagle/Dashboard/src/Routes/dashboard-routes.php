<?php

use Illuminate\Support\Facades\Route;
use Eagle\Dashboard\Http\Controllers\DashboardController;

Route::group(['middleware' => 'web'], function ($router) {

    $router->get('/dashboard', [DashboardController::class, "index"])
        ->middleware(['auth', 'verified'])->name('dashboard');

});
