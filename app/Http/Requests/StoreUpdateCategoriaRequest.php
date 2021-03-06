<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCategoriaRequest extends FormRequest
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
            'nome' => 'required|min:3|max:255|unique:categorias,nome',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório!',
            'nome.min' => 'Ops! Minimo de 3 caracteres!',
            'nome.unique' => 'Essa categoria já existe!',
        ];
    }
}
