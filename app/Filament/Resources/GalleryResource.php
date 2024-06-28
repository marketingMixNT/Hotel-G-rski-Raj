<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class GalleryResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Informacje o Hotelu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('category')
                    ->label('Kategoria')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required()
                    ->live(debounce: 1000)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->disabled(),

                Forms\Components\FileUpload::make('images')
                    ->label('Zdjęcia')
                    ->directory('gallery')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => 'hotel-gorski-raj-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                    )

                    ->reorderable()
                    ->multiple()
                    ->appendFiles()
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
                    ->required()
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
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategoria')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('images')
                    ->label('Miniaturka')
                    ->getStateUsing(function (Gallery $record) {
                        return $record->images[0] ?? null;
                    }),

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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
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
