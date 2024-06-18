<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Custom_Script;

class CustomScriptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomScript::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraphs(3, true),
            'position' => $this->faker->text(),
        ];
    }
}
