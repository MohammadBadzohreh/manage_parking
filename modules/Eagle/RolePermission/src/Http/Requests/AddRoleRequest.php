<?php

namespace Eagle\RolePermission\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRoleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           "role"=>"required|exists:roles,name",
        ];
    }
}
