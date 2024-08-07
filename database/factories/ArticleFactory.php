<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(5, true),
            'thumbnail' => $this->faker->imageUrl(),
            'user_id' => 1,
            'category_id' => $this->faker->numberBetween(1, 3),
            'status' => $this->faker->randomElement(['draft', 'publish']),
            'published_at' => now(),
        ];
    }
}
