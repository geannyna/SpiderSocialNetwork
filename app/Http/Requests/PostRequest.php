<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'user_id' => 'required'
             //no poner coma despues del ultimo campo en un array, max:10
        ];
    }
    public function messages(){
        return[
            // 'title.required'=>'Este campo es obligatorio',
            // 'title.nim'=>'Tiene que tener mas de 5 caracteres.',
            'title' => [
                'required' => 'Este campo es obligatorio',
                'min' => 'Tiene que tener mas de 5 caracteres.'
            ],
            'content' => [
                'required' => 'Este campo es obligatorio',
                'min' => 'Tiene que tener más de 10 caracteres.'
            ]
        ];
    }
}
