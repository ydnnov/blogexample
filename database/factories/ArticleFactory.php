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
            'title' => $this->faker->sentence($this->faker->numberBetween(3, 6)),
            'content' => $this->faker->paragraph,
            'num_views' => $this->faker->numberBetween(10, 10000),
            'num_likes' => $this->faker->numberBetween(10, 10000),
        ];
    }
}
