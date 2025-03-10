<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateQuestionRequest extends FormRequest
{

public function rules()
{
    return [
        'text' => 'required|string|max:255',
        'points' => 'required|integer|min:1',
        'options' => 'required|array|min:2',
        'options.*' => 'required|string',
        'correct_option' => 'required|integer|min:0'
    ];
}

public function messages()
{
    return [
        'text.required' => 'Le texte de la question est obligatoire',
        'points.required' => 'Le nombre de points est obligatoire',
        'points.min' => 'Le nombre de points doit être au moins 1',
        'options.required' => 'Vous devez fournir au moins deux options',
        'correct_option.required' => 'Vous devez sélectionner une option correcte'
    ];
}
    public function authorize()
    {
        return Gate::allows('edit_qst');
    }
}