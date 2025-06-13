<div class="mt-8 p-6 bg-gray-800 rounded-lg shadow-md">
    <h3 class="text-2xl font-semibold text-red-400 mb-6 border-b-2 border-red-500 pb-2">⚡ Dominando el MCD y MCM con Factorización Prima</h3>
    <p class="mb-6 text-gray-300 leading-relaxed">Una vez que dominas la descomposición en factores primos, calcular el <strong>Máximo Común Divisor (MCD)</strong> y el <strong>Mínimo Común Múltiplo (MCM)</strong> se convierte en un proceso sistemático y elegante. Es como tener una fórmula mágica que funciona siempre.</p>
    
    <div class="grid md:grid-cols-2 gap-6 mb-8">
        <!-- MCD Section -->
        <div class="bg-gradient-to-br from-blue-900 to-blue-800 p-6 rounded-lg shadow-lg">
            <h4 class="text-xl font-semibold text-blue-300 mb-4 flex items-center">
                <span class="bg-blue-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-white font-bold text-sm">MCD</span>
                Máximo Común Divisor
            </h4>
            <p class="mb-3 text-blue-100 text-sm leading-relaxed">El MCD es el producto de los factores primos <strong>comunes</strong> elevados al <strong>menor exponente</strong>.</p>
            
            <div class="bg-blue-800 p-3 rounded-md mb-3">
                <p class="text-blue-200 text-sm font-medium">Pasos para encontrar el MCD:</p>
                <ol class="text-blue-100 text-sm list-decimal list-inside mt-2 space-y-1">
                    <li>Descomponer cada número en factores primos</li>
                    <li>Identificar factores primos <strong>comunes</strong></li>
                    <li>Tomar el <strong>menor exponente</strong> de cada factor común</li>
                    <li>Multiplicar estos factores</li>
                </ol>
            </div>
            
            <div class="bg-blue-700 p-3 rounded-md">
                <p class="text-blue-200 text-xs font-medium mb-1">Ejemplo rápido:</p>
                <p class="text-blue-100 text-xs">12 = 2² × 3 | 18 = 2 × 3²</p>
                <p class="text-blue-100 text-xs">MCD = 2¹ × 3¹ = 6</p>
            </div>
        </div>

        <!-- MCM Section -->
        <div class="bg-gradient-to-br from-green-900 to-green-800 p-6 rounded-lg shadow-lg">
            <h4 class="text-xl font-semibold text-green-300 mb-4 flex items-center">
                <span class="bg-green-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-white font-bold text-sm">MCM</span>
                Mínimo Común Múltiplo
            </h4>
            <p class="mb-3 text-green-100 text-sm leading-relaxed">El MCM es el producto de <strong>todos</strong> los factores primos elevados al <strong>mayor exponente</strong>.</p>
            
            <div class="bg-green-800 p-3 rounded-md mb-3">
                <p class="text-green-200 text-sm font-medium">Pasos para encontrar el MCM:</p>
                <ol class="text-green-100 text-sm list-decimal list-inside mt-2 space-y-1">
                    <li>Descomponer cada número en factores primos</li>
                    <li>Listar <strong>todos</strong> los factores primos</li>
                    <li>Tomar el <strong>mayor exponente</strong> de cada factor</li>
                    <li>Multiplicar estos factores</li>
                </ol>
            </div>
            
            <div class="bg-green-700 p-3 rounded-md">
                <p class="text-green-200 text-xs font-medium mb-1">Ejemplo rápido:</p>
                <p class="text-green-100 text-xs">12 = 2² × 3 | 18 = 2 × 3²</p>
                <p class="text-green-100 text-xs">MCM = 2² × 3² = 36</p>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-medium text-red-300 mb-4">🎯 Ejemplo Detallado Paso a Paso</h4>
        <p class="mb-3 text-gray-300">Vamos a calcular el MCD y MCM de <strong>48, 72 y 96</strong>:</p>
        
        <div class="bg-gray-700 p-4 rounded-md mb-4">
            <p class="text-gray-200 font-medium mb-2">Paso 1: Descomposición en factores primos</p>
            <div class="grid md:grid-cols-3 gap-4 text-sm">
                <div class="bg-gray-600 p-3 rounded">
                    <p class="text-white font-medium mb-1">48:</p>
                    <pre class="text-gray-200"><code>48 | 2
24 | 2  
12 | 2
 6 | 2
 3 | 3
 1 |</code></pre>
                    <p class="text-yellow-300 mt-2">48 = 2⁴ × 3</p>
                </div>
                <div class="bg-gray-600 p-3 rounded">
                    <p class="text-white font-medium mb-1">72:</p>
                    <pre class="text-gray-200"><code>72 | 2
36 | 2
18 | 2
 9 | 3
 3 | 3
 1 |</code></pre>
                    <p class="text-yellow-300 mt-2">72 = 2³ × 3²</p>
                </div>
                <div class="bg-gray-600 p-3 rounded">
                    <p class="text-white font-medium mb-1">96:</p>
                    <pre class="text-gray-200"><code>96 | 2
48 | 2
24 | 2
12 | 2
 6 | 2
 3 | 3
 1 |</code></pre>
                    <p class="text-yellow-300 mt-2">96 = 2⁵ × 3</p>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <div class="bg-blue-800 p-4 rounded-md">
                <p class="text-blue-200 font-medium mb-2">Paso 2: Calculando el MCD</p>
                <p class="text-blue-100 text-sm mb-2">Factores comunes: 2 y 3</p>
                <p class="text-blue-100 text-sm mb-2">Menores exponentes:</p>
                <ul class="text-blue-100 text-sm ml-4 mb-2">
                    <li>• Para 2: min(4, 3, 5) = 3 → 2³</li>
                    <li>• Para 3: min(1, 2, 1) = 1 → 3¹</li>
                </ul>
                <p class="text-yellow-300 font-bold">MCD = 2³ × 3¹ = 8 × 3 = 24</p>
            </div>

            <div class="bg-green-800 p-4 rounded-md">
                <p class="text-green-200 font-medium mb-2">Paso 3: Calculando el MCM</p>
                <p class="text-green-100 text-sm mb-2">Todos los factores: 2 y 3</p>
                <p class="text-green-100 text-sm mb-2">Mayores exponentes:</p>
                <ul class="text-green-100 text-sm ml-4 mb-2">
                    <li>• Para 2: max(4, 3, 5) = 5 → 2⁵</li>
                    <li>• Para 3: max(1, 2, 1) = 2 → 3²</li>
                </ul>
                <p class="text-yellow-300 font-bold">MCM = 2⁵ × 3² = 32 × 9 = 288</p>
            </div>
        </div>
    </div>

    <div class="bg-purple-800 bg-opacity-30 p-4 rounded-lg border-l-4 border-purple-500">
        <h5 class="text-purple-300 font-medium mb-2">🧠 Truco Mental:</h5>
        <p class="text-purple-100 text-sm">Recuerda: Para MCD = "Común y Menor" (factores comunes con menor exponente). Para MCM = "Todo y Mayor" (todos los factores con mayor exponente).</p>
    </div>

    <div class="mt-6 bg-gray-700 p-4 rounded-lg">
        <p class="text-gray-300 text-sm"><strong>✨ Propiedad importante:</strong> Para cualquier par de números a y b: <code class="bg-gray-600 px-2 py-1 rounded text-sm">MCD(a,b) × MCM(a,b) = a × b</code></p>
        <p class="text-gray-400 text-xs mt-1">En nuestro ejemplo con 48 y 72: MCD(48,72) × MCM(48,72) = 24 × 144 = 3456 = 48 × 72 ✓</p>
    </div>
</div>
