<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Offer;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offer::class;

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
            'price' => $this->faker->numberBetween(-10000, 10000),
            'nights' => $this->faker->numberBetween(-10000, 10000),
            'food' => $this->faker->word(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
