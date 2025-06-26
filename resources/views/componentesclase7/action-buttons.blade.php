<!-- Botones de Acción Mejorados -->
<div class="flex flex-wrap justify-center gap-4 mt-8">
    <button onclick="toggleExercises()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
        📝 Más Ejercicios Prácticos
    </button>
    <button onclick="showCalculator()" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
        🧮 Calculadora de Progresiones
    </button>
    <button onclick="showFormulas()" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
        📊 Visualizar Gráficas
    </button>
    <button onclick="downloadSummary()" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
        📚 Descargar Resumen
    </button>
    <button onclick="toggleQuiz()" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
        🎯 Examen Rápido
    </button>
</div>

<!-- Modal para ejercicios adicionales -->
<div id="exercisesModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto p-8">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-800">📝 Ejercicios Adicionales</h3>
            <button onclick="toggleExercises()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Ejercicios Avanzados Aritmética -->
            <div class="bg-blue-50 p-6 rounded-xl">
                <h4 class="font-bold text-blue-700 mb-4">🔢 Ejercicios Avanzados - Aritmética</h4>
                <div class="space-y-4">
                    <div class="p-4 bg-white rounded-lg">
                        <p class="font-semibold mb-2">Problema 1:</p>
                        <p class="text-sm mb-2">El 5° término de una P.A. es 23 y el 12° término es 65. Encuentra el primer término y la diferencia común.</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-blue-600">Ver solución</summary>
                            <div class="mt-2 p-2 bg-blue-50 rounded text-sm">
                                <p>$$a_5 = a_1 + 4d = 23$$</p>
                                <p>$$a_{12} = a_1 + 11d = 65$$</p>
                                <p>Restando: $7d = 42$, por tanto $d = 6$</p>
                                <p>$a_1 = 23 - 4(6) = -1$</p>
                            </div>
                        </details>
                    </div>
                    
                    <div class="p-4 bg-white rounded-lg">
                        <p class="font-semibold mb-2">Problema 2:</p>
                        <p class="text-sm mb-2">¿Cuántos términos de la P.A. 3, 8, 13, 18, ... suman 1365?</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-blue-600">Ver solución</summary>
                            <div class="mt-2 p-2 bg-blue-50 rounded text-sm">
                                <p>$a_1 = 3$, $d = 5$</p>
                                <p>$$S_n = \frac{n}{2}[2a_1 + (n-1)d] = 1365$$</p>
                                <p>$$\frac{n}{2}[6 + 5(n-1)] = 1365$$</p>
                                <p>Resolviendo: $n = 21$ términos</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
            
            <!-- Ejercicios Avanzados Geométrica -->
            <div class="bg-green-50 p-6 rounded-xl">
                <h4 class="font-bold text-green-700 mb-4">📈 Ejercicios Avanzados - Geométrica</h4>
                <div class="space-y-4">
                    <div class="p-4 bg-white rounded-lg">
                        <p class="font-semibold mb-2">Problema 3:</p>
                        <p class="text-sm mb-2">En una P.G., el 3° término es 20 y el 6° término es 160. Encuentra el primer término y la razón.</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-green-600">Ver solución</summary>
                            <div class="mt-2 p-2 bg-green-50 rounded text-sm">
                                <p>$$a_3 = a_1 \cdot r^2 = 20$$</p>
                                <p>$$a_6 = a_1 \cdot r^5 = 160$$</p>
                                <p>Dividiendo: $r^3 = 8$, por tanto $r = 2$</p>
                                <p>$a_1 = \frac{20}{4} = 5$</p>
                            </div>
                        </details>
                    </div>
                    
                    <div class="p-4 bg-white rounded-lg">
                        <p class="font-semibold mb-2">Problema 4:</p>
                        <p class="text-sm mb-2">Encuentra la suma infinita de: $$\frac{1}{2} + \frac{1}{4} + \frac{1}{8} + \frac{1}{16} + ...$$</p>
                        <details class="mt-2">
                            <summary class="cursor-pointer text-green-600">Ver solución</summary>
                            <div class="mt-2 p-2 bg-green-50 rounded text-sm">
                                <p>$a_1 = \frac{1}{2}$, $r = \frac{1}{2}$</p>
                                <p>Como $|r| < 1$:</p>
                                <p>$$S_∞ = \frac{a_1}{1-r} = \frac{\frac{1}{2}}{1-\frac{1}{2}} = 1$$</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para calculadora -->
