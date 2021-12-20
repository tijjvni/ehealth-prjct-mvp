<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreFacility extends FormRequest
{
  
    public function rules()
    {
       return [
        'name' => 'required|min:3',
        'addresss' => 'required|min:3',
        'type' => 'required|exists:facility_types,id',
       ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'error'      => $validator->errors()
        ],422));
    }  
}
