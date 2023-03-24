<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/userDepart/{id?}', [DepartmentController::class, 'show_dep_users']);
Route::post('/adduserdep/{id?}/{dep_ID?}', [DepartmentController::class, 'assignDepartToUser']);
Route::post('/removeUserDepart/{id?}', [DepartmentController::class, 'removeUserDepart']);


