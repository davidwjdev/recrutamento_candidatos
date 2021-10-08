<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\CandidaturasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::get('/vagas', [VagasController::class,'index']);
Route::get('/vagas/adicionar', [VagasController::class,'create']);
Route::post('/vagas/adicionar', [VagasController::class,'store']);
Route::get('/vagas/editar/id={id}', [VagasController::class,'edit']);
Route::post('/vagas/editar/id={id}', [VagasController::class,'update']);
Route::get('/vagas/apagar/id={id}', [VagasController::class,'destroy']);

Route::get('/pessoas', [PessoasController::class,'index']);
Route::get('/pessoas/adicionar', [PessoasController::class,'create']);
Route::post('/pessoas/adicionar', [PessoasController::class,'store']);
Route::get('/pessoas/editar/id={id}', [PessoasController::class,'edit']);
Route::post('/pessoas/editar/id={id}', [PessoasController::class,'update']);
Route::get('/pessoas/apagar/id={id}', [PessoasController::class,'destroy']);

Route::get('/candidaturas', [CandidaturasController::class,'index']);
Route::get('/candidaturas/adicionar', [CandidaturasController::class,'create']);
Route::post('/candidaturas/adicionar', [CandidaturasController::class,'store']);
Route::get('/candidaturas/editar/id={id}', [CandidaturasController::class,'edit']);
Route::post('/candidaturas/editar/id={id}', [CandidaturasController::class,'update']);
Route::get('/candidaturas/apagar/id={id}', [CandidaturasController::class,'destroy']);

Route::get('/candidaturas/score', [CandidaturasController::class,'score']);
Route::get('/candidaturas/score/candidatos', [CandidaturasController::class,'det_score']);

