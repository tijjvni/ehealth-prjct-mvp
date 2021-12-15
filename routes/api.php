<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\SpecialistsController;
use App\Http\Controllers\API\FacilitiesController;
use App\Http\Controllers\API\RatingsController;

Route::post('/login','AuthController@login');
Route::post('/register','AuthController@register');

Route::middleware('auth:sanctum')->group(function(){

    Route::post('/logout','AuthController@logout');

    Route::prefix('/specialists')->group(function(){
    
        Route::GET('/', 'SpecialistsController@index');
        Route::POST('/', 'SpecialistsController@create');
        Route::GET('/{id}', 'SpecialistsController@show');
        Route::PUT('/{id}', 'SpecialistsController@update');
        Route::DELETE('/{id}', 'SpecialistsController@destroy');
        
    });
    
    Route::prefix('/facilities')->group(function(){
        
        Route::GET('/', [FacilitiesController::class, 'index']);
        Route::POST('/', [FacilitiesController::class, 'post']);
        Route::GET('/{id}', [FacilitiesController::class, 'show']);
        Route::PUT('/{id}', [FacilitiesController::class, 'update']);
    
    });
});