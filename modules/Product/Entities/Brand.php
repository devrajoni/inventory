<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Brand extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'logo',
    ];

    // public function registerAllMediaConversions(): void
    // {
    //     $this->addMediaConversion('data')
    //         ->width(490)
    //         ->height(490);
    // }
    
    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\BrandFactory::new();
    }
}
