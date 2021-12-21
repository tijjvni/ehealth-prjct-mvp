<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SpecialistsController;
use App\Http\Controllers\Api\FacilitiesController;
use App\Http\Controllers\Api\UserController;

Route::middleware('auth')->group(function(){
    
    Route::get('/docs',function(){
        return view('scribe.index');
    })->name('api.docs');

});

Route::group([
    'namespace' => 'Api', 
], function () {

    Route::post('/login','AuthController@login');
    Route::post('/register','AuthController@register');
    
    Route::middleware('auth:sanctum')->group(function(){
    
        Route::post('/logout','AuthController@logout');
    
        Route::get('/users/me','UserController@me');
    
        Route::prefix('/specialists')->group(function(){
        
            Route::GET('/', 'SpecialistsController@index');
            Route::POST('/', 'SpecialistsController@store');
            Route::GET('/{id}', 'SpecialistsController@show');
            Route::PUT('/{id}', 'SpecialistsController@update');
            Route::DELETE('/{id}', 'SpecialistsController@destroy');
            
        });
           
        Route::prefix('/facilities')->group(function(){
        
            Route::GET('/', 'FacilitiesController@index');
            Route::POST('/', 'FacilitiesController@store');
            Route::GET('/{id}', 'FacilitiesController@show');
            Route::PUT('/{id}', 'FacilitiesController@update');
            Route::DELETE('/{id}', 'FacilitiesController@destroy');
            
        });
        
    });    
});
