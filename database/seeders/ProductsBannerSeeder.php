<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Products\ProductsBanner::create([
            'title' => 'Somos energía para tu empresa',
            'description' => 'Contamos con un amplio portafolio de servicios que se adaptan a las necesidades específicas de tu
industria, empresa u hogar',
        ]);
    }
}
