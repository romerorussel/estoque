<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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

            'nome' => 'required|min:5',
            'descricao' => 'required|min:5|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'required' => 'É necessário preencher o campo :attribute',
            'numeric' => 'O campo :attribute precisa ser um número consistente, ex.: Valor(número real)'
        ];
    }
}
