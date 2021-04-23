<?php

namespace Eagle\Car\Http\Requests;

use Eagle\Car\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCarRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->check();
    }


    public function rules()
    {
        return [
            "car_type"=>["required",Rule::in(Car::$CARS_TYPE)],
            "tag"=>"required|string",
            "color"=>["required",Rule::in(Car::$COLORS)],
            "model"=>"required|numeric",
        ];
    }
}
