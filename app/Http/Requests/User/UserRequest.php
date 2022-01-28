<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $on_update =      $this->method() == "PUT" ? "": "|unique:users,email";
        $on_user_update = $this->method() == "PUT" ? "": "required|";
        return [
            'name' => 'required|max:50|unique:users,name',
            'email' => 'required|email' . $on_update,
            'password' => $on_user_update . 'min:6',
            'role_id' => 'required|numeric',
            'avatar' => 'required|image'

        ];
    }
     public function messages(){

        return[

            // 'name.required' => 'User Name is required'
            'name.required' => 'یوزر کا نام ضروری ہے'
        ];
     }
}
