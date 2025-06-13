<div class="mt-8 p-6 bg-gray-800 rounded-lg shadow-md">
    <h3 class="text-2xl font-semibold text-red-400 mb-6 border-b-2 border-red-500 pb-2">Descomponiendo Números en sus Ladrillos Primos</h3>
    <p class="mb-4 text-gray-300 leading-relaxed">La <strong>descomposición en factores primos</strong> (también llamada factorización prima) es el proceso de encontrar qué números primos se multiplican para obtener el número original. Es como desarmar un número en sus componentes más básicos. El <strong>Teorema Fundamental de la Aritmética</strong> nos dice que esta descomposición es única para cada número (excepto por el orden de los factores).</p>
    
    <h4 class="text-xl font-medium text-red-300 mt-6 mb-3">El Método Paso a Paso:</h4>
    <ol class="list-decimal list-inside mb-6 space-y-2 text-gray-300 pl-4">
        <li><strong>Comienza con el primo más pequeño:</strong> Toma el número que quieres descomponer y divídelo por el número primo más pequeño posible (usualmente 2, si es par).</li>
        <li><strong>Continúa dividiendo:</strong> Si la división es exacta, anota el primo y toma el cociente. Vuelve a intentar dividir este cociente por el mismo primo.</li>
        <li><strong>Prueba con el siguiente primo:</strong> Si ya no puedes dividir por el primo actual, pasa al siguiente número primo (3, luego 5, luego 7, etc.) y repite el proceso.</li>
        <li><strong>Hasta llegar a 1:</strong> Sigue dividiendo hasta que el cociente sea 1.</li>
        <li><strong>El producto final:</strong> El número original es igual al producto de todos los divisores primos que anotaste.</li>
    </ol>

    <h4 class="text-xl font-medium text-red-300 mt-6 mb-3">Ejemplo Práctico: Descomponer el número 84</h4>
    <div class="bg-gray-700 p-4 rounded-md mb-4 shadow-inner">
        <p class="text-gray-300 mb-2">Vamos a descomponer 84:</p>
        <pre class="text-white text-sm leading-loose"><code>
  84 | 2  (84 es divisible por 2, el primo más pequeño)
  42 | 2  (42 también es divisible por 2)
  21 | 3  (21 ya no es divisible por 2, pasamos a 3)
   7 | 7  (7 no es divisible por 3 ni por 5, pasamos a 7)
   1 |    (Llegamos a 1, ¡terminamos!)
        </code></pre>
    </div>
    <p class="text-gray-300 leading-relaxed">Entonces, la descomposición en factores primos de 84 es: <code class="bg-red-500 text-white px-2 py-1 rounded-md text-md">2 × 2 × 3 × 7</code>.</p>
    <p class="text-gray-300 leading-relaxed">Podemos escribir esto de forma más compacta usando potencias: <code class="bg-red-500 text-white px-2 py-1 rounded-md text-md">2² × 3 × 7</code>.</p>

    <div class="mt-8">
        <h4 class="text-xl font-medium text-red-300 mb-3">Otro Ejemplo: Descomponer 130</h4>
        <div class="bg-gray-700 p-4 rounded-md mb-4 shadow-inner">
            <pre class="text-white text-sm leading-loose"><code>
  130 | 2
   65 | 5
   13 | 13
    1 |
            </code></pre>
        </div>
        <p class="text-gray-300 leading-relaxed">Descomposición de 130: <code class="bg-red-500 text-white px-2 py-1 rounded-md text-md">2 × 5 × 13</code>.</p>
    </div>

    <div class="mt-8 bg-gray-700 p-4 rounded-lg shadow">
        <p class="italic text-sm text-red-200"><strong>Consejo útil:</strong> Aprenderse los primeros números primos (2, 3, 5, 7, 11, 13) te ayudará a agilizar mucho este proceso.</p>
    </div>
</div>
