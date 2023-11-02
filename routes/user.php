<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;



Route::group(['middleware' => ['maintenance'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/{token}', [LoginController::class, 'loginWithToken'])->name('loginWithToken');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
