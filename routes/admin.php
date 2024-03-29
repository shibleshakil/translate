<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\CatToolsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\QuoteSettingController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Quote\SectorsController;
use App\Http\Controllers\Admin\BusinessSettingController;
use App\Http\Controllers\Admin\Quote\LanguagesController;
use App\Http\Controllers\Admin\LinguisticServiceController;
use App\Http\Controllers\Admin\ExperienceAndExpertiseController;

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


        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
            Route::get('/quote-settings', [QuoteSettingController::class, 'quoteSetting'])->name('quote-settings');
            Route::post('/quote-settings', [QuoteSettingController::class, 'quoteSettingUpdate']);

            Route::group(['prefix' => 'countries', 'as' => 'countries.'], function () {
                Route::get('/', [CountryController::class, 'index'])->name('index');
                Route::get('/create', [CountryController::class, 'create'])->name('create');
                Route::post('/store', [CountryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('edit');
                Route::post('/update', [CountryController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [CountryController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [CountryController::class, 'restore'])->name('restore');

            });

            Route::group(['prefix' => 'cities', 'as' => 'cities.'], function () {
                Route::get('/', [CityController::class, 'index'])->name('index');
                Route::get('/create', [CityController::class, 'create'])->name('create');
                Route::post('/store', [CityController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [CityController::class, 'edit'])->name('edit');
                Route::post('/update', [CityController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [CityController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [CityController::class, 'restore'])->name('restore');

            });

            Route::group(['prefix' => 'pricing', 'as' => 'pricing.'], function () {
                Route::get('/', [PricingController::class, 'index'])->name('index');
                Route::get('/create', [PricingController::class, 'create'])->name('create');
                Route::post('/store', [PricingController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [PricingController::class, 'edit'])->name('edit');
                Route::post('/update', [PricingController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [PricingController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [PricingController::class, 'restore'])->name('restore');

            });

            Route::group(['prefix' => 'languages', 'as' => 'languages.'], function () {
                Route::get('/', [LanguagesController::class, 'index'])->name('index');
                Route::get('/create', [LanguagesController::class, 'create'])->name('create');
                Route::post('/store', [LanguagesController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [LanguagesController::class, 'edit'])->name('edit');
                Route::post('/update', [LanguagesController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [LanguagesController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [LanguagesController::class, 'restore'])->name('restore');
                Route::post('/professional/status/{id}', [LanguagesController::class, 'professionalStatus'])->name('professionalStatus');
                Route::post('/quote/status/{id}', [LanguagesController::class, 'quoteStatus'])->name('quoteStatus');

            });

            Route::group(['prefix' => 'sectors', 'as' => 'sectors.'], function () {
                Route::get('/', [SectorsController::class, 'index'])->name('index');
                Route::get('/create', [SectorsController::class, 'create'])->name('create');
                Route::post('/store', [SectorsController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [SectorsController::class, 'edit'])->name('edit');
                Route::post('/update', [SectorsController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [SectorsController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [SectorsController::class, 'restore'])->name('restore');

            });

            Route::group(['prefix' => 'linguistic-service', 'as' => 'linguistic-service.'], function () {
                Route::get('/', [LinguisticServiceController::class, 'index'])->name('index');
                Route::get('/create', [LinguisticServiceController::class, 'create'])->name('create');
                Route::post('/store', [LinguisticServiceController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [LinguisticServiceController::class, 'edit'])->name('edit');
                Route::post('/update', [LinguisticServiceController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [LinguisticServiceController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [LinguisticServiceController::class, 'restore'])->name('restore');

            });

            Route::group(['prefix' => 'experience-and-expertise', 'as' => 'experience-and-expertise.'], function () {
                Route::get('/', [ExperienceAndExpertiseController::class, 'index'])->name('index');
                Route::get('/create', [ExperienceAndExpertiseController::class, 'create'])->name('create');
                Route::post('/store', [ExperienceAndExpertiseController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [ExperienceAndExpertiseController::class, 'edit'])->name('edit');
                Route::post('/update', [ExperienceAndExpertiseController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [ExperienceAndExpertiseController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [ExperienceAndExpertiseController::class, 'restore'])->name('restore');

            });

            Route::group(['prefix' => 'cat-tools', 'as' => 'cat-tools.'], function () {
                Route::get('/', [CatToolsController::class, 'index'])->name('index');
                Route::get('/create', [CatToolsController::class, 'create'])->name('create');
                Route::post('/store', [CatToolsController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [CatToolsController::class, 'edit'])->name('edit');
                Route::post('/update', [CatToolsController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [CatToolsController::class, 'delete'])->name('delete');
                Route::put('/restore/{id}', [CatToolsController::class, 'restore'])->name('restore');

            });

        });

        Route::group(['prefix' => 'business-settings', 'as' => 'business_settings.'], function () {
            Route::get('/maintenance-mode', [BusinessSettingController::class, 'maintenanceMode'])->name('maintenanceMode');
            Route::get('/', [BusinessSettingController::class, 'generalInfo'])->name('generalInfo');
            Route::post('/', [BusinessSettingController::class, 'generalInfoUpdate']);
            Route::get('/mail-config', [BusinessSettingController::class, 'mailConfig'])->name('mailConfig');
            Route::post('/mail-config', [BusinessSettingController::class, 'mailConfigUpdate']);
            Route::get('/sms-config', [BusinessSettingController::class, 'smsConfig'])->name('smsConfig');
            Route::post('/sms-config/{name}', [BusinessSettingController::class, 'smsConfigUpdate'])->name('smsConfigUpdate');
            Route::post('/test-mail', [BusinessSettingController::class, 'sendTestMail'])->name('sendTestMail');
            Route::get('/payment-method', [BusinessSettingController::class, 'paymentMethod'])->name('paymentMethod');
            Route::post('/payment-method/{name}', [BusinessSettingController::class, 'paymentMethodUpdate'])->name('paymentMethodUpdate');
        });

    });

});
