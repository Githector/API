<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpController;
use App\Http\Controllers\UfController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource("mp", MpController::class);
//Route::apiResource("uf", UfController::class);

//Route::get('/mps', [MpController::class, 'index']);

Route::post('/gettoken', [MpController::class, 'getToken']);

Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('/mps', [MpController::class, 'index']);
    Route::get('/mp/{mp:num_mp}', [MpController::class, 'get']);
    Route::post('/mp/store', [MpController::class, 'store']);
    Route::post('/mp/update/{mp:num_mp}', [MpController::class, 'update']);
    Route::delete('/mp/delete/{mp:num_mp}', [MpController::class, 'delete']);
    Route::get('/ufs', [UfController::class, 'index']);
    Route::get('/uf/{uf:num_uf}', [UfController::class, 'get']);
    Route::post('/uf/store', [UfController::class, 'store']);
    Route::post('/uf/update/{uf:num_uf}', [UfController::class, 'update']);


    //Route::get('/mp/{mp:num_mp}', [MpController::class, 'get']);
});