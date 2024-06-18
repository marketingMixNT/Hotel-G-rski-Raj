<?php

namespace App\Filament\Resources\MobileButtonResource\Pages;

use App\Filament\Resources\MobileButtonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMobileButtons extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = MobileButtonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
