<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controladores 
use App\Http\Controllers\CredentialsController;
use App\Http\Controllers\PlayerStatisticsController;

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TeamMembersController;

use App\Http\Controllers\MatchesController;
use App\Http\Controllers\MatchAnotationsController;

use App\Http\Controllers\PlayTypesController;
use App\Http\Controllers\PlaysController;

use App\Http\Controllers\PositionsController;
use App\Http\Controllers\TournamentsController;

use App\Http\Controllers\equiposController;

use App\Http\Controllers\JugadoresController;

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

// =====================    equipos     =====================>
Route::get('/baseball/teams', [TeamsController::class, 'index']);
Route::post('/baseball/teams/create', [TeamsController::class, 'store']);
Route::put('/baseball/teams/edit/{id}',[TeamsController::class,'update']);
Route::delete('/baseball/teams/destroy/{id}',[TeamsController::class,'destroy']);
Route::get('/baseball/teams/{id}', [TeamsController::class, 'show']);

// =====================    torneos     =====================>
Route::get('/baseball/tournaments', [TournamentsController::class, 'index']);
Route::post('/baseball/tournaments/create', [TournamentsController::class, 'store']);
Route::put('/baseball/tournaments/edit/{id}',[TournamentsController::class,'update']);
Route::delete('/baseball/tournaments/destroy/{id}',[TournamentsController::class,'destroy']);
Route::get('/baseball/tournaments/{id}', [TournamentsController::class, 'show']);

// =====================    matches     =====================>
Route::get('/baseball/matches', [MatchesController::class, 'index']);
Route::post('/baseball/matches/create', [MatchesController::class, 'store']);
Route::put('/baseball/matches/edit/{id}',[MatchesController::class,'update']);
Route::delete('/baseball/matches/destroy/{id}',[MatchesController::class,'destroy']);
Route::get('/baseball/matches/{id}', [MatchesController::class, 'show']);

// =====================    players     =====================>
Route::get('/baseball/players', [JugadoresController::class, 'index']);
Route::post('/baseball/players/create', [JugadoresController::class, 'store']);
Route::put('/baseball/players/edit/{id}',[JugadoresController::class,'update']);
Route::delete('/baseball/players/destroy/{id}',[JugadoresController::class,'destroy']);
Route::get('/baseball/players/{id}', [JugadoresController::class, 'show']);

// Route::post('/baseball/Teams', [TeamsController::class, 'store']);
// Route::put('/baseball/Teams/{id}', [TeamsController::class, 'update']);

// Route::get('/baseball/Teams/{id}/members', [TeamMembersController::class, 'show']);
// Route::post('/baseball/Teams/{id}/members', [TeamMembersController::class, 'store']);
// Route::delete('/baseball/Teams/{id}/members/{idMiembro}', [TeamMembersController::class, 'destroy']);

// =====================    categorias     =====================>

// =====================    generos     =====================>

// =====================    equipos     =====================>

// =====================    jugadores     =====================>

// =====================    jugador_tipo     =====================>

// =====================    roles     =====================>

// =====================    tipos     =====================>

// =====================    usuarios     =====================>




// //credenciales
// Route::get('/baseball/Credentials', [CredentialsController::class, 'index']);
// Route::get('/baseball/Credentials/{id}', [CredentialsController::class, 'show']);

// Route::post('/baseball/Credentials', [CredentialsController::class, 'store']);
// Route::put('/baseball/Credentials/{id}', [CredentialsController::class, 'update']);


// //Equipos CRUD
// Route::get('/baseball/Teams', [TeamsController::class, 'index']);
// //Route::post('/baseball/Teams', [TeamsController::class, 'store']);
// //Route::put('/baseball/Teams/{id}', [TeamsController::class, 'update']);
// Route::get('/baseball/Teams/{idEquipo}', [TeamsController::class, 'show']);



//     Route::get('/baseball/Teams/{id}/members', [TeamMembersController::class, 'show']);
//     Route::post('/baseball/Teams/{id}/members', [TeamMembersController::class, 'store']);
//     //WIP
//     Route::delete('/baseball/Teams/{id}/members/{idMiembro}', [TeamMembersController::class, 'destroy']);

// //Torneos CRUD
// Route::get('/baseball/Tournament/{id}', [TournamentsController::class, 'show']);
// Route::put('/baseball/Tournament/{id}', [TournamentsController::class, 'update']);


// Route::get('/baseball/Tournament', [TournamentsController::class, 'index']);

// Route::post('/baseball/Tournament', [TournamentsController::class, 'store']);

// //Partidos CRUD    
// Route::get('/baseball/Match/{id}', [MatchesController::class, 'show']);

// Route::get('/baseball/Match', [MatchesController::class, 'index']);

// Route::post('/baseball/Match', [MatchesController::class, 'store']);
// Route::put('/baseball/Match/{id}', [MatchesController::class, 'update']);

// //jugadas cruds
// Route::post('/baseball/Match/Jugadas', [PlaysController::class, 'store']);
// Route::put('/baseball/Match/Jugadas/{id}', [PlaysController::class, 'update']);

// //anotaciones CRUD
// Route::get('/baseball/MatchAnotations/{id}', [MatchAnotationsController::class, 'index']);
// Route::post('/baseball/MatchAnotations/{id}', [MatchAnotationsController::class, 'store']);
// Route::put('/baseball/MatchAnotations/{idnotacion}', [MatchAnotationsController::class, 'update']);



// //Estadisticas de jugadir CRUD
// Route::get('/baseball/Estdadisticas', [PlayerStatisticsController::class, 'index']);
// Route::post('/baseball/Estdadisticas', [PlayerStatisticsController::class, 'store']);

// //Jugadas CRUD
// Route::get('/baseball/Plays', [PlayTypesController::class, 'index']);
// Route::post('/baseball/Plays', [PlayTypesController::class, 'store']);
// //Positions CRUD
// Route::get('/baseball/Position', [PositionsController::class, 'index']);
// Route::post('/baseball/Position', [PositionsController::class, 'store']);
