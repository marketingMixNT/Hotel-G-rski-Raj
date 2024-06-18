<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomScriptResource\Pages;
use App\Filament\Resources\CustomScriptResource\RelationManagers;
use App\Models\CustomScript;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomScriptResource extends Resource
{
    protected static ?string $model = CustomScript::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Narzędzia';

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
            'index' => Pages\ListCustomScripts::route('/'),
            'create' => Pages\CreateCustomScript::route('/create'),
            'edit' => Pages\EditCustomScript::route('/{record}/edit'),
        ];
    }
}
