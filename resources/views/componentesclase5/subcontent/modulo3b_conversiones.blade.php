<!-- Submódulo 3B: Conversiones de Unidades -->
<section id="modulo3b" class="mb-12 module-card">
    <div class="section-header flex items-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-orange-600 to-red-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold text-lg">3B</span>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-white">🔄 Conversiones de Unidades</h3>
            <p class="text-orange-300 mt-1">Método del factor unitario y conversiones sistemáticas</p>
        </div>
    </div>
    
    <!-- Introducción del submódulo -->
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-6">
        <p class="text-gray-300 mb-4 text-lg leading-relaxed">
            Las conversiones de unidades son esenciales en la física e ingeniería. El método del factor unitario 
            nos proporciona una técnica sistemática y confiable para convertir entre diferentes sistemas de unidades 
            manteniendo la exactitud y evitando errores.
        </p>
        
        <!-- Objetivos de aprendizaje -->
        <div class="bg-orange-900/20 p-4 rounded-lg border-l-4 border-orange-500 mb-6">
            <h4 class="text-orange-300 font-semibold mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Objetivos de Aprendizaje
            </h4>
            <ul class="list-disc pl-6 text-gray-300 space-y-2">
                <li>Dominar el método del factor unitario</li>
                <li>Realizar conversiones simples y complejas</li>
                <li>Convertir entre sistemas de unidades (SI, Imperial, CGS)</li>
                <li>Aplicar conversiones en problemas reales de ingeniería</li>
            </ul>
        </div>
    </div>
    
    <!-- Método del Factor Unitario -->
    <div class="bg-gradient-to-r from-orange-900/30 to-red-900/30 p-6 rounded-xl border border-orange-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
            </svg>
            Método del Factor Unitario
        </h4>
        
        <!-- Principio del método -->
        <div class="bg-black bg-opacity-30 p-6 rounded-lg mb-6">
            <p class="text-white text-center mb-4 text-lg">
                <strong>Principio:</strong> Multiplicar por fracciones equivalentes a la unidad (1)
            </p>
            <div class="physics-formula">
                <p class="text-white font-mono text-center text-xl">
                    Cantidad inicial × (Factor de conversión) = Cantidad final
                </p>
            </div>
            
            <div class="mt-6 bg-orange-900/20 p-4 rounded-lg border border-orange-500/30">
                <h5 class="text-orange-300 font-bold mb-3 text-center">Regla Fundamental</h5>
                <div class="text-center">
                    <p class="text-white mb-2">El factor de conversión siempre es igual a 1:</p>
                    <div class="physics-formula">
                        <p class="text-white font-mono">Factor = (Unidad deseada)/(Unidad inicial) = 1</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Factores de conversión comunes -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">📏</span>
                    Longitud
                </h5>
                <div class="space-y-2 text-sm">
                    <div class="physics-unit bg-blue-700">1 m = 100 cm</div>
                    <div class="physics-unit bg-blue-700">1 km = 1000 m</div>
                    <div class="physics-unit bg-blue-700">1 in = 2.54 cm</div>
                    <div class="physics-unit bg-blue-700">1 ft = 12 in</div>
                    <div class="physics-unit bg-blue-700">1 mi = 1609 m</div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">⏰</span>
                    Tiempo
                </h5>
                <div class="space-y-2 text-sm">
                    <div class="physics-unit bg-green-700">1 min = 60 s</div>
                    <div class="physics-unit bg-green-700">1 h = 3600 s</div>
                    <div class="physics-unit bg-green-700">1 día = 24 h</div>
                    <div class="physics-unit bg-green-700">1 año = 365.25 días</div>
                    <div class="physics-unit bg-green-700">1 ms = 10⁻³ s</div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg p-6 border border-gray-700">
                <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">⚖️</span>
                    Masa
                </h5>
                <div class="space-y-2 text-sm">
                    <div class="physics-unit bg-red-700">1 kg = 1000 g</div>
                    <div class="physics-unit bg-red-700">1 lb = 453.6 g</div>
                    <div class="physics-unit bg-red-700">1 oz = 28.35 g</div>
                    <div class="physics-unit bg-red-700">1 ton = 1000 kg</div>
                    <div class="physics-unit bg-red-700">1 slug = 14.59 kg</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Conversiones Simples -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-blue-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            Conversiones Simples
        </h4>
        
        <!-- Ejemplos de conversión simple -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-gray-800/50 p-5 rounded-lg border border-gray-600">
                <h5 class="text-lg font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">📏</span>
                    Ejemplo 1: Longitud
                </h5>
                <div class="space-y-3">
                    <div class="text-center">
                        <p class="text-yellow-300 font-bold">Convertir: 2.5 km a metros</p>
                        <div class="my-3 p-3 bg-gray-700/50 rounded">
                            <p class="text-white font-mono">2.5 km × (1000 m/1 km) = 2500 m</p>
                        </div>
                        <div class="flex justify-center space-x-4 text-sm">
                            <span class="physics-unit bg-blue-700">Factor: 1000 m = 1 km</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg border border-gray-600">
                <h5 class="text-lg font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">⏰</span>
                    Ejemplo 2: Tiempo
                </h5>
                <div class="space-y-3">
                    <div class="text-center">
                        <p class="text-yellow-300 font-bold">Convertir: 3.5 horas a segundos</p>
                        <div class="my-3 p-3 bg-gray-700/50 rounded">
                            <p class="text-white font-mono">3.5 h × (3600 s/1 h) = 12,600 s</p>
                        </div>
                        <div class="flex justify-center space-x-4 text-sm">
                            <span class="physics-unit bg-green-700">Factor: 1 h = 3600 s</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg border border-gray-600">
                <h5 class="text-lg font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">⚖️</span>
                    Ejemplo 3: Masa
                </h5>
                <div class="space-y-3">
                    <div class="text-center">
                        <p class="text-yellow-300 font-bold">Convertir: 150 libras a kilogramos</p>
                        <div class="my-3 p-3 bg-gray-700/50 rounded">
                            <p class="text-white font-mono">150 lb × (453.6 g/1 lb) × (1 kg/1000 g)</p>
                            <p class="text-white font-mono">= 150 × 0.4536 kg = 68.04 kg</p>
                        </div>
                        <div class="flex justify-center space-x-2 text-xs">
                            <span class="physics-unit bg-red-700">1 lb = 453.6 g</span>
                            <span class="physics-unit bg-red-700">1000 g = 1 kg</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-lg border border-gray-600">
                <h5 class="text-lg font-bold text-white mb-4 flex items-center">
                    <span class="text-2xl mr-3">🌡️</span>
                    Ejemplo 4: Temperatura
                </h5>
                <div class="space-y-3">
                    <div class="text-center">
                        <p class="text-yellow-300 font-bold">Convertir: 77°F a Celsius</p>
                        <div class="my-3 p-3 bg-gray-700/50 rounded">
                            <p class="text-white font-mono">°C = (°F - 32) × 5/9</p>
                            <p class="text-white font-mono">°C = (77 - 32) × 5/9 = 25°C</p>
                        </div>
                        <div class="text-xs text-gray-400">
                            <p>Fórmula especial para temperatura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Conversiones Complejas -->
    <div class="bg-black bg-opacity-40 p-6 rounded-xl border border-purple-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
            Conversiones Complejas (Múltiples Factores)
        </h4>
        
        <!-- Ejemplo de velocidad -->
        <div class="bg-gray-800/30 p-6 rounded-lg border border-purple-500/30 mb-6">
            <h5 class="text-xl font-bold text-white mb-4 text-center">🚗 Ejemplo: Conversión de Velocidad</h5>
            <div class="text-center mb-4">
                <p class="text-yellow-300 font-bold mb-3 text-lg">Convertir: 72 km/h a m/s</p>
            </div>
            
            <div class="bg-gray-700/50 p-4 rounded-lg mb-4">
                <h6 class="text-blue-300 font-bold mb-3">Método paso a paso:</h6>
                <div class="space-y-2 font-mono text-sm">
                    <p class="text-white">72 km/h × (1000 m/1 km) × (1 h/3600 s)</p>
                    <p class="text-white">= 72 × (1000/3600) m/s</p>
                    <p class="text-white">= 72 × (10/36) m/s</p>
                    <p class="text-white font-bold text-lg">= 20 m/s</p>
                </div>
            </div>
            
            <div class="flex justify-center space-x-4 text-sm">
                <span class="physics-unit bg-blue-700">Factor 1: 1000 m = 1 km</span>
                <span class="physics-unit bg-green-700">Factor 2: 1 h = 3600 s</span>
            </div>
            
            <div class="mt-4 bg-purple-900/20 p-3 rounded text-center">
                <p class="text-purple-200 text-sm">
                    <strong>Regla práctica:</strong> Para convertir km/h a m/s, dividir por 3.6
                </p>
            </div>
        </div>
        
        <!-- Ejemplo de volumen -->
        <div class="bg-gray-800/30 p-6 rounded-lg border border-orange-500/30 mb-6">
            <h5 class="text-xl font-bold text-white mb-4 text-center">📦 Ejemplo: Conversión de Volumen</h5>
            <div class="text-center mb-4">
                <p class="text-yellow-300 font-bold mb-3 text-lg">Convertir: 500 cm³/min a m³/s</p>
            </div>
            
            <div class="bg-gray-700/50 p-4 rounded-lg mb-4">
                <h6 class="text-orange-300 font-bold mb-3">Análisis detallado:</h6>
                <div class="space-y-3">
                    <div class="bg-gray-600/50 p-3 rounded">
                        <p class="text-blue-300 font-bold mb-1">Paso 1: Convertir cm³ a m³</p>
                        <p class="text-white font-mono text-sm">1 cm = 0.01 m</p>
                        <p class="text-white font-mono text-sm">1 cm³ = (0.01 m)³ = 10⁻⁶ m³</p>
                    </div>
                    
                    <div class="bg-gray-600/50 p-3 rounded">
                        <p class="text-green-300 font-bold mb-1">Paso 2: Convertir min a s</p>
                        <p class="text-white font-mono text-sm">1 min = 60 s</p>
                    </div>
                    
                    <div class="bg-gray-600/50 p-3 rounded">
                        <p class="text-purple-300 font-bold mb-1">Paso 3: Aplicar factores</p>
                        <div class="font-mono text-sm space-y-1">
                            <p class="text-white">500 cm³/min × (10⁻⁶ m³/1 cm³) × (1 min/60 s)</p>
                            <p class="text-white">= 500 × 10⁻⁶ / 60 m³/s</p>
                            <p class="text-white font-bold">= 8.33 × 10⁻⁶ m³/s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Ejemplo de densidad -->
        <div class="bg-gray-800/30 p-6 rounded-lg border border-cyan-500/30">
            <h5 class="text-xl font-bold text-white mb-4 text-center">🧪 Ejemplo: Conversión de Densidad</h5>
            <div class="text-center mb-4">
                <p class="text-yellow-300 font-bold mb-3 text-lg">Convertir: 2.7 g/cm³ a kg/m³</p>
            </div>
            
            <div class="bg-gray-700/50 p-4 rounded-lg">
                <div class="font-mono text-sm space-y-2 text-center">
                    <p class="text-white">2.7 g/cm³ × (1 kg/1000 g) × (10⁶ cm³/1 m³)</p>
                    <p class="text-white">= 2.7 × (10⁶/1000) kg/m³</p>
                    <p class="text-white">= 2.7 × 10³ kg/m³</p>
                    <p class="text-white font-bold text-lg">= 2700 kg/m³</p>
                </div>
            </div>
            
            <div class="mt-4 flex justify-center space-x-2 text-xs">
                <span class="physics-unit bg-red-700">1000 g = 1 kg</span>
                <span class="physics-unit bg-blue-700">10⁶ cm³ = 1 m³</span>
            </div>
        </div>
    </div>
    
    <!-- Tabla Completa de Factores de Conversión -->
    <div class="bg-gradient-to-r from-indigo-900/30 to-blue-900/30 p-6 rounded-xl border border-indigo-500/30 mb-8">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h2a2 2 0 002-2z"></path>
            </svg>
            📊 Tabla de Factores de Conversión
        </h4>
        
        <div class="bg-indigo-900/20 p-4 rounded-lg border-l-4 border-indigo-500 mb-6">
            <p class="text-indigo-200 font-bold mb-2">💡 Uso de la tabla:</p>
            <p class="text-gray-300 text-sm">
                Esta tabla contiene todos los factores de conversión necesarios para resolver los ejercicios. 
                Utiliza estos valores exactos para obtener resultados precisos.
            </p>
        </div>
        
        <!-- Conversiones de Longitud -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">📏</span>
                Longitud
            </h5>
            <div class="bg-gray-800/30 rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-0">
                    <div class="bg-blue-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-blue-300 font-bold text-sm">Sistema Métrico</p>
                    </div>
                    <div class="bg-blue-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-blue-300 font-bold text-sm">Sistema Imperial</p>
                    </div>
                    <div class="bg-blue-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-blue-300 font-bold text-sm">Conversiones Especiales</p>
                    </div>
                    <div class="bg-blue-700/30 p-3 border-b border-gray-600">
                        <p class="text-blue-300 font-bold text-sm">Equivalencias</p>
                    </div>
                    
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 km = 1000 m</p>
                        <p class="text-white text-sm">1 m = 100 cm</p>
                        <p class="text-white text-sm">1 cm = 10 mm</p>
                        <p class="text-white text-sm">1 m = 10⁶ μm</p>
                    </div>
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 mi = 1609 m</p>
                        <p class="text-white text-sm">1 ft = 0.3048 m</p>
                        <p class="text-white text-sm">1 in = 2.54 cm</p>
                        <p class="text-white text-sm">1 yd = 3 ft</p>
                    </div>
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 Å = 10⁻¹⁰ m</p>
                        <p class="text-white text-sm">1 ly = 9.46×10¹⁵ m</p>
                        <p class="text-white text-sm">1 pc = 3.26 ly</p>
                    </div>
                    <div class="p-3 border-b border-gray-600">
                        <p class="text-white text-sm">1 m = 3.281 ft</p>
                        <p class="text-white text-sm">1 km = 0.621 mi</p>
                        <p class="text-white text-sm">1 in = 25.4 mm</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversiones de Tiempo -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">⏰</span>
                Tiempo
            </h5>
            <div class="bg-gray-800/30 rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-0">
                    <div class="bg-green-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-green-300 font-bold text-sm">Básicas</p>
                    </div>
                    <div class="bg-green-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-green-300 font-bold text-sm">Largas</p>
                    </div>
                    <div class="bg-green-700/30 p-3 border-b border-gray-600">
                        <p class="text-green-300 font-bold text-sm">Cortas</p>
                    </div>
                    
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 min = 60 s</p>
                        <p class="text-white text-sm">1 h = 60 min</p>
                        <p class="text-white text-sm">1 h = 3600 s</p>
                    </div>
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 día = 24 h</p>
                        <p class="text-white text-sm">1 sem = 7 días</p>
                        <p class="text-white text-sm">1 año = 365.25 días</p>
                        <p class="text-white text-sm">1 año = 8760 h</p>
                    </div>
                    <div class="p-3 border-b border-gray-600">
                        <p class="text-white text-sm">1 ms = 10⁻³ s</p>
                        <p class="text-white text-sm">1 μs = 10⁻⁶ s</p>
                        <p class="text-white text-sm">1 ns = 10⁻⁹ s</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversiones de Masa -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">⚖️</span>
                Masa
            </h5>
            <div class="bg-gray-800/30 rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-0">
                    <div class="bg-red-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-red-300 font-bold text-sm">Sistema Métrico</p>
                    </div>
                    <div class="bg-red-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-red-300 font-bold text-sm">Sistema Imperial</p>
                    </div>
                    <div class="bg-red-700/30 p-3 border-b border-gray-600">
                        <p class="text-red-300 font-bold text-sm">Especiales</p>
                    </div>
                    
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 kg = 1000 g</p>
                        <p class="text-white text-sm">1 g = 1000 mg</p>
                        <p class="text-white text-sm">1 ton = 1000 kg</p>
                    </div>
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 lb = 453.6 g</p>
                        <p class="text-white text-sm">1 oz = 28.35 g</p>
                        <p class="text-white text-sm">1 ton(US) = 907.2 kg</p>
                        <p class="text-white text-sm">1 slug = 14.59 kg</p>
                    </div>
                    <div class="p-3 border-b border-gray-600">
                        <p class="text-white text-sm">1 kg = 2.205 lb</p>
                        <p class="text-white text-sm">1 u = 1.66×10⁻²⁷ kg</p>
                        <p class="text-white text-sm">1 ct = 0.2 g</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversiones de Volumen -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">📦</span>
                Volumen
            </h5>
            <div class="bg-gray-800/30 rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-0">
                    <div class="bg-purple-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-purple-300 font-bold text-sm">Sistema Métrico</p>
                    </div>
                    <div class="bg-purple-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-purple-300 font-bold text-sm">Sistema Imperial</p>
                    </div>
                    <div class="bg-purple-700/30 p-3 border-b border-gray-600">
                        <p class="text-purple-300 font-bold text-sm">Equivalencias</p>
                    </div>
                    
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 m³ = 1000 L</p>
                        <p class="text-white text-sm">1 L = 1000 mL</p>
                        <p class="text-white text-sm">1 L = 1000 cm³</p>
                        <p class="text-white text-sm">1 m³ = 10⁶ cm³</p>
                    </div>
                    <div class="p-3 border-r border-b border-gray-600">
                        <p class="text-white text-sm">1 gal(US) = 3.785 L</p>
                        <p class="text-white text-sm">1 qt = 0.946 L</p>
                        <p class="text-white text-sm">1 pt = 0.473 L</p>
                        <p class="text-white text-sm">1 fl oz = 29.57 mL</p>
                    </div>
                    <div class="p-3 border-b border-gray-600">
                        <p class="text-white text-sm">1 L = 0.264 gal</p>
                        <p class="text-white text-sm">1 m³ = 264.2 gal</p>
                        <p class="text-white text-sm">1 L = 1.057 qt</p>
                        <p class="text-white text-sm">1 bbl = 159 L</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversiones de Presión -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">🌡️</span>
                Presión
            </h5>
            <div class="bg-gray-800/30 rounded-lg overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-orange-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-orange-300 font-bold text-sm">Unidades Comunes</p>
                    </div>
                    <div class="bg-orange-700/30 p-3 border-b border-gray-600">
                        <p class="text-orange-300 font-bold text-sm">Equivalencias</p>
                    </div>
                    
                    <div class="p-3 border-r border-gray-600">
                        <p class="text-white text-sm">1 atm = 101,325 Pa</p>
                        <p class="text-white text-sm">1 bar = 100,000 Pa</p>
                        <p class="text-white text-sm">1 psi = 6895 Pa</p>
                        <p class="text-white text-sm">1 mmHg = 133.3 Pa</p>
                        <p class="text-white text-sm">1 torr = 1 mmHg</p>
                    </div>
                    <div class="p-3">
                        <p class="text-white text-sm">1 atm = 14.7 psi</p>
                        <p class="text-white text-sm">1 atm = 760 mmHg</p>
                        <p class="text-white text-sm">1 bar = 14.5 psi</p>
                        <p class="text-white text-sm">1 Pa = 1 N/m²</p>
                        <p class="text-white text-sm">1 kPa = 1000 Pa</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversiones de Energía y Potencia -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">⚡</span>
                Energía y Potencia
            </h5>
            <div class="bg-gray-800/30 rounded-lg overflow-hidden">
                <div class="grid grid-cols-2 gap-0">
                    <div class="bg-yellow-700/30 p-3 border-r border-b border-gray-600">
                        <p class="text-yellow-300 font-bold text-sm">Energía</p>
                    </div>
                    <div class="bg-yellow-700/30 p-3 border-b border-gray-600">
                        <p class="text-yellow-300 font-bold text-sm">Potencia</p>
                    </div>
                    
                    <div class="p-3 border-r border-gray-600">
                        <p class="text-white text-sm">1 kJ = 1000 J</p>
                        <p class="text-white text-sm">1 MJ = 10⁶ J</p>
                        <p class="text-white text-sm">1 cal = 4.184 J</p>
                        <p class="text-white text-sm">1 kcal = 4184 J</p>
                        <p class="text-white text-sm">1 BTU = 1055 J</p>
                        <p class="text-white text-sm">1 kWh = 3.6 MJ</p>
                        <p class="text-white text-sm">1 eV = 1.6×10⁻¹⁹ J</p>
                    </div>
                    <div class="p-3">
                        <p class="text-white text-sm">1 kW = 1000 W</p>
                        <p class="text-white text-sm">1 MW = 10⁶ W</p>
                        <p class="text-white text-sm">1 hp = 746 W</p>
                        <p class="text-white text-sm">1 BTU/h = 0.293 W</p>
                        <p class="text-white text-sm">1 cal/s = 4.184 W</p>
                        <p class="text-white text-sm">1 W = 1 J/s</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversiones de Temperatura -->
        <div class="mb-6">
            <h5 class="text-xl font-bold text-white mb-4 flex items-center">
                <span class="text-2xl mr-3">🌡️</span>
                Temperatura
            </h5>
            <div class="bg-gray-800/30 rounded-lg p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-cyan-900/30 p-4 rounded border border-cyan-600/30">
                        <h6 class="text-cyan-300 font-bold mb-2">Fórmulas de Conversión</h6>
                        <div class="space-y-2 text-sm font-mono">
                            <p class="text-white">°C = (°F - 32) × 5/9</p>
                            <p class="text-white">°F = °C × 9/5 + 32</p>
                            <p class="text-white">K = °C + 273.15</p>
                            <p class="text-white">°R = °F + 459.67</p>
                        </div>
                    </div>
                    <div class="bg-cyan-900/30 p-4 rounded border border-cyan-600/30">
                        <h6 class="text-cyan-300 font-bold mb-2">Puntos de Referencia</h6>
                        <div class="space-y-2 text-sm">
                            <p class="text-white">Agua congela: 0°C = 32°F = 273K</p>
                            <p class="text-white">Agua hierve: 100°C = 212°F = 373K</p>
                            <p class="text-white">Cero absoluto: -273.15°C = 0K</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Notas importantes -->
        <div class="bg-yellow-900/20 p-4 rounded-lg border border-yellow-500/30">
            <h6 class="text-yellow-300 font-bold mb-3 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.99-.833-2.76 0L3.054 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                </svg>
                📝 Notas Importantes
            </h6>
            <ul class="text-gray-300 text-sm space-y-1 list-disc pl-6">
                <li>Los valores mostrados son exactos o con suficiente precisión para los ejercicios</li>
                <li>Para conversiones de temperatura, usa las fórmulas específicas (no son factores multiplicativos)</li>
                <li>1 atm = presión atmosférica estándar al nivel del mar</li>
                <li>1 hp (caballo de fuerza) = 746 W exactamente</li>
                <li>1 cal = caloría termoquímica (4.184 J exactamente)</li>
            </ul>
        </div>
    </div>
    
    <!-- Ejercicios Prácticos -->
    <div class="bg-gradient-to-r from-red-900/30 to-pink-900/30 p-6 rounded-xl border border-red-500/30">
        <h4 class="text-2xl font-bold text-white mb-6 text-center flex items-center justify-center">
            <svg class="w-7 h-7 mr-3 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            📋 Ejercicios de Conversiones
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ejercicio 1 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-red-500/30">
                <h5 class="text-lg font-bold text-red-300 mb-3 flex items-center">
                    <span class="bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">1</span>
                    Conversiones Múltiples
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Realiza las siguientes conversiones:</strong>
                    </p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-1 text-sm">
                        <li>90 km/h a m/s</li>
                        <li>1500 L/h a m³/s</li>
                        <li>250 g/cm³ a kg/m³</li>
                        <li>3.6 MJ a kWh</li>
                        <li>15 atm a Pa</li>
                    </ul>
                </div>
                <div class="bg-red-900/20 p-3 rounded text-xs">
                    <p class="text-red-200">
                        <strong>🔄 Estrategia:</strong> Identifica todos los factores de conversión necesarios.
                    </p>
                </div>
            </div>
            
            <!-- Ejercicio 2 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-orange-500/30">
                <h5 class="text-lg font-bold text-orange-300 mb-3 flex items-center">
                    <span class="bg-orange-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">2</span>
                    Problema Aplicado
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Situación real:</strong> Diseño de un tanque de combustible
                    </p>
                    <div class="bg-orange-900/20 p-3 rounded mb-3 text-sm">
                        <p class="text-orange-200">Especificaciones en unidades mixtas:</p>
                        <p class="text-gray-300">• Capacidad: 50 galones</p>
                        <p class="text-gray-300">• Flujo: 2 L/min</p>
                        <p class="text-gray-300">• Presión: 15 psi</p>
                        <p class="text-gray-300">• Temperatura: 75°F</p>
                    </div>
                    <p class="text-gray-300 text-sm">
                        Convierte todo al SI y calcula el tiempo de llenado.
                    </p>
                </div>
                <div class="bg-orange-900/20 p-3 rounded text-xs">
                    <p class="text-orange-200">
                        <strong>🏗️ Aplicación:</strong> Problema típico de ingeniería.
                    </p>
                </div>
            </div>
            
            <!-- Ejercicio 3 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-blue-500/30">
                <h5 class="text-lg font-bold text-blue-300 mb-3 flex items-center">
                    <span class="bg-blue-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">3</span>
                    Conversiones de Potencia
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Conversiones de energía y potencia:</strong>
                    </p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-1 text-sm">
                        <li>750 W a hp (caballos de fuerza)</li>
                        <li>100 BTU/h a watts</li>
                        <li>2.5 kWh a joules</li>
                        <li>1000 cal a kJ</li>
                    </ul>
                </div>
                <div class="bg-blue-900/20 p-3 rounded text-xs">
                    <p class="text-blue-200">
                        <strong>⚡ Datos:</strong> 1 hp = 746 W, 1 BTU = 1055 J, 1 cal = 4.18 J
                    </p>
                </div>
            </div>
            
            <!-- Ejercicio 4 -->
            <div class="bg-gray-800/50 p-5 rounded-lg border border-purple-500/30">
                <h5 class="text-lg font-bold text-purple-300 mb-3 flex items-center">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3">4</span>
                    Proyecto de Conversión
                </h5>
                <div class="mb-4">
                    <p class="text-gray-300 mb-3">
                        <strong>Diseña un convertidor universal:</strong>
                    </p>
                    <div class="bg-purple-900/20 p-3 rounded mb-3 text-sm">
                        <p class="text-purple-200">Crea una tabla de conversión que incluya:</p>
                        <p class="text-gray-300">• Al menos 5 magnitudes físicas</p>
                        <p class="text-gray-300">• 3 unidades por magnitud</p>
                        <p class="text-gray-300">• Factores de conversión exactos</p>
                        <p class="text-gray-300">• Ejemplos de uso práctico</p>
                    </div>
                </div>
                <div class="bg-purple-900/20 p-3 rounded text-xs">
                    <p class="text-purple-200">
                        <strong>🎯 Extra:</strong> Incluye conversiones poco comunes pero útiles.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Herramientas de Conversión -->
        <div class="mt-6 bg-gray-800/30 p-5 rounded-lg border border-yellow-500/30">
            <h5 class="text-lg font-bold text-white mb-4 text-center flex items-center justify-center">
                <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
                🖥️ Herramientas de Conversión
            </h5>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-yellow-900/20 p-4 rounded">
                    <h6 class="text-yellow-300 font-bold mb-2">Conversor Universal</h6>
                    <p class="text-gray-300 text-sm mb-2">
                        Convierte entre cualquier unidad
                    </p>
                    <ul class="text-xs text-gray-400 space-y-1">
                        <li>• Base de datos completa</li>
                        <li>• Conversiones paso a paso</li>
                        <li>• Incluye unidades raras</li>
                        <li>• Precisión alta</li>
                    </ul>
                </div>
                <div class="bg-blue-900/20 p-4 rounded">
                    <h6 class="text-blue-300 font-bold mb-2">Calculadora de Factores</h6>
                    <p class="text-gray-300 text-sm mb-2">
                        Genera factores automáticamente
                    </p>
                    <ul class="text-xs text-gray-400 space-y-1">
                        <li>• Encuentra rutas de conversión</li>
                        <li>• Optimiza el número de pasos</li>
                        <li>• Valida resultados</li>
                        <li>• Exporta tablas</li>
                    </ul>
                </div>
                <div class="bg-green-900/20 p-4 rounded">
                    <h6 class="text-green-300 font-bold mb-2">Verificador de Unidades</h6>
                    <p class="text-gray-300 text-sm mb-2">
                        Valida conversiones complejas
                    </p>
                    <ul class="text-xs text-gray-400 space-y-1">
                        <li>• Detecta errores comunes</li>
                        <li>• Sugiere correcciones</li>
                        <li>• Análisis dimensional</li>
                        <li>• Reportes detallados</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
