<?php

namespace App\Filament\Resources\PictogramResource\Pages;

use App\Filament\Resources\PictogramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPictogram extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PictogramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
