<!-- Submódulo 3A: Análisis Dimensional -->
<section id="modulo3a" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">3A</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🔬 Análisis Dimensional</h3>
            <p class="text-blue-300 mt-1">Verificación de ecuaciones y homogeneidad dimensional</p>
        </div>
    </div>
    
    <!-- Introducción del submódulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            El análisis dimensional es una herramienta fundamental que nos permite verificar la validez de ecuaciones físicas, 
            deducir relaciones entre variables y asegurar la consistencia en nuestros cálculos físicos.
        </p>
        
        <!-- Objetivos de aprendizaje -->
        <div class="bg-blue-900/20 p-4 rounded-lg border-l-4 border-blue-500 mb-6">
            <h4 class="text-blue-300 font-semibold mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Objetivos de Aprendizaje
            </h4>
            <ul class="list-disc pl-6 text-gray-300 space-y-2">
                <li>Aplicar el principio de homogeneidad dimensional</li>
                <li>Escribir ecuaciones dimensionales correctamente</li>
                <li>Verificar la validez de fórmulas físicas</li>
                <li>Deducir relaciones entre variables usando dimensiones</li>
            </ul>
        </div>
    </div>
    
    <!-- Principio de Homogeneidad Dimensional -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-blue-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
            Principio de Homogeneidad Dimensional
        </h4>
        
        <div class="bg-gradient-to-r from-blue-900/30 to-purple-900/30 p-6 rounded-lg border border-blue-500/30 mb-6">
            <p class="text-white text-lg text-center mb-4">
                <strong>"En toda ecuación física válida, ambos lados deben tener las mismas dimensiones"</strong>
            </p>
            <div class="physics-formula">
                <p class="text-white font-mono text-center text-xl">
                    [Lado izquierdo] = [Lado derecho]
                </p>
            </div>
        </div>
        
        <!-- Notación dimensional -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    Dimensiones Fundamentales
                </h5>
                <div class="space-y-3">
                    <div class="physics-unit bg-blue-700">[L] = Longitud</div>
                    <div class="physics-unit bg-green-700">[M] = Masa</div>
                    <div class="physics-unit bg-red-700">[T] = Tiempo</div>
                    <div class="physics-unit bg-purple-700">[I] = Corriente</div>
                    <div class="physics-unit bg-orange-700">[Θ] = Temperatura</div>
                    <div class="physics-unit bg-cyan-700">[N] = Cantidad de sustancia</div>
                    <div class="physics-unit bg-pink-700">[J] = Intensidad luminosa</div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    Dimensiones Derivadas
                </h5>
                <div class="space-y-2 text-sm">
                    <p class="text-gray-300"><strong class="text-blue-400">Velocidad:</strong> [v] = [L][T]⁻¹</p>
                    <p class="text-gray-300"><strong class="text-green-400">Aceleración:</strong> [a] = [L][T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-red-400">Fuerza:</strong> [F] = [M][L][T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-purple-400">Energía:</strong> [E] = [M][L]²[T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-yellow-400">Presión:</strong> [P] = [M][L]⁻¹[T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-cyan-400">Potencia:</strong> [W] = [M][L]²[T]⁻³</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Verificación de Fórmulas -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-green-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Verificación de Fórmulas Físicas
        </h4>
        
        <!-- Ejemplo 1: Ecuación de movimiento -->
        <div class="physics-formula mb-6">
            <h5 class="text-white font-bold mb-3 text-center">🚀 Ejemplo 1: Ecuación de Movimiento</h5>
            <div class="text-center mb-4">
                <p class="text-white font-mono text-2xl mb-2">v² = v₀² + 2as</p>
                <p class="text-blue-200">Verificemos dimensionalmente esta ecuación</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div class="bg-gray-800/50 p-3 rounded">
                    <p class="text-yellow-300 font-bold">Lado izquierdo:</p>
                    <p class="text-white">[v²] = [L²T⁻²]</p>
                </div>
                <div class="bg-gray-800/50 p-3 rounded">
                    <p class="text-yellow-300 font-bold">Primer término:</p>
                    <p class="text-white">[v₀²] = [L²T⁻²]</p>
                </div>
                <div class="bg-gray-800/50 p-3 rounded">
                    <p class="text-yellow-300 font-bold">Segundo término:</p>
                    <p class="text-white">[2as] = [LT⁻²][L] = [L²T⁻²]</p>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <div class="inline-flex items-center bg-green-900/30 px-4 py-2 rounded-lg border border-green-500/30">
                    <svg class="w-5 h-5 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-green-300 font-semibold">✓ Ecuación dimensionalmente correcta</span>
                </div>
            </div>
        </div>
        
        <!-- Ejemplo 2: Ley de gravitación -->
        <div class="physics-formula">
            <h5 class="text-white font-bold mb-3 text-center">🌍 Ejemplo 2: Ley de Gravitación Universal</h5>
            <div class="text-center mb-4">
                <p class="text-white font-mono text-2xl mb-2">F = G(m₁m₂)/r²</p>
                <p class="text-blue-200">Determinemos las dimensiones de G</p>
            </div>
            
            <div class="bg-gray-800/50 p-4 rounded text-center">
                <p class="text-white mb-2">Despejando G:</p>
                <p class="text-white font-mono text-lg mb-2">G = Fr²/(m₁m₂)</p>
                <p class="text-yellow-300 mb-2">[G] = [MLT⁻²][L²]/[M²] = [M⁻¹L³T⁻²]</p>
                <div class="physics-unit bg-purple-700">G = 6.67 × 10⁻¹¹ m³kg⁻¹s⁻²</div>
            </div>
        </div>
    </div>
    
    <!-- Deducción de Fórmulas -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-purple-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            Deducción de Fórmulas por Análisis Dimensional
        </h4>
        
        <!-- Ejemplo: Péndulo simple -->
        <div class="physics-formula mb-6">
            <h5 class="text-white font-bold mb-3 text-center">⏰ Ejemplo: Período del Péndulo Simple</h5>
            
            <div class="bg-purple-900/20 p-4 rounded-lg border-l-4 border-purple-500 mb-4">
                <p class="text-purple-200 font-bold mb-2">Problema:</p>
                <p class="text-gray-300">
                    El período T de un péndulo simple depende de su longitud L y la gravedad g. 
                    Encuentra la relación T = f(L, g).
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-800/50 p-4 rounded">
                    <h6 class="text-yellow-300 font-bold mb-3">Paso 1: Identificar dimensiones</h6>
                    <div class="space-y-2 font-mono text-sm">
                        <p class="text-white">[T] = [T] (período)</p>
                        <p class="text-white">[L] = [L] (longitud)</p>
                        <p class="text-white">[g] = [LT⁻²] (aceleración)</p>
                    </div>
                </div>
                
                <div class="bg-gray-800/50 p-4 rounded">
                    <h6 class="text-blue-300 font-bold mb-3">Paso 2: Proponer forma general</h6>
                    <div class="font-mono text-sm">
                        <p class="text-white">T = k × L^a × g^b</p>
                        <p class="text-gray-300 text-xs mt-2">(k es adimensional)</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-4 bg-gray-700/50 p-4 rounded">
                <h6 class="text-green-300 font-bold mb-3">Paso 3: Análisis dimensional</h6>
                <div class="font-mono text-sm space-y-2">
                    <p class="text-white">[T] = [L]^a × [LT⁻²]^b</p>
                    <p class="text-white">[T] = [L]^a × [L^b T^(-2b)]</p>
                    <p class="text-white">[T] = [L^(a+b) T^(-2b)]</p>
                </div>
                
                <div class="mt-4 bg-green-900/20 p-3 rounded">
                    <p class="text-green-200 font-bold mb-2">Igualando exponentes:</p>
                    <div class="font-mono text-sm space-y-1">
                        <p class="text-white">Para T: 1 = -2b → b = -1/2</p>
                        <p class="text-white">Para L: 0 = a + b → a = 1/2</p>
                    </div>
                </div>
                
                <div class="mt-4 text-center">
                    <p class="text-white font-mono text-xl font-bold">T = k√(L/g)</p>
                    <p class="text-green-300 text-sm mt-2">✓ Fórmula deducida por análisis dimensional</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejemplos Resueltos -->
    <div class="bg-gradient-to-r from-orange-900/30 to-red-900/30 p-6 rounded-xl border border-orange-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            🎯 Ejemplo Resuelto: Verificar E = ½mv²
        </h4>
        
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
            <div class="bg-orange-900/20 p-4 rounded-lg border-l-4 border-orange-500 mb-4">
                <p class="text-orange-200 font-bold mb-2">Objetivo:</p>
                <p class="text-gray-300 text-sm">
                    Verificar dimensionalmente la ecuación de energía cinética
                </p>
            </div>
            
            <div class="space-y-4">
                <div class="bg-gray-700/50 p-4 rounded">
                    <h6 class="text-yellow-300 font-bold mb-2">Paso 1: Identificar dimensiones</h6>
                    <div class="text-sm font-mono space-y-1">
                        <p class="text-white">[E] = [M L² T⁻²] (energía)</p>
                        <p class="text-white">[m] = [M] (masa)</p>
                        <p class="text-white">[v²] = [L² T⁻²] (velocidad al cuadrado)</p>
                    </div>
                </div>
                
                <div class="bg-gray-700/50 p-4 rounded">
                    <h6 class="text-blue-300 font-bold mb-2">Paso 2: Analizar lado derecho</h6>
                    <div class="text-sm font-mono space-y-1">
                        <p class="text-white">[½mv²] = [M] × [L² T⁻²]</p>
                        <p class="text-white">[½mv²] = [M L² T⁻²]</p>
                        <p class="text-gray-300 text-xs">(½ es adimensional)</p>
                    </div>
                </div>
                
                <div class="bg-gray-700/50 p-4 rounded">
                    <h6 class="text-green-300 font-bold mb-2">Paso 3: Comparar</h6>
                    <div class="text-sm font-mono space-y-1">
                        <p class="text-white">Lado izquierdo: [M L² T⁻²]</p>
                        <p class="text-white">Lado derecho: [M L² T⁻²]</p>
                        <div class="text-center mt-3">
                            <span class="inline-flex items-center bg-green-900/30 px-3 py-1 rounded border border-green-500/30">
                                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-green-400 font-bold">¡Dimensiones coinciden!</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejercicios para Estudiantes -->
    <div class="bg-gradient-to-r from-blue-900/30 to-purple-900/30 p-6 rounded-xl border border-blue-500/30">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            📋 Ejercicios de Análisis Dimensional
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ejercicio 1 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-blue-500/30">
                <h5 class="text-lg font-bold text-blue-300 mb-3 flex items-center">
                    <span class="bg-blue-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">1</span>
                    Verificación Dimensional
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Verifica si estas ecuaciones son dimensionalmente correctas:</strong>
                    </p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-1 text-sm font-mono">
                        <li>s = v₀t + ½at² (ecuación cinemática)</li>
                        <li>P = F/A (presión)</li>
                        <li>T = 2π√(L/g) (péndulo)</li>
                        <li>F = kx (ley de Hooke)</li>
                        <li>W = Fd cos θ (trabajo)</li>
                    </ul>
                </div>
                <div class="bg-blue-900/20 p-3 rounded text-xs">
                    <p class="text-blue-200">
                        <strong>📐 Método:</strong> Sustituye las dimensiones y verifica igualdad en ambos lados.
                    </p>
                </div>
            </div>
            
            <!-- Ejercicio 2 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-purple-500/30">
                <h5 class="text-lg font-bold text-purple-300 mb-3 flex items-center">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">2</span>
                    Deducción de Fórmulas
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Usa análisis dimensional para deducir:</strong>
                    </p>
                    <div class="bg-purple-900/20 p-3 rounded mb-3 text-sm">
                        <p class="text-purple-200">El período de oscilación de un resorte depende de:</p>
                        <p class="text-gray-300">• masa (m), • constante del resorte (k)</p>
                    </div>
                    <p class="text-gray-300 text-sm">
                        Encuentra la forma T = C × m^a × k^b
                    </p>
                </div>
                <div class="bg-purple-900/20 p-3 rounded text-xs">
                    <p class="text-purple-200">
                        <strong>🧮 Pista:</strong> [k] = [M T⁻²] (constante elástica)
                    </p>
                </div>
            </div>
            
            <!-- Ejercicio 3 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-green-500/30">
                <h5 class="text-lg font-bold text-green-300 mb-3 flex items-center">
                    <span class="bg-green-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">3</span>
                    Constantes Físicas
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Determina las dimensiones de:</strong>
                    </p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-1 text-sm">
                        <li>Constante de Planck (E = hf)</li>
                        <li>Constante de Coulomb (F = kq₁q₂/r²)</li>
                        <li>Resistencia eléctrica (V = IR)</li>
                        <li>Capacitancia (Q = CV)</li>
                    </ul>
                </div>
                <div class="bg-green-900/20 p-3 rounded text-xs">
                    <p class="text-green-200">
                        <strong>⚡ Tip:</strong> Usa las ecuaciones dadas para despejar cada constante.
                    </p>
                </div>
            </div>
            
            <!-- Ejercicio 4 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-yellow-500/30">
                <h5 class="text-lg font-bold text-yellow-300 mb-3 flex items-center">
                    <span class="bg-yellow-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">4</span>
                    Problema Avanzado
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Deducción compleja:</strong>
                    </p>
                    <div class="bg-yellow-900/20 p-3 rounded mb-3 text-sm">
                        <p class="text-yellow-200">La velocidad de ondas en una cuerda depende de:</p>
                        <p class="text-gray-300">• Tensión (T), • densidad lineal (μ = masa/longitud)</p>
                    </div>
                    <p class="text-gray-300 text-sm">
                        Deduce v = f(T, μ) usando análisis dimensional.
                    </p>
                </div>
                <div class="bg-yellow-900/20 p-3 rounded text-xs">
                    <p class="text-yellow-200">
                        <strong>🎼 Aplicación:</strong> Fundamental para instrumentos musicales.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
