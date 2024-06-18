<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Apartment;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => '{}',
            'slug' => '{}',
            'surface' => $this->faker->numberBetween(-10000, 10000),
            'person' => $this->faker->numberBetween(-10000, 10000),
            'beds' => '{}',
            'banner_img' => $this->faker->text(),
            'gallery' => $this->faker->text(),
            'reservation_link' => $this->faker->text(),
            'short_desc' => '{}',
            'description' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
            'meta_title' => '{}',
            'meta_desc' => '{}',
        ];
    }
}
