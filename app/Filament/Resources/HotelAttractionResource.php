<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\HotelAttraction;

use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;

use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HotelAttractionResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;
use App\Filament\Resources\HotelAttractionResource\RelationManagers;


class HotelAttractionResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = HotelAttraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $navigationGroup = 'Informacje o Hotelu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Shout::make('info')
                ->content('Atrakcje hotelowe pojawią się na stronie głównej jako zajawka oraz na własnej dedykowanej podstronie.')
                ->type('info')
                ->columnSpanFull(),

                //SEO
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

                //DESCRIPTION
                Section::make('Opis Atrakcji Hotelowej')
                ->icon('heroicon-o-pencil-square')
                ->columns(2)
                ->collapsible()
                ->collapsed()
                ->description('Opisz swoją atrakcję hotelową, podając jej nazwę, krótki opis oraz długi opis, aby zachęcić potencjalnych klientów do skorzystania z niej.')
                ->schema([

                    Forms\Components\TextInput::make('title')
                        ->label('Nazwa atrakcji')
                        ->minLength(3)
                        ->maxLength(255)
                        ->required()
                        ->live(debounce: 1000)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                    Forms\Components\TextInput::make('slug')
                        ->label('Slug')
                        ->helperText('Przyjazny adres url który wygeneruje się automatycznie na podstawie nazwy atrakcji.')
                        ->disabled(),

                    Forms\Components\RichEditor::make('short_desc')
                        ->label('Krótki opis')
                        ->helperText('Pojawi się na stronie głównej oraz liście atrakcji')
                        ->required()
                        ->toolbarButtons(
                            ['bold', 'italic',]
                        )
                        ->columnSpanFull(),

                    Forms\Components\RichEditor::make('description')
                        ->label('Główny opis')
                        ->helperText('Pojawi się na stronie atrakcji')
                        ->required()
                        ->columnSpanFull(),
                ]),

                //IMAGES
                Section::make('Zdjęcia')
                ->columns(2)
                ->icon('heroicon-o-photo')
                ->collapsible()
                ->collapsed()
                ->description('Wybierz banner, miniaturkę oraz zdjęcia do galeri które najlepiej zaprezentują atrakcję.')
                ->schema([

                    Forms\Components\FileUpload::make('banner_img')
                        ->label('Banner')
                        ->helperText('Banner będzie pojawiał się na stronie oferty ')
                        ->directory('attractions-banners')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => 'hotel-gorski-raj-atrakcje-hotelowe-banner-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                        )
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
                        ->directory('attractions-thumbnails')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => 'hotel-gorski-raj-atrakcje-hotelowe-miniaturki-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                        )
                        
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

                        Forms\Components\FileUpload::make('gallery')
                        ->label('Galeria')
                        ->reorderable()
                        ->directory('attractions-galleries')
                       
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => 'hotel-gorski-raj-atrakcje-hotelowe-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                        )
                        ->multiple()
                        ->appendFiles()
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
                    ->description(function (HotelAttraction $record) {
                        return Str::limit(strip_tags($record->short_desc), 40);
                    })
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
            'index' => Pages\ListHotelAttractions::route('/'),
            'create' => Pages\CreateHotelAttraction::route('/create'),
            'edit' => Pages\EditHotelAttraction::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Atrakcje Hotelowa');
    }
    public static function getPluralLabel(): string
    {
        return __('Atrakcje Hotelowe');
    }

    public static function getLabel(): string
    {
        return __('Atrakcje Hotelowe');
    }
}
