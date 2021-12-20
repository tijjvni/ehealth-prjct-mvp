<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Facility;

// Requests
use App\Http\Requests\StoreFacility;

// resources
use App\Http\Resources\FacilityResource;

// traits
use App\Traits\ApiResponse;

class FacilitiesController extends Controller
{
    use ApiResponse;

    public function index()
    {
        // get all facilities
        return $this->success(FacilityResource::collection(Facility::all()), 'All facilities');
    }

    public function store(StoreFacility $request){
        //creating specialist
        try {
            $facility = new Facility;
            $facility->name = $request->name;
            $facility->address = $request->address;
            $facility->type_id = $request->type;
            $facility->user_id = $request->user ?? null;

            $facility->save(); 

            return $this->success(FacilityResource::make($facility), 'created specialist');
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }  
    }

    public function show(){

    }

    public function update(){

    }
}
