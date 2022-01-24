<?php

namespace Database\Factories\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    protected $model = \App\Models\Blog\BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'excerpt_description' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true)
        ];
    }
}
