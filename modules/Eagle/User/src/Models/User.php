<?php

namespace Eagle\User\Models;

use Eagle\Car\Models\Car;
use Eagle\Parking\Models\Parking;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\True_;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory,HasRoles, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getBannerAttribute()
    {
        return asset('/panel/img/avatar/' . $this->avatar);
    }

    public function parkings()
    {
        return $this->hasMany(Parking::class, "user_id", "id");
    }

    public function cars()
    {
        return $this->hasMany(Car::class, "user_id", "id");
    }

    public function car()
    {
        return $this->hasOne(Car::class,"user_id","id");
    }

}
