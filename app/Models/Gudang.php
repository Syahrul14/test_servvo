<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $table = 'gudang';

    protected $fillable = [
        'location', 'created_by', 'status', 'nama_perusahaan', 
        'alamat', 'phone', 'email', 'id_province', 'id_regencies'
    ];

    public function productCares()
    {
        return $this->hasMany(ProductCare::class);
    }
}
