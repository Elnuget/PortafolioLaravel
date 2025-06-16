<!-- Sección: Reglas de la Jerarquía de Operaciones -->
<section id="reglas_jerarquia" class="mb-12">
    <div class="section-header flex items-center mb-6">
        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold">2</span>
        </div>
        <h3 class="text-2xl font-bold text-white">Reglas de la Jerarquía de Operaciones</h3>
    </div>
    
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-8">
        <p class="text-gray-300 mb-6">
            La jerarquía de operaciones establece un orden específico para realizar cálculos matemáticos. 
            A continuación, se presenta el orden correcto (PEMDAS):
        </p>
        
        <div class="space-y-6">            <!-- Paréntesis -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">P</span>
                    Paréntesis
                </h4>
                <p class="text-gray-300">
                    Primero, resuelve todas las operaciones dentro de paréntesis, corchetes y llaves, 
                    trabajando desde los más internos hacia los externos. Este principio se aplica también a los radicales y fracciones.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">2 × [(3 + 4) × (8 - 6)] = 2 × [7 × 2] = 2 × 14 = 28</span></p>
                </div>
            </div>
            
            <!-- Exponentes -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">E</span>
                    Exponentes y Raíces
                </h4>
                <p class="text-gray-300">
                    Luego, calcula todas las potencias, raíces y logaritmos. Recuerda que un radical es equivalente a una potencia fraccionaria.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplos: <span class="math-expression">3² = 9</span>, <span class="math-expression">√16 = 4</span>, <span class="math-expression">8^(2/3) = (8^2)^(1/3) = 64^(1/3) = 4</span></p>
                </div>
            </div>
            
            <!-- Multiplicación y División -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">MD</span>
                    Multiplicación y División
                </h4>
                <p class="text-gray-300">
                    Realiza todas las multiplicaciones y divisiones, de izquierda a derecha. Esto incluye operaciones con porcentajes y fracciones.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">6 ÷ 2 × 3 ÷ 0.5 = 3 × 3 ÷ 0.5 = 9 ÷ 0.5 = 18</span></p>
                </div>
            </div>
            
            <!-- Adición y Sustracción -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">AS</span>
                    Adición y Sustracción
                </h4>
                <p class="text-gray-300">
                    Finalmente, realiza todas las sumas y restas, de izquierda a derecha. Presta atención a los signos cuando hay múltiples operaciones consecutivas.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">7 - 4 + 2 - (-3) = 3 + 2 + 3 = 8</span></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Nemotecnia PEMDAS -->
    <div class="mb-8 bg-gradient-to-br from-blue-900/30 to-blue-800/10 p-6 rounded-xl border border-blue-900/30">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Nemotecnia: PEMDAS
        </h4>
        
        <div class="flex flex-wrap justify-center gap-4 text-center">
            <div class="bg-blue-800/30 p-4 rounded-lg w-24">
                <div class="text-2xl font-bold text-blue-300">P</div>
                <div class="text-sm text-gray-300 mt-1">Paréntesis</div>
            </div>
            <div class="bg-blue-800/30 p-4 rounded-lg w-24">
                <div class="text-2xl font-bold text-blue-300">E</div>
                <div class="text-sm text-gray-300 mt-1">Exponentes</div>
            </div>
            <div class="bg-blue-800/30 p-4 rounded-lg w-24">
                <div class="text-2xl font-bold text-blue-300">M</div>
                <div class="text-sm text-gray-300 mt-1">Multiplicación</div>
            </div>
            <div class="bg-blue-800/30 p-4 rounded-lg w-24">
                <div class="text-2xl font-bold text-blue-300">D</div>
                <div class="text-sm text-gray-300 mt-1">División</div>
            </div>
            <div class="bg-blue-800/30 p-4 rounded-lg w-24">
                <div class="text-2xl font-bold text-blue-300">A</div>
                <div class="text-sm text-gray-300 mt-1">Adición</div>
            </div>
            <div class="bg-blue-800/30 p-4 rounded-lg w-24">
                <div class="text-2xl font-bold text-blue-300">S</div>
                <div class="text-sm text-gray-300 mt-1">Sustracción</div>
            </div>
        </div>
        
        <p class="text-gray-300 mt-6 text-center">
            <span class="text-blue-300 font-bold">Frase para recordar:</span> "Por Favor, Mi Estimado Señor Arias"
        </p>
    </div>
      <!-- Errores comunes -->
    <div class="bg-red-900/20 border-l-4 border-red-500 p-5 rounded-r-lg mb-8">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <div class="ml-3">
                <h5 class="text-lg font-medium text-white">Errores comunes a evitar</h5>
                <ul class="text-gray-300 mt-1 list-disc pl-6 space-y-1">
                    <li>No respetar el orden de operaciones y calcular de izquierda a derecha.</li>
                    <li>Olvidar resolver primero las operaciones dentro de paréntesis.</li>
                    <li>Confundir el orden entre multiplicación/división y adición/sustracción.</li>
                    <li>No aplicar el principio de izquierda a derecha para operaciones del mismo nivel.</li>
                    <li>Aplicar incorrectamente la regla de los signos en operaciones con números negativos.</li>
                    <li>Olvidar que las raíces y logaritmos tienen la misma prioridad que los exponentes.</li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Ejercicio de práctica avanzado -->
    <div class="bg-gradient-to-br from-blue-900/30 to-gray-900 rounded-xl p-6 border border-blue-800/30 mb-8">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
            </svg>
            Ejercicios de aplicación de PEMDAS
        </h4>
        
        <p class="text-gray-300 mb-4">
            Aplica correctamente la jerarquía de operaciones para resolver estas expresiones complejas:
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="bg-gray-800 bg-opacity-50 p-4 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">1) 3^2 × (4 + 2) ÷ 2^3 - √(9 + 16)</span></p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-4 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">2) 4 × [5 + 3 × (10 - 8)^2] - 7^2 ÷ 7</span></p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-4 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">3) 20 ÷ (2 + 3) × [4 - (3 - 2)^2] + 5</span></p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-4 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">4) 5 × (2^3 - 4) + 36 ÷ (3^2 - 6 × 1)</span></p>
            </div>
        </div>
        
        <div class="mt-6 bg-blue-900/20 p-4 rounded-lg">
            <h5 class="text-lg font-bold text-white mb-2">Ejercicio avanzado: Fracciones complejas</h5>
            <div class="text-center py-3">
                <span class="math-expression text-lg">5) (4^2 - 2 × 5) ÷ [3 + (8 - 2 × 3)^2 ÷ 4]</span>
            </div>            <p class="text-blue-300 text-sm mt-2">
                Consejo: Resuelve primero las operaciones dentro de los paréntesis más internos y luego trabaja hacia afuera. 
                Recuerda que la fracción entera actúa como un gran símbolo de agrupación.
            </p>
        </div>
    </div>
    
    <!-- Ejercicio interactivo con planetas -->
    <div class="bg-gradient-to-br from-indigo-900/30 to-blue-900/30 rounded-xl p-6 border border-indigo-500/30 mt-8">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            Desafío del Sistema Solar: "El Valor de los Planetas"
        </h4>
        
        <div class="bg-gray-800 bg-opacity-70 p-5 rounded-lg">
            <p class="text-gray-300 mb-4">
                En este sistema, cada planeta representa un valor numérico específico:
            </p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🌍</span>
                    <p class="text-indigo-300 font-semibold mt-1">Tierra = 3</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🪐</span>
                    <p class="text-indigo-300 font-semibold mt-1">Saturno = 6</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🔴</span>
                    <p class="text-indigo-300 font-semibold mt-1">Marte = 4</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🌕</span>
                    <p class="text-indigo-300 font-semibold mt-1">Luna = 1</p>
                </div>
            </div>
            
            <p class="text-white font-bold mb-3">Aplica las reglas PEMDAS para resolver estas expresiones astronómicas:</p>
            
            <div class="space-y-4">
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">1. 🪐 ÷ (🌍 - 🌕) × 🔴²</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-gray-400 text-sm">Pista: Primero resuelve el paréntesis (3-1)...</span>
                        <button class="bg-indigo-700 hover:bg-indigo-600 text-white text-xs font-bold py-1 px-3 rounded transition">Revelar solución</button>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">2. (🌍 + 🌕)³ - [🪐 × (🔴 - 🌕)]</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-gray-400 text-sm">Pista: Calcula primero lo que hay dentro de cada paréntesis...</span>
                        <button class="bg-indigo-700 hover:bg-indigo-600 text-white text-xs font-bold py-1 px-3 rounded transition">Revelar solución</button>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">3. √(🪐² - 🌍²) + 🔴 × 🌕 ÷ 🌍</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-gray-400 text-sm">Pista: Calcula las potencias dentro de la raíz cuadrada...</span>
                        <button class="bg-indigo-700 hover:bg-indigo-600 text-white text-xs font-bold py-1 px-3 rounded transition">Revelar solución</button>
                    </div>
                </div>
                
                <div class="bg-gray-900/50 p-4 rounded-lg border border-indigo-700/50 mt-6">
                    <p class="text-white font-semibold mb-2">Desafío astronómico avanzado:</p>
                    <p class="text-center text-lg mb-2">4. {[(🪐 + 🌕) ÷ 🌍]² - 🔴} × √(🌍 × 🔴)</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-indigo-300 text-sm">Este problema pone a prueba tu dominio completo de PEMDAS</span>
                        <button class="bg-indigo-700 hover:bg-indigo-600 text-white text-xs font-bold py-1 px-3 rounded transition">Revelar solución</button>
                    </div>
                </div>
            </div>
            
            <p class="text-indigo-300 italic mt-5 text-sm">
                Este ejercicio te ayuda a visualizar la jerarquía de operaciones como un "sistema planetario" donde cada elemento tiene su propio orden y posición. La analogía refuerza la idea de que las reglas matemáticas son universales como las leyes físicas.
            </p>
        </div>
    </div>
</section>
