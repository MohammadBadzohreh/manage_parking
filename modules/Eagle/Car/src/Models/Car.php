<?php

namespace Eagle\Car\Models;

use Eagle\Parking\Models\Parking;
use Eagle\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "car_type",
        "tag",
        "color",
        "model",
        "parking_id"
    ];

    const PRIDE_TYPE = "pride";
    const PEGOUT_405_TYPE = "pegout_405";
    const PEGOUT_PARS_TYPE = "pegout_pars";
    const NEISSAN_TYPE = "neissan";
    static $CARS_TYPE = [
        self::PRIDE_TYPE,
        self::PEGOUT_405_TYPE,
        self::PEGOUT_PARS_TYPE,
        self::NEISSAN_TYPE,
    ];
    const YELLOW_COLOR = "yellow";
    const RED_COLOR = "red";
    const BLUE_COLOR = "blue";
    const WHITE_COLOR = "white";
    const GREEN_COLOR = "green";

    static $COLORS = [
        self::YELLOW_COLOR,
        self::RED_COLOR,
        self::BLUE_COLOR,
        self::WHITE_COLOR,
        self::GREEN_COLOR,
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function parking()
    {
        return $this->belongsTo(Parking::class, "parking_id", "id");
    }
}
