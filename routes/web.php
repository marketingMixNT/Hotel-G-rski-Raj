<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OfferController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');

    Route::get('/apartamenty', [PageController::class, 'apartments'])->name('apartments');
    Route::get('/apartment/{slug}', [PageController::class, 'apartment'])->name('apartment');

    Route::get('/oferty-specjalne', [OfferController::class, 'offers'])->name('offers');
    Route::get('/oferta-specjalna/{slug}', [OfferController::class, 'offert'])->name('offer');




    Route::get('/lokalne-atrakcje', [PageController::class, 'localAttractions'])->name('localAttractions');


});



