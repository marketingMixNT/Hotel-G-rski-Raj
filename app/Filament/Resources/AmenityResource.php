<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmenityResource\Pages;
use App\Filament\Resources\AmenityResource\RelationManagers;
use App\Models\Amenity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;


class AmenityResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Amenity::class;

    protected static ?string $navigationIcon = 'heroicon-o-face-smile';

    protected static ?string $navigationGroup = 'Informacje o Hotelu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(Amenity::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Piktogram')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAmenities::route('/'),
            'create' => Pages\CreateAmenity::route('/create'),
            'edit' => Pages\EditAmenity::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Udogodnienia');
    }
    public static function getPluralLabel(): string
    {
        return __('Udogodnienia');
    }

    public static function getLabel(): string
    {
        return __('Udogodnienia');
    }
}
