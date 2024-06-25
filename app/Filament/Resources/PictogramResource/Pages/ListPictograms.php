<?php

namespace App\Filament\Resources\PictogramResource\Pages;

use App\Filament\Resources\PictogramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPictograms extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = PictogramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
