<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clase1Controller;
use App\Http\Controllers\Clase2Controller;
use App\Http\Controllers\Clase3Controller;
use App\Http\Controllers\ClaseFormatoController;
use App\Http\Controllers\Clase4Controller;
use App\Http\Controllers\Clase5Controller;
use App\Http\Controllers\Clase6Controller;
use App\Http\Controllers\Clase7Controller;
use App\Http\Controllers\Clase8Controller;
use App\Http\Controllers\Clase9Controller;
use App\Http\Controllers\ClasesController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/clases', [ClasesController::class, 'index'])->name('clases.index');

Route::get('/clase1', [Clase1Controller::class, 'index'])->name('clase1.index');
Route::get('/clase2', [Clase2Controller::class, 'index'])->name('clase2.index');
Route::get('/clase3', [Clase3Controller::class, 'index'])->name('clase3.index');
Route::get('/claseformato', [ClaseFormatoController::class, 'index'])->name('claseformato.index');
Route::get('/clase4', [Clase4Controller::class, 'index'])->name('clase4.index');

// Rutas para Clase 5: Física - Cantidades Físicas
Route::get('/clase5', [Clase5Controller::class, 'index'])->name('clase5.index');
Route::get('/clase5/modulo/{numero}', [Clase5Controller::class, 'modulo'])->name('clase5.modulo');
Route::get('/clase5/descargar-material', [Clase5Controller::class, 'descargarMaterial'])->name('clase5.material');
Route::get('/clase5/progreso', [Clase5Controller::class, 'progreso'])->name('clase5.progreso');

Route::get('/clase6', [Clase6Controller::class, 'index'])->name('clase6.index');
Route::get('/clase7', [Clase7Controller::class, 'index'])->name('clase7.index');
Route::get('/clase8', [Clase8Controller::class, 'index'])->name('clase8.index');
Route::get('/clase9', [Clase9Controller::class, 'index'])->name('clase9.index');
