<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Offer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Slide;
use App\Models\Amenity;
use App\Models\Advantage;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Testimonial;
use App\Models\Icon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin123'
        ]);

        // Slide::factory(10)->create();

        // Advantage::factory(10)->create();

        // Offer::factory(10)->create();

        // Testimonial::factory(10)->create();

        // Attraction::factory(5)->create();

        // Apartment::factory(6)->create();

        // Amenity::factory(20)->create();

        // Icon::factory(20)->create();
    }
}
