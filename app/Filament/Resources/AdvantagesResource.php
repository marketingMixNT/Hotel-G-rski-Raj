<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantagesResource\Pages;
use App\Filament\Resources\AdvantagesResource\RelationManagers;
use App\Models\Advantages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\Concerns\Translatable;


class AdvantagesResource extends Resource
{
    // use Translatable;

    // public static function getTranslatableLocales(): array
    // {
    //     return ['pl', 'en'];
    // }
    protected static ?string $model = Advantages::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    protected static ?string $navigationGroup = 'Strona Główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),
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
                    Forms\Components\Textarea::make('description')
                    ->label('Opis')
                    ->required()
                    ->autosize()
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
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAdvantages::route('/'),
            'create' => Pages\CreateAdvantages::route('/create'),
            'edit' => Pages\EditAdvantages::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Zalety');
    }
    public static function getPluralLabel(): string
    {
        return __('Zaleta');
    }

    public static function getLabel(): string
    {
        return __('Zalety');
    }
}
