<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Home\HomeBanner::factory(1)->create([
            'title' => 'Somos energía que mueve un país',
            'description' => 'Empresa 100% colombiana que vive la diversidad de nuestro país en cada recorrido distribuyendo',
            'button_text' => 'Conocer más de Rayogas',
            'button_link' => '#'
        ]);
    }
}
