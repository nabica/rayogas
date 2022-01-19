<?php

namespace Database\Factories\Home;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFeatureFactory extends Factory
{
    protected $model = \App\Models\Home\HomeFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'banner'
        ];
    }
}
