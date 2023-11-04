<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\DashboardController;



Route::group(['middleware' => ['maintenance'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/{token}/redirect', [LoginController::class, 'loginWithToken'])->name('loginWithToken');

    Route::group(['middleware' => ['user']], function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
            Route::get('update', [AccountController::class, 'showPasswordForm'])->name('update');
            Route::post('update', [AccountController::class, 'updatePassword']);
        });

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [AccountController::class, 'profile'])->name('profile');
            Route::post('/basic-info', [AccountController::class, 'basicInfo'])->name('profile.basicInfo');
            Route::post('/education', [AccountController::class, 'education'])->name('profile.education');
            Route::post('/linguisticsServices', [AccountController::class, 'linguisticsServices'])->name('profile.linguisticsServices');
            Route::post('/lang-combination', [AccountController::class, 'langCombination'])->name('profile.lang-combination');
            Route::post('/experiences', [AccountController::class, 'experiences'])->name('profile.experiences');
            Route::post('/references', [AccountController::class, 'references'])->name('profile.references');
            Route::post('/catTools', [AccountController::class, 'catTools'])->name('profile.catTools');
            Route::post('/cvUpload', [AccountController::class, 'cvUpload'])->name('profile.cvUpload');

            Route::delete('lang-combination/delete/{id}', [AccountController::class, 'LangComdelete'])->name('lang-combination.delete');
            Route::delete('experience/delete/{id}', [AccountController::class, 'expdelete'])->name('experience.delete');
            Route::delete('references/delete/{id}', [AccountController::class, 'refdelete'])->name('references.delete');

        });

    });

});
