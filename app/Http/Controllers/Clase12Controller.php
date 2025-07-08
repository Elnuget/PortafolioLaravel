<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clase12Controller extends Controller
{
    /**
     * Muestra la página principal de la Clase 12: Exámenes Virtuales
     */
    public function index()
    {
        return view('clase12.index');
    }
    
    /**
     * Muestra un módulo específico de la clase
     */
    public function modulo($numero)
    {
        // Validar que el número de módulo sea válido (1-4)
        if (!in_array($numero, [1, 2, 3, 4])) {
            abort(404);
        }
        
        return view('clase12.modulo' . $numero);
    }
    
    /**
     * Descarga material de apoyo
     */
    public function descargarMaterial()
    {
        // Aquí podrías implementar la descarga de material
        return response()->json(['message' => 'Material de Proctorizer UCE disponible']);
    }
    
    /**
     * Muestra el progreso del estudiante
     */
    public function progreso()
    {
        return view('clase12.progreso');
    }
}
