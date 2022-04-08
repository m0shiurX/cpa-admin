<?php

namespace Database\Seeders;

use App\Models\Network;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NetworkSeeder extends Seeder
{

    public function run(): void
    {
        $networks = [
            ['name' => 'iMonitizeIT'],
            ['name' => 'LosPollos'],
            ['name' => 'CPAFULL'],
            ['name' => 'Datify'],
            ['name' => 'Trafee'],
            ['name' => 'ClickDealer'],
        ];
        Network::insert($networks);
    }
}
