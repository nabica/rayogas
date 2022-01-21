<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlpBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Glp\GlpBanner::create([
            'title' => 'title banner',
            'description' => 'desc ',
        ]);
    }
}
