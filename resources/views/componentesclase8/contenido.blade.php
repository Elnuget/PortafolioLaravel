<!-- Contenido Principal: Caída Libre -->
<div class="bg-gradient-to-br from-white via-blue-50 to-gray-50 backdrop-blur-lg bg-opacity-95 rounded-2xl shadow-lg p-8 font-sans relative transition-all duration-500 hover:shadow-xl">
    
    <div class="relative z-10">
        <!-- Header del contenido -->
        <div class="mb-8">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 flex items-center">
                <span class="bg-gradient-to-br from-blue-600 to-blue-700 w-12 h-12 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </span>
                Caída Libre
            </h2>
            <div class="w-full h-px bg-gradient-to-r from-transparent via-blue-400 to-transparent mb-6"></div>
        </div>

        <!-- 1. Definición -->
        <div class="concept-box mb-6">
            <h3 class="text-2xl font-bold text-green-700 mb-3 flex items-center">
                📝 Definición
            </h3>
            <p class="text-lg text-green-800 leading-relaxed">
                La <strong>caída libre</strong> es el movimiento de un objeto bajo la acción exclusiva de la gravedad, 
                sin considerar la resistencia del aire.
            </p>
        </div>

        <!-- 2. Características -->
        <div class="concept-box mb-6">
            <h3 class="text-2xl font-bold text-green-700 mb-3 flex items-center">
                ⚡ Características
            </h3>
            <ul class="list-disc list-inside text-lg text-green-800 space-y-2">
                <li>Aceleración constante: <strong>g = 9.8 m/s²</strong></li>
                <li>Dirección: hacia abajo (hacia el centro de la Tierra)</li>
                <li>Independiente de la masa del objeto</li>
                <li>Velocidad inicial puede ser cero o diferente de cero</li>
            </ul>
        </div>

        <!-- 3. Ecuaciones Fundamentales -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-blue-700 mb-4 flex items-center">
                🧮 Ecuaciones de Caída Libre
            </h3>
            
            <div class="grid md:grid-cols-2 gap-4">
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Velocidad Final</div>
                    <div>v = v₀ + gt</div>
                </div>
                
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Posición</div>
                    <div>y = y₀ + v₀t + ½gt²</div>
                </div>
                
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Velocidad vs Posición</div>
                    <div>v² = v₀² + 2g(y - y₀)</div>
                </div>
                
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Tiempo de Vuelo</div>
                    <div>t = (v - v₀)/g</div>
                </div>
            </div>
        </div>

        <!-- 4. Variables -->
        <div class="concept-box mb-6">
            <h3 class="text-2xl font-bold text-green-700 mb-3">📊 Variables</h3>
            <div class="grid md:grid-cols-2 gap-4 text-green-800">
                <div>
                    <strong>v₀</strong> = Velocidad inicial (m/s)<br>
                    <strong>v</strong> = Velocidad final (m/s)<br>
                    <strong>g</strong> = Aceleración gravitacional (9.8 m/s²)
                </div>
                <div>
                    <strong>t</strong> = Tiempo (s)<br>
                    <strong>y₀</strong> = Posición inicial (m)<br>
                    <strong>y</strong> = Posición final (m)
                </div>
            </div>
        </div>

        <!-- 5. Ejemplo Práctico -->
        <div class="example-box mb-6">
            <h3 class="text-2xl font-bold text-amber-700 mb-3 flex items-center">
                💡 Ejemplo Práctico
            </h3>
            <p class="text-lg text-amber-800 mb-3">
                <strong>Problema:</strong> Una pelota se deja caer desde una altura de 20 m. 
                ¿Cuánto tiempo tarda en llegar al suelo?
            </p>
            <div class="bg-white p-4 rounded-lg border border-amber-300">
                <p class="text-amber-800 mb-2"><strong>Datos:</strong></p>
                <ul class="list-disc list-inside text-amber-800 mb-3">
                    <li>y₀ = 20 m</li>
                    <li>y = 0 m</li>
                    <li>v₀ = 0 m/s (se deja caer)</li>
                    <li>g = 9.8 m/s²</li>
                </ul>
                <p class="text-amber-800 mb-2"><strong>Solución:</strong></p>
                <div class="physics-formula text-amber-800">
                    0 = 20 + 0·t - ½(9.8)t²
                    <br>
                    t = √(40/9.8) ≈ 2.02 s
                </div>
            </div>
        </div>

        <!-- 6. Conceptos Clave -->
        <div class="important-note">
            <h3 class="text-xl font-bold text-red-700 mb-2 flex items-center">
                ⚠️ Conceptos Clave
            </h3>
            <ul class="list-disc list-inside text-red-700 space-y-1">
                <li>Todos los objetos caen con la misma aceleración</li>
                <li>La resistencia del aire se desprecia</li>
                <li>El signo de g depende del sistema de coordenadas</li>
                <li>La velocidad aumenta linealmente con el tiempo</li>
            </ul>
        </div>

    </div>
</div>
