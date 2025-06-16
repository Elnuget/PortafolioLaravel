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
        
        <p class="text-blue-300 text-sm mt-6">
            <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Sugerencia: Para estos problemas más complejos, identifica primero todos los paréntesis, corchetes y llaves, y trabaja desde el más interno hacia el más externo. Escribe cada paso para evitar errores.
        </p>
    </div>
</section>
