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
        'short_desc',
        'description',
        'thumbnail',
        'banner_img',
        'gallery',
        'meta_title',
        'meta_desc',
        'slug',
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
        'description' => 'array',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'gallery' => 'array'
    ];

    public $translatable = ['title', 'short_desc','description'];
}
