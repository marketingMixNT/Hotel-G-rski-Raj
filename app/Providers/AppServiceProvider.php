<?php

namespace App\Providers;

use Livewire\Livewire;
use App\Models\Apartment;
use App\Observers\ApartmentObserver;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Shared\MobileButtons;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Apartment::observe(ApartmentObserver::class);
        Blade::component('shared.MobileButtons', MobileButtons::class);

       
    }
}
