<?php

namespace Eagle\Car\Http\Controllers;

use App\Http\Controllers\Controller;
use Eagle\Car\Http\Requests\StoreCarRequest;
use Eagle\Car\Http\Requests\UpdateCarRequest;
use Eagle\Car\Repositories\CarRepo;
use Eagle\Parking\Repositories\ParkingRepo;
use Eagle\Payment\Gateways\Gateway;
use Eagle\Payment\Services\PaymentServices;
use Eagle\RolePermission\Models\Permission;

class CarController extends Controller
{
    private $carRepo;

    public function __construct(CarRepo $carRepo)
    {

        $this->carRepo = $carRepo;
    }

    public function index()
    {
        if (auth()->user()->hasPermissionTo(Permission::SUPER_ADMIN)) {
            $cars = $this->carRepo->all();
        } else {
            $cars = $this->carRepo->findByUserId(auth()->id());
        }
        return view("Car::index", compact("cars"));
    }

    public function create()
    {
        if (auth()->user()->cars->count()) {
            newFeedback("شما یک خودرو دارید", "حداکثر خودرو برای شخص یک خودرو می باشد!", "red");
            return back();
        }

        return view("Car::create");
    }

    public function store(StoreCarRequest $request)
    {
        if (auth()->user()->cars->count()) {
            newFeedback("شما یک خودرو دارید", "حداکثر خودرو برای شخص یک خودرو می باشد!", "red");
            return back();
        }
        $this->carRepo->store($request->all());
        newFeedback("عملیات موفقیت آمیز", "عملیات با موفقیت انجام شد", "green");
        return redirect("/car");

    }

    public function edit($id)
    {
        $car = $this->carRepo->findOrFailById($id);
        $this->authorize("functions", $car);
        return view("Car::edit", compact("car"));
    }

    public function update($id, UpdateCarRequest $request)
    {
        $car = $this->carRepo->findOrFailById($id);
        $this->authorize("functions", $car);
        $this->carRepo->update($id, $request->all());
        newFeedback("عملیات موفقیت آمیز", "ویرایش با موفقیت انجام شد", "green");

        return redirect("/car");
    }

    public function delete($id)
    {
        $car = $this->carRepo->findOrFailById($id);
        $this->authorize("functions", $car);

        $this->carRepo->delete($id);
        newFeedback("عملیات موفقیت آمیز", "حذف با موفقیت انجام شد", "red");

        return redirect("/car");
    }

    public function buy($parking_id, ParkingRepo $parkingRepo)
    {
        $parking = $parkingRepo->findOrFailById($parking_id);
        $rezervCount = $parking->cars->count();

        if ($parking->capacity <= $rezervCount){
            newFeedback("ظرفیت پر","ظرفیت این پارکینگ پر است!","red");
            return back();
        }

        $payment = PaymentServices::generate($parking->price, $parking, auth()->user(), $parking->user_id);
        resolve(Gateway::class)->redirect();
    }
}
