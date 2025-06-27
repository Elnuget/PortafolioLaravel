<!-- Contenido principal de Clase 9: FRACCIONES -->
<div class="space-y-8">
    
    <!-- Sección 1: ¿Qué es una fracción? -->
    <div class="content-card">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center">
            🧮 ¿Qué es una fracción?
        </h2>
        <p class="text-lg text-gray-700 mb-4">
            Una fracción representa una parte de un todo. Se compone de:
        </p>
        <div class="bg-blue-50 p-4 rounded-lg mb-4">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">
                    $\frac{\text{numerador}}{\text{denominador}}$
                </div>
                <p class="text-gray-600">
                    <strong>Numerador:</strong> partes que tomamos<br>
                    <strong>Denominador:</strong> total de partes
                </p>
            </div>
        </div>
    </div>

    <!-- Sección 2: Clasificación de Fracciones -->
    <div class="content-card">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
            📊 Clasificación de Fracciones
        </h2>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Fracciones Propias -->
            <div class="bg-green-50 p-4 rounded-lg border-l-4 border-green-500">
                <h3 class="text-xl font-bold text-green-700 mb-2">🟢 Fracciones Propias</h3>
                <p class="text-gray-700 mb-2">El numerador es menor que el denominador</p>
                <div class="math-example bg-white">
                    $\frac{2}{3}$, $\frac{5}{8}$, $\frac{7}{10}$
                </div>
                <p class="text-sm text-gray-600">Resultado: menor que 1</p>
            </div>

            <!-- Fracciones Impropias -->
            <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-orange-500">
                <h3 class="text-xl font-bold text-orange-700 mb-2">🟠 Fracciones Impropias</h3>
                <p class="text-gray-700 mb-2">El numerador es mayor o igual que el denominador</p>
                <div class="math-example bg-white">
                    $\frac{8}{3}$, $\frac{9}{5}$, $\frac{12}{7}$
                </div>
                <p class="text-sm text-gray-600">Resultado: mayor o igual que 1</p>
            </div>

            <!-- Números Mixtos -->
            <div class="bg-purple-50 p-4 rounded-lg border-l-4 border-purple-500">
                <h3 class="text-xl font-bold text-purple-700 mb-2">🟣 Números Mixtos</h3>
                <p class="text-gray-700 mb-2">Parte entera + fracción propia</p>
                <div class="math-example bg-white">
                    $2\frac{1}{3}$, $1\frac{5}{8}$, $3\frac{2}{7}$
                </div>
                <p class="text-sm text-gray-600">Forma mixta de fracciones impropias</p>
            </div>

            <!-- Fracciones Equivalentes -->
            <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-500">
                <h3 class="text-xl font-bold text-blue-700 mb-2">🔵 Fracciones Equivalentes</h3>
                <p class="text-gray-700 mb-2">Representan el mismo valor</p>
                <div class="math-example bg-white">
                    $\frac{1}{2} = \frac{2}{4} = \frac{3}{6}$
                </div>
                <p class="text-sm text-gray-600">Mismo valor, diferente forma</p>
            </div>
        </div>
    </div>

    <!-- Sección 3: Conversiones entre Fracciones Mixtas e Impropias -->
    <div class="content-card">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
            🔄 Conversiones: Mixtas ↔ Impropias
        </h2>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- De Mixta a Impropia -->
            <div class="bg-purple-50 p-4 rounded-lg border-l-4 border-purple-500">
                <h3 class="text-xl font-bold text-purple-700 mb-3">📊 Mixta → Impropia</h3>
                <div class="bg-white p-3 rounded mb-3">
                    <p class="text-gray-700 mb-2"><strong>Fórmula:</strong></p>
                    <div class="text-center">
                        $a\frac{b}{c} = \frac{(a \times c) + b}{c}$
                    </div>
                </div>
                
                <div class="math-example">
                    <h4 class="font-bold text-purple-800 mb-2">Ejemplo: $3\frac{2}{5}$</h4>
                    <div class="space-y-1 text-sm">
                        <p>$3\frac{2}{5} = \frac{(3 \times 5) + 2}{5}$</p>
                        <p>$= \frac{15 + 2}{5}$</p>
                        <p>$= \frac{17}{5}$</p>
                    </div>
                </div>
            </div>

            <!-- De Impropia a Mixta -->
            <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-orange-500">
                <h3 class="text-xl font-bold text-orange-700 mb-3">📋 Impropia → Mixta</h3>
                <div class="bg-white p-3 rounded mb-3">
                    <p class="text-gray-700 mb-2"><strong>Método:</strong></p>
                    <ol class="list-decimal list-inside text-sm space-y-1">
                        <li>Divide numerador ÷ denominador</li>
                        <li>Cociente = parte entera</li>
                        <li>Residuo = nuevo numerador</li>
                        <li>Denominador = igual</li>
                    </ol>
                </div>
                
                <div class="math-example">
                    <h4 class="font-bold text-orange-800 mb-2">Ejemplo: $\frac{17}{5}$</h4>
                    <div class="space-y-1 text-sm">
                        <p>$17 ÷ 5 = 3$ residuo $2$</p>
                        <p>$\frac{17}{5} = 3\frac{2}{5}$</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Más Ejemplos -->
        <div class="bg-blue-50 p-4 rounded-lg mt-4">
            <h4 class="text-lg font-bold text-blue-800 mb-3">🎯 Práctica Rápida</h4>
            <div class="grid md:grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="font-semibold mb-2">Mixta → Impropia:</p>
                    <ul class="space-y-1">
                        <li>$2\frac{1}{3} = \frac{7}{3}$</li>
                        <li>$1\frac{3}{4} = \frac{7}{4}$</li>
                        <li>$5\frac{2}{7} = \frac{37}{7}$</li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold mb-2">Impropia → Mixta:</p>
                    <ul class="space-y-1">
                        <li>$\frac{11}{4} = 2\frac{3}{4}$</li>
                        <li>$\frac{13}{3} = 4\frac{1}{3}$</li>
                        <li>$\frac{22}{7} = 3\frac{1}{7}$</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección 4: Conversión de Decimal a Fracción -->
    <div class="content-card">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
            � Conversión: Decimal a Fracción
        </h2>
        
        <!-- Método 1: Decimales Exactos -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-700 mb-3">📍 Decimales Exactos</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-3"><strong>Pasos:</strong></p>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Cuenta los dígitos después del punto decimal</li>
                    <li>Coloca el número sin punto como numerador</li>
                    <li>Coloca 1 seguido de tantos ceros como dígitos decimales</li>
                    <li>Simplifica la fracción</li>
                </ol>
            </div>
            
            <div class="math-example mt-4">
                <h4 class="font-bold text-gray-800 mb-2">Ejemplo: 0.75</h4>
                <div class="space-y-2">
                    <p>1. Dos dígitos decimales (7 y 5)</p>
                    <p>2. Numerador: 75</p>
                    <p>3. Denominador: 100 (1 seguido de 2 ceros)</p>
                    <p>4. $\frac{75}{100} = \frac{3}{4}$ (simplificado)</p>
                </div>
            </div>
        </div>

        <!-- Método 2: Decimales Periódicos -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-700 mb-3">🔁 Decimales Periódicos</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-3"><strong>Para decimales con período:</strong></p>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Llama x al decimal</li>
                    <li>Multiplica por 10^n (n = cantidad de dígitos del período)</li>
                    <li>Resta la ecuación original</li>
                    <li>Despeja x</li>
                </ol>
            </div>
            
            <div class="math-example mt-4">
                <h4 class="font-bold text-gray-800 mb-2">Ejemplo: 0.333... = 0.3̄</h4>
                <div class="space-y-2">
                    <p>Sea $x = 0.333...$</p>
                    <p>$10x = 3.333...$</p>
                    <p>$10x - x = 3.333... - 0.333...$</p>
                    <p>$9x = 3$</p>
                    <p>$x = \frac{3}{9} = \frac{1}{3}$</p>
                </div>
            </div>
        </div>

        <!-- Método 3: Decimales Mixtos -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-700 mb-3">🎯 Decimales Mixtos (con parte entera)</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-3"><strong>Pasos:</strong></p>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Separa la parte entera de la decimal</li>
                    <li>Convierte solo la parte decimal a fracción</li>
                    <li>Combina para formar número mixto</li>
                    <li>Si necesitas impropia, convierte al final</li>
                </ol>
            </div>
            
            <div class="math-example mt-4">
                <h4 class="font-bold text-gray-800 mb-2">Ejemplo: 2.75</h4>
                <div class="space-y-2">
                    <p>1. Parte entera: 2, parte decimal: 0.75</p>
                    <p>2. $0.75 = \frac{75}{100} = \frac{3}{4}$</p>
                    <p>3. Número mixto: $2\frac{3}{4}$</p>
                    <p>4. Como impropia: $\frac{11}{4}$</p>
                </div>
            </div>
        </div>

        <!-- Ejemplos Adicionales -->
        <div class="bg-blue-50 p-4 rounded-lg">
            <h4 class="text-lg font-bold text-blue-800 mb-3">💡 Tabla de Conversiones Comunes</h4>
            <div class="grid md:grid-cols-3 gap-4">
                <div>
                    <p class="font-semibold">Exactos:</p>
                    <ul class="space-y-1 text-sm">
                        <li>$0.5 = \frac{1}{2}$</li>
                        <li>$0.25 = \frac{1}{4}$</li>
                        <li>$0.125 = \frac{1}{8}$</li>
                        <li>$0.2 = \frac{1}{5}$</li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">Periódicos:</p>
                    <ul class="space-y-1 text-sm">
                        <li>$0.\overline{3} = \frac{1}{3}$</li>
                        <li>$0.\overline{6} = \frac{2}{3}$</li>
                        <li>$0.\overline{81} = \frac{9}{11}$</li>
                        <li>$0.\overline{142857} = \frac{1}{7}$</li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">Mixtos:</p>
                    <ul class="space-y-1 text-sm">
                        <li>$1.5 = 1\frac{1}{2}$</li>
                        <li>$2.25 = 2\frac{1}{4}$</li>
                        <li>$3.75 = 3\frac{3}{4}$</li>
                        <li>$1.\overline{3} = 1\frac{1}{3}$</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección 5: Operaciones con Fracciones -->
    <div class="content-card">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
            ➕ Operaciones con Fracciones
        </h2>
        
        <div class="space-y-6">
            <!-- Suma y Resta -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-green-50 p-4 rounded-lg border-l-4 border-green-500">
                    <h3 class="text-xl font-bold text-green-700 mb-3">➕ Suma de Fracciones</h3>
                    
                    <!-- Mismo denominador -->
                    <div class="mb-4">
                        <h4 class="font-semibold text-green-600 mb-2">Con mismo denominador:</h4>
                        <div class="bg-white p-3 rounded">
                            $\frac{a}{c} + \frac{b}{c} = \frac{a + b}{c}$
                        </div>
                        <div class="math-example mt-2">
                            <p class="text-sm">$\frac{2}{7} + \frac{3}{7} = \frac{5}{7}$</p>
                        </div>
                    </div>
                    
                    <!-- Diferente denominador -->
                    <div>
                        <h4 class="font-semibold text-green-600 mb-2">Con diferente denominador:</h4>
                        <div class="bg-white p-3 rounded text-sm">
                            <p>1. Encuentra el MCM de los denominadores</p>
                            <p>2. Convierte a fracciones equivalentes</p>
                            <p>3. Suma los numeradores</p>
                        </div>
                        <div class="math-example mt-2">
                            <div class="text-sm space-y-1">
                                <p>$\frac{1}{4} + \frac{1}{6}$</p>
                                <p>MCM(4,6) = 12</p>
                                <p>$\frac{3}{12} + \frac{2}{12} = \frac{5}{12}$</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-red-50 p-4 rounded-lg border-l-4 border-red-500">
                    <h3 class="text-xl font-bold text-red-700 mb-3">➖ Resta de Fracciones</h3>
                    
                    <!-- Mismo denominador -->
                    <div class="mb-4">
                        <h4 class="font-semibold text-red-600 mb-2">Con mismo denominador:</h4>
                        <div class="bg-white p-3 rounded">
                            $\frac{a}{c} - \frac{b}{c} = \frac{a - b}{c}$
                        </div>
                        <div class="math-example mt-2">
                            <p class="text-sm">$\frac{5}{8} - \frac{2}{8} = \frac{3}{8}$</p>
                        </div>
                    </div>
                    
                    <!-- Diferente denominador -->
                    <div>
                        <h4 class="font-semibold text-red-600 mb-2">Con diferente denominador:</h4>
                        <div class="bg-white p-3 rounded text-sm">
                            <p>Mismo proceso que la suma</p>
                            <p>Pero resta los numeradores</p>
                        </div>
                        <div class="math-example mt-2">
                            <div class="text-sm space-y-1">
                                <p>$\frac{3}{5} - \frac{1}{3}$</p>
                                <p>MCM(5,3) = 15</p>
                                <p>$\frac{9}{15} - \frac{5}{15} = \frac{4}{15}$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multiplicación y División -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-500">
                    <h3 class="text-xl font-bold text-blue-700 mb-3">✖️ Multiplicación</h3>
                    
                    <div class="bg-white p-3 rounded mb-3">
                        <div class="text-center">
                            $\frac{a}{b} \times \frac{c}{d} = \frac{a \times c}{b \times d}$
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <!-- Pasos -->
                        <div class="text-sm text-gray-700">
                            <p><strong>Pasos:</strong></p>
                            <ol class="list-decimal list-inside space-y-1">
                                <li>Multiplica numeradores</li>
                                <li>Multiplica denominadores</li>
                                <li>Simplifica si es posible</li>
                            </ol>
                        </div>
                        
                        <!-- Ejemplo -->
                        <div class="math-example">
                            <h5 class="font-semibold">Ejemplo:</h5>
                            <div class="space-y-1 text-sm">
                                <p>$\frac{2}{3} \times \frac{4}{5}$</p>
                                <p>$= \frac{2 \times 4}{3 \times 5}$</p>
                                <p>$= \frac{8}{15}$</p>
                            </div>
                        </div>
                        
                        <!-- Truco de cancelación -->
                        <div class="bg-yellow-50 p-2 rounded text-xs">
                            <p><strong>💡 Truco:</strong> Cancela factores comunes antes de multiplicar</p>
                            <p>$\frac{6}{8} \times \frac{4}{9} = \frac{\cancel{6}^3}{\cancel{8}^4} \times \frac{\cancel{4}^1}{\cancel{9}^3} = \frac{3 \times 1}{4 \times 3} = \frac{1}{4}$</p>
                        </div>
                    </div>
                </div>

                <div class="bg-purple-50 p-4 rounded-lg border-l-4 border-purple-500">
                    <h3 class="text-xl font-bold text-purple-700 mb-3">➗ División</h3>
                    
                    <div class="bg-white p-3 rounded mb-3">
                        <div class="text-center">
                            $\frac{a}{b} \div \frac{c}{d} = \frac{a}{b} \times \frac{d}{c}$
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <!-- Pasos -->
                        <div class="text-sm text-gray-700">
                            <p><strong>Pasos:</strong></p>
                            <ol class="list-decimal list-inside space-y-1">
                                <li>Invierte la segunda fracción</li>
                                <li>Cambia ÷ por ×</li>
                                <li>Multiplica normalmente</li>
                                <li>Simplifica</li>
                            </ol>
                        </div>
                        
                        <!-- Ejemplo -->
                        <div class="math-example">
                            <h5 class="font-semibold">Ejemplo:</h5>
                            <div class="space-y-1 text-sm">
                                <p>$\frac{3}{4} \div \frac{2}{5}$</p>
                                <p>$= \frac{3}{4} \times \frac{5}{2}$</p>
                                <p>$= \frac{15}{8}$</p>
                                <p>$= 1\frac{7}{8}$</p>
                            </div>
                        </div>
                        
                        <!-- Recordatorio -->
                        <div class="bg-yellow-50 p-2 rounded text-xs">
                            <p><strong>🎯 Recuerda:</strong> "Dividir es multiplicar por el recíproco"</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operaciones con Números Mixtos -->
            <div class="bg-indigo-50 p-4 rounded-lg border-l-4 border-indigo-500">
                <h3 class="text-xl font-bold text-indigo-700 mb-3">🔢 Operaciones con Números Mixtos</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h4 class="font-semibold text-indigo-600 mb-2">Método 1: Convertir a impropias</h4>
                        <div class="text-sm text-gray-700 space-y-1">
                            <p>1. Convierte a fracciones impropias</p>
                            <p>2. Realiza la operación</p>
                            <p>3. Convierte el resultado si es necesario</p>
                        </div>
                        
                        <div class="math-example mt-2">
                            <p class="text-xs font-semibold">$2\frac{1}{3} + 1\frac{1}{4}$</p>
                            <div class="text-xs space-y-1">
                                <p>$= \frac{7}{3} + \frac{5}{4}$</p>
                                <p>$= \frac{28}{12} + \frac{15}{12}$</p>
                                <p>$= \frac{43}{12} = 3\frac{7}{12}$</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-indigo-600 mb-2">Método 2: Por separado (suma/resta)</h4>
                        <div class="text-sm text-gray-700 space-y-1">
                            <p>1. Opera las partes enteras</p>
                            <p>2. Opera las fracciones</p>
                            <p>3. Combina los resultados</p>
                        </div>
                        
                        <div class="math-example mt-2">
                            <p class="text-xs font-semibold">$3\frac{2}{5} + 2\frac{1}{3}$</p>
                            <div class="text-xs space-y-1">
                                <p>Enteros: $3 + 2 = 5$</p>
                                <p>Fracciones: $\frac{2}{5} + \frac{1}{3} = \frac{11}{15}$</p>
                                <p>Resultado: $5\frac{11}{15}$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Simplificación -->
            <div class="bg-yellow-50 p-4 rounded-lg border-l-4 border-yellow-500">
                <h3 class="text-xl font-bold text-yellow-700 mb-3">🎯 Simplificación de Fracciones</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h4 class="font-semibold text-yellow-600 mb-2">Método del MCD</h4>
                        <div class="text-sm text-gray-700 space-y-1">
                            <p>1. Encuentra el MCD del numerador y denominador</p>
                            <p>2. Divide ambos por el MCD</p>
                        </div>
                        
                        <div class="math-example mt-2">
                            <div class="text-xs space-y-1">
                                <p>$\frac{24}{36}$</p>
                                <p>MCD(24,36) = 12</p>
                                <p>$\frac{24 \div 12}{36 \div 12} = \frac{2}{3}$</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-yellow-600 mb-2">Factorización</h4>
                        <div class="text-sm text-gray-700 space-y-1">
                            <p>1. Factoriza numerador y denominador</p>
                            <p>2. Cancela factores comunes</p>
                        </div>
                        
                        <div class="math-example mt-2">
                            <div class="text-xs space-y-1">
                                <p>$\frac{18}{24} = \frac{2 \times 3^2}{2^3 \times 3}$</p>
                                <p>$= \frac{\cancel{2} \times 3^{\cancel{2}}}{\cancel{2^3} \times \cancel{3}}$</p>
                                <p>$= \frac{3}{4}$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección 6: Ejercicios Resueltos -->
    <div class="content-card">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
            ✅ Ejercicios Resueltos
        </h2>
        
        <div class="space-y-6">
            <!-- Ejercicios de Conversión -->
            <div class="grid md:grid-cols-2 gap-4">
                <div class="exercise-box">
                    <h4 class="font-bold text-amber-800 mb-2">Ejercicio 1: Convertir 0.6 a fracción</h4>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Solución:</strong></p>
                        <p>$0.6 = \frac{6}{10} = \frac{3}{5}$</p>
                        <p><strong>Verificación:</strong> $\frac{3}{5} = 3 ÷ 5 = 0.6$ ✓</p>
                    </div>
                </div>

                <div class="exercise-box">
                    <h4 class="font-bold text-amber-800 mb-2">Ejercicio 2: Convertir $2\frac{3}{4}$ a impropia</h4>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Solución:</strong></p>
                        <p>$2\frac{3}{4} = \frac{(2 \times 4) + 3}{4}$</p>
                        <p>$= \frac{8 + 3}{4} = \frac{11}{4}$</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="exercise-box">
                    <h4 class="font-bold text-amber-800 mb-2">Ejercicio 3: Convertir $\frac{17}{5}$ a mixta</h4>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Solución:</strong></p>
                        <p>$17 ÷ 5 = 3$ residuo $2$</p>
                        <p>$\frac{17}{5} = 3\frac{2}{5}$</p>
                    </div>
                </div>

                <div class="exercise-box">
                    <h4 class="font-bold text-amber-800 mb-2">Ejercicio 4: Convertir 0.454545... a fracción</h4>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Solución:</strong></p>
                        <p>Sea $x = 0.\overline{45}$</p>
                        <p>$100x = 45.\overline{45}$</p>
                        <p>$100x - x = 45$</p>
                        <p>$99x = 45$, entonces $x = \frac{45}{99} = \frac{5}{11}$</p>
                    </div>
                </div>
            </div>

            <!-- Ejercicios de Operaciones -->
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="text-xl font-bold text-blue-800 mb-4">🧮 Ejercicios de Operaciones</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="exercise-box bg-white">
                        <h4 class="font-bold text-blue-800 mb-2">Ejercicio 5: $\frac{2}{3} + \frac{1}{4}$</h4>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Solución:</strong></p>
                            <p>MCM(3,4) = 12</p>
                            <p>$\frac{2}{3} = \frac{8}{12}$, $\frac{1}{4} = \frac{3}{12}$</p>
                            <p>$\frac{8}{12} + \frac{3}{12} = \frac{11}{12}$</p>
                        </div>
                    </div>

                    <div class="exercise-box bg-white">
                        <h4 class="font-bold text-blue-800 mb-2">Ejercicio 6: $\frac{3}{5} \times \frac{2}{7}$</h4>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Solución:</strong></p>
                            <p>$\frac{3}{5} \times \frac{2}{7} = \frac{3 \times 2}{5 \times 7}$</p>
                            <p>$= \frac{6}{35}$</p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4 mt-4">
                    <div class="exercise-box bg-white">
                        <h4 class="font-bold text-blue-800 mb-2">Ejercicio 7: $\frac{4}{5} \div \frac{2}{3}$</h4>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Solución:</strong></p>
                            <p>$\frac{4}{5} \div \frac{2}{3} = \frac{4}{5} \times \frac{3}{2}$</p>
                            <p>$= \frac{12}{10} = \frac{6}{5} = 1\frac{1}{5}$</p>
                        </div>
                    </div>

                    <div class="exercise-box bg-white">
                        <h4 class="font-bold text-blue-800 mb-2">Ejercicio 8: $2\frac{1}{3} + 1\frac{1}{6}$</h4>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Solución:</strong></p>
                            <p>$2\frac{1}{3} = \frac{7}{3}$, $1\frac{1}{6} = \frac{7}{6}$</p>
                            <p>$\frac{7}{3} + \frac{7}{6} = \frac{14}{6} + \frac{7}{6} = \frac{21}{6} = 3\frac{1}{2}$</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Problemas de Aplicación -->
            <div class="bg-green-50 p-4 rounded-lg">
                <h3 class="text-xl font-bold text-green-800 mb-4">🌟 Problemas de Aplicación</h3>
                
                <div class="space-y-4">
                    <div class="exercise-box bg-white">
                        <h4 class="font-bold text-green-800 mb-2">Ejercicio 9: Problema de cocina</h4>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Problema:</strong> Una receta necesita $1\frac{1}{4}$ tazas de harina. Si quiero hacer $\frac{2}{3}$ de la receta, ¿cuánta harina necesito?</p>
                            <p><strong>Solución:</strong></p>
                            <p>$1\frac{1}{4} \times \frac{2}{3} = \frac{5}{4} \times \frac{2}{3}$</p>
                            <p>$= \frac{10}{12} = \frac{5}{6}$ tazas de harina</p>
                        </div>
                    </div>

                    <div class="exercise-box bg-white">
                        <h4 class="font-bold text-green-800 mb-2">Ejercicio 10: Problema de tiempo</h4>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Problema:</strong> Juan estudió $\frac{3}{4}$ de hora en la mañana y $\frac{5}{6}$ de hora en la tarde. ¿Cuánto tiempo estudió en total?</p>
                            <p><strong>Solución:</strong></p>
                            <p>$\frac{3}{4} + \frac{5}{6}$</p>
                            <p>MCM(4,6) = 12</p>
                            <p>$\frac{9}{12} + \frac{10}{12} = \frac{19}{12} = 1\frac{7}{12}$ horas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
