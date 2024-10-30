<?php

namespace Database\Seeders;

use App\Models\ProductCareItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCareItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductCareItem::create([
            'product_id' => 1,               
            'product_care_id' => 1,          
            'serial_number' => 'SN001',
            'maintenance_count' => 1,
            'refill_count' => 1,
            'created_by' => 1,
        ]);
    }
}
