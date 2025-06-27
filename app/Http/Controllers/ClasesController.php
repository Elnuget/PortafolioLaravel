<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasesController extends Controller
{
    public function index()
    {
        $clases = [
            [
                'id' => 1,
                'titulo' => 'Clase 1',
                'tema' => 'MCD y MCM',
                'descripcion' => 'Máximo Común Divisor y Mínimo Común Múltiplo - Razonamiento Numérico para Admisiones Universitarias.',
                'icono' => '🔢',
                'icono_boton' => '🧮',
                'ruta' => 'clase1.index'
            ],
            [
                'id' => 2,
                'titulo' => 'Clase 2',
                'tema' => 'Planteo de Ecuaciones',
                'descripcion' => 'Resolución de problemas mediante ecuaciones - Preparación para Examen de Admisión EPN.',
                'icono' => '📐',
                'icono_boton' => '📊',
                'ruta' => 'clase2.index'
            ],
            [
                'id' => 3,
                'titulo' => 'Clase 3',
                'tema' => 'Jerarquía de Operaciones',
                'descripcion' => 'Orden de las operaciones matemáticas y razonamiento numérico sistemático.',
                'icono' => '🔀',
                'icono_boton' => '🎯',
                'ruta' => 'clase3.index'
            ],
            [
                'id' => 4,
                'titulo' => 'Clase 4',
                'tema' => 'Ecuaciones Lineales',
                'descripcion' => 'Fundamentos y aplicaciones de las ecuaciones lineales - Resolución sistemática.',
                'icono' => '⚖️',
                'icono_boton' => '📏',
                'ruta' => 'clase4.index'
            ],
            [
                'id' => 5,
                'titulo' => 'Clase 5',
                'tema' => 'Física: Cantidades Físicas',
                'descripcion' => 'Fundamentos y aplicaciones de las cantidades físicas - Sistema Internacional de Unidades.',
                'icono' => '⚛️',
                'icono_boton' => '🔬',
                'ruta' => 'clase5.index'
            ],
            [
                'id' => 6,
                'titulo' => 'Clase 6',
                'tema' => 'Razones y Proporciones',
                'descripcion' => 'Comprendiendo las relaciones entre cantidades y sus aplicaciones en el mundo real.',
                'icono' => '➗',
                'icono_boton' => '⚖️',
                'ruta' => 'clase6.index'
            ],
            [
                'id' => 7,
                'titulo' => 'Clase 7',
                'tema' => 'Progresiones Aritméticas y Geométricas',
                'descripcion' => 'Secuencias numéricas con patrones: diferencias constantes y razones fijas.',
                'icono' => '📊',
                'icono_boton' => '📈',
                'ruta' => 'clase7.index'
            ],
            [
                'id' => 8,
                'titulo' => 'Clase 8',
                'tema' => 'Física: Caída Libre',
                'descripcion' => 'Movimiento de objetos bajo la acción exclusiva de la gravedad - Cinemática aplicada.',
                'icono' => '🪐',
                'icono_boton' => '⬇️',
                'ruta' => 'clase8.index'
            ],
            [
                'id' => 9,
                'titulo' => 'Clase 9',
                'tema' => 'FRACCIONES',
                'descripcion' => 'Fundamentos de fracciones, clasificación y conversión de decimales a fracciones.',
                'icono' => '🔢',
                'icono_boton' => '➗',
                'ruta' => 'clase9.index'
            ],
            [
                'id' => 'formato',
                'titulo' => 'Formato',
                'tema' => 'Plantilla de Clase',
                'descripcion' => 'Formato estándar y estructura base para todas las clases del portafolio académico.',
                'icono' => '📄',
                'icono_boton' => '📋',
                'ruta' => 'claseformato.index'
            ]
        ];

        return view('clases.index', compact('clases'));
    }
}
