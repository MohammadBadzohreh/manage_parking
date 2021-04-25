<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Eagle\RolePermission\Http\Controllers',
    'middleware' => ['web', 'auth', 'verified']], function ($router) {
    $router->resource("permissions", "RolePermissionsController");

});

