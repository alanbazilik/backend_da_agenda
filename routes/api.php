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
Route::get('Avaliar', ['App\Http\Controllers\avalicaoController', 'index']);
Route::post('avaliar', ['App\Http\Controllers\avalicaoController', 'store']);
Route::put('Agendas', ['App\Http\Controllers\avalicaoController', 'edit']);
Route::delete('agenda', ['App\Http\Controllers\avalicaoController', 'delete']);
Route::post('login', ['App\Http\Controllers\Auth\LoginController']);
Route::post('register',['App\Http\Controllers\Auth\RegisterController']);
Route::post('logout', ['App\Http\Controllers\Auth\ForgotPassword']);


