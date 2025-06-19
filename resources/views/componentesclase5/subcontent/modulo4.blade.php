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
</section>
