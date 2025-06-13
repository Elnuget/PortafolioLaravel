<!-- Subcomponente de problemas tipo EPN -->
<h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
    <span class="mr-2">06</span>
    <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
    Problemas Tipo Examen EPN
</h3>
<div class="bg-gray-800 p-6 rounded-lg shadow-md mb-8">
    <div class="mb-6">
        <h4 class="text-lg font-semibold text-cyan-300 mb-3">🎓 Problemas de Álgebra con Edades - Examen EPN</h4>
        <p class="text-gray-300 mb-4">
            Estos son problemas de álgebra con edades tomados de exámenes de admisión reales de la Escuela Politécnica Nacional.
        </p>
    </div>

    <!-- Banco de Ejercicios EPN -->
    <div class="bg-gradient-to-r from-red-900/50 to-orange-900/50 p-6 rounded-xl border-l-4 border-red-400">
        <h5 class="text-red-200 font-semibold mb-6 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            📋 Banco de Ejercicios EPN - Problemas de Edades
        </h5>

        <!-- Problema 36 -->
        <div class="mb-8">
            <div class="bg-purple-900/50 p-5 rounded-lg border-l-4 border-purple-400">
                <div class="flex items-center mb-4">
                    <span class="bg-purple-600 px-3 py-1 rounded-full text-white text-sm font-bold">Problema 36</span>
                    <span class="ml-3 text-purple-200 text-sm font-medium">⭐ Nivel: Intermedio</span>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-800/70 p-4 rounded-lg">
                        <h6 class="text-yellow-200 font-medium mb-2">📝 Enunciado:</h6>
                        <p class="text-gray-300">
                            Un padre decía a su hijo: "Hoy tu edad es 1/3 de la mía y dentro de 13 años será justamente 1/2. ¿Cuál es el promedio de las edades del padre y del hijo?"
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-blue-200 font-medium mb-3">🔍 Análisis del problema:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Variables:</label>
                                    <input type="text" placeholder="x = edad del hijo, y = edad del padre" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Ecuación 1 (hoy):</label>
                                    <input type="text" placeholder="x = y/3" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Ecuación 2 (en 13 años):</label>
                                    <input type="text" placeholder="x + 13 = ?" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-green-200 font-medium mb-3">✏️ Resolución:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Sustitución:</label>
                                    <input type="text" placeholder="De y = 3x en ecuación 2..." class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Edad del hijo:</label>
                                    <input type="text" placeholder="x = ?" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Promedio de edades:</label>
                                    <input type="text" placeholder="(hijo + padre)/2 = ?" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <details class="mt-4 cursor-pointer">
                        <summary class="text-green-300 font-medium hover:text-green-200 transition-colors bg-green-900/20 p-3 rounded-lg">
                            💡 Ver solución completa del Problema 36
                        </summary>
                        <div class="mt-3 p-4 bg-green-900/20 rounded-lg border border-green-500/30">
                            <div class="text-sm text-gray-300 space-y-2">
                                <p><strong class="text-green-200">Variables:</strong> x = edad del hijo, y = edad del padre</p>
                                <p><strong class="text-green-200">Ecuaciones:</strong></p>
                                <p>1) x = y/3 → y = 3x</p>
                                <p>2) x + 13 = (y + 13)/2</p>
                                <p><strong class="text-green-200">Sustitución:</strong></p>
                                <p>x + 13 = (3x + 13)/2</p>
                                <p>2(x + 13) = 3x + 13</p>
                                <p>2x + 26 = 3x + 13</p>
                                <p>13 = x</p>
                                <p><strong class="text-yellow-200">Edades: Hijo = 13 años, Padre = 39 años</strong></p>
                                <p><strong class="text-yellow-200">Promedio = (13 + 39)/2 = 26 años</strong></p>
                            </div>
                        </div>
                    </details>
                </div>
            </div>
        </div>

        <!-- Problema 37 -->
        <div class="mb-8">
            <div class="bg-blue-900/50 p-5 rounded-lg border-l-4 border-blue-400">
                <div class="flex items-center mb-4">
                    <span class="bg-blue-600 px-3 py-1 rounded-full text-white text-sm font-bold">Problema 37</span>
                    <span class="ml-3 text-blue-200 text-sm font-medium">⭐⭐ Nivel: Avanzado</span>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-800/70 p-4 rounded-lg">
                        <h6 class="text-yellow-200 font-medium mb-2">📝 Enunciado:</h6>
                        <p class="text-gray-300">
                            Hace 8 años tenía la cuarta parte de años que tendré dentro de 16 años. Entonces, ¿dentro de cuántos años tendré el cuádruple de los años que tenía hace 6 años?
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-blue-200 font-medium mb-3">🧮 Planteamiento:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Edad actual:</label>
                                    <input type="text" placeholder="x años" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Hace 8 años:</label>
                                    <input type="text" placeholder="x - 8" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Dentro de 16 años:</label>
                                    <input type="text" placeholder="x + 16" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-orange-200 font-medium mb-3">🎯 Pregunta final:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Hace 6 años tenía:</label>
                                    <input type="text" placeholder="x - 6 años" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">El cuádruple es:</label>
                                    <input type="text" placeholder="4(x - 6)" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">¿Dentro de cuántos años?</label>
                                    <input type="text" placeholder="? años" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <details class="mt-4 cursor-pointer">
                        <summary class="text-green-300 font-medium hover:text-green-200 transition-colors bg-green-900/20 p-3 rounded-lg">
                            💡 Ver solución paso a paso del Problema 37
                        </summary>
                        <div class="mt-3 p-4 bg-green-900/20 rounded-lg border border-green-500/30">
                            <div class="text-sm text-gray-300 space-y-2">
                                <p><strong class="text-green-200">Ecuación principal:</strong> x - 8 = (x + 16)/4</p>
                                <p>4(x - 8) = x + 16</p>
                                <p>4x - 32 = x + 16</p>
                                <p>3x = 48 → x = 16 años (edad actual)</p>
                                <p><strong class="text-green-200">Cálculo final:</strong></p>
                                <p>• Hace 6 años tenía: 16 - 6 = 10 años</p>
                                <p>• El cuádruple: 4 × 10 = 40 años</p>
                                <p>• Para tener 40 años: dentro de 40 - 16 = 24 años</p>
                                <p><strong class="text-yellow-200">Respuesta: Dentro de 24 años</strong></p>
                            </div>
                        </div>
                    </details>
                </div>
            </div>
        </div>

        <!-- Problema 38 -->
        <div class="mb-8">
            <div class="bg-green-900/50 p-5 rounded-lg border-l-4 border-green-400">
                <div class="flex items-center mb-4">
                    <span class="bg-green-600 px-3 py-1 rounded-full text-white text-sm font-bold">Problema 38</span>
                    <span class="ml-3 text-green-200 text-sm font-medium">⭐ Nivel: Intermedio</span>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-800/70 p-4 rounded-lg">
                        <h6 class="text-yellow-200 font-medium mb-2">📝 Enunciado:</h6>
                        <p class="text-gray-300">
                            La edad de A es el doble de la B y hace 15 años la edad de A era el triple de la de B. Hallar la edad de A.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-blue-200 font-medium mb-3">📊 Sistema de ecuaciones:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Condición actual:</label>
                                    <input type="text" placeholder="A = 2B" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Hace 15 años:</label>
                                    <input type="text" placeholder="A - 15 = 3(B - 15)" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-green-200 font-medium mb-3">🔄 Sustitución:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Reemplazar A = 2B:</label>
                                    <input type="text" placeholder="2B - 15 = 3(B - 15)" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Edad de A:</label>
                                    <input type="text" placeholder="A = ?" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <details class="mt-4 cursor-pointer">
                        <summary class="text-green-300 font-medium hover:text-green-200 transition-colors bg-green-900/20 p-3 rounded-lg">
                            💡 Ver desarrollo completo del Problema 38
                        </summary>
                        <div class="mt-3 p-4 bg-green-900/20 rounded-lg border border-green-500/30">
                            <div class="text-sm text-gray-300 space-y-2">
                                <p><strong class="text-green-200">Sistema de ecuaciones:</strong></p>
                                <p>1) A = 2B (edad actual)</p>
                                <p>2) A - 15 = 3(B - 15) (hace 15 años)</p>
                                <p><strong class="text-green-200">Sustitución:</strong></p>
                                <p>2B - 15 = 3(B - 15)</p>
                                <p>2B - 15 = 3B - 45</p>
                                <p>-15 + 45 = 3B - 2B</p>
                                <p>30 = B</p>
                                <p><strong class="text-yellow-200">B = 30 años, A = 60 años</strong></p>
                            </div>
                        </div>
                    </details>
                </div>
            </div>
        </div>

        <!-- Problema 39 -->
        <div class="mb-6">
            <div class="bg-orange-900/50 p-5 rounded-lg border-l-4 border-orange-400">
                <div class="flex items-center mb-4">
                    <span class="bg-orange-600 px-3 py-1 rounded-full text-white text-sm font-bold">Problema 39</span>
                    <span class="ml-3 text-orange-200 text-sm font-medium">⭐ Nivel: Básico</span>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-800/70 p-4 rounded-lg">
                        <h6 class="text-yellow-200 font-medium mb-2">📝 Enunciado:</h6>
                        <p class="text-gray-300">
                            Preguntado un hombre por su edad, contesta: si al doble de mi edad se le quitan 20 años se obtiene lo que me falta para llegar a 100. ¿Cuál es la edad de dicha persona?
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-blue-200 font-medium mb-3">🔍 Interpretación:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Edad actual:</label>
                                    <input type="text" placeholder="x años" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Doble de la edad menos 20:</label>
                                    <input type="text" placeholder="2x - 20" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Lo que falta para 100:</label>
                                    <input type="text" placeholder="100 - x" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-700/50 p-4 rounded-lg">
                            <h7 class="text-green-200 font-medium mb-3">⚖️ Ecuación:</h7>
                            <div class="space-y-2 text-sm">
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Plantear ecuación:</label>
                                    <input type="text" placeholder="2x - 20 = 100 - x" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                                <div class="bg-gray-600/50 p-2 rounded">
                                    <label class="text-gray-400">Resolver para x:</label>
                                    <input type="text" placeholder="x = ?" class="bg-transparent text-gray-300 w-full outline-none mt-1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <details class="mt-4 cursor-pointer">
                        <summary class="text-green-300 font-medium hover:text-green-200 transition-colors bg-green-900/20 p-3 rounded-lg">
                            💡 Ver solución directa del Problema 39
                        </summary>
                        <div class="mt-3 p-4 bg-green-900/20 rounded-lg border border-green-500/30">
                            <div class="text-sm text-gray-300 space-y-2">
                                <p><strong class="text-green-200">Ecuación:</strong> 2x - 20 = 100 - x</p>
                                <p>2x + x = 100 + 20</p>
                                <p>3x = 120</p>
                                <p>x = 40</p>
                                <p><strong class="text-yellow-200">La persona tiene 40 años</strong></p>
                                <p><strong class="text-green-200">Verificación:</strong> 2(40) - 20 = 60, y 100 - 40 = 60 ✓</p>
                            </div>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>

    <!-- Consejos para el Examen EPN -->
    <div class="bg-gradient-to-r from-gray-800 to-gray-900 p-6 rounded-xl border border-gray-600">
        <h5 class="text-gray-200 font-semibold mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            💡 Estrategias Clave para el Examen EPN
        </h5>
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <h6 class="text-blue-300 font-medium mb-2">✅ Metodología de Resolución:</h6>
                <ul class="text-gray-300 text-sm space-y-1">
                    <li>• Define claramente las variables</li>
                    <li>• Identifica todas las condiciones del problema</li>
                    <li>• Plantea las ecuaciones sistemáticamente</li>
                    <li>• Verifica siempre tu respuesta</li>
                </ul>
            </div>
            <div>
                <h6 class="text-green-300 font-medium mb-2">⏱ Gestión del Tiempo:</h6>
                <ul class="text-gray-300 text-sm space-y-1">
                    <li>• Tiempo promedio por problema: 3-4 minutos</li>
                    <li>• Lee el problema completo antes de resolver</li>
                    <li>• Si te atoras, pasa al siguiente</li>
                    <li>• Reserva tiempo para revisar</li>
                </ul>
            </div>
        </div>
    </div>
</div>
