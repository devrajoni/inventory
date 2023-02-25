<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Unit;
use Modules\Product\Entities\Brand;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

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
    public function vendor() {
        return $this->belongsTo(User::class, 'vendor_id');

    }

    public function supplier() {
        return $this->belongsTo(User::class, 'supplier_id');

    }


    public function category() {
        return $this->belongsTo(Category::class, 'category_id');

    }

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');

    }

    public function unit() {
        return $this->belongsTo(Unit::class, 'unit_id');

    }
    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new ();
    }
}
