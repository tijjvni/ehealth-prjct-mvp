<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\API\SpecialistsController;
use App\Http\Controllers\API\FacilitiesController;
use App\Http\Controllers\API\RatingsController;

Route::post('/login',[AccountController::class, 'login']);
Route::post('/register',[AccountController::class, 'register']);

// Route::middleware('auth:sanctum')->group(function(){

    Route::prefix('/specialists')->group(function(){
    
        Route::GET('/', [SpecialistsController::class, 'index']);
        Route::POST('/', [SpecialistsController::class, 'create']);
        Route::GET('/{id}', [SpecialistsController::class, 'show']);
        Route::PUT('/{id}', [SpecialistsController::class, 'update']);
        Route::DELETE('/{id}', [SpecialistsController::class, 'destroy']);
        
    });
    
    Route::prefix('/facilities')->group(function(){
        
        Route::GET('/', [FacilitiesController::class, 'index']);
        Route::POST('/', [FacilitiesController::class, 'post']);
        Route::GET('/{id}', [FacilitiesController::class, 'show']);
        Route::PUT('/{id}', [FacilitiesController::class, 'update']);
    
    });
// });