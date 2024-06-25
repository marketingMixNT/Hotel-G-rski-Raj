<?php

namespace App\Filament\Resources\PictogramResource\Pages;

use App\Filament\Resources\PictogramResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePictogram extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PictogramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
           
        ];
    }
}
