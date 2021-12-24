<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Opening;

// Requests
use App\Http\Requests\StoreOpening;
use App\Http\Requests\UpdateOpening;

// resources
use App\Http\Resources\OpeningResource;

// traits
use App\Traits\ApiResponse;

class OpeningsController extends Controller
{
    use ApiResponse;

    /**
     * Get all openings
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * @apiResourceCollection App\Http\Resources\OpeningResource
     * @apiResourceModel App\Models\Opening 
     * 
     * @return ResourceCollection
     */
    public function index()
    {
        //
        return $this->success(OpeningResource::collection(Opening::all()), 'All Openings');
    }
    

    /**
     * Store a newly created opening resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @apiResourceCollection App\Http\Resources\OpeningResource
     * @apiResourceModel App\Models\Opening 
     * 
     * @return ResourceCollection
     */
    
    public function store(StoreOpening $request)
    {
        //create a new opening
        try {
            $opening = new Opening;
            $opening->for = $request->for;
            $opening->facility_id = $request->facility;
            $opening->is_locum = $request->type;
            
            $opening->save();
            
            return $this->success(OpeningResource::make($opening), 'created opening',201);
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }         
    }

    /**
     * Display the specified opening resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * @apiResourceCollection App\Http\Resources\OpeningResource
     * @apiResourceModel App\Models\Opening 
     * 
     * @return Resource
     */
    public function show($id)
    {
        //showing opening 
        try {
            $opening = Opening::findOrFail($id);
            return $this->success(OpeningResource::make($opening), 'Showing '.$id.' facility');    
        }catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }  
    }

    /**
     * Update the specified opening resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     * @apiResourceCollection App\Http\Resources\OpeningResource
     * @apiResourceModel App\Models\Opening 
     * 
     * @return Resource
     */
    public function update(UpdateOpening $request, $id)
    {
        //update opening 
        try {
            $opening = Opening::findOrFail($id);
            $opening->for = $request->for;
            $opening->facility = $request->facility;
            $opening->is_locum = $request->type;

            $opening->save();

            return $this->success(OpeningResource::make($opening), 'updated opening');
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //delete opening 
        try {
            $opening = Opening::findOrFail($request->opening);
            $opening->delete();
            return $this->success([], 'opening DELETED');
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }                
    }
}
