<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Home\HomeFeature::factory(1)->create([
            'title' => 'Contamos con un equipo humano profesional y especializado para acompañarte',
            'description' => '<p>
                    Año tras año hemos crecido en <strong>liderazgo y posicionamiento</strong> en el país,
                    <strong>apoyando</strong> a miles de personas y proyectos con productos que cuentan con los
                    <strong>mayores estándares de calidad</strong> y seguridad en todas las fases de envasado e
                    instalación, asegurando un <strong>menor riesgo</strong> en su uso.
                </p>',
            'image_description' => 'Más de 50 años distribuyendo GLP a los rincones del país',
        ]);
    }
}
