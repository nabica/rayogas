<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\AboutBanner::create([
            'title' => 'Somos una empresa 100% colombiana con un cálido compromiso',
            'description' => 'Nos dedicamos a la comercialización y distribución de gas licuado de petróleo (GLP) para usuarios residenciales, comerciales e industriales en el país.',
        ]);
    }
}
