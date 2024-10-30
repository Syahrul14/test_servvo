<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'id_category_product' => 1,
            'id_sub_category_product' => 1,
            'create_sn' => 1,
            'id_product' => 'P001',
            'name' => 'Produk A',
            'pno' => 'PNO001',
            'price_lama' => 50000,
            'price' => 45000.00,
            'stock' => 100,
            'description' => 'Deskripsi Produk A',
            'min_qty' => 1,
            'weight' => 0.5,
            'expired' => 12,
            'warranty' => 24,
            'expired_sni' => 1,
            'warranty_sni' => now(),
            'created_date' => now(),
            'status' => 1,
            'panjang' => 10.0,
            'tinggi' => 5.0,
            'fire_rating' => 'B',
            'media' => 'Media A',
            'type' => 'Type A',
            'kapasitas' => '5L',
            'kelas_kebakaran' => 'Kelas A',
            'tabung_silinder' => 'Tabung 1',
        ]);
    }
}
