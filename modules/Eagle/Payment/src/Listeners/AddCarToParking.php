<?php

namespace Eagle\Payment\Listeners;

use Eagle\Car\Repositories\CarRepo;
use Eagle\Parking\Models\Parking;
use Eagle\Parking\Repositories\ParkingRepo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddCarToParking
{

    public function __construct()
    {

    }

    public function handle($event)
    {
        if ($event->payment->paymentable_type = Parking::class) {
            resolve(ParkingRepo::class)
                ->addCarToParking($event->payment->paymentable, $event->payment->buyer_id);

        }
    }
}
