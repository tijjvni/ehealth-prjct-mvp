<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateSpecialist extends FormRequest
{
 
    // public function authorize()
    // {
    //     return Gate::allows('update-specialist',Specialist::find($this->specialist));   
    // }

    public function rules()
    {
       return [
            'specialist' => 'required',
            'title' => 'required',
            'type' => 'required',
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
