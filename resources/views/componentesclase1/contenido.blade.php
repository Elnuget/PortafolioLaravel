<!-- Componente de contenido principal -->
<div class="bg-gray-900 backdrop-blur-lg bg-opacity-80 rounded-xl shadow-2xl p-8 border-l-4 border-red-600 font-['Poppins',sans-serif] overflow-hidden relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-red-600 opacity-5 rounded-full -mt-12 -mr-12"></div>
    
    <h2 class="text-3xl font-bold text-white mb-8 flex items-center">
        <span class="bg-red-600 w-10 h-10 rounded-lg flex items-center justify-center mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
        </span>
        Contenido de la Clase
    </h2>
    
    <div class="prose max-w-none text-gray-300">
        <h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
            <span class="mr-2">01</span>
            <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
            Objetivos de Aprendizaje
        </h3>
        <ul class="list-none text-gray-300 mb-8 space-y-3">
            <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Dominar conceptos avanzados de teoría de números y divisibilidad</span>
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Implementar algoritmos optimizados para el cálculo del MCD</span>
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Aplicar propiedades avanzadas en la relación entre MCD y MCM</span>
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Desarrollar aplicaciones prácticas en criptografía y teoría de códigos</span>
            </li>
        </ul>

        <h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
            <span class="mr-2">02</span>
            <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
            Temas Cubiertos
        </h3>
        <div class="bg-black bg-opacity-40 rounded-xl p-6 mb-8 border-l-4 border-red-500">
            <ol class="list-none text-gray-300 space-y-4">
                <li class="flex items-center">
                    <span class="bg-red-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-white font-bold flex-shrink-0">1</span>
                    <span>Teoremas fundamentales de la aritmética y su aplicación en divisibilidad</span>
                </li>
                <li class="flex items-center">
                    <span class="bg-red-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-white font-bold flex-shrink-0">2</span>
                    <span>Algoritmo de Euclides extendido y sus aplicaciones en ecuaciones diofánticas</span>
                </li>
                <li class="flex items-center">
                    <span class="bg-red-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-white font-bold flex-shrink-0">3</span>
                    <span>Propiedades avanzadas del MCD y MCM en congruencias modulares</span>
                </li>
                <li class="flex items-center">
                    <span class="bg-red-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-white font-bold flex-shrink-0">4</span>
                    <span>Implementación de algoritmos optimizados en programación competitiva</span>
                </li>
            </ol>
        </div>

        <h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
            <span class="mr-2">03</span>
            <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
            Fórmulas Importantes
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-gradient-to-br from-red-900 to-black border border-red-700 rounded-xl p-5 shadow-lg transform transition hover:scale-105">
                <h4 class="font-bold text-white mb-3 flex items-center">
                    <span class="text-red-400 mr-2">🧮</span> Algoritmo de Euclides Extendido
                </h4>
                <div class="text-gray-200 text-sm font-mono bg-black bg-opacity-60 p-4 rounded-lg">
                    MCD(a,b) = MCD(b, a mod b)<br>
                    Si b = 0, entonces MCD(a,b) = a<br><br>
                    <span class="text-red-400">// Extendido:</span><br>
                    ax + by = MCD(a,b)
                </div>
            </div>
            <div class="bg-gradient-to-br from-red-900 to-black border border-red-700 rounded-xl p-5 shadow-lg transform transition hover:scale-105">
                <h4 class="font-bold text-white mb-3 flex items-center">
                    <span class="text-red-400 mr-2">🔢</span> Relaciones Avanzadas
                </h4>
                <div class="text-gray-200 text-sm font-mono bg-black bg-opacity-60 p-4 rounded-lg">
                    MCM(a,b) = (a × b) / MCD(a,b)<br><br>
                    <span class="text-red-400">// Para múltiples números:</span><br>
                    MCD(a,b,c) = MCD(MCD(a,b),c)<br>
                    MCM(a,b,c) = MCM(MCM(a,b),c)
                </div>
            </div>
        </div>

        <h3 class="text-xl font-bold text-red-400 mb-4 flex items-center">
            <span class="mr-2">04</span>
            <span class="w-12 h-0.5 bg-red-400 mr-2"></span>
            Ejemplos Prácticos
        </h3>
        <div class="bg-black text-white rounded-xl p-6 mb-8 font-mono shadow-lg border border-red-900 overflow-x-auto">
            <div class="flex items-center mb-4">
                <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                <span class="text-gray-400 text-sm ml-2">algorithm.js</span>
            </div>
            <p class="mb-3 text-gray-400">// Implementación avanzada: Algoritmo de Euclides para MCD</p>
            <p class="text-red-400">function <span class="text-yellow-300">gcd</span>(<span class="text-blue-300">a</span>, <span class="text-blue-300">b</span>) {</p>
            <p class="ml-4">// Caso base</p>
            <p class="ml-4 text-yellow-200">if (<span class="text-blue-300">b</span> === <span class="text-green-300">0</span>) {</p>
            <p class="ml-8 text-yellow-200">return <span class="text-blue-300">a</span>;</p>
            <p class="ml-4">}</p>
            <p class="ml-4 text-gray-300">// Llamada recursiva con el módulo</p>
            <p class="ml-4 text-yellow-200">return <span class="text-yellow-300">gcd</span>(<span class="text-blue-300">b</span>, <span class="text-blue-300">a</span> % <span class="text-blue-300">b</span>);</p>
            <p class="text-red-400">}</p>
            <p class="mt-4 text-gray-400">// Ejemplo de ejecución para calcular MCD(48, 18):</p>
            <p class="text-gray-300">// 1. gcd(48, 18) → gcd(18, 48 % 18) → gcd(18, 12)</p>
            <p class="text-gray-300">// 2. gcd(18, 12) → gcd(12, 18 % 12) → gcd(12, 6)</p>
            <p class="text-gray-300">// 3. gcd(12, 6) → gcd(6, 12 % 6) → gcd(6, 0)</p>
            <p class="text-gray-300">// 4. Como b = 0, gcd(6, 0) = 6</p>
            <p class="mt-4 text-gray-400">// Por lo tanto, MCD(48, 18) = 6</p>
        </div>
    </div>
</div>
