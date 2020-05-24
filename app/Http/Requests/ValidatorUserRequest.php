<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorUserRequest extends FormRequest
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
            'first_name' => ['min:3', 'required', 'max:100'],
            'last_name' => ['min:3', 'required', 'max:100'],
            'username' => ['min:3', 'required', 'max:100'],
            'email' => ['email', 'required'],
            'password' => ['required','min:9', 'max:250'],
        ];
    }
    public function messages()
    {
        return[
            'first_name.min' => 'El campo deve de terner almenos 3 letras',
            'first_name.required' => 'El campo es nesesario',
            'first_name.max' => 'El campo deve de terner almenos 100 letras',

            'last_name.min' => 'El campo deve de terner almenos 3 letras',
            'last_name.required' => 'El campo es nesesario',
            'last_name.max' => 'El campo deve de terner almenos 100 letras',

            'username.min' => 'El campo deve de terner almenos 3 letras',
            'username.required' => 'El campo es nesesario',
            'username.max' => 'El campo deve de terner almenos 100 letras',

            'email.required' => 'Es nesesario un correo',
            'email.max' => 'El campo deve de terner almenos 100 letras',

            'password.min' => 'El campo deve de terner almenos 9 caracteres',
            'password.required' => 'El campo es nesesario',
            'password.max' => 'El campo deve de terner almenos 250 caracteres',
        ];
    }
}
