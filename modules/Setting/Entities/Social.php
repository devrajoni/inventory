<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'icon', 
        'url',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Setting\Database\factories\SocialFactory::new();
    }
}
