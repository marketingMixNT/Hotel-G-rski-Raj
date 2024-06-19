<?php

namespace App\Filament\Resources\SlidesResource\Pages;

use App\Filament\Resources\SlidesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSlides extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = SlidesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
