<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VagasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class,'index']);
Route::get('/vagas', [VagasController::class,'index']);
Route::get('/vagas/adicionar', [VagasController::class,'create']);
Route::post('/vagas/adicionar', [VagasController::class,'store']);
Route::get('/vagas/editar/id={id}', [VagasController::class,'edit']);
Route::post('/vagas/editar/id={id}', [VagasController::class,'update']);
Route::get('/vagas/apagar/id={id}', [VagasController::class,'destroy']);


