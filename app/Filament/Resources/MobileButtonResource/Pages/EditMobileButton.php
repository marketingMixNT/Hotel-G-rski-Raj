<?php

namespace App\Filament\Resources\MobileButtonResource\Pages;

use App\Filament\Resources\MobileButtonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMobileButton extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = MobileButtonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
