<?php

namespace App\Filament\Resources\MobileButtonResource\Pages;

use App\Filament\Resources\MobileButtonResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMobileButton extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = MobileButtonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
           
        ];
    }

    
}
