<!-- Componente de contenido principal -->
<div class="bg-white rounded-lg shadow-md p-8 border-l-4 border-red-600">
    <h2 class="text-2xl font-semibold text-red-800 mb-6">Contenido de la Clase</h2>
    
    <div class="prose max-w-none">
        <h3 class="text-lg font-medium text-gray-900 mb-3">Objetivos de Aprendizaje</h3>
        <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
            <li>Comprender los conceptos de divisibilidad</li>
            <li>Aprender a calcular el MCD de forma eficiente</li>
            <li>Entender la relación entre MCD y MCM</li>
            <li>Aplicar el algoritmo de Euclides para el MCD</li>
        </ul>

        <h3 class="text-lg font-medium text-gray-900 mb-3">Temas Cubiertos</h3>
        <div class="bg-gray-50 rounded-lg p-4 mb-6 border-l-4 border-red-500">
            <ol class="list-decimal list-inside text-gray-700 space-y-2">
                <li>Definición y propiedades del MCD</li>
                <li>Algoritmo de Euclides para calcular el MCD</li>
                <li>Relación entre MCD y MCM: MCD × MCM = a × b</li>
                <li>Implementación de algoritmos en código</li>
            </ol>
        </div>

        <h3 class="text-lg font-medium text-gray-900 mb-3">Fórmulas Importantes</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h4 class="font-medium text-red-900 mb-2">🧮 Algoritmo de Euclides</h4>
                <p class="text-gray-700 text-sm font-mono bg-gray-100 p-2 rounded">
                    MCD(a,b) = MCD(b, a mod b)<br>
                    Si b = 0, entonces MCD(a,b) = a
                </p>
            </div>
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h4 class="font-medium text-red-900 mb-2">🔢 Relación MCD y MCM</h4>
                <p class="text-gray-700 text-sm font-mono bg-gray-100 p-2 rounded">
                    MCM(a,b) = (a × b) / MCD(a,b)
                </p>
            </div>
        </div>

        <h3 class="text-lg font-medium text-gray-900 mb-3">Ejemplos Prácticos</h3>
        <div class="bg-black text-white rounded-lg p-4 mb-6 font-mono">
            <p class="mb-2">// Cálculo del MCD de 48 y 18</p>
            <p>1. MCD(48, 18) = MCD(18, 48 % 18) = MCD(18, 12)</p>
            <p>2. MCD(18, 12) = MCD(12, 18 % 12) = MCD(12, 6)</p>
            <p>3. MCD(12, 6) = MCD(6, 12 % 6) = MCD(6, 0)</p>
            <p>4. Como b = 0, MCD(6, 0) = 6</p>
            <p class="mt-2">// Por lo tanto, MCD(48, 18) = 6</p>
        </div>
    </div>
</div>
