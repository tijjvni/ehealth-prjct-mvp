<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreOpening extends FormRequest
{

    public function rules()
    {
       return [
            'for' => 'required|exists:specialist_types,id',
            'facility' => 'required|exists:facilities,id',
            'type' => 'required|boolean',
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
