<!-- Sección 2: Cálculos con porcentajes -->
<section id="seccion2" class="mb-12">
    <div class="section-header flex items-center mb-6">
        <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 shadow-lg">
            <span class="text-white font-bold">2</span>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">Cálculos con Porcentajes</h3>
    </div>
    
    <div class="bg-white bg-opacity-80 p-6 rounded-xl border border-gray-200 shadow-sm mb-6">
        <p class="text-gray-700 mb-4">
            Existen tres tipos principales de cálculos con porcentajes que podemos realizar:
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="info-card">
                <h5 class="font-bold text-indigo-800 mb-2">1. Calcular el porcentaje de un número</h5>
                <div class="math-formula my-3">
                    \[ P\% \text{ de } N = \frac{P}{100} \times N \]
                </div>
                <p class="text-gray-700 text-sm">Usado para encontrar descuentos, impuestos, propinas, etc.</p>
            </div>
            
            <div class="info-card">
                <h5 class="font-bold text-indigo-800 mb-2">2. Calcular qué porcentaje es un número de otro</h5>
                <div class="math-formula my-3">
                    \[ \frac{A}{B} \times 100\% = P\% \]
                </div>
                <p class="text-gray-700 text-sm">Usado para comparar cantidades, calificaciones, etc.</p>
            </div>
            
            <div class="info-card">
                <h5 class="font-bold text-indigo-800 mb-2">3. Calcular el número original</h5>
                <div class="math-formula my-3">
                    \[ \frac{V}{1 \pm \frac{P}{100}} = N \]
                </div>
                <p class="text-gray-700 text-sm">Usado cuando sabemos el resultado después de aplicar un porcentaje.</p>
            </div>
        </div>
        
        <div class="flex items-center p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500 mt-4">
            <svg class="w-6 h-6 text-indigo-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-gray-700 text-sm">
                <span class="font-medium">Nota importante:</span> En la tercera fórmula, usamos <span class="highlight-text">+</span> cuando el valor ha aumentado (como en un aumento de precio) y <span class="highlight-text">-</span> cuando el valor ha disminuido (como en un descuento).
            </p>
        </div>
    </div>
    
    <!-- Ejemplos de cálculos detallados -->
    <div class="mt-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">Ejemplos detallados:</h4>
        
        <div class="grid grid-cols-1 gap-6">
            <!-- Ejemplo 1 -->
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo 1: Calcular el porcentaje de un número</h5>
                <p class="text-gray-700 mb-3">Calcular el 35% de 180.</p>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2">Aplicamos la fórmula:</p>
                    <div class="math-formula">
                        \[ 35\% \text{ de } 180 = \frac{35}{100} \times 180 = 0.35 \times 180 = 63 \]
                    </div>
                    <p class="text-gray-700 mt-2">Por lo tanto, el 35% de 180 es 63.</p>
                </div>
            </div>
            
            <!-- Ejemplo 2 -->
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo 2: Calcular qué porcentaje es un número de otro</h5>
                <p class="text-gray-700 mb-3">¿Qué porcentaje es 27 de 120?</p>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2">Aplicamos la fórmula:</p>
                    <div class="math-formula">
                        \[ \frac{27}{120} \times 100\% = 0.225 \times 100\% = 22.5\% \]
                    </div>
                    <p class="text-gray-700 mt-2">Por lo tanto, 27 es el 22.5% de 120.</p>
                </div>
            </div>
            
            <!-- Ejemplo 3 -->
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo 3: Calcular el número original</h5>
                <p class="text-gray-700 mb-3">Si el 42% de un número es 84, ¿cuál es el número?</p>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2">Establecemos la ecuación:</p>
                    <div class="math-formula">
                        \[ 42\% \text{ de } x = 84 \]
                        \[ \frac{42}{100} \times x = 84 \]
                        \[ 0.42x = 84 \]
                        \[ x = \frac{84}{0.42} = 200 \]
                    </div>
                    <p class="text-gray-700 mt-2">Por lo tanto, el número original es 200.</p>
                </div>
            </div>
            
            <!-- Ejemplo 4 -->
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo 4: Valor después de un aumento</h5>
                <p class="text-gray-700 mb-3">Si un producto de $250 aumenta un 18%, ¿cuál será su nuevo precio?</p>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2">Método 1: Calculando el aumento y sumándolo</p>
                    <div class="math-formula">
                        \[ \text{Aumento} = 18\% \text{ de } \$250 = 0.18 \times \$250 = \$45 \]
                        \[ \text{Nuevo precio} = \$250 + \$45 = \$295 \]
                    </div>
                    
                    <p class="text-gray-700 mt-4 mb-2">Método 2: Aplicando directamente el factor de incremento</p>
                    <div class="math-formula">
                        \[ \text{Nuevo precio} = \$250 \times (1 + 0.18) = \$250 \times 1.18 = \$295 \]
                    </div>
                    <p class="text-gray-700 mt-2">Por lo tanto, el nuevo precio será de $295.</p>
                </div>
            </div>
            
            <!-- Ejemplo 5 -->
            <div class="example-block">
                <h5 class="font-bold text-indigo-800 mb-2">Ejemplo 5: Calcular el precio original después de un descuento</h5>
                <p class="text-gray-700 mb-3">Un artículo está rebajado un 25% y cuesta $120. ¿Cuál era su precio original?</p>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700 mb-2">Aplicamos la fórmula para encontrar el valor original:</p>
                    <div class="math-formula">
                        \[ \text{Precio con descuento} = \text{Precio original} \times (1 - \frac{25}{100}) \]
                        \[ \$120 = \text{Precio original} \times 0.75 \]
                        \[ \text{Precio original} = \frac{\$120}{0.75} = \$160 \]
                    </div>
                    <p class="text-gray-700 mt-2">Por lo tanto, el precio original era de $160.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejercicios para los estudiantes -->
    <div class="exercise-block mt-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Ejercicios Prácticos
        </h4>
        
        <ol class="list-decimal pl-6 space-y-4">
            <li class="text-gray-700">
                <p>Calcula el 18% de 350.</p>
            </li>
            <li class="text-gray-700">
                <p>¿Qué porcentaje es 45 de 180?</p>
            </li>
            <li class="text-gray-700">
                <p>Si el 65% de un número es 130, ¿cuál es el número?</p>
            </li>
            <li class="text-gray-700">
                <p>Un televisor cuesta $540 después de un aumento del 8%. ¿Cuánto costaba antes del aumento?</p>
            </li>
            <li class="text-gray-700">
                <p>Una camisa cuesta $42 después de un descuento del 30%. ¿Cuál era su precio original?</p>
            </li>
        </ol>
    </div>
</section>
