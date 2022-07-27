<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Encore\Admin\Auth\Database\AdminTablesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminTablesSeeder::class);
        $this->call(CommoditySeeder::class);
        $this->call(CommoditySystemSeeder::class);
        $this->call(ValueChainSegmentSeeder::class);
        $this->call(PrexcSeeder::class);
        $this->call(ImplementingUnitSeeder::class);
        $this->call(LocationSeeder::class);

        $file = file_get_contents( database_path('menu.json') );

        $menuItems = json_decode($file)->admin_menu;

        // truncate
        DB::table('admin_menu')->truncate();

        foreach ($menuItems as $item) {
            DB::table('admin_menu')->insert([
                'id' => $item->id,
                'parent_id' => $item->parent_id,
                'title' => $item->title,
                'order' => $item->order,
                'icon' => $item->icon,
                'uri'   => $item->uri,
                'permission' => $item->permission,
            ]);
        }
    }
}
