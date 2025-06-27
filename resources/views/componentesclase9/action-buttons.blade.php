<!-- Botones de acción para Clase 9: FRACCIONES -->
<div class="text-center space-y-6">
    
    <!-- Título de la sección -->
    <h3 class="text-2xl font-bold text-gray-800">🎯 Pon a Prueba tu Conocimiento</h3>
    
    <!-- Botones principales -->
    <div class="flex flex-wrap justify-center gap-4">
        <a href="#ejercicios" class="action-button bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700">
            📝 Ejercicios Práctica
        </a>
        
        <a href="#evaluacion" class="action-button bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700">
            🎯 Evaluación
        </a>
        
        <a href="{{ route('clases.index') }}" class="action-button bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700">
            📚 Todas las Clases
        </a>
    </div>
    
    <!-- Enlaces adicionales -->
    <div class="pt-4 border-t border-gray-200">
        <p class="text-gray-600 mb-3">Recursos adicionales:</p>
        <div class="flex flex-wrap justify-center gap-3 text-sm">
            <a href="#calculadora" class="text-blue-600 hover:text-blue-800 transition-colors">
                🧮 Calculadora de Fracciones
            </a>
            <a href="#ejemplos" class="text-blue-600 hover:text-blue-800 transition-colors">
                📖 Más Ejemplos
            </a>
            <a href="#formulas" class="text-blue-600 hover:text-blue-800 transition-colors">
                📋 Tabla de Conversiones
            </a>
        </div>
    </div>
    
</div>

