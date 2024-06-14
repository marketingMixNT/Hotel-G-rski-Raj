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
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'thumbnail' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(100, 1000),
            'nights' => $this->faker->numberBetween(1, 7),
            'food' => $this->faker->sentence(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'sort' => $this->faker->numberBetween(0, 20),
        ];
    }
}
