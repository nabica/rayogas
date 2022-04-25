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
        \App\Models\Glp\GlpRecommendationPdf::factory()->create([
            'title' => 'Manual de seguridad del usuario'
        ]);

        \App\Models\Glp\GlpRecommendationPdf::factory()->create([
            'title' => 'Manejo seguro de montacarga'
        ]);

        \App\Models\Glp\GlpRecommendationPdf::factory()->create([
            'title' => 'Manejo seguro de GLP en casa'
        ]);

        \App\Models\Glp\GlpRecommendationPdf::factory()->create([
            'title' => 'Manejo seguro'
        ]);

        \App\Models\Glp\GlpRecommendationPdf::factory()->create([
            'title' => 'Tanques granel'
        ]);
    }
}
