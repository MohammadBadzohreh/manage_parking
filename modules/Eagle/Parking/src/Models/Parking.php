<?php

namespace Eagle\Parking\Models;

use Eagle\Car\Models\Car;
use Eagle\Payment\Models\Payment;
use Eagle\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "title",
        "capacity",
        "type",
        "status",
        "avatar",
        "address",
        "description",
        "uses",
        "price",
    ];


    const CASH_TYPE = 'cash';
    const FREE_TYPE = 'free';

    static $TYPES = [
        self::CASH_TYPE,
        self::FREE_TYPE,
    ];

    const FULL_STATUS = "full";
    const NOT_FILLED_STATUS = "not filled";

    static $STATUSES = [
        self::FULL_STATUS,
        self::NOT_FILLED_STATUS,
    ];

//region    getters

    public function getBannerAttribute()
    {
        return asset("uploaded/parkings/" . $this->avatar);
    }

//endregion getters
//    region relations
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, "paymentable");
    }

    public function cars()
    {
        return $this->hasMany(Car::class,"car_id","id");
    }

//endregion relations

    public function path()
    {
        return route("parking.detail", $this->id);
    }

}
