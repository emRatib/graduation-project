<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\PatientDataController;


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

//users routes apis
Route::get('/users', [UsersController::class, 'index']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

//patient data routes apis
Route::get('/patientdata', [PatientDataController::class, 'index']);
Route::post('/patientdata', [PatientDataController::class, 'store']);
Route::get('/patientdata/{id}', [PatientDataController::class, 'show']);
Route::put('/patientdata/{id}', [PatientDataController::class, 'update']);
Route::delete('/patientdata/{id}', [PatientDataController::class, 'destroy']);

