<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog\BlogBanner::create([
            'title' => 'title banner',
            'description' => 'desc ',
        ]);
    }
}
