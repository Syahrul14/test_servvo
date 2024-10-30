<?php

namespace App\Models;

use App\Models\ProductCareItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'id_category_product', 'id_sub_category_product', 'create_sn', 
        'id_product', 'name', 'pno', 'price_lama', 'price', 'stock', 
        'description', 'min_qty', 'weight', 'expired', 'warranty', 
        'expired_sni', 'warrant_sni', 'created_date', 'status', 
        'panjang', 'tinggi', 'fire_rating', 'media', 'type', 
        'kapasitas', 'kelas_kebakaran', 'tabung_silinder'
    ];

    public function productCareItems()
    {
        return $this->hasMany(ProductCareItem::class);
    }
}
