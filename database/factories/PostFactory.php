<?php

namespace Database\Factories;

use Date;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
        $category = Category::find(rand(1, 4));
        $content = fake()->text(100);
        return [
            'title' => fake()->text(90),
            // 'user_id' => 1,
            'image' => null,
            'description' => $content,
            'date' => date("Y-m-d"),
            'status' => 'Publish',
            'category_id' => $category->id,
        ];
    }
}
