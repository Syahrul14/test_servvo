<?php

namespace App\Models;

use App\Models\Product;
use App\Models\ProductCare;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCareItem extends Model
{
    use HasFactory;

    protected $table = 'product_care_item';

    protected $fillable = [
        'product_id', 'product_care_id', 'serial_number', 
        'maintenance_count', 'refill_count', 'created_by'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productCare()
    {
        return $this->belongsTo(ProductCare::class);
    }
}
