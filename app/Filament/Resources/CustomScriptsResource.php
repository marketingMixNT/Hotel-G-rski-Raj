<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\CustomScript;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomScriptsResource\Pages;
use App\Filament\Resources\CustomScriptsResource\RelationManagers;

class CustomScriptsResource extends Resource
{
    protected static ?string $model = CustomScript::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    protected static ?string $navigationGroup = 'Elementy Dodatkowe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('content')
                    ->label('Zawartość')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->label('Nazwa'),
                Forms\Components\Select::make('position')
                    ->label('Pozycja')
                    ->options([
                        'first_place' => 'Nad tagiem otwierającym <head>',
                        'second_place' => 'Pod tagiem otwierającym <body>',
                        'third_place' => 'Nad tagiem zamykającym </body>',
                    ]),
                Shout::make('so-important')
                    ->content('Zachowaj ostrozność przy dodawaniu własnych skryptów!')
                    ->color('warning')
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('content')
                    ->sortable()
                    ->searchable()
                    ->description(function (CustomScript $record) {
                        return Str::limit(strip_tags($record->content), 40);
                    }),
                Tables\Columns\TextColumn::make('position')
                    ->label('Pozycja')

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
            'index' => Pages\ListCustomScripts::route('/'),
            'create' => Pages\CreateCustomScripts::route('/create'),
            'edit' => Pages\EditCustomScripts::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Własne Skrypty');
    }
    public static function getPluralLabel(): string
    {
        return __('Własne Skrypty');
    }

    public static function getLabel(): string
    {
        return __('Własne Skrypty');
    }
}
