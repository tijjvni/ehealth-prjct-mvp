<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Specialist;

// Requests
use App\Http\Requests\StoreSpecialist;
use App\Http\Requests\UpdateSpecialist;

// resources
use App\Http\Resources\SpecialistResource;

// traits
use App\Traits\ApiResponse;

class SpecialistsController extends Controller
{

    use ApiResponse;
    

    /**
     * Display all specialists
     * 
     * Get a listings of specialists 
     * 
     * @apiResourceCollection App\Http\Resources\SpecialistResource
     * @apiResourceModel App\Models\Specialist 
     * 
     * @return ResourceCollection
     */
    public function index()
    {
        //
        return $this->success(SpecialistResource::collection(Specialist::all()), 'All specialists');
    }
    
    public function store(StoreSpecialist $request)
    {
        //creating specialist
        try {
            $specialist = auth()->user()->specialist()->create([
                'title' => $request->title,
                'type_id' => $request->type
            ]);

            return $this->success(SpecialistResource::make($specialist), 'created specialist',201);
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }        
    }

    public function show($id)
    {
        //showing specialist 
        try {
            $specialist = Specialist::findOrFail($id);
            return $this->success(SpecialistResource::make($specialist), 'Showing '.$id.' specialist');    
        }catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }       
    }

    public function update(UpdateSpecialist $request, $id)
    {
        //updating specialist
        try {
            $specialist = Specialist::findOrFail($request->specialist);
            $specialist->title = $request->title;
            $specialist->type_id = $request->type;

            $specialist->save();

            return $this->success(SpecialistResource::make($specialist), 'updated specialist');
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }        

    }
    
}