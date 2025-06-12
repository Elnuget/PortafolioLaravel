<div class="mt-8">
    <h3 class="text-2xl font-semibold text-red-400 mb-4">Cálculo del MCD y MCM a partir de la Descomposición en Factores Primos</h3>
    <p class="mb-2">Una vez que los números están descompuestos en sus factores primos, podemos calcular el Máximo Común Divisor (MCD) y el Mínimo Común Múltiplo (MCM) de la siguiente manera:</p>
    
    <h4 class="text-xl font-semibold text-red-300 mt-6 mb-2">Máximo Común Divisor (MCD)</h4>
    <p class="mb-3">El MCD de dos o más números es el producto de sus factores primos comunes, elevados al menor exponente con el que aparecen.</p>
    <p class="mb-2"><strong>Pasos:</strong></p>
    <ol class="list-decimal list-inside mb-4 space-y-1">
        <li>Descomponer cada número en sus factores primos.</li>
        <li>Identificar los factores primos comunes a todas las descomposiciones.</li>
        <li>Para cada factor común, elegir el que tenga el menor exponente.</li>
        <li>Multiplicar estos factores comunes con su menor exponente.</li>
    </ol>
    <p class="mb-2"><strong>Ejemplo: Calcular el MCD de 12 y 18</strong></p>
    <p class="mb-1">Descomposición de 12: <code class="bg-gray-700 px-2 py-1 rounded">2² × 3</code></p>
    <p class="mb-1">Descomposición de 18: <code class="bg-gray-700 px-2 py-1 rounded">2 × 3²</code></p>
    <p class="mb-1">Factores comunes: 2 y 3.</p>
    <p class="mb-1">Menor exponente para 2: 2¹ (de 18)</p>
    <p class="mb-1">Menor exponente para 3: 3¹ (de 12)</p>
    <p class="mb-3">MCD(12, 18) = <code class="bg-gray-700 px-2 py-1 rounded">2¹ × 3¹ = 2 × 3 = 6</code></p>

    <h4 class="text-xl font-semibold text-red-300 mt-6 mb-2">Mínimo Común Múltiplo (MCM)</h4>
    <p class="mb-3">El MCM de dos o más números es el producto de todos sus factores primos (comunes y no comunes), elevados al mayor exponente con el que aparecen.</p>
    <p class="mb-2"><strong>Pasos:</strong></p>
    <ol class="list-decimal list-inside mb-4 space-y-1">
        <li>Descomponer cada número en sus factores primos.</li>
        <li>Identificar todos los factores primos que aparecen en cualquiera de las descomposiciones (comunes y no comunes).</li>
        <li>Para cada factor, elegir el que tenga el mayor exponente.</li>
        <li>Multiplicar estos factores con su mayor exponente.</li>
    </ol>
    <p class="mb-2"><strong>Ejemplo: Calcular el MCM de 12 y 18</strong></p>
    <p class="mb-1">Descomposición de 12: <code class="bg-gray-700 px-2 py-1 rounded">2² × 3</code></p>
    <p class="mb-1">Descomposición de 18: <code class="bg-gray-700 px-2 py-1 rounded">2 × 3²</code></p>
    <p class="mb-1">Factores comunes y no comunes: 2 y 3.</p>
    <p class="mb-1">Mayor exponente para 2: 2² (de 12)</p>
    <p class="mb-1">Mayor exponente para 3: 3² (de 18)</p>
    <p>MCM(12, 18) = <code class="bg-gray-700 px-2 py-1 rounded">2² × 3² = 4 × 9 = 36</code></p>
</div>
