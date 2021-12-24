<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Facility;

// Requests
use App\Http\Requests\StoreFacility;
use App\Http\Requests\UpdateFacility;

// resources
use App\Http\Resources\FacilityResource;

// traits
use App\Traits\ApiResponse;

class FacilitiesController extends Controller
{
    use ApiResponse;

    /**
     * Get all facilities
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * @apiResourceCollection App\Http\Resources\FacilityResource
     * @apiResourceModel App\Models\Facility 
     * 
     * @return ResourceCollection
     */
    public function index()
    {
        //
        return $this->success(FacilityResource::collection(Facility::all()), 'All Fcilities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @apiResourceCollection App\Http\Resources\FacilityResource
     * @apiResourceModel App\Models\Facility 
     * 
     * @return ResourceCollection
     */
    public function store(StoreFacility $request)
    {
        //create a new facility
        try {
            $facility = new Facility;
            $facility->name = $request->name;
            $facility->address = $request->address;
            $facility->type_id = $request->type;
            
            $facility->save();
            
            return $this->success(FacilityResource::make($facility), 'created specialist',201);
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //showing facility 
        try {
            $facility = Facility::findOrFail($id);
            return $this->success(FacilityResource::make($facility), 'Showing '.$id.' facility');    
        }catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacility $request, $id)
    {
        //updating facility
        try {
            $facility = Facility::findOrFail($request->facility);
            $facility->name = $request->name;
            $facility->address = $request->address;
            $facility->type_id = $request->type;

            $facility->save();

            return $this->success(FacilityResource::make($facility), 'updated facility');
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }            
    }
    
}
