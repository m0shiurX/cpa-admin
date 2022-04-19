<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConversionSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Conversion::factory(10)->create();
    }
}
