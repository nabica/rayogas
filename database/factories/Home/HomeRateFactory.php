<?php

namespace Database\Factories\Home;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeRateFactory extends Factory
{
    protected $model = \App\Models\Home\HomeRate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'button_text' => 'button'
        ];
    }
}
