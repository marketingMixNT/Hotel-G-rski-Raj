<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MobileButtonResource\Pages;
use App\Filament\Resources\MobileButtonResource\RelationManagers;
use App\Models\MobileButton;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\Concerns\Translatable;


class MobileButtonResource extends Resource

{

    use Translatable;


    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = MobileButton::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';

    protected static ?string $navigationGroup = 'Elementy Dodatkowe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->prefix('https://')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Ikonka')
                    ->image()
                    ->maxSize(1024)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        // ->reorderable('sort')
        // ->defaultSort('sort', 'asc')
            ->columns([
                // Tables\Columns\TextColumn::make('sort')
                // ->label('#')
                // ->numeric()
                // ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                ->label('Ikonka'),
                Tables\Columns\TextColumn::make('title')
                ->label('Tytuł'),
                Tables\Columns\TextColumn::make('link')
                ->label('link')
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
            'index' => Pages\ListMobileButtons::route('/'),
            'create' => Pages\CreateMobileButton::route('/create'),
            'edit' => Pages\EditMobileButton::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Przyciski mobilne');
    }
    public static function getPluralLabel(): string
    {
        return __('Przyciski mobilne');
    }

    public static function getLabel(): string
    {
        return __('Przyciski mobilne');
    }
}
