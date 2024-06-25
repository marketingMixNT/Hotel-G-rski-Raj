<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pictogram extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'icon',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
    ];

    public function apartments(): BelongsToMany
    {
        return $this->belongsToMany(Apartment::class);
    }

    public $translatable = ['title'];

    public static function getForm()
    {
        return [
            TextInput::make('title')
                ->label('Nazwa')
                ->minLength(3)
                ->maxLength(255)

                ->required(),
            IconPicker::make('icon')
                ->label('Ikonka')
                ->required(),
        ];
    }
}
