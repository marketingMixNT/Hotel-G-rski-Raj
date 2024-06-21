<?php

namespace App\Filament\Resources\HotelAttractionResource\Pages;

use App\Filament\Resources\HotelAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHotelAttractions extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = HotelAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
