<?php

namespace App\Models;

use App\Models\Apartment;

use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Model;

use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Filament\Forms\Components\FileUpload;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    use HasFactory;
    use HasTranslations;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'icon',
        'apartment_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
  
        'apartment_id' => 'integer',
        'name' => 'array',
    ];

    public function apartments(): BelongsToMany
    {
        return $this->belongsToMany(Apartment::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('name')
                ->label('Nazwa')
                ->minLength(3)
                ->maxLength(255)
               
                ->required(),
                IconPicker::make('icon')
                ->label('Ikonka')
                ->required(),

            
        ];
    }

    public $translatable = ['title','description',];
}