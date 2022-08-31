<?php

namespace Database\Factories\Products;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsWappButtonFactory extends Factory
{
    protected $model = \App\Models\Products\ProductsWappButton::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'consultancy_url' => 'uno',
            'service_url' => 'dos'
        ];
    }
}
