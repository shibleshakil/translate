<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Web\WebController;

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
Route::get('/', function (){
    return redirect()->route('admin.auth.login');
});

Route::middleware(['maintenance'])->group(function () {
    Route::get('/home', [WebController::class, 'index'])->name('home');
    Route::get('/fast-translation', [WebController::class, 'fastTranslation'])->name('fastTranslation');
    Route::get('/content-localization', [WebController::class, 'contentLocalization'])->name('contentLocalization');
    Route::get('/website-localization', [WebController::class, 'websiteLocalization'])->name('websiteLocalization');
    Route::get('/multilingual-seo', [WebController::class, 'multilingualSeo'])->name('multilingualSeo');
    Route::get('/multilingual-transcription', [WebController::class, 'multilingualTranscription'])->name('multilingualTranscription');
    Route::get('/audio-transcription', [WebController::class, 'audioTranscription'])->name('audioTranscription');
    Route::get('/video-transcription', [WebController::class, 'videoTranscription'])->name('videoTranscription');
    Route::get('/interpreting-services', [WebController::class, 'interpretingServices'])->name('interpretingServices');
    Route::get('/certified-translation', [WebController::class, 'certifiedTranslation'])->name('certifiedTranslation');
    Route::get('/language-professionals', [WebController::class, 'languageProfessionals'])->name('languageProfessionals');
    Route::get('/instant-quote', [WebController::class, 'instantQuote'])->name('instantQuote');
    Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contactUs');

    Auth::routes();

    Route::get('/reliable-transcription', [WebController::class, 'reliableTranscription'])->name('reliableTranscription');
    Route::get('/professional-translation', [WebController::class, 'professionalTranslation'])->name('professionalTranslation');
    Route::get('/expert-interpreting', [WebController::class, 'expertInterpreting'])->name('expertInterpreting');
    Route::get('/get-started', [WebController::class, 'getStarted'])->name('getStarted');
    Route::get('/terms-and-conditions', [WebController::class, 'terms_and_conditions'])->name('terms-and-conditions');
    Route::get('/privacy-policy', [WebController::class, 'privacy_policy'])->name('privacy-policy');
    Route::get('/cookie-policy', [WebController::class, 'cookie_policy'])->name('cookie-policy');
    Route::get('/legal-translations', [WebController::class, 'legalTranslations'])->name('legalTranslations');
    Route::get('/technical-translation', [WebController::class, 'technicalTranslation'])->name('technicalTranslation');
    Route::get('/marketing-translation', [WebController::class, 'marketingTranslation'])->name('marketingTranslation');
    Route::get('/financial-translation', [WebController::class, 'financialTranslation'])->name('financialTranslation');
    Route::get('/website-translation', [WebController::class, 'websiteTranslation'])->name('websiteTranslation');
    Route::get('/document-translation', [WebController::class, 'documentTranslation'])->name('documentTranslation');
    Route::get('/solutions', [WebController::class, 'solutions'])->name('solutions');

    Route::post('get-file', [FileController::class, 'getFile'])->name('getFile');

});
