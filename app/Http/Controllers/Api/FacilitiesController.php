<?php

namespace App\Http\Controllers\Api;

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

    /**
     * Get all facilities
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * @apiResourceCollection App\Http\Resources\FacilityResource
     * @apiResourceModel App\Models\Facility 
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacility $request)
    {
        //create a new facility
        try {
            // $facility = new Facility;
            // $facility->name = $request->name;
            // $facility->address = $request->address;
            // $facility->type_id = $request->type;
            
            // $facility->save();

            dd($request->type);
            $facility = Facility::create([
                'name' => $request->name,
                'address' => $request->address,
                'type_id' => $request->type
            ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
