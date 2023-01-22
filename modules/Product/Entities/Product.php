<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vendor_id',
        'supplier_id',
        'category_id',
        'brand_id',
        'unit_id',
        'name',
        'sku',
        'description',
        'buying_price',
        'selling_price',
        'discount',
        'price',
        'in_stock',
        'status',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new(,
    }
}
