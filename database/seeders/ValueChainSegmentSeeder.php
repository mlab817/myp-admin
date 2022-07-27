<?php

namespace Database\Seeders;

use App\Models\ValueChainSegment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueChainSegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Input supply',
            'Production',
            'Post-harvest and Processing',
            'Logistics and Marketing',
            'Consumption',
        ];

        foreach ($items as $item) {
            ValueChainSegment::create([
                'name' =>$item,
                'label'=>$item,
            ]);
        }
    }
}
