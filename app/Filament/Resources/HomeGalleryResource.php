<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomeGallery;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeGalleryResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\HomeGalleryResource\RelationManagers;


class HomeGalleryResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = HomeGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static ?string $navigationGroup = 'Strona Główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Shout::make('info')
                ->content('Poniższe zdjęcia pojawią się na stronie głównej. Jeżeli masz stronę wielojęzyczną pamiętaj o zlokalizowaniu tekstu alternatywnego. Pamiętaj aby zdjęć było dokładnie 8!')
                ->type('info')
                ->columnSpanFull(),

                Forms\Components\FileUpload::make('image')
                      ->label('Zdjęcie')
                    ->directory('galeria')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => 'hotel-gorski-raj-galeria' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->maxSize(4096)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('alt')
                 ->label('Tekst alternatywny')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->helperText('Opisz w jednym zdaniu co znajduje się na obrazku aby poprawić SEO'),
                
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

                Tables\Columns\ImageColumn::make('image')
                    ->label('Miniaturka'),
                    
                Tables\Columns\TextColumn::make('alt')
                    ->label('Tekst alternatywny')
                    ->searchable(),

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
            'index' => Pages\ListHomeGalleries::route('/'),
            'create' => Pages\CreateHomeGallery::route('/create'),
            'edit' => Pages\EditHomeGallery::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Galeria');
    }
    public static function getPluralLabel(): string
    {
        return __('Galeria');
    }

    public static function getLabel(): string
    {
        return __('Galeria');
    }
}
