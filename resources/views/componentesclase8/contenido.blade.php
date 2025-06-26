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
                sin considerar la resistencia del aire. Es un caso especial del <strong>Movimiento Rectilíneo Uniformemente Acelerado (MRUA)</strong>.
            </p>
        </div>

        <!-- 2. Características -->
        <div class="concept-box mb-6">
            <h3 class="text-2xl font-bold text-green-700 mb-3 flex items-center">
                ⚡ Características Fundamentales
            </h3>
            <ul class="list-disc list-inside text-lg text-green-800 space-y-2">
                <li>Aceleración constante: $g = 9.8 \, \text{m/s}^2$ (aproximadamente $10 \, \text{m/s}^2$)</li>
                <li>Dirección: hacia abajo (hacia el centro de la Tierra)</li>
                <li>Independiente de la masa del objeto (en ausencia de resistencia del aire)</li>
                <li>La velocidad inicial puede ser cero o diferente de cero</li>
                <li>Trayectoria rectilínea vertical</li>
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
                    <div>$$v = v_0 + gt$$</div>
                </div>
                
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Posición (Desplazamiento)</div>
                    <div>$$y = y_0 + v_0t + \frac{1}{2}gt^2$$</div>
                </div>
                
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Velocidad independiente del tiempo</div>
                    <div>$$v^2 = v_0^2 + 2g(y - y_0)$$</div>
                </div>
                
                <div class="physics-formula">
                    <div class="text-sm text-blue-600 mb-2">Tiempo de Vuelo</div>
                    <div>$$t = \frac{v - v_0}{g}$$</div>
                </div>
            </div>
        </div>

        <!-- 4. Variables y Convenciones -->
        <div class="concept-box mb-6">
            <h3 class="text-2xl font-bold text-green-700 mb-3">📊 Variables y Convenciones</h3>
            <div class="grid md:grid-cols-2 gap-4 text-green-800">
                <div>
                    <strong>$v_0$</strong> = Velocidad inicial (m/s)<br>
                    <strong>$v$</strong> = Velocidad final (m/s)<br>
                    <strong>$g$</strong> = Aceleración gravitacional (9.8 m/s²)
                </div>
                <div>
                    <strong>$t$</strong> = Tiempo (s)<br>
                    <strong>$y_0$</strong> = Posición inicial (m)<br>
                    <strong>$y$</strong> = Posición final (m)
                </div>
            </div>
            <div class="mt-4 p-3 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800">
                <strong>⚠️ Convención de signos:</strong> Tomamos hacia abajo como positivo (+) y hacia arriba como negativo (-).
            </div>
        </div>

        <!-- 5. Ejemplos Detallados -->
        <div class="example-box mb-6">
            <h3 class="text-2xl font-bold text-amber-700 mb-4 flex items-center">
                💡 Ejemplos Detallados
            </h3>
            
            <!-- Ejemplo 1 -->
            <div class="bg-white p-6 rounded-lg border border-amber-300 mb-4">
                <h4 class="text-xl font-bold text-amber-800 mb-3">Ejemplo 1: Caída Libre desde el Reposo</h4>
                <p class="text-lg text-amber-800 mb-3">
                    <strong>Problema:</strong> Una pelota se deja caer desde una altura de 45 m. Calcular:
                    <br>a) El tiempo que tarda en llegar al suelo
                    <br>b) La velocidad con que impacta el suelo
                </p>
                
                <div class="bg-gray-50 p-4 rounded-lg mb-3">
                    <p class="text-amber-800 mb-2"><strong>Datos:</strong></p>
                    <ul class="list-disc list-inside text-amber-800 mb-3">
                        <li>$y_0 = 45$ m (altura inicial)</li>
                        <li>$y = 0$ m (suelo)</li>
                        <li>$v_0 = 0$ m/s (se deja caer, velocidad inicial cero)</li>
                        <li>$g = 9.8$ m/s²</li>
                    </ul>
                    
                    <p class="text-amber-800 mb-2"><strong>Solución parte a) Tiempo:</strong></p>
                    <p class="text-amber-800 mb-2">Usando: $y = y_0 + v_0t + \frac{1}{2}gt^2$</p>
                    <p class="text-amber-800 mb-2">$$0 = 45 + 0 \cdot t - \frac{1}{2}(9.8)t^2$$</p>
                    <p class="text-amber-800 mb-2">$$-45 = -4.9t^2$$</p>
                    <p class="text-amber-800 mb-2">$$t^2 = \frac{45}{4.9} = 9.18$$</p>
                    <p class="text-amber-800 mb-4">$$t = \sqrt{9.18} \approx 3.03 \text{ segundos}$$</p>
                    
                    <p class="text-amber-800 mb-2"><strong>Solución parte b) Velocidad final:</strong></p>
                    <p class="text-amber-800 mb-2">Usando: $v = v_0 + gt$</p>
                    <p class="text-amber-800 mb-2">$$v = 0 + 9.8 \times 3.03$$</p>
                    <p class="text-amber-800">$$v \approx 29.7 \text{ m/s}$$</p>
                </div>
            </div>

            <!-- Ejemplo 2 -->
            <div class="bg-white p-6 rounded-lg border border-amber-300">
                <h4 class="text-xl font-bold text-amber-800 mb-3">Ejemplo 2: Lanzamiento Vertical Hacia Arriba</h4>
                <p class="text-lg text-amber-800 mb-3">
                    <strong>Problema:</strong> Se lanza una pelota verticalmente hacia arriba con velocidad inicial de 20 m/s desde el suelo. Calcular:
                    <br>a) La altura máxima alcanzada
                    <br>b) El tiempo total de vuelo
                </p>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-amber-800 mb-2"><strong>Datos:</strong></p>
                    <ul class="list-disc list-inside text-amber-800 mb-3">
                        <li>$y_0 = 0$ m (suelo)</li>
                        <li>$v_0 = -20$ m/s (hacia arriba, negativo por convención)</li>
                        <li>$g = 9.8$ m/s²</li>
                    </ul>
                    
                    <p class="text-amber-800 mb-2"><strong>Solución parte a) Altura máxima:</strong></p>
                    <p class="text-amber-800 mb-2">En la altura máxima: $v = 0$</p>
                    <p class="text-amber-800 mb-2">Usando: $v^2 = v_0^2 + 2g(y - y_0)$</p>
                    <p class="text-amber-800 mb-2">$$0^2 = (-20)^2 + 2(9.8)(y - 0)$$</p>
                    <p class="text-amber-800 mb-2">$$0 = 400 + 19.6y$$</p>
                    <p class="text-amber-800 mb-4">$$y = -\frac{400}{19.6} \approx -20.4 \text{ m}$$</p>
                    <p class="text-amber-800 mb-2">La altura máxima es 20.4 m</p>
                    
                    <p class="text-amber-800 mb-2"><strong>Solución parte b) Tiempo total:</strong></p>
                    <p class="text-amber-800 mb-2">El objeto regresa al suelo cuando $y = 0$</p>
                    <p class="text-amber-800 mb-2">$$0 = 0 + (-20)t + \frac{1}{2}(9.8)t^2$$</p>
                    <p class="text-amber-800 mb-2">$$0 = -20t + 4.9t^2$$</p>
                    <p class="text-amber-800 mb-2">$$t(-20 + 4.9t) = 0$$</p>
                    <p class="text-amber-800">$$t = 0 \text{ o } t = \frac{20}{4.9} \approx 4.08 \text{ s}$$</p>
                </div>
            </div>
        </div>

        <!-- 6. Conceptos Clave -->
        <div class="important-note mb-6">
            <h3 class="text-xl font-bold text-red-700 mb-2 flex items-center">
                ⚠️ Conceptos Clave para Recordar
            </h3>
            <ul class="list-disc list-inside text-red-700 space-y-1">
                <li>Todos los objetos caen con la misma aceleración (despreciando la resistencia del aire)</li>
                <li>La resistencia del aire se desprecia en problemas teóricos</li>
                <li>El signo de $g$ y las velocidades depende del sistema de coordenadas elegido</li>
                <li>En la altura máxima, la velocidad es cero</li>
                <li>El tiempo de subida = tiempo de bajada (para el mismo nivel)</li>
            </ul>
        </div>

        <!-- 7. Ejercicios para Estudiantes -->
        <div class="bg-gradient-to-r from-purple-100 to-purple-200 p-6 rounded-xl border-2 border-purple-400">
            <h3 class="text-2xl font-bold text-purple-800 mb-4 flex items-center">
                🎯 Ejercicios para Practicar
            </h3>
            
            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg border border-purple-300">
                    <h4 class="font-bold text-purple-700 mb-2">Ejercicio 1:</h4>
                    <p class="text-purple-800">Una piedra se deja caer desde un puente de 80 m de altura. ¿Cuánto tiempo tarda en llegar al agua y con qué velocidad impacta?</p>
                </div>
                
                <div class="bg-white p-4 rounded-lg border border-purple-300">
                    <h4 class="font-bold text-purple-700 mb-2">Ejercicio 2:</h4>
                    <p class="text-purple-800">Se lanza una pelota hacia arriba con velocidad inicial de 15 m/s desde una altura de 10 m. Calcula la altura máxima y el tiempo total hasta tocar el suelo.</p>
                </div>
                
                <div class="bg-white p-4 rounded-lg border border-purple-300">
                    <h4 class="font-bold text-purple-700 mb-2">Ejercicio 3:</h4>
                    <p class="text-purple-800">Un objeto cae libremente y en los últimos 3 segundos recorre 144 m. ¿Desde qué altura se dejó caer?</p>
                </div>
                
                <div class="bg-white p-4 rounded-lg border border-purple-300">
                    <h4 class="font-bold text-purple-700 mb-2">Ejercicio 4:</h4>
                    <p class="text-purple-800">Dos objetos se dejan caer simultáneamente desde alturas de 45 m y 80 m respectivamente. ¿Cuál es la diferencia de tiempo entre sus impactos?</p>
                </div>
            </div>
            
            <div class="mt-4 p-3 bg-purple-50 rounded-lg">
                <p class="text-sm text-purple-700">
                    💡 <strong>Sugerencia:</strong> Recuerda identificar los datos, elegir la ecuación apropiada y verificar el signo según tu sistema de coordenadas.
                </p>
            </div>
        </div>

    </div>
</div>
