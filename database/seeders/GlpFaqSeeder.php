<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlpFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿Cuáles son las capacidades de almacenamiento que manejamos en Rayogas?.',
            'description' => '<ul>
                            <li>
                                Cierra la válvula de alimentación del tanque o cilindro estacionario.
                            </li>
                            <li>
                                No busques fugas encendiendo fósforos.
                            </li>
                            <li>
                                Cierra las llaves de los quemadores que tenga encendidos.
                            </li>
                            <li>
                                Ventila las habitaciones de inmediato.
                            </li>
                            <li>
                                No enciendas apagadores, luces, ni aparatos eléctricos.
                            </li>
                            <li>
                                No realices llamadas telefónicas.
                            </li>
                            <li>
                                Sal de la casa o edificio.
                            </li>
                            <li>
                                Llama Bomberos: #119, Policía Local: 123 o Línea de Emergencia: 018000 959595.
                            </li>
                        </ul>'
        ]);

        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿Cuáles son nuestras ubicaciones en el país?',
        ]);

        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿Qué diferencia hay entre el GLP y el GN?',
        ]);

        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿En dónde puedo usar GLP Rayogas?',
        ]);

        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿Cuáles son nuestros canales de atención?',
        ]);

        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿Qué debo hacer en caso de fuga?',
        ]);

        \App\Models\Glp\GlpFaq::factory()->create([
            'title' => '¿Qué debo hacer en caso de incendio?',
        ]);
    }
}
