<?php

namespace App\Http\Requests\Candidat;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class TakeQuizRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pass_quiz');
    }

    public function rules()
    {
        return [
            'question_*' => 'sometimes|exists:question_options,id'
        ];
    }
}