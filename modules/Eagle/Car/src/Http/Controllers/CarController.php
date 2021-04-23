<?php

namespace Eagle\Car\Http\Controllers;

use App\Http\Controllers\Controller;
use Eagle\Car\Http\Requests\StoreCarRequest;
use Eagle\Car\Http\Requests\UpdateCarRequest;
use Eagle\Car\Repositories\CarRepo;
use Eagle\Parking\Repositories\ParkingRepo;
use Eagle\Payment\Gateways\Gateway;
use Eagle\Payment\Services\PaymentServices;

class CarController extends Controller
{
    private $carRepo;

    public function __construct(CarRepo $carRepo)
    {

        $this->carRepo = $carRepo;
    }

    public function index()
    {
        $cars = $this->carRepo->paginate();
        return view("Car::index", compact("cars"));
    }

    public function create()
    {
        return view("Car::create");
    }

    public function store(StoreCarRequest $request)
    {
        $this->carRepo->store($request->all());
        newFeedback("عملیات موفقیت آمیز", "عملیات با موفقیت انجام شد", "green");
        return redirect()->route("car.index");

    }

    public function edit($id)
    {
        $car = $this->carRepo->findOrFailById($id);
        return view("Car::edit", compact("car"));
    }

    public function update($id, UpdateCarRequest $request)
    {
        $this->carRepo->update($id, $request->all());
        newFeedback("عملیات موفقیت آمیز", "ویرایش با موفقیت انجام شد", "green");

        return redirect()->route("car.index");
    }

    public function delete($id)
    {
        $this->carRepo->delete($id);
        newFeedback("عملیات موفقیت آمیز", "حذف با موفقیت انجام شد", "red");

        return route("car.index");
    }

    public function buy($parking_id,ParkingRepo $parkingRepo)
    {
        $parking = $parkingRepo->findOrFailById($parking_id);

//        todo feedback

        $payment = PaymentServices::generate($parking->price, $parking, auth()->user(),$parking->user_id);
        resolve(Gateway::class)->redirect();
    }
}
