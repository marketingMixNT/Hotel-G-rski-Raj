<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelAttraction extends Model
{
    use HasFactory;

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
    ];
}
