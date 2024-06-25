<?php

namespace App\Filament\Resources\HomeGalleryResource\Pages;

use App\Filament\Resources\HomeGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeGallery extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
