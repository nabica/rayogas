<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog\BlogBanner::create([
            'title' => 'Ponte al día sobre todo lo relacionado al GLP',
            'description' => 'Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), noticas, casos de éxito, avances, entre otros temas
que sabemos te interesan.',
        ]);
    }
}
