<?php

namespace App\Http\Requests; 

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class LoginRequest extends FormRequest
{

    public function rules()
    {
       return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
       ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'   => false,
            'message'   => 'Validation errors',
            'error'      => $validator->errors()
        ],422));
    }    

    public function messages()
    {
        return [
            'email.exists' => 'Invalid login details',
        ];
    }    
        
}