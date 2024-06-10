<?php

namespace Database\Seeders;

use App\Models\Advantages;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Slides;
use App\Models\Offer;
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
            'password'=>'admin123'
        ]);

        Slides::factory(10)->create();

        // Advantages::factory(1)->create();

        // Offer::factory(5)->create();


    }
}
