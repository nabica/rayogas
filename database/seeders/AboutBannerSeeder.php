<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\AboutBanner::create([
            'title' => 'title banner',
            'description' => 'desc ',
        ]);
    }
}
