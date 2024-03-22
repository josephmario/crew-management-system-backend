<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\DocumentController;


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

// Route::middleware('auth:sanctum')->get('/crew', 'CrewController@index');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [AuthController::class, 'login']);
Route::get('/crew', [CrewController::class, 'index']);
Route::get('/crew/{id}', [CrewController::class, 'show'])->name('crew.show');
Route::post('/docu', [DocumentController::class, 'uploadDocument']);
Route::post('/crew-members', [CrewController::class, 'store']);