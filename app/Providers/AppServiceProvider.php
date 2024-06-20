<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Apartment;
use App\Observers\ApartmentObserver;

use Illuminate\Support\Facades\Blade;
use App\View\Components\Shared\MobileButtons;

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
