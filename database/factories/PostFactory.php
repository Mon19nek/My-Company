<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;
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
    protected $model = Post::class;
    public function definition()
    {
        $categories = Category::pluck('id');

        $randomCategoryId = $categories->random();

        return [
            'title' => $this -> faker -> name(),
            'content' => $this->faker->paragraph(),
            'category_id' => $randomCategoryId,

        ];
    }
}
