<?php

namespace Database\Seeders;

use App\Models\Products\ProductsWappButton;
use Illuminate\Database\Seeder;

class ProductsWappButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductsWappButton::factory()->create([
            'consultancy_url' => 'https://api.whatsapp.com/send?phone=57310%202388245&text=%C2%A1Hola!%20Estoy%20interesado%20en%20hablar%20con%20un%20asesor',
            'service_url' => 'https://api.whatsapp.com/send?phone=57310%202388245&text=%C2%A1Hola!%20Estoy%20interesado%20en%20solicitar%20un%20servicio'

        ]);


    }
}
