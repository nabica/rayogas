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
            'description' => 'Con espíritu colaborativo escuchamos y conocemos a nuestros clientes y relacionados, trabajando para generar soluciones que superen sus expectativas.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Innovación',
            'description' => 'Buscamos permanentemente nuevas formas de desarrollar nuestro negocio con creatividad, respondiendo de manera ágil a la dinámica del entorno.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Respeto',
            'description' => 'Aceptamos y promovemos las diferencias individuales valorando la complementariedad del equipo obrando para el logro de metas comunes.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Confiabilidad',
            'description' => 'Le apostamos al uso eficiente de los recursos disponibles, comprometidos con la sobriedad y garantizando la optimización de nuestros procesos.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Austeridad',
            'description' => 'Generamos credibilidad por la transparencia en nuestro actuar, la seguridad integral en todos nuestros procesos y el cumplimiento de los acuerdos.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Aprendizaje permanente',
            'description' => 'Promovemos la generación de conocimiento desde el ser y el hacer, lo incorporamos y compartimos vivencias como fuente de aprendizaje.'
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Transparencia',
            'description' => 'A través de la honestidad se construye la confianza y nos conocemos mejor para crecer cada día. De esta manera construimos familia y empresa. '
        ]);

        \App\Models\About\AboutValue::create([
            'title' => 'Pasión',
            'description' => 'Amamos y disfrutamos intensamente lo que hacemos; con entusiasmo y alegría logramos que las cosas pasen para quienes hacen parte de Rayogas.'
        ]);
    }
}
