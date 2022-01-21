<?php

namespace Database\Factories\Glp;

use Illuminate\Database\Eloquent\Factories\Factory;

class GlpRecommendationPdfFactory extends Factory
{
    protected $model = \App\Models\Glp\GlpRecommendationPdf::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
