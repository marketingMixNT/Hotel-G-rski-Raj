<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Pictogram;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Guava\FilamentIconPicker\Forms\IconPicker;

use App\Filament\Resources\PictogramResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PictogramResource\RelationManagers;

class PictogramResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }

    protected static ?string $model = Pictogram::class;

    protected static ?string $navigationIcon = 'heroicon-o-face-smile';

    protected static ?string $navigationGroup = 'Informacje o Hotelu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(Pictogram::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->label('Piktogram')
                ->searchable()
                ->sortable(),
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
            'index' => Pages\ListPictograms::route('/'),
            'create' => Pages\CreatePictogram::route('/create'),
            'edit' => Pages\EditPictogram::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Piktogramy');
    }
    public static function getPluralLabel(): string
    {
        return __('Piktogramy');
    }

    public static function getLabel(): string
    {
        return __('Piktogramy');
    }
}
