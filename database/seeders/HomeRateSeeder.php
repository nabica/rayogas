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
            'button_text' => 'Octubre 2021',
        ]);

        \App\Models\Home\HomeRate::create([
            'button_text' => 'Noviembre 2021',
        ]);
    }
}
