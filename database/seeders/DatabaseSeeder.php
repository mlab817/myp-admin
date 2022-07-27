<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Encore\Admin\Auth\Database\AdminTablesSeeder;
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
    }
}
