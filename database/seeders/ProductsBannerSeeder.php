<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Products\ProductsBanner::create([
            'title' => 'title banner',
            'description' => 'desc ',
        ]);
    }
}
