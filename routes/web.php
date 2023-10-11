<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('home');
Route::get('/language-professionals', [App\Http\Controllers\Web\WebController::class, 'languageProfessionals'])->name('languageProfessionals');
Route::get('/instant-quote', [App\Http\Controllers\Web\WebController::class, 'instantQuote'])->name('instantQuote');
Route::get('/contact-us', [App\Http\Controllers\Web\WebController::class, 'contactUs'])->name('contactUs');
Route::get('/fast-translation', [App\Http\Controllers\Web\WebController::class, 'fastTranslation'])->name('fastTranslation');
Route::get('/content-localization', [App\Http\Controllers\Web\WebController::class, 'contentLocalization'])->name('contentLocalization');
Route::get('/website-localization', [App\Http\Controllers\Web\WebController::class, 'websiteLocalization'])->name('websiteLocalization');
Route::get('/multilingual-seo', [App\Http\Controllers\Web\WebController::class, 'multilingualSeo'])->name('multilingualSeo');
Route::get('/multilingual-transcription', [App\Http\Controllers\Web\WebController::class, 'multilingualTranscription'])->name('multilingualTranscription');
Route::get('/audio-transcription', [App\Http\Controllers\Web\WebController::class, 'audioTranscription'])->name('audioTranscription');
Route::get('/video-transcription', [App\Http\Controllers\Web\WebController::class, 'videoTranscription'])->name('videoTranscription');
Route::get('/interpreting-services', [App\Http\Controllers\Web\WebController::class, 'interpretingServices'])->name('interpretingServices');
Route::get('/certified-translation', [App\Http\Controllers\Web\WebController::class, 'certifiedTranslation'])->name('certifiedTranslation');


Route::post('get-file', [App\Http\Controllers\FileController::class, 'getFile'])->name('getFile');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
