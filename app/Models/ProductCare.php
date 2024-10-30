<?php

namespace App\Models;

use App\Models\Gudang;
use App\Models\ProductCareItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCare extends Model
{
    use HasFactory;

    protected $table = 'product_care';

    protected $fillable = [
        'gudang_id', 'customer_name', 'phone_number', 'latitude_pickup', 
        'longitude_pickup', 'product_care_date', 'total', 'payment_method', 
        'payment_status', 'product_care_type', 'product_care_status', 
        'created_by', 'pickup_at', 'pickup_by', 'delivered_at', 'delivered_by'
    ];

    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }

    public function productCareItems()
    {
        return $this->hasMany(ProductCareItem::class);
    }
}
