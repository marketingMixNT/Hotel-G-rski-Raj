<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\HotelAttractionController;
use App\Http\Controllers\LocalAttractionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Models\PrivacyPolicy;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', HomeController::class)->name('home');

    Route::get('/apartamenty', [ApartmentsController::class, 'apartments'])->name('apartments');
    Route::get('/apartment/{slug}', [ApartmentsController::class, 'apartment'])->name('apartment');

    Route::get('/oferty-specjalne', [OfferController::class, 'offers'])->name('offers');
    Route::get('/oferta-specjalna/{slug}', [OfferController::class, 'offert'])->name('offer');

    Route::get('/atrakcje-hotelowe', [HotelAttractionController::class, 'hotelAttractions'])->name('hotelAttractions');
    Route::get('/atrakcja-hotelowa/{slug}', [HotelAttractionController::class, 'hotelAttraction'])->name('hotelAttraction');

    Route::get('/lokalne-atrakcje', LocalAttractionController::class)->name('localAttractions');

    Route::get('/polityka-prywatnosci', PrivacyPolicyController::class)->name('privacyPolicy');


});



