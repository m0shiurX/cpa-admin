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
            ['name' => 'iMonitizeIT', 'description' => 'imonetizeit.com'],
            ['name' => 'LosPollos', 'description' => 'lospollos.com'],
            ['name' => 'CPAFULL', 'description' => 'cpafull.com'],
            ['name' => 'Datify', 'description' => 'datify.com'],
            ['name' => 'Trafee', 'description' => 'trafee.com'],
            ['name' => 'ClickDealer', 'description' => 'clickdealer.com'],
        ];
        Network::insert($networks);
    }
}
