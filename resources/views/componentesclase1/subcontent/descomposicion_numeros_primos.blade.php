<div class="mt-8">
    <h3 class="text-2xl font-semibold text-red-400 mb-4">Descomposición de un Número en Factores Primos</h3>
    <p class="mb-2">Todo número compuesto se puede expresar como un producto de factores primos de forma única, salvo el orden de los factores. Este proceso se llama descomposición en factores primos o factorización.</p>
    <p class="mb-2"><strong>Método:</strong></p>
    <ol class="list-decimal list-inside mb-4 space-y-1">
        <li>Se divide el número por el menor número primo por el que sea divisible.</li>
        <li>El cociente obtenido se vuelve a dividir por el menor número primo por el que sea divisible.</li>
        <li>Se repite el proceso hasta obtener un cociente igual a 1.</li>
        <li>El número original será igual al producto de todos los divisores primos utilizados.</li>
    </ol>
    <p class="mb-2"><strong>Ejemplo: Descomponer 60 en factores primos</strong></p>
    <div class="bg-gray-800 p-4 rounded-md mb-4">
        <pre class="text-white"><code>
  60 | 2
  30 | 2
  15 | 3
   5 | 5
   1 |
        </code></pre>
    </div>
    <p>Por lo tanto, la descomposición de 60 es: <code class="bg-gray-700 px-2 py-1 rounded">2 × 2 × 3 × 5 = 2² × 3 × 5</code></p>
</div>
