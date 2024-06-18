<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/apartamenty', [PageController::class, 'apartments'])->name('apartments');
    Route::get('/apartamenty/{id}', [PageController::class, 'apartment'])->name('apartment');
});
