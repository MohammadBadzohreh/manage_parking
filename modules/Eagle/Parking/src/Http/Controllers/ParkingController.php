<?php

namespace Eagle\Parking\Http\Controllers;

use App\Http\Controllers\Controller;
use Eagle\Parking\Http\Requests\StoreParkingRequest;
use Eagle\Parking\Http\Requests\UpdateParkingRequest;
use Eagle\Parking\Models\Parking;
use Eagle\Parking\Repositories\ParkingRepo;
use Eagle\Payment\Models\Payment;

class ParkingController extends Controller
{
    private $parkingRepo;

    public function __construct(ParkingRepo $parkingRepo)
    {
        $this->parkingRepo = $parkingRepo;
    }

    public function index()
    {

        $parkings = $this->parkingRepo->paginate();
        return view("Parking::index", compact("parkings"));
    }

    public function create()
    {
        return view("Parking::create");

    }

    public function store(StoreParkingRequest $request)
    {
        $this->parkingRepo->store($request->all());
        newFeedback("عملیات موفقیت آمیز", "عملیات با موفقیت انجام شد", "green");

        return redirect()->route("parking.index");
    }

    public function edit($id)
    {
        $parking = $this->parkingRepo->findOrFailById($id);
        return view("Parking::edit", compact("parking"));

    }

    public function update($id,UpdateParkingRequest $request)
    {
        $this->parkingRepo->update($request->all(),$id);
        newFeedback("عملیات موفقیت آمیز", "ویرایش با موفقیت انجام شد", "green");

        return redirect()->route("parking.index");
    }

    public function delete($id)
    {
        $this->parkingRepo->delete($id);
        newFeedback("عملیات موفقیت آمیز", "حذف با موفقیت انجام شد", "red");

        return redirect()->route("parking.index");
    }

    public function detail($id)
    {
        $parking = Parking::query()->findOrFail($id);
        return view("Parking::detail",compact("parking"));
    }


}
