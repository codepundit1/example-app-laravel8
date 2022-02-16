<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\CircleController;
use App\Http\Controllers\UpdateApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//simple API
Route::get('loadapi', [dummyAPI::class, 'index']);

// Get Api

Route::post('circle', [CircleController::class, 'index']);

// Put/Update API

Route::put('updateapi', [CircleController::class, 'update']);

//Delete api
Route::delete('deleteapi/{id}', [CircleController::class, 'delete']);

//Search api

Route::get('search/{uname}',[CircleController::class, 'search']);
