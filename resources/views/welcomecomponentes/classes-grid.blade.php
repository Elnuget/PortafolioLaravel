<!-- Classes Table -->
<div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-8 text-white drop-shadow-lg">📚 Mis Clases de Matemáticas y Física</h2>
    
    @php
    $clases = [
        [
            'id' => 1,
            'titulo' => 'Clase 1',
            'tema' => 'MCD y MCM',
            'descripcion' => 'Máximo Común Divisor y Mínimo Común Múltiplo',
            'icono' => '🔢',
            'ruta' => 'clase1.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 2,
            'titulo' => 'Clase 2',
            'tema' => 'Planteo de Ecuaciones',
            'descripcion' => 'Resolución de problemas mediante ecuaciones',
            'icono' => '📐',
            'ruta' => 'clase2.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 3,
            'titulo' => 'Clase 3',
            'tema' => 'Jerarquía de Operaciones',
            'descripcion' => 'Orden de las operaciones matemáticas',
            'icono' => '🔀',
            'ruta' => 'clase3.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 4,
            'titulo' => 'Clase 4',
            'tema' => 'Ecuaciones Lineales',
            'descripcion' => 'Fundamentos de ecuaciones lineales',
            'icono' => '⚖️',
            'ruta' => 'clase4.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 5,
            'titulo' => 'Clase 5',
            'tema' => 'Cantidades Físicas',
            'descripcion' => 'Sistema Internacional de Unidades',
            'icono' => '⚛️',
            'ruta' => 'clase5.index',
            'materia' => 'Física'
        ],
        [
            'id' => 6,
            'titulo' => 'Clase 6',
            'tema' => 'Razones y Proporciones',
            'descripcion' => 'Relaciones entre cantidades',
            'icono' => '➗',
            'ruta' => 'clase6.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 7,
            'titulo' => 'Clase 7',
            'tema' => 'Progresiones',
            'descripcion' => 'Progresiones aritméticas y geométricas',
            'icono' => '📊',
            'ruta' => 'clase7.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 8,
            'titulo' => 'Clase 8',
            'tema' => 'Caída Libre',
            'descripcion' => 'Movimiento bajo la acción de la gravedad',
            'icono' => '🪐',
            'ruta' => 'clase8.index',
            'materia' => 'Física'
        ],
        [
            'id' => 9,
            'titulo' => 'Clase 9',
            'tema' => 'FRACCIONES',
            'descripcion' => 'Fundamentos y conversión de fracciones',
            'icono' => '🔢',
            'ruta' => 'clase9.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 10,
            'titulo' => 'Clase 10',
            'tema' => 'PORCENTAJE',
            'descripcion' => 'Aplicación de porcentajes en cálculos',
            'icono' => '📊',
            'ruta' => 'clase10.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 11,
            'titulo' => 'Clase 11',
            'tema' => 'Probabilidad y Estadística',
            'descripcion' => 'Conceptos fundamentales y análisis de datos',
            'icono' => '📈',
            'ruta' => 'clase11.index',
            'materia' => 'Matemáticas'
        ],
        [
            'id' => 'formato',
            'titulo' => 'Formato',
            'tema' => 'Plantilla de Clase',
            'descripcion' => 'Estructura base para clases',
            'icono' => '📝',
            'ruta' => 'claseformato.index',
            'materia' => 'Formato'
        ]
    ];
    @endphp

    <!-- Tabla de Clases -->
    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 shadow-2xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-red-600/20 to-red-800/20">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">Clase</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">Tema</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">Materia</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white uppercase tracking-wider">Descripción</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-white uppercase tracking-wider">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @foreach($clases as $index => $clase)
                    <tr class="hover:bg-white/10 transition-all duration-300 group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-r from-red-600 to-red-800 rounded-full flex items-center justify-center mr-3 group-hover:from-red-500 group-hover:to-red-700 transition-all duration-300">
                                    <span class="text-lg">{{ $clase['icono'] }}</span>
                                </div>
                                <div class="text-sm font-medium text-white">{{ $clase['titulo'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-red-400 font-semibold">{{ $clase['tema'] }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                @if($clase['materia'] === 'Matemáticas') bg-blue-600/20 text-blue-300
                                @elseif($clase['materia'] === 'Física') bg-green-600/20 text-green-300
                                @else bg-gray-600/20 text-gray-300 @endif">
                                {{ $clase['materia'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $clase['descripcion'] }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route($clase['ruta']) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl">
                                <span class="mr-1">👁️</span>
                                @if($clase['id'] === 'formato')
                                    Ver
                                @else
                                    Explorar
                                @endif
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Estadísticas y botón ver todas -->
    <div class="flex flex-col sm:flex-row justify-between items-center mt-8 gap-4">
        <div class="flex space-x-6 text-sm text-gray-300">
            <div class="flex items-center">
                <span class="w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                <span>6 Clases de Matemáticas</span>
            </div>
            <div class="flex items-center">
                <span class="w-3 h-3 bg-green-600 rounded-full mr-2"></span>
                <span>2 Clases de Física</span>
            </div>
            <div class="flex items-center">
                <span class="w-3 h-3 bg-gray-600 rounded-full mr-2"></span>
                <span>1 Formato</span>
            </div>
        </div>
        <a href="{{ route('clases.index') }}" class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            <span class="mr-2">📚</span>
            Ver Todas las Clases
        </a>
    </div>
</div>
