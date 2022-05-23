<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\IncidenteController;
use App\Models\Colaborador;
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
    return view('home');
})->name('home');

Route::get('/colaboradores/nuevo', [ColaboradorController::class, 'create'])->name('colaboradores.create');
Route::get('/colaboradores/{id}', [ColaboradorController::class, 'edit'])->name('colaboradores.edit');
Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores.index');
Route::post('/colaboradores', [ColaboradorController::class, 'store'])->name('colaboradores.store');
Route::put('/colaboradores', [ColaboradorController::class, 'update'])->name('colaboradores.update');

Route::get('/incidentes/nuevo', [IncidenteController::class, 'create'])->name('incidentes.create');
Route::get('/incidentes', [IncidenteController::class, 'index'])->name('incidentes.index');
Route::post('/incidentes', [IncidenteController::class, 'store'])->name('incidentes.store');


