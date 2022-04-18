<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\AboutFeature::create([
            'title' => 'Nuestro equipo profesional está totalmente capacitado para asesorarte de principio a fin',
            'description' => '<p>En <strong>Rayogas</strong>,  nuestro equipo está en constante formación para <strong>fortalecer su conocimiento</strong> y ampliar su posibilidad de crecer profesionalmente.</p> ',
        ]);

        \App\Models\About\AboutFeature::create([
            'title' => 'El servicio que brindamos se enfoca en el cumplimiento',
            'description' => '<p>Nuestra política integral se basa en brindar la mejor atención, procesos y servicios a nuestros trabajadores, clientes, accionistas, visitantes, proveedores, contratistas, comunidades y sociedad que cumplan con sus expectativas. </p>',
        ]);
    }
}
