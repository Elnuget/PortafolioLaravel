<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clase1Controller;
use App\Http\Controllers\Clase2Controller;
use App\Http\Controllers\Clase3Controller;
use App\Http\Controllers\ClaseFormatoController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/clase1', [Clase1Controller::class, 'index'])->name('clase1.index');
Route::get('/clase2', [Clase2Controller::class, 'index'])->name('clase2.index');
Route::get('/clase3', [Clase3Controller::class, 'index'])->name('clase3.index');
Route::get('/claseformato', [ClaseFormatoController::class, 'index'])->name('claseformato.index');
