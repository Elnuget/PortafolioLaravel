<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clase1Controller;
use App\Http\Controllers\Clase2Controller;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/clase1', [Clase1Controller::class, 'index'])->name('clase1.index');
Route::get('/clase2', [Clase2Controller::class, 'index'])->name('clase2.index');
