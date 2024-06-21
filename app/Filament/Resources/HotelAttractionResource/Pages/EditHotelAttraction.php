<?php

namespace App\Filament\Resources\HotelAttractionResource\Pages;

use App\Filament\Resources\HotelAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHotelAttraction extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HotelAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
