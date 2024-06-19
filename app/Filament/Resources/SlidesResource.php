<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slide;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SlidesResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SlidesResource\RelationManagers;

use Filament\Resources\Concerns\Translatable;


class SlidesResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Strona Główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // CuratorPicker::make('image'),
                Forms\Components\FileUpload::make('image')
                ->label('Zdjęcie')
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlides::route('/create'),
            'edit' => Pages\EditSlides::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Slajdy');
    }
    public static function getPluralLabel(): string
    {
        return __('Slajd');
    }

    public static function getLabel(): string
    {
        return __('Slajdy');
    }
}
