<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('corretores/cadastrar',[App\Http\Controllers\CorretoresController::class, 'cadastrar']);
Route::post('corretores/cadastrar',[App\Http\Controllers\CorretoresController::class, 'enviarCadastro']);
Route::get('corretores/{id}/editar',[App\Http\Controllers\CorretoresController::class, 'editar']);
Route::put('corretores/{id}/editar',[App\Http\Controllers\CorretoresController::class, 'atualizarDados']);
Route::get('corretores/{id}/deletar',[App\Http\Controllers\CorretoresController::class, 'deletar']);
