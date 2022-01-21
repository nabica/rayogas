<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\AboutValue::factory(10)->create();
    }
}
