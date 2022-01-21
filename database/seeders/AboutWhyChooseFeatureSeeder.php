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
            'title' => 'titulo 1',
            'description' => 'des 1'
        ]);

        \App\Models\About\AboutWhyChooseFeature::create([
            'title' => 'titulo 2',
            'description' => 'des 2'
        ]);

        \App\Models\About\AboutWhyChooseFeature::create([
            'title' => 'titulo 3',
            'description' => 'des 3'
        ]);
    }
}
