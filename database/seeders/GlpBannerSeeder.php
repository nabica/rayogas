<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlpBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Glp\GlpBanner::create([
            'title' => 'El GLP una alternativa ideal',
            'description' => 'El GLP o Gas
Licuado de Petróleo es un combustible producto de una mezcla de hidrocarburos, principalmente propano y/o butano, que se
encuentra en estado gaseoso a presión atmosférica normal.',
        ]);
    }
}
