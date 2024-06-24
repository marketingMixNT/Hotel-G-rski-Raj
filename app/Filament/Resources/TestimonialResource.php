<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Filament\Resources\TestimonialResource\Pages;
use Filament\Resources\Concerns\Translatable;
use Awcodes\Shout\Components\Shout;

class TestimonialResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';

    protected static ?string $navigationGroup = 'Strona Główna';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Shout::make('info')
                ->content('Opinie pojawią się na stronie głównej.')
                ->type('info')
                ->columnSpanFull(),

                Forms\Components\TextInput::make('name')
                    ->label('Imię i nazwisko/pseudonim')
                    ->minLength(3)
                    ->maxLength(255)
                    ->required(),

                Forms\Components\TextInput::make('source')
                    ->label('Źródło opini')
                    ->minLength(3)
                    ->maxLength(255)
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

                Tables\Columns\TextColumn::make('source')
                ->label('Źródło opini'),
              
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
        return __('Opinie');
    }

    public static function getLabel(): string
    {
        return __('Opinie');
    }
}
