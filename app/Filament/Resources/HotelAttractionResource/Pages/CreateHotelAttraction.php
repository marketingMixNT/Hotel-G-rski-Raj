<?php

namespace App\Filament\Resources\HotelAttractionResource\Pages;

use App\Filament\Resources\HotelAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHotelAttraction extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;
    protected static string $resource = HotelAttractionResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
           
        ];
    }
}
