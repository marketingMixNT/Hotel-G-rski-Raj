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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('slug')->unique();
            $table->json('short_desc');
            $table->json('description');
            $table->text('thumbnail');
            $table->text('banner_img');
            $table->integer('price');
            $table->integer('nights');
            $table->string('food');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->json('meta_title');
            $table->json('meta_desc');
            $table->integer('sort')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
