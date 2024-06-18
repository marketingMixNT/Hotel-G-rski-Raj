<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MobileButtonsResource\Pages;
use App\Filament\Resources\MobileButtonsResource\RelationManagers;
use App\Models\MobileButtons;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MobileButtonsResource extends Resource
{
    protected static ?string $model = MobileButtons::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Wygląd';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMobileButtons::route('/'),
            'create' => Pages\CreateMobileButtons::route('/create'),
            'edit' => Pages\EditMobileButtons::route('/{record}/edit'),
        ];
    }
}
