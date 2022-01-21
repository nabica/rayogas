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
            'title' => 'destacado 1',
            'description' => 'desc ',
        ]);

        \App\Models\About\AboutFeature::create([
            'title' => 'destacado 2',
            'description' => 'desc ',
        ]);
    }
}
