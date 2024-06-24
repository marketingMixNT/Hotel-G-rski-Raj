<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Amenity;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;

use Filament\Resources\Concerns\Translatable;


use Guava\FilamentIconPicker\Forms\IconPicker;
use App\Filament\Resources\AmenityResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AmenityResource\RelationManagers;



class AmenityResource extends Resource
{
    use Translatable;


    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Amenity::class;

    protected static ?string $navigationIcon = 'heroicon-o-face-smile';

    protected static ?string $navigationGroup = 'Informacje o hotelu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                    Shout::make('info')
                    ->content('Udogodnienia pojawią się na stronie pojedyńczego apartamentu')
                    ->type('info')
                    ->columnSpanFull(),

                    TextInput::make('name')
                        ->label('Nazwa')
                        ->minLength(3)
                        ->maxLength(255)
                        ->required(),

                    IconPicker::make('icons')
                        ->label('Ikonka')
                        ->required(),
                ]
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
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
