<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'surface',
        'person',
        'beds',
        'banner_img',
        'gallery',
        'reservation_link',
        'short_desc',
        'description',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'beds' => 'array',
        'short_desc' => 'array',
        'description' => 'array',
        'gallery'=>'array'
    ];
}
