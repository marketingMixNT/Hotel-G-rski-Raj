<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->integer('surface');
            $table->integer('person');
            $table->json('beds');
            $table->text('banner_img');
            $table->text('gallery');
            $table->text('reservation_link');
            $table->json('short_desc');
            $table->json('description');
            $table->integer('sort')->nullable();
            $table->unsignedInteger('amenity_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
