<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Attraction;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AttractionResource\Pages;
use App\Filament\Resources\AttractionResource\RelationManagers;
use Filament\Resources\Concerns\Translatable;

class AttractionResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Attraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';

    protected static ?string $navigationGroup = 'Elementy Główne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('Nazwa')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->toolbarButtons(['bold', 'italic',
                    ])
                   
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('images')
                ->reorderable()
                    ->multiple()
                    ->appendFiles()
                    ->helperText('Wstaw 3 zdjęcia, pierwsze będzie miniaturką')
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
                Tables\Columns\ImageColumn::make('images')
                ->label('Miniaturka')
                ->getStateUsing(function (Attraction $record) {
                    return $record->images[0] ?? null;
                }),
                Tables\Columns\TextColumn::make('title')
                ->label('Nazwa')
            
                ->description(function (Attraction $record) {
                    return Str::limit(strip_tags($record->description), 40);
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
            'index' => Pages\ListAttractions::route('/'),
            'create' => Pages\CreateAttraction::route('/create'),
            'edit' => Pages\EditAttraction::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Atrakcje');
    }
    public static function getPluralLabel(): string
    {
        return __('Atrakcja');
    }

    public static function getLabel(): string
    {
        return __('Atrakcje');
    }
}
