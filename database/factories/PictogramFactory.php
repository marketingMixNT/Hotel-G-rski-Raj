<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pictogram;

class PictogramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pictogram::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => '{}',
            'icon' => $this->faker->text(),
        ];
    }
}
