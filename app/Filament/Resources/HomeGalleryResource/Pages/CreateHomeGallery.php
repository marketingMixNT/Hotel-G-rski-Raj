<?php

namespace App\Filament\Resources\HomeGalleryResource\Pages;

use App\Filament\Resources\HomeGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeGallery extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HomeGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
           
        ];
    }
}
