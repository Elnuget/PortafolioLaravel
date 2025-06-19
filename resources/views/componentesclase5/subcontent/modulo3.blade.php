<!-- Módulo 3: Análisis Dimensional y Conversiones -->
<section id="modulo3" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">3</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🔬 Análisis Dimensional y Conversiones</h3>
            <p class="text-yellow-300 mt-1">Verificación de ecuaciones y conversión de unidades</p>
        </div>
    </div>
    
    <!-- Introducción del módulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            El análisis dimensional es una herramienta fundamental que nos permite verificar la validez de ecuaciones físicas, 
            deducir relaciones entre variables y realizar conversiones de unidades de manera sistemática.
        </p>
        
        <!-- Objetivos de aprendizaje -->
        <div class="bg-yellow-900/20 p-4 rounded-lg border-l-4 border-yellow-500 mb-6">
            <h4 class="text-yellow-300 font-semibold mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Objetivos de Aprendizaje
            </h4>
            <ul class="list-disc pl-6 text-gray-300 space-y-2">
                <li>Aplicar el principio de homogeneidad dimensional</li>
                <li>Escribir ecuaciones dimensionales correctamente</li>
                <li>Verificar la validez de fórmulas físicas</li>
                <li>Realizar conversiones usando el método del factor unitario</li>
            </ul>
        </div>
    </div>
    
    <!-- Principio de Homogeneidad Dimensional -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-yellow-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
            Principio de Homogeneidad Dimensional
        </h4>
        
        <div class="bg-gradient-to-r from-yellow-900/30 to-orange-900/30 p-6 rounded-lg border border-yellow-500/30 mb-6">
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
                    <svg class="w-6 h-6 mr-3 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    Notación Dimensional
                </h5>
                <div class="space-y-3">
                    <div class="physics-unit bg-blue-700">[L] = Longitud</div>
                    <div class="physics-unit bg-green-700">[M] = Masa</div>
                    <div class="physics-unit bg-red-700">[T] = Tiempo</div>
                    <div class="physics-unit bg-purple-700">[I] = Corriente</div>
                    <div class="physics-unit bg-orange-700">[Θ] = Temperatura</div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    Ejemplos de Dimensiones
                </h5>
                <div class="space-y-2 text-sm">
                    <p class="text-gray-300"><strong class="text-blue-400">Velocidad:</strong> [v] = [L][T]⁻¹</p>
                    <p class="text-gray-300"><strong class="text-green-400">Aceleración:</strong> [a] = [L][T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-red-400">Fuerza:</strong> [F] = [M][L][T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-purple-400">Energía:</strong> [E] = [M][L]²[T]⁻²</p>
                    <p class="text-gray-300"><strong class="text-yellow-400">Presión:</strong> [P] = [M][L]⁻¹[T]⁻²</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Verificación de Fórmulas -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-orange-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    
    <!-- Conversiones de Unidades -->
    <div class="bg-gradient-to-r from-orange-900/30 to-red-900/30 p-6 rounded-xl border border-orange-500/30 mb-6">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
            </svg>
            Método del Factor Unitario
        </h4>
        
        <!-- Principio del método -->
        <div class="bg-black bg-opacity-30 p-4 rounded-lg mb-6">
            <p class="text-white text-center mb-3">
                <strong>Principio:</strong> Multiplicar por fracciones equivalentes a la unidad (1)
            </p>
            <div class="physics-formula">
                <p class="text-white font-mono text-center">
                    Cantidad inicial × (Factor de conversión) = Cantidad final
                </p>
            </div>
        </div>
        
        <!-- Ejemplos de conversión -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-gray-800/50 p-5 rounded-lg border border-gray-600">
                <h5 class="text-lg font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">📏</span>
                    Conversión de Longitud
                </h5>
                <div class="space-y-3">
                    <div class="text-center">
                        <p class="text-yellow-300 font-bold">Convertir: 2.5 km a metros</p>
                        <div class="my-3 p-3 bg-gray-700/50 rounded">
                            <p class="text-white font-mono">2.5 km × (1000 m/1 km) = 2500 m</p>
                        </div>
                        <p class="text-green-300">Factor: 1000 m = 1 km</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg border border-gray-600">
                <h5 class="text-lg font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">⏰</span>
                    Conversión de Tiempo
                </h5>
                <div class="space-y-3">
                    <div class="text-center">
                        <p class="text-yellow-300 font-bold">Convertir: 3.5 horas a segundos</p>
                        <div class="my-3 p-3 bg-gray-700/50 rounded">
                            <p class="text-white font-mono text-sm">3.5 h × (3600 s/1 h) = 12,600 s</p>
                        </div>
                        <p class="text-green-300">Factor: 1 h = 3600 s</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversión compleja -->
        <div class="mt-6 bg-gray-800/30 p-5 rounded-lg border border-yellow-500/30">
            <h5 class="text-lg font-bold text-white mb-4 text-center">🔄 Conversión Compleja: Velocidad</h5>
            <div class="text-center">
                <p class="text-yellow-300 font-bold mb-3">Convertir: 72 km/h a m/s</p>
                <div class="bg-gray-700/50 p-4 rounded-lg">
                    <p class="text-white font-mono text-lg mb-2">
                        72 km/h × (1000 m/1 km) × (1 h/3600 s)
                    </p>
                    <p class="text-white font-mono text-lg mb-2">
                        = 72 × (1000/3600) m/s
                    </p>
                    <p class="text-white font-mono text-xl font-bold">
                        = 20 m/s
                    </p>
                </div>
                <div class="mt-3 flex justify-center space-x-4 text-sm">
                    <span class="physics-unit bg-blue-700">Factor 1: 1000 m = 1 km</span>
                    <span class="physics-unit bg-green-700">Factor 2: 1 h = 3600 s</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejercicios prácticos -->
    <div class="bg-gradient-to-r from-purple-900/30 to-blue-900/30 p-6 rounded-xl border border-purple-500/30">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            💡 Ejercicios de Práctica
        </h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div class="bg-gray-800/30 p-4 rounded-lg">
                <h6 class="text-purple-300 font-bold mb-2">Verificación Dimensional:</h6>
                <p class="text-gray-300 mb-2">Verificar si es correcta: E = ½mv²</p>
                <p class="text-gray-400 text-xs">¿Las dimensiones de energía coinciden?</p>
            </div>
            <div class="bg-gray-800/30 p-4 rounded-lg">
                <h6 class="text-blue-300 font-bold mb-2">Conversión:</h6>
                <p class="text-gray-300 mb-2">100 cm³ a m³</p>
                <p class="text-gray-400 text-xs">Usa factores de conversión paso a paso</p>
            </div>
        </div>
    </div>
</section>
