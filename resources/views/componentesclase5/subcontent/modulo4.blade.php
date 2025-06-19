<!-- Módulo 4: Medición, Errores e Instrumentos -->
<section id="modulo4" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">4</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🎯 Medición, Errores e Instrumentos</h3>
            <p class="text-purple-300 mt-1">Precisión, exactitud y técnicas de medición</p>
        </div>
    </div>
    
    <!-- Introducción del módulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            La calidad de las mediciones es fundamental en la física. Estudiaremos conceptos de precisión, exactitud, 
            tipos de errores y las características de los instrumentos de medición para obtener resultados confiables.
        </p>
        
        <!-- Objetivos de aprendizaje -->
        <div class="bg-purple-900/20 p-4 rounded-lg border-l-4 border-purple-500 mb-6">
            <h4 class="text-purple-300 font-semibold mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Objetivos de Aprendizaje
            </h4>
            <ul class="list-disc pl-6 text-gray-300 space-y-2">
                <li>Distinguir entre precisión y exactitud</li>
                <li>Identificar y clasificar tipos de errores</li>
                <li>Aplicar reglas de cifras significativas</li>
                <li>Seleccionar instrumentos de medición apropiados</li>
            </ul>
        </div>
    </div>
    
    <!-- Precisión vs Exactitud -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-purple-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
            Precisión vs Exactitud
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Precisión -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Precisión
                </h5>
                <div class="physics-unit bg-blue-700 mb-3">Reproducibilidad de mediciones</div>
                <p class="text-gray-300 mb-4">
                    Grado de concordancia entre mediciones repetidas bajo las mismas condiciones.
                </p>
                <div class="bg-blue-900/20 p-3 rounded">
                    <p class="text-blue-200 text-sm">
                        <strong>Ejemplo:</strong> Cinco mediciones de una mesa: 1.245 m, 1.247 m, 1.246 m, 1.245 m, 1.248 m
                    </p>
                    <p class="text-blue-300 text-xs mt-1">Alta precisión: valores muy cercanos entre sí</p>
                </div>
            </div>
            
            <!-- Exactitud -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Exactitud
                </h5>
                <div class="physics-unit bg-green-700 mb-3">Cercanía al valor verdadero</div>
                <p class="text-gray-300 mb-4">
                    Grado de concordancia entre el valor medido y el valor verdadero o de referencia.
                </p>
                <div class="bg-green-900/20 p-3 rounded">
                    <p class="text-green-200 text-sm">
                        <strong>Ejemplo:</strong> Valor verdadero: 1.250 m, Medición: 1.251 m
                    </p>
                    <p class="text-green-300 text-xs mt-1">Alta exactitud: muy cerca del valor real</p>
                </div>
            </div>
        </div>
        
        <!-- Diana de precisión y exactitud -->
        <div class="mt-6 bg-gray-800/30 p-6 rounded-lg">
            <h5 class="text-lg font-bold text-white mb-4 text-center">🎯 Analogía de la Diana</h5>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center text-sm">
                <div class="bg-red-900/30 p-3 rounded border border-red-500/30">
                    <div class="text-red-400 font-bold mb-1">Baja Precisión</div>
                    <div class="text-red-400 font-bold mb-2">Baja Exactitud</div>
                    <div class="text-gray-300">Tiros dispersos y alejados del centro</div>
                </div>
                <div class="bg-yellow-900/30 p-3 rounded border border-yellow-500/30">
                    <div class="text-yellow-400 font-bold mb-1">Alta Precisión</div>
                    <div class="text-yellow-400 font-bold mb-2">Baja Exactitud</div>
                    <div class="text-gray-300">Tiros agrupados pero alejados del centro</div>
                </div>
                <div class="bg-blue-900/30 p-3 rounded border border-blue-500/30">
                    <div class="text-blue-400 font-bold mb-1">Baja Precisión</div>
                    <div class="text-blue-400 font-bold mb-2">Alta Exactitud</div>
                    <div class="text-gray-300">Tiros dispersos pero centrados</div>
                </div>
                <div class="bg-green-900/30 p-3 rounded border border-green-500/30">
                    <div class="text-green-400 font-bold mb-1">Alta Precisión</div>
                    <div class="text-green-400 font-bold mb-2">Alta Exactitud</div>
                    <div class="text-gray-300">Tiros agrupados y centrados</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tipos de Errores -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-red-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            Tipos de Errores en Medición
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Errores Sistemáticos -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Errores Sistemáticos
                </h5>
                <div class="physics-unit bg-red-700 mb-3">Consistentes y predecibles</div>
                <p class="text-gray-300 mb-4">
                    Errores que afectan la exactitud de manera constante y en la misma dirección.
                </p>
                <div class="space-y-2 text-sm">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-red-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Calibración incorrecta</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-red-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Condiciones ambientales</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-red-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Desgaste del instrumento</span>
                    </div>
                </div>
            </div>
            
            <!-- Errores Aleatorios -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Errores Aleatorios
                </h5>
                <div class="physics-unit bg-yellow-700 mb-3">Impredecibles y variables</div>
                <p class="text-gray-300 mb-4">
                    Errores que varían de manera impredecible y afectan la precisión.
                </p>
                <div class="space-y-2 text-sm">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Fluctuaciones eléctricas</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Vibraciones</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Limitaciones del observador</span>
                    </div>
                </div>
            </div>
            
            <!-- Errores Groseros -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Errores Groseros
                </h5>
                <div class="physics-unit bg-orange-700 mb-3">Humanos y evitables</div>
                <p class="text-gray-300 mb-4">
                    Errores debido a descuidos, errores de cálculo o mal uso de instrumentos.
                </p>
                <div class="space-y-2 text-sm">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-orange-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Lectura incorrecta</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-orange-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Errores de transcripción</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-orange-400 rounded-full mr-3"></span>
                        <span class="text-gray-300">Mal uso del instrumento</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Cifras Significativas -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-blue-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
            </svg>
            Cifras Significativas
        </h4>
        
        <div class="bg-blue-900/20 p-4 rounded-lg border-l-4 border-blue-500 mb-6">
            <p class="text-blue-200 text-center">
                <strong>Cifras significativas:</strong> Todos los dígitos conocidos con certeza más el primer dígito incierto
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Reglas para identificar -->
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-lg font-bold text-white mb-4">📋 Reglas para Identificar</h5>
                <div class="space-y-3 text-sm">
                    <div class="flex items-start">
                        <span class="text-blue-400 font-bold mr-3">1.</span>
                        <div>
                            <p class="text-gray-300">Todos los dígitos diferentes de cero</p>
                            <p class="text-gray-400 text-xs">123.45 → 5 cifras significativas</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-blue-400 font-bold mr-3">2.</span>
                        <div>
                            <p class="text-gray-300">Ceros entre dígitos significativos</p>
                            <p class="text-gray-400 text-xs">1002 → 4 cifras significativas</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-blue-400 font-bold mr-3">3.</span>
                        <div>
                            <p class="text-gray-300">Ceros a la derecha del punto decimal</p>
                            <p class="text-gray-400 text-xs">12.300 → 5 cifras significativas</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-red-400 font-bold mr-3">4.</span>
                        <div>
                            <p class="text-gray-300">Ceros a la izquierda NO cuentan</p>
                            <p class="text-gray-400 text-xs">0.0025 → 2 cifras significativas</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Operaciones -->
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-lg font-bold text-white mb-4">🧮 Operaciones</h5>
                <div class="space-y-4">
                    <div class="physics-formula">
                        <h6 class="text-white font-bold mb-2">Suma y Resta</h6>
                        <p class="text-white text-center mb-2">Resultado: menor número de decimales</p>
                        <div class="bg-gray-700/50 p-2 rounded text-sm">
                            <p class="text-white">12.1 + 1.23 = 13.33 → 13.3</p>
                        </div>
                    </div>
                    
                    <div class="physics-formula">
                        <h6 class="text-white font-bold mb-2">Multiplicación y División</h6>
                        <p class="text-white text-center mb-2">Resultado: menor número de cifras significativas</p>
                        <div class="bg-gray-700/50 p-2 rounded text-sm">
                            <p class="text-white">12.1 × 1.2 = 14.52 → 14</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Instrumentos de Medición -->
    <div class="bg-gradient-to-r from-purple-900/30 to-indigo-900/30 p-6 rounded-xl border border-purple-500/30">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
            Instrumentos de Medición Básicos
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="measurement-tool">
                <div class="flex items-center mb-3">
                    <span class="text-2xl mr-3">📏</span>
                    <div>
                        <h5 class="font-bold text-white">Regla Graduada</h5>
                        <p class="text-red-200 text-sm">Precisión: ±0.5 mm</p>
                    </div>
                </div>
                <p class="text-red-100 text-xs">Medición de longitudes medias. Lectura directa con escala visible.</p>
            </div>
            
            <div class="measurement-tool">
                <div class="flex items-center mb-3">
                    <span class="text-2xl mr-3">🔧</span>
                    <div>
                        <h5 class="font-bold text-white">Calibrador Vernier</h5>
                        <p class="text-red-200 text-sm">Precisión: ±0.1 mm</p>
                    </div>
                </div>
                <p class="text-red-100 text-xs">Medición precisa de longitudes, diámetros internos y externos.</p>
            </div>
            
            <div class="measurement-tool">
                <div class="flex items-center mb-3">
                    <span class="text-2xl mr-3">🔬</span>
                    <div>
                        <h5 class="font-bold text-white">Micrómetro</h5>
                        <p class="text-red-200 text-sm">Precisión: ±0.01 mm</p>
                    </div>
                </div>
                <p class="text-red-100 text-xs">Medición de alta precisión para dimensiones pequeñas.</p>
            </div>
            
            <div class="measurement-tool">
                <div class="flex items-center mb-3">
                    <span class="text-2xl mr-3">⚖️</span>
                    <div>
                        <h5 class="font-bold text-white">Balanza Digital</h5>
                        <p class="text-red-200 text-sm">Precisión: ±0.1 g</p>
                    </div>
                </div>
                <p class="text-red-100 text-xs">Medición de masa con lectura digital automática.</p>
            </div>
            
            <div class="measurement-tool">
                <div class="flex items-center mb-3">
                    <span class="text-2xl mr-3">⏱️</span>
                    <div>
                        <h5 class="font-bold text-white">Cronómetro</h5>
                        <p class="text-red-200 text-sm">Precisión: ±0.01 s</p>
                    </div>
                </div>
                <p class="text-red-100 text-xs">Medición de intervalos de tiempo con alta precisión.</p>
            </div>
            
            <div class="measurement-tool">
                <div class="flex items-center mb-3">
                    <span class="text-2xl mr-3">🌡️</span>
                    <div>
                        <h5 class="font-bold text-white">Termómetro Digital</h5>
                        <p class="text-red-200 text-sm">Precisión: ±0.1°C</p>
                    </div>
                </div>
                <p class="text-red-100 text-xs">Medición de temperatura con respuesta rápida.</p>
            </div>
        </div>
          <!-- Características importantes -->
        <div class="mt-6 bg-gray-800/30 p-4 rounded-lg">
            <h6 class="text-white font-bold mb-3 text-center">🔍 Características Importantes de los Instrumentos</h6>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div class="text-center">
                    <div class="physics-unit bg-green-700 mb-2">Sensibilidad</div>
                    <p class="text-gray-300">Mínima variación detectable</p>
                </div>
                <div class="text-center">
                    <div class="physics-unit bg-blue-700 mb-2">Resolución</div>
                    <p class="text-gray-300">Menor división de la escala</p>
                </div>
                <div class="text-center">
                    <div class="physics-unit bg-purple-700 mb-2">Rango</div>
                    <p class="text-gray-300">Límites de medición</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejemplos Prácticos -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-yellow-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            💡 Ejemplos Prácticos de Medición
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Ejemplo 1: Análisis de errores -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">📐</span>
                    Ejemplo 1: Análisis de Errores
                </h5>
                <div class="bg-yellow-900/20 p-4 rounded-lg border-l-4 border-yellow-500 mb-4">
                    <p class="text-yellow-200 font-bold mb-2">Situación:</p>
                    <p class="text-gray-300 text-sm">
                        Un estudiante mide el diámetro de un cilindro 5 veces con un calibrador (precisión ±0.02 mm):
                        <br><strong>Medidas:</strong> 25.14, 25.16, 25.13, 25.15, 25.17 mm
                        <br><strong>Valor real:</strong> 25.20 mm
                    </p>
                </div>
                
                <div class="space-y-4">
                    <div class="grid grid-cols-1 gap-3 text-sm">
                        <div class="bg-blue-900/20 p-3 rounded">
                            <h6 class="text-blue-300 font-bold mb-2">📊 Cálculos:</h6>
                            <div class="font-mono space-y-1 text-xs">
                                <p class="text-white">Promedio = (25.14+25.16+25.13+25.15+25.17)/5</p>
                                <p class="text-yellow-300">x̄ = 25.15 mm</p>
                                <p class="text-white">Error absoluto = |25.15 - 25.20| = 0.05 mm</p>
                                <p class="text-white">Error relativo = (0.05/25.20) × 100% = 0.20%</p>
                            </div>
                        </div>
                        <div class="bg-green-900/20 p-3 rounded">
                            <h6 class="text-green-300 font-bold mb-2">🎯 Análisis:</h6>
                            <ul class="list-disc pl-4 text-xs text-gray-300">
                                <li><strong>Alta precisión:</strong> Medidas muy consistentes (desviación < 0.04 mm)</li>
                                <li><strong>Baja exactitud:</strong> Todas las medidas están por debajo del valor real</li>
                                <li><strong>Error sistemático:</strong> Posible calibración incorrecta del instrumento</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ejemplo 2: Cifras significativas -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">🔢</span>
                    Ejemplo 2: Cifras Significativas
                </h5>
                <div class="bg-blue-900/20 p-4 rounded-lg border-l-4 border-blue-500 mb-4">
                    <p class="text-blue-200 font-bold mb-2">Problema:</p>
                    <p class="text-gray-300 text-sm">
                        Calcular el área de un rectángulo:
                        <br><strong>Largo:</strong> 12.5 cm (3 cifras significativas)
                        <br><strong>Ancho:</strong> 4.23 cm (3 cifras significativas)
                    </p>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-700/50 p-4 rounded-lg">
                        <h6 class="text-white font-bold mb-3 text-center">🧮 Paso a paso:</h6>
                        <div class="font-mono text-center space-y-2">
                            <p class="text-white">Área = largo × ancho</p>
                            <p class="text-white">A = 12.5 cm × 4.23 cm</p>
                            <p class="text-yellow-300">A = 52.875 cm²</p>
                            <div class="border-t border-gray-600 pt-2 mt-3">
                                <p class="text-green-300 font-bold">Resultado final: 52.9 cm²</p>
                                <p class="text-green-200 text-xs">(3 cifras significativas)</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-purple-900/20 p-3 rounded">
                        <h6 class="text-purple-300 font-bold mb-2">📝 Regla aplicada:</h6>
                        <p class="text-gray-300 text-xs">
                            En multiplicación, el resultado debe tener el mismo número de cifras significativas 
                            que el factor con menor cantidad (ambos tienen 3, resultado: 3 cifras).
                        </p>
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
            📝 Ejercicios para Estudiantes
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ejercicio 1 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-purple-500/30">
                <h5 class="text-lg font-bold text-purple-300 mb-3 flex items-center">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">1</span>
                    Identificación de Errores
                </h5>
                <div class="bg-purple-900/20 p-3 rounded mb-3">
                    <p class="text-purple-200 text-sm font-bold mb-2">Clasifica estos errores:</p>
                    <ul class="text-gray-300 text-xs space-y-1">
                        <li>a) El cronómetro adelanta 0.5 segundos cada minuto</li>
                        <li>b) Una ráfaga de viento afecta la medición de tiempo de caída</li>
                        <li>c) El observador reacciona 0.2 s tarde al presionar el cronómetro</li>
                        <li>d) La regla se dilata por el calor del sol</li>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('answer1')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="answer1" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2">
                        <p><span class="text-red-400">a) Sistemático:</span> Error constante del instrumento</p>
                        <p><span class="text-orange-400">b) Aleatorio:</span> Perturbación impredecible</p>
                        <p><span class="text-red-400">c) Sistemático:</span> Error humano constante</p>
                        <p><span class="text-red-400">d) Sistemático:</span> Expansión térmica predecible</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicio 2 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-blue-500/30">
                <h5 class="text-lg font-bold text-blue-300 mb-3 flex items-center">
                    <span class="bg-blue-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">2</span>
                    Cifras Significativas
                </h5>
                <div class="bg-blue-900/20 p-3 rounded mb-3">
                    <p class="text-blue-200 text-sm font-bold mb-2">Resuelve estas operaciones:</p>
                    <ul class="text-gray-300 text-xs space-y-1 font-mono">
                        <li>a) 123.4 + 12.56 + 1.2 = ?</li>
                        <li>b) 45.2 × 1.25 = ?</li>
                        <li>c) 789.123 ÷ 2.1 = ?</li>
                        <li>d) √(144.0) = ?</li>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('answer2')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="answer2" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2 font-mono">
                        <p><span class="text-green-400">a) 137.2</span> (1 decimal, como 1.2)</p>
                        <p><span class="text-green-400">b) 56.5</span> (3 cifras significativas)</p>
                        <p><span class="text-green-400">c) 380</span> (2 cifras significativas)</p>
                        <p><span class="text-green-400">d) 12.0</span> (3 cifras significativas)</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicio 3 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-green-500/30">
                <h5 class="text-lg font-bold text-green-300 mb-3 flex items-center">
                    <span class="bg-green-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">3</span>
                    Selección de Instrumentos
                </h5>
                <div class="bg-green-900/20 p-3 rounded mb-3">
                    <p class="text-green-200 text-sm font-bold mb-2">¿Qué instrumento usarías para medir?</p>
                    <ul class="text-gray-300 text-xs space-y-1">
                        <li>a) Grosor de una hoja de papel</li>
                        <li>b) Longitud de un salón de clases</li>
                        <li>c) Diámetro interno de un tubo</li>
                        <li>d) Tiempo de una reacción química lenta</li>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('answer3')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="answer3" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2">
                        <p><span class="text-yellow-400">a) Micrómetro:</span> Alta precisión necesaria (±0.01 mm)</p>
                        <p><span class="text-yellow-400">b) Cinta métrica:</span> Distancias largas, precisión moderada</p>
                        <p><span class="text-yellow-400">c) Calibrador vernier:</span> Medidas internas y precisión media</p>
                        <p><span class="text-yellow-400">d) Cronómetro común:</span> Procesos lentos no requieren alta precisión</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicio 4 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-orange-500/30">
                <h5 class="text-lg font-bold text-orange-300 mb-3 flex items-center">
                    <span class="bg-orange-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">4</span>
                    Cálculo de Incertidumbres
                </h5>
                <div class="bg-orange-900/20 p-3 rounded mb-3">
                    <p class="text-orange-200 text-sm font-bold mb-2">Mediciones de longitud (cm):</p>
                    <p class="text-gray-300 text-xs font-mono">12.3, 12.1, 12.4, 12.2, 12.5</p>
                    <p class="text-orange-200 text-sm mt-2">Calcula el promedio y la incertidumbre estándar.</p>
                </div>
                <div class="text-center">
                    <button class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded text-sm transition-colors" onclick="toggleAnswer('answer4')">
                        Ver Respuestas
                    </button>
                </div>
                <div id="answer4" class="hidden mt-3 bg-gray-900/50 p-3 rounded text-xs">
                    <div class="space-y-2 font-mono">
                        <p><span class="text-green-400">Promedio:</span> x̄ = (12.3+12.1+12.4+12.2+12.5)/5 = 12.3 cm</p>
                        <p><span class="text-green-400">Desviación típica:</span> σ ≈ 0.15 cm</p>
                        <p><span class="text-yellow-400">Resultado:</span> (12.3 ± 0.2) cm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Laboratorio Virtual -->
    <div class="bg-gradient-to-r from-indigo-900/30 to-purple-900/30 p-6 rounded-xl border border-indigo-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 8.172V5L8 4z"></path>
            </svg>
            🧪 Laboratorio Virtual de Medición
        </h4>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-indigo-300 font-bold mb-4 text-center">🔬 Simulador de Calibrador</h5>
                <div class="bg-gray-900/50 p-4 rounded-lg border-2 border-gray-600 mb-4">
                    <div class="text-center">
                        <div class="inline-block bg-gradient-to-r from-gray-600 to-gray-800 p-4 rounded-lg border">
                            <div class="text-2xl font-mono text-green-400 mb-2" id="caliperReading">25.34 mm</div>
                            <div class="text-xs text-gray-400">Lectura del calibrador</div>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-center space-x-2">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs" onclick="simulateCaliper()">
                            Nueva Medición
                        </button>
                        <button class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-xs" onclick="addToList()">
                            Agregar a Lista
                        </button>
                    </div>
                </div>
                <div class="bg-gray-900/30 p-3 rounded">
                    <h6 class="text-white font-bold mb-2 text-sm">📋 Registro de mediciones:</h6>
                    <div id="measurementList" class="text-xs text-gray-300 space-y-1 max-h-20 overflow-y-auto">
                        <p class="text-gray-500 italic">Haz clic en "Nueva Medición" para empezar</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg">
                <h5 class="text-purple-300 font-bold mb-4 text-center">📊 Análisis Estadístico</h5>
                <div class="space-y-3">
                    <div class="bg-gray-900/50 p-3 rounded">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="text-center">
                                <div class="text-white font-bold" id="avgValue">--</div>
                                <div class="text-gray-400">Promedio</div>
                            </div>
                            <div class="text-center">
                                <div class="text-white font-bold" id="stdDev">--</div>
                                <div class="text-gray-400">Desv. Est.</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-900/50 p-3 rounded">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="text-center">
                                <div class="text-white font-bold" id="minValue">--</div>
                                <div class="text-gray-400">Mínimo</div>
                            </div>
                            <div class="text-center">
                                <div class="text-white font-bold" id="maxValue">--</div>
                                <div class="text-gray-400">Máximo</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs" onclick="clearMeasurements()">
                            Limpiar Datos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Herramientas de Apoyo -->
    <div class="bg-gradient-to-r from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-cyan-500/30">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            🛠️ Herramientas de Apoyo
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-800/50 p-4 rounded-lg border border-cyan-500/30">
                <h5 class="text-cyan-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">📏</span> Calculadora de Precisión
                </h5>
                <p class="text-gray-300 text-sm mb-3">Calcula automáticamente el número correcto de cifras significativas</p>
                <button class="w-full bg-cyan-600 hover:bg-cyan-700 text-white py-2 rounded text-sm transition-colors">
                    Abrir Calculadora
                </button>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-blue-500/30">
                <h5 class="text-blue-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">📊</span> Análisis de Errores
                </h5>
                <p class="text-gray-300 text-sm mb-3">Herramienta para clasificar y cuantificar diferentes tipos de errores</p>
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded text-sm transition-colors">
                    Iniciar Análisis
                </button>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded-lg border border-purple-500/30">
                <h5 class="text-purple-300 font-bold mb-2 flex items-center">
                    <span class="mr-2">🔍</span> Guía de Instrumentos
                </h5>
                <p class="text-gray-300 text-sm mb-3">Referencia rápida de precisión y uso de instrumentos de medición</p>
                <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded text-sm transition-colors">
                    Ver Guía
                </button>
            </div>
        </div>
    </div>

    <script>
        let measurements = [];
        
        function toggleAnswer(answerId) {
            const element = document.getElementById(answerId);
            element.classList.toggle('hidden');
        }
        
        function simulateCaliper() {
            // Simula una medición con el calibrador (25 ± 0.5 mm)
            const baseValue = 25.0;
            const randomError = (Math.random() - 0.5) * 1.0; // ±0.5 mm
            const measurement = Math.round((baseValue + randomError) * 100) / 100;
            document.getElementById('caliperReading').textContent = measurement.toFixed(2) + ' mm';
        }
        
        function addToList() {
            const reading = document.getElementById('caliperReading').textContent;
            const value = parseFloat(reading.replace(' mm', ''));
            
            if (!isNaN(value)) {
                measurements.push(value);
                updateMeasurementList();
                updateStatistics();
            }
        }
        
        function updateMeasurementList() {
            const listElement = document.getElementById('measurementList');
            if (measurements.length === 0) {
                listElement.innerHTML = '<p class="text-gray-500 italic">Haz clic en "Nueva Medición" para empezar</p>';
                return;
            }
            
            const listItems = measurements.map((m, i) => 
                `<p>${i + 1}. ${m.toFixed(2)} mm</p>`
            ).join('');
            listElement.innerHTML = listItems;
        }
        
        function updateStatistics() {
            if (measurements.length === 0) {
                document.getElementById('avgValue').textContent = '--';
                document.getElementById('stdDev').textContent = '--';
                document.getElementById('minValue').textContent = '--';
                document.getElementById('maxValue').textContent = '--';
                return;
            }
            
            const avg = measurements.reduce((a, b) => a + b, 0) / measurements.length;
            const variance = measurements.reduce((a, b) => a + Math.pow(b - avg, 2), 0) / measurements.length;
            const stdDev = Math.sqrt(variance);
            const min = Math.min(...measurements);
            const max = Math.max(...measurements);
            
            document.getElementById('avgValue').textContent = avg.toFixed(2) + ' mm';
            document.getElementById('stdDev').textContent = stdDev.toFixed(3) + ' mm';
            document.getElementById('minValue').textContent = min.toFixed(2) + ' mm';
            document.getElementById('maxValue').textContent = max.toFixed(2) + ' mm';
        }
        
        function clearMeasurements() {
            measurements = [];
            updateMeasurementList();
            updateStatistics();
        }
    </script>
</section>
