<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Offer;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;

use Illuminate\Database\Eloquent\Builder;

use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\OfferResource\Pages;


use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfferResource\RelationManagers;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

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
                Section::make('SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź meta title (krótki, opisowy tytuł strony) oraz meta description (krótki opis strony widoczny w wynikach wyszukiwarek), które informują użytkowników o treści strony.')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Tytuł Meta')
                            ->helperText('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                            ->characterLimit(60)
                            ->minLength(10)
                            ->maxLength(75)
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('meta_desc')
                            ->label('Opis Meta')
                            ->helperText('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek, który informuje użytkowników o jej treści.')
                            ->characterLimit(160)
                            ->minLength(10)
                            ->maxLength(170)
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Opis Oferty')
                    ->icon('heroicon-o-pencil-square')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Opisz swoją ofertę specjalną, podając jej nazwę, krótki opis oraz długi opis, aby zachęcić potencjalnych klientów do skorzystania z niej.')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Tytuł oferty')
                            ->minLength(3)
                            ->maxLength(255)
                            ->required()
                            ->live(debounce: 1000)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->helperText('Przyjazny adres url który wygeneruje się automatycznie na podstawie nazwy oferty.')
                            ->disabled(),

                        Forms\Components\RichEditor::make('short_desc')
                            ->label('Krótki opis')
                            ->helperText('Pojawi się na stronie głównej oraz liście ofert')
                            ->required()
                            ->toolbarButtons(
                                ['bold', 'italic',]
                            )
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('description')
                            ->label('Główny opis')
                            ->helperText('Pojawi się na stronie oferty')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Zdjęcia')
                    ->columns(2)
                    ->icon('heroicon-o-photo')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wybierz banner oraz miniaturkę które najlepiej zaprezentują ofertę.')
                    ->schema([

                        Forms\Components\FileUpload::make('banner_img')
                            ->label('Banner')
                            ->helperText('Banner będzie pojawiał się na stronie oferty ')
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


                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Miniaturka')
                            ->helperText('Miniaturka będzie pojawiać się  na stronie głównej oraz na liście ofert')
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

                    ]),

                Section::make('Zakres czasowy')
                    ->icon('heroicon-o-clock')
                    ->collapsible()
                    ->collapsed()
                    ->description('Ustal w jakim okresie oferta ma się pojawiać')
                    ->columns(2)
                    ->schema([
                        Forms\Components\DateTimePicker::make('start_date')
                            ->label('Data rozpoczęcia wyświetlania')
                            ->required(),
                        Forms\Components\DateTimePicker::make('end_date')
                            ->label('Data zakończenia wyświetlania')
                            ->required(),

                    ]),

                Section::make('Informacje Dodatkowe')
                    ->icon('heroicon-o-plus-circle')
                    ->collapsible()
                    ->collapsed()
                    ->description('Podaj dodatkowe informacje jak cena minimalna, minimalna ilość nocy czy też o formie wyżywienia')
                    ->columns(2)
                    ->schema([
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
                    ]),


                    Forms\Components\TextInput::make('offer_link')
                    ->url()
                    ->label('Link do rezerwacji pokoju')
                    
                    ->helperText('Jeżeli posiadasz, podaj bezpośredni link do oferty w panelu rezerwacyjnym')
                    ->columnSpanFull(),



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
