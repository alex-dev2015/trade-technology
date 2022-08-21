<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoundsController;
use App\Http\Controllers\SortitionsController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\ChampionshipsController;
use App\Http\Controllers\ConfrontationsController;
use App\Http\Controllers\RegistrationsController;
use App\Models\Confrontations;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('championships', [ChampionshipsController::class, 'store'])->name('championships.store');
Route::apiResource('campeonatos'    , ChampionshipsController::class);
Route::apiResource('participantes'  , ParticipantsController::class);
Route::post('inscricoes'            , [RegistrationsController::class, 'store']);
Route::post('rodadas'               , [RoundsController::class, 'store']);
Route::post('sorteios'              , [SortitionsController::class, 'store']);
Route::post('confrontos'            , [ConfrontationsController::class, 'store']);