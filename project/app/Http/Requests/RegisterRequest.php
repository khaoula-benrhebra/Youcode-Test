<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'dateBorth' => 'required|date',
            'adresse' => 'required|string|max:255',
            'CIN' => 'required|string|max:20|unique:candidats',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cin_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    
    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Le prénom est obligatoire',
            'last_name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'adresse email est obligatoire',
            'email.email' => 'L\'adresse email doit être valide',
            'email.unique' => 'Cette adresse email est déjà utilisée',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.confirmed' => 'Les mots de passe ne correspondent pas',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères',
            'dateBorth.required' => 'La date de naissance est obligatoire',
            'adresse.required' => 'L\'adresse est obligatoire',
            'CIN.required' => 'Le numéro CIN est obligatoire',
            'CIN.unique' => 'Ce numéro CIN est déjà utilisé',
            'profile_photo.image' => 'Le fichier doit être une image',
            'cin_photo.image' => 'Le fichier doit être une image',
        ];
    }
}