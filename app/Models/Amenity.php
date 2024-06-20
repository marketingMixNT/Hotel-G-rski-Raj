<?php

namespace App\Models;

use App\Models\Apartment;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;

use TomatoPHP\FilamentIcons\Components\IconPicker;
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
        'icons',
        'apartment_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'apartment_id' => 'integer',
    ];

    public function apartments(): BelongsToMany
    {
        return $this->belongsToMany(Apartment::class);
    }

    public static function getForm():array{
        return [
            TextInput::make('name')
            ->required(),
            IconPicker::make('icons')
            ->required(),];
    }

    public $translatable = ['title', 'description'];

}