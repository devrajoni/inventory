<?php

namespace Modules\Attendence\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class DailyAttendence extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'attendence',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Attendence\Database\factories\DailyAttendenceFactory::new();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];
}
