<?php

namespace Database\Factories;

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
            'category_id' => rand(1, 20),
            'title' => fake()->title(),
            'body' => fake()->text(300),
            'likes' => rand(1, 100),
            'dislikes' => rand(1, 100)
        ];
    }
}
