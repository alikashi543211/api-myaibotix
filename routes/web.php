<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){

    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::get('users', [UserController::class, 'index']);

});
