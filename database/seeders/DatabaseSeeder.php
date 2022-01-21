<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        /*
        |----------------------------------------------------------------------
        | Home seeders
        |----------------------------------------------------------------------
        */
        $this->call(HomeBannerSeeder::class);
        $this->call(HomeFeatureSeeder::class);
        $this->call(HomeRateSeeder::class);

        /*
        |----------------------------------------------------------------------
        | About seeders
        |----------------------------------------------------------------------
        */
        $this->call(AboutBannerSeeder::class);
        $this->call(AboutFeatureSeeder::class);
        $this->call(AboutValueSeeder::class);
        $this->call(AboutWhyChooseFeatureSeeder::class);

        /*
        |----------------------------------------------------------------------
        | Products seeders
        |----------------------------------------------------------------------
        */
        $this->call(ProductsBannerSeeder::class);

        /*
        |----------------------------------------------------------------------
        | Glp seeders
        |----------------------------------------------------------------------
        */
        $this->call(GlpBannerSeeder::class);
        $this->call(GlpRecommendationTipSeeder::class);
        $this->call(GlpRecommendationPdfSeeder::class);
        $this->call(GlpFaqSeeder::class);

        /*
        |----------------------------------------------------------------------
        | Blog seeders
        |----------------------------------------------------------------------
        */
        $this->call(BlogBannerSeeder::class);
    }
}
