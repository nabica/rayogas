<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlpRecommendationTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Solo abre y cierra las llaves de paso. Para cualquier otra operación llámanos, 01 8000 959595.'
        ]);

        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Solicita anualmente revisiones técnicas de conexiones, aparatos y almacena los cilindros de forma vertical.'
        ]);

        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Usa las mangueras o equipos especialmente diseñados para GLP.'
        ]);

        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Ten espacios abiertos y ventilados. No olvides contenidos al fuego que puedan derramarse y apagar los quemadores.'
        ]);

        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Verifica el color de la llama debe ser azul parejo, si encuentras algo diferente comunícate con nosotros.'
        ]);

        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Mantén limpios los conductos de evacuación del gas'
        ]);

        \App\Models\Glp\GlpRecommendationTip::factory()->create([
            'title' => 'Ante cualquier duda comunícate con nosotros
a la línea 01 8000 959595.'
        ]);
    }
}
