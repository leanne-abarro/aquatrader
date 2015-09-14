<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "username" => "required|unique:users,username,".$this->route('id'),
            "email" => "required|unique:users,email,".$this->route('id'),
            "firstname" => "required",
            "lastname" => "required"
        ];
    }
}