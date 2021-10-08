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
})->name('home');

Route::get('perfumes',[App\Http\Controllers\PerfumeController::class, 'index'])->name('listarPerfume');
Route::get('perfumes/novo',[App\Http\Controllers\PerfumeController::class, 'create'])->name('novoPerfume');
Route::post('perfumes',[App\Http\Controllers\PerfumeController::class, 'store'])->name('salvarPerfume');
Route::get('perfumes/{perfume}/editar',[App\Http\Controllers\PerfumeController::class, 'edit'])->name('editarPerfume');
Route::put('perfumes/{perfume}',[App\Http\Controllers\PerfumeController::class, 'update'])->name('atualizarPerfume');
Route::delete('perfumes/{perfume}',[App\Http\Controllers\PerfumeController::class, 'destroy'])->name('excluirPerfume');
Route::get('perfumes/{perfume}/mais-produzida',[App\Http\Controllers\PerfumeController::class, 'show'])->name('maisProduzido');

Route::get('fragrancias',[App\Http\Controllers\FragranciaController::class, 'index'])->name('listarFragrancia');
Route::get('fragrancias/nova',[App\Http\Controllers\FragranciaController::class, 'create'])->name('novaFragrancia');
Route::post('fragrancias',[App\Http\Controllers\FragranciaController::class, 'store'])->name('salvarFragrancia');
Route::get('fragrancias/{fragrancia}/editar',[App\Http\Controllers\FragranciaController::class, 'edit'])->name('editarFragrancia');
Route::put('fragrancias/{fragrancia}',[App\Http\Controllers\FragranciaController::class, 'update'])->name('atualizarFragrancia');
Route::delete('fragrancias/{fragrancia}',[App\Http\Controllers\FragranciaController::class, 'destroy'])->name('excluirFragrancia');
Route::get('fragrancias/{fragrancia}/mais-utilizada',[App\Http\Controllers\FragranciaController::class, 'show'])->name('maisUtilizada');

Route::get('materias_primas',[App\Http\Controllers\MateriaPrimaController::class, 'index'])->name('listarMateriaPrima');
Route::get('materias_primas/nova',[App\Http\Controllers\MateriaPrimaController::class, 'create']);
Route::post('materias_primas',[App\Http\Controllers\MateriaPrimaController::class, 'store'])->name('salvarMateriaPrima');
Route::get('materias_primas/{materiaprima}/editar',[App\Http\Controllers\MateriaPrimaController::class, 'edit'])->name('editarMateriaPrima');
Route::put('materias_primas/{materiaprima}',[App\Http\Controllers\MateriaPrimaController::class, 'update'])->name('atualizarMateriaPrima');
Route::delete('materias_primas/{materiaprima}',[App\Http\Controllers\MateriaPrimaController::class, 'destroy'])->name('excluirMateriaPrima');

Route::get('producoes',[App\Http\Controllers\ProducaoController::class, 'index'])->name('listarProducao');
Route::get('producoes/nova',[App\Http\Controllers\ProducaoController::class, 'create'])->name('novoProducao');
Route::post('producoes',[App\Http\Controllers\ProducaoController::class, 'store'])->name('salvarProducao');
Route::get('producoes/{producao}/editar',[App\Http\Controllers\ProducaoController::class, 'edit']);
Route::put('producoes/{producao}',[App\Http\Controllers\ProducaoController::class, 'update']);
Route::delete('producoes/{producao}',[App\Http\Controllers\ProducaoController::class, 'destroy'])->name('excluirProducao');

