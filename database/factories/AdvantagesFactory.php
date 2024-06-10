<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Advantages;

class AdvantagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advantages::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => null,
            'description' => null,
            'thumbnail' => $this->faker->imageUrl(),
            'sort' => $this->faker->numberBetween(1, 20),
        ];
    }
}
