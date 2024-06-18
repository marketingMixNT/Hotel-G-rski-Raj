<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Icon;
use App\Models\Mobile_Button;

class MobileButtonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MobileButton::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'image' => $this->faker->text(),
            'link' => $this->faker->text(),
            'amenity_id' => $this->faker->randomNumber(),
            'icon_id' => Icon::factory(),
        ];
    }
}