<div id="calculatorModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto p-8">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-800">🧮 Calculadora de Progresiones</h3>
            <button onclick="showCalculator()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>
        
        <div class="space-y-6">
            <div class="bg-blue-50 p-4 rounded-xl">
                <h4 class="font-bold text-blue-700 mb-3">Progresión Aritmética</h4>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <input type="number" id="a1_arit" placeholder="a₁" class="p-2 border rounded">
                    <input type="number" id="d_arit" placeholder="d" class="p-2 border rounded">
                    <input type="number" id="n_arit" placeholder="n" class="p-2 border rounded">
                </div>
                <button onclick="calculateArithmetic()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Calcular</button>
                <div id="result_arit" class="mt-4 p-3 bg-white rounded border-l-4 border-blue-500 hidden"></div>
            </div>
            
            <div class="bg-green-50 p-4 rounded-xl">
                <h4 class="font-bold text-green-700 mb-3">Progresión Geométrica</h4>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <input type="number" id="a1_geom" placeholder="a₁" class="p-2 border rounded">
                    <input type="number" id="r_geom" placeholder="r" class="p-2 border rounded">
                    <input type="number" id="n_geom" placeholder="n" class="p-2 border rounded">
                </div>
                <button onclick="calculateGeometric()" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Calcular</button>
                <div id="result_geom" class="mt-4 p-3 bg-white rounded border-l-4 border-green-500 hidden"></div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleExercises() {
    const modal = document.getElementById('exercisesModal');
    modal.classList.toggle('hidden');
}

function showCalculator() {
    const modal = document.getElementById('calculatorModal');
    modal.classList.toggle('hidden');
}

function calculateArithmetic() {
    const a1 = parseFloat(document.getElementById('a1_arit').value);
    const d = parseFloat(document.getElementById('d_arit').value);
    const n = parseInt(document.getElementById('n_arit').value);
    
    if (isNaN(a1) || isNaN(d) || isNaN(n)) {
        alert('Por favor, completa todos los campos');
        return;
    }
    
    const an = a1 + (n - 1) * d;
    const sn = (n * (a1 + an)) / 2;
    
    const result = document.getElementById('result_arit');
    result.innerHTML = `
        <p><strong>Término n-ésimo:</strong> a${n} = ${an}</p>
        <p><strong>Suma de ${n} términos:</strong> S${n} = ${sn}</p>
    `;
    result.classList.remove('hidden');
}

function calculateGeometric() {
    const a1 = parseFloat(document.getElementById('a1_geom').value);
    const r = parseFloat(document.getElementById('r_geom').value);
    const n = parseInt(document.getElementById('n_geom').value);
    
    if (isNaN(a1) || isNaN(r) || isNaN(n)) {
        alert('Por favor, completa todos los campos');
        return;
    }
    
    const an = a1 * Math.pow(r, n - 1);
    const sn = r !== 1 ? a1 * (Math.pow(r, n) - 1) / (r - 1) : a1 * n;
    
    const result = document.getElementById('result_geom');
    result.innerHTML = `
        <p><strong>Término n-ésimo:</strong> a${n} = ${an}</p>
        <p><strong>Suma de ${n} términos:</strong> S${n} = ${sn.toFixed(4)}</p>
    `;
    result.classList.remove('hidden');
}

function showFormulas() {
    alert('🎯 Función en desarrollo: Visualización de gráficas interactivas próximamente');
}

function downloadSummary() {
    alert('📚 Función en desarrollo: Descarga de resumen en PDF próximamente');
}

function toggleQuiz() {
    alert('🎯 Función en desarrollo: Examen rápido interactivo próximamente');
}

// Cerrar modales al hacer clic fuera de ellos
window.onclick = function(event) {
    const exercisesModal = document.getElementById('exercisesModal');
    const calculatorModal = document.getElementById('calculatorModal');
    
    if (event.target === exercisesModal) {
        exercisesModal.classList.add('hidden');
    }
    if (event.target === calculatorModal) {
        calculatorModal.classList.add('hidden');
    }
}
</script>
