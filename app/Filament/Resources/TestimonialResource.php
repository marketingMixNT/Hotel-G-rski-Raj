<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Filament\Resources\Resource;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';

    protected static ?string $navigationGroup = 'Strona Główna';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Imię i nazwisko/pseudonim')
                    ->required(),

                Forms\Components\TextInput::make('source')
                    ->label('Źródło opini')
                    ->required(),

                Forms\Components\Textarea::make('content')
                    ->label('Treść opini')
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
                Tables\Columns\TextColumn::make('name')
                ->label('Imię i nazwisko')
                   ->description(function (Testimonial $record) {
                    return Str::of($record->content)->limit(40);
                 })
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('source'),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Opinie');
    }
    public static function getPluralLabel(): string
    {
        return __('Opinia');
    }

    public static function getLabel(): string
    {
        return __('Opinie');
    }
}
