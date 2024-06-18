<?php

namespace App\Filament\Resources\MobileButtonsResource\Pages;

use App\Filament\Resources\MobileButtonsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMobileButtons extends ListRecords
{
    protected static string $resource = MobileButtonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
