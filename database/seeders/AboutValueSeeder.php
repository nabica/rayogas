<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\AboutValue::create([
            'title' => 'Liderazgo en el servicio',
            'description' => 'Con espíritu colaborativo escuchamos y conocemos a nuestros clientes y relacionados. Trabajamos de manera empoderada para generar soluciones que superen sus expectativas.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Innovación',
            'description' => 'Buscamos permanentemente nuevas formas de desarrollar nuestro negocio con creatividad y mente abierta, respondiendo de manera flexible y ágil a la dinámica del entorno.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Respeto',
            'description' => 'Aceptamos y promovemos las diferencias individuales, valoramos la complementariedad del equipo para el logro de metas comunes y obramos según los acuerdos y políticas establecidas.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Confiabilidad',
            'description' => 'Le apostamos al uso eficiente de los recursos disponibles, estando comprometidos con la sobriedad y garantizando la optimización de nuestros procesos, hacia la plena satisfacción de nuestros clientes.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Austeridad',
            'description' => 'Generamos credibilidad por la transparencia en nuestro actuar, la seguridad integral en todos nuestros procesos y el cumplimiento de los acuerdos.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Aprendizaje permanente',
            'description' => 'Promovemos la generación de conocimiento desde el ser y el hacer, lo incorporamos, lo compartimos y aprovechamos nuestras vivencias como fuente de aprendizaje.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Transparencia',
            'description' => 'A través de la honestidad se construye la confianza y nos conocemos mejora para crecer cada día.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Pasión',
            'description' => 'Amamos y disfrutamos intensamente lo que hacemos; con entusiasmo y alegría logramos que las cosas pasen.'
        ]);
    }
}
