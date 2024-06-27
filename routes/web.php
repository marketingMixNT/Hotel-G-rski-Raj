<?php

use App\Models\PrivacyPolicy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\RegulationsController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\HotelAttractionController;
use App\Http\Controllers\LocalAttractionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', HomeController::class)->name('home');

    Route::get('/apartamenty', [ApartmentsController::class, 'apartments'])->name('apartments.index');
    Route::get('/apartment/{slug}', [ApartmentsController::class, 'apartment'])->name('apartments.show');

    Route::get('/oferty-specjalne', [OfferController::class, 'offers'])->name('offers.index');
    Route::get('/oferta-specjalna/{slug}', [OfferController::class, 'offert'])->name('offers.show');

    Route::get('/atrakcje-hotelowe', [HotelAttractionController::class, 'hotelAttractions'])->name('hotel-attractions.index');
    Route::get('/atrakcja-hotelowa/{slug}', [HotelAttractionController::class, 'hotelAttraction'])->name('hotel-attractions.show');

    Route::get('/lokalne-atrakcje', LocalAttractionController::class)->name('local-attractions.index');

    Route::get('/galeria', GalleryController::class)->name('gallery.index');

    Route::get('/kontakt',[ContactController::class, 'index'])->name('contact.index');
    Route::post('/kontakt',[ContactController::class, 'form'])->name('contact.form');

    Route::get('/polityka-prywatnosci', PrivacyPolicyController::class)->name('privacy-policy');
    Route::get('/regulamin', RegulationsController::class)->name('regulations');


});



