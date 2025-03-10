<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateQuizRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('edit_quize');
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|string',
            'questions' => 'required|array|min:1',
            'questions.*' => 'exists:questions,id'
        ];
    
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre du quiz est obligatoire',
            'questions.required' => 'Vous devez sélectionner au moins une question',
        ];
    }
}