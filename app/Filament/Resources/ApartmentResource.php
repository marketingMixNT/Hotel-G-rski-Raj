<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Amenity;
use Filament\Forms\Form;
use App\Models\Apartment;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ApartmentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ApartmentResource\RelationManagers;

use Awcodes\Shout\Components\Shout;
use Filament\Resources\Concerns\Translatable;


class ApartmentResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Apartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Elementy Główne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('SEO')
                    ->collapsible()
                    ->collapsed()
                    ->description('info')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Tytuł strony')
                            ->minLength(3)
                            ->maxLength(255)
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('meta_desc')
                            ->label('Meta Desc')
                            ->helperText('Pamiętaj o limicie 160 znaków')
                            ->required()

                            ->columnSpanFull(),
                            Shout::make('meta-danger')
                            ->columnSpanFull()
                            ->type(function ($get) {
                                $length = mb_strlen($get('meta_desc'));

                                if ($length < 50) {
                                    return 'warning';
                                } else if ($length > 160) {
                                    return 'danger';
                                } else {
                                    return 'success';
                                }
                            })
                            ->content(function ($get) {
                                $length = mb_strlen($get('meta_desc'));

                                if ($length < 50) {
                                    return 'Meta description jest za krótki. Spróbuj rozwinąć go do maksymalnie 160 znaków.';
                                } else if ($length > 160) {
                                    return 'Meta description jest za długi. Skróć go do maksymalnie 160 znaków.';
                                } else {
                                    return 'Meta description jest idealny!';
                                }
                            }),


                    ]),
                Section::make('Opis')
                    ->collapsible()
                    ->collapsed()
                    ->description('info')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nazwa apartamentu')
                            ->minLength(3)
                            ->maxLength(255)
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->minLength(3)
                            ->maxLength(255)
                            // ->required()
                            ->disabled()
                            ->columnSpanFull(),
                          
                            



                        Forms\Components\RichEditor::make('short_desc')
                            ->label('Krótki opis')
                            ->helperText('Pojawi się na stronie głównej oraz liście apartamentów')
                            ->required()
                            ->toolbarButtons([
                                'bold', 'italic',
                            ])
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('description')
                            ->label('Główny opis')
                            ->helperText('Pojawi się na stronie apartamentu')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Zdjęcia')
                    ->collapsible()
                    ->collapsed()
                    ->description('info')
                    ->schema([

                        Forms\Components\FileUpload::make('banner_img')
                            ->label('Baner')
                            ->helperText('Banner będzie pojawiał się na stronie apartamentu ')
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
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('gallery')

                            ->label('Galeria')
                            
                            ->reorderable()
                            ->multiple()
                            ->appendFiles()
                            ->helperText('Pierwsze zdjęcie będzie zdjęciem głównym')
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
                            ->required()
                            ->columnSpanFull(),

                    ]),

                Section::make('Informacje Dodatkowe')
                    ->collapsible()
                    ->collapsed()
                    ->description('info')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('surface')
                            ->label('Powierzchnia')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('person')
                            ->label('Maksymalna ilość osób')
                            ->required()
                            ->numeric(),
                        Forms\Components\Textarea::make('beds')
                            ->label('Liczba Łózek')
                            ->required()
                            ->columnSpanFull()

                    ]),

                Section::make('Udogodnienia')
                    ->collapsible()
                    ->collapsed()
                    ->description('info')
                    ->schema([


                        Forms\Components\Select::make('amenities')
                            ->searchable()
                            ->multiple()
                            ->preload()
                            ->editOptionForm(Amenity::getForm())
                            ->createOptionForm(Amenity::getForm())
                            ->relationship('amenities', 'id')
                            ->options(
                                Amenity::all()->pluck('name', 'id')
                            )
                    ]),



                Forms\Components\Textarea::make('reservation_link')
                    ->label('Link do rezerwacji pokoju')
                    ->required()
                    ->columnSpanFull(),



            ])
            ;
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
                Tables\Columns\ImageColumn::make('images')
                    ->label('Miniaturka')
                    ->getStateUsing(function (Apartment $record) {
                        return $record->gallery[0] ?? null;
                    }),
                Tables\Columns\TextColumn::make('name')
                    ->label('Apartament')
                    ->description(function (Apartment $record) {
                        return Str::limit(strip_tags($record->short_desc), 40);
                    })
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('surface')
                    ->label('Powierzchnia')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('person')
                    ->label('Max. osób')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
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
            'index' => Pages\ListApartments::route('/'),
            'create' => Pages\CreateApartment::route('/create'),
            'edit' => Pages\EditApartment::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Apartamenty');
    }
    public static function getPluralLabel(): string
    {
        return __('Apartament');
    }

    public static function getLabel(): string
    {
        return __('Apartamenty');
    }
}
