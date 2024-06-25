<?php

namespace App\Models;

use App\Models\Pictogram;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartment extends Model
{
    use HasFactory;
    use HasTranslations;
    
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($apartment) {
            if (!empty($apartment->name)) {
                $apartment->slug = Str::slug($apartment->name);
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'surface',
        'person',
        'beds',
        'banner_img',
        'gallery',
        'reservation_link',
        'short_desc',
        'description',
        'sort',
        'meta_title',
        'meta_desc',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'slug' => 'array',
        'beds' => 'array',
        'short_desc' => 'array',
        'description' => 'array',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'gallery' =>'array'
    ];

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }
    public function pictograms(): BelongsToMany
    {
        return $this->belongsToMany(Pictogram::class);
    }

    public $translatable = ['meta_title', 'meta_desc','name','slug','short_desc','description','beds'];


   
}
