<?php

namespace Database\Seeders;

use App\Models\CommoditySystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommoditySystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Rice-based',
            'Corn and Livestock-based',
            'Coconut-based',
            'Fisheries-based',
            'Geographically specialized',
            'Commodity-neutral',
        ];

        foreach ($items as $item) {
            CommoditySystem::create([
                'name' => $item,
                'label'=> $item,
            ]);
        }
    }
}
