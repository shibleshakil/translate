<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\BusinessSettingController;

Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function (){
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
            Route::get('/change', [PasswordController::class, 'update'])->name('update');
            Route::post('/change', [PasswordController::class, 'updateSubmit']);
        });

    });

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('edit-profile', [AccountController::class, 'profile'])->name('profile');
        Route::post('edit-profile', [AccountController::class, 'profileUpdate']);

        Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
            Route::get('update', [AccountController::class, 'showPasswordForm'])->name('update');
            Route::post('update', [AccountController::class, 'updatePassword']);
        });


        Route::group(['prefix' => 'business-settings', 'as' => 'business_settings.'], function () {
            Route::get('/maintenance-mode', [BusinessSettingController::class, 'maintenanceMode'])->name('maintenanceMode');
            Route::get('/', [BusinessSettingController::class, 'generalInfo'])->name('generalInfo');
            Route::post('/', [BusinessSettingController::class, 'generalInfoUpdate']);
            Route::get('/mail-config', [BusinessSettingController::class, 'mailConfig'])->name('mailConfig');
            Route::post('/mail-config', [BusinessSettingController::class, 'mailConfigUpdate']);
            Route::post('/test-mail', [BusinessSettingController::class, 'sendTestMail'])->name('sendTestMail');
            Route::get('/payment-method', [BusinessSettingController::class, 'paymentMethod'])->name('paymentMethod');
            Route::post('/payment-method/{name}', [BusinessSettingController::class, 'paymentMethodUpdate'])->name('paymentMethodUpdate');
        });

    });

});
