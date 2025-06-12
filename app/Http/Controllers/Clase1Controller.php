<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clase1Controller extends Controller
{
    public function index()
    {
        return view('clase1.index');
    }
}
