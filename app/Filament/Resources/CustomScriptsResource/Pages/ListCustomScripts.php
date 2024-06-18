<?php

namespace App\Filament\Resources\CustomScriptsResource\Pages;

use App\Filament\Resources\CustomScriptsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomScripts extends ListRecords
{
    protected static string $resource = CustomScriptsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
