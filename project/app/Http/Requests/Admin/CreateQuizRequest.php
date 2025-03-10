<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class CreateQuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
    
    public function authorize()
    {
        return Gate::allows('creat_quize'); 
    }
}
