<div class="relative p-6">
    <!-- Botones de módulos -->
    <div class="flex flex-wrap gap-2 mb-6 justify-center">
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module1">
            Módulo 1: Fundamentos
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module2">
            Módulo 2: Aplicaciones
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module3">
            Módulo 3: Proyección Temporal
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module4">
            Módulo 4: Casos Avanzados
        </button>
        <button class="module-button px-4 py-2 rounded-lg text-white font-medium text-sm" data-module="module5">
            Módulo 5: Maestría
        </button>
    </div>

    <!-- Contenido de los módulos -->
    <div class="bg-slate-800 bg-opacity-50 p-5 rounded-xl shadow-lg">
        <!-- Módulo 1 -->
        <div id="module1" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Fundamentos de Ecuaciones Lineales</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">¿Qué es una Ecuación Lineal?</h4>
                    <p class="text-gray-200">Una ecuación lineal con una incógnita tiene la forma: <span class="bg-slate-600 px-2 py-1 rounded text-teal-300">ax + b = c</span></p>
                    <ul class="mt-3 space-y-1 list-disc pl-5 text-gray-300">
                        <li><strong>a:</strong> coeficiente de la variable (≠ 0)</li>
                        <li><strong>b:</strong> término independiente del lado izquierdo</li>
                        <li><strong>c:</strong> término del lado derecho</li>
                        <li><strong>x:</strong> la incógnita que queremos encontrar</li>
                    </ul>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-2 rounded text-sm">
                        <p class="text-teal-300">Ejemplos:</p>
                        <p class="text-gray-200">3x + 5 = 14</p>
                        <p class="text-gray-200">2x - 7 = 15</p>
                        <p class="text-gray-200">x + 8 = 20</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Traducción del Lenguaje Natural</h4>
                    <p class="text-gray-200">Palabras clave para traducir problemas:</p>
                    <div class="mt-3 grid grid-cols-2 gap-2 text-sm">
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"suma de" → x + y</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"diferencia" → x - y</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"producto de" → x · y</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"doble de" → 2x</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"triple de" → 3x</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"mitad de" → x/2</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"excede en" → x + n</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded">"es igual a" → =</div>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejemplo Práctico: Números</h4>
                    <p class="text-gray-200">Problema: "Un número aumentado en 15 es igual a 47. ¿Cuál es el número?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Paso 1: Identificar la incógnita</p>
                        <p class="text-gray-300">Sea x = el número desconocido</p>
                        <p class="text-cyan-100 mt-2">Paso 2: Traducir a ecuación</p>
                        <p class="text-gray-300">"Un número aumentado en 15" → x + 15</p>
                        <p class="text-gray-300">"es igual a 47" → = 47</p>
                        <p class="text-teal-300 mt-1">Ecuación: x + 15 = 47</p>
                        <p class="text-cyan-100 mt-2">Paso 3: Resolver</p>
                        <p class="text-teal-300">x = 47 - 15 = 32</p>
                        <p class="text-cyan-100 mt-2">Verificación: 32 + 15 = 47 ✓</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Metodología General</h4>
                    <ol class="mt-2 space-y-2 list-decimal pl-5 text-gray-300">
                        <li><strong>Leer:</strong> Comprende completamente el problema</li>
                        <li><strong>Identificar:</strong> ¿Qué necesitas encontrar?</li>
                        <li><strong>Asignar:</strong> Define variables para las incógnitas</li>
                        <li><strong>Traducir:</strong> Convierte el texto en ecuación</li>
                        <li><strong>Resolver:</strong> Aplica operaciones algebraicas</li>
                        <li><strong>Verificar:</strong> Comprueba que la solución sea correcta</li>
                    </ol>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejercicio Guiado</h4>
                    <p class="text-gray-200">Problema: "El triple de un número menos 8 es igual a 25. Encuentra el número."</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-yellow-300">¡Hazlo tú mismo!</p>
                        <p class="text-gray-300 mt-1">1. ¿Cuál es la incógnita?</p>
                        <p class="text-gray-300">2. ¿Cómo se escribe "el triple de un número"?</p>
                        <p class="text-gray-300">3. ¿Cómo se escribe "menos 8"?</p>
                        <p class="text-gray-300">4. Forma la ecuación completa</p>
                        <p class="text-gray-300">5. Resuelve y verifica</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Práctica Adicional</h4>
                    <p class="text-gray-200">Traduce estas frases a expresiones algebraicas:</p>
                    <div class="mt-3 space-y-2 text-sm">
                        <div class="bg-slate-600 bg-opacity-30 p-2 rounded">
                            <p class="text-yellow-300">1. "Cinco más que un número"</p>
                            <p class="text-gray-400">Respuesta: x + 5</p>
                        </div>
                        <div class="bg-slate-600 bg-opacity-30 p-2 rounded">
                            <p class="text-yellow-300">2. "La mitad de un número menos 3"</p>
                            <p class="text-gray-400">Respuesta: x/2 - 3</p>
                        </div>
                        <div class="bg-slate-600 bg-opacity-30 p-2 rounded">
                            <p class="text-yellow-300">3. "Cuatro veces un número aumentado en 7"</p>
                            <p class="text-gray-400">Respuesta: 4x + 7</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Ejercicios Interactivos -->
            <div class="mt-6 bg-slate-800 bg-opacity-60 p-5 rounded-xl">
                <h4 class="text-xl font-semibold text-yellow-300 mb-3">🎯 Ejercicios para Practicar</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 1: Números Consecutivos</h5>
                        <p class="text-gray-200">La suma de dos números consecutivos es 37. Encuentra los números.</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Si x es el primer número, ¿cuál es el segundo?</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 2: Geometría Básica</h5>
                        <p class="text-gray-200">El perímetro de un rectángulo es 24 cm. Si el largo es el doble del ancho, ¿cuáles son las dimensiones?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Perímetro = 2(largo + ancho)</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 3: Dinero</h5>
                        <p class="text-gray-200">Ana tiene $50 más que Luis. Si juntos tienen $230, ¿cuánto dinero tiene cada uno?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Define una variable para el dinero de una persona</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 4: Velocidad y Distancia</h5>
                        <p class="text-gray-200">Un auto viaja a velocidad constante. En 3 horas recorre 180 km. ¿Cuál es su velocidad?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Distancia = Velocidad × Tiempo</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-green-900 bg-opacity-30 p-3 rounded-lg border border-green-500">
                    <h5 class="text-lg font-medium text-green-300 mb-2">💡 Estrategia de Resolución</h5>
                    <p class="text-gray-200">Para cada ejercicio:</p>
                    <ol class="mt-2 list-decimal pl-5 text-gray-300 text-sm">
                        <li>Identifica qué quieres encontrar (la incógnita)</li>
                        <li>Asigna una variable (generalmente x)</li>
                        <li>Expresa otras cantidades en términos de x</li>
                        <li>Escribe la ecuación usando la información dada</li>
                        <li>Resuelve la ecuación</li>
                        <li>Verifica tu respuesta</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Módulo 2 -->
        <div id="module2" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Aplicación de Ecuaciones Lineales</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Problemas de Números</h4>
                    <p class="text-gray-200">Ejemplo: "El doble de un número más 15 es igual a 47. ¿Cuál es el número?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Paso 1: Definir variable</p>
                        <p class="text-gray-300">Sea x = el número buscado</p>
                        <p class="text-cyan-100 mt-2">Paso 2: Plantear ecuación</p>
                        <p class="text-gray-300">"El doble de un número" → 2x</p>
                        <p class="text-gray-300">"más 15" → + 15</p>
                        <p class="text-gray-300">"es igual a 47" → = 47</p>
                        <p class="text-teal-300 mt-1">2x + 15 = 47</p>
                        <p class="text-cyan-100 mt-2">Paso 3: Resolver</p>
                        <p class="text-teal-300">2x = 47 - 15</p>
                        <p class="text-teal-300">2x = 32</p>
                        <p class="text-teal-300">x = 16</p>
                        <p class="text-cyan-100 mt-1">Verificación: 2(16) + 15 = 32 + 15 = 47 ✓</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Problemas de Dinero</h4>
                    <p class="text-gray-200">Ejemplo: "Carlos tiene $20 más que María. Si juntos tienen $180, ¿cuánto tiene cada uno?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Definir variables:</p>
                        <p class="text-gray-300">Sea x = dinero de María</p>
                        <p class="text-gray-300">Entonces x + 20 = dinero de Carlos</p>
                        <p class="text-cyan-100 mt-2">Ecuación:</p>
                        <p class="text-teal-300">x + (x + 20) = 180</p>
                        <p class="text-teal-300">2x + 20 = 180</p>
                        <p class="text-teal-300">2x = 160</p>
                        <p class="text-teal-300">x = 80</p>
                        <p class="text-cyan-100 mt-1">Respuesta:</p>
                        <p class="text-gray-300">María: $80, Carlos: $100</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Problemas Geométricos</h4>
                    <p class="text-gray-200">Ejemplo: "Un rectángulo tiene un perímetro de 36 cm. Si el largo es 3 cm más que el ancho, ¿cuáles son sus dimensiones?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Variables:</p>
                        <p class="text-gray-300">Sea x = ancho del rectángulo</p>
                        <p class="text-gray-300">Entonces x + 3 = largo del rectángulo</p>
                        <p class="text-cyan-100 mt-2">Fórmula del perímetro:</p>
                        <p class="text-gray-300">P = 2(largo + ancho)</p>
                        <p class="text-teal-300 mt-1">2(x + 3 + x) = 36</p>
                        <p class="text-teal-300">2(2x + 3) = 36</p>
                        <p class="text-teal-300">4x + 6 = 36</p>
                        <p class="text-teal-300">4x = 30</p>
                        <p class="text-teal-300">x = 7.5 cm</p>
                        <p class="text-cyan-100 mt-1">Dimensiones:</p>
                        <p class="text-gray-300">Ancho: 7.5 cm, Largo: 10.5 cm</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Problemas de Mezclas</h4>
                    <p class="text-gray-200">Ejemplo: "En una tienda se venden chocolates a $3 cada uno y caramelos a $1 cada uno. Si se compraron 20 dulces por $44, ¿cuántos de cada tipo se compraron?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Variables:</p>
                        <p class="text-gray-300">Sea x = número de chocolates</p>
                        <p class="text-gray-300">Entonces 20 - x = número de caramelos</p>
                        <p class="text-cyan-100 mt-2">Ecuación de costo:</p>
                        <p class="text-teal-300">3x + 1(20 - x) = 44</p>
                        <p class="text-teal-300">3x + 20 - x = 44</p>
                        <p class="text-teal-300">2x + 20 = 44</p>
                        <p class="text-teal-300">2x = 24</p>
                        <p class="text-teal-300">x = 12</p>
                        <p class="text-cyan-100 mt-1">Respuesta:</p>
                        <p class="text-gray-300">12 chocolates y 8 caramelos</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Problemas de Movimiento</h4>
                    <p class="text-gray-200">Ejemplo: "Un ciclista viaja a velocidad constante. Recorre 45 km en 2.5 horas. ¿Cuál es su velocidad?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Fórmula: Distancia = Velocidad × Tiempo</p>
                        <p class="text-gray-300">Datos:</p>
                        <p class="text-gray-300">Distancia = 45 km</p>
                        <p class="text-gray-300">Tiempo = 2.5 horas</p>
                        <p class="text-gray-300">Velocidad = x km/h</p>
                        <p class="text-teal-300 mt-2">45 = x × 2.5</p>
                        <p class="text-teal-300">x = 45 ÷ 2.5</p>
                        <p class="text-teal-300">x = 18 km/h</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Técnicas de Resolución</h4>
                    <p class="text-gray-200">Estrategias clave para problemas aplicados:</p>
                    <ul class="mt-2 space-y-2 text-gray-300">
                        <li><strong>Identificar:</strong> ¿Qué cantidad necesito encontrar?</li>
                        <li><strong>Relacionar:</strong> ¿Cómo se relacionan las cantidades?</li>
                        <li><strong>Expresar:</strong> Escribir todo en términos de una variable</li>
                        <li><strong>Verificar:</strong> ¿La respuesta tiene sentido en el contexto?</li>
                    </ul>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-2 rounded">
                        <p class="text-yellow-300 text-sm">💡 Tip: Siempre lee el problema dos veces antes de empezar</p>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Ejercicios Prácticos -->
            <div class="mt-6 bg-slate-800 bg-opacity-60 p-5 rounded-xl">
                <h4 class="text-xl font-semibold text-yellow-300 mb-3">🎯 Ejercicios de Aplicación</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 1: Números Pares</h5>
                        <p class="text-gray-200">La suma de tres números pares consecutivos es 84. Encuentra los números.</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Si x es el primer número par, los siguientes son x+2 y x+4</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 2: Reparto de Dinero</h5>
                        <p class="text-gray-200">Ana y Luis se reparten $500. Ana recibe $80 más que Luis. ¿Cuánto recibe cada uno?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Define x como lo que recibe una persona</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 3: Triángulo</h5>
                        <p class="text-gray-200">En un triángulo, el segundo lado mide 5 cm más que el primero, y el tercero mide el doble del primero. Si el perímetro es 37 cm, ¿cuánto mide cada lado?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Perímetro = suma de los tres lados</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 4: Entradas de Cine</h5>
                        <p class="text-gray-200">Las entradas de adulto cuestan $12 y las de niño $8. Se vendieron 50 entradas por $520. ¿Cuántas entradas de cada tipo se vendieron?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Usa el número total de entradas y el costo total</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 5: Tiempo de Viaje</h5>
                        <p class="text-gray-200">Un tren viaja 240 km en 3 horas. Si mantiene la misma velocidad, ¿cuánto tiempo tardará en recorrer 400 km?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Primero encuentra la velocidad, luego calcula el tiempo</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 6: Ahorro Mensual</h5>
                        <p class="text-gray-200">Pedro ahorra cada mes el triple de lo que gasta en entretenimiento. Si entre ahorro y entretenimiento destina $200 mensuales, ¿cuánto ahorra?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Si x es el gasto en entretenimiento, ¿cuánto es el ahorro?</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-blue-900 bg-opacity-30 p-3 rounded-lg border border-blue-500">
                    <h5 class="text-lg font-medium text-blue-300 mb-2">📋 Lista de Verificación</h5>
                    <p class="text-gray-200">Antes de resolver cada ejercicio:</p>
                    <ol class="mt-2 list-decimal pl-5 text-gray-300 text-sm">
                        <li>¿Entiendo completamente qué me piden encontrar?</li>
                        <li>¿He identificado todas las cantidades conocidas?</li>
                        <li>¿Puedo expresar todas las cantidades en términos de una variable?</li>
                        <li>¿La ecuación refleja correctamente la situación del problema?</li>
                        <li>¿Mi respuesta tiene sentido en el contexto del problema?</li>
                    </ol>
                </div>
                
                <div class="mt-4 bg-green-900 bg-opacity-30 p-3 rounded-lg border border-green-500">
                    <h5 class="text-lg font-medium text-green-300 mb-2">🎓 Tipos de Problemas Comunes</h5>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 text-sm">
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded text-center">Números</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded text-center">Dinero</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded text-center">Geometría</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded text-center">Mezclas</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded text-center">Movimiento</div>
                        <div class="bg-slate-600 bg-opacity-50 p-2 rounded text-center">Porcentajes</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Módulo 3 -->
        <div id="module3" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Problemas de Edades con Proyección Temporal</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Conceptos Fundamentales</h4>
                    <p class="text-gray-200">En problemas de edades con tiempo, recuerda:</p>
                    <ul class="mt-3 space-y-2 list-disc pl-5 text-gray-300">
                        <li><strong>La diferencia de edad es constante:</strong> Si Ana es 5 años mayor que Luis hoy, será 5 años mayor siempre</li>
                        <li><strong>Todos envejecen igual:</strong> En 10 años, todos tendrán 10 años más</li>
                        <li><strong>Las proporciones cambian:</strong> Si hoy A tiene el doble que B, en el futuro puede no ser así</li>
                    </ul>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-2 rounded text-sm">
                        <p class="text-teal-300">Clave: Define bien el momento temporal de referencia</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Tabla de Referencia Temporal</h4>
                    <p class="text-gray-200">Organiza la información en una tabla:</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <table class="w-full text-sm text-gray-300">
                            <thead class="text-teal-300">
                                <tr>
                                    <th class="text-left p-1">Persona</th>
                                    <th class="text-left p-1">Hace X años</th>
                                    <th class="text-left p-1">Ahora</th>
                                    <th class="text-left p-1">En X años</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-1">Persona A</td>
                                    <td class="p-1 text-yellow-300">a - x</td>
                                    <td class="p-1 text-teal-300">a</td>
                                    <td class="p-1 text-cyan-300">a + x</td>
                                </tr>
                                <tr>
                                    <td class="p-1">Persona B</td>
                                    <td class="p-1 text-yellow-300">b - x</td>
                                    <td class="p-1 text-teal-300">b</td>
                                    <td class="p-1 text-cyan-300">b + x</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejemplo: Edades Futuras</h4>
                    <p class="text-gray-200">Problema: "Dentro de 8 años, María tendrá el triple de la edad de su hijo. Si ahora María tiene 32 años, ¿qué edad tiene su hijo actualmente?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Paso 1: Organizar datos</p>
                        <p class="text-gray-300">• María ahora: 32 años</p>
                        <p class="text-gray-300">• Hijo ahora: x años</p>
                        <p class="text-cyan-100 mt-2">Paso 2: Proyección futura (dentro de 8 años)</p>
                        <p class="text-gray-300">• María: 32 + 8 = 40 años</p>
                        <p class="text-gray-300">• Hijo: x + 8 años</p>
                        <p class="text-cyan-100 mt-2">Paso 3: Plantear ecuación</p>
                        <p class="text-teal-300">40 = 3(x + 8)</p>
                        <p class="text-teal-300">40 = 3x + 24</p>
                        <p class="text-teal-300">16 = 3x</p>
                        <p class="text-teal-300">x = 5.33 años ≈ 5 años y 4 meses</p>
                        <p class="text-cyan-100 mt-2">Verificación: En 8 años: María 40, hijo 13.33 → 40 ≈ 3(13.33) ✓</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejemplo: Edades Pasadas</h4>
                    <p class="text-gray-200">Problema: "Hace 5 años, Pedro tenía la mitad de la edad que tiene ahora Ana. Si Pedro tiene actualmente 25 años, ¿qué edad tiene Ana?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Paso 1: Identificar datos</p>
                        <p class="text-gray-300">• Pedro ahora: 25 años</p>
                        <p class="text-gray-300">• Ana ahora: x años</p>
                        <p class="text-cyan-100 mt-2">Paso 2: Situación hace 5 años</p>
                        <p class="text-gray-300">• Pedro hace 5 años: 25 - 5 = 20 años</p>
                        <p class="text-gray-300">• Ana hace 5 años: x - 5 años</p>
                        <p class="text-cyan-100 mt-2">Paso 3: Ecuación</p>
                        <p class="text-gray-300">"Pedro tenía la mitad de la edad que tiene ahora Ana"</p>
                        <p class="text-teal-300">20 = x/2</p>
                        <p class="text-teal-300">x = 40 años</p>
                        <p class="text-cyan-100 mt-2">Verificación: Hace 5 años Pedro 20, Ana 35 → 20 = 40/2 ✓</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Ejemplo: Cambio de Proporciones</h4>
                    <p class="text-gray-200">Problema: "Actualmente, la edad de Carmen es el doble de la de Diego. Dentro de 12 años, Carmen tendrá solo 8 años más que Diego. ¿Qué edades tienen ahora?"</p>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-3 rounded-lg">
                        <p class="text-cyan-100">Paso 1: Variables</p>
                        <p class="text-gray-300">• Diego ahora: x años</p>
                        <p class="text-gray-300">• Carmen ahora: 2x años (doble)</p>
                        <p class="text-cyan-100 mt-2">Paso 2: Dentro de 12 años</p>
                        <p class="text-gray-300">• Diego: x + 12 años</p>
                        <p class="text-gray-300">• Carmen: 2x + 12 años</p>
                        <p class="text-cyan-100 mt-2">Paso 3: Nueva condición</p>
                        <p class="text-gray-300">"Carmen tendrá 8 años más que Diego"</p>
                        <p class="text-teal-300">(2x + 12) = (x + 12) + 8</p>
                        <p class="text-teal-300">2x + 12 = x + 20</p>
                        <p class="text-teal-300">x = 8 años</p>
                        <p class="text-cyan-100 mt-2">Respuesta:</p>
                        <p class="text-gray-300">Diego: 8 años, Carmen: 16 años</p>
                    </div>
                </div>
                
                <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                    <h4 class="text-xl font-semibold text-cyan-200 mb-2">Estrategias de Resolución</h4>
                    <p class="text-gray-200">Metodología para problemas temporales:</p>
                    <ol class="mt-3 space-y-2 list-decimal pl-5 text-gray-300">
                        <li><strong>Crea una tabla:</strong> Organiza personas vs tiempos</li>
                        <li><strong>Define una variable:</strong> Generalmente la edad actual de una persona</li>
                        <li><strong>Expresa otras edades:</strong> En términos de tu variable</li>
                        <li><strong>Aplica las condiciones temporales:</strong> Suma/resta años según corresponda</li>
                        <li><strong>Plantea la ecuación:</strong> Usando la condición dada</li>
                        <li><strong>Verifica en ambos tiempos:</strong> Actual y proyectado</li>
                    </ol>
                    <div class="mt-3 bg-slate-600 bg-opacity-30 p-2 rounded text-sm">
                        <p class="text-yellow-300">⚠️ Atención: Las edades deben ser números positivos y razonables</p>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Ejercicios Especializados -->
            <div class="mt-6 bg-slate-800 bg-opacity-60 p-5 rounded-xl">
                <h4 class="text-xl font-semibold text-yellow-300 mb-3">🎯 Ejercicios de Edades Temporales</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 1: Proyección Simple</h5>
                        <p class="text-gray-200">Dentro de 10 años, Laura tendrá 35 años. ¿Cuántos años tenía hace 5 años?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Calcula primero su edad actual</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 2: Relación Futura</h5>
                        <p class="text-gray-200">Dentro de 6 años, Roberto tendrá el triple de la edad que tiene ahora su hermana Sofía. Si Roberto tiene actualmente 18 años, ¿qué edad tiene Sofía?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: ¿Cuántos años tendrá Roberto dentro de 6 años?</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 3: Suma de Edades</h5>
                        <p class="text-gray-200">La suma de las edades de dos hermanos es 28 años. Dentro de 4 años, el mayor tendrá el doble de la edad del menor. ¿Qué edades tienen ahora?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Si x es la edad del menor, ¿cuál es la del mayor?</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 4: Pasado vs Presente</h5>
                        <p class="text-gray-200">Hace 8 años, la edad de Julia era un tercio de la que tiene ahora. ¿Cuál es la edad actual de Julia?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Si ahora tiene x años, hace 8 años tenía (x-8) años</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 5: Cambio de Proporciones</h5>
                        <p class="text-gray-200">Hoy, Andrés tiene 4 veces la edad de su hijo. Dentro de 20 años, tendrá solo el doble. ¿Qué edades tienen actualmente?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: La diferencia de edad siempre es la misma</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-700 bg-opacity-40 p-4 rounded-lg">
                        <h5 class="text-lg font-medium text-cyan-200 mb-2">Ejercicio 6: Tres Momentos</h5>
                        <p class="text-gray-200">Hace 5 años, Elena tenía 20 años. Dentro de 7 años, tendrá el doble de la edad actual de su primo. ¿Qué edad tiene actualmente su primo?</p>
                        <div class="mt-2 text-sm text-gray-400">
                            <p>Pista: Primero calcula la edad actual de Elena</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-purple-900 bg-opacity-30 p-3 rounded-lg border border-purple-500">
                    <h5 class="text-lg font-medium text-purple-300 mb-2">📊 Plantilla de Organización</h5>
                    <p class="text-gray-200">Para cada problema, completa esta tabla:</p>
                    <div class="mt-2 bg-slate-700 bg-opacity-50 p-3 rounded text-sm">
                        <div class="grid grid-cols-4 gap-2 text-center">
                            <div class="font-bold text-teal-300">Persona</div>
                            <div class="font-bold text-yellow-300">Hace __ años</div>
                            <div class="font-bold text-green-300">AHORA</div>
                            <div class="font-bold text-blue-300">En __ años</div>
                        </div>
                        <div class="grid grid-cols-4 gap-2 text-center mt-2 text-gray-300">
                            <div>A:</div><div>a - n</div><div>a</div><div>a + m</div>
                        </div>
                        <div class="grid grid-cols-4 gap-2 text-center text-gray-300">
                            <div>B:</div><div>b - n</div><div>b</div><div>b + m</div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 bg-red-900 bg-opacity-30 p-3 rounded-lg border border-red-500">
                    <h5 class="text-lg font-medium text-red-300 mb-2">🚫 Errores Frecuentes</h5>
                    <ul class="mt-2 space-y-1 text-gray-300 text-sm">
                        <li>• Confundir "hace X años" con "dentro de X años"</li>
                        <li>• No mantener consistencia en el punto de referencia temporal</li>
                        <li>• Olvidar que la diferencia de edad es constante</li>
                        <li>• No verificar que las edades sean lógicas en todos los tiempos</li>
                        <li>• Mezclar las condiciones de diferentes momentos</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Módulo 4 -->
        <div id="module4" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Problemas de Edades Avanzados</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @include('componentesclase4.modulo4.multiple-personas')
                @include('componentesclase4.modulo4.proporciones-razones')
                @include('componentesclase4.modulo4.casos-especiales')
                @include('componentesclase4.modulo4.sistemas-ecuaciones')
                @include('componentesclase4.modulo4.problemas-complejos')
                @include('componentesclase4.modulo4.estrategias-avanzadas')
            </div>
            
            <!-- Sección de Ejercicios Avanzados -->
            @include('componentesclase4.modulo4.ejercicios-avanzados')
        </div>

        <!-- Módulo 5 -->
        <div id="module5" class="module-content">
            <h3 class="text-2xl font-bold text-teal-300 mb-4">Estrategias Maestras y Aplicaciones Prácticas</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @include('componentesclase4.modulo5.tecnicas-verificacion')
                @include('componentesclase4.modulo5.errores-comunes')
                @include('componentesclase4.modulo5.aplicaciones-practicas')
                @include('componentesclase4.modulo5.estrategias-resolucion')
                @include('componentesclase4.modulo5.casos-especiales-verificacion')
                @include('componentesclase4.modulo5.sintesis-metodologica')
            </div>
            
            <!-- Sección de Evaluación y Práctica Final -->
            @include('componentesclase4.modulo5.evaluacion-final')
        </div>
    </div>
</div>
