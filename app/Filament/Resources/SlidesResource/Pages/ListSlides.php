<?php

namespace App\Filament\Resources\SlidesResource\Pages;

use App\Filament\Resources\SlidesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSlides extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = SlidesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
