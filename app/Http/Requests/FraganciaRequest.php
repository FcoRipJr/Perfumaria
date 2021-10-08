<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FraganciaRequest extends FormRequest
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
            'nome'=>'required',
            'estoque'=>'required',
             ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'estoque.required' => 'O campo Estoque é obrigatório',
             ];

    }
}