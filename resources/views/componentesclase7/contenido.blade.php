<!-- Contenido Principal - Progresiones -->
<div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8">
    
    <!-- Objetivos de Aprendizaje -->
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center">
            🎯 Objetivos de Aprendizaje
        </h2>
        <ul class="space-y-2 text-gray-700">
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Identificar progresiones aritméticas y geométricas</li>
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Calcular términos usando fórmulas</li>
            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Encontrar sumas de progresiones</li>
        </ul>
    </div>

    <!-- Progresión Aritmética -->
    <div class="mb-8 p-6 bg-blue-50 rounded-xl border-l-4 border-blue-500">
        <h3 class="text-2xl font-bold text-blue-700 mb-4">📈 Progresión Aritmética</h3>
        <p class="text-gray-700 mb-4">Secuencia donde cada término se obtiene sumando una <strong>diferencia constante</strong> al anterior.</p>
        
        <div class="bg-white p-4 rounded-lg mb-4">
            <p class="font-mono text-lg text-center">2, 5, 8, 11, 14, ... <span class="text-blue-600">(d = 3)</span></p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-blue-600 mb-2">Fórmula del término n:</h4>
                <p class="font-mono text-lg">aₙ = a₁ + (n-1)d</p>
            </div>
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-blue-600 mb-2">Suma de n términos:</h4>
                <p class="font-mono text-lg">Sₙ = n(a₁ + aₙ)/2</p>
            </div>
        </div>
    </div>

    <!-- Progresión Geométrica -->
    <div class="mb-8 p-6 bg-green-50 rounded-xl border-l-4 border-green-500">
        <h3 class="text-2xl font-bold text-green-700 mb-4">📊 Progresión Geométrica</h3>
        <p class="text-gray-700 mb-4">Secuencia donde cada término se obtiene multiplicando por una <strong>razón constante</strong>.</p>
        
        <div class="bg-white p-4 rounded-lg mb-4">
            <p class="font-mono text-lg text-center">3, 6, 12, 24, 48, ... <span class="text-green-600">(r = 2)</span></p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-green-600 mb-2">Fórmula del término n:</h4>
                <p class="font-mono text-lg">aₙ = a₁ × r^(n-1)</p>
            </div>
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-green-600 mb-2">Suma de n términos:</h4>
                <p class="font-mono text-lg">Sₙ = a₁(rⁿ-1)/(r-1)</p>
            </div>
        </div>
    </div>

    <!-- Ejemplos Prácticos -->
    <div class="p-6 bg-yellow-50 rounded-xl border-l-4 border-yellow-500">
        <h3 class="text-2xl font-bold text-yellow-700 mb-4">💡 Ejemplos Rápidos</h3>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-blue-600 mb-2">Aritmética:</h4>
                <p class="text-sm text-gray-600 mb-2">Secuencia: 5, 9, 13, 17, ...</p>
                <p class="text-sm"><strong>d = 4</strong></p>
                <p class="text-sm">a₈ = 5 + (8-1)×4 = <strong>33</strong></p>
            </div>
            <div class="bg-white p-4 rounded-lg">
                <h4 class="font-bold text-green-600 mb-2">Geométrica:</h4>
                <p class="text-sm text-gray-600 mb-2">Secuencia: 2, 6, 18, 54, ...</p>
                <p class="text-sm"><strong>r = 3</strong></p>
                <p class="text-sm">a₅ = 2 × 3⁴ = <strong>162</strong></p>
            </div>
        </div>
    </div>

</div>
