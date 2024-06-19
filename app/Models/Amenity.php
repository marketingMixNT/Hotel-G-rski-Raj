<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Filament\Forms\Components\TextInput;
use TomatoPHP\FilamentIcons\Components\IconPicker;
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
