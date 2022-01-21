<?php

namespace Database\Factories\About;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutValueFactory extends Factory
{
    protected $model = \App\Models\About\AboutValue::class;

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
