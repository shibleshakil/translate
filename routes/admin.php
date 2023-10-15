<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\PasswordController;

Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function (){
        abort(404);
        return redirect()->route('admin.auth.login');
    });

    /*authentication*/
    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::get('/login', [LoginController::class, 'showForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
            Route::get('/reset', [PasswordController::class, 'resetForm'])->name('request');
            Route::post('/reset', [PasswordController::class, 'submit']);
        });

    });

});
