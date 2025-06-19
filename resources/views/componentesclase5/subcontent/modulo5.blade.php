<!-- Módulo 5: Magnitudes Escalares y Vectoriales -->
<section id="modulo5" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-pink-600 to-red-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">5</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🔢 Magnitudes Escalares y Vectoriales</h3>
            <p class="text-pink-300 mt-1">Diferencias fundamentales entre tipos de magnitudes físicas</p>
        </div>
    </div>
    
    <!-- Introducción del módulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            Finalizamos nuestro estudio de cantidades físicas aprendiendo a clasificar las magnitudes según sus 
            características fundamentales: escalares (solo magnitud) y vectoriales (magnitud y dirección).
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
                <li>Distinguir claramente entre magnitudes escalares y vectoriales</li>
                <li>Identificar ejemplos de cada tipo de magnitud</li>
                <li>Comprender la importancia de la dirección en las magnitudes vectoriales</li>
                <li>Aplicar correctamente la clasificación en problemas físicos</li>
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
    
    <!-- Ejemplos Prácticos -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-yellow-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            💡 Ejemplos Prácticos Avanzados
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Ejemplo 1: Suma de vectores -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">🧭</span>
                    Ejemplo 1: Navegación Aérea
                </h5>
                <div class="bg-yellow-900/20 p-4 rounded-lg border-l-4 border-yellow-500 mb-4">
                    <p class="text-yellow-200 font-bold mb-2">Situación:</p>
                    <p class="text-gray-300 text-sm">
                        Un avión vuela hacia el este a 300 km/h, pero hay un viento del sur de 50 km/h.
                        <br><strong>Encontrar:</strong> Velocidad y dirección resultantes del avión.
                    </p>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-blue-900/20 p-3 rounded">
                        <h6 class="text-blue-300 font-bold mb-2">📊 Análisis vectorial:</h6>
                        <div class="font-mono text-xs space-y-1">
                            <p class="text-white">Velocidad del avión: Vₐ = 300î km/h (Este)</p>
                            <p class="text-white">Velocidad del viento: Vᵥ = 50ĵ km/h (Norte)</p>
                            <p class="text-yellow-300">Velocidad resultante: Vᵣ = Vₐ + Vᵥ</p>
                        </div>
                    </div>
                    
                    <div class="bg-green-900/20 p-3 rounded">
                        <h6 class="text-green-300 font-bold mb-2">🧮 Cálculos:</h6>
                        <div class="font-mono text-xs space-y-1">
                            <p class="text-white">|Vᵣ| = √(300² + 50²) = √(90000 + 2500)</p>
                            <p class="text-white">|Vᵣ| = √92500 = 304.1 km/h</p>
                            <p class="text-white">θ = arctan(50/300) = arctan(0.167)</p>
                            <p class="text-green-400">θ = 9.5° al norte del este</p>
                        </div>
                    </div>
                    
                    <div class="bg-purple-900/20 p-3 rounded">
                        <h6 class="text-purple-300 font-bold mb-2">🎯 Resultado:</h6>
                        <p class="text-white text-center">
                            El avión se mueve a <span class="text-green-400">304.1 km/h</span> 
                            en dirección <span class="text-green-400">9.5° noreste</span>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Ejemplo 2: Análisis dimensional -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">⚡</span>
                    Ejemplo 2: Energía Cinética
                </h5>
                <div class="bg-blue-900/20 p-4 rounded-lg border-l-4 border-blue-500 mb-4">
                    <p class="text-blue-200 font-bold mb-2">Problema:</p>
                    <p class="text-gray-300 text-sm">
                        Deducir la fórmula de energía cinética usando análisis dimensional.
                        <br><strong>Variables:</strong> masa (m), velocidad (v)
                        <br><strong>Hipótesis:</strong> Eₖ = k × mᵃ × vᵇ
                    </p>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-700/50 p-4 rounded-lg">
                        <h6 class="text-white font-bold mb-3 text-center">🔍 Análisis dimensional:</h6>
                        <div class="font-mono text-center space-y-2 text-sm">
                            <p class="text-white">[Energía] = [M L² T⁻²]</p>
                            <p class="text-white">[masa] = [M]</p>
                            <p class="text-white">[velocidad] = [L T⁻¹]</p>
                            <div class="border-t border-gray-600 pt-2 mt-3">
                                <p class="text-yellow-300">[M L² T⁻²] = [M]ᵃ [L T⁻¹]ᵇ</p>
                                <p class="text-yellow-300">[M L² T⁻²] = [M]ᵃ [L]ᵇ [T]⁻ᵇ</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="bg-green-900/20 p-3 rounded">
                            <h6 class="text-green-300 font-bold mb-2 text-center">Ecuaciones:</h6>
                            <div class="font-mono text-xs space-y-1">
                                <p class="text-white">Para M: a = 1</p>
                                <p class="text-white">Para L: b = 2</p>
                                <p class="text-white">Para T: -b = -2</p>
                            </div>
                        </div>
                        
                        <div class="bg-purple-900/20 p-3 rounded">
                            <h6 class="text-purple-300 font-bold mb-2 text-center">Resultado:</h6>
                            <div class="text-center">
                                <p class="text-white font-mono">Eₖ = k × m¹ × v²</p>
                                <p class="text-green-400 font-bold">Eₖ = ½mv²</p>
                                <p class="text-gray-400 text-xs">(k = ½ por experimento)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejercicios Interactivos -->
    <div class="bg-gradient-to-r from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-purple-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            📝 Ejercicios Vectoriales y Dimensionales
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ejercicio 1 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-purple-500/30">
                <h5 class="text-lg font-bold text-purple-300 mb-3 flex items-center">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">1</span>
                    Clasificación de Magnitudes
                </h5>
                <div class="bg-purple-900/20 p-3 rounded mb-3">
                    <p class="text-purple-200 text-sm font-bold mb-2">Clasifica como escalar o vectorial:</p>
                    <ul class="text-gray-300 text-xs space-y-1">
                        <li>a) Temperatura ambiente: 25°C</li>
                        <li>b) Desplazamiento: 50 m hacia el norte</li>
                        <li>c) Rapidez: 80 km/h</li>
                        <li>d) Peso: 700 N hacia abajo</li>
                        <li>e) Volumen: 2.5 L</li>
                        <li>f) Aceleración: 9.8 m/s² hacia abajo</li>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('vectorAnswer1')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="vectorAnswer1" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-1">
                        <p><span class="text-green-400">a) Escalar:</span> Solo magnitud, no dirección</p>
                        <p><span class="text-red-400">b) Vectorial:</span> Magnitud y dirección específica</p>
                        <p><span class="text-green-400">c) Escalar:</span> Solo magnitud (rapidez ≠ velocidad)</p>
                        <p><span class="text-red-400">d) Vectorial:</span> Magnitud y dirección (fuerza)</p>
                        <p><span class="text-green-400">e) Escalar:</span> Solo magnitud</p>
                        <p><span class="text-red-400">f) Vectorial:</span> Magnitud y dirección</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicio 2 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-blue-500/30">
                <h5 class="text-lg font-bold text-blue-300 mb-3 flex items-center">
                    <span class="bg-blue-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">2</span>
                    Operaciones Vectoriales
                </h5>
                <div class="bg-blue-900/20 p-3 rounded mb-3">
                    <p class="text-blue-200 text-sm font-bold mb-2">Dados los vectores:</p>
                    <div class="text-gray-300 text-xs space-y-1 font-mono">
                        <p>A⃗ = 3î + 4ĵ</p>
                        <p>B⃗ = -2î + 5ĵ</p>
                        <p class="text-blue-200 mt-2">Calcular: A⃗ + B⃗, A⃗ - B⃗, |A⃗|, |B⃗|</p>
                    </div>
                </div>
                <div class="text-center">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('vectorAnswer2')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="vectorAnswer2" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2 font-mono">
                        <p><span class="text-green-400">A⃗ + B⃗ =</span> (3-2)î + (4+5)ĵ = î + 9ĵ</p>
                        <p><span class="text-green-400">A⃗ - B⃗ =</span> (3+2)î + (4-5)ĵ = 5î - ĵ</p>
                        <p><span class="text-green-400">|A⃗| =</span> √(3² + 4²) = √25 = 5</p>
                        <p><span class="text-green-400">|B⃗| =</span> √((-2)² + 5²) = √29 = 5.39</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicio 3 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-green-500/30">
                <h5 class="text-lg font-bold text-green-300 mb-3 flex items-center">
                    <span class="bg-green-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">3</span>
                    Análisis Dimensional
                </h5>
                <div class="bg-green-900/20 p-3 rounded mb-3">
                    <p class="text-green-200 text-sm font-bold mb-2">Verificar si es dimensionalmente correcta:</p>
                    <div class="text-gray-300 text-xs space-y-1 font-mono">
                        <p>v = v₀ + at</p>
                        <p>x = x₀ + v₀t + ½at²</p>
                        <p>P = F/A (Presión = Fuerza/Área)</p>
                    </div>
                </div>
                <div class="text-center">
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('vectorAnswer3')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="vectorAnswer3" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2">
                        <p><span class="text-green-400">✓ v = v₀ + at:</span> [LT⁻¹] = [LT⁻¹] + [LT⁻²][T] ✓</p>
                        <p><span class="text-green-400">✓ x = x₀ + v₀t + ½at²:</span> [L] = [L] + [LT⁻¹][T] + [LT⁻²][T²] ✓</p>
                        <p><span class="text-green-400">✓ P = F/A:</span> [ML⁻¹T⁻²] = [MLT⁻²]/[L²] ✓</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicio 4 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-orange-500/30">
                <h5 class="text-lg font-bold text-orange-300 mb-3 flex items-center">
                    <span class="bg-orange-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">4</span>
                    Problema de Fuerzas
                </h5>
                <div class="bg-orange-900/20 p-3 rounded mb-3">
                    <p class="text-orange-200 text-sm font-bold mb-2">Tres fuerzas actúan sobre un objeto:</p>
                    <div class="text-gray-300 text-xs space-y-1">
                        <p>F₁ = 20 N hacia el este</p>
                        <p>F₂ = 15 N hacia el norte</p>
                        <p>F₃ = 10 N a 45° del este hacia el sur</p>
                        <p class="text-orange-200 mt-2">Encontrar la fuerza resultante.</p>
                    </div>
                </div>
                <div class="text-center">
                    <button class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('vectorAnswer4')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="vectorAnswer4" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2 font-mono">
                        <p><span class="text-blue-300">Componentes:</span></p>
                        <p>Fx = 20 + 10cos(45°) = 20 + 7.07 = 27.07 N</p>
                        <p>Fy = 15 - 10sen(45°) = 15 - 7.07 = 7.93 N</p>
                        <p><span class="text-green-400">|F| =</span> √(27.07² + 7.93²) = 28.2 N</p>
                        <p><span class="text-green-400">θ =</span> arctan(7.93/27.07) = 16.3° norte del este</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Simulador de Vectores -->
    <div class="bg-gradient-to-r from-indigo-900/30 to-purple-900/30 p-6 rounded-xl border border-indigo-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            🎯 Simulador de Vectores Interactivo
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-indigo-300 font-bold mb-4 text-center">🎛️ Controles de Vector</h5>
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white text-sm font-bold mb-2">Magnitud (A)</label>
                            <input type="range" id="vectorMagnitude" min="1" max="10" value="5" class="w-full" onchange="updateVector()">
                            <span id="magValue" class="text-white text-xs">5.0</span>
                        </div>
                        <div>
                            <label class="block text-white text-sm font-bold mb-2">Ángulo (°)</label>
                            <input type="range" id="vectorAngle" min="0" max="360" value="30" class="w-full" onchange="updateVector()">
                            <span id="angleValue" class="text-white text-xs">30°</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-900/50 p-3 rounded">
                        <h6 class="text-white font-bold mb-2 text-center">📊 Componentes</h6>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="text-center">
                                <div class="text-green-400 font-bold" id="componentX">4.33</div>
                                <div class="text-gray-400">Ax (horizontal)</div>
                            </div>
                            <div class="text-center">
                                <div class="text-blue-400 font-bold" id="componentY">2.50</div>
                                <div class="text-gray-400">Ay (vertical)</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="randomVector()">
                            Vector Aleatorio
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-purple-300 font-bold mb-4 text-center">📈 Representación Gráfica</h5>
                <div class="bg-gray-900/50 p-4 rounded-lg border-2 border-gray-600 mb-4">
                    <canvas id="vectorCanvas" width="200" height="200" class="w-full max-w-[200px] mx-auto bg-gray-800 rounded"></canvas>
                </div>
                <div class="bg-gray-900/30 p-3 rounded">
                    <h6 class="text-white font-bold mb-2 text-center">📝 Notación</h6>
                    <div class="text-center space-y-1 text-xs">
                        <p class="text-white font-mono" id="vectorNotation">A⃗ = 4.33î + 2.50ĵ</p>
                        <p class="text-gray-400" id="polarNotation">|A⃗| = 5.0, θ = 30°</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Autoevaluación Final -->
    <div class="bg-gradient-to-r from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-cyan-500/30">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            🎓 Autoevaluación Final: Cantidades Físicas
        </h4>
        
        <div class="bg-cyan-900/20 p-4 rounded-lg border-l-4 border-cyan-500 mb-6">
            <p class="text-cyan-200 text-center">
                Responde estas preguntas para evaluar tu comprensión de todos los módulos estudiados.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-cyan-300 font-bold mb-4">🔍 Preguntas Conceptuales</h5>
                <div class="space-y-3 text-sm">
                    <div class="bg-gray-900/30 p-3 rounded">
                        <p class="text-white font-bold mb-2">1. ¿Cuál es la diferencia entre precisión y exactitud?</p>
                        <textarea class="w-full bg-gray-800 text-white p-2 rounded text-xs" rows="2" placeholder="Escribe tu respuesta..."></textarea>
                    </div>
                    
                    <div class="bg-gray-900/30 p-3 rounded">
                        <p class="text-white font-bold mb-2">2. ¿Por qué es importante el análisis dimensional?</p>
                        <textarea class="w-full bg-gray-800 text-white p-2 rounded text-xs" rows="2" placeholder="Escribe tu respuesta..."></textarea>
                    </div>
                    
                    <div class="bg-gray-900/30 p-3 rounded">
                        <p class="text-white font-bold mb-2">3. Da un ejemplo de magnitud vectorial y explica por qué.</p>
                        <textarea class="w-full bg-gray-800 text-white p-2 rounded text-xs" rows="2" placeholder="Escribe tu respuesta..."></textarea>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-blue-300 font-bold mb-4">🧮 Ejercicios Prácticos</h5>
                <div class="space-y-3 text-sm">
                    <div class="bg-gray-900/30 p-3 rounded">
                        <p class="text-white font-bold mb-2">4. Expresar 2.5 × 10⁻³ m en notación científica con 3 cifras significativas:</p>
                        <input type="text" class="w-full bg-gray-800 text-white p-2 rounded text-xs" placeholder="Tu respuesta...">
                    </div>
                    
                    <div class="bg-gray-900/30 p-3 rounded">
                        <p class="text-white font-bold mb-2">5. Si A⃗ = 6î + 8ĵ, calcular |A⃗|:</p>
                        <input type="text" class="w-full bg-gray-800 text-white p-2 rounded text-xs" placeholder="Tu respuesta...">
                    </div>
                    
                    <div class="bg-gray-900/30 p-3 rounded">
                        <p class="text-white font-bold mb-2">6. Verificar dimensionalmente: E = mc²</p>
                        <textarea class="w-full bg-gray-800 text-white p-2 rounded text-xs" rows="2" placeholder="Tu análisis dimensional..."></textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-6">
            <button class="bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-700 hover:to-blue-700 text-white px-6 py-3 rounded-lg font-bold transition-all duration-300 transform hover:scale-105">
                🏆 Completar Autoevaluación
            </button>
        </div>
    </div>

    <script>
        function toggleAnswer(answerId) {
            const element = document.getElementById(answerId);
            element.classList.toggle('hidden');
        }
        
        let canvas = null;
        let ctx = null;
        
        // Inicializar canvas cuando se carga la página
        document.addEventListener('DOMContentLoaded', function() {
            canvas = document.getElementById('vectorCanvas');
            if (canvas) {
                ctx = canvas.getContext('2d');
                updateVector();
            }
        });
        
        function updateVector() {
            const magnitude = parseFloat(document.getElementById('vectorMagnitude').value);
            const angle = parseFloat(document.getElementById('vectorAngle').value);
            
            // Actualizar displays
            document.getElementById('magValue').textContent = magnitude.toFixed(1);
            document.getElementById('angleValue').textContent = angle + '°';
            
            // Calcular componentes
            const angleRad = angle * Math.PI / 180;
            const componentX = magnitude * Math.cos(angleRad);
            const componentY = magnitude * Math.sin(angleRad);
            
            document.getElementById('componentX').textContent = componentX.toFixed(2);
            document.getElementById('componentY').textContent = componentY.toFixed(2);
            
            // Actualizar notaciones
            document.getElementById('vectorNotation').textContent = 
                `A⃗ = ${componentX.toFixed(2)}î + ${componentY.toFixed(2)}ĵ`;
            document.getElementById('polarNotation').textContent = 
                `|A⃗| = ${magnitude.toFixed(1)}, θ = ${angle}°`;
            
            // Dibujar vector
            drawVector(magnitude, angle, componentX, componentY);
        }
        
        function drawVector(magnitude, angle, componentX, componentY) {
            if (!ctx) return;
            
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            const centerX = canvas.width / 2;
            const centerY = canvas.height / 2;
            const scale = 15; // Escala para visualización
            
            // Dibujar ejes
            ctx.strokeStyle = '#4B5563';
            ctx.lineWidth = 1;
            ctx.setLineDash([5, 5]);
            
            // Eje X
            ctx.beginPath();
            ctx.moveTo(0, centerY);
            ctx.lineTo(canvas.width, centerY);
            ctx.stroke();
            
            // Eje Y
            ctx.beginPath();
            ctx.moveTo(centerX, 0);
            ctx.lineTo(centerX, canvas.height);
            ctx.stroke();
            
            ctx.setLineDash([]);
            
            // Dibujar componentes
            ctx.strokeStyle = '#10B981'; // Verde para componente X
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.lineTo(centerX + componentX * scale, centerY);
            ctx.stroke();
            
            ctx.strokeStyle = '#3B82F6'; // Azul para componente Y
            ctx.beginPath();
            ctx.moveTo(centerX + componentX * scale, centerY);
            ctx.lineTo(centerX + componentX * scale, centerY - componentY * scale);
            ctx.stroke();
            
            // Dibujar vector resultante
            ctx.strokeStyle = '#EF4444'; // Rojo para vector resultante
            ctx.lineWidth = 3;
            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.lineTo(centerX + componentX * scale, centerY - componentY * scale);
            ctx.stroke();
            
            // Dibujar punta de flecha
            const endX = centerX + componentX * scale;
            const endY = centerY - componentY * scale;
            const arrowAngle = Math.atan2(-componentY, componentX);
            const arrowLength = 8;
            
            ctx.beginPath();
            ctx.moveTo(endX, endY);
            ctx.lineTo(endX - arrowLength * Math.cos(arrowAngle - 0.3), 
                      endY + arrowLength * Math.sin(arrowAngle - 0.3));
            ctx.moveTo(endX, endY);
            ctx.lineTo(endX - arrowLength * Math.cos(arrowAngle + 0.3), 
                      endY + arrowLength * Math.sin(arrowAngle + 0.3));
            ctx.stroke();
        }
        
        function randomVector() {
            const randomMag = Math.floor(Math.random() * 10) + 1;
            const randomAngle = Math.floor(Math.random() * 360);
            
            document.getElementById('vectorMagnitude').value = randomMag;
            document.getElementById('vectorAngle').value = randomAngle;
            
            updateVector();
        }
    </script>
</section>
