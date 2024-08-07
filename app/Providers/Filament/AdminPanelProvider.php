<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Firefly\FilamentBlog\Blog;
use Filament\Support\Colors\Color;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\IconResource;
use Awcodes\LightSwitch\Enums\Alignment;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\OfferResource;
use App\Filament\Resources\SlidesResource;
use Awcodes\LightSwitch\LightSwitchPlugin;
use Filament\Http\Middleware\Authenticate;
use App\Filament\Resources\AmenityResource;
use App\Filament\Resources\ApartmentResource;

use Filament\SpatieLaravelTranslatablePlugin;
use App\Filament\Resources\AdvantagesResource;
use App\Filament\Resources\AttractionResource;
use App\Filament\Resources\TestimonialResource;
use Illuminate\Session\Middleware\StartSession;
use App\Filament\Resources\CustomScriptResource;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Resources\MobileButtonsResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;

use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use Joaopaulolndev\FilamentGeneralSettings\FilamentGeneralSettingsPlugin;
use Outerweb\FilamentImageLibrary\Filament\Plugins\FilamentImageLibraryPlugin;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->passwordReset()
            ->login()
            ->brandLogo(asset('assets/logo/logo.png'))
            ->darkModeBrandLogo(asset('assets/logo/logo--white.png'))
            // ->brandLogoHeight('100px')
            ->brandLogoHeight(fn () => auth()->check() ? '40px' : '100px')

            ->brandName('Hotel Górski Raj')
            ->colors([
                'primary' => Color::Blue,
                'gray' => Color::Slate
            ])

            ->navigationItems([
                NavigationItem::make('Strona Główna')
                    ->url('https://gorskiraj.mmhub.pl', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-globe-alt')
            ])

            ->navigationGroups([
                'Strona Główna',
                "Informacje o Hotelu",
                'Oferty Specjalne',
                'Lokalne Atrakcje',
                'Strony Informacyjne',
                'Funkcjonalności'


            ])

            ->sidebarCollapsibleOnDesktop()

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')

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
                \Hasnayeen\Themes\Http\Middleware\SetTheme::class
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugin(SpatieLaravelTranslatablePlugin::make()->defaultLocales(['pl', 'en']),)

            ->plugins([
                FilamentEditProfilePlugin::make()
                    ->setIcon('heroicon-o-user')
            ])

            ->plugin(
                \Hasnayeen\Themes\ThemesPlugin::make()
            )
            ->plugins([
                LightSwitchPlugin::make()
            ]);
    }
}
