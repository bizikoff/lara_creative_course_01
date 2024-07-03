<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'content' => fake()->text(),
            'description' => fake()->sentence(15),
            'image_path' => fake()->imageUrl(),
            'profile_id' => Profile::first()->id,
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}
