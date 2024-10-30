<?php

namespace Database\Seeders;

use App\Models\ProductCare;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductCare::create([
            'gudang_id' => 1,
            'customer_name' => 'John Doe',
            'phone_number' => '081234567890',
            'latitude_pickup' => -6.2088,
            'longitude_pickup' => 106.8456,
            'product_care_date' => now()->addDays(1),
            'total' => 100000,
            'payment_method' => 1,
            'payment_status' => 1,
            'product_care_type' => 1,
            'product_care_status' => 1,
            'created_by' => 1,
        ]);

        ProductCare::create([
            'gudang_id' => 2,
            'customer_name' => 'Jane Doe',
            'phone_number' => '081234567891',
            'latitude_pickup' => -6.9147,
            'longitude_pickup' => 107.6095,
            'product_care_date' => now()->addDays(2),
            'total' => 150000,
            'payment_method' => 2,
            'payment_status' => 1,
            'product_care_type' => 2,
            'product_care_status' => 2,
            'created_by' => 2,
        ]);
    }
}
