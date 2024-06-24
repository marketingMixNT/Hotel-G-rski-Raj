<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class HotelAttraction extends Model
{
    use HasFactory;
    use HasTranslations;

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($hotelAttraction) {
            if (!empty($hotelAttraction->title)) {
                $hotelAttraction->slug = Str::slug($hotelAttraction->title);
            }
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'short_desc',
        'description',
        'thumbnail',
        'gallery',
        'banner_img',
        'meta_title',
        'meta_desc',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
        'slug' => 'array',
        'short_desc' => 'array',
        'description' => 'array',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'gallery' => 'array'
    ];

    public $translatable = ['title','slug', 'short_desc','description','meta_title','meta_desc'];
}
