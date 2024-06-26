<?php

namespace App\Filament\Resources\RegulationsResource\Pages;

use App\Filament\Resources\RegulationsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegulations extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = RegulationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
