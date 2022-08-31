<?php

namespace Database\Factories\Pqrs;

use Illuminate\Database\Eloquent\Factories\Factory;

class PqrsObjectFactory extends Factory
{
    protected $model = \App\Models\Pqrs\PqrsObject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'uno'
        ];
    }
}
