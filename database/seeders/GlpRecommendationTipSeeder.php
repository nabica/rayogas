<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlpRecommendationTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Glp\GlpRecommendationTip::factory(7)->create();
    }
}
