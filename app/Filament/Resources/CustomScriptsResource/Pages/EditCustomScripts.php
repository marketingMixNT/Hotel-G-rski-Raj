<?php

namespace App\Filament\Resources\CustomScriptsResource\Pages;

use App\Filament\Resources\CustomScriptsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomScripts extends EditRecord
{
    protected static string $resource = CustomScriptsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
