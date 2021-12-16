<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return $this->success([
			'specialists' => array(

                [0] => array([			
                    'title' => 'Dr',
                    'type' => 'Medical Doctor',
                    'user' => array([
                        'name' => 'Ahmad Mahmud',
                        'email' => 'ahmad@gmail.com'
                    ]))
                ]),
                [1] => array([			
                    'title' => 'Mr',
                    'type' => 'Dental Surgeon',
                    'user' => array([
                        'name' => 'Abubakar Sadiq',
                        'email' => 'abu@gmail.com'
                    ]))
                ]),

            )
		], 'All specialists');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->success('Create', 'New specialist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return $this->success([
			'title' => 'Dr',
            'type' => 'Medical Doctor',
			'user' => array([
                'name' => 'Hamza Yusuf',
                'email' => 'hamza@gmail.com'
            ]))
		], 'Showing specialist');

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