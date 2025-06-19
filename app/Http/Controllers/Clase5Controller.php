<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clase5Controller extends Controller
{
    /**
     * Mostrar la página principal de Clase 5: Física - Cantidades Físicas
     */
    public function index()
    {
        return view('clase5.index');
    }

    /**
     * Mostrar un módulo específico de la clase
     */
    public function modulo($numero)
    {
        // Validar que el número de módulo esté en el rango correcto
        if ($numero < 1 || $numero > 5) {
            abort(404);
        }

        return view('clase5.index', compact('numero'));
    }

    /**
     * Descargar material de la clase
     */
    public function descargarMaterial()
    {
        // Lógica para descargar material complementario
        // Por ahora retorna un mensaje
        return response()->json([
            'message' => 'Descarga de material de Física: Cantidades Físicas iniciada',
            'archivo' => 'fisica-cantidades-fisicas.pdf'
        ]);
    }

    /**
     * Obtener información de progreso del estudiante
     */
    public function progreso()
    {
        // Lógica para obtener el progreso del estudiante
        return response()->json([
            'modulos_completados' => 0,
            'total_modulos' => 5,
            'tiempo_estimado' => '120 minutos',
            'ultimo_modulo' => null
        ]);
    }
}
