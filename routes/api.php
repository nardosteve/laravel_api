<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DeviceController;


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

Route::get('get-data', [ApiController::class, 'getData']);
Route::get('get-devices/{id?}', [DeviceController::class, 'list']);
Route::post('add-device', [DeviceController::class, 'addDevice']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
