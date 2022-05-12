<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controladores 
use App\Http\Controllers\CredentialsController;

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TeamMembersController;
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

//credenciales
Route::get('/baseball/Credentials', [CredentialsController::class, 'index']);
Route::post('/baseball/Credentials', [CredentialsController::class, 'store']);

//Equipos
Route::get('/baseball/Teams', [TeamsController::class, 'index']);
Route::post('/baseball/Teams', [TeamsController::class, 'store']);

    Route::get('/baseball/Teams/{id}/members', [TeamMembersController::class, 'show']);
    Route::post('/baseball/Teams/{id}/members', [TeamMembersController::class, 'store']);