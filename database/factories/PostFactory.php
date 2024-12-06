<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
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
            'user_id' => User::factory(),  // Use User factory to create a user
            'title' => $this->faker->sentence(),  // Use $this->faker to generate fake data
            'body' => $this->faker->paragraph(), // Generate a body with multiple sentences
        ];
    }
}
