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
            'name' => $this->faker->sentence,
            'surface' => $this->faker->numberBetween(20,80),
            'person' => $this->faker->numberBetween(1, 6),
            'beds' => '1 łózko podwójne',
            'banner_img' => $this->faker->imageUrl(),
            'gallery' => $this->faker->imageUrl(),
            'reservation_link' => 'https://marketingmix.pl',
            'short_desc' =>  $this->faker->paragraph(),
            'description' =>  $this->faker->paragraph(),
            'sort' => $this->faker->numberBetween(1,20),
        ];
    }
}
