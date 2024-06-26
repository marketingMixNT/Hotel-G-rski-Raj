<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Advantage;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\AdvantagesResource\Pages;
use Awcodes\Shout\Components\Shout;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class AdvantagesResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Advantage::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    protected static ?string $navigationGroup = 'Strona Główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Shout::make('info')
                    ->content('Zalety pojawią się na stronie głównej.')
                    ->type('info')
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->minLength(3)
                    ->maxLength(255)
                    ->helperText('Najlepszy wygląd uzyskasz nie przekraczając podanej liczby znaków')
                    ->hint(fn ($state, $component) => 'pozostało: ' . $component->getMaxLength() - strlen($state) . ' znaków') ->maxlength(25) ->live()
                    ->required(),

                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Zdjęcie')
                    ->directory('features')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => 'hotel-gorski-raj-zalety-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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

                Forms\Components\RichEditor::make('description')
                    ->label('Opis')
                    ->hint(fn ($state, $component) => 'pozostało: ' . $component->getMaxLength() - strlen($state) . ' znaków') ->maxlength(290) ->live()
                    ->required()
                    ->helperText('Najlepszy wygląd uzyskasz nie przekraczając podanej liczby znaków')
                    ->toolbarButtons([
                        'bold', 'italic',
                    ])
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

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->description(function (Advantage $record) {
                        return Str::limit(strip_tags($record->description), 40);
                    })
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
        return __('Zalety');
    }

    public static function getLabel(): string
    {
        return __('Zalety');
    }
}
