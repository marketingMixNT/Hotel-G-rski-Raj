<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PrivacyPolicy;

class PrivacyPolicyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PrivacyPolicy::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'content' => '{}',
        ];
    }
}
