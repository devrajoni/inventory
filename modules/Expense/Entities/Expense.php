<?php

namespace Modules\Expense\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Expense\Entities\ExpenseCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'title', 'category_id', 'amount', 'details' ];

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];

    public function category() {
        return $this->belongsTo(ExpenseCategory::class, 'category_id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Expense\Database\factories\ExpenseFactory::new();
    }
}
