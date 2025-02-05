<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreSpecialist extends FormRequest
{

    public function rules()
    {
       return [
            'title' => 'required|min:1',
            'type' => 'required|exists:specialist_types,id',
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
}
