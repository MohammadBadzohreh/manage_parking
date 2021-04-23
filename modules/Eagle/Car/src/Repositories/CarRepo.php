<?php

namespace Eagle\Car\Repositories;

use Eagle\Car\Models\Car;

class CarRepo
{


    public function findOrFailById($car_id)
    {
        return Car::query()->findOrFail($car_id);
    }

    public function store($data)
    {
        return Car::query()
            ->create([
                "user_id" => auth()->id(),
                "car_type" => $data["car_type"],
                "tag" => $data["tag"],
                "color" => $data["color"],
                "model" => $data["model"]
            ]);
    }

    public function paginate()
    {
        return Car::query()->paginate();
    }

    public function delete($car_id)
    {
        $car = $this->findOrFailById($car_id);
        return $car->delete();
    }

    public function update($car_id, $data)
    {
        $car = $this->findOrFailById($car_id);
        $car->update([
            "car_type" => $data["car_type"],
            "tag" => $data["tag"],
            "color" => $data["color"],
            "model" => $data["model"]
        ]);
    }


}
