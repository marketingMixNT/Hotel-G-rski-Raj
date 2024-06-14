<?php

namespace App\Filament\Resources\AdvantagesResource\Pages;

use App\Filament\Resources\AdvantagesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdvantages extends CreateRecord
{

    // use CreateRecord\Concerns\Translatable;

    protected static string $resource = AdvantagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\LocaleSwitcher::make(),
           
        ];
    }
}
