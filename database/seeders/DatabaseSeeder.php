<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GudangSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ProductCareSeeder;
use Database\Seeders\ProductCareItemSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $this->call([
            GudangSeeder::class,
            ProductSeeder::class,
            ProductCareSeeder::class,
            ProductCareItemSeeder::class,
        ]);
    }
}
