<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutWhyChooseFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\AboutWhyChooseFeature::create([
            'title' => 'Seguridad en abastecimiento',
            'description' => 'Contamos con nuestro aliado estratégico Almagas, comercializadora mayorista, garantizando el abastecimiento seguro.'
        ]);

        \App\Models\About\AboutWhyChooseFeature::create([
            'title' => 'Flota propia',
            'description' => 'Nuestros carro tanques cuentan con control de suministro de líquido, garantizando la entrega precisa y correcta a cada usuario. Contamos con más de 200 vehículos  cómo <strong>carro tanques, cisternas y vehículos repartidores transportadores de GLP</strong>.'
        ]);

        \App\Models\About\AboutWhyChooseFeature::create([
            'title' => 'Manejo de Sustancias',
            'description' => 'Nuestro personal cuentan con la experiencia y capacitación en el manejo adecuado de sustancias peligrosas.'
        ]);
    }
}
