<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog\BlogPost::factory()->create([
            'title' => 'Ecopetrol subastará el 90% de GLP que produce en el país',
            'excerpt_description' => 'El próximo viernes Ecopetrol asignará, para los siguientes seis
                        meses, la distribución nacional del volumen total de Gas Licuado de Propano (GLP), que produce
                        en las refinerías de Cartagena y Barrancabermeja, así como en los campos de Cusiana y Apiay, y
                        en la planta de Dina.'
        ]);

        \App\Models\Blog\BlogPost::factory()->create([
            'title' => 'Esfuerzo oficial no alcanzó para cubrir consumo de Gas Licuado de
                            Propano',
            'excerpt_description' => 'Aunque la entrada en funcionamiento de Reficar y Termoyopal ayudó a
                        resolver la crisis por el desabastecimiento de Gas Licuado de Propano (GLP) en el país, aún
                        existen problemas para que la oferta pueda atender debidamente la creciente demanda de este
                        combustible.'
        ]);

        \App\Models\Blog\BlogPost::factory()->create([
            'title' => '¿Por qué el GLP es una buena alternativa de combustible para el
                            país?',
            'excerpt_description' => 'El GLP se ajusta a la realidad económica de los hogares tanto en
                        costo como en beneficio. Solo basta con ver en el mundo a los vehículos que utilizan gas propano
                        y que tienen un rendimiento mucho mayor con relación al número de kilómetros que recorren.'
        ]);

        \App\Models\Blog\BlogPost::factory()->create([
            'title' => 'El GLP es la clave en los procesos de generación',
            'excerpt_description' => 'Desde enero del 2010 el sector del Gas Licuado de Petróleo (GLP),
                        más conocido como gas propano está en un proceso de formalización. Así mismo, durante los
                        últimos seis meses (enero-junio 2016) estuvo en un proceso de regulación para su actividad.'
        ]);

        \App\Models\Blog\BlogPost::factory(20)->create();
    }
}
