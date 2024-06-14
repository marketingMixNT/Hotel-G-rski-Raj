<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\OfferResource;
use App\Filament\Resources\SlidesResource;
use Filament\Http\Middleware\Authenticate;
use Filament\SpatieLaravelTranslatablePlugin;
use App\Filament\Resources\AdvantagesResource;
use App\Filament\Resources\TestimonialResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            
            ->login()
            ->brandLogo(asset('assets/logo/logo.png'))
            ->darkModeBrandLogo(asset('assets/logo/logo--white.png'))
            // ->brandLogoHeight('100px')
            ->brandLogoHeight(fn()=>auth()->check() ?'40px':'100px')

            ->brandName('Hotel Górski Raj')
            ->colors([
                'primary' => Color::Blue,
                'gray' =>Color::Slate
            ])
            
            ->navigationItems([
                NavigationItem::make('Strona Główna')
                    ->url('http://localhost:8000', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-globe-alt')
            ])
            // ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->resources([
                SlidesResource::class,
                AdvantagesResource::class,
                OfferResource::class,
                TestimonialResource::class
            ])
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugin(SpatieLaravelTranslatablePlugin::make() ->defaultLocales(['pl', 'en']),)
            ;
            
    }
}
