<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorMusicRequest extends FormRequest
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
            'muscic_name' => ['required', 'min:0', 'max:1000'],
            'avatar' => ['required'],
            'song' => ['required'],
            
        ];
    }
    public function messages()
    {
        return [
        'muscic_name.required' => 'campo requerido',
        'muscic_name.min' => 'longitud minima es de 10 letras',
        'muscic_name.max' => 'longitud maxima es de 100 letras',
        'avatar.required' => 'campo requerido',
        'song.required' => 'campo requerido',
        ];
    }
}
