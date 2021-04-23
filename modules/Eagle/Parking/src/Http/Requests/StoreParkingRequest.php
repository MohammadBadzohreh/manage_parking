<?php

namespace Eagle\Parking\Http\Requests;

use Eagle\Parking\Models\Parking;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreParkingRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            "title" => "required|string",
            "capacity" => "required|numeric",
            "type" => ["required", Rule::in(Parking::$TYPES)],
            "status" => ["required", Rule::in(Parking::$STATUSES)],
            "avatar" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "address" => "required|string|min:7",
            "description" => "nullable|string|min:10",
            "price"=>"required|numeric|min:5000",
        ];
    }

    public function attributes()
    {
        return [
            "capacity" => "ظرفیت",
            "type" => "نوع پارکینگ",
            "status" => "وضعیت",
            "avatar" => "تصویر",
            "address" => "آدرس",
            "description"=>"توضیحات",
        ];
    }
}
