<?php

namespace App\Filament\Resources\AmenityResource\Pages;

use App\Filament\Resources\AmenityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmenities extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = AmenityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
