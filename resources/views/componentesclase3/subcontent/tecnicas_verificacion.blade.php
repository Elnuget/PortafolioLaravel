<!-- Sección: Técnicas de Verificación -->
<section id="tecnicas_verificacion" class="mb-12">
    <div class="section-header flex items-center mb-6">
        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold">4</span>
        </div>
        <h3 class="text-2xl font-bold text-white">Técnicas de Verificación</h3>
    </div>
    
    <div class="bg-black bg-opacity-30 p-6 rounded-xl border border-gray-800 mb-8">
        <p class="text-gray-300 mb-6">
            Verificar tus respuestas es una parte esencial para asegurar que has aplicado correctamente 
            la jerarquía de operaciones. A continuación, se presentan algunas técnicas efectivas para 
            comprobar tus resultados.
        </p>
        
        <div class="space-y-8">
            <!-- Técnica 1: Doble cálculo -->
            <div class="bg-gray-800 bg-opacity-40 p-5 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">1</span>
                    Doble cálculo con métodos diferentes
                </h4>
                
                <p class="text-gray-300 mb-4">
                    Resuelve la misma expresión utilizando un enfoque diferente. Por ejemplo, 
                    puedes reordenar la expresión utilizando propiedades matemáticas o usar paréntesis 
                    adicionales para aclarar el orden de las operaciones.
                </p>
                
                <div class="equation-box">
                    <p class="text-gray-300 mb-2">Ejemplo: Verificar <span class="math-expression">4 + 3 × 5</span></p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                        <div class="bg-blue-900/20 p-3 rounded-lg">
                            <p class="text-blue-300 font-bold">Método 1: PEMDAS estándar</p>
                            <div class="text-gray-300 mt-2">
                                <p><span class="math-expression">4 + 3 × 5</span></p>
                                <p><span class="math-expression">4 + 15</span></p>
                                <p><span class="math-expression">19</span></p>
                            </div>
                        </div>
                        
                        <div class="bg-blue-900/20 p-3 rounded-lg">
                            <p class="text-blue-300 font-bold">Método 2: Usar paréntesis</p>
                            <div class="text-gray-300 mt-2">
                                <p><span class="math-expression">4 + 3 × 5 = 4 + (3 × 5)</span></p>
                                <p><span class="math-expression">4 + 15</span></p>
                                <p><span class="math-expression">19</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Técnica 2: Sustitución de valores -->
            <div class="bg-gray-800 bg-opacity-40 p-5 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">2</span>
                    Sustitución de valores intermedios
                </h4>
                
                <p class="text-gray-300 mb-4">
                    Asigna letras a los resultados intermedios para simplificar el cálculo y reducir errores.
                </p>
                
                <div class="equation-box">
                    <p class="text-gray-300 mb-2">Ejemplo: Verificar <span class="math-expression">5 × (8 - 3) + 4²</span></p>
                    
                    <div class="mt-3 bg-blue-900/20 p-4 rounded-lg">
                        <p class="text-blue-300 font-bold">Método de sustitución:</p>
                        <div class="text-gray-300 mt-2 space-y-2">
                            <p>Llamemos A = (8 - 3) = 5</p>
                            <p>Llamemos B = 4² = 16</p>
                            <p>Ahora: 5 × A + B = 5 × 5 + 16 = 25 + 16 = 41</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Técnica 3: Calculadora -->
            <div class="bg-gray-800 bg-opacity-40 p-5 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">3</span>
                    Uso correcto de la calculadora
                </h4>
                
                <p class="text-gray-300 mb-4">
                    Las calculadoras científicas están programadas para seguir la jerarquía de operaciones, 
                    pero debes ingresar la expresión correctamente.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-blue-900/20 p-4 rounded-lg">
                        <p class="text-blue-300 font-bold mb-2">Forma correcta:</p>
                        <p class="text-gray-300">Ingresar la expresión completa antes de presionar =</p>
                        <div class="bg-gray-800 mt-2 p-3 rounded-lg text-center">
                            <span class="math-expression">7 + 6 × 2 - 4</span>
                        </div>
                        <p class="text-gray-300 mt-2">Resultado: 15</p>
                    </div>
                    
                    <div class="bg-red-900/20 p-4 rounded-lg">
                        <p class="text-red-300 font-bold mb-2">Errores comunes:</p>
                        <p class="text-gray-300">Calcular secuencialmente sin considerar PEMDAS</p>
                        <div class="bg-gray-800 mt-2 p-3 rounded-lg text-center">
                            <span class="math-expression">7 + 6 = 13 × 2 = 26 - 4 = 22</span>
                        </div>
                        <p class="text-gray-300 mt-2">Resultado incorrecto: 22</p>
                    </div>
                </div>
            </div>
            
            <!-- Técnica 4: Estimación -->
            <div class="bg-gray-800 bg-opacity-40 p-5 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">4</span>
                    Estimación y verificación de magnitud
                </h4>
                
                <p class="text-gray-300 mb-4">
                    Estima aproximadamente cuál debería ser el orden de magnitud del resultado para 
                    detectar errores significativos.
                </p>
                
                <div class="equation-box">
                    <p class="text-gray-300 mb-2">Ejemplo: <span class="math-expression">98 ÷ 7 × 3 + 12</span></p>
                    
                    <div class="mt-3 bg-blue-900/20 p-4 rounded-lg">
                        <p class="text-blue-300 font-bold">Estimación:</p>
                        <div class="text-gray-300 mt-2">
                            <p>98 ÷ 7 es aproximadamente 14</p>
                            <p>14 × 3 es aproximadamente 42</p>
                            <p>42 + 12 es aproximadamente 54</p>
                            <p>Si tu resultado es algo como 5 o 500, probablemente hay un error.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tabla de errores comunes -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-white mb-4">Errores comunes y cómo evitarlos</h4>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700 bg-gray-800 rounded-lg">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Error</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Ejemplo incorrecto</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Forma correcta</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">Calcular de izquierda a derecha ignorando PEMDAS</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-300"><span class="math-expression">2 + 3 × 4 = 5 × 4 = 20</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-300"><span class="math-expression">2 + 3 × 4 = 2 + 12 = 14</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">Confundir el orden de MD y AS</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-300"><span class="math-expression">8 - 4 + 2 × 3 = 8 - 4 + 6 = 10</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-300"><span class="math-expression">8 - 4 + 2 × 3 = 8 - 4 + 6 = 4 + 6 = 10</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">Calcular exponentes después de multiplicación</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-300"><span class="math-expression">2 × 3² = 2 × 3 = 6² = 36</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-300"><span class="math-expression">2 × 3² = 2 × 9 = 18</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Consejo final -->
    <div class="bg-blue-900/20 border-l-4 border-blue-500 p-5 rounded-r-lg mb-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3">
                <h5 class="text-lg font-medium text-white">Consejo para el examen</h5>
                <p class="text-gray-300 mt-1">
                    En el examen de la EPN, siempre verifica tus respuestas con al menos una de estas técnicas. 
                    Incluso si estás bajo presión de tiempo, una rápida estimación puede ayudarte a detectar 
                    errores graves. Recuerda que en matemáticas, es más importante obtener la respuesta correcta 
                    que resolver rápidamente.
                </p>
            </div>
        </div>
    </div>
</section>
