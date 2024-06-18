<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Icon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'amenity_id',
        'mobile_button_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amenity_id' => 'integer',
        'mobile_button_id' => 'integer',
    ];

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function mobileButtons(): BelongsToMany
    {
        return $this->belongsToMany(MobileButton::class);
    }

    public static function getForm() :array {
        return [
                
            FileUpload::make('image')
            ->reorderable()
                ->image()
                ->maxSize(2048)
                ->required()
                ->columnSpanFull(),
           
        ];
    }
}
