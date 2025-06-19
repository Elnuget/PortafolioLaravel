<!-- Módulo 5: Cantidades Escalares, Vectoriales y Aplicaciones -->
<section id="modulo5" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-pink-600 to-red-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">5</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🔢 Cantidades Escalares, Vectoriales y Aplicaciones</h3>
            <p class="text-pink-300 mt-1">Clasificación y operaciones con magnitudes físicas</p>
        </div>
    </div>
    
    <!-- Introducción del módulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            Culminamos nuestro estudio distinguiendo entre magnitudes escalares y vectoriales, aprendiendo sus operaciones 
            básicas y aplicando el análisis dimensional para resolver problemas físicos complejos.
        </p>
        
        <!-- Objetivos de aprendizaje -->
        <div class="bg-pink-900/20 p-4 rounded-lg border-l-4 border-pink-500 mb-6">
            <h4 class="text-pink-300 font-semibold mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Objetivos de Aprendizaje
            </h4>
            <ul class="list-disc pl-6 text-gray-300 space-y-2">
                <li>Diferenciar entre magnitudes escalares y vectoriales</li>
                <li>Realizar operaciones básicas con vectores</li>
                <li>Descomponer vectores en componentes rectangulares</li>
                <li>Aplicar análisis dimensional en problemas complejos</li>
            </ul>
        </div>
    </div>
    
    <!-- Escalares vs Vectores -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-pink-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
            Magnitudes Escalares vs Vectoriales
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Magnitudes Escalares -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                    </svg>
                    Magnitudes Escalares
                </h5>
                <div class="physics-unit bg-green-700 mb-3">Solo requieren magnitud</div>
                <p class="text-gray-300 mb-4">
                    Cantidades que quedan completamente definidas por su valor numérico y unidad.
                </p>
                
                <div class="space-y-3">
                    <h6 class="text-green-300 font-bold">Ejemplos:</h6>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Masa: 5 kg</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Tiempo: 10 s</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Temperatura: 25°C</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Energía: 100 J</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Volumen: 2 m³</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Rapidez: 30 m/s</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-green-900/20 p-3 rounded">
                    <p class="text-green-200 text-sm">
                        <strong>Operaciones:</strong> Se suman algebraicamente (con signos)
                    </p>
                </div>
            </div>
            
            <!-- Magnitudes Vectoriales -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Magnitudes Vectoriales
                </h5>
                <div class="physics-unit bg-blue-700 mb-3">Requieren magnitud y dirección</div>
                <p class="text-gray-300 mb-4">
                    Cantidades que necesitan magnitud, dirección y sentido para quedar completamente definidas.
                </p>
                
                <div class="space-y-3">
                    <h6 class="text-blue-300 font-bold">Ejemplos:</h6>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Velocidad: 30 m/s Norte</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Fuerza: 10 N vertical</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Desplazamiento: 5 m Este</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Aceleración: 2 m/s² Sur</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Momento: 15 Nm horario</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                            <span class="text-gray-300">Campo E: 100 N/C ↑</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-blue-900/20 p-3 rounded">
                    <p class="text-blue-200 text-sm">
                        <strong>Operaciones:</strong> Se suman vectorialmente (regla del paralelogramo)
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Operaciones con Vectores -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-purple-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
        </svg>
            Operaciones Básicas con Vectores
        </h4>
        
        <!-- Suma de vectores -->
        <div class="mb-8">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">➕</span>
                Suma de Vectores
            </h5>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-gray-800/50 p-5 rounded-lg">
                    <h6 class="text-lg font-bold text-purple-300 mb-3">Método Gráfico</h6>
                    <div class="physics-formula mb-3">
                        <p class="text-white text-center font-bold">Regla del Paralelogramo</p>
                    </div>
                    <div class="space-y-2 text-sm">
                        <p class="text-gray-300">1. Dibujar vectores desde el mismo origen</p>
                        <p class="text-gray-300">2. Completar el paralelogramo</p>
                        <p class="text-gray-300">3. La diagonal es la resultante</p>
                    </div>
                    <div class="mt-3 bg-purple-900/20 p-2 rounded text-xs">
                        <p class="text-purple-200">También: método cola-punta (triángulo)</p>
                    </div>
                </div>
                
                <div class="bg-gray-800/50 p-5 rounded-lg">
                    <h6 class="text-lg font-bold text-blue-300 mb-3">Método Analítico</h6>
                    <div class="physics-formula mb-3">
                        <p class="text-white text-center">Componentes Rectangulares</p>
                    </div>
                    <div class="space-y-2 text-sm font-mono">
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white">Rx = Ax + Bx</p>
                        </div>
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white">Ry = Ay + By</p>
                        </div>
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white">|R| = √(Rx² + Ry²)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Componentes rectangulares -->
        <div class="bg-gradient-to-r from-blue-900/30 to-indigo-900/30 p-6 rounded-lg border border-blue-500/30">
            <h5 class="text-xl font-bold text-white mb-4 text-center flex items-center justify-center">
                <svg class="w-6 h-6 mr-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Componentes Rectangulares
            </h5>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="physics-formula">
                    <h6 class="text-white font-bold mb-3 text-center">Descomposición</h6>
                    <div class="space-y-2 text-center">
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white font-mono">Ax = A cos θ</p>
                            <p class="text-blue-200 text-sm">Componente horizontal</p>
                        </div>
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white font-mono">Ay = A sen θ</p>
                            <p class="text-blue-200 text-sm">Componente vertical</p>
                        </div>
                    </div>
                </div>
                
                <div class="physics-formula">
                    <h6 class="text-white font-bold mb-3 text-center">Composición</h6>
                    <div class="space-y-2 text-center">
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white font-mono">|A| = √(Ax² + Ay²)</p>
                            <p class="text-blue-200 text-sm">Magnitud del vector</p>
                        </div>
                        <div class="bg-gray-700/50 p-2 rounded">
                            <p class="text-white font-mono">θ = arctan(Ay/Ax)</p>
                            <p class="text-blue-200 text-sm">Ángulo con el eje x</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ejemplo práctico -->
            <div class="mt-6 bg-gray-800/30 p-4 rounded-lg">
                <h6 class="text-white font-bold mb-3 text-center">💡 Ejemplo Práctico</h6>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <p class="text-yellow-300 font-bold mb-2">Dados:</p>
                        <p class="text-gray-300">Vector A: 10 N a 30° del eje x</p>
                        <p class="text-gray-300">Vector B: 8 N a 120° del eje x</p>
                    </div>
                    <div>
                        <p class="text-green-300 font-bold mb-2">Encontrar: A + B</p>
                        <div class="space-y-1 font-mono text-xs">
                            <p class="text-white">Ax = 10 cos(30°) = 8.66 N</p>
                            <p class="text-white">Ay = 10 sen(30°) = 5.00 N</p>
                            <p class="text-white">Bx = 8 cos(120°) = -4.00 N</p>
                            <p class="text-white">By = 8 sen(120°) = 6.93 N</p>
                            <p class="text-yellow-300">Rx = 4.66 N, Ry = 11.93 N</p>
                            <p class="text-green-300">|R| = 12.8 N a 68.7°</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Aplicaciones del Análisis Dimensional -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-orange-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            Aplicaciones del Análisis Dimensional
        </h4>
        
        <!-- Aplicación 1: Deducción de fórmulas -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">🔍</span>
                Deducción de Fórmulas
            </h5>
            
            <div class="physics-formula">
                <h6 class="text-white font-bold mb-3 text-center">Ejemplo: Período de un Péndulo Simple</h6>
                <div class="bg-gray-800/50 p-4 rounded-lg mb-4">
                    <p class="text-white text-center mb-2">Variables: longitud (L), gravedad (g), masa (m)</p>
                    <p class="text-blue-200 text-center">Hipótesis: T = k × L^a × g^b × m^c</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <h6 class="text-yellow-300 font-bold mb-2">Análisis dimensional:</h6>
                        <div class="space-y-1 font-mono">
                            <p class="text-white">[T] = [L]^a [LT⁻²]^b [M]^c</p>
                            <p class="text-white">[T] = [L]^(a+b) [T]^(-2b) [M]^c</p>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-green-300 font-bold mb-2">Ecuaciones:</h6>
                        <div class="space-y-1 font-mono">
                            <p class="text-white">Para T: -2b = 1 → b = -1/2</p>
                            <p class="text-white">Para L: a + b = 0 → a = 1/2</p>
                            <p class="text-white">Para M: c = 0</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <div class="physics-unit bg-orange-700 text-lg">
                        T = k √(L/g)
                    </div>
                    <p class="text-orange-200 text-sm mt-2">El período NO depende de la masa</p>
                </div>
            </div>
        </div>
        
        <!-- Aplicación 2: Verificación de cálculos -->
        <div class="bg-gradient-to-r from-red-900/30 to-orange-900/30 p-6 rounded-lg border border-red-500/30">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">✅</span>
                Verificación de Cálculos Complejos
            </h5>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-gray-800/50 p-4 rounded-lg">
                    <h6 class="text-red-300 font-bold mb-3">Problema Típico</h6>
                    <p class="text-gray-300 mb-3">
                        Un objeto cae libremente desde una altura de 20 m. Calcular su velocidad al tocar el suelo.
                    </p>
                    <div class="space-y-2 text-sm font-mono">
                        <p class="text-white">Ecuación: v² = v₀² + 2gh</p>
                        <p class="text-white">Datos: h = 20 m, g = 9.8 m/s², v₀ = 0</p>
                        <p class="text-yellow-300">v² = 0 + 2(9.8)(20) = 392 m²/s²</p>
                        <p class="text-green-300">v = 19.8 m/s</p>
                    </div>
                </div>
                
                <div class="bg-gray-800/50 p-4 rounded-lg">
                    <h6 class="text-green-300 font-bold mb-3">Verificación Dimensional</h6>
                    <div class="space-y-2 text-sm">
                        <p class="text-gray-300">Verificar: v² = v₀² + 2gh</p>
                        <div class="font-mono space-y-1">
                            <p class="text-white">[v²] = [L²T⁻²]</p>
                            <p class="text-white">[v₀²] = [L²T⁻²]</p>
                            <p class="text-white">[2gh] = [LT⁻²][L] = [L²T⁻²]</p>
                        </div>
                        <div class="bg-green-900/20 p-2 rounded mt-2">
                            <p class="text-green-300 text-xs">✓ Todas las dimensiones coinciden</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Resumen y Aplicaciones Prácticas -->
    <div class="bg-gradient-to-r from-indigo-900/30 to-purple-900/30 p-6 rounded-xl border border-indigo-500/30">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Resumen de Aplicaciones Prácticas
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-800/50 p-4 rounded-lg border border-blue-500/30">
                <h5 class="text-blue-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">🏗️</span> Ingeniería
                </h5>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>• Cálculo de fuerzas estructurales</li>
                    <li>• Análisis de resistencia de materiales</li>
                    <li>• Diseño de sistemas mecánicos</li>
                </ul>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-green-500/30">
                <h5 class="text-green-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">🚗</span> Mecánica
                </h5>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>• Análisis de movimiento</li>
                    <li>• Cálculo de potencia de motores</li>
                    <li>• Diseño aerodinámico</li>
                </ul>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-purple-500/30">
                <h5 class="text-purple-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">⚡</span> Electricidad
                </h5>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>• Análisis de circuitos</li>
                    <li>• Cálculo de campos eléctricos</li>
                    <li>• Diseño de transformadores</li>
                </ul>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-yellow-500/30">
                <h5 class="text-yellow-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">🌡️</span> Termodinámica
                </h5>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>• Cálculo de eficiencia energética</li>
                    <li>• Análisis de transferencia de calor</li>
                    <li>• Diseño de sistemas térmicos</li>
                </ul>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-red-500/30">
                <h5 class="text-red-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">🔬</span> Investigación
                </h5>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>• Validación de teorías</li>
                    <li>• Predicción de fenómenos</li>
                    <li>• Optimización experimental</li>
                </ul>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-orange-500/30">
                <h5 class="text-orange-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">📱</span> Tecnología
                </h5>
                <ul class="text-sm text-gray-300 space-y-1">
                    <li>• Desarrollo de sensores</li>
                    <li>• Calibración de instrumentos</li>
                    <li>• Control de calidad</li>
                </ul>
            </div>
        </div>
        
        <!-- Mensaje final -->
        <div class="mt-6 bg-gradient-to-r from-blue-900/40 to-purple-900/40 p-4 rounded-lg border border-blue-500/30">
            <p class="text-white text-center text-lg font-semibold">
                🎉 ¡Felicitaciones! Has completado el estudio de las Cantidades Físicas
            </p>
            <p class="text-blue-200 text-center mt-2">
                Ahora posees las herramientas fundamentales para abordar cualquier problema de física con confianza y precisión.
            </p>
        </div>
    </div>
</section>
