<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\HotelAttraction;

class HotelAttractionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HotelAttraction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => '{}',
            'slug' => '{}',
            'short_desc' => '{}',
            'description' => '{}',
            'thumbnail' => $this->faker->text(),
            'gallery' => $this->faker->text(),
            'banner_img' => $this->faker->text(),
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
