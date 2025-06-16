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
        
        <div class="space-y-6">
            <!-- Paréntesis -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">P</span>
                    Paréntesis
                </h4>
                <p class="text-gray-300">
                    Primero, resuelve todas las operaciones dentro de paréntesis, corchetes y llaves, 
                    trabajando desde los más internos hacia los externos.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">2 × (3 + 4) = 2 × 7 = 14</span></p>
                </div>
            </div>
            
            <!-- Exponentes -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">E</span>
                    Exponentes
                </h4>
                <p class="text-gray-300">
                    Luego, calcula todas las potencias y raíces.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">3² = 9</span></p>
                </div>
            </div>
            
            <!-- Multiplicación y División -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">MD</span>
                    Multiplicación y División
                </h4>
                <p class="text-gray-300">
                    Realiza todas las multiplicaciones y divisiones, de izquierda a derecha.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">6 ÷ 2 × 3 = 3 × 3 = 9</span></p>
                </div>
            </div>
            
            <!-- Adición y Sustracción -->
            <div class="operation-step bg-blue-900/20 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-2 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">AS</span>
                    Adición y Sustracción
                </h4>
                <p class="text-gray-300">
                    Finalmente, realiza todas las sumas y restas, de izquierda a derecha.
                </p>
                <div class="mt-3 p-3 bg-gray-800 bg-opacity-50 rounded-lg">
                    <p class="text-gray-300">Ejemplo: <span class="math-expression">7 - 4 + 2 = 3 + 2 = 5</span></p>
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
                </ul>
            </div>
        </div>
    </div>
</section>
