<!-- Sección: Operaciones Compuestas -->
<section id="operaciones_compuestas" class="mb-12">
    <div class="section-header flex items-center mb-6">
        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold">3</span>
        </div>
        <h3 class="text-2xl font-bold text-white">Operaciones Compuestas</h3>
    </div>
    
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-8">
        <p class="text-gray-300 mb-4">
            Las operaciones compuestas son expresiones matemáticas que contienen múltiples operaciones 
            de diferentes tipos. Resolver correctamente estas expresiones requiere una aplicación cuidadosa 
            de la jerarquía de operaciones.
        </p>
          <h4 class="text-xl font-bold text-white mt-6 mb-4">Ejemplo de resolución paso a paso (nivel avanzado)</h4>
        
        <div class="equation-box">
            <div class="text-center mb-4">
                <span class="math-expression text-2xl">5^2 ÷ (3 + 2) × [4 - (7 - 5)^2] + 3√16</span>
            </div>
            
            <div class="space-y-3 mt-6">
                <div class="operation-step">
                    <p class="text-blue-300 font-bold">Paso 1: Resolver paréntesis internos</p>
                    <p class="text-gray-300"><span class="math-expression">5^2 ÷ (3 + 2) × [4 - (2)^2] + 3√16</span></p>
                </div>
                
                <div class="operation-step">
                    <p class="text-blue-300 font-bold">Paso 2: Calcular exponentes y raíces</p>
                    <p class="text-gray-300"><span class="math-expression">25 ÷ (5) × [4 - 4] + 3 × 4</span></p>
                </div>
                
                <div class="operation-step">
                    <p class="text-blue-300 font-bold">Paso 3: Resolver paréntesis restantes</p>
                    <p class="text-gray-300"><span class="math-expression">25 ÷ 5 × [0] + 12</span></p>
                </div>
                
                <div class="operation-step">
                    <p class="text-blue-300 font-bold">Paso 4: Multiplicación y división (de izquierda a derecha)</p>
                    <p class="text-gray-300"><span class="math-expression">5 × 0 + 12 = 0 + 12</span></p>
                </div>
                
                <div class="operation-step">
                    <p class="text-blue-300 font-bold">Paso 5: Suma final</p>
                    <p class="text-gray-300"><span class="math-expression">0 + 12 = 12</span></p>
                </div>
                
                <div class="bg-blue-900/20 p-4 rounded-lg mt-4">
                    <p class="text-center text-white font-bold">Resultado final: <span class="math-expression text-xl">12</span></p>
                </div>
            </div>
        </div>
    </div>
      <!-- Ejemplos adicionales de nivel superior -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <h4 class="text-lg font-bold text-white mb-3">Ejemplo avanzado 1: Fracciones complejas</h4>
            <div class="equation-box">
                <p class="text-gray-300 mb-2">Expresión:</p>
                <p class="text-center"><span class="math-expression">(3² - 4) ÷ (2 × 5 - 8) + 4 × [2 + (3 - 1)]</span></p>
                
                <div class="mt-4 text-sm">
                    <div class="operation-step">
                        <p class="text-blue-300">Paréntesis internos: (3 - 1) = 2</p>
                        <p class="text-gray-300"><span class="math-expression">(3² - 4) ÷ (2 × 5 - 8) + 4 × [2 + 2]</span></p>
                    </div>
                    
                    <div class="operation-step">
                        <p class="text-blue-300">Exponentes: 3² = 9</p>
                        <p class="text-gray-300"><span class="math-expression">(9 - 4) ÷ (2 × 5 - 8) + 4 × [2 + 2]</span></p>
                    </div>
                    
                    <div class="operation-step">
                        <p class="text-blue-300">Paréntesis: (9 - 4) = 5, (2 × 5 - 8) = 2, [2 + 2] = 4</p>
                        <p class="text-gray-300"><span class="math-expression">5 ÷ 2 + 4 × 4</span></p>
                    </div>
                    
                    <div class="operation-step">
                        <p class="text-blue-300">Multiplicación/División: 5 ÷ 2 = 2.5, 4 × 4 = 16</p>
                        <p class="text-gray-300"><span class="math-expression">2.5 + 16 = 18.5</span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <h4 class="text-lg font-bold text-white mb-3">Ejemplo avanzado 2: Radicales y potencias</h4>
            <div class="equation-box">
                <p class="text-gray-300 mb-2">Expresión:</p>
                <p class="text-center"><span class="math-expression">√(5² - 1) × [6 ÷ (3 - 1)]² - 3^2</span></p>
                
                <div class="mt-4 text-sm">
                    <div class="operation-step">
                        <p class="text-blue-300">Paréntesis: (5² - 1) = 24, (3 - 1) = 2</p>
                        <p class="text-gray-300"><span class="math-expression">√24 × [6 ÷ 2]² - 3^2</span></p>
                    </div>
                    
                    <div class="operation-step">
                        <p class="text-blue-300">Corchetes y división: [6 ÷ 2] = 3</p>
                        <p class="text-gray-300"><span class="math-expression">√24 × 3² - 3^2</span></p>
                    </div>
                    
                    <div class="operation-step">
                        <p class="text-blue-300">Exponentes y raíces: √24 ≈ 4.9, 3² = 9, 3^2 = 9</p>
                        <p class="text-gray-300"><span class="math-expression">4.9 × 9 - 9</span></p>
                    </div>
                    
                    <div class="operation-step">
                        <p class="text-blue-300">Multiplicación: 4.9 × 9 = 44.1</p>
                        <p class="text-gray-300"><span class="math-expression">44.1 - 9 = 35.1</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Actividad práctica avanzada -->
    <div class="bg-gradient-to-br from-blue-900/20 to-gray-900 rounded-lg p-6 border border-blue-800/30 mb-8">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
            </svg>
            Actividad práctica avanzada
        </h4>
        
        <p class="text-gray-300 mb-4">
            Resuelve las siguientes operaciones compuestas de nivel avanzado aplicando la jerarquía de operaciones:
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">1) 2³ × √(16 - 7) + [5² ÷ (3 + 2)] - 6</span></p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">2) [4² - (8 ÷ 2)²] × 3 + √(9 × 4)</span></p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">3) 5 × {[12 ÷ (2 + 1)] - 2²} + 3^3 ÷ 9</span></p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                <p class="text-center text-gray-300"><span class="math-expression">4) 7 - 3 × [4 - (6 - 2)] + √(2^4 ÷ 4)</span></p>
            </div>
        </div>
        
        <div class="mt-6 space-y-4">
            <h5 class="text-lg font-bold text-white">Desafío: Operaciones con variables</h5>
            <p class="text-gray-300">Si a = 3, b = 5 y c = 2, calcula:</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                    <p class="text-center text-gray-300"><span class="math-expression">5) a² × (b - c) ÷ [a + (b ÷ c)]</span></p>
                </div>
                
                <div class="bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                    <p class="text-center text-gray-300"><span class="math-expression">6) √(a × b + c²) - [b ÷ (a - c)]²</span></p>
                </div>
            </div>
        </div>
        
        <p class="text-blue-300 text-sm mt-6">            <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Sugerencia: Para estos problemas más complejos, identifica primero todos los paréntesis, corchetes y llaves, y trabaja desde el más interno hacia el más externo. Escribe cada paso para evitar errores.
        </p>
    </div>
    
    <!-- Ejercicio interactivo con elementos químicos -->
    <div class="bg-gradient-to-br from-teal-900/30 to-blue-900/30 rounded-xl p-6 border border-teal-500/30 mt-8">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
            Laboratorio Matemático: "Fórmulas Químicas"
        </h4>
        
        <div class="bg-gray-800 bg-opacity-70 p-5 rounded-lg">
            <p class="text-gray-300 mb-4">
                En nuestro laboratorio matemático, cada elemento químico tiene un valor numérico específico:
            </p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <p class="text-teal-300 font-semibold text-xl">H</p>
                    <p class="text-teal-200 font-semibold mt-1">Hidrógeno = 1</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <p class="text-teal-300 font-semibold text-xl">O</p>
                    <p class="text-teal-200 font-semibold mt-1">Oxígeno = 8</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <p class="text-teal-300 font-semibold text-xl">C</p>
                    <p class="text-teal-200 font-semibold mt-1">Carbono = 6</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <p class="text-teal-300 font-semibold text-xl">N</p>
                    <p class="text-teal-200 font-semibold mt-1">Nitrógeno = 7</p>
                </div>
            </div>
            
            <p class="text-white font-bold mb-3">Resuelve estas "reacciones matemáticas" aplicando la jerarquía de operaciones:</p>
            
            <div class="space-y-4">
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">1. H₂O: 2H + O ÷ (H + H) × O</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-gray-400 text-sm">Pista: La fórmula representa 2×1 + 8 ÷ (1+1) × 8</span>
                        <button class="bg-teal-700 hover:bg-teal-600 text-white text-xs font-bold py-1 px-3 rounded transition">Ver reacción</button>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">2. CO₂: (C × O) ÷ [C - (O - C)²]</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-gray-400 text-sm">Pista: Primero calcula (O - C) y eleva al cuadrado...</span>
                        <button class="bg-teal-700 hover:bg-teal-600 text-white text-xs font-bold py-1 px-3 rounded transition">Ver reacción</button>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">3. CH₄: C + √(H × O) - (O ÷ N)²</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-gray-400 text-sm">Pista: Calcula la raíz cuadrada de (H × O)...</span>
                        <button class="bg-teal-700 hover:bg-teal-600 text-white text-xs font-bold py-1 px-3 rounded transition">Ver reacción</button>
                    </div>
                </div>
                
                <div class="bg-gray-900/50 p-4 rounded-lg border border-teal-700/50 mt-6">
                    <p class="text-white font-semibold mb-2">Reacción compleja: NH₃</p>
                    <p class="text-center text-lg mb-2">4. (N² - C²) ÷ {[O - (H × 2)] + √C} × (H³ ÷ N)</p>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-teal-300 text-sm">Un desafío que combina todas las operaciones</span>
                        <button class="bg-teal-700 hover:bg-teal-600 text-white text-xs font-bold py-1 px-3 rounded transition">Ver reacción</button>
                    </div>
                </div>
            </div>
            
            <div class="bg-teal-900/20 p-4 rounded-lg mt-6">
                <h5 class="text-white font-bold mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    Aplicación en Química Real
                </h5>
                <p class="text-gray-300 text-sm">
                    La jerarquía de operaciones es fundamental en ecuaciones químicas reales, como en el cálculo de masas molares, 
                    balanceo de ecuaciones y estequiometría. Dominar PEMDAS te ayudará en tus estudios de química y otras ciencias.
                </p>
            </div>
        </div>
    </div>
</section>
