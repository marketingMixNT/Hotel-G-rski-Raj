<?php

namespace App\Filament\Resources\HomeGalleryResource\Pages;

use App\Filament\Resources\HomeGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
