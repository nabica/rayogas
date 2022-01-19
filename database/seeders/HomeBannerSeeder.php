<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Home\HomeBanner::factory(1)->create([
            'title' => 'title banner',
            'description' => 'desc ',
            'button_text' => 'text',
            'button_link' => 'link'
        ]);
    }
}
