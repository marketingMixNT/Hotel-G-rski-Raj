<?php

namespace App\Filament\Resources\SlidesResource\Pages;

use App\Filament\Resources\SlidesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSlides extends CreateRecord
{
    
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = SlidesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
           
        ];
    }
}
