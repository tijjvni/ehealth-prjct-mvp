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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->success(SpecialistResource::make(null), 'All specialists');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->success(SpecialistResource::make(auth()->user()), 'Showing specialist');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
