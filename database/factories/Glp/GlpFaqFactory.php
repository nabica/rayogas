<?php

namespace Database\Factories\Glp;

use Illuminate\Database\Eloquent\Factories\Factory;

class GlpFaqFactory extends Factory
{
    protected $model = \App\Models\Glp\GlpFaq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true)
        ];
    }
}
