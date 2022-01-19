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
            'title' => 'title banner',
            'description' => 'des banner',
            'image_description' => 'img desc',
        ]);
    }
}
