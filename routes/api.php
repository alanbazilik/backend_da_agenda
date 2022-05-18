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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Agendas', ['App\Http\Controllers\agendaController', 'index']);
Route::post('agenda', ['App\Http\Controllers\agendaController', 'store']);
Route::get('Eventos', ['App\Http\Controllers\eventoController', 'index']);
Route::post('evento', ['App\Http\Controllers\eventoController', 'store']);