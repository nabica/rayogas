<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlpRecommendationPdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Glp\GlpRecommendationPdf::factory(4)->create();
    }
}
