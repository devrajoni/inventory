<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Zoha\Metable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Metable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'phone',
        'email',
        'username',
        'password',
        'status',
    ];

    public $metaAttributes = [
        'address_line_one',
        'address_line_two',
        'country',
        'state',
        'city',
        'postcode',
    ];

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');

    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getProfileImageAttribute(){
        $name = \Str::of($this->name)->replace('','+');
        return 'https://ui-avatars.com/api/?name='.$name.'&background=000&size=150&color=fff';
    }
}
