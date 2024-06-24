<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Offer extends Model
{
    use HasFactory;
    use HasTranslations;

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($offer) {
            if (!empty($offer->title)) {
                $offer->slug = Str::slug($offer->title);
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
        'description',
        'thumbnail',
        'price',
        'nights',
        'food',
        'start_date',
        'end_date',
        'sort',
        'banner_img',
        'meta_title',
        'meta_desc',
        'short_desc',
        'offer_link',
        'slug',

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
    ];

    public $translatable = ['title', 'description'];


    public function scopePublished($query)
    {
        $now = Carbon::now();
        $query->where('start_date', '<=', $now)
              ->where('end_date', '>=', $now);
    }

}