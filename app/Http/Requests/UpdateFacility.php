<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateFacility extends FormRequest
{
 

    public function rules()
    {
       return [
            'facility' => 'required',
            'name' => 'required',
            'address' => 'required',
            'type' => 'required|exists:facility_types,id',
            'user' => 'nullable|exists:users,id',
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
