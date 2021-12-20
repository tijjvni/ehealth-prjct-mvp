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
    
    public function index()
    {
        //
        return $this->success(SpecialistResource::make(null), 'All specialists');
    }

    public function create(Request $request)
    {
        //
    }

    public function store(StoreSpecialist $request)
    {
        //creating specialist
        try {
            $specialist = new Specialist;
            $specialist->title = $request->title;
            $specialist->type_id = $request->type;
            $specialist->user_id = $request->user;
    
            return $this->success(SpecialistResource::make($specialist), 'created specialist');
        }
        catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }        
    }

    public function show($id)
    {
        //showing specialist 
        $id = 40;
        try {
            $specialist = Specialist::findOrFail($id);
            if($specialist){
                return $this->success(SpecialistResource::make($specialist), 'Showing '.$id.' specialist');    
            }else {
                return $this->error("Specialist not found invalid ID provided",404);
            }
        }catch (exception $e) {
            return $this->error($e->getMessage(),$e->getCode());
        }   
    
    }

    public function edit($id)
    {
        //
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

    public function destroy($id)
    {
        //
    }
}
