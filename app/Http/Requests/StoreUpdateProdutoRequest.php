<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProdutoRequest extends FormRequest
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
            'nome' => 'required|min:3|max:255',
            'preco' => 'required',
            'idcat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório!',
            'nome.min' => 'Ops! Minimo de 3 caracteres!',
            'preco.required' => 'Preço é obrigatório!',
            'idcat.required' => 'Escolha uma categoria para o produto!',
            
        ];
    }
}
