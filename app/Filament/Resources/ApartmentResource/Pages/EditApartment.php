<?php

namespace App\Filament\Resources\ApartmentResource\Pages;

use App\Filament\Resources\ApartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApartment extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ApartmentResource::class;

    protected function getHeaderActions(): array
    {
        
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
