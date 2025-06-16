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
                    <p class="text-gray-300 mb-2">Ejemplo avanzado: Verificar <span class="math-expression">4^2 × √(36 - 9) ÷ (7 - 5)²</span></p>
                    
                    <div class="mt-3 bg-blue-900/20 p-4 rounded-lg">
                        <p class="text-blue-300 font-bold">Método de sustitución:</p>
                        <div class="text-gray-300 mt-2 space-y-2">
                            <p>Llamemos A = 4² = 16</p>
                            <p>Llamemos B = √(36 - 9) = √27 ≈ 5.2</p>
                            <p>Llamemos C = (7 - 5)² = 2² = 4</p>
                            <p>Ahora: A × B ÷ C = 16 × 5.2 ÷ 4 = 83.2 ÷ 4 = 20.8</p>
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
                    <p class="text-gray-300 mb-2">Ejemplo avanzado: <span class="math-expression">98.5 ÷ 6.9 × 3.2 + 12.7 - 4^2</span></p>
                    
                    <div class="mt-3 bg-blue-900/20 p-4 rounded-lg">
                        <p class="text-blue-300 font-bold">Estimación:</p>
                        <div class="text-gray-300 mt-2">
                            <p>98.5 ÷ 6.9 es aproximadamente 100 ÷ 7 ≈ 14.3</p>
                            <p>14.3 × 3.2 es aproximadamente 14 × 3 ≈ 42</p>
                            <p>42 + 12.7 es aproximadamente 42 + 13 = 55</p>
                            <p>4^2 = 16</p>
                            <p>55 - 16 ≈ 39</p>
                            <p>Si tu resultado final está alrededor de 39, probablemente es correcto.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Técnica 5: Uso de propiedades matemáticas -->
            <div class="bg-gray-800 bg-opacity-40 p-5 rounded-lg">
                <h4 class="text-xl font-bold text-white mb-3 flex items-center">
                    <span class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-3 text-sm font-bold">5</span>
                    Uso de propiedades matemáticas
                </h4>
                
                <p class="text-gray-300 mb-4">
                    Utiliza propiedades como la distributiva, asociativa o conmutativa para reorganizar 
                    la expresión de manera que sea más fácil de calcular.
                </p>
                
                <div class="equation-box">
                    <p class="text-gray-300 mb-2">Ejemplo: <span class="math-expression">4 × (25 + 75) - 3 × (15 + 5)</span></p>
                    
                    <div class="mt-3 bg-blue-900/20 p-4 rounded-lg">
                        <p class="text-blue-300 font-bold">Usando la propiedad distributiva:</p>
                        <div class="text-gray-300 mt-2">
                            <p>4 × (25 + 75) - 3 × (15 + 5)</p>
                            <p>4 × 100 - 3 × 20</p>
                            <p>400 - 60 = 340</p>
                        </div>
                        
                        <p class="text-blue-300 font-bold mt-4">Método alternativo:</p>
                        <div class="text-gray-300 mt-2">
                            <p>4 × (25 + 75) - 3 × (15 + 5)</p>
                            <p>= 4 × 25 + 4 × 75 - 3 × 15 - 3 × 5 (propiedad distributiva)</p>
                            <p>= 100 + 300 - 45 - 15</p>
                            <p>= 400 - 60 = 340</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Ejercicios de verificación para estudiantes -->
    <div class="bg-gradient-to-br from-blue-900/30 to-gray-900 rounded-xl p-6 border border-blue-800/30 mb-8">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
            </svg>
            Ejercicios de verificación para estudiantes
        </h4>
        
        <p class="text-gray-300 mb-6">
            Para cada una de las siguientes expresiones, resuelve utilizando PEMDAS y luego verifica tu respuesta
            aplicando al menos dos de las técnicas de verificación explicadas:
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-gray-800 bg-opacity-50 p-4 rounded-lg">
                <h5 class="text-lg font-bold text-white mb-2">Ejercicio 1</h5>
                <p class="text-center text-gray-300 mb-3">
                    <span class="math-expression">5² ÷ (10 - 5) × 3 - √(4 + 5)</span>
                </p>
                <p class="text-blue-300 text-sm">
                    Utiliza el método de sustitución y el método de estimación para verificar tu respuesta.
                </p>
            </div>
            
            <div class="bg-gray-800 bg-opacity-50 p-4 rounded-lg">
                <h5 class="text-lg font-bold text-white mb-2">Ejercicio 2</h5>
                <p class="text-center text-gray-300 mb-3">
                    <span class="math-expression">3 × [4² - (12 ÷ 6)] + 2³ ÷ 4</span>
                </p>
                <p class="text-blue-300 text-sm">
                    Utiliza el método de doble cálculo y la calculadora para comprobar tu respuesta.
                </p>
            </div>
        </div>
        
        <div class="bg-gray-800 bg-opacity-70 p-5 rounded-lg">
            <h5 class="text-lg font-bold text-white mb-3">Ejercicio avanzado: Detección de errores</h5>
            <p class="text-gray-300 mb-4">
                Encuentra los errores en los siguientes cálculos y corrige el procedimiento:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-red-900/20 p-4 rounded-lg">
                    <p class="text-red-300 font-bold">Cálculo incorrecto:</p>
                    <div class="text-gray-300 mt-2 space-y-1">
                        <p>3 + 4 × 2² - 8 ÷ 4</p>
                        <p>= 3 + 4 × 4 - 8 ÷ 4</p>
                        <p>= 3 + 16 - 8 ÷ 4</p>
                        <p>= 19 - 8 ÷ 4</p>
                        <p>= 19 - 2</p>
                        <p>= 17</p>
                    </div>
                </div>
                
                <div class="bg-red-900/20 p-4 rounded-lg">
                    <p class="text-red-300 font-bold">Cálculo incorrecto:</p>
                    <div class="text-gray-300 mt-2 space-y-1">
                        <p>6 × (3 + 2) ÷ 3 - 4²</p>
                        <p>= 6 × 5 ÷ 3 - 4²</p>
                        <p>= 30 ÷ 3 - 4²</p>
                        <p>= 10 - 4²</p>
                        <p>= 10 - 16</p>
                        <p>= -6</p>
                    </div>
                </div>
            </div>
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
                <h5 class="text-lg font-medium text-white">Consejo para el examen</h5>                <p class="text-gray-300 mt-1">
                    En el examen de admisión universitaria, siempre verifica tus respuestas con al menos dos de estas técnicas. 
                    Presta especial atención a los problemas que mezclan múltiples operaciones, especialmente aquellos con 
                    fracciones, radicales y potencias. Un error en la aplicación de la jerarquía puede cambiar completamente 
                    el resultado final.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Ejercicio interactivo con notas musicales -->
    <div class="bg-gradient-to-br from-amber-900/30 to-red-900/30 rounded-xl p-6 border border-amber-500/30 mt-8">
        <h4 class="text-xl font-bold text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
            </svg>
            Sinfonía Matemática: "Armonía de Operaciones"
        </h4>
        
        <div class="bg-gray-800 bg-opacity-70 p-5 rounded-lg">
            <p class="text-gray-300 mb-4">
                En nuestra orquesta matemática, cada nota musical tiene un valor numérico asignado:
            </p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🎵</span>
                    <p class="text-amber-300 font-semibold mt-1">Do = 2</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🎶</span>
                    <p class="text-amber-300 font-semibold mt-1">Re = 4</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🎼</span>
                    <p class="text-amber-300 font-semibold mt-1">Mi = 5</p>
                </div>
                <div class="bg-gray-900/70 p-3 rounded-lg text-center">
                    <span class="text-2xl">🎹</span>
                    <p class="text-amber-300 font-semibold mt-1">Fa = 3</p>
                </div>
            </div>
            
            <p class="text-white font-bold mb-3">Resuelve estas "composiciones matemáticas" y verifica tus respuestas usando al menos dos técnicas de verificación:</p>
            
            <div class="space-y-5">
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">1. (🎵 + 🎶) × 🎼 - 🎹²</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="bg-gray-900/50 p-3 rounded-lg">
                            <p class="text-amber-300 font-bold mb-1">Método 1: Resolución directa</p>
                            <div class="text-gray-400 text-sm space-y-1 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                <p>(2 + 4) × 5 - 3²</p>
                                <p>6 × 5 - 9</p>
                                <p>30 - 9 = 21</p>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/50 p-3 rounded-lg">
                            <p class="text-amber-300 font-bold mb-1">Método 2: Sustitución</p>
                            <div class="text-gray-400 text-sm space-y-1 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                <p>A = (2 + 4) = 6</p>
                                <p>B = 3² = 9</p>
                                <p>A × 5 - B = 6 × 5 - 9 = 30 - 9 = 21</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">2. 🎵² × (🎼 - 🎶 ÷ 🎵) + √🎹</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="bg-gray-900/50 p-3 rounded-lg">
                            <p class="text-amber-300 font-bold mb-1">Método 1: Resolución paso a paso</p>
                            <button class="bg-amber-700 hover:bg-amber-600 text-white text-xs font-bold py-1 px-3 rounded transition mt-2">Mostrar pasos</button>
                        </div>
                        
                        <div class="bg-gray-900/50 p-3 rounded-lg">
                            <p class="text-amber-300 font-bold mb-1">Método 2: Estimación</p>
                            <button class="bg-amber-700 hover:bg-amber-600 text-white text-xs font-bold py-1 px-3 rounded transition mt-2">Mostrar estimación</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                    <p class="text-center text-lg mb-2">3. [🎶² - (🎵 + 🎹)] ÷ {🎼 - [🎹 - (🎶 - 🎵)²]}</p>
                    
                    <div class="mt-3">
                        <p class="text-amber-300 font-bold mb-1">Desafío de verificación:</p>
                        <p class="text-gray-300 text-sm">Para esta expresión compleja, aplica al menos tres técnicas de verificación diferentes para asegurar tu respuesta.</p>
                        <button class="bg-amber-700 hover:bg-amber-600 text-white text-xs font-bold py-1 px-3 rounded transition mt-2">Ver solución completa</button>
                    </div>
                </div>
            </div>
            
            <div class="bg-amber-900/20 p-4 rounded-lg mt-6">
                <h5 class="text-white font-bold mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Reflexión sobre la verificación
                </h5>
                <p class="text-gray-300 text-sm">
                    Así como en música una sola nota desafinada puede arruinar toda una sinfonía, en matemáticas un solo error 
                    en la aplicación de PEMDAS puede cambiar completamente el resultado. La verificación constante es tu "afinador matemático".
                </p>
            </div>
        </div>
    </div>
</section>
