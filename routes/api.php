<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

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

Route::post('guardar-registro', [RegistroController::class, 'guardarRegistro']);
Route::get('obtener-registros', [RegistroController::class, 'obtenerRegistros']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
