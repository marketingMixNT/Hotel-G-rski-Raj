<?php

namespace App\Filament\Resources\AdvantagesResource\Pages;

use App\Filament\Resources\AdvantagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvantages extends EditRecord
{

    // use EditRecord\Concerns\Translatable;

    protected static string $resource = AdvantagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }
}
