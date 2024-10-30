<?php

namespace Database\Seeders;

use App\Models\Gudang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Gudang::create([
            'nama_perusahaan' => 'Gudang Utama', 
            'alamat' => 'Jl. Raya No. 1',
            'location' => 'Jakarta',
            'phone' => '081234567890',
            'email' => 'gudangutama@example.com',
            'id_province' => 1, 
            'id_regencies' => 1,
            'created_by' => 1,
            'status' => 1,
        ]);
        Gudang::create([
            'nama_perusahaan' => 'Gudang Cabang 1', 
            'alamat' => 'Jl. Raya No. 2',
            'location' => 'Bandung',
            'phone' => '081234567891',
            'email' => 'gudangcabang1@example.com',
            'id_province' => 2,
            'id_regencies' => 2,
            'created_by' => 1,
            'status' => 1,
        ]);
    }
}
