<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Gallery extends Model
{
    use HasFactory;
    use HasTranslations;

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($gallery) {
            if (!empty($gallery->name)) {
                $gallery->slug = Str::slug($gallery->category);
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'images',
        'sort',
        'slug'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category' => 'array',
        'images'=>'array',
        'slug' => 'array',
    ];

    public $translatable = ['category','slug'];
}
