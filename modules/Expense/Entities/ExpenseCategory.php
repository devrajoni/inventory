<?php

namespace Modules\Expense\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpenseCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];
    
    protected static function newFactory()
    {
        return \Modules\Expense\Database\factories\ExpenseCategoryFactory::new();
    }
}
