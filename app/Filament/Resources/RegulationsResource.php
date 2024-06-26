<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegulationsResource\Pages;
use App\Filament\Resources\RegulationsResource\RelationManagers;
use App\Models\Regulations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\Concerns\Translatable;


class RegulationsResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Regulations::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Strony Informacyjne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('content')
                ->label('Treść')
                ->toolbarButtons([
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                ->label('')
                ->formatStateUsing(fn (string $state): string => __("Treść"))
               
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                
            ])->paginated(false);
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
            'index' => Pages\ListRegulations::route('/'),
            // 'create' => Pages\CreateRegulations::route('/create'),
            'edit' => Pages\EditRegulations::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Regulamin');
    }
    public static function getPluralLabel(): string
    {
        return __('Regulamin');
    }

    public static function getLabel(): string
    {
        return __('Regulamin');
    }
}
