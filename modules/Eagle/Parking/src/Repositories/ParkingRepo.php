<?php

namespace Eagle\Parking\Repositories;

use Eagle\Car\Models\Car;
use Eagle\Parking\Models\Parking;
use Illuminate\Support\Facades\File;

class ParkingRepo
{
    public function findOrFailById($id)
    {
        return Parking::query()->findOrFail($id);
    }

    public function store($data)
    {
        $data["user_id"] = auth()->id();
        if (array_key_exists("avatar", $data)) {
            $extention = $data["avatar"]->getClientOriginalExtension();
            $original_name = str_replace("." . $extention, "", $data["avatar"]->getClientOriginalName());
            $file_name = $original_name . time() . "." . $extention;
            $data["avatar"]->move(public_path('/uploaded/parkings'), $file_name);
            $data['avatar'] = $file_name;
        }
        Parking::query()->create($data);
    }

    public function paginate()
    {
        return Parking::query()->paginate();
    }

    public function update($data, $id)
    {
        $parking = $this->findOrFailById($id);
        if (array_key_exists("avatar", $data)) {
            if ($parking->avatar) {
                if (File::exists(public_path('uploaded/parkings/' . $parking->avatar))) {
                    File::delete(public_path('uploaded/parkings/' . $parking->avatar));
                }
            }
            $extention = $data["avatar"]->getClientOriginalExtension();
            $original_name = str_replace("." . $extention, "", $data["avatar"]->getClientOriginalName());
            $file_name = $original_name . time() . "." . $extention;
            $data["avatar"]->move(public_path('/uploaded/parkings'), $file_name);
            $data['avatar'] = $file_name;
        }
        $parking->update($data);
    }

    public function delete($id)
    {
        $parking = $this->findOrFailById($id);
        if ($parking->avatar) {
            if (File::exists(public_path('uploaded/parkings/' . $parking->avatar))) {
                File::delete(public_path('uploaded/parkings/' . $parking->avatar));
            }
        }
        $parking->delete();
    }


    public function addCarToParking(Parking $parking, $buyer_id)
    {
        $car = Car::query()->where("user_id", $buyer_id)->firstOrFail();
        $car->parking_id = $parking->id;
        $car->save();
    }
}
