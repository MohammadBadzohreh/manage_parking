<?php

namespace Eagle\RolePermission\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            "name" => "required|min:3|unique:roles,name," . $this->permission,
            "permissions" => "nullable|array|min:1",
        ];
    }

    public function attributes()
    {
        return [
            "permissions" => "نقش کاربری"
        ];
    }
}
