<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login',[\App\Http\Controllers\AdminController::class,'login']);
Route::get('list',[\App\Http\Controllers\AdminController::class,'listData']);

Route::post('employee/delete',[\App\Http\Controllers\EmployeeController::class,'deleteData']);
Route::post('employee/edit',[\App\Http\Controllers\EmployeeController::class,'editData']);
Route::post('employee/create',[\App\Http\Controllers\EmployeeController::class,'create']);
Route::post('employee/update',[\App\Http\Controllers\EmployeeController::class,'update']);
