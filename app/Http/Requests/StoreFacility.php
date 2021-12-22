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
        'address' => 'required|min:3',
        'type' => 'required|numeric|exists:facility_types,id',
       ];
    }

    public function failedValidation(Validator $validator)
    {

        // dd($validator->errors());
        throw new HttpResponseException(response()->json([
            'status'   => false,
            'message'   => 'Validation errors',
            'error'      => $validator->errors()
        ],422));
    }  
}
