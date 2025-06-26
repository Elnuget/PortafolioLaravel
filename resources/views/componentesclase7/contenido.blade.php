<!-- Contenido Principal - Progresiones -->
<div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8">
    
    <!-- Objetivos de Aprendizaje -->
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center">
            🎯 Objetivos de Aprendizaje
        </h2>
        <ul class="space-y-2 text-gray-700">
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Identificar progresiones aritméticas y geométricas</li>
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Calcular términos usando fórmulas matemáticas</li>
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Encontrar sumas de progresiones finitas e infinitas</li>
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Resolver problemas de aplicación práctica</li>
        </ul>
    </div>

    <!-- Progresión Aritmética -->
    <div class="mb-8 p-6 bg-blue-50 rounded-xl border-l-4 border-blue-500">
        <h3 class="text-2xl font-bold text-blue-700 mb-4">📈 Progresión Aritmética</h3>
        <p class="text-gray-700 mb-4">Secuencia donde cada término se obtiene sumando una <strong>diferencia constante (d)</strong> al anterior.</p>
        
        <div class="bg-white p-4 rounded-lg mb-4">
            <p class="text-lg text-center">
                Ejemplo: <span class="font-mono text-blue-600">2, 5, 8, 11, 14, 17, ...</span> 
                <span class="text-blue-600 ml-2">(d = 3)</span>
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4 mb-6">
            <div class="bg-white p-4 rounded-lg border-2 border-blue-200">
                <h4 class="font-bold text-blue-600 mb-3">Fórmula del término n-ésimo:</h4>
                <div class="text-center text-xl">
                    $$a_n = a_1 + (n-1) \cdot d$$
                </div>
                <p class="text-sm text-gray-600 mt-2">Donde: a₁ = primer término, d = diferencia común</p>
            </div>
            <div class="bg-white p-4 rounded-lg border-2 border-blue-200">
                <h4 class="font-bold text-blue-600 mb-3">Suma de n términos:</h4>
                <div class="text-center text-xl">
                    $$S_n = \frac{n(a_1 + a_n)}{2}$$
                </div>
                <p class="text-sm text-gray-600 mt-2">O también: $$S_n = \frac{n[2a_1 + (n-1)d]}{2}$$</p>
            </div>
        </div>

        <!-- Ejemplo Detallado Aritmética -->
        <div class="bg-blue-100 p-4 rounded-lg">
            <h4 class="font-bold text-blue-700 mb-3">📚 Ejemplo Detallado:</h4>
            <p class="mb-2"><strong>Problema:</strong> En una progresión aritmética, a₁ = 7 y d = 4. Encuentra a₁₀ y S₁₀.</p>
            
            <div class="grid md:grid-cols-2 gap-4 mt-3">
                <div class="bg-white p-3 rounded">
                    <p class="font-semibold text-blue-600">Solución para a₁₀:</p>
                    <div class="text-sm">
                        $$a_{10} = a_1 + (10-1) \cdot d$$
                        $$a_{10} = 7 + 9 \cdot 4$$
                        $$a_{10} = 7 + 36 = 43$$
                    </div>
                </div>
                <div class="bg-white p-3 rounded">
                    <p class="font-semibold text-blue-600">Solución para S₁₀:</p>
                    <div class="text-sm">
                        $$S_{10} = \frac{10(7 + 43)}{2}$$
                        $$S_{10} = \frac{10 \cdot 50}{2}$$
                        $$S_{10} = 250$$
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Progresión Geométrica -->
    <div class="mb-8 p-6 bg-green-50 rounded-xl border-l-4 border-green-500">
        <h3 class="text-2xl font-bold text-green-700 mb-4">📊 Progresión Geométrica</h3>
        <p class="text-gray-700 mb-4">Secuencia donde cada término se obtiene multiplicando por una <strong>razón constante (r)</strong>.</p>
        
        <div class="bg-white p-4 rounded-lg mb-4">
            <p class="text-lg text-center">
                Ejemplo: <span class="font-mono text-green-600">3, 6, 12, 24, 48, 96, ...</span> 
                <span class="text-green-600 ml-2">(r = 2)</span>
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4 mb-6">
            <div class="bg-white p-4 rounded-lg border-2 border-green-200">
                <h4 class="font-bold text-green-600 mb-3">Fórmula del término n-ésimo:</h4>
                <div class="text-center text-xl">
                    $$a_n = a_1 \cdot r^{(n-1)}$$
                </div>
                <p class="text-sm text-gray-600 mt-2">Donde: a₁ = primer término, r = razón común</p>
            </div>
            <div class="bg-white p-4 rounded-lg border-2 border-green-200">
                <h4 class="font-bold text-green-600 mb-3">Suma de n términos:</h4>
                <div class="text-center text-xl">
                    $$S_n = a_1 \cdot \frac{r^n - 1}{r - 1}$$ 
                </div>
                <p class="text-sm text-gray-600 mt-2">Para r ≠ 1</p>
            </div>
        </div>

        <!-- Ejemplo Detallado Geométrica -->
        <div class="bg-green-100 p-4 rounded-lg">
            <h4 class="font-bold text-green-700 mb-3">📚 Ejemplo Detallado:</h4>
            <p class="mb-2"><strong>Problema:</strong> En una progresión geométrica, a₁ = 5 y r = 3. Encuentra a₆ y S₆.</p>
            
            <div class="grid md:grid-cols-2 gap-4 mt-3">
                <div class="bg-white p-3 rounded">
                    <p class="font-semibold text-green-600">Solución para a₆:</p>
                    <div class="text-sm">
                        $$a_6 = a_1 \cdot r^{(6-1)}$$
                        $$a_6 = 5 \cdot 3^5$$
                        $$a_6 = 5 \cdot 243 = 1215$$
                    </div>
                </div>
                <div class="bg-white p-3 rounded">
                    <p class="font-semibold text-green-600">Solución para S₆:</p>
                    <div class="text-sm">
                        $$S_6 = 5 \cdot \frac{3^6 - 1}{3 - 1}$$
                        $$S_6 = 5 \cdot \frac{729 - 1}{2}$$
                        $$S_6 = 5 \cdot 364 = 1820$$
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ejercicios Prácticos -->
    <div class="mb-8 p-6 bg-purple-50 rounded-xl border-l-4 border-purple-500">
        <h3 class="text-2xl font-bold text-purple-700 mb-4">✏️ Ejercicios para Practicar</h3>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Ejercicios Aritméticos -->
            <div class="bg-white p-4 rounded-lg border-2 border-purple-200">
                <h4 class="font-bold text-purple-600 mb-3">Progresiones Aritméticas:</h4>
                <div class="space-y-3 text-sm">
                    <div class="p-3 bg-purple-50 rounded">
                        <p class="font-semibold">Ejercicio 1:</p>
                        <p>Encuentra el 15° término de: 4, 7, 10, 13, ...</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-purple-600 hover:text-purple-800">Ver solución</summary>
                            <div class="mt-2 p-2 bg-white rounded">
                                <p>d = 3, a₁ = 4</p>
                                <p>$$a_{15} = 4 + (15-1) \cdot 3 = 4 + 42 = 46$$</p>
                            </div>
                        </details>
                    </div>
                    
                    <div class="p-3 bg-purple-50 rounded">
                        <p class="font-semibold">Ejercicio 2:</p>
                        <p>Suma de los primeros 20 términos de: 1, 4, 7, 10, ...</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-purple-600 hover:text-purple-800">Ver solución</summary>
                            <div class="mt-2 p-2 bg-white rounded">
                                <p>d = 3, a₁ = 1, n = 20</p>
                                <p>$$S_{20} = \frac{20[2(1) + (20-1) \cdot 3]}{2} = 610$$</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>

            <!-- Ejercicios Geométricos -->
            <div class="bg-white p-4 rounded-lg border-2 border-purple-200">
                <h4 class="font-bold text-purple-600 mb-3">Progresiones Geométricas:</h4>
                <div class="space-y-3 text-sm">
                    <div class="p-3 bg-purple-50 rounded">
                        <p class="font-semibold">Ejercicio 3:</p>
                        <p>Encuentra el 8° término de: 2, 6, 18, 54, ...</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-purple-600 hover:text-purple-800">Ver solución</summary>
                            <div class="mt-2 p-2 bg-white rounded">
                                <p>r = 3, a₁ = 2</p>
                                <p>$$a_8 = 2 \cdot 3^{(8-1)} = 2 \cdot 3^7 = 4374$$</p>
                            </div>
                        </details>
                    </div>
                    
                    <div class="p-3 bg-purple-50 rounded">
                        <p class="font-semibold">Ejercicio 4:</p>
                        <p>Suma de los primeros 6 términos de: 1, 2, 4, 8, ...</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-purple-600 hover:text-purple-800">Ver solución</summary>
                            <div class="mt-2 p-2 bg-white rounded">
                                <p>r = 2, a₁ = 1, n = 6</p>
                                <p>$$S_6 = 1 \cdot \frac{2^6 - 1}{2 - 1} = 63$$</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Casos Especiales -->
    <div class="p-6 bg-orange-50 rounded-xl border-l-4 border-orange-500">
        <h3 class="text-2xl font-bold text-orange-700 mb-4">⚠️ Casos Especiales</h3>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-orange-600 mb-2">Suma Infinita Geométrica:</h4>
                <p class="text-sm text-gray-600 mb-2">Cuando |r| < 1:</p>
                <div class="text-center">
                    $$S_{\infty} = \frac{a_1}{1-r}$$
                </div>
                <p class="text-xs text-gray-500 mt-2">Ejemplo: 1, 1/2, 1/4, 1/8, ... → S∞ = 2</p>
            </div>
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-orange-600 mb-2">Identificación Rápida:</h4>
                <ul class="text-sm space-y-1">
                    <li>• <strong>Aritmética:</strong> Diferencias constantes</li>
                    <li>• <strong>Geométrica:</strong> Cocientes constantes</li>
                    <li>• Verifica los primeros términos</li>
                    <li>• Usa las fórmulas apropiadas</li>
                </ul>
            </div>
        </div>
    </div>

</div>
