<?php

namespace App\Http\Requests;

class StoreUserRequest extends AbstractFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'            => 'required',
            'email'           => 'required|email|unique:users,email',
            'password'        => 'required',
            'repeat_password' => 'required|same:password'
        ];
    }
}
