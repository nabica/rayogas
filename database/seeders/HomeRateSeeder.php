<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Home\HomeRate::create([
            'button_text' => 'boton 1',
        ]);

        \App\Models\Home\HomeRate::create([
            'button_text' => 'boton 2',
        ]);
    }
}
