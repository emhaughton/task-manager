<?php

use App\Http\Controllers\Api\TaskDeleteController;
use App\Http\Controllers\Api\TaskListController;
use App\Http\Controllers\Api\TaskCreateController;
use App\Http\Controllers\Api\TaskUpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('task', [TaskListController::class,'__invoke']);
Route::delete('task/{task}', [TaskDeleteController::class,'__invoke']);
Route::post('task', [TaskCreateController::class,'__invoke']);
Route::put('task/{task}', [TaskUpdateController::class,'__invoke']);
