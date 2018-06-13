<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'nome' => 'required|min:2',
            'cpf' => 'max:15',
            'tel' => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome precisa ter no mínimo 2 caracteres',
            'cpf.max' => 'O campo tamanho não pode ter mais do que 12 caracteres',
            'tel' => 'O campo :attribute precisa ser numérico'
        ];
    }
}