<!-- Sección de ejercicios sin resolver -->
<div id="ejercicios" class="mt-12 content-card">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
        🎲 Miscelánea de Ejercicios
    </h2>
    <p class="text-gray-600 mb-6">Resuelve los siguientes ejercicios para dominar las fracciones:</p>
    
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Ejercicios de Clasificación y Conversión -->
        <div class="bg-blue-50 p-4 rounded-lg">
            <h4 class="font-bold text-blue-800 mb-3">📊 Clasificación y Conversión</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. Clasifica: $\frac{5}{3}$, $\frac{2}{7}$, $\frac{8}{8}$, $\frac{12}{5}$</li>
                <li>2. Convierte a número mixto: $\frac{11}{4}$, $\frac{23}{7}$, $\frac{19}{6}$</li>
                <li>3. Convierte a fracción impropia: $3\frac{2}{5}$, $2\frac{3}{8}$, $4\frac{1}{3}$</li>
                <li>4. Encuentra tres fracciones equivalentes a $\frac{2}{5}$</li>
                <li>5. Simplifica: $\frac{36}{48}$, $\frac{24}{36}$, $\frac{45}{60}$</li>
            </ol>
        </div>
        
        <!-- Ejercicios de Conversión Decimal-Fracción -->
        <div class="bg-green-50 p-4 rounded-lg">
            <h4 class="font-bold text-green-800 mb-3">🔄 Decimal ↔ Fracción</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. Convierte a fracción: 0.8, 0.375, 0.625</li>
                <li>2. Convierte a fracción: 0.666..., 0.1818..., 0.272727...</li>
                <li>3. Convierte a fracción: 2.75, 1.2, 3.125</li>
                <li>4. Convierte a decimal: $\frac{3}{8}$, $\frac{5}{6}$, $\frac{7}{12}$</li>
                <li>5. ¿Cuál es mayor: $\frac{7}{8}$ o 0.85?</li>
            </ol>
        </div>
        
        <!-- Ejercicios de Suma y Resta -->
        <div class="bg-purple-50 p-4 rounded-lg">
            <h4 class="font-bold text-purple-800 mb-3">➕➖ Suma y Resta</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. $\frac{3}{7} + \frac{2}{7}$</li>
                <li>2. $\frac{5}{6} - \frac{1}{6}$</li>
                <li>3. $\frac{2}{3} + \frac{1}{4}$</li>
                <li>4. $\frac{5}{8} - \frac{1}{3}$</li>
                <li>5. $1\frac{2}{5} + 2\frac{1}{3}$</li>
                <li>6. $3\frac{1}{4} - 1\frac{2}{3}$</li>
            </ol>
        </div>
        
        <!-- Ejercicios de Multiplicación y División -->
        <div class="bg-orange-50 p-4 rounded-lg">
            <h4 class="font-bold text-orange-800 mb-3">✖️➗ Multiplicación y División</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. $\frac{2}{3} \times \frac{4}{5}$</li>
                <li>2. $\frac{7}{8} \times \frac{3}{14}$</li>
                <li>3. $\frac{5}{6} \div \frac{2}{3}$</li>
                <li>4. $\frac{3}{4} \div \frac{9}{16}$</li>
                <li>5. $2\frac{1}{3} \times 1\frac{1}{2}$</li>
                <li>6. $3\frac{1}{4} \div 2\frac{1}{8}$</li>
            </ol>
        </div>

        <!-- Ejercicios Mixtos -->
        <div class="bg-indigo-50 p-4 rounded-lg">
            <h4 class="font-bold text-indigo-800 mb-3">🎯 Ejercicios Mixtos</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. $\frac{1}{2} + \frac{1}{3} - \frac{1}{6}$</li>
                <li>2. $\frac{2}{5} \times \frac{3}{4} + \frac{1}{10}$</li>
                <li>3. $(\frac{3}{4} + \frac{1}{2}) \div \frac{5}{8}$</li>
                <li>4. Ordena de menor a mayor: $\frac{2}{3}$, 0.6, $\frac{5}{8}$, 0.7</li>
                <li>5. Si $\frac{3}{4}$ de un número es 15, ¿cuál es el número?</li>
            </ol>
        </div>
        
        <!-- Problemas de Aplicación -->
        <div class="bg-pink-50 p-4 rounded-lg">
            <h4 class="font-bold text-pink-800 mb-3">🌟 Problemas de Aplicación</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. María comió $\frac{3}{8}$ de una pizza y Luis $\frac{1}{4}$. ¿Qué fracción comieron en total?</li>
                <li>2. Un tanque tiene $\frac{5}{6}$ de su capacidad. Si se consume $\frac{1}{3}$, ¿qué fracción queda?</li>
                <li>3. Una receta para 4 personas usa $2\frac{1}{2}$ tazas de harina. ¿Cuánta harina se necesita para 6 personas?</li>
                <li>4. Un corredor completó $\frac{3}{4}$ de una carrera en 45 minutos. Si mantiene el mismo ritmo, ¿cuánto tiempo total necesitará?</li>
                <li>5. De una barra de chocolate, Ana comió $\frac{1}{5}$, Pedro $\frac{2}{7}$ y Carmen $\frac{1}{3}$. ¿Qué fracción del chocolate queda?</li>
            </ol>
        </div>

        <!-- Desafíos Avanzados -->
        <div class="bg-red-50 p-4 rounded-lg">
            <h4 class="font-bold text-red-800 mb-3">🔥 Desafíos Avanzados</h4>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. Encuentra dos fracciones cuyo producto sea $\frac{2}{15}$ y su suma sea $\frac{7}{15}$</li>
                <li>2. Si $\frac{a}{b} + \frac{c}{d} = 1$ y $a + c = b + d$, demuestra que $a = b$ y $c = d$</li>
                <li>3. Convierte el decimal periódico 0.123123123... a fracción</li>
                <li>4. ¿Cuántas fracciones hay entre $\frac{1}{2}$ y $\frac{2}{3}$ con denominador menor que 10?</li>
                <li>5. Si $\frac{x}{3} + \frac{x}{4} = \frac{7}{12}$, encuentra el valor de $x$</li>
            </ol>
        </div>

        <!-- Ejercicios de Cálculo Mental -->
        <div class="bg-yellow-50 p-4 rounded-lg">
            <h4 class="font-bold text-yellow-800 mb-3">⚡ Cálculo Mental</h4>
            <p class="text-xs text-gray-600 mb-2">Resuelve mentalmente sin papel:</p>
            <ol class="space-y-2 text-gray-700 text-sm">
                <li>1. $\frac{1}{2} + \frac{1}{2}$</li>
                <li>2. $\frac{3}{4} - \frac{1}{4}$</li>
                <li>3. $\frac{1}{3} \times 3$</li>
                <li>4. $\frac{2}{5} \div \frac{1}{5}$</li>
                <li>5. $2\frac{1}{2} + 1\frac{1}{2}$</li>
                <li>6. ¿Cuántos cuartos hay en $1\frac{1}{2}$?</li>
            </ol>
        </div>
    </div>
    
    <!-- Guía de Estudio -->
    <div class="mt-8 bg-gray-50 border-l-4 border-gray-400 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <span class="text-gray-400 text-xl">📚</span>
            </div>
            <div class="ml-3">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Guía de Estudio</h4>
                <div class="text-sm text-gray-700 space-y-1">
                    <p><strong>Para dominar las fracciones:</strong></p>
                    <ul class="list-disc list-inside space-y-1 ml-2">
                        <li>Practica conversiones entre mixtas e impropias hasta hacerlo automáticamente</li>
                        <li>Memoriza fracciones decimales comunes ($\frac{1}{2} = 0.5$, $\frac{1}{4} = 0.25$, etc.)</li>
                        <li>Practica encontrar MCM para sumas y restas</li>
                        <li>Recuerda: dividir es multiplicar por el recíproco</li>
                        <li>Siempre simplifica tus respuestas cuando sea posible</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Nota para estudiantes -->
    <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <span class="text-yellow-400 text-xl">💡</span>
            </div>
            <div class="ml-3">
                <p class="text-sm text-yellow-700">
                    <strong>Tip para profesores:</strong> Estos ejercicios están organizados por dificultad creciente. 
                    Comience con clasificación y conversión, luego operaciones básicas, y termine con problemas de aplicación. 
                    Use manipulativos visuales para fracciones cuando sea posible.
                </p>
            </div>
        </div>
    </div>
</div>
