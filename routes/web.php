<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('perfumes',[App\Http\Controllers\PerfumeController::class, 'index']);
Route::get('perfumes/novo',[App\Http\Controllers\PerfumeController::class, 'create']);
Route::post('perfumes',[App\Http\Controllers\PerfumeController::class, 'store']);
Route::get('perfumes/{perfume}/editar',[App\Http\Controllers\PerfumeController::class, 'edit']);
Route::put('perfumes/{perfume}',[App\Http\Controllers\PerfumeController::class, 'update']);
Route::delete('perfumes/{perfume}',[App\Http\Controllers\PerfumeController::class, 'destroy']);
Route::get('perfumes/{perfume}/mais-produzida',[App\Http\Controllers\PerfumeController::class, 'show']);

Route::get('fragrancias',[App\Http\Controllers\FraganciaController::class, 'index']);
Route::get('fragrancias/novo',[App\Http\Controllers\FraganciaController::class, 'create']);
Route::post('fragrancias',[App\Http\Controllers\FraganciaController::class, 'store']);
Route::get('fragrancias/{francia}/editar',[App\Http\Controllers\FranciaController::class, 'edit']);
Route::put('fragrancias/{francia}',[App\Http\Controllers\FranciaController::class, 'update']);
Route::delete('fragrancias/{francia}',[App\Http\Controllers\FranciaController::class, 'destroy']);
Route::get('fragrancias/{francia}/mais-utilizada',[App\Http\Controllers\FraganciaController::class, 'show']);

Route::get('materias-primas',[App\Http\Controllers\MateriaPrimaController::class, 'index']);
Route::get('materias-primas/novo',[App\Http\Controllers\MateriaPrimaController::class, 'create']);
Route::post('materias-primas',[App\Http\Controllers\MateriaPrimaController::class, 'store']);
Route::get('materias-primas/{materiaprima}/editar',[App\Http\Controllers\MateriaPrimaController::class, 'edit']);
Route::put('materias-primas/{materiaprima}',[App\Http\Controllers\MateriaPrimaController::class, 'update']);
Route::delete('materias-primas/{materiaprima}',[App\Http\Controllers\MateriaPrimaController::class, 'destroy']);

Route::get('producoes',[App\Http\Controllers\ProducaoController::class, 'index']);
Route::get('producoes/novo',[App\Http\Controllers\ProducaoController::class, 'create']);
Route::post('producoes',[App\Http\Controllers\ProducaoController::class, 'store']);
Route::get('producoes/{producao}/editar',[App\Http\Controllers\ProducaoController::class, 'edit']);
Route::put('producoes/{producao}',[App\Http\Controllers\ProducaoController::class, 'update']);
Route::delete('producoes/{producao}',[App\Http\Controllers\ProducaoController::class, 'destroy']);

