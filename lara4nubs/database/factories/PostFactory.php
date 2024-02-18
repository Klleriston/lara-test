<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
            'user_id' => function (){
                return User::factory()->create()->id;
            },
            'title' => $this->faker->title,
            'content' => $this->faker->paragraph,
            'published' => $this->faker->boolean
        ];
    }
}
