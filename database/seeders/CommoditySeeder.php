<?php

namespace Database\Seeders;

use App\Models\Commodity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Rice',
            'White Corn',
            'Yellow Corn',
            'Coffee',
            'Banana',
            'Mango',
            'Pineapple',
            'Coconut',
            'Sugarcane',
            'Cassava',
            'Rubber',
            'Sweet Potato',
            'Onion',
            'Eggplant',
            'Tobacco',
            'Abaca',
            'Tomato',
            'Potato',
            'Ampalaya',
            'Cabbage',
            'Calamansi',
            'Mongo',
            'Cacao',
            'Other vegetables',
            'Other crops',
            'Carabao',
            'Cattle',
            'Hog',
            'Goat',
            'Dairy',
            'Chicken',
            'Duck',
            'Milkfish',
            'Tilapia',
            'Mud crab',
            'Other aquaculture species',
            'Marine species',
        ];

        foreach ($items as $item) {
            Commodity::create([
                'name' => $item,
                'label'=> $item,
            ]);
        }
    }
}
