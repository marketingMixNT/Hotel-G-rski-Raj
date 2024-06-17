<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Filament\Forms\Components\TextInput;


class Amenity extends Model
{
    use HasFactory;

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
        return $this->belongsToMany(Apartment::class,'amenity_apartment');
    }

    public static function getForm() :array{
        return [
            TextInput::make('name')
            ->required()
            ->columnSpanFull(),
        TextInput::make('icon')
            ->required()
            ->maxLength(255),
        TextInput::make('apartment_id')
            ->numeric()
            ->default(null),
        ];
    }
}
