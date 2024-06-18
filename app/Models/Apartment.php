<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartment extends Model
{
    use HasFactory;

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
}
