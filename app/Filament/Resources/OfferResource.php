<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Offer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;

use App\Filament\Resources\OfferResource\Pages;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfferResource\RelationManagers;


class OfferResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Offer::class;



    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationGroup = 'Elementy Główne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->label('Opis')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Miniaturka')
                    ->image()
                    ->maxSize(2048)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Cena')
                    ->required()
                    ->helperText('Najnizsza cena za ofertę')
                    ->numeric()
                    ->suffix(' zł'),
                Forms\Components\TextInput::make('nights')
                    ->label('Minimalna ilość nocy')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('food')
                    ->label('Wyżywienie')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('start_date')
                    ->label('Data rozpoczęcia wyświetlania')
                    ->required(),
                Forms\Components\DateTimePicker::make('end_date')
                    ->label('Data zakończenia wyświetlania')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->description(function (Offer $record) {
                        return Str::limit(strip_tags($record->description), 40);
                    })
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                ->label('cena')
                ->toggleable(isToggledHiddenByDefault: true)
                    // ->money()
                    ->suffix(' zł')
                    ->sortable(),

                Tables\Columns\TextColumn::make('start_date')
                ->label('Data rozpoczęcia')
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('end_date')
                ->label('Data zakończenia')
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->sortable(),

                

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Oferty');
    }
    public static function getPluralLabel(): string
    {
        return __('Oferta');
    }

    public static function getLabel(): string
    {
        return __('Oferty');
    }
}
